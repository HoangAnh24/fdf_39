<?php

use Faker\Generator as Faker;

    $factory->define(App\Models\Comment::class, function (Faker $faker) {
    
        return [
            'user_id' => App\Models\User::pluck('id')->random(),
            'product_id' => App\Models\Product::pluck('id')->random(),
            'content' => $faker->paragraph,
            'created_at' => $faker->dateTime(),
            'updated_at' => $faker->dateTime(),
        ];
    });
