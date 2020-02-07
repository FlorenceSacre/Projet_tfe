<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Cart;
use App\User;
use Faker\Generator as Faker;

$factory->define(Cart::class, function (Faker $faker) {
    $status = ['in progress', 'done'];
    $user = User::all()->pluck('id')->toArray();
    return [
        //'date' => $faker->date()->nullable(),
        'status' => $faker->randomElement($status),
        'users_id' => $faker->randomElement($user),
    ];
});
