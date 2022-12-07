<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home', [
        'title' => 'Home'
    ]);
});

Route::get('/about', function () {
    return view('about', [
        'title' => 'About',
        'name' => 'Arief Cahyo Utomo',
        'email' => 'ariefcu@gmail.com',
        'image' => 'img/PIT.png'
    ]);
});

Route::get('/blog', function () {
    $blog_posts = [
        [
            'title' => 'Judul Post Pertama',
            'slug' => 'judul-post-pertama',
            'author' => 'Arief Cahyo Utomo',
            'body' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Inventore aliquid voluptate, culpa atque ipsam qui molestiae consectetur quo cum tempore quae quia, nulla delectus. Amet dolorem omnis magnam cumque atque!'
        ],
        [
            'title' => 'Judul Post Kedua',
            'slug' => 'judul-post-kedua',
            'author' => 'Arief Cahyo Utomo',
            'body' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Inventore aliquid voluptate, culpa atque ipsam qui molestiae consectetur quo cum tempore quae quia, nulla delectus. Amet dolorem omnis magnam cumque atque!'
        ]
    ];
    return view('posts', [
        'title' => 'Posts',
        'posts' => $blog_posts
    ]);
});

// halaman single post
Route::get('posts/{slug}', function ($slug) {
    $blog_posts = [
        [
            'title' => 'Judul Post Pertama',
            'slug' => 'judul-post-pertama',
            'author' => 'Arief Cahyo Utomo',
            'body' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Inventore aliquid voluptate, culpa atque ipsam qui molestiae consectetur quo cum tempore quae quia, nulla delectus. Amet dolorem omnis magnam cumque atque!'
        ],
        [
            'title' => 'Judul Post Kedua',
            'slug' => 'judul-post-kedua',
            'author' => 'Arief Cahyo Utomo',
            'body' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Inventore aliquid voluptate, culpa atque ipsam qui molestiae consectetur quo cum tempore quae quia, nulla delectus. Amet dolorem omnis magnam cumque atque!'
        ]
    ];
    $new_post = [];
    foreach($blog_posts as $post) {
        if($post['slug'] === $slug) {
            $new_post = $post;
        }
    }
    return view('post', [
        'title' => 'Single Posts',
        'post' => $new_post
    ]);
});