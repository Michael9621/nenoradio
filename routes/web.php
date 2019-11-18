<?php

//post routes
Route::get('/view_posts', 'PostController@index')->name('view_posts');
Route::get('/create_post', 'PostController@create')->name('create_post');
Route::post('/store_post', 'PostController@store')->name('store_post');
Route::get('/edit_post/{id}', 'PostController@edit')->name('edit_post');
Route::post('/update_post/{id}', 'PostController@update')->name('update_post');
Route::get('/delete_post/{id}', 'PostController@destroy')->name('delete_post');
Route::get('/trashed_posts', 'PostController@trashed')->name('trashed_posts');
Route::get('/kill_post/{id}', 'PostController@kill')->name('kill_post');
Route::get('/restore_post/{id}', 'PostController@restore')->name('restore_post');

//category routes
Route::get('/view_category', 'CategoryController@index')->name('view_category');
Route::get('/create_category', 'CategoryController@create')->name('create_category');
Route::post('store_category', 'CategoryController@store')->name('store_category');
Route::get('/edit_category/{id}', 'CategoryController@edit')->name('edit_category');
Route::post('/update_category/{id}', 'CategoryController@update')->name('update_category');
Route::get('/delete_category/{id}', 'CategoryController@destroy')->name('delete_category');

Route::get('/index', function () {
    return view('manage.index');
})->name('index');

//front end
Route::get('/', 'FrontendController@index')->name('welcome');
Route::get('category/{slug}', 'FrontendController@single_category')->name('single_category');
Route::get('/{slug}', 'FrontendController@single_post')->name('single_post');

//search
Route::get(' /results', function(){

    $posts = App\Post::where('title', 'like', '%' . request('search') . '%')->get();

    return view('results')->with('posts', $posts)
                          ->with('query', request('query'));

});




