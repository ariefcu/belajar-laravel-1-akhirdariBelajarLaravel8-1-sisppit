<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Santri;
use App\Models\User;
use App\Models\Post;
use App\Models\Category;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        $this->call([ 
            // SantriSeeder::class,
            UserSeeder::class,
            // PostSeeder::class,
            CategorySeeder::class
        ]);
    
        // Santri::factory(3)->create();
        User::factory(1)->create();
        Post::factory(3)->create();
        // Category::factory(3)->create();

        // using Magic Method for Has Many Relationships
        User::factory()
        ->count(1)
        ->hasPosts(2)
        ->create();

        // using Magic Method for Has Many Relationships
        // $user = User::factory(2)
        //     ->hasPosts(3, [
        //     'is_admin' => false,
        // ])
        // ->create();

        // using Magic Method for Belongs To Relationships
        // $posts = Post::factory()
        // ->count(3)
        // ->forUser([
        //         'name' => 'Jessica Archer',
        // ])
        // ->create();

        // DB::table('users')->insert([
        //     'name' => Str::random(10),
        //     'username' => Str::random(10),
        //     'email' => Str::random(10).'@gmail.com',
        //     'password' => Hash::make('password'),
        //     'email_verified_at' => now(),
        //     'is_admin' => false,
        //     'remember_token' => Str::random(10),
        // ]);

    }
}
