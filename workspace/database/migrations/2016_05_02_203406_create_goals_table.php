<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGoalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('goals', function (Blueprint $table) {
            $table->increments('goalId');
            $table->string('goalName');
            $table->string('goalImpact');
            $table->string('goalProgress');
            $table->string('goalDescritption');
            $table->integer('goalLength');
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
        Schema::drop('goals');
    }
}
