<?php

namespace App\Http\Controllers\Orgnisation;

use App\Http\Controllers\Controller;
use App\Models\Designation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DesignationController extends Controller
{
    public function index()
    {
        $designations = Designation::all();
        return view('orgnisations.designation.index', compact('designations'));
    }

    public function create()
    {
        return view('orgnisations.designation.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
        ]);
        $created_by = Auth::user()->id;
        $designation = new Designation();
        $designation->name = $request->name;
        $designation->description = $request->description;
        $designation->created_by = $created_by;
        $designation->save();

        return redirect()->route('designation.index')->with('message', 'Designation Created Succesfully');
    }

    public function edit($id)
    {
        $designation = Designation::findorfail($id);
        return view('orgnisations.designation.edit', compact('designation'));
    }

    public function update(Request $request, $id)
    {

        $designation = Designation::findorfail($id);
        $request->validate([
            'name' => 'required',
        ]);
        $updated_by = Auth::user()->id;
        $designation = Designation::find($id);
        $designation->name = $request->name;
        $designation->description = $request->description;
        $designation->created_by = $updated_by;
        $designation->save();
        return redirect()->route('designation.index')->with('message', 'Designation Updated Succesfully');
    }

    public function destroy($id)
    {
        $designation  = Designation::find($id);
        $designation->delete();
        return back()->with('message', 'designation Deleted Succesfully ');
    }
}
