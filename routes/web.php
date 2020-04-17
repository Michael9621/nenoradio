<?php

//front end
Route::get('/news', 'FrontendController@index')->name('welcome');
Route::get('category/{slug}', 'FrontendController@single_category')->name('single_category');
Route::get('post/{slug}', 'FrontendController@single_post')->name('single_post');
Route::get('/', 'FrontendController@tv_home')->name('home');
Route::get('/presenters', 'FrontendController@tv_presenters')->name('presenters');
Route::get('/shows', 'FrontendController@tv_shows')->name('shows');
//search
Route::get(' /results', function(){

    $posts = App\Post::where('title', 'like', '%' . request('search') . '%')->get();

    return view('results')->with('posts', $posts)
                          ->with('query', request('query'));

});

Route::group(['prefix' => 'auth'], function () {

    Auth::routes([ 'register' => false ]);


});




Route::group(['prefix' => 'manage', 'middleware' => ['auth']], function () {

    Route::get('/dashboard', 'FrontendController@dashboard')->name('index');
    //post routes
    Route::get('/view_posts', 'PostController@index')->name('view_posts');
    Route::get('/create_post', 'PostController@create')->name('create_post');
    Route::post('/store_post', 'PostController@store')->name('store_post');
    Route::get('/edit_post/{id}', 'PostController@edit')->name('edit_post');
    Route::post('/update_post/{id}', 'PostController@update')->name('update_post');
    Route::get('/trashed_posts', 'PostController@trashed')->name('trashed_posts');
    
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

    //shows
    Route::get('/tv_view_show', 'ShowController@tv_index')->name('tv_view_show');
    Route::get('/radio_view_show', 'ShowController@radio_index')->name('radio_view_show');
    Route::get('/create_show', 'ShowController@create')->name('create_show');
    Route::post('/store_show', 'ShowController@store')->name('store_show');
    Route::get('/edit_show/{id}', 'ShowController@edit' )->name('edit_show');
    Route::post('/update_show/{id}', 'ShowController@update')->name('update_show');
    Route::get('/view_show/{id}', 'ShowController@show')->name('view_show');
    Route::get('/destroy_show/{id}', 'ShowController@destroy')->name('delete_show');

    //presenters
    Route::get('/view_presenters', 'PresenterController@index')->name('view_presenters');
    Route::get('/create_presenter', 'PresenterController@create')->name('create_presenter');
    Route::post('/store_presenter', 'PresenterController@store')->name('store_presenter');
    Route::get('/edit_presenter', 'PresenterController@edit')->name('edit_presenter');
    Route::post('/update_presenter', 'PresenterController@update')->name('update_presenter');
    Route::get('/delete_presenter', 'PresenterController@destroy')->name('delete_presenter');
    Route::get('/view_presenter/{id}', 'PresenterController@show')->name('view_presenter');

    //admin routes--group
    Route::group(['middleware' => 'admin'], function(){
        Route::get('/delete_post/{id}', 'PostController@destroy')->name('delete_post');
        Route::get('/kill_post/{id}', 'PostController@kill')->name('kill_post');
        Route::get('/restore_post/{id}', 'PostController@restore')->name('restore_post');

    });

});

