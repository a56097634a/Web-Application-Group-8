<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWorkoutProgramsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('workout_programs', function (Blueprint $table) {
            $table->increments('WPId');
            $table->string('WPName');
            $table->string('WPImpact');
            $table->string('WPDescritption');
            $table->time('workoutTime');
            $table->integer('trainerId')->unsigned();
            $table->timestamps();

            //$table->foreign('gymId')->references('gymId')->on('gyms');
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
        Schema::drop('workout_programs');
    }
}
