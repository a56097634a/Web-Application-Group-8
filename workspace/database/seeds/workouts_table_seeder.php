<?php

use Illuminate\Database\Seeder;

class workouts_table_seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
		$faker = Faker\Factory::create();
        $limit = 10 ;
        for ($i = 0; $i < $limit; $i++) {
			DB::table('workouts')->insert([ //,
				'workoutName' => $faker->word
				,'workoutImpact' => $faker->word
				,'workoutDescription' => $faker->sentence
				,'workoutFacility' => $faker->word
				,'set' => $faker->randomNumber($nbDigits = 1)
				,'number' => $faker->randomNumber($nbDigits = 2)
				,'type' => $faker->word
				,'duration' => $faker->randomNumber($nbDigits = 2)
			]);
		}
    }
}
