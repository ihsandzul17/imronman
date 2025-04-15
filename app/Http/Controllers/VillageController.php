<?php

namespace App\Http\Controllers;

use App\Models\Village;
use Illuminate\Http\Request;

class VillageController extends Controller
{
    public function getVillagesByDistrict($district_id)
    {
        $villages = Village::where('district_id', $district_id)->get();
        return response()->json($villages);
    }
}
