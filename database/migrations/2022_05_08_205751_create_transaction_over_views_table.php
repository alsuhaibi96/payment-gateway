<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTransactionOverViewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transaction_over_views', function (Blueprint $table) {
            $table->increments('id');
            $table->string('trans_id');
            $table->integer('user_id');
            $table->integer('bank_account_id');
            $table->string('type');
            $table->double('amount');
            $table->string('currency');
            $table->double('fee');
            $table->string('fromAccount');
            $table->string('client_name');
            $table->string('toAccount');
            $table->string('merchant_name');
            $table->string('status');
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('transaction_over_views');
    }
}
