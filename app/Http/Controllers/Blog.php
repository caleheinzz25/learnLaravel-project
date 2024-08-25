<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
class Blog extends Controller
{
    //
    public function singlePost(Post $post){
        $title = "Post";
        // echo json_encode($post);
        return view("post" , ["title" => 'Article '. str_replace([".", '-' , '_'], "" ,$post->title) . ' | ' . $post->author->name, "post" => $post]);
    }
}
