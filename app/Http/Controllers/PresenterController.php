<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Presenter;
use App\Domain;
use Session;

class PresenterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('manage.presenters.view')->with('presenters', Presenter::all());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('manage.presenters.create')->with('domains', Domain::all());
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

        $featured->move('uploads/presenters', $featured_new_name);
        
        $presenter = Presenter::create([
            "name" => $request->name,
            "featured_image" => 'uploads/presenters/'.$featured_new_name,
            "bio"=> $request->bio
        ]);

        $presenter->domains()->attach($request->domain);

        Session::flash('success', 'you created a new presenter');

        return redirect()->route('view_presenters');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $presenter = Presenter::find($id);
        return view('manage.presenters.single_presenter')->with('presenter', $presenter);
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
