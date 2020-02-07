<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Video;
use App\Models\Subscription;
use Faker\Generator as Faker;

$factory->define(Video::class, function (Faker $faker) {
    $subscription = Subscription::all()->pluck('id')->toArray();
    return [
        'titre' => $faker->word(),
        'description' => $faker->text(),
        'resolution' => $faker->text(),
        'format_video' => $faker->text(),
        'frame_rate' => $faker->text(),
        'taille' => $faker->text(),
        'ratio_video' => $faker->text(),
        'time' => $faker->time('H:i:s'),
        'subscription_id' => $faker->randomElement($subscription)
    ];
});
