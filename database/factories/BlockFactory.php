<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */
use Faker\Generator as Faker;
use App\Block;

$factory->define(Block::class, function (Faker $faker) {
    return [
        'rand_num' => $faker->numberBetween($min = 1, $max = 5000),
        'rand_height' => $faker->numberBetween($min = 100, $max = 200),
        'color' => null
    ];
});
