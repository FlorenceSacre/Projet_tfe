<?php

use Illuminate\Database\Seeder;

class CategoryVideoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory('App\Models\CategoryVideo', 10)->create();
    }
}
