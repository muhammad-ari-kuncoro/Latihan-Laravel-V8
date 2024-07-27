<?php

namespace App\Http\Controllers;
use App\Models\Postblog;
use App\Models\Post;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

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
    public function show($slug){
        return view('post',[
            'title_navbar' => 'Blog',
            'title' => 'Single Post Page',
            'post'  => Post::find($slug)
        ]);
    }
}
