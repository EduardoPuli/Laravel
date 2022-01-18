//<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\api\PostController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

//Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//    return $request->user();
//});

Route::resource('post',PostController::class)->only([
    'index', 'show'
]);

Route::get('post/{category}/category','api\PostController@category');
Route::get('post/{url_clear}/url_clear','api\PostController@url_clear');
//parametro llamado category en llave

Route::get('category','api\CategoryController@index');
Route::get('category/all','api\CategoryController@all');