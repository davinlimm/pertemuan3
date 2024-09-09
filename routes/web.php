<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/Home', function () {
    return view('home');
});

Route::get('/Profile', function () {
    return view('profiledavin');
});

Route::get('/Matkul', function () {
    return view('matkul');
});