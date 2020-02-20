<?php

Auth::routes();

//================== This is for Front End ====================

// Landing Page
Route::get('/', 'LandingController@index');

// Blog
Route::get('/blog', 'BlogController@index');
Route::get('/blog/{slug}', 'BlogController@show')->name('blog.details');

// Main Menu
Route::get('/portofolio', function () {
	return view('front.portofolio');
});
Route::get('/about', function () {
	return view('front.about');
});
Route::get('/contact', function () {
	return view('front.contact');
});

// Quick Links
Route::get('/license', function () {
	return view('front.license');
});
Route::get('/privacy-policy', function () {
	return view('front.privacy-policy');
});
Route::get('/contribute', function () {
	return view('front.contribute');
});

// Hall of Fame
Route::get('/report-bug', function () {
	return view('front.report-bug');
});
Route::get('/heroes', function () {
	return view('front.heroes');
});
Route::get('/patched', function () {
	return view('front.patched');
});



//================== This is for Back End ====================

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
	Route::resource('users', 'UsersController');
	Route::resource('profiles', 'ProfilesController');
	Route::resource('sites', 'SitesController');
});
