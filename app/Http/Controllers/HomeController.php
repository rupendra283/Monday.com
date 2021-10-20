<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        if (Auth::user()->is_admin == 1) {
            return view('layouts.dashboard');
        } else {
            return view('home');
        }
    }
    public function admin()
    {
        $uid = Auth::user()->is_admin;
        if ($uid == 1) {
            return view('layouts.dashboard');
        }
    }
}
