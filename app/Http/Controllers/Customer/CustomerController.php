<?php

namespace App\Http\Controllers\Customer;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Redirect;





use App\Models\User;
use App\Models\bank_account;
use App\Models\credit_cards;

use App\Models\MoneyTransfer;

use Carbon\Carbon as Carbon;
use Illuminate\Support\Facades\DB;
/**
 * Customer Controller 
 */
class CustomerController extends Controller
{

    /**
     * Customer view and data
     */
    public function viewDashboard(){
        return view('customer_dashboard.home');
    }

    public function showTransferDetails(){
      return view('customer_dashboard.transfer_details');
  }

    public function getUserId() {
      return    $userId=Auth::user()->id;
    }

    public function currentBalance() {
        $value= DB::select('SELECT balance from bank_accounts where user_id=?',[$this->getUserId()]);

        foreach($value as $val){
         $val=$val->balance;
        }
         return $val;  
      }
      public function currentReceiverSingleData($data,$email) {
        $value= DB::select('SELECT $data from users where email=?',[$email]);

         return $val;  
      }

    public function getData(){
        $userId=$this->getUserId();
      $data=User::with('bank_accounts')->where('id',$userId)->get()->first();


     return view('layout.customer_dashboard',['data'=>$data]);

    }

/**
 * Return le balance
 */
public function getAnotherBalance($email){
  $value=DB::select('SELECT s.balance FROM users u inner join bank_accounts s on u.id = s.user_id WHERE u.email =?',[$email]);
  foreach($value as $val){
   $val= $val->balance;
}
   return $val;

}

/**
 * get another user's id
 */

 public function getAnotherUsersId($email){
     $value=DB::select('SELECT id from users where email=?',[$email]);
    foreach($value as $val){
         $val=$val->id;
    }
   return $val;
 }
    /**
     * 
     * The method that transfers between accounts
     */
    public function transferMoney(Request $request){
        $userId=$this->getUserId();

      $validator=Validator::make($request->all(),
        [ 'email'=>['required','min:3','email','not_in:'.auth::user()->email],
         'transfer_money'=>['required','numeric','max:600000','min:1000' ],
         'transfer_desc'=>['required','min:10']
        ],
        [
        'email.required'=>' الحقل مطلوب',
        'email.not_in'=>'هذا ايميلك المسجل به الآن !',
        'transfer_money.required'=>' الحقل مطلوب',
        'transfer_money.numberic'=>'قيمة رقمية',
        'transfer_money.max'=>'ادخل مبلغ اقل من 600000',
        'transfer_money.min'=>'ادخل مبلغ اكبر من 1000',
        'transfer_desc.required'=>'الحقل مطلوب',
        'transfer_desc.min'=>'يجب ادخال اكثر من عشرة احرف',

              ]
    );

    $email=$request->input('email');
    $money=$request->input('transfer_money');
    $description=$request->input('transfer_desc');
    $tax=200;

   if($this->currentBalance()<=1000){
     $balanecError="رصيدك غير كافي";
    $validator->errors()->add('customError',$balanecError);
    return Redirect::back()->withInput()->withErrors($validator);
    }
    elseif($validator->fails()){
        return Redirect::back()->withInput()->withErrors($validator);
        }


   $value= $this->getAnotherBalance($email);
   $total_balance=$value+=$money;
   $recieverID=$this->getAnotherUsersId($email);

   $date=Carbon::now();
   $date=$date->toDateTimeString();
   bank_account::where('user_id',$recieverID)->update(array('balance'=>$total_balance));

  return $this->transferredMoneyDetails($email,$money,$description,$date,$tax);
 
 

  
    }

    /**
     * Get the details of the transferred money (bill shape)
     */
public function transferredMoneyDetails($email,$money,$description,$date,$tax){
$userId= $this->getUserId();

$receiver_id=$this->getAnotherUsersId($email);
$sender=User::with(['profile'])->find($userId);
$receiver=User::with(['profile'])->find($receiver_id);

 
 //insert transaction of money transfers
 $moneyTransferred =new MoneyTransfer();

 $moneyTransferred->user_id=$userId;
 $moneyTransferred->sender_name=$sender['first_name'].' '.
 $sender['middle_name'].' '.$sender['last_name'];
 $moneyTransferred->sender_phone_number=$sender['profile']['phone'];
 $moneyTransferred->receiver_name=$receiver['first_name'].' '.
 $receiver['middle_name'].' '.$receiver['last_name'];
 $moneyTransferred->receiver_email=$receiver['email'];
 $moneyTransferred->receiver_phone_number=$receiver['profile']['phone'];
 $moneyTransferred->money_transferred=$money;
 $moneyTransferred->transferring_date=$date;
 $moneyTransferred->description=$description;
 $moneyTransferred->tax=$tax;
 $moneyTransferred->currency="dollar";


 
if($moneyTransferred->save())
$items=json_decode($moneyTransferred,true);

return view('customer_dashboard.transfer_details',compact('items'));



  return redirect()->route('transfer')->with(['error'=>'فشل في عملية التحويل']);

}


public function bank_account(){
  $customer=Auth::user();
  $bank_acount=bank_account::where('user_id',$customer->id)->first();
  $account_num=$bank_acount->account_number;
  $card_info=credit_cards::where('bank_accounts_id',$bank_acount->id)->first();
  $card_num=$card_info->card_number;
  $card_holder=$card_info->card_holder;
  $cvv=$card_info->cvv;
  $expiration_yy=$card_info->expiration_yy;
  $expiration_mm=$card_info->expiration_mm;
  return view('customer_dashboard.customer_bank_account_details',compact('bank_acount','card_info'));
}

public function update_account(Request $request){
  $validator = Validator::make($request->all(), [
      'cvv' => ['required','max:3'],
  ]);
  $cvv=$request->input('cvv');
  Credit_cards::where('id',$request->id)->update(array('cvv'=>$cvv));
  return redirect()->back();
}

