<?php

namespace App\Http\Controllers\Orgnisation;

use App\Http\Controllers\Controller;
use App\Models\Employee;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    public function index()
    {
        $employees = Employee::all();
        return view('orgnisations.employee.index', compact('employees'));
    }


    public function create()
    {
        $employees = Employee::all();
        return view('orgnisations.employee.index', compact('employees'));
    }
}
