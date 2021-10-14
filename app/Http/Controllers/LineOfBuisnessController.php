<?php

namespace App\Http\Controllers;

use App\Models\City;
use App\Models\LineOfBuisness;
use App\Models\MsEducation;
use App\Models\State;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LineOfBuisnessController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function configuation()
    {
        $lineOfBuisness = LineOfBuisness::all();
        $state = State::all();
        $cities = City::all();
        $educations = MsEducation::all();
        return view('configuration.configuation', compact('lineOfBuisness', 'state', 'cities', 'educations'));
    }
    public function index()
    {
        $lineOfBuisness = LineOfBuisness::where('created_by', Auth::user()->id)->get();
        // dd($lineOfBuisness);
        return view('configuration.line_of_buisness.index', compact('lineOfBuisness'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('configuration.line_of_buisness.create');
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
        $authUser = Auth::user()->id;
        $lineOfBuisness = new LineOfBuisness();
        $lineOfBuisness->created_by = $authUser;
        $lineOfBuisness->name = $request->name;
        $lineOfBuisness->description = $request->description;
        $lineOfBuisness->save();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\LineOfBuisness  $lineOfBuisness
     * @return \Illuminate\Http\Response
     */
    public function show(LineOfBuisness $lineOfBuisness)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\LineOfBuisness  $lineOfBuisness
     * @return \Illuminate\Http\Response
     */
    public function edit(LineOfBuisness $lineOfBuisness)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\LineOfBuisness  $lineOfBuisness
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, LineOfBuisness $lineOfBuisness)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\LineOfBuisness  $lineOfBuisness
     * @return \Illuminate\Http\Response
     */
    public function destroy(LineOfBuisness $lineOfBuisness)
    {
        //
    }
}
