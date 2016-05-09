<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDietProgramsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('diet_programs', function (Blueprint $table) {
            $table->increments('DPId');
            $table->string('DPName');
            $table->string('DPImpact');
            $table->string('DPDescritption');
            $table->integer('DPLength');
            $table->integer('DPCalAvg');
            $table->integer('DPProteinAvg');
            $table->integer('DPFiberAvg');
            $table->integer('trainerId')->unsigned();
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
        //
        Schema::drop('diet_programs');

    }
}
