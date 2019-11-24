<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('username')->unique();
            $table->string('password');
            $table->string('email')->unique();
            $table->string('phonenumber')->unique();
            $table->string('name');
            $table->string('surname');
            $table->unsignedBigInteger('branch_id');
            $table->date('birthday');
            $table->string('address');
            $table->string('idcard');
            $table->integer('position');
            $table->double('salary',8,2);
            $table->string('salary_type');
            $table->timestamps();
            $table->softDeletes();
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
        Schema::dropIfExists('users');
    }
}
