<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Book;
use App\Model;
use Faker\Generator as Faker;

$factory->define(Book::class, function (Faker $faker) {
    return [
        'name' => $faker->sentence(mt_rand(2,8)),
        'author' => $faker->company,
        'categories_id' => $faker->randomDigitNotNull,
        'description' => $faker->paragraph(mt_rand(5,10)),
        'photo' => ('https://source.unsplash.com/random'),
        'slug' => $faker->slug,
    ];
});
