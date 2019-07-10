<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateConfigSubfamilyTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('config_subfamily', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('config_id')->nullable();
            $table->unsignedBigInteger('subfamily_id')->nullable();
            $table->foreign('subfamily_id')->references('id')->on('subfamilies')->onDelete('cascade');
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
        Schema::dropIfExists('config_subfamily');
    }
}
