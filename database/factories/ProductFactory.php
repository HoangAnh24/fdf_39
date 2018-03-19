<?php

use Faker\Generator as Faker;

    $factory->define(App\Models\Product::class, function (Faker $faker) {
        
        return [
            'name' => $faker->name,
            'category_id' => App\Models\Category::pluck('id')->random(),
            'name' => $faker->name,
            'image' => $faker->imageUrl(200, 200),
            'quantity' => $faker->numberBetween(1, 20),
            'description' => $faker->paragraph,
            'category_name' => $faker->name,
            'product_name' => $faker->name,
            'status' => $faker->numberBetween(1, 5), 
            'average_rating' => rand(1,5),
            'created_at' => $faker->dateTime(),
            'updated_at' => $faker->dateTime(),
        ];
    });
