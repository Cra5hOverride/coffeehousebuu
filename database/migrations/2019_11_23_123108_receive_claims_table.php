<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ReceiveClaimsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('receive_claims', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('claim_product_id');
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('branch_id');
            $table->date('date_receive');
            $table->integer('qty');
            $table->integer('status');
            $table->timestamps();
            $table->softDeletes();
            $table->foreign('claim_product_id')->references('id')->on('claim_products');
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
        Schema::dropIfExists('receive_claims');
    }
}
