<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        $this->call(foods_table_seeder::class);
        $this->call(workouts_table_seeder::class);
        $this->call(gyms_table_seeder::class);
    }
}
