<?php

use App\Http\Controllers\PostController;
use App\Models\Post;
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
    return view('home',[
        'title_navbar' => 'Home',
        'title' => 'Home Page'
    ]);
});
Route::get('/posts',[PostController::class, 'index']);


// Single Page Blog Posts
Route::get('/post/{slug}',[PostController::class,'show']);

Route::get('/about', function () {
    return view('about' ,[
        'title_navbar' => 'About',
        'name' => 'Muhammad ari kuncoro',
        'title' => 'About Page',
    ]);
});
