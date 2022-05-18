<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CustomerDashController extends Controller
{
    //route add Balance page
    public function addBalance(){
        return view('customer_dashboard.addBalance');
    } 
    //route transaction page
    public function transaction(){
        return view('customer_dashboard.transaction');
    }
    //route transfer 
    public function transfer(){
        return view('customer_dashboard.transfer');
    }
    // route report
    public function report(){
        return view('customer_dashboard.report');
    }
    // route settings
    public function settings(){
        return view('customer_dashboard.settings');
    }
}
