<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class bank_account extends Model
{
    use HasFactory;
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function Credit_cards(){
        return $this->hasOne('App\Models\Credit_cards','bank_accounts_id');
    }
}
