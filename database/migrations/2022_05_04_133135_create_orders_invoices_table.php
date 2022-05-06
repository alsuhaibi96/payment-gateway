<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersInvoicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders_invoices', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id');
            $table->string('invoice_referance');
            $table->string('products');
            $table->string('order_reference');
            $table->string('total_amout');
            $table->string('currency');
            $table->string('success_url');
            $table->string('cancel_url');
            $table->string('next_url');
            $table->string('cancel_next_url');
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
        Schema::dropIfExists('orders_invoices');
    }
}
