<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    use HasFactory;
    public function FinancialTransaction(){
        return $this->hasMany(FinancialTransaction::class);
    }
    public function PaymentInvoice(){
        return $this->belongsTo(PaymentInvoice::class);
    }
    public function user(){
        return $this->belongsTo(User::class);
    }
}
