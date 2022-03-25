<?php

namespace App\Http\Controllers;

use App\Models\editorial;
use Illuminate\Http\Request;

class EditorialController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $editorial= editorial::all();
        return $editorial;
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
        $editorial=new editorial();
        $editorial->name=$request->name;
        $editorial->save();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\editorial  $editorial
     * @return \Illuminate\Http\Response
     */
    public function show(editorial $editorial)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\editorial  $editorial
     * @return \Illuminate\Http\Response
     */
    public function edit(editorial $editorial)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\editorial  $editorial
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, editorial $editorial,$id)
    {
        //
        $editorial= editorial::findOrFail($request->id);
        $editorial->name=$request->name;
        $editorial->save();

        return $editorial;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\editorial  $editorial
     * @return \Illuminate\Http\Response
     */
    public function destroy(editorial $editorial, Request $request)
    {
        //
        $editorial =editorial::destroy($request->id);
        return $editorial;
    }
}
