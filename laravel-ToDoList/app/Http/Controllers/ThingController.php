<?php

namespace App\Http\Controllers;

use App\Models\Thing;
use Illuminate\Http\Request;
use Inertia\Inertia;
use Illuminate\Support\Facades\Redirect;

class ThingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $things = Thing::all();
        return Inertia::render('Show', ['things'=>$things]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return Inertia::render('Create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'status' => 'required',
            'name' => 'required',
            'description' => 'required',
            'deadline' => 'required'
        ]);

        Thing::create($request->all());
        return Redirect::route('things.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Thing  $thing
     * @return \Illuminate\Http\Response
     */
    public function show(Thing $thing)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Thing  $thing
     * @return \Illuminate\Http\Response
     */
    public function edit(Thing $thing)
    {
        return Inertia::render('Edit', ['thing' => $thing]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Thing  $thing
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Thing $thing)
    {
        $thing->update($request->all());
        return Redirect::route('things.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Thing  $thing
     * @return \Illuminate\Http\Response
     */
    public function destroy(Thing $thing)
    {
        $thing->delete();
        return Redirect::route('things.index');
    }
}
