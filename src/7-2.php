<?php

Route::resource('post', 'PostsController');

// Is roughly the same as all of the following
Route::get('post', ['uses' => 'PostsController@index']);
Route::get('post/create', ['uses' => 'PostsController@create']);
Route::post('post', ['uses' => 'PostsController@store']);
Route::get('post/{post}', ['uses' => 'PostsController@show']);
Route::get('post/{post}/edit', ['uses' => 'PostsController@edit']);
Route::put('post/{post}', ['uses' => 'PostsController@update']);
Route::delete('post/{post}', ['uses' => 'PostsController@destroy']);
