<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Traits\general_trait;
use App\Models\Admin\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class AdminController extends Controller
{
    use general_trait;
    public function index(){
        $admins=Admin::select('id','name')->get();
        if(!$admins)
        {
           return $this->returnError('001','no admin found');
        }
        return $this->returnData('admin',$admins,'successfull');
        
    }
    public function login(Request $request){
        try{
            $rules=[
                'email' => 'required|email',
                'password' => 'required|string|min:6',
            ];
            $validator = Validator::make($request->all(), $rules);
            $credentials=$request->only(['email','password']);
            $token=Auth::guard('admins')->attempt($credentials);
            if ($validator->fails()) {
                $code=$this->returnCodeAccordingToInput($validator);
                return $this->returnValidationError($code,$validator);
            }
            if (! $token) {
                return $this->returnError('401','بيانات الدخول غير صحيحة');
            }
            $admin=Auth::guard('admins')->user();
            $admin->api_token=$token;
            return $this->returnData('admin',$admin);

        }
        catch(\Exception $ex){
            return $this->returnError($ex->getCode(),$ex->getMessage());

        }
        
    }
}
