<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Pengaduan;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\PengaduanExport;
use Carbon\Carbon;



class StaffController extends Controller
{
    public function index()
    {
        // Fetch the pengaduan data
        $pengaduan = Pengaduan::with(['user', 'province', 'city', 'district', 'village'])->get();

        // Pass the data to the view
        return view('staff.index', compact('pengaduan'));
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'image' => 'nullable|image|file|max:10000',
            'name' => 'required|max:255',
            'email' => 'required|email:dns|unique:users',
            'no_hp' => 'required|max:15',
            'password' => 'required|min:5|max:255'
        ]);

        // Menyimpan gambar di 'public/images' jika ada
        if ($request->hasFile('image')) {
            $validatedData['image'] = $request->file('image')->store('images', 'public');
        }

        // Enkripsi password sebelum disimpan ke database
        $validatedData['password'] = bcrypt($validatedData['password']);

        // Set role to 'staff'
        $validatedData['role'] = 'staff';

        // Simpan data ke dalam tabel users
        User::create($validatedData);

        return redirect()->route('admin.detail-staff')->with('success', 'Berhasil Membuat Staff!');
    }

 

    public function destroy($id)
    {
        $staff = User::findOrFail($id);
        $staff->delete();

        return redirect()->route('admin.detail-staff')->with('success', 'Staff berhasil dihapus.');
    }

    public function exportToExcel(Request $request)
{
    $exportType = $request->query('exportType', 'all');
    $selectedDate = $request->query('selectedDate');

    if ($exportType === 'date' && $selectedDate) {
        return Excel::download(new PengaduanExport($selectedDate), 'pengaduan.xlsx');
    }

    return Excel::download(new PengaduanExport(), 'pengaduan.xlsx');
}
    

    public function show($id)

    {
        $pengaduan = Pengaduan::with(['user', 'province', 'city', 'district', 'village'])->findOrFail($id);
        return view('staff.show', compact('pengaduan'));
    }
}
