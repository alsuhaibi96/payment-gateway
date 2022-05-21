<?php

namespace App\Http\Controllers;

use App\Mail\ContuctMe;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContuctController extends Controller
{
    //
    public function contuct(){
        return view('website.contuct');
    }
    public function contuctUs(){
        $data=request(['name','email','subject','message']);
        Mail::to('mail@waslpayment.com')->send(new ContuctMe($data));
        return  redirect()->route('contact-us')
        ->with('flash','تم الارسال بنجاح');
    }
}
