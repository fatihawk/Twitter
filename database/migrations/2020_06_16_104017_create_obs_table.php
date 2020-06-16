<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateObsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('obs', function (Blueprint $table) {
            $table->id();
            $table->text('ad');
            $table->text('ders')->nullable();
            $table->integer('vize')->nullable();
            $table->integer('final')->nullable();
            $table->integer('not')->nullable();
            $table->text('durum')->nullable();
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
        Schema::dropIfExists('obs');
    }
}
