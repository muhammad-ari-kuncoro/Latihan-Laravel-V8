<?php

namespace App\Http\Controllers;
use App\Models\Postblog;
use App\Models\Post;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Category;
class PostController extends Controller
{
    //
    public function index()
    {
        return view('posts',[
            'title_navbar' => 'Blog',
            "title" => 'Blog Page',
            "posts" => Post::all()
    
        ]);
    }
    public function show(Post $post){
        return view('post',[
            'title_navbar' => 'Blog',
            'title' => 'Single Post Page',
            'post'  => $post,
            'category' =>$post->category->name
        ]);
    }
}
