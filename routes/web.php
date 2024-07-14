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
    return view('home',[
        'title_navbar' => 'Home',
        'title' => 'Home Page'
    ]);
});

Route::get('/posts', function () {


$blog_posts = [

    [
     "title" => "judul Post Pertama",
     "slug" => 'Judul_Post_Pertama',
     "author" => "Muhammad ari kuncoro",
     "body" => "
     Lorem ipsum dolor sit amet consectetur, adipisicing elit. Blanditiis dolore repudiandae rerum fuga voluptate hic nihil accusantium, eligendi beatae corporis odio ab laboriosam eum, eveniet facere dignissimos explicabo facilis qui minima similique quisquam. Dolores sint dicta deleniti nemo quam ratione, tempore assumenda saepe vero expedita eius laborum, nesciunt tempora suscipit?"
    ] ,

    [
     "title" => "judul Post Kedua",
     "slug" => 'Judul_Post_Kedua',
     "author" => "Muhammad ari ",
     "body" => "
     Lorem ipsum dolor sit amet consectetur, adipisicing elit. Blanditiis dolore repudiandae rerum fuga voluptate hic nihil accusantium, eligendi beatae corporis odio ab laboriosam eum, eveniet facere ?"
    ] ,

 ];


    return view('posts',[
        'title_navbar' => 'Blog',
        'title' => 'Blog Page',
        'posts' => $blog_posts

    ]);
});



Route::get('/about', function () {
    return view('about' ,[
        'title_navbar' => 'About',
        'title' => 'About Page',
    ]);
});



// Single Page Blog Posts
Route::get('post/{slug}', function($slug){

    $blog_posts = [

        [
         "title" => "judul Post Pertama",
         "slug" => 'Judul_Post_Pertama',
         "author" => "Muhammad ari kuncoro",
         "body" => "
         Lorem ipsum dolor sit amet consectetur, adipisicing elit. Blanditiis dolore repudiandae rerum fuga voluptate hic nihil accusantium, eligendi beatae corporis odio ab laboriosam eum, eveniet facere dignissimos explicabo facilis qui minima similique quisquam. Dolores sint dicta deleniti nemo quam ratione, tempore assumenda saepe vero expedita eius laborum, nesciunt tempora suscipit?"
        ] ,

        [
         "title" => "judul Post Kedua",
         "slug" => 'Judul_Post_Kedua',
         "author" => "Muhammad ari ",
         "body" => "
         Lorem ipsum dolor sit amet consectetur, adipisicing elit. Blanditiis dolore repudiandae rerum fuga voluptate hic nihil accusantium, eligendi beatae corporis odio ab laboriosam eum, eveniet facere ?"
        ] ,

     ];

     $new_post = [];
    foreach ($blog_posts as $post) {
        if ($post['slug'] === $slug) {
            $new_post   = $post;
        }
    }


return view('post',[
    'title_navbar' => 'Blog',
    'title' => 'Single Post Page',
    'post'  => $new_post
]);
});
