<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTraineeDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('trainee_details', function (Blueprint $table) {
            $table->integer('traineeId')->unsigned();
            $table->integer('trainerId')->unsigned();
            $table->string('gender');
            $table->string('disabilityDetail');
            $table->string('injuryDetail');
            $table->string('otherDetail');
            $table->boolean('hasPlan');
            $table->boolean('hasTrainer');
            $table->date('DOB');
            $table->decimal('BMD');
            $table->decimal('chestMeasure');
            $table->decimal('weistMeasure');
            $table->decimal('hipMeasure');
            $table->decimal('bodyFatPercent');
            $table->decimal('bodyMusclePercent');
            $table->decimal('balance');
            $table->timestamps();

            $table->primary('traineeId');
            //$table->foreign('planId')->references('planId')->on('plans');
            //$table->foreign('traineeId')->references('userId')->on('users');

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
        Schema::drop('trainee_details');
    }
}
