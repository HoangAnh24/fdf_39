<?php

use Faker\Generator as Faker;

    $factory->define(App\Models\Price::class, function (Faker $faker) {
        
        return [
            'product_id' => App\Models\Product::pluck('id')->random(),
            'price' => $faker->randomFloat(2, 1, 50),
            'star_at' => $faker->dateTime($max = 'now', $timezone = null),
            'end_at' => $faker->dateTime($max = 'now', $timezone = null),
            'created_at' => $faker->dateTime(),
            'updated_at' => $faker->dateTime(),
        ];
    });
