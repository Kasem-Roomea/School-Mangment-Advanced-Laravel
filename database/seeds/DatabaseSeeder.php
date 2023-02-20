<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        $this->call(NationalitiesTableSeeder::class);
        $this->call(religionTableSeeder::class);
        $this->call(BloodTypeSeeder::class);
        $this->call(GendersSeeder::class);
        $this->call(MajorsSeeder::class);

    }
}
