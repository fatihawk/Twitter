<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDevamsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('devams', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('ogr_id');
            $table->foreign('ogr_id')->references('id')->on('ogrencilers');
            $table->unsignedBigInteger('ders_id');
            $table->foreign('ders_id')->references('id')->on('derslers');
            $table->integer('devamsizlik');
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
        Schema::dropIfExists('devams');
    }
}
