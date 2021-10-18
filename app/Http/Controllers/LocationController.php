<?php

namespace App\Http\Controllers;

use App\Models\City;
use App\Models\Country;
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
    public function index()
    {
        $data['countries'] = Country::get(["name", "id"]);
        return view('country-state-city', $data);
    }

    public function getState(Request $request)
    {


        $data['states'] = State::where("country_id", $request->country_id)
            ->get(["name", "id"]);
        return response()->json($data);
    }
    public function getCity(Request $request)
    {
        $data['cities'] = City::where("state_id", $request->state_id)
            ->get(["name", "id"]);
        return response()->json($data);
    }
}
