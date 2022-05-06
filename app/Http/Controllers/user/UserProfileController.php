<?php

namespace App\Http\Controllers\user;


use App\Http\Controllers\Controller;
use App\Models\User;

use Illuminate\Http\Request;

class UserProfileController extends Controller
{
    //
    public function __construct() {
        // $this->middleware('auth');
}
public function index()
{
    return view('website.user_profile.settings');
}
public function edit()
{
   
    return view('website.user_profile.edit');

}
}
