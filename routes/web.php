<?php

use App\Models\Paket;
use App\Models\Home;
use App\Models\Profile;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $home = Home::first();
    $pakets = Paket::all();
    return view('home', compact('home', 'pakets'));
});

Route::get('/about', function () {
    $home = Home::first();
    return view('about', compact('home'));
});

Route::get('/profile', function () {
    $home = Home::first();
    $profile = Profile::first();
    return view('profile', compact('profile', 'home') );
});

Route::get('/contact', function () {
    $profile = Profile::first();
    $home = Home::first();
    return view('contact', compact('profile', 'home'));
});
