<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use App\show;
use App\Presenter;

class ShowController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function tv_index()
    {
        return view('manage.shows.tv_view')->with('tv_shows',Show::where('domain',1)->get());
    }

    public function radio_index()
    {
        return view('manage.shows.radio_view')->with('radio_shows',Show::where('domain',0)->get());
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $presenters=Presenter::all();
        if($presenters->count() > 0){
            return view('manage.shows.create')->with('presenters', $presenters);
        }else{
            Session::flash('warning', 'you cannot create a show without presenters');
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

        $featured->move('uploads/shows', $featured_new_name);
        
        $show = Show::create([
            "name" => $request->name,
            "bio"=> $request->bio,
            "promo_link"=> $request->promo_link,
            "featured_image" => 'uploads/shows/'.$featured_new_name,
            "domain"=> $request->choice,
        ]);

        $show->presenters()->attach($request->presenters);

        Session::flash('success', 'you created a new show');

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
        $show= Show::find($id);
        return view('manage.shows.single_show')->with('show', $show);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
