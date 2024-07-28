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

Route::get('/blog', function () {
    return view('livewire.pages.blog');
})->name('blog'); // Naming the profile route
