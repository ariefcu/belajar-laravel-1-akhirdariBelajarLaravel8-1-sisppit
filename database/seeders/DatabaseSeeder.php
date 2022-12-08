<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\User;
use App\Models\Category;
use App\Models\Post;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        // User::create([
        //     'name' => 'Arief Cahyo Utomo',
        //     'email' => 'ariefcu@gmail.com',
        //     'password' => bcrypt('12345')
        // ]);
        
        // User::create([
        //     'name' => 'Harits Bin Arief',
        //     'email' => 'harits@gmail.com',
        //     'password' => bcrypt('12345')
        // ]);

        User::factory(3)->create();

        Category::create([
            'name' => 'Web Programming',
            'slug' => 'web-programming'
        ]);

        Category::create([
            'name' => 'Personal',
            'slug' => 'personal'
        ]);

        Post::factory(20)->create();

        // Post::create([
        //     'title' => 'Judul Pertama',
        //     'slug' => 'judul-pertama',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias a non, placeat atque error magni cumque illo delectus? Quod, enim.',
        //     'body' => '<p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quis quaerat id distinctio amet laboriosam autem nisi quasi! </p><p>Quos voluptas saepe excepturi pariatur provident illum fugiat laudantium, incidunt magni rem ab esse cupiditate consequatur omnis natus vitae expedita dicta eligendi quae porro voluptatibus doloribus. Ex nihil animi ea error? </p><p>A modi aperiam quod velit numquam, voluptate illum facilis natus eos nisi officiis laboriosam nemo eius cum molestias animi esse accusantium nobis, quasi sequi. A dolorem laudantium voluptates adipisci recusandae excepturi dignissimos magni doloribus sunt, modi facere cum exercitationem ipsum dolorum enim vel accusamus voluptas quidem reiciendis. </p><p>Magni voluptates blanditiis laboriosam reprehenderit tempora eligendi tenetur dolorem, veritatis minima aut, consequuntur in maxime ipsam eos illo architecto reiciendis excepturi deserunt ad repellendus necessitatibus omnis quasi! Sed ad, rerum sint debitis soluta et deleniti hic quia dolorem suscipit vero excepturi architecto reprehenderit accusantium doloribus corrupti fuga iure. In corrupti, exercitationem ad quidem sint illo. </p>',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);
        
        // Post::create([
        //     'title' => 'Judul Kedua',
        //     'slug' => 'judul-kedua',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias a non, placeat atque error magni cumque illo delectus? Quod, enim.',
        //     'body' => '<p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quis quaerat id distinctio amet laboriosam autem nisi quasi! </p><p>Quos voluptas saepe excepturi pariatur provident illum fugiat laudantium, incidunt magni rem ab esse cupiditate consequatur omnis natus vitae expedita dicta eligendi quae porro voluptatibus doloribus. Ex nihil animi ea error? </p><p>A modi aperiam quod velit numquam, voluptate illum facilis natus eos nisi officiis laboriosam nemo eius cum molestias animi esse accusantium nobis, quasi sequi. A dolorem laudantium voluptates adipisci recusandae excepturi dignissimos magni doloribus sunt, modi facere cum exercitationem ipsum dolorum enim vel accusamus voluptas quidem reiciendis. </p><p>Magni voluptates blanditiis laboriosam reprehenderit tempora eligendi tenetur dolorem, veritatis minima aut, consequuntur in maxime ipsam eos illo architecto reiciendis excepturi deserunt ad repellendus necessitatibus omnis quasi! Sed ad, rerum sint debitis soluta et deleniti hic quia dolorem suscipit vero excepturi architecto reprehenderit accusantium doloribus corrupti fuga iure. In corrupti, exercitationem ad quidem sint illo. </p>',
        //     'category_id' => 2,
        //     'user_id' => 2
        // ]);

        // Post::create([
        //     'title' => 'Judul Ketiga',
        //     'slug' => 'judul-ketiga',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias a non, placeat atque error magni cumque illo delectus? Quod, enim.',
        //     'body' => '<p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quis quaerat id distinctio amet laboriosam autem nisi quasi! </p><p>Quos voluptas saepe excepturi pariatur provident illum fugiat laudantium, incidunt magni rem ab esse cupiditate consequatur omnis natus vitae expedita dicta eligendi quae porro voluptatibus doloribus. Ex nihil animi ea error? </p><p>A modi aperiam quod velit numquam, voluptate illum facilis natus eos nisi officiis laboriosam nemo eius cum molestias animi esse accusantium nobis, quasi sequi. A dolorem laudantium voluptates adipisci recusandae excepturi dignissimos magni doloribus sunt, modi facere cum exercitationem ipsum dolorum enim vel accusamus voluptas quidem reiciendis. </p><p>Magni voluptates blanditiis laboriosam reprehenderit tempora eligendi tenetur dolorem, veritatis minima aut, consequuntur in maxime ipsam eos illo architecto reiciendis excepturi deserunt ad repellendus necessitatibus omnis quasi! Sed ad, rerum sint debitis soluta et deleniti hic quia dolorem suscipit vero excepturi architecto reprehenderit accusantium doloribus corrupti fuga iure. In corrupti, exercitationem ad quidem sint illo. </p>',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Keempat',
        //     'slug' => 'judul-Empat',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias a non, placeat atque error magni cumque illo delectus? Quod, enim.',
        //     'body' => '<p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quis quaerat id distinctio amet laboriosam autem nisi quasi! </p><p>Quos voluptas saepe excepturi pariatur provident illum fugiat laudantium, incidunt magni rem ab esse cupiditate consequatur omnis natus vitae expedita dicta eligendi quae porro voluptatibus doloribus. Ex nihil animi ea error? </p><p>A modi aperiam quod velit numquam, voluptate illum facilis natus eos nisi officiis laboriosam nemo eius cum molestias animi esse accusantium nobis, quasi sequi. A dolorem laudantium voluptates adipisci recusandae excepturi dignissimos magni doloribus sunt, modi facere cum exercitationem ipsum dolorum enim vel accusamus voluptas quidem reiciendis. </p><p>Magni voluptates blanditiis laboriosam reprehenderit tempora eligendi tenetur dolorem, veritatis minima aut, consequuntur in maxime ipsam eos illo architecto reiciendis excepturi deserunt ad repellendus necessitatibus omnis quasi! Sed ad, rerum sint debitis soluta et deleniti hic quia dolorem suscipit vero excepturi architecto reprehenderit accusantium doloribus corrupti fuga iure. In corrupti, exercitationem ad quidem sint illo. </p>',
        //     'category_id' => 2,
        //     'user_id' => 2
        // ]);

        // Post::create([
        //     'title' => 'Judul Kelima',
        //     'slug' => 'judul-kelima',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias a non, placeat atque error magni cumque illo delectus? Quod, enim.',
        //     'body' => '<p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quis quaerat id distinctio amet laboriosam autem nisi quasi! </p><p>Quos voluptas saepe excepturi pariatur provident illum fugiat laudantium, incidunt magni rem ab esse cupiditate consequatur omnis natus vitae expedita dicta eligendi quae porro voluptatibus doloribus. Ex nihil animi ea error? </p><p>A modi aperiam quod velit numquam, voluptate illum facilis natus eos nisi officiis laboriosam nemo eius cum molestias animi esse accusantium nobis, quasi sequi. A dolorem laudantium voluptates adipisci recusandae excepturi dignissimos magni doloribus sunt, modi facere cum exercitationem ipsum dolorum enim vel accusamus voluptas quidem reiciendis. </p><p>Magni voluptates blanditiis laboriosam reprehenderit tempora eligendi tenetur dolorem, veritatis minima aut, consequuntur in maxime ipsam eos illo architecto reiciendis excepturi deserunt ad repellendus necessitatibus omnis quasi! Sed ad, rerum sint debitis soluta et deleniti hic quia dolorem suscipit vero excepturi architecto reprehenderit accusantium doloribus corrupti fuga iure. In corrupti, exercitationem ad quidem sint illo. </p>',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);

    }
}
