<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\City;

class LocationController extends Controller
{
    public function getCities($province_id)
    {
        $cities = City::where('province_id', $province_id)->get();
        return response()->json($cities);
    }

    public function getDistricts($city_id)
    {
        $districts = District::where('city_id', $city_id)->get();
        return response()->json($districts);
    }

    public function getVillages($district_id)
    {
        $villages = Village::where('district_id', $district_id)->get();
        return response()->json($villages);
    }
}