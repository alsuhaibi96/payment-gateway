<?php

namespace App\Http\Controllers\Customer;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

/**
 * Customer Controller 
 */
class CustomerController extends Controller
{

    public function viewDashboard(){
        return view('customer_dashboard.home');
    }


    public function getUser(){
        $userId=Auth::user()->id;
       return $userId;
    }

}
