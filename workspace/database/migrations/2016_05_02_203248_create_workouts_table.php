<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWorkoutsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('workouts', function (Blueprint $table) {
            $table->increments('workoutId');
            $table->string('workoutName');
            $table->string('workoutImpact');
            $table->string('workoutDescription');
            $table->string('workoutFacility');
            $table->integer('set');
            $table->integer('number');
            $table->string('type');
            $table->integer('duration');
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
        Schema::drop('workouts');
    }
}
