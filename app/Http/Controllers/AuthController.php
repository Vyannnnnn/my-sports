<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class AuthController extends Controller
{
    public function showLogin()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        $loginField = filter_var($request->input('login'), FILTER_VALIDATE_EMAIL) ? 'email' : 'name';
        $credentials = [
            $loginField => $request->input('login'),
            'password' => $request->input('password'),
        ];
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            // Jika user admin, redirect ke dashboard admin produk
            if (Auth::user()->role === 'admin') {
                return redirect()->route('admin.produk.index');
            }
            // Jika pembeli, redirect ke home
            return redirect('/');
        }
        return back()->withErrors(['login' => 'Email/Nama atau password salah']);
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/');
    }

    public function showRegister()
    {
        return view('auth.register');
    }

    public function register(Request $request)
    {
        $request->validate([
            'name' => 'required|unique:users',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:4',
        ]);
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);
        return redirect('/login')->with('success', 'Registrasi berhasil, silakan login.');
    }
}
