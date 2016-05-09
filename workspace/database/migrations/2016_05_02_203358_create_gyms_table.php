<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGymsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('gyms', function (Blueprint $table) {
            $table->increments('gymId');
            $table->string('gymName');
            $table->string('gymAddress');
            $table->string('gymContact');
            $table->string('gymDescritption');
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
        Schema::drop('gyms');
    }
}
