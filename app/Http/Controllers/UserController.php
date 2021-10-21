<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
    public function index()
    {

        $users = User::all();
        // dd($users);

        return view('setting.user.index', compact('users'));
    }

    public function create()
    {
        return view('setting.user.create');
    }

    public function store(Request $request)
    {
        // dd($request->all());
        $request->validate([

            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required|email',
        ]);

        $user = new User();
        $user->first_name = $request->first_name;
        $user->middle_name = $request->middle_name;
        $user->last_name = $request->last_name;
        $user->mobile_no = $request->mobile_no;
        $user->email = $request->email;
        if ($request->role == 'Admin') {
            $user->is_admin = 1;
        } else {
            $user->is_admin = 0;
        }

        $user->password = Hash::make($request->password);
        $user->save();
        return redirect()->route('user.index')->with('message', 'User Created Succesfully');
    }
    public function status($id)
    {
        $user = User::find($id);
        if ($user->is_admin == 1) {
            return back()->with('message', 'You Can Not Change Status Of Admin');
        }
        if ($user->status == 1) {
            $user->status = 0;
            $user->save();
        } else {
            $user->status = 1;
            $user->save();
        }
        return back();
    }
}
