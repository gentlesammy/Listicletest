<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */
use App\User;
use App\Listicle;
use Faker\Generator as Faker;

$factory->define(Listicle::class, function (Faker $faker) {
    return [
        'user_id'   => function () {
                        return App\User::inRandomOrder()->first()->id;},
        'title' => Str::random(10),
        'Details' => Str::random(100),

    ];
});
