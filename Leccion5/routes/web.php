<?php

//use PostController; linea 62
//use App\Http\Controllers\PostController;

use App\Http\Controllers\dashboard\UserController;
use App\Http\Controllers\dashboard\PostController;
use App\Http\Controllers\dashboard\CategoryController;
use Illuminate\Support\Facades\Route;
use phpDocumentor\Reflection\Types\Null_;

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





/*Route::get('/test', function () {
    return "Hola Mundo Test";
});
Route::get('/acerca-de', function () {
    return "Hola Mundo";
});
Route::get('/hola/{nombre?}', function ($nombre = "Pepe") {
    return "Hola: $nombre conocenos <a href='".route("nosotros")."'>nosostros</a>";
});
Route::get('/hola/{nombre}', function ($nombre) {
    return "Hola: $nombre";
});
*/

//Route::get('/sobre-nosostros-en-la-web', function () {
//    return "<h1>Toda la informacion sobre nosotros</h1>";
//})->name("nosotros");

//Route::get('home/{nombre?}/{apellido?}',function($nombre="Pepe",$apellido = "Cruz"){
//
//    $posts = ["Posts1", "Posts2", "Posts3", "Posts4"];
//    $posts2 = Null;
//
//    //$nombre = "Edu";
//    //return view("home")->with("nombre",$nombre)->with("apellido",$apellido);
//
//    return view("home",['nombre'=>$nombre, 'apellido'=>$apellido, 'posts'=>$posts, 'posts2'=>$posts2]);
//})->name("home");

//Route::get('post',[PostController::class,'index']);
//Route::get('post',[App\Http\Controllers\PostController::class,'index']);


/*Route::group(['prefix' => 'admin'], function(){
    Route::resource('post',PostController::class);
});
*/

Route::resource('dashboard/post',PostController::class);
Route::post('dashboard/post/{post}/image', 'dashboard/PostController@image')->name('post.image');
Route::resource('dashboard/category',CategoryController::class);
Route::resource('dashboard/user',UserController::class);

Route::get('/', 'App\Http\Controllers\web\WebController@index')->name('index');

Route::get('/detail/{id}', 'App\Http\Controllers\web\WebController@detail');
Route::get('/post-category/{id}', 'App\Http\Controllers\web\WebController@post_category');

Route::get('/contact', 'App\Http\Controllers\web\WebController@contact');
Route::get('/categories', 'App\Http\Controllers\web\WebController@categories');




Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');



