<?php

Auth::routes();

//================== This is for Front End ====================

// Landing Page
Route::get('/', function () {
	return view('front.landing');
});

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
	Route::get('/webmanager', 'WebManagerController@index')->name('webmanager');

	Route::get('/webmanager/posts/archived', 'PostsController@archived')->name('webmanager.posts.archived');
	Route::get('/webmanager/posts/restore/{id}', 'PostsController@restore')->name('webmanager.posts.restore');
	Route::delete('/webmanager/posts/clean/{id}', 'PostsController@clean')->name('webmanager.posts.clean');
	Route::delete('/webmanager/posts/massclean', 'PostsController@massclean')->name('webmanager.posts.massclean');

	Route::prefix('webmanager')->name('webmanager.')->group(function() {
   		Route::resource('tags','TagsController');
	});

	Route::prefix('webmanager')->name('webmanager.')->group(function() {
   		Route::resource('categories','CategoriesController');
	});

	Route::prefix('webmanager')->name('webmanager.')->group(function() {
   		Route::resource('posts','PostsController');
	});

	Route::prefix('webmanager')->name('webmanager.')->group(function() {
   		Route::resource('users','UsersController');
	});

	Route::prefix('webmanager')->name('webmanager.')->group(function() {
   		Route::resource('profiles','ProfilesController');
	});

	Route::prefix('webmanager')->name('webmanager.')->group(function() {
   		Route::resource('sites','SitesController');
	});

});