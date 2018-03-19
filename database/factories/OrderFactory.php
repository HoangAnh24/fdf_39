<?php

use Faker\Generator as Faker;
use App\Models\Order;

    $factory->define(App\Models\Order::class, function (Faker $faker) {
        
        return [
            'user_id' =>App\Models\User::pluck('id')->random(),
            'status' => $faker->numberBetween(1, 5), 
            'notes' => $faker->paragraph,
            'created_at' => $faker->dateTime(),
            'updated_at' => $faker->dateTime(),
        ];
    });
