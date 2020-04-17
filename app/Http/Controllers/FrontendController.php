<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Category;
use App\User;
use App\Presenter; 
use App\Show;
use App\Domain;


class FrontendController extends Controller
{
    public function index(){
        return view('welcome')->with('header_posts', Post::where('domain',1)->where('draft',1)->orderBy('created_at', 'desc')->take(4)->get())
        ->with('first_category', Category::orderBy('created_at', 'asc')->first())
        ->with('second_category', Category::orderBy('created_at', 'asc')->skip(1)->take(1)->get()->first())
        ->with('third_category', Category::orderBy('created_at', 'asc')->skip(2)->take(1)->get()->first())
        ->with('fourth_category', Category::orderBy('created_at', 'asc')->skip(3)->take(1)->get()->first());;
    }

    public function single_post($slug){
        $post = Post::where('slug', $slug)->first();
        $category = $post->category;
        $r_post=$category->posts->where('id', '!=', $post->id )->where('domain',1)->where('draft',1);
        
        return view('blog')->with('post', $post)
        ->with('related_posts', $r_post);
    }

    public function single_category($slug){
        $category = Category::where('slug', $slug)->first();
        $featured_posts = $category->posts()->where('domain',1)->where('draft',1)->orderBy('created_at', 'desc')->take(4)->get();
        $second_section_posts = $category->posts()->where('domain',1)->where('draft',1)->orderBy('created_at', 'desc')->skip(4)->take(3)->get();
        $other_posts = $category->posts()->where('domain',1)->where('draft',1)->orderBy('created_at', 'desc')->skip(7)->paginate(4);
        return view('category')
        ->with('category', $category)
        ->with('featured_posts', $featured_posts)
        ->with('second_section_posts', $second_section_posts)
        ->with('other_posts', $other_posts);
    }

    public function dashboard(){
        return view('manage.dashboard')
                    ->with('all_posts', Post::all()->count())
                    ->with('draft_posts', Post::where('draft',0)->count())
                    ->with('published_posts', Post::where('draft',1)->count())
                    ->with('all_categories', Category::all()->count())
                    ->with('tv_categories', Category::where('domain',1)->count())
                    ->with('radio_categories', Category::where('domain',0)->count())
                    ->with('all_users', User::all()->count())
                    ->with('all_trashed', Post::onlyTrashed()->count())
                    ->with('users', User::where('admin',0)->paginate(10));
    }

    public function tv_home(){
        $shows=Show::where('domain',1)->get()->random(3);
        $posts=Post::where('domain',1)->where('draft',1)->orderBy('created_at', 'desc')->take(3)->get();
        return view('home')->with('shows', $shows)
        ->with('posts', $posts);
    }

    public function tv_presenters(){
        $domain=Domain::find(2);
        $presenters=$domain->presenters()->get();
        return view('presenters')->with('presenters',$presenters);
    }

    public function tv_shows(){
        return view('shows')->with('shows', Show::where('domain', 1)->get());
    }
}
