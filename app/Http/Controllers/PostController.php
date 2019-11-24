<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Post;


class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('manage.posts.view')->with('posts', Post::all());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('manage.posts.create')->with('categories', Category::all());
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
            "slug"=>str_slug($request->title)

        ]);
        
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
            $featured= $request->featured;
            $featured_new_name = time() . $featured->getClientOriginalName();
            $featured->move('uploads/posts', $featured_new_name);
            $post->featured_image = 'uploads/posts/'.$featured_new_name;
        }

        $post->title = $request->title;
        $post->category_id = $request->category;
        $post->content = $request->content;
        $post->save();

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
        return redirect()->route('view_posts');
    }

    public function trashed(){
        $posts = Post::onlyTrashed()->get();
        return view('manage.posts.trashed')->with('posts', $posts);
    }

    public function restore($id){
       $post  = Post::withTrashed()->where('id',$id)->first();
       $post->restore(); 
       return redirect()->route('view_posts');
    }

    Public function kill($id){
      $post  = Post::withTrashed()->where('id',$id)->first();
      $post->forceDelete();
      return redirect()->route('trashed_posts');
    }
}
