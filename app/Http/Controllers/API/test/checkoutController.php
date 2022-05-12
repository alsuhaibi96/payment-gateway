<?php

namespace App\Http\Controllers\api\test;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Controllers\api\test\checkoutValidatorController;
use App\Models\Orders_invoice;
use App\Http\Traits\general_trait;
use App\Models\bank_account;
use App\Models\Credit_cards;
use App\Models\FinancialTransaction;
use App\Models\PaymentInvoice;
use App\Models\User;

use Illuminate\Support\Facades\DB;

use App\Models\Products;
use App\Models\Transaction;
use App\Models\TransactionOverView;
use Dotenv\Exception\ValidationException;
use Illuminate\Support\Facades\Redirect;

class checkoutController extends Controller

{    
    
    use general_trait;
    public function payment_order(Request $request){
        $data=json_decode($request->getContent(),true);
       
    //$req->input()
        
        $info=array('refrence_id'=>1,'products'=>[array('id'=>1,'name'=>'laptop','quantity'=>2,'unint_amount'=>3000),array('id'=>3,'name'=>'laptop','quantity'=>5,'unint_amount'=>100)]);
        $private_key=$request->header('private-key');
        $public_key=$request->header('public-key');
        $products=$data['products'];//json_decode($request->input('products'),true);

        $order_reference=$data['order_reference'];
        $total_amount=$data['total_amount'];
        $currency=$data['currency'];
        $meta_data=$data['meta_data'];
        $sucess_url=$data['success_url'];
        $cancel_url=$data['cancel_url'];
        //$order_details=$request->all();

     


        if(!is_array($products))
        return $this->errors(300,5100,'invalid products array format');
        if($private_key==null|| $public_key==null)
        return $this->errors(500,5200,'invalid credintical keys');

        if($private_key=='rRQ26GcsZzoEhbrP2HZvLYDbn9C9et' && $public_key=='HGvTMLDssJghr9tlN9gr4DVYt0qyBy')
        {
           // return $this->create_order($order_details,$products,$public_key,$private_key);
            return $this->create_order($data,$products,$public_key,$private_key);
        }
        else
        {
            return $this->returnError('408',"تاكد من كتابة البيانات بشكل صحيح");
        }
        //  return response($this->create_order($info),200);

    }
    public function generate_string($strength = 16) {
        $input = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $input_length = strlen($input);
        $random_string = '';
        for($i = 0; $i < $strength; $i++) {
            $random_character = $input[mt_rand(0, $input_length - 1)];
            $random_string .= $random_character;
        }
     
        return $random_string;
    }
    public function create_order($order_details,$products,$public_key,$private_key){
        $merchant_data=User::where('private_key',$private_key)->first();
        $feedback=array("invoice_referance"=>$this->generate_string(10),"expires_on"=>date("h:i:s a m/d/Y",strtotime('+24 hours')));
        $order_invoice_url=
        array("next_url"=>"http://localhost:8000/api/test/merchant/do_payment_order/".
        $feedback['invoice_referance'],
        "cancel_next_url"=>"http://localhost:8000/api/test/merchant/cancel_payment_order/".
        $feedback['invoice_referance']);
       
        $orders=array_merge($feedback,$order_details,$order_invoice_url);

    //    return $orders;

        $invoice=new Orders_invoice;

        $invoice->invoice_referance=$orders['invoice_referance'];
        $invoice->user_id=$merchant_data->id;
        $invoice->products=$orders['products'];
        $invoice->order_reference=$orders['order_reference'];
        $invoice->total_amout=$orders['total_amount'];
        $invoice->currency=$orders['currency'];
        $invoice->next_url=$orders['next_url'];
        $invoice->cancel_next_url=$orders['cancel_next_url'];
        $invoice->success_url=$orders['success_url'];
        $invoice->cancel_url=$orders['cancel_url'];

        
        if($invoice->save()){
            $products_ids=array_column($products,'id');
            $products_names=array_column($products,'product_name');
            $products_quantity=array_column($products,'quantity');
            $products_unit_amounts=array_column($products,'unit_amount');
    
            
    
            for($i=0;$i<count($products_ids);$i++){
    
                $productsArr = array(
                    'product_id' =>$products_ids[$i],
                    'product_name'=> $products_names[$i],
                    'quantity'=> $products_quantity[$i],
                    'unit_amount'=> $products_unit_amounts[$i],
                    'invoice_id'=>  $invoice->id,

                );
    
               
                Products::insert($productsArr);
    
            }
           
            
            return $this->returnData('invoice',$invoice,'invoice created successfuly');

        }
        
        

    }
    public function errors($response_code,$code,$message){
        return response()->json(array('code'=>$code,'message'=>$message),$response_code);
    }
    public function do_payment($invoice_referance){
        $invoice_data=Orders_invoice::where('invoice_referance',$invoice_referance)->get();
     $invoice_id= $invoice_data[0]["id"];
       $products=$this->getProducts($invoice_id);
      
         
     

        return view('paymentView.paymentView' ,compact('invoice_data','products'));

    }
    public function cancel_payment($invoice_referance){
        $invoice_data=Orders_invoice::where('invoice_referance',$invoice_referance)->first();
        
       

        if(!$invoice_data){
            // return $this->returnData('delete sone',$data->id,"delete");
             return $this->returnError('4070','هذا الطلب قد تم حذفة من قبل');
        }
        else
        {
            $data=Orders_invoice::find($invoice_data->id);
            $cancel_url=$invoice_data->cancel_url;
            $data->delete();
            $success_deleted_msg= $this->returnSuccess('تم حذف الطلب بنجاح');
            return Redirect::away($cancel_url);
            
            

        }     
        

        

    }

    
    public function Financial_processing(Request $request){
        
        
        
        $invoice_referance=$request->input('invoice_referance');
        
        $product_name=$request->input('product_name');
        $total_amout=$request->input('total_amount');
        $currency=$request->input('currency');
        $card_number=$request->input('card_number');
        $card_holder=$request->input('card_holder');
        $expiration_mm=$request->input('expiration_mm');
        $expiration_yy=$request->input('expiration_yy');
        $success_url=$request->input('success_url');
        $cvv=$request->input('cvv');
        $Payment_confirmation_data=$request->all();
        $client_card_data=Credit_cards::where('card_number',$card_number)->first();
        $client_banck_acount_id=$client_card_data->id;

        $client_account_data=bank_account::where('id',$client_banck_acount_id)->first();

        $client_account_number=$client_account_data->account_number;
     

        $client_balance=$client_account_data->balance;
        $client_balance=(float)$client_balance;
        $total_amout=(float)$total_amout;
        $remaining_balance=$client_balance-$total_amout;
        if($remaining_balance >0){
            $merchant_id=1;
            $merchant_data=bank_account::where('user_id',$merchant_id)->first();
            $merchant_account_number=$merchant_data->account_number;
            $merchant_balance=$merchant_data->balance;
            $merchant_balance=(float)$merchant_balance;
            $merchant_data->balance=$merchant_balance+$total_amout;
            $merchant_data->save();
            $client_account_data->balance=$remaining_balance;
            $client_account_data->save();

            $paymentinvoice=new PaymentInvoice();
            $order_invoice_data=Orders_invoice::where('invoice_referance',$invoice_referance)->first();
            $paymentinvoice->order_invoice_id=$order_invoice_data->id;
            $paymentinvoice->user_id=$order_invoice_data->user_id;
            $paymentinvoice->amount_due=$total_amout;
            $paymentinvoice->amount_paid=$total_amout;
            $paymentinvoice->status='Payment done';
            $paymentinvoice->save();
            $transaction=new Transaction();
            $transaction->payment_invoices_id=$paymentinvoice->id;
            $transaction->description='مدفوعات المشتريات';
            $transaction->transaction_date=date("Y-m-d H:i:s");
            $transaction->save();

            $sales_transaction=new Transaction();
            $sales_transaction->payment_invoices_id=$paymentinvoice->id;
            $sales_transaction->description='استحقاق المبيعات';
            $sales_transaction->transaction_date=date("Y-m-d H:i:s");
            $sales_transaction->save();

            $journal_entries_merchant_right=new FinancialTransaction();
            $journal_entries_merchant_right->transaction_id=$transaction->id;
            $journal_entries_merchant_right->financial_acount_id=3;
            $journal_entries_merchant_right->entry_type="Debit";
            $journal_entries_merchant_right->amount=$total_amout;
            $journal_entries_merchant_right->save();

            $journal_entries_merchant_left=new FinancialTransaction();
            $journal_entries_merchant_left->transaction_id=$transaction->id;
            $journal_entries_merchant_left->financial_acount_id=1;
            $journal_entries_merchant_left->entry_type="Cred";
            $journal_entries_merchant_left->amount=$total_amout;
            $journal_entries_merchant_left->save();

            $journal_entries_customer_right=new FinancialTransaction();
            $journal_entries_customer_right->transaction_id=$sales_transaction->id;
            $journal_entries_customer_right->financial_acount_id=2;
            $journal_entries_customer_right->entry_type="Debit";
            $journal_entries_customer_right->amount=$total_amout;
            $journal_entries_customer_right->save();


            $journal_entries_customer_left=new FinancialTransaction();
            $journal_entries_customer_left->transaction_id=$sales_transaction->id;
            $journal_entries_customer_left->financial_acount_id=4;
            $journal_entries_customer_left->entry_type="Cred";
            $journal_entries_customer_left->amount=$total_amout;
            $journal_entries_customer_left->save();


            $transactionoverview=new TransactionOverView();
            $transactionoverview->trans_id=$this->generate_string(15);
            $transactionoverview->user_id=$client_account_data->id;
            $transactionoverview->bank_account_id=$client_banck_acount_id;
            $transactionoverview->type='pay';
            $transactionoverview->amount=$total_amout;
            $transactionoverview->currency=$currency;
            $transactionoverview->fee='0';
            $transactionoverview->fromAccount=$client_account_number;
            $transactionoverview->client_name=$client_card_data->card_holder;
            $transactionoverview->toAccount=$merchant_account_number;
            $transactionoverview->merchant_name=$merchant_data->first_name."".$merchant_data->last_name ;
            $transactionoverview->status='Done Payment';

            $transactionoverview->save();

            $invoice_sender=PaymentInvoice::where('id',$paymentinvoice->order_invoice_id)->get();

            $invoice_id=  $order_invoice_data["id"];


            // return Redirect::away($success_url)->with(['PaymentInvoice' => $invoice_sender]);
            // return $this->returnData('Balance Left',$invoice_sender,'Payment Process Completed Successfully');


        }
        else{
            return $this->returnError('4011','You do not Have enough balance');
        }
          $products= $this->getProducts($invoice_id);
        return $this->returnData('success',$client_account_number,array("Products:"=>$products),'Done Payment Successfully');
        


    }
    public function get_acounts(){
        return bank_account::find(1)->Credit_cards;
    }
    public function getProducts($invoice_id){

        $products =DB::table('products')->where('invoice_id',$invoice_id)->get();
        return $products;
    }
    public function getinvoice(){
        $item=User::with(['PaymentInvoice'])->get();
        
        
        
       
        return $item;

    }
}
