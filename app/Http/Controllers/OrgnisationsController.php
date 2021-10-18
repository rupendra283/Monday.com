<?php

namespace App\Http\Controllers;

use App\Models\Country;
use App\Models\LineOfBuisness;
use App\Models\Orgnisations;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OrgnisationsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $orgnisations = Orgnisations::with('lineOFBuisness')->get();
        dd($orgnisations);
        return view('orgnisations.index', compact('orgnisations'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $lineOfBuisness = LineOfBuisness::all();
        $countryies = Country::all();
        return view('orgnisations.create', compact('countryies', 'lineOfBuisness'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $created_by = Auth::user()->id;
        $orgnisation = new Orgnisations();
        $orgnisation->name =  $request->name;
        $orgnisation->line_of_buisness_id =  $request->line_of_buisness;
        $orgnisation->email =  $request->email;
        $orgnisation->mobile_no =  $request->mobile_no;
        $orgnisation->website =  $request->website;
        $orgnisation->address_1 =  $request->address_1;
        $orgnisation->address_2 =  $request->address_2;
        $orgnisation->country_id =  $request->country_id;
        $orgnisation->state_id =  $request->state_id;
        $orgnisation->city_id =  $request->city_id;
        $orgnisation->zip_code =  $request->name;
        $orgnisation->created_by =  $created_by;
        $orgnisation->save();
        return redirect()->route('orgnisations.index')->with('message', 'Orgnisation Created Succesfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Orgnisations  $orgnisations
     * @return \Illuminate\Http\Response
     */
    public function show(Orgnisations $orgnisations)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Orgnisations  $orgnisations
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $orgnisations = Orgnisations::find($id);
        return view('orgnisations.edit', compact('orgnisations'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Orgnisations  $orgnisations
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Orgnisations $orgnisations)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Orgnisations  $orgnisations
     * @return \Illuminate\Http\Response
     */
    public function destroy(Orgnisations $orgnisations)
    {
        //
    }
}
