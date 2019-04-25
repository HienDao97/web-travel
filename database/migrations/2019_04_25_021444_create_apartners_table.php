<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateApartnersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('apartners', function (Blueprint $table) {
            $table->bigIncrements('id')->autoIncrement();
            $table->string('username');
            $table->string('name');
            $table->string('avatar')->nullable();
            $table->string('email')->unique();
            $table->string('phone');
            $table->date('birthday')->nullable();
            $table->string('address');
            $table->integer('star')->nullable();
            $table->string('specialized')->nullable();
            $table->string('city');
            $table->string('experience')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('apartners');
    }
}
