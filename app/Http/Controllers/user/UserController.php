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
use App\Models\Credit_cards;
use App\Models\Role;
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

              'email.unique'=>'There is an email in the table',
              'confirm_password.same'=>'password do not match',

          ]);

          $user=new User();
          $user->first_name=$request->input('firstName');
          $user->middle_name=$request->input('middleName');
          $user->last_name=$request->input('lastName');
          $user->email=$request->input('email');
          $user->password= Hash::make($request->password);


          $user->public_key=$this->generate_string(25);
          $user->private_key=$this->generate_string(50);

          $user->save();

          $bank_account = new bank_account();
          $bank_account->user_id = $user->id;
          $bank_account->balance = 10000000.00;
          $bank_account->account_number=$this->generate_string(10);
          $bank_account->save();
          $credit_cards=new Credit_cards();
          $credit_cards->card_number=$this->generate_string(10);
          $credit_cards->card_holder=$user->first_name.' '.$user->middle_name.' '.$user->last_name;
          $credit_cards->expiration_mm=date('n');
          $credit_cards->expiration_yy=date('Y');
          $credit_cards->cvv=$this->generate_string(4);
          $credit_cards->bank_accounts_id=$bank_account->id;
          $credit_cards->save();
         
         
          
          if($user->save())
          $token = Str::random(64);
          $user->attachRole($roleName);

           UserVerify::create([
            'user_id' => $user->id, 
            'token' => $token
          ]);

      Mail::send('website.auth.email.emailVerificationEmail', ['token' => $token], function($message) use($request){
            $message->to($request->email);
            $message->subject('Email Verification Mail');
        });
       
       
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
                'email.required'=>'This field is required',
                'password.required'=>'This field is required',

            ]);

    
            if(Auth::attempt(['email'=>$request->email,'password'=>$request->password,'is_active'=>1,'is_email_verified'=>1])){
            
                if(Auth::user()->hasRole('Merchant'))
                return redirect()->route('home');
                
            
                if(Auth::user()->hasRole('Customer'))
                return redirect()->route('user_profile');
               
             
    
            
            }
   

            else
                return redirect()->route('login')->with(['message'=>'البيانات خاطئة او لم يتم تفعيل الايميل!']);}


   
  
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
    
}
