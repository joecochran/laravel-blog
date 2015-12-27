<?php

Route::group(['middleware' => ['web']], function() {
    Route::get('authors', 'AuthorsController@index');
    Route::get('authors/{id}', 'AuthorsController@show');
    Route::get('posts/create', 'PostsController@create');
    Route::post('posts', 'PostsController@store');
    Route::get('/', 'PostsController@index');
    Route::get('posts/{id}', 'PostsController@show');
});
