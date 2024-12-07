<?php
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

// Landing Page
Route::get('/', function () {
    return view('livewire.pages.home');
});
// Webpage available for non authenticated End User
Route::get('/home', function () {
    return view('livewire.pages.home');
})->name('home'); // Home Page
Route::get('/about', function () {
    return view('livewire.pages.about');
})->name('about'); // About Page
Route::get('/blog', function () {
    return view('livewire.pages.blog');
})->name('blog'); // Blogs Post
Route::get('/view/{postId}',function ($postId) {
    return view('livewire.pages.view-user-post', ['postId' => $postId]);
})->name('view');

// authenticated End User
Route::middleware('is_user')->group(function () {
    Route::get('/post', function () {
        return view('livewire.pages.write-post');
    })->name('post'); // Page for Add post for End user

    Route::get('/profile', function () {
        return view('livewire.pages.profile');
    })->name('profile'); // Profile for End user
});
// LOG OUT
Route::get('/logout', function () {
    Auth::logout();
    Session::flush();
    return redirect()->route('home'); 
})->name('logout');