<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRamTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ram', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('memory_capacity');
            $table->string('type');
            $table->integer('bus');

//            $table->dateTime('create_date');
            $table->unsignedInteger('created_by');
//            $table->dateTime('modify_date');
            $table->unsignedInteger('modify_by');
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
        Schema::dropIfExists('ram');
    }
}
