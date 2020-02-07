<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\CategoryVideo;
use Faker\Generator as Faker;

$factory->define(CategoryVideo::class, function (Faker $faker) {
    $category = ['pouette1', 'pouette2', 'pouette3'];
    return [
        'category' => $faker->randomElement($category)
    ];
});
