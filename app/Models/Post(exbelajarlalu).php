<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post 
{
    private static $blog_posts = [
            [
                'title' => 'Judul Post Pertama',
                'slug' => 'judul-post-pertama',
                'author' => 'Arief Cahyo Utomo',
                'body' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Inventore aliquid voluptate, culpa atque ipsam qui molestiae consectetur quo cum tempore quae quia, nulla delectus. Amet dolorem omnis magnam cumque atque!'
            ],
            [
                'title' => 'Judul Post Kedua',
                'slug' => 'judul-post-kedua',
                'author' => 'Harirs Bin Arief',
                'body' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Inventore aliquid voluptate, culpa atque ipsam qui molestiae consectetur quo cum tempore quae quia, nulla delectus. Amet dolorem omnis magnam cumque atque!'
            ]
        ];

        public static function all() 
        {
            return collect (self::$blog_posts);
        }

        public static function find($slug)
        {
            $posts = static::all();
            return $posts->firstWhere('slug', $slug);
        }

}
