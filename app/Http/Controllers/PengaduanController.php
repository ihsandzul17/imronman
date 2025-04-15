<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pengaduan;
use App\Models\Province;
use App\Models\City;
use App\Models\District;
use App\Models\Village;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;
use App\Models\Vote; // Add this line to import the Vote model
use App\Models\View; // Add this line to import the View model

class PengaduanController extends Controller
{
    public function index()
    {
        // Ambil semua provinsi beserta relasi dengan city, district, dan village
        $provinces = Province::with('cities.districts.villages')->get();

        // Ambil data pengaduan terbaru
        $pengaduan = Pengaduan::latest()->get();

        return view('dashboard.index', compact('pengaduan', 'provinces'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'province_id' => 'required|integer',
            'city_id' => 'required|integer',
            'district_id' => 'required|integer',
            'village_id' => 'required|integer',
            'type' => 'required|string',
            'deskripsi' => 'required|string',
            'gambar' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
        
        $pengaduan = new Pengaduan();
        $pengaduan->nama = $request->nama;
        $pengaduan->province_id = $request->province_id;
        $pengaduan->city_id = $request->city_id;
        $pengaduan->district_id = $request->district_id;
        $pengaduan->village_id = $request->village_id;
        $pengaduan->type = $request->type;
        $pengaduan->deskripsi = $request->deskripsi;
        $pengaduan->user_id = auth()->id(); // Menambahkan user_id
        
        if ($request->hasFile('gambar')) {
            $path = $request->file('gambar')->store('pengaduan', 'public');
            $pengaduan->gambar = $path;
        }
        
        $pengaduan->save();
        
        return redirect()->route('dashboard')->with('success', 'Pengaduan berhasil disimpan.');
    }

    public function vote($id)
    {
        $user = auth()->user();
        $pengaduan = Pengaduan::findOrFail($id);

        // Check if the user has already voted for this pengaduan
        if (Vote::where('user_id', $user->id)->where('pengaduan_id', $id)->exists()) {
            return response()->json(['success' => false, 'message' => 'Kamu sudah vote pengaduan ini.']);
        }

        // Create a new vote
        Vote::create([
            'user_id' => $user->id,
            'pengaduan_id' => $id,
        ]);

        // Increment the vote count
        $pengaduan->increment('votes');

        return response()->json(['success' => true, 'votes' => $pengaduan->votes]);
    }

    public function view($id)
    {
        $user = auth()->user();
        $pengaduan = Pengaduan::findOrFail($id);
    
        // Check if the user has already viewed this pengaduan
        if (View::where('user_id', $user->id)->where('pengaduan_id', $id)->exists()) {
            return response()->json(['success' => false, 'message' => 'Kamu sudah melihat pengaduan ini.']);
        }
    
        // Create a new view
        View::create([
            'user_id' => $user->id,
            'pengaduan_id' => $id,
        ]);
    
        // Increment the view count
        $pengaduan->increment('views');
    
        return response()->json(['success' => true, 'views' => $pengaduan->views]);
    }

    public function updateStatus(Request $request, $id)
    {
        $pengaduan = Pengaduan::findOrFail($id);
    
        // Validasi status yang diterima
        $request->validate([
            'status' => 'required|in:pending,in_progress,done,rejected',
        ]);
    
        // Simpan ID staff yang melakukan tindakan
        $pengaduan->last_action_by = auth()->id(); // Ambil ID user yang sedang login
        $pengaduan->status = $request->status;
    
        // Jika status adalah 'done', set completed_at
        if ($request->status === 'done') {
            $pengaduan->completed_at = now();
        }
    
        $pengaduan->save();
    
        return response()->json(['success' => true]);
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/login')->with('success', 'Logout berhasil!');
    }
}
