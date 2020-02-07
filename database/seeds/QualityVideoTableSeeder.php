<?php

use Illuminate\Database\Seeder;

class QualityVideoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory('App\Models\QualityVideo', 10)->create();
    }
}
