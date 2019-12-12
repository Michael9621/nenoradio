<?php

//front end
Route::get('/welcome', 'FrontendController@index')->name('welcome');
Route::get('category/{slug}', 'FrontendController@single_category')->name('single_category');
Route::get('post/{slug}', 'FrontendController@single_post')->name('single_post');
Route::get('/', function(){
    return view('comingsoon');
});
//search
Route::get(' /results', function(){

    $posts = App\Post::where('title', 'like', '%' . request('search') . '%')->get();

    return view('results')->with('posts', $posts)
                          ->with('query', request('query'));

});

Route::group(['prefix' => 'auth'], function () {

    Auth::routes([ 'register' => false ]);

});



Route::group(['prefix' => 'manage'], function () {

    Route::get('/dashboard', 'FrontendController@dashboard')->name('index');
    //post routes
    Route::get('/view_posts', 'PostController@index')->name('view_posts');
    Route::get('/create_post', 'PostController@create')->name('create_post');
    Route::post('/store_post', 'PostController@store')->name('store_post');
    Route::get('/edit_post/{id}', 'PostController@edit')->name('edit_post');
    Route::post('/update_post/{id}', 'PostController@update')->name('update_post');
    Route::get('/trashed_posts', 'PostController@trashed ')->name('trashed_posts');
    
    //category routes
    Route::get('/view_category', 'CategoryController@index')->name('view_category');
    Route::get('/create_category', 'CategoryController@create')->name('create_category');
    Route::post('store_category', 'CategoryController@store')->name('store_category');
    Route::get('/edit_category/{id}', 'CategoryController@edit')->name('edit_category');
    Route::post('/update_category/{id}', 'CategoryController@update')->name('update_category');
    Route::get('/delete_category/{id}', 'CategoryController@destroy')->name('delete_category');

    //user routes
    Route::get('/view_users', 'UserController@index')->name('view_users');
    Route::get('/create_user', 'UserController@create')->name('create_user');
    Route::post('store_user', 'UserController@store')->name('store_user');
    Route::get('/edit_user/{id}', 'UserController@edit')->name('edit_user');
    Route::post('/update_user/{id}', 'UserController@update')->name('update_user');
    Route::get('/delete_user/{id}', 'UserController@destroy')->name('delete_user');
    Route::get('/make_admin/{id}', 'UserController@makeAdmin')->name('make_admin');
    Route::get('/remove_admin/{id}', 'UserController@removeAdmin')->name('remove_admin');

    //admin routes--group
    Route::group(['middleware' => 'admin'], function(){
        Route::get('/delete_post/{id}', 'PostController@destroy')->name('delete_post');
        Route::get('/kill_post/{id}', 'PostController@kill')->name('kill_post');
        Route::get('/restore_post/{id}', 'PostController@restore')->name('restore_post');

    });

});

