<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});
Route::get('posts',function () {
    return view('posts');
});
Route::get('posts/{post}',function ($slug) {
    
    $path = __DIR__."/../resources/posts/{$slug}.html";
    $post = file_get_contents($path);
    return view('post',['post'=>$post]);
});
?>