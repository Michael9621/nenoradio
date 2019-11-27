<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Post;
use Auth;
use Session;


class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('manage.posts.view')->with('posts', Post::paginate(10));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if(Category::count() > 0){
            return view('manage.posts.create')->with('categories', Category::all());
        }else{
            Session::flash('warning', 'posts cannot be created, categories missing');
            return redirect()->back();
        }
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $featured = $request->featured;

        $featured_new_name = time().$featured->getClientOriginalName();

        $featured->move('uploads/posts', $featured_new_name);
        
        $post = Post::create([
            "title" => $request->title,
            "featured_image" => 'uploads/posts/'.$featured_new_name,
            "category_id" => $request->category,
            "content"=> $request->content,
            "draft" => $request->draft,
            "user_id" => Auth::user()->id,
            "slug"=>str_slug($request->title)

        ]);

        Session::flash('success', 'you created a new post');

        return redirect()->route('view_posts');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post = Post::find($id);

        return view('manage.posts.edit')->with('post', $post)->with('categories', Category::all());
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $post = Post::find($id);

        if ($request->hasFile('featured'))
        {
            if(file_exists($post->featured_image)){
                unlink($post->featured_image);
            }
            $featured= $request->featured;
            $featured_new_name = time() . $featured->getClientOriginalName();
            $featured->move('uploads/posts', $featured_new_name);
            $post->featured_image = 'uploads/posts/'.$featured_new_name;
        }

        $post->title = $request->title;
        $post->category_id = $request->category;
        $post->user_id = Auth::user()->id;
        $post->content = $request->content;
        $post->save();

        Session::flash('success', 'you updated a post');

        return redirect()->route('view_posts');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post = Post::find($id);
        $post->delete();
        Session::flash('success', 'you trashed a post');
        return redirect()->route('view_posts');
    }

    public function trashed(){
        $posts = Post::onlyTrashed()->get();
        return view('manage.posts.trashed')->with('posts', $posts);
    }

    public function restore($id){
       $post  = Post::withTrashed()->where('id',$id)->first();
       $post->restore(); 
       Session::flash('success', 'you restored post');
       return redirect()->route('view_posts');
    }

    Public function kill($id){
      $post  = Post::withTrashed()->where('id',$id)->first();
      //dd($post->featured_image);
      if(file_exists($post->featured_image)){
          unlink($post->featured_image);
      }
      $post->forceDelete();
      Session::flash('success', 'you deleted a post');
      return redirect()->route('trashed_posts');
    }
}
