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
            $table->foreignId('factor_id')->constrained();
            $table->bigInteger('status')->nullable();
            $table->bigInteger('idpay_track_id')->nullable();
            $table->bigInteger('payment_track_id')->nullable();
            $table->text('payment_id')->nullable();
            $table->bigInteger('order_id')->nullable();
            $table->double('amount')->nullable();
            $table->double('payment_amount')->nullable();
            $table->string('date')->nullable();
            $table->string('card_no')->nullable();
            $table->string('pay_date')->nullable();
            $table->string('verify_date')->nullable();
            $table->text('error_message')->nullable();
            $table->string('error_code')->nullable();
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
        Schema::dropIfExists('payments');
    }
}
