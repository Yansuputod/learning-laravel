<?php 

namespace App\Models;

use Illuminate\Support\Arr;

class Post{
    public static function all(){
        return [
            [
                'id' => 1,
                'slug' => 'post-1',
                'title' => 'Post 1',
                'author' => 'Author 1',
                'content' => 'lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.'
            ], [
                'id' => 2,
                'slug' => 'post-2',
                'title' => 'Post 2',
                'author' => 'Author 2',
                'content' => 'lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua'
            ]
        ];
    }

    public static function find($slug){
        return Arr::first(self::all(), function($post) use ($slug){
            return $post['slug'] == $slug;
        });
    }
}