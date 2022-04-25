<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use App\Models\User;

class AuthController extends Controller
{
    //
    public function register(Request $request){

        Validator::validate($request->all(),[
            'name'=>['required','min:3','max:50'],
            'mail'=>['required','email','unique:users,email'],
            'password'=>['required','min:5'],
            'confirm_password'=>['same:password']


        ],[
            'name.required'=>'this field is required',
            'name.min'=>'can not be less than 3 letters', 
            'email.unique'=>'there is an email in the table',
            'email.required'=>'this field is required',
            'email.email'=>'incorrect email format',
            'password.required'=>'password is required',
            'password.min'=>'password should not be less than 3',
            'confirm_password.same'=>'password dont match',


        ]);

        $u=new User();
        $u->name=$request->name;
        $u->password=Hash::make($request->password);
        $u->email=$request->email;
       
        if($u->save()){
           // $u->attachRole('admin');
            return redirect()->route('index')
            ->with(['success'=>'user created successful']);
        }

      
       // return back()->with(['error'=>'can not create user']);

    }
}
