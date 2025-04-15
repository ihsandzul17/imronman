<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Pengaduan;
use Illuminate\Support\Facades\Storage;


class DashboardController extends Controller
{

    public function index() {
        $user = auth()->user();
        return view('dashboard.index', compact('user'));
    }

    public function show($id)
    {
        $pengaduan = Pengaduan::findOrFail($id);
        return view('dashboard.detail', compact('pengaduan'));
    }

    public function filter(Request $request)
    {
        $provinceId = $request->query('province_id');
        if ($provinceId === 'all' || !$provinceId) {
            $pengaduan = Pengaduan::with(['province', 'city', 'district', 'village'])->get();
        } else {
            $pengaduan = Pengaduan::with(['province', 'city', 'district', 'village'])
                ->where('province_id', $provinceId)
                ->get();
        }
        return response()->json($pengaduan);
    }
}
