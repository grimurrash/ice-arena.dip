<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUslugisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('uslugis', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('title');
            $table->string('link')->unique();
            $table->bigInteger('image_id')->unsigned();
            $table->foreign('image_id')->references('id')->on('images');
            $table->text('anons');
            $table->text('text');
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
        Schema::dropIfExists('uslugis');
    }
}
