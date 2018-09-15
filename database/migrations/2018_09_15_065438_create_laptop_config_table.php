<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLaptopConfigTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('laptop_config', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('producer_id');
            $table->unsignedInteger('cpu_id');
            $table->unsignedInteger('ram_id');
            $table->integer('memory_socket_count');
            $table->string('disk');
            $table->string('port_connect');
            $table->string('dimension');
            $table->string('screen');
            $table->integer('battery');
            $table->timestamps();

            $table->foreign('producer_id')
                ->references('id')
                ->on('producers')
                ->onDelete('cascade')
                ->onUpdate('cascade');

            $table->foreign('cpu_id')
                ->references('id')
                ->on('cpus')
                ->onDelete('cascade')
                ->onUpdate('cascade');

            $table->foreign('ram_id')
                ->references('id')
                ->on('rams')
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
        Schema::dropIfExists('laptop_config');
    }
}
