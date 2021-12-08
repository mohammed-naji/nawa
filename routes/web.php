<?php

use App\Http\Controllers\BlogController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SiteController;

Route::get('/', [SiteController::class, 'index'])->name('indexpage');

Route::get('/about', [SiteController::class, 'about'])->name('aboutpage');

Route::get('services', [SiteController::class, 'services'])->name('servicespage');

Route::get('team', [SiteController::class, 'team'])->name('teampage');

Route::get('contact', [SiteController::class, 'contact'])->name('contactpage');

Route::get('/user/{name}/{age}', [SiteController::class, 'user']);

// Route::get('url', Action);
// Route::post('url', Action);
// Route::put('url', Action);
// Route::patch('url', Action);
// Route::delete('url', Action);



Route::prefix('blog')->name('blog.')->group(function() {

    Route::get('/', [BlogController::class, 'index'])->name('index');
    Route::get('/about', [BlogController::class, 'about'])->name('about');
    Route::get('/contact', [BlogController::class, 'contact'])->name('contact');
    Route::post('/contact', [BlogController::class, 'contactSubmit'])->name('contactSubmit');
    Route::get('/post', [BlogController::class, 'post'])->name('post');

});
