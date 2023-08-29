<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User1;

class AuthController extends Controller
{
    public function showLoginForm()
    {
        return view('login');
    }

    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (auth()->attempt($credentials)) {
            // Authentication successful
            return redirect()->intended('/');
        } else {
            // Authentication failed
            return redirect()->route('login')->with('error', 'Invalid credentials');
        }
    }
}

