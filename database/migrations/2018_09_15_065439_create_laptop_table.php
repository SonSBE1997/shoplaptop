<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLaptopTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('laptop', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->unsignedInteger('configuration_id');
            $table->integer('price');
            $table->string('accessories');
            $table->float('weight');
            $table->string('os');
            $table->string('warranty');
            $table->boolean('hot');
            $table->float('discount');

            $table->dateTime('create_date');
            $table->unsignedInteger('create_by');
            $table->dateTime('modify_date');
            $table->unsignedInteger('modify_by');
            $table->timestamps();

            $table->foreign('configuration_id')
                ->references('id')
                ->on('laptop_config')
                ->onDelete('cascade')
                ->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('laptop');
    }
}
