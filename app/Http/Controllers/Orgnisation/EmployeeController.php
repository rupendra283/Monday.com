<?php

namespace App\Http\Controllers\Orgnisation;

use App\Http\Controllers\Controller;
use App\Models\Country;
use App\Models\Department;
use App\Models\Designation;
use App\Models\Employee;
use App\Models\Orgnisations;
use App\Models\SourceOfHire;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;


class EmployeeController extends Controller
{
    public function index()
    {
        $employees = Employee::with('department')->get();
        // dd($employees);
        return view('orgnisations.employee.index', compact('employees'));
    }


    public function create()
    {
        $countries = Country::all();
        $orgnisations = Orgnisations::all();
        $department = Department::all();
        $designation = Designation::all();
        $sourceOFHire = SourceOfHire::all();
        return view('orgnisations.employee.create', compact('orgnisations', 'department', 'designation', 'sourceOFHire', 'countries'));
    }

    public function store(Request $request)
    {
        // dd($request->all());
        $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'email|required',
            'mobile' => 'required|numeric|digits:10',

        ]);
        $created_by = Auth::user()->id;
        $employee = new Employee();
        $employee->first_name = $request->first_name;
        $employee->last_name = $request->last_name;
        $employee->email = $request->email;
        $employee->mobile = $request->mobile;
        $employee->description = $request->description;
        $employee->date_of_joining = $request->date_of_joining;
        $employee->date_of_joining = $request->date_of_joining;
        $employee->fk_user_id = $request->fk_user_id;
        $employee->roles = $request->roles;
        $employee->system_id = $request->system_id;
        $employee->fk_org_id = $request->fk_org_id;
        $employee->fk_department_id = $request->fk_department_id;
        $employee->fk_designation_id = $request->fk_designation_id;
        $employee->fk_source_of_hire_id = $request->fk_source_of_hire_id;
        $employee->fk_salary_id = $request->fk_salary_id;
        $employee->father_name = $request->father_name;
        $employee->mother_name = $request->mother_name;
        $employee->alt_mobile_no = $request->alt_mobile_no;
        $employee->alt_email_id = $request->alt_email_id;
        $employee->date_of_birth = $request->date_of_birth;
        $employee->marital_status = $request->marital_status;
        $employee->spouse_name = $request->spouse_name;
        $employee->gender = $request->gender;
        $employee->permanent_addr1 = $request->permanent_addr1;
        $employee->permanent_addr2 = $request->permanent_addr2;
        $employee->fk_country1_id = $request->fk_country1_id;
        $employee->fk_state1_id = $request->fk_state1_id;
        $employee->fk_city1_id = $request->fk_city1_id;
        $employee->permanent_pincode = $request->permanent_pincode;
        $employee->bank_name = $request->bank_name;
        $employee->account_no = $request->account_no;
        $employee->branch_name = $request->branch_name;
        $employee->ifsc_code = $request->ifsc_code;
        $employee->pan_no = $request->pan_no;
        $employee->adhar_no = $request->adhar_no;
        $employee->created_by = $created_by;
        $employee->save();

        // create user details for employee
        $user = new User();
        $password = 'password';
        $user->first_name = $request->first_name;
        $user->middle_name = $request->middle_name;
        $user->last_name = $request->last_name;
        $user->mobile_no = $request->mobile;
        $user->email = $request->email;
        if ($request->roles == 'Admin') {
            $user->is_admin = 1;
        } else {
            $user->is_admin = 0;
        }
        $user->password = Hash::make($password);
        $user->save();
    }
}
