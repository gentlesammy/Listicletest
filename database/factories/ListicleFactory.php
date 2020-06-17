<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */
use App\User;
use App\Listicle;
use Faker\Generator as Faker;

$factory->define(Listicle::class, function (Faker $faker) {
    return [
        'user_id'   => User::inRandomOrder()->limit(3)->get(),
        'title' => Str::random(10),
        'Details' => Str::random(100),
    ];
});
