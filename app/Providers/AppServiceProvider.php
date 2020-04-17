<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Category;
use App\Post;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        view()->composer('layout.index', function($view)
        {
            $view->with('categories', Category::where('domain',1)->get());
            $view->with('posts', Post::where('domain',1)->where('draft',1)->orderBy('created_at', 'desc')->take(3)->get());
            $view->with('posts_two', Post::where('domain',1)->where('draft',1)->orderBy('created_at', 'desc')->skip(3)->take(3)->get());
        });
    }
}
