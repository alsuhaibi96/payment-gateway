<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use App\Http\Traits\general_trait;
use Illuminate\Http\Request;
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
        return view('website.registeration');
 
    }
 
 /**
    *  Check for user radio input if 1 register as a merchant if not register as a customer
    */
    public function viewRegisterationPage(Request $request){
        
        if(($request->radio1)==1)
        return  redirect()->route('merchant_register');
        return  redirect()->route('customer_register');
               
       }

       /**
     * Display register view
     * @return \Illuminate\Http\Response;
     */
    public function viewMerchantRegister(){
        return view('website/merchant/add_merchant');
    }
    
    /**
     * Display register view
     * @return \Illuminate\Http\Response;
     */
    public function viewCustomerRegister(){
        return view('website/customer/add_customer');
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
     * Register a User (admin , merchant , customer).
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function register(Request $request ) {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|between:2,100',
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
