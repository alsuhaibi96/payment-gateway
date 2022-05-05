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
use App\Models\Role;
use Illuminate\Support\Str;
use Mail;

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
        //   return redirect()->route('login')
        //   ->with(['success'=>' 
        //   قم بتسجيل الدخول !          
        //   ']);
    
        //   return back()->with(['error'=>'خطأ في التسجيل']);
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
                return redirect()->route('dashboard');
                
            
                if(Auth::user()->hasRole('Customer'))
                return redirect()->route('user_profile');
               
             
    
            
            }
        //     else if(!Auth::attempt(['email'=>$request->email,'is_email_verified'=>1])){
        //         return redirect()->route('login')->with(['message'=>
        //    'قم بتأكيد الايميل !'  
    
        //     ]);
        //     }

            else
                return redirect()->route('login')->with(['message'=>
          ' تأكد من إدخال بياناتك بشكل صحيح او قم بتأكيد الايميل'   ]);
    
                   
              }


    //         public function login(Request $request){
    //     try{
    //         $rules=[
    //             'email' => 'required|email',
    //             'password' => 'required|string|min:6',
    //         ];

    //         $validator = Validator::make($request->all(), $rules);
    //         $credentials=$request->only(['email','password']);
    //         $token=Auth::guard('api')->attempt($credentials);
    //         if ($validator->fails()) {
    //             $code=$this->returnCodeAccordingToInput($validator);
    //             return $this->returnValidationError($code,$validator);
    //         }
    //         if (! $token) {
    //             return $this->returnError('401','بيانات الدخول غير صحيحة');
    //         }
    //         $user=Auth::guard('api')->user();
    //         $user->api_token=$token;
    //         return $this->returnData('user',$user);
            

    //     }
    //     catch(\Exception $ex){
    //         return $this->returnError($ex->getCode(),$ex->getMessage());

    //     }
        
    // }
    /**
     * Register a User (customer) - API.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function register(Request $request ) {
        $validator = Validator::make($request->all(), [
            'first_name' => 'required|string|between:2,100',
            'middle_name' => 'required|string|between:2,100',
            'last_name' => 'required|string|between:2,100',
            'email' => 'required|string|email|max:100|unique:users',
            'password' => 'required|string|confirmed|min:6',
        ]);
        if($validator->fails()){
            return response()->json($validator->errors()->toJson(), 400);
        }
        $user = User::create(array_merge(
                $validator->validated(),
                    ['password' => bcrypt($request->password)]
                ));
         
       $user->attachRole('Customer');
                
        return response()->json([
            'message' => 'User successfully registered',
            'user' => $user
        ], 201);
    }

    /**
     * Log the user out (Invalidate the token).
     *
     * @return \Illuminate\Http\JsonResponse
     */
    // public function logout() {
    //     auth()->logout();
    //     return response()->json(['message' => 'User successfully signed out']);
    // }

    
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function logout() {
        Session::flush();
        Auth::logout();
  
        return Redirect('login');
    }
    /**
     * Refresh a token.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function refresh() {
        return $this->createNewToken(auth()->refresh());
    }
    /**
     * Get the authenticated User.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function userProfile() {
        return response()->json(auth()->user());
    }
    /**
     * Get the token array structure.
     *
     * @param  string $token
     *
     * @return \Illuminate\Http\JsonResponse
     */
    protected function createNewToken($token){
        return response()->json([
            'access_token' => $token,
            'token_type' => 'bearer',
            'expires_in' => auth()->factory()->getTTL() * 60,
            'user' => auth()->user()
        ]);
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
