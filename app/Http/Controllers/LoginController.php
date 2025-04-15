<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index() {
        return view('login.index', [
            'title' => 'Login',
        ]);
    }

    public function authenticate(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email:dns',
            'password' => 'required'
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            $request->session()->flash('login_success', 'Anda berhasil login!');
            
            if (Auth::user()->isAdmin()) {
                return redirect()->intended('/admin');
            }elseif (Auth::user()->isStaff()) {
                return redirect()->intended('/staff');
            }

            return redirect()->intended('/dashboard');
        }

        return back()->with('loginError', 'Email atau password salah!');
    }

  
}
