<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBillsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bills', function (Blueprint $table) {
            $table->bigIncrements('id')->autoIncrement();
            $table->integer('status');
            $table->date('date_start');
            $table->date('date_end');
            $table->integer('id_apartner');
            $table->integer('id_customer');
            $table->string('city');
            $table->integer('children_number');
            $table->integer('adult_number');
            $table->integer('price');
            $table->string('work');

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
        Schema::dropIfExists('bills');
    }
}
