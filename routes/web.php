<?php
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Route;
Route::get('/', function () {
    return view('livewire.pages.home');
});

// Client Side
Route::get('/home', function () {
    return view('livewire.pages.home');
})->name('home'); // Naming the home route

Route::get('/about', function () {
    return view('livewire.pages.about');
})->name('about'); // Naming the about route

Route::get('/blog', function () {
    return view('livewire.pages.blog');
})->name('blog'); // Naming the profile route

// Client Side of End user
Route::get('/End-user', function () {
    return view('components.layouts.end-user');
});

Route::get('/End-user-home', function () {
    return view('livewire.pages.end-user-home');
})->name('end-user-home');

// client side logout

Route::get('/logout', function () {
    Session::forget('user_type');
    return redirect()->route('home'); // or wherever you want to redirect after logout
})->name('logout');