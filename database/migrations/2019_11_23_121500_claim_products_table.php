<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ClaimProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('claim_products', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('receive_product_id');
            $table->unsignedBigInteger('vendor_id');
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('branch_id');
            $table->integer('qty');
            $table->integer('status');
            $table->date('date_receive');
            $table->timestamps();
            $table->softDeletes();
            $table->foreign('receive_product_id')->references('id')->on('receive_products');
            $table->foreign('vendor_id')->references('id')->on('vendors');
            $table->foreign('user_id')->references('id')->on('users');
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
        Schema::dropIfExists('claim_products');
    }
}
