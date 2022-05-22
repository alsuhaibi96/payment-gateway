<?php

namespace App\Http\Controllers;

use App\Models\bank_account;
use App\Models\Role;
use App\Models\TransactionOverView;
use App\Models\User;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class AdminDashController extends Controller
{
    //
    public function show_user(){
        $users =User::all();
            // return response($users);
            
            $roles = Role::pluck('name')->all();
        return view('admin_dashboard.users',['allUsers'=>$users, 'roles'=>$roles]);

    }
    public function Transactions(){
        $data=bank_account::select('balance')->get();
        $transactions=TransactionOverView::all();
        // return response($transactions);
        return view('admin_dashboard.transactions',compact('data','transactions'));
    }
    public function edit(){
        // $user=User::find($user_id);
        return view('admin_dashboard.editUser');
    }
    // public function save(){
    //     return view('admin_dashboard.users');
    // }
    public function addUser(){
        return view('admin_dashboard.addUser');
      
    }
    public function save(Request $request){
        Validator::validate($request->all(),[
            'first_name'=>['string','required','min:3','max:20',],
            'middle_name'=>['string','required','min:3','max:20'],
            'last_name'=>['string','required','min:3','max:20'],
            'email'=>['email','required','min:3','unique:users,email'],
            'password'=>['required','min:5'],
            'confirm_password'=>['same:password'],
            'is_active'=>['required'],
            'roles'=>['required'],





        ],[
            'fisrt_name.required'=>'This first name is required',
            'middle_name.required'=>'This middle name is required',
            'last_name.required'=>'This last name is required',
            'email.required'=>'This email is required',
            'email.unique'=>'There is an email in the table',
            'password.min'=>'Can not be less than 3 letters', 
           
            'confirm_password.same'=>'password dont match',
            'is_active.required'=>'This active is required',
            'roles.required'=>'This role is required',

        ]);

        $user=new User();
        $user->first_name=$request->input('first_name');
        $user->middle_name=$request->input('middle_name');
        $user->last_name=$request->input('last_name');
        $user->email=$request->input('email');
        $user->is_active=$request->input('is_active');
        
        $user->password= Hash::make($request->password);
        
        if($user->save())
        $user->attachRoles($request->input('roles'));
        //  dd($user);
        return redirect()->route('admin_dashboard/users')
        ->with(['success'=>'user created successful']);
        return back()->with(['error'=>'can not create user']);

        
        
        
    }
}
