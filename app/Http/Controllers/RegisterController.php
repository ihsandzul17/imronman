<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class RegisterController extends Controller
{
    public function index() {
        return view('register.create', [
            'title' => 'Register'
        ]);
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'image' => 'image|file|max:10000',
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

        // Simpan data ke dalam tabel users
        User::create($validatedData);

        return redirect('/login')->with('success', 'Registration Success!');
    }
}
