<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBillDetailTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bill_detail', function (Blueprint $table) {
            $table->unsignedInteger('bill_id')->unique();
            $table->unsignedInteger('laptop_id')->unique();
            $table->integer('quantity');
            $table->integer('price');

            $table->dateTime('create_date');
            $table->unsignedInteger('create_by');
            $table->dateTime('modify_date');
            $table->unsignedInteger('modify_by');
            $table->timestamps();

            $table->foreign('bill_id')
                ->references('id')
                ->on('bill')
                ->onDelete('cascade')
                ->onUpdate('cascade');
            $table->foreign('laptop_id')
                ->references('id')
                ->on('laptop')
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
        Schema::dropIfExists('bill_detail');
    }
}
