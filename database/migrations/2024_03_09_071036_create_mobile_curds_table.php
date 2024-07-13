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
        Schema::create('mobile_curds', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->text('descreption');
            $table->string('model');
            $table->string('quantity');
            $table->string('mrp');
            $table->string('dis');
            $table->string('offered_price');
            $table->string('image');
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
        Schema::dropIfExists('mobile_curds');
    }
};
