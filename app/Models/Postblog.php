<?php

namespace App\Models;

// use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Illuminate\Database\Eloquent\Model;

class Postblog 
{
    // use HasFactory;
    private static $blog_posts = [
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
           
           public static function all()
        {   
        
            return collect(self::$blog_posts);
         
        
        }
           public static function find($slug)
           {
            $posts = static::all();
                //   $post = [];
                // foreach ($posts as $p) {
                // if ($p['slug'] === $slug) {
                //      $post  = $p;
                // }
                
                return $posts->firstWhere('slug', $slug);
            }

           }

