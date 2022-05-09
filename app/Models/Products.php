<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    use HasFactory;


    public function invoices(){
        return $this->belongsTo(Orders_invoice::class,'invoice_id');
    }
}
