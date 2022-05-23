<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use App\Http\Traits\general_trait;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\bank_account;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

use App\Models\auth\UserVerify;
use App\Models\user_profile;

use App\Models\Credit_cards;
use App\Models\FinancialTransaction;

use App\Models\Role;
use App\Models\Transaction;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon as Carbon;

use Illuminate\Support\Str;
use Mail;
use Session;

class UserController extends Controller
{
    use general_trait;
    public function __construct() {
        // $this->middleware('auth:api', ['except' => ['login', 'register']]);
    }

   /**
     * Display registeration view ( customer or merchant)
     *
     */
    public function viewRegisteration(){
        return view('website.register.registeration');

    }
 

   /**
     * Display login view ( customer or merchant)
     *
     */
    public function viewLogin(){
        return view('website.login.login');

    }

 /**
    *  Check for user radio input if 1 register as a merchant if not register as a customer
    */
    public function viewRegisterationPage(Request $request){

        if(($request->radio1)==1)
        return  redirect()->route('customer_register');
        return  redirect()->route('merchant_register');

       }

       /**
     * Display register view
     * @return \Illuminate\Http\Response;
     */
    public function viewMerchantRegister(){
        return view('website/merchant/register_merchant');
    }

    /**
     * Display register view
     * @return \Illuminate\Http\Response;
     */
    public function viewCustomerRegister(){
        return view('website/customer/register_customer');
    }




   /** create customer method
    *
    */
    public function createCustomer(Request $request){
        return  $this->registerMerchantOrCustomer($request,'Customer');
      }

   /** create Merchant method
      *
      */
      public function createMerchant(Request $request){
          return  $this->registerMerchantOrCustomer($request,'Merchant');
        }


          /** Create Merchant or Customer method
      *
      */
      public function registerMerchantOrCustomer (Request $request , $roleName){
          Validator::Validate($request->all(),[
              'firstName'=>['string','required','min:3','max:30',],
              'middleName'=>['string','required','min:3','max:30',],
              'lastName'=>['string','required','min:3','max:30'],
              'email'=>['email','required','min:3','unique:users,email'],
              'password'=>['required','min:5','same:confirm_password'],


          ],[

              'email.unique'=>'الايميل مسجل من قبل',
              'confirm_password.same'=>'كلمة السر ليست مطابقة',

          ]);

          $user=new User();
          $user->first_name=$request->input('firstName');
          $user->middle_name=$request->input('middleName');
          $user->last_name=$request->input('lastName');
          $user->email=$request->input('email');
          $user->password= Hash::make($request->password);


          $user->public_key=$this->generate_string(25);
          $user->private_key=$this->generate_string(50);
          if($user->save()){
            $user->attachRole($roleName);
            $this->sendEmailVerification($request,$user);
        }
 
        
        //   $user->save();

        $userProfile = new user_profile();
        $userProfile->user_id=$user->id;
        $userProfile->save();



          $bank_account = new bank_account();
          $bank_account->user_id = $user->id;
          $bank_account->balance = 10000000.00;
          $bank_account->account_number=$this->generate_string(10);
          $bank_account->save();
          $credit_cards=new Credit_cards();
          $credit_cards->card_number='4111'.$this->generate_num(12);
          $credit_cards->card_holder=$user->first_name.' '.$user->middle_name.' '.$user->last_name;
          $credit_cards->expiration_mm=date('n');
          $credit_cards->expiration_yy=date('Y');
          $credit_cards->cvv=$this->generate_num(3);
          $credit_cards->bank_accounts_id=$bank_account->id;
          $credit_cards->save();
         
          $sales_transaction = new Transaction();
          $sales_transaction->payment_invoices_id = 0;
          $sales_transaction->user_id = $user->id;
          $sales_transaction->description = ' ايداع نقدي الى الحساب';
          $sales_transaction->transaction_date = date("Y-m-d H:i:s");
          $sales_transaction->save();
  
          $journal_entries_merchant_right = new FinancialTransaction();
          $journal_entries_merchant_right->transaction_id = $sales_transaction->id;
          $journal_entries_merchant_right->financial_acount_id = 3;
          $journal_entries_merchant_right->bank_acount_id = $bank_account->id;
          $journal_entries_merchant_right->account_number = $bank_account->account_number;
          $journal_entries_merchant_right->entry_type = "Debit";
          $journal_entries_merchant_right->amount = $bank_account->balance;
          $journal_entries_merchant_right->save();
  
          $journal_entries_merchant_left = new FinancialTransaction();
          $journal_entries_merchant_left->transaction_id = $sales_transaction->id;
          $journal_entries_merchant_left->financial_acount_id = 4;
          $journal_entries_merchant_left->bank_acount_id = 1;
          $journal_entries_merchant_left->account_number = 'hadiahmedsofan';
          $journal_entries_merchant_left->entry_type = "Cred";
          $journal_entries_merchant_left->amount = $bank_account->balance;
          $journal_entries_merchant_left->save();
          
     
         
       
          
       
      return redirect()->route("login")->with(['success'=>'تم إرسال رسالة تأكيد لحسابك على الايميل!']);
      
      }


       /**
     * Write code on Method
     *
     * @return response()
     */
    public function verifyAccount($token)
    {
        $verifyUser = UserVerify::where('token', $token)->first();
  
        $message = 'Sorry your email cannot be identified.';
  
        if(!is_null($verifyUser) ){
            $user = $verifyUser->user;
              
            if(!$user->is_email_verified) {
                $verifyUser->user->is_email_verified = 1;
                $verifyUser->user->save();
                $message = "تم تأكيد ايميلك , يمكنك تسجيل الدخول";
            } else {
                $message = "تم تأكيد ايميلك من قبل , قم بتسجيل الدخول!";
            }
        }
  
      return redirect()->route('login')->with(['success'=>
    $message
              ]);
    }
    /**
     * Send email verification method (when registering the first time )
     */
    public function sendEmailVerification($request,$user){
        $token = Str::random(64);

        UserVerify::create([
            'user_id' => $user->id, 
            'token' => $token
          ]);

          try{
        Mail::send('website.auth.email.emailVerificationEmail', ['token' => $token], function($message) use($request){
            $message->to($request->email);
            $message->subject('Email Verification Mail');
        });}
        catch(Exception $ex)
        {
            return 'email failed to be sent';

        }
      
    }

       /**
     * Write code on Method
     *
     * @return response()
     */
    public function dashboard()
    {
        if(Auth::check()){
            return view('dashboard');
        }
  
        return redirect()->route("login")->with('message', 'no accesss');
    }

         /**
          * login as a merchant or customer
          */
           public function customLogin(Request $request){

            Validator::validate($request->all(),[
                'email'=>['email','required','min:3','max:50'],
                'password'=>['required','min:5']

            ],[
                'email.required'=>'هذا الحقل مطلوب',
                'password.required'=>'هذا الحقل مطلوب',

            ]);
    
            if(Auth::attempt(['email'=>$request->email,'password'=>$request->password,'is_active'=>1,'is_email_verified'=>1])){
              
        
                if(Auth::user()->hasRole('Customer'))
                {
                    $this->notifyIfNew();
                    return redirect()->route('customer_dashboard');
                }                
                if(Auth::user()->hasRole('Merchant'))
                {
                    $this->notifyIfNew();
                return redirect()->route('merchant_dashboard');
               
                 }
                  if(Auth::user()->hasRole('Super Admin'))
               return redirect()->route('admin_dashboard');
    
            }
          else if(!$this->checkVerification($request)==1){
        
               return redirect()->route('login')->with(['resendLink'=>'again']);

            }


            else
                return redirect()->route('login')->with(['message'=>'البيانات خاطئة !']);}


   
  
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function logout() {
        Session::flush();
        Auth::logout();
  
        return redirect()->route('login');
    }
    public function notifyIfNew(){
        if(Auth::user()->login_count==0)
        notify()->success('تم ايداع مبلغ 10000000 دولار الى حسابك','تهانينا');
        $this->countLogins();
    }
   
    public function countLogins(){
        $user=new User();
        $logins=User::select('login_count')->where('id',Auth::user()->id)->first();
        $val=$logins->login_count+=1;
        User::where('id',Auth::user()->id)->update(array('login_count'=>$val));
           
    }
 public function checkVerification($request){
       $val=User::select('is_email_verified')->where('email',$request->email)->first();
     return $val['is_email_verified'];
       
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
    public function generate_num($strength = 12) {
        $input = '0123456789';
        $input_length = strlen($input);
        $random_string = '';
        for($i = 0; $i < $strength; $i++) {
            $random_character = $input[mt_rand(0, $input_length - 1)];
            $random_string .= $random_character;
        }
     
        return $random_string;
    }
 
    public function sendLinkEmail(){
            return view('website.auth.resetEmailForm');
    }

    /**
     * Send Email verification again
     * 
     */
    public function sendEmailAgain(Request $request)
    {
        $request->validate([
            'email' => 'required|email|exists:users',
        ]);

        $token = Str::random(64);
     $userId=User::select('id')->where('email',$request->email)->first();
 
        DB::table('users_verify')->insert([
            'user_id' => $userId['id'],
            // 'email' => $request->email, 
            'token' => $token, 
            'created_at' => Carbon::now()
          ]);

        Mail::send('website.auth.email.emailVerificationEmail', ['token' => $token], function($message) use($request){
            $message->to($request->email);
            $message->subject('Email Verification');
        });

        return redirect()->route('login')->with('success', 'لقد أرسلنا رابط التفعيل الى البريد الإلكتروني!');
    }
}
