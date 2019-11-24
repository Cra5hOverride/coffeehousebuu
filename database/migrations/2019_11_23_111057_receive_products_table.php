<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ReceiveProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('receive_products', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('order_product_id');
            $table->unsignedBigInteger('branch_id');
            $table->integer('qty');
            $table->date('date_receive');
            $table->timestamps();
            $table->softDeletes();
            $table->foreign('order_product_id')->references('id')->on('order_products');
            $table->foreign('branch_id')->references('id')->on('branchs');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('receive_products');
    }
}
