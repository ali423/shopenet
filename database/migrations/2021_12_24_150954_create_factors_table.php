<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFactorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('factors', function (Blueprint $table) {
            $table->id();
            $table->integer('number')->unique();
            $table->foreignId('user_id')->constrained();
            $table->foreignId('template_id')->constrained();
            $table->foreignId('service_id')->nullable()->constrained();
            $table->string('plan')->nullable();
            $table->string('about')->nullable();
            $table->enum('status',['paid','failed','rejected','awaiting_payment'])->default('awaiting_payment');
            $table->double('amount')->nullable();
            $table->text('payment_id')->nullable();
            $table->text('description')->nullable();
            $table->string('payment_status')->nullable();
            $table->bigInteger('idpay_track_id')->nullable();
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
        Schema::dropIfExists('factors');
    }
}
