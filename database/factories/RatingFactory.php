<?php

use Faker\Generator as Faker;

    $factory->define(App\Models\Rating::class, function (Faker $faker) {
        
        return [
            'user_id' => App\Models\User::pluck('id')->random(),
            'product_id' => App\Models\Product::pluck('id')->random(),
            'count_star' => $faker->numberBetween(1, 5),
            'created_at' => $faker->dateTime(),
            'updated_at' => $faker->dateTime(),
        ];
    });
