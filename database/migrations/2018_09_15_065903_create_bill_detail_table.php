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
        Schema::create('bill_details', function (Blueprint $table) {
            $table->integer('bill_id')->unsigned();
            $table->integer('laptop_id')->unsigned();
            $table->primary(['bill_id', 'laptop_id']);
            $table->integer('quantity');
            $table->integer('price');

            $table->unsignedInteger('created_by');
            $table->unsignedInteger('modified_by')->nullable();
            $table->timestamps();

            $table->foreign('bill_id')
                ->references('id')
                ->on('bills')
                ->onDelete('cascade')
                ->onUpdate('cascade');
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
        Schema::dropIfExists('bill_detail');
    }
}
