<?php

use Illuminate\Database\Seeder;

class foods_table_seeder extends Seeder
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
			DB::table('foods')->insert([ //,
				'foodName' => $faker->word
				,'foodImpact' => $faker->word
				,'foodDescription' => $faker->sentence
				,'foodCAL' => $faker->randomNumber($nbDigits = 2)
				,'foodFact' => $faker->word
				,'foodVitamin' => $faker->randomNumber($nbDigits = 2)
				,'foodProtain' => $faker->randomNumber($nbDigits = 2)
			]);
		}
    }
}
