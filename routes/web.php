<?php

use Illuminate\Support\Facades\Route;
use App\Models\Post;
use App\Models\User;
use App\Models\Category;
use App\Http\Controllers\Blog;
use App\Http\Controllers\Auth;
Route::get('/', function () {
    return view('home', ["title" => "Home"]);
});

Route::get('/about', function () {
    return view('about', ["title" => "About"]);
});

Route::prefix('blog')->group(function(){
    Route::get('/', function (Post $post) {
        return view('blog', ["title" => "Blog", "posts" => $post::all()]);
    });

    Route::get('/author/{user:name}', function (User $user) {
        return view('blog', ["title" => "Artikel By ". str_replace(['-','_'], ' ',$user->name), 'posts' => $user->posts]);
    });

    Route::get('/job/{category:category}', function (Category $category) {
        return view('blog', ["title" => "Artikel By ". str_replace(['-','_'], ' ',$category->category), 'posts' => $category->posts]);
    });

    Route::get("/post/{post:title}", [Blog::class,"singlePost"]);
})->name("blog");
Route::get('/contact', function () {
    return view('contact' , ["title" => "Contact"]);
});


Route::prefix('login')->group(function(){
    Route::get('/',[Auth::class,"login"]);
})->name('login-page');