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
    public function addUser(Request $request){
        // Validator::validate($request->all(),[
        //     'name'=>['required','min:3','max:50'],
        //     'mail'=>['required','email','unique:users,email'],
        //     'password'=>['required','min:5']


        // ],[
        //     'name.required'=>'this field is required',
        //     'name.min'=>'can not be less than 3 letters', 
        //     'email.unique'=>'there is an email in the table',
        //     'email.required'=>'this field is required',
        //     'email.email'=>'incorrect email format',
        //     'password.required'=>'password is required',
        //     'password.min'=>'password should not be less than 3',
            


        // ]);
        // $new_user=new User(); 
        return view('admin_dashboard.addUser');
        
    }
}
