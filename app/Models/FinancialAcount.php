<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FinancialAcount extends Model
{
    use HasFactory;
    public function FinancialTransaction(){
        return $this->hasMany(FinancialTransaction::class);
    }
}
