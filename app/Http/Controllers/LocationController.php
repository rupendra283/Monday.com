<?php

namespace App\Http\Controllers;

use App\Models\City;
use App\Models\State;
use Illuminate\Http\Request;

class LocationController extends Controller
{
    public function state()
    {
        $states = State::with('country')->get();
        return view('configuration.location.state', compact('states'));
    }
    public function city()
    {
        $cities = City::with('state')->get();
        return view('configuration.location.city', compact('cities'));
    }
}
