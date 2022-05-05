<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Payment;
use Illuminate\Http\Request;

class APIPaymentController extends Controller
{
    //

    public function allPayments(){
        $payment = Payment::get(); // Here we should migrate Payment Table.
        return response($payment) ; // reponse() is used with API
        

    }

}
