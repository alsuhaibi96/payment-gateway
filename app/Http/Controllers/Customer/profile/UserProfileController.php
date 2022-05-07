<?php

namespace App\Http\Controllers\Customer\profile;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserProfileController extends Controller
{
 Public function __construct(){
     $this->middleware('auth');
 }

    /**
     * View man page for customer profile
     */
    public function viewCustomer(){
        
        return view('website.user_profile.settings'); 
    }
}
