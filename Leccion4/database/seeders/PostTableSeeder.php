<?php

namespace Database\Seeders;

use App\Models\Post;
use App\Models\Category;
use Illuminate\Database\Seeder;

class PostTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Post::truncate();

        $categories = Category::all();

        foreach($categories as $key => $c){
            for($i = 1; $i<=20; $i++){
                Post::create([
                    'title' => "Post $i key",
                    'url_clear' => "post-$i-key",
                    'content' => "Laravel includes the ability to seed your database with data using seed classes. All seed classes are stored in the database/seeders directory. By default, a DatabaseSeeder class is defined for you. From this class, you may use the call method to run other seed classes, allowing you to control the seeding order.",
                    'posted' => 'yes',
                    'category_id' => $c->id
                    ]);
            }
        }
    }
}
