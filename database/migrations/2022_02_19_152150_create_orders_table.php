<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('car_id');
            //     $table->integer('discount');
            $table->string('email');
            $table->string('name');
            $table->string('address');
            $table->string('phone');
            $table->string('note')->nullable();
            $table->unsignedBigInteger('employee')->nullable();
            $table->string('cause')->nullable();
            $table->integer('status')->default(0);
            // $table->integer('total');
            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('car_id')->references('id')->on('cars');
            $table->foreign('employee')->references('id')->on('users');

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
        Schema::dropIfExists('order');
    }
};
