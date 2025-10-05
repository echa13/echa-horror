<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function index()
    {
        return view('auth.login_form');
    }

    public function login(Request $request)
    {
        $username = $request->input('username');
        $password = $request->input('password');

        // Validasi input kosong
        if (empty($username) || empty($password)) {
            return back()->with('error', 'Username dan password wajib diisi.');
        }

        // Validasi password
        if (strlen($password) < 3 || ! preg_match('/[A-Z]/', $password)) {
            return back()->with('warning', 'Password harus minimal 3 karakter dan mengandung huruf kapital.');
        }

        // Hardcode user
        if ($username === "echa" && $password === "Echa123") {
            return redirect('/dashboard')->with('success', 'Login berhasil, selamat datang!');
        }

        return back()->with('error', 'Username atau password salah.');
    }
}
