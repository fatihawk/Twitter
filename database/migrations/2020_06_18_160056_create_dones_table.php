<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDonesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dones', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('done_id');
            $table->foreign('done_id')->references('id')->on('jobs');
            $table->text('text');
            $table->foreign('text')->references('job')->on('jobs');
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
        Schema::dropIfExists('dones');
    }
}
