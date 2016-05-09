<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTrainersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('trainers', function (Blueprint $table) {
            $table->integer('trainerId')->unsigned();
            $table->string('gender');
            $table->decimal('price');
            $table->string('specialty');
            $table->decimal('review');
            $table->integer('gymId');//->unsigned();
            $table->timestamps();

            $table->primary('trainerId');
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
        Schema::drop('trainers');
    }
}
