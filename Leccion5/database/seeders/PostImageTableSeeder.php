<?php

namespace Database\Seeders;

use App\Models\Post;
use App\Models\Category;
use App\Models\PostImage;
use Illuminate\Database\Seeder;

class PostImageTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        PostImage::truncate();

        $posts = Post::all();

        foreach($posts as $key => $p){

                PostImage::create([
                    'image' => "", //imagen
                    'post_id' => $p->id,
                    ]);
        }
    }
}
