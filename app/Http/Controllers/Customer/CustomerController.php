<?php

namespace App\Http\Controllers\Customer;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Redirect;



use App\Models\User;
use App\Models\bank_account;

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
         'transfer_desc'=>['required','min:5'    ]
        ],
    );

    $email=$request->input('email');
    $money=$request->input('transfer_money');
    $description=$request->input('transfer_desc');

   if($this->currentBalance()<=1000){
     $balanecError="رصيدك غير كافي";
    $validator->errors()->add('customError',$balanecError);
    return Redirect::back()->withInput()->withErrors($validator);
    }
    elseif($validator->fails()){
        return Redirect::back()->withInput()->withErrors($validator);
        }


  else { 
   $value= $this->getAnotherBalance($email);
   $total_balance=$value+=$money;
   $recieverID=$this->getAnotherUsersId($email);
   bank_account::where('user_id',$recieverID)->update(array('balance'=>$total_balance));

  }
  return redirect()->route('transfer')->with(['success'=>'تم التحويل بنجاح']);
 

  
    }


}
