<?php

use Illuminate\Support\Facades\Route;

Route::get('/learning', function () {
    $message = config('learning.message');
    return view('learning::message', compact('message'));
});
