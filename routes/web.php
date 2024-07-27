<?php
use Illuminate\Support\Facades\Route;
Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function () {
    return view('livewire.pages.home');
})->name('home'); // Naming the home route

Route::get('/about', function () {
    return view('livewire.pages.about');
})->name('about'); // Naming the about route

Route::get('/profile', function () {
    return view('profile');
})->name('profile'); // Naming the profile route
