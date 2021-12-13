<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\RelationController;
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

// CRUD Application Routes
// to get all records from DN

// Route::get('posts', [PostController::class, 'index'])->name('posts.index');
// Route::get('posts/{id}', [PostController::class, 'show'])->name('posts.show');
// Route::get('posts/create', [PostController::class, 'create'])->name('posts.create');
// Route::post('posts', [PostController::class, 'store'])->name('posts.store');
// Route::get('posts/{id}/edit', [PostController::class, 'edit'])->name('posts.edit');
// Route::put('posts/{id}', [PostController::class, 'update'])->name('posts.update');
// Route::delete('posts/{id}', [PostController::class, 'destroy'])->name('posts.destroy');

Route::resource('posts', PostController::class);



Route::get('one-to-one', [RelationController::class, 'one_to_one']);
Route::get('one-to-many', [RelationController::class, 'one_to_many']);

// CapitalizeCase
// UPPERCASE
// snake_case
// kebab-case
