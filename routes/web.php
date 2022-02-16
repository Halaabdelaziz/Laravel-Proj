<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\postController;
Route::resource('posts', postController::class);
/*
// get all  posts
Route::get('/posts',[postController::class,"index"])->name('posts.index');

// show one post 
Route::get('/posts/{id}',[postController::class,"show"])->where('id', '[0-9]+')->name('posts.show');

// edit post
Route::get('/posts/{id}/edit',[postController::class,"edit"])->where('id', '[0-9]+')->name('posts.edit');

// update 
Route::PATCH('/posts/{id}',[postController::class,"update"])->name('posts.update');

// create
Route::get('/posts/create',[postController::class,"create"])->name('posts.create');

// delete
Route::get('/posts/{id}', [postController::class,"destroy"])->name('photos.destroy');

// store

Route::post('/posts', [postController::class,"store"])->name('photos.store');

*/