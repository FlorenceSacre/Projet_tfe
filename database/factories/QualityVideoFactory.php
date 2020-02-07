<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\QualityVideo;
use Faker\Generator as Faker;

$factory->define(QualityVideo::class, function (Faker $faker) {
    $quality = ['mov', 'avi', 'mp4'];
    return [
        'quality' => $faker->randomElement($quality)
    ];
});
