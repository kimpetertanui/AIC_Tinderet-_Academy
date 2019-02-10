<?php

use Illuminate\Database\Seeder;

class StudentsModelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory('App\Students', 10)->create();
    }
}
