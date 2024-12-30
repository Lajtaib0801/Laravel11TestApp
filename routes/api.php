<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/hello-api', function() {
    return "Hello API!";
});

Route::get('/request-test-api', function() {
    return [
        'title' => request('title')
    ];
});
