<?php

use Illuminate\Database\Seeder;
use App\Book;

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
        // factory(App\Category::class, 12)->create();
        factory(App\Book::class, 40)->create();
        
    }
}
