<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Arief Cahyo Utomo',
            'username' => 'ariefcu',
            'email' => 'ariefcu@gmail.com',
            'password' => bcrypt('bismillah'),
            'is_admin'=>true,
        ]);
        
        // User::create([
        //     'name' => 'Harits Bin Arief',
        //     'email' => 'harits@gmail.com',
        //     'password' => bcrypt('bismillah'),
        //     'is_admin'=>true,
        // ]);

    }
}
