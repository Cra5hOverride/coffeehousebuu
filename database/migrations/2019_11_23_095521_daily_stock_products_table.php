<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class DailyStockProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('daily_stock_products', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('daily_stock_id');
            $table->unsignedBigInteger('product_id');
            $table->timestamps();
            $table->softDeletes();
            $table->foreign('daily_stock_id')->references('id')->on('daily_stocks');
            $table->foreign('product_id')->references('id')->on('products');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('daily_stock_products');
    }
}
