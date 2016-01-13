<?php

Route::group(['middleware' => ['web']], function() {
    Route::get('authors', 'AuthorsController@index');
    Route::get('authors/{id}', 'AuthorsController@show');
    Route::resource('posts', 'PostsController');
    Route::get('/', 'PostsController@index');
});

Route::group(['middleware' => 'web'], function () {
    Route::auth();

    Route::get('/admin', 'AdminController@index');
});
