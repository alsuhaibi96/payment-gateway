<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\user_profile;
use Illuminate\Support\Facades\Validator;

class UserProfileController extends Controller
{
    //
    public function profile(){
       
       $id=Auth::id();
       $user=User::with(['profile'])->find($id);
       return view('customer_dashboard.home',['user'=>$user]);
    }
     public function addProfile(){

     }
     function editProfile(Request $req){
        //  return $req;
        $first_name=$req->first_name;
        $middle_name=$req->middle_name;
        $last_name=$req->last_name;
        $email=$req->email;
        $phone=$req->phone;
        $address=$req->address;
       

        $id=Auth::id();
        $user=User::where('id',Auth::id())->update([
            'first_name'=>$first_name ,
            'middle_name'=>$middle_name ,
            'last_name'=>$last_name,
            'email'=>$email 
           
        ]);
        $user_profile=user_profile::where('user_id',Auth::id())->update([
            'address'=>$address,
            'phone'=>$phone
        ]);
        if ($user && $user_profile){
            return redirect()->back()->with(['success'=>'تم التعديل بنجاح']);
        }
        else{
            return back()->with(['wrong'=>'خطاء لم يتم التعديل']);
        }
           

     }

     function editImage(Request $req){
         Validator::validate($req->all(),[
             'avatar'=>'required|mimes:jepg,png,jpg,gif,svg|max:6000',
         ],[
             'avatar.required'=>'هذا الحقل مطلوب',
             'avatar.mimes'=>'الامتداد من نوع'

         ]);
         if($req->hasFile('avatar')){
             $image= $this->uploadFile($req->file('avatar'));
             $user_profile=user_profile::where('user_id',Auth::id())->update([
                'avatar'=>$image
            ]);
         }
        
        //  echo Auth::user()->profile->avatar;

        if($user_profile){
            return redirect()->back()->with(['succes'=>'تم التعديل الصورة بنجاح']);
        }
        else{
            return back()->with(['eror'=>' الصورة خطاء لم يتم التعديل']);
        }



     }
   
    
}
