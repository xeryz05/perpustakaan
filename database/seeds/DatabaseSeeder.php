<?php

use Illuminate\Database\Seeder;
use App\Book;
use App\Category;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // factory(App\User::class,20)->create();
        // factory(App\Category::class, 8)->create();
        factory(App\Book::class, 12)->create();

    }
}
