<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOdemesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('odemes', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('siparis_id');
            $table->foreign('siparis_id')->references('siparis_id')->on('siparis_detays');
            $table->text('odeme_tur');
            $table->integer('tutar');
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
        Schema::dropIfExists('odemes');
    }
}
