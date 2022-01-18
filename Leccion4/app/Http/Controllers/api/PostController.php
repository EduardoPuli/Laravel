<?php

namespace App\Http\Controllers\api;

use App\Models\Post;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PostController extends Controller
{

    public function index()
    {
        $posts = Post::
        join('post_images','post_images.post_id','=','posts.id')->
        join('categories','categories.id','=','posts.category_id')->
        select('post.*','categories.title as category','post_image.image')->
        orderBy('posts.created_at', 'desc')->paginate(10);
        // echo "Hola mundo Lara";
        return $this->successResponse($posts); //Network para revisar el direccionamiento
            //"title" => "Hola mundo laraaaa",
            //"content" => "Contenido"
    }

    public function show(Post $post)
    {
        $post->image;
        $post->category;
        
        //consulta
        return $this->successResponse($post);
    }

    public function url_clear(String $url_clear)
    {
        $post =Post::where('url _clear',$url_clear)->firstOrFail();
        $post->image;
        $post->category;
  
        return $this->successResponse($post);
    }

    public function category(Category $category)
    {
        return $this->successResponse(["post"=>$category -> post() -> paginate(10), "category" => $category]);
    }

    
}
