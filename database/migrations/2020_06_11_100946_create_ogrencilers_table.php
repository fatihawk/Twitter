<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOgrencilersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ogrencilers', function (Blueprint $table) {
            $table->id();
            $table->text('ad')->nullable();
            $table->text('e-mail')->nullable();
            $table->integer('sinif')->nullable();
            $table->unsignedBigInteger('tc_no')->nullable();
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
        Schema::dropIfExists('ogrencilers');
    }
}
