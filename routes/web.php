<?php

use App\Models\Post;
use Illuminate\Support\Facades\Route;

Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/', function () {
    return view('home', [
        'title' => 'Home',
    ]);
});

Route::prefix('/posts')->group(function () {
    Route::get('/', function () {
        return view('posts', [
            'title' => 'Blog',
            'posts' => Post::all(),
        ]);
    });

    Route::get('/{post:slug}', function (Post $post) {
        return view('post', [
            'title' => 'Blog - ' . $post['title'],
            'post' => $post,
        ]);
    });
});

Route::get('/about', function () {
    return view('about', [
        'title' => 'About',
        'name' => 'Freyable',
    ]);
});

Route::get('/contact', function () {
    return view('contact', [
        'title' => 'Contact',
    ]);
});
