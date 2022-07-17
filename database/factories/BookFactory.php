<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Book;
use Faker\Generator as Faker;

$factory->define(Book::class, function (Faker $faker) {
    return [
        'name' => $faker->sentence(mt_rand(2,8)),
        'author' => $faker->company,
        'categories_id' => 9,
        'description' => $faker->paragraph(mt_rand(5,10)),
        'photo' => $faker->imageUrl(400, 300),
        'slug' => $faker->slug,
    ];
});
