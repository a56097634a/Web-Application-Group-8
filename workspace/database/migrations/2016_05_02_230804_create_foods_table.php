<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFoodsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('foods', function (Blueprint $table) {
            $table->increments('foodId');
            $table->string('foodName');
            $table->string('foodImpact');
            $table->string('foodDescription');
            $table->integer('foodCAL');
            $table->integer('foodProtain');
            $table->string('foodFact');
            $table->integer('foodVitamin');
            $table->timestamps();

            //$table->foreign('WPId')->references('WPId')->on('workout_programs');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
        Schema::drop('foods');
    }
}
