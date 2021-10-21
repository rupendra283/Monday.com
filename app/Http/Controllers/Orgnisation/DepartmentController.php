<?php

namespace App\Http\Controllers\Orgnisation;

use App\Http\Controllers\Controller;
use App\Models\Department;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DepartmentController extends Controller
{
    public function index()
    {
        $departments = Department::all();
        return view('orgnisations.department.index', compact('departments'));
    }

    public function create()
    {
        return view('orgnisations.department.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
        ]);
        $created_by = Auth::user()->id;
        $department = new Department();
        $department->name = $request->name;
        $department->description = $request->description;
        $department->created_by = $created_by;
        $department->save();

        return redirect()->route('department.index')->with('message', 'Department Created Succesfully');
    }

    public function edit($id)
    {
        $department = Department::findorfail($id);
        return view('orgnisations.department.edit', compact('department'));
    }

    public function update(Request $request, $id)
    {

        $department = Department::findorfail($id);
        $request->validate([
            'name' => 'required',
        ]);
        $updated_by = Auth::user()->id;
        $department = new Department();
        $department->name = $request->name;
        $department->description = $request->description;
        $department->created_by = $updated_by;
        $department->save();
        return redirect()->route('department.index')->with('message', 'Department Updated Succesfully');
    }

    public function delete($id)
    {
        $department  = Department::find($id);
        $department->delete();
        return back()->with('message', 'Department Deleted Succesfully ');
    }
}
