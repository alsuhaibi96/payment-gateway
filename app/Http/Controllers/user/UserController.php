<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use App\Http\Traits\general_trait;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

use App\Models\Role;

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


          if($user->save())
        $user->attachRole($roleName);
          return redirect()->route('view_login')
          ->with(['success'=>'
          قم بتسجيل الدخول !
          ']);

          return back()->with(['error'=>'خطأ في التسجيل']);
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

            if(Auth::attempt(['email'=>$request->email,'password'=>$request->password,'is_active'=>1])){


                if(Auth::user()->hasRole('Merchant'))
                return view('merchant_dashboard/home');



                if(Auth::user()->hasRole('Customer'))
                return view('customer_dashboard/home');


            }
            else {
                return redirect()->route('login')->with(['message'=>
    'تأكد من إدخال بياناتك بشكل صحيح'

            ]);
            }

              }
            public function login(Request $request){
        try{
            $rules=[
                'email' => 'required|email',
                'password' => 'required|string|min:6',
            ];

            $validator = Validator::make($request->all(), $rules);
            $credentials=$request->only(['email','password']);
            $token=Auth::guard('api')->attempt($credentials);
            if ($validator->fails()) {
                $code=$this->returnCodeAccordingToInput($validator);
                return $this->returnValidationError($code,$validator);
            }
            if (! $token) {
                return $this->returnError('401','بيانات الدخول غير صحيحة');
            }
            $user=Auth::guard('api')->user();
            $user->api_token=$token;
            return $this->returnData('user',$user);


        }
        catch(\Exception $ex){
            return $this->returnError($ex->getCode(),$ex->getMessage());

        }

    }
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
    public function logout() {
        auth()->logout();
        return response()->json(['message' => 'User successfully signed out']);
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
}
