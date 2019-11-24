<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class MenuPromotionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('menu_promotions', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('promotion_id');
            $table->unsignedBigInteger('menu_id');
            $table->timestamps();
            $table->softDeletes();
            $table->foreign('promotion_id')->references('id')->on('promotions');
            $table->foreign('menu_id')->references('id')->on('menus');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('menu_promotions');
    }
}
