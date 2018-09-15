<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLaptopImageTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('laptop_images', function (Blueprint $table) {
            $table->unsignedInteger('laptop_id')->unique();
            $table->string('image')->unique();
            $table->boolean('original');

            $table->dateTime('create_date');
            $table->unsignedInteger('create_by');
            $table->dateTime('modify_date');
            $table->unsignedInteger('modify_by');
            $table->timestamps();

            $table->foreign('laptop_id')
                ->references('id')
                ->on('laptops')
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
        Schema::dropIfExists('laptop_image');
    }
}
