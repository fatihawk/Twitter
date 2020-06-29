<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSiparisDetaysTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('siparis_detays', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('siparis_id');
            $table->foreign('siparis_id')->references('id')->on('siparis');
            $table->unsignedBigInteger('musteri_id');
            $table->foreign('musteri_id')->references('musteri_id')->on('siparis');
            $table->Integer('urun_id');
            $table->integer('miktar');
            $table->Integer('fiyat');
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
        Schema::dropIfExists('siparis_detays');
    }
}
