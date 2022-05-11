<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PaymentInvoice extends Model
{
    use HasFactory;
    public function Orders_invoice(){
        return $this->belongsTo(Orders_invoice::class,'order_invoice_id');
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function Transaction(){
        return $this->hasMany(Transaction::class);
    }
}
