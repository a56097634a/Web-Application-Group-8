<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePlansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('plans', function (Blueprint $table) {
            $table->increments('planId');
            $table->string('planName');
            $table->string('planImpact');
            $table->string('planDescritption');
            $table->integer('trainerId')->unsigned();
            $table->integer('traineeId')->unsigned();
            $table->integer('DPId')->unsigned();
            $table->integer('WPId')->unsigned();
            $table->integer('goalId')->unsigned();
            $table->timestamps();

            //$table->foreign('trainerId')->references('userId')->on('users');
            //$table->foreign('traineeId')->references('userId')->on('users');
            //$table->foreign('DPId')->references('DPId')->on('diet_programs');
            //$table->foreign('WPId')->references('WPId')->on('workout_programs');
            //$table->foreign('goalId')->references('goalId')->on('goals');

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
        Schema::drop('plans');
    }
}
