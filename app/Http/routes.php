<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/


Route::get('authors', 'AuthorsController@index');
Route::get('authors/{id}', 'AuthorsController@show');
Route::get('posts/create', 'PostsController@create');
Route::post('posts', 'PostsController@store');
Route::get('/', 'PostsController@index');
Route::get('posts/{id}', 'PostsController@show');
/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['middleware' => ['web']], function () {
    //
});
