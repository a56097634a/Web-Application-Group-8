<?php

use Illuminate\Database\Seeder;

class gyms_table_seeder extends Seeder
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
        	    DB::table('gyms')->insert([ //,
                'gymName'=> $faker->word
                ,'gymAddress' => $faker->address
                ,'gymContact' => $faker->phoneNumber
                ,'gymDescritption' => $faker->sentence
			]);
	}
    }
}
