<?php

use Faker\Generator as Faker;
use app\Product;

$factory->define(App\Product::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        
    ];
});