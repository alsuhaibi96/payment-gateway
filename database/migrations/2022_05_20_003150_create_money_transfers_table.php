<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMoneyTransfersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('money_transfers', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id');
            $table->string('sender_name');
            $table->string('sender_phone_number')->nullable();
            $table->string('receiver_name');
            $table->string('receiver_email');
            $table->string('receiver_phone_number')->nullable();
            $table->double('money_transferred');
            $table->string('transferring_date');
            $table->string('description');
            $table->double('tax');
            $table->string('currency')->default('Dollar');

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
        Schema::dropIfExists('money_transfers');
    }
}
