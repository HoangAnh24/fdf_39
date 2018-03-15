<?php

use Faker\Generator as Faker;

    $factory->define(App\Models\Category::class, function (Faker $faker) {   
    
        return[
            'name' => $faker->name,
            'parent_id' => $faker->randomNumber(2),
            'created_at' => $faker->dateTime(),
            'updated_at' => $faker->dateTime(),
        ];
    });

    $factory->define(App\User::class, function (Faker $faker) {
    
        return [
            'name' => $faker->name,
            'address' => $faker->streetName,
            'phone' => $faker->phoneNumber,
            'avatar' => $faker->imageUrl(100, 100),
            'role' => 0,
            'created_at' => $faker->dateTime(),
            'updated_at' => $faker->dateTime(),
        ];
    });
