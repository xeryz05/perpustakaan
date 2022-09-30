<?php

use Illuminate\Database\Seeder;
use App\Book;
use App\Category;
use App\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // factory(App\User::class)->create();
        // factory(App\Category::class, 15)->create();
        // factory(App\Book::class, 25)->create();

        // // $this->call(UserSeeder::class);

        User::create([
        'name' => 'daffa',
        'username' => 'root',
        'gender' => 'laki-laki',
        'NIS' => '000001',
        'email' => 'admin@gmail.com',
        'email_verified_at' => now(),
        'password' => bcrypt('11111111'), // password
        'roles' => 'ADMIN',
        'avatar' => 'https://source.unsplash.com/random',
        ]);


    }
}
