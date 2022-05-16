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
        Schema::create('estimate', function (Blueprint $table) {
            $table->id();
            $table->integer('thuetruocba');
            $table->integer('baohiemthanvo');
            $table->integer('phidichvudangky');
            $table->integer('baohiemdansu');
            $table->integer('phibaotriduongbo');
            $table->integer('phicapbienso');
            $table->integer('phidangkiem');
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
        Schema::dropIfExists('estimate');
    }
};
