<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePaymentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('payments', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('client_reference_id')->unique();
            $table->string('product_name');
            $table->string('product_quantity');
            $table->string('product_price');
            $table->unsignedBigInteger('customer_id')->unique();
            $table->string('customer_name');
            $table->integer('order_id');
            $table->timestamps();

            $table->foreign('client_reference_id')->references('id')->on('merchants'); // refers to merchants
            $table->foreign('customer_id')->references('id')->on('users'); // users or customers
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('payments');
    }
}
