<?php

Route::get('/', 'ReviewsController@index')->name('reviews.index');
Route::resource('reviews', 'ReviewsController');

// user registration
Route::get('signup', 'Auth\RegisterController@showRegistrationForm')->name('signup.get');
Route::post('signup', 'Auth\RegisterController@register')->name('signup.post');

// login certification
Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('login', 'Auth\LoginController@login')->name('login.post');
Route::get('logout', 'Auth\LoginController@logout')->name('logout.get');

Route::get('reviews', 'ReviewsController@search')->name('reviews.search');

