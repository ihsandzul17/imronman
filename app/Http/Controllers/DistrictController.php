<?php

namespace App\Http\Controllers;

use App\Models\District;
use Illuminate\Http\Request;

class DistrictController extends Controller
{
    public function getDistrictsByCity($city_id)
    {
        $districts = District::where('city_id', $city_id)->get();
        return response()->json($districts);
    }
}
