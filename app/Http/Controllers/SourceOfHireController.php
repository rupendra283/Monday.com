<?php

namespace App\Http\Controllers;

use App\Models\SourceOfHire;
use Illuminate\Http\Request;

class SourceOfHireController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $soh = SourceOfHire::all();
        return view('configuration.sourceofhire.index', compact('soh'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('configuration.sourceofhire.create');
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
            'name' => 'required',
        ]);

        $soh = new SourceOfHire();
        $soh->name = $request->name;
        $soh->description = $request->description;
        $soh->save();
        return redirect()->route('configuation.index')->with('message', 'Source Of Hire Created Succesfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\SourceOfHire  $sourceOfHire
     * @return \Illuminate\Http\Response
     */
    public function show(SourceOfHire $sourceOfHire)
    {
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\SourceOfHire  $sourceOfHire
     * @return \Illuminate\Http\Response
     */
    public function edit(SourceOfHire $sourceOfHire, $id)
    {
        $soh = SourceOfHire::findorfail($id);
        return view('configuration.sourceofhire.edit', compact('soh'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\SourceOfHire  $sourceOfHire
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // dd($request->all());
        $request->validate([
            'name' => 'required',
        ]);

        $soh = SourceOfHire::findorfail($id);
        $soh->name = $request->name;
        $soh->description = $request->description;
        $soh->save();
        return redirect()->route('sourceofhire.index')->with('message', 'Source Of Hire Updated Succesfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\SourceOfHire  $sourceOfHire
     * @return \Illuminate\Http\Response
     */
    public function destroy(SourceOfHire $sourceOfHire, $id)
    {
        $soh = SourceOfHire::findorfail($id);
        $soh->delete();
        return back()->with('message', 'Source of hire Deleted Succesfully');
    }
}
