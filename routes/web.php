<?php

use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    $username = 'Sanyi';
    return view('welcome', [
        'name' => $username
    ]);
});

Route::view('/contact', 'contact');

Route::get('/szoveg', function () {
    // return "Hali!";
    return ["foo" => "bar"];
});

Route::get('/pass-array', function () {
    $tasks = [
        "Go to the store",
        "Go to the cinema",
        "Go to the market",
        "akarmi"
    ];
    $foobar = 13;
    // return view('tasklist', [
    //     'tasks' => $tasks,
    //     'foo' => $foobar
    // ]);
    return view('tasklist')->withTasks($tasks)->withFoo($foobar);
});

Route::get('/request-tests', function () {
    return view('request-input', [
        'title' => request('title')
    ]);
});

// Route::get('/posts/{post}', function ($post) {
//     $posts=[
//         "first-post" => "This is the first post of the blog",
//         "second-post" => "This is the second post of the blog"
//     ];
//     if (!array_key_exists($post, $posts)) {
//         abort(404);
//     }
//     return view('post', [
//         'post' => $posts[$post]
//     ]);
// });
Route::get('/posts/{post}', [PostController::class, 'show']);

