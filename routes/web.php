<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('templates.base');
});
Route::get('/test', function () {
    return view('welcome');
});