<?php

namespace App\Http\Controllers;

use App\Models\MsEducation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MsEducationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $educations = MsEducation::all();
        return view('configuration.education.index', compact('educations'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('configuration.education.create');
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
        $msEducation = new MsEducation();
        $msEducation->name = $request->name;
        $msEducation->description = $request->description;
        $msEducation->created_by = $authUser;
        $msEducation->save();
    }


    /**
     * Display the specified resource.
     *
     * @param  \App\Models\MsEducation  $msEducation
     * @return \Illuminate\Http\Response
     */
    public function show(MsEducation $msEducation)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\MsEducation  $msEducation
     * @return \Illuminate\Http\Response
     */
    public function edit(MsEducation $msEducation)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\MsEducation  $msEducation
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, MsEducation $msEducation)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\MsEducation  $msEducation
     * @return \Illuminate\Http\Response
     */
    public function destroy(MsEducation $msEducation)
    {
        //
    }
}
