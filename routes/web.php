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

	Route::resource('webmanager/tags', 'TagsController')->names([
		'create' => 'webmanager.tags.create',
		'index' => 'webmanager.tags.index',
		'store' => 'webmanager.tags.store',
		'destroy' => 'webmanager.tags.destroy',
		'update' => 'webmanager.tags.update',
		'show' => 'webmanager.tags.show',
		'edit' => 'webmanager.tags.edit',
	]);
	Route::resource('webmanager/categories', 'CategoriesController')->names([
		'create' => 'webmanager.categories.create',
		'index' => 'webmanager.categories.index',
		'store' => 'webmanager.categories.store',
		'destroy' => 'webmanager.categories.destroy',
		'update' => 'webmanager.categories.update',
		'show' => 'webmanager.categories.show',
		'edit' => 'webmanager.categories.edit',
	]);;
	Route::resource('webmanager/posts', 'PostsController')->names([
		'create' => 'webmanager.posts.create',
		'index' => 'webmanager.posts.index',
		'store' => 'webmanager.posts.store',
		'destroy' => 'webmanager.posts.destroy',
		'update' => 'webmanager.posts.update',
		'show' => 'webmanager.posts.show',
		'edit' => 'webmanager.posts.edit',
	]);;
	Route::resource('webmanager/users', 'UsersController')->names([
		'create' => 'webmanager.users.create',
		'index' => 'webmanager.users.index',
		'store' => 'webmanager.users.store',
		'destroy' => 'webmanager.users.destroy',
		'update' => 'webmanager.users.update',
		'show' => 'webmanager.users.show',
		'edit' => 'webmanager.users.edit',
	]);;
	Route::resource('webmanager/profiles', 'ProfilesController')->names([
		'create' => 'webmanager.profiles.create',
		'index' => 'webmanager.profiles.index',
		'store' => 'webmanager.profiles.store',
		'destroy' => 'webmanager.profiles.destroy',
		'update' => 'webmanager.profiles.update',
		'show' => 'webmanager.profiles.show',
		'edit' => 'webmanager.profiles.edit',
	]);;
	Route::resource('webmanager/sites', 'SitesController')->names([
		'create' => 'webmanager.sites.create',
		'index' => 'webmanager.sites.index',
		'store' => 'webmanager.sites.store',
		'destroy' => 'webmanager.sites.destroy',
		'update' => 'webmanager.sites.update',
		'show' => 'webmanager.sites.show',
		'edit' => 'webmanager.sites.edit',
	]);;
});