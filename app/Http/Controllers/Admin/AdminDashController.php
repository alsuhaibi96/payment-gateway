<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminDashController extends Controller
{
    //View users
    public function show(){
        return view('admin_dashboard.users');
    }

}
