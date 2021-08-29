<?php

use Illuminate\Support\Facades\Route;

/* |-------------------------------------------------------------------------- | Web Routes |-------------------------------------------------------------------------- | | Here is where you can register web routes for your application. These | routes are loaded by the RouteServiceProvider within a group which | contains the "web" middleware group. Now create something great! | */

Route::get('/', function () {
    return view('home', [
    "title" => "Home"
    ]);
});

Route::get('/about', function () {
    return view('about', [
    "title" => "About",
    "name" => "Auliya Oni Priyandika",
    "email" => "oniauliya99@gmail.com",
    "image" => "auliya.jpeg"
    ]);
});

Route::get('/blog', function () {
    $blog_posts = [
        [
            "title" => "Judul Blog Pertama",
            "slug" => "judul-post-pertama",
            "author" => "Auliya Oni Priyandika",
            "body" => "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum."
        ],

        [
            "title" => "Judul Blog Kedua",
            "slug" => "judul-post-kedua",
            "author" => "Priyandika Auliya Oni",
            "body" => "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum."
        ]
    ];
    return view('post', [
    "title" => "Blog",
    "posts" => $blog_posts
    ]);
});

Route::get('blog/{slug}', function ($slug) {
    $blog_posts = [
        [
            "title" => "Judul Blog Pertama",
            "slug" => "judul-post-pertama",
            "author" => "Auliya Oni Priyandika",
            "body" => "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum."
        ],

        [
            "title" => "Judul Blog Kedua",
            "slug" => "judul-post-kedua",
            "author" => "Priyandika Auliya Oni",
            "body" => "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum."
        ]
    ];
    $new_post = [];
    foreach ($blog_posts as $post) {
        if ($post['slug'] === $slug) {
            $new_post = $post;
        }
    }
    return view('blog', [
    "title" => "Single Post",
    "post" => $new_post
    ]);


});