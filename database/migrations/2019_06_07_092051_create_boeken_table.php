<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBoekenTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('boeken', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('title');
            $table->string('auteur');
            $table->string('taal');
            $table->smallInteger('aantal_paginas');
            $table->text('opmerkingen');
            $table->string('uitgeleend_aan');
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
        Schema::dropIfExists('boeken');
    }
}
