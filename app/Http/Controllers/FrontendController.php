<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Category;

class FrontendController extends Controller
{
    public function index(){
        return view('welcome')->with('first_post', Post::orderBy('created_at', 'desc')->first())
        ->with('second_post', Post::orderBy('created_at','desc')->skip(1)->take(1)->get()->first())
        ->with('third_post', Post::orderBy('created_at','desc')->skip(2)->take(1)->get()->first())
        ->with('fourth_post', Post::orderBy('created_at','desc')->skip(3)->take(1)->get()->first())
        ->with('first_category', Category::orderBy('created_at', 'asc')->first())
        ->with('second_category', Category::orderBy('created_at', 'asc')->skip(1)->take(1)->get()->first())
        ->with('third_category', Category::orderBy('created_at', 'asc')->skip(2)->take(1)->get()->first())
        ->with('fourth_category', Category::orderBy('created_at', 'asc')->skip(3)->take(1)->get()->first());;
    }

    public function single_post($slug){
        $post = Post::where('slug', $slug)->first();
        $category = $post->category;
        $r_post=$category->posts->where('id', '!=', $post->id );
        
        return view('blog')->with('post', $post)
        ->with('related_posts', $r_post);
    }

    public function single_category($slug){
        $category = Category::where('slug', $slug)->first();
        $featured_posts = $category->posts()->orderBy('created_at', 'desc')->take(4)->get();
        $second_section_posts = $category->posts()->orderBy('created_at', 'desc')->skip(4)->take(3)->get();
        $other_posts = $category->posts()->orderBy('created_at', 'desc')->skip(7)->paginate(4);
        return view('category')
        ->with('category', $category)
        ->with('featured_posts', $featured_posts)
        ->with('second_section_posts', $second_section_posts)
        ->with('other_posts', $other_posts);
    }
}
