<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('index'); 
    }

    public function about()
    {
        return view('about'); 
    }

    public function collab()
    {
        return view('collab'); 
    }

    public function lookbook()
    {
        return view('lookbook'); 
    }

    public function shop()
    {
        return view('shop'); 
    }

    public function contact()
    {
        return view('contactus'); 
    }

    public function terms()
    {
        return view('terms'); 
    }

    public function sustain()
    {
        return view('sustain'); 
    }

    public function privacy()
    {
        return view('privacy'); 
    }

    public function shipping()
    {
        return view('shipping'); 
    }

    public function policy()
    {
        return view('policy'); 
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
