<?php

namespace App\Http\Controllers\api\test;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Controllers\api\test\checkoutValidatorController;
use App\Models\Orders_invoice;
use App\Http\Traits\general_trait;
use App\Models\User;

use Illuminate\Support\Facades\DB;

use App\Models\Products;


use Dotenv\Exception\ValidationException;


class checkoutController extends Controller

{    
    
    use general_trait;
    public function payment_order(Request $request){
    
        
        $info=array('refrence_id'=>1,'products'=>[array('id'=>1,'name'=>'laptop','quantity'=>2,'unint_amount'=>3000),array('id'=>3,'name'=>'laptop','quantity'=>5,'unint_amount'=>100)]);
        $private_key=$request->header('private_key');
        $public_key=$request->header('public_key');
        $products=json_decode($request->input('products'),true);

        $order_reference=$request->input('order_reference');
        $total_amount=$request->input('total_amount');
        $currency=$request->input('currency');
        $meta_data=$request->input('meta_data');
        $sucess_url=$request->input('success_url');
        $cancel_url=$request->input('cancel_url');
        $order_details=$request->all();

     


        if(!is_array($products))
        return $this->errors(300,5100,'invalid products array format');
        if($private_key==null|| $public_key==null)
        return $this->errors(500,5200,'invalid credintical keys');

        if($private_key=='rRQ26GcsZzoEhbrP2HZvLYDbn9C9et' && $public_key=='HGvTMLDssJghr9tlN9gr4DVYt0qyBy')
        {
            return $this->create_order($order_details,$products,$public_key,$private_key);
        }
        else
        {
            return $this->returnError('408',"تاكد من كتابة البيانات بشكل صحيح");
        }
         return response($this->create_order($info),200);

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
        array("success_url"=>"http://localhost:8000/api/test/merchant/do_payment_order/".
        $feedback['invoice_referance'],
        "cancel_url"=>"http://localhost:8000/api/test/merchant/cancel_payment_order/".
        $feedback['invoice_referance']."/cancel_payment");

        $orders=array_merge($feedback,$order_details,$order_invoice_url);
        $invoice=new Orders_invoice();

        $invoice->invoice_referance=$orders['invoice_referance'];
        $invoice->user_id=$merchant_data->id;
        $invoice->products=$orders['products'];
        $invoice->order_reference=$orders['order_reference'];
        $invoice->total_amout=$orders['total_amout'];
        $invoice->currency=$orders['currency'];
        $invoice->success_url=$orders['success_url'];
        $invoice->cancel_url=$orders['cancel_url'];



        
        if($invoice->save()){
            $products_ids=array_column($products,'id');
            $products_names=array_column($products,'product_name');
            $products_quantity=array_column($products,'quantity');
            $products_unit_amounts=array_column($products,'unit_amount');
    
           
           
    
            for($i=0;$i<count($products_ids);$i++){
    
                $productsArr[] = [
                    'product_id' =>$products_ids[$i],
                    'product_name'=> $products_names[$i],
                    'quantity'=> $products_quantity[$i],
                    'unit_amount'=> $products_unit_amounts[$i],
                    'invoice_id'=>  $invoice->id,

                ];
    
       
    
            }
            
            Products::insert($productsArr);
            return $this->returnData('invoice',$invoice,'invoice created successfuly');

        }
        
        

    }
    public function errors($response_code,$code,$message){
        return response()->json(array('code'=>$code,'message'=>$message),$response_code);
    }
    public function do_payment($invoice_referance){
        $invoice_data=Orders_invoice::where('invoice_referance',$invoice_referance)->get();
    

        $products = Orders_invoice::find(1)->productsGet;
   

        return view('paymentView.paymentView' ,compact('invoice_data','products'));

    }
}
