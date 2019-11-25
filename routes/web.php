<?php

Auth::routes();

Route::get('/', function () {
	return view('welcome');
});

Route::group(['middleware' => 'auth'], function()
{
	Route::get('/home', 'HomeController@index')->name('home');

	Route::get('/posts/archived', 'PostsController@archived')->name('posts.archived');
	Route::get('/posts/restore/{id}', 'PostsController@restore')->name('posts.restore');
	Route::delete('/posts/clean/{id}', 'PostsController@clean')->name('posts.clean');
	Route::delete('/posts/massclean', 'PostsController@massclean')->name('posts.massclean');

	Route::resource('tags', 'TagsController');
	Route::resource('categories', 'CategoriesController');
	Route::resource('posts', 'PostsController');
});
