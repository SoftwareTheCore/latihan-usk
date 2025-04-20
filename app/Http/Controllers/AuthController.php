<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function showLoginForm()
    {
        return view('auth.login');
    }

    public function login()
    {
        // Langsung redirect ke dashboard tanpa pengecekan
        return redirect('/dashboard');
    }

    public function logout()
    {
        return redirect('/login');
    }
}
