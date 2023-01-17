<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Category;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        Category::create([
            'name' => 'Sunnah',
            'slug' => 'sunnah'
        ]);

        Category::create([
            'name' => 'Nature',
            'slug' => 'nature'
        ]);

        Category::create([
            'name' => 'Hadith',
            'slug' => 'hadith'
        ]);

    }
}
