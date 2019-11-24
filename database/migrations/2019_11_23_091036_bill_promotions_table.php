<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class BillPromotionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bill_promotions', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('promotion_id');
            $table->unsignedBigInteger('bill_id');
            $table->timestamps();
            $table->softDeletes();
            $table->foreign('promotion_id')->references('id')->on('promotions');
            $table->foreign('bill_id')->references('id')->on('bills');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('bill_promotions');
    }
}
