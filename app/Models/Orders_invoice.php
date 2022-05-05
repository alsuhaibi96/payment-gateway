<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Orders_invoice extends Model
{
    use HasFactory;
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function productsGet(){
        return $this->hasMany(Products::class,'invoice_id');
    }
}
