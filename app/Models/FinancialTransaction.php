<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FinancialTransaction extends Model
{
    use HasFactory;
    public function FinancialAcount(){
        return $this->belongsTo(FinancialAcount::class);
    }
    public function Transaction(){
        return $this->belongsTo(Transaction::class);
    }
    public function bank_account(){
        return $this->belongsTo(bank_account::class);
    }

}
