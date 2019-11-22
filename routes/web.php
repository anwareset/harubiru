<?php

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function () {
    return view('home');
})->name('home');

Route::resource('tags', 'TagsController');
Route::resource('categories', 'CategoriesController');
Route::resource('posts', 'PostsController');