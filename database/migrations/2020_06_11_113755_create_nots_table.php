<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNotsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nots', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('ogr_id');
            $table->foreign('ogr_id')->references('id')->on('ogrencilers');
            $table->unsignedBigInteger('ders_id');
            $table->string('type');
            $table->foreign('ders_id')->references('id')->on('derslers');
            $table->integer('not');
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
        Schema::dropIfExists('nots');
    }
}
