<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index()
    {
        return view('login.index', [
            'tittle' => 'Login',
            'active' => 'login'
        ]);
    }

    public function auth(Request $request)
    {
        $credential = $request->validate([
            'email' => 'required | email:dns',
            'password' => 'required'
        ]);

        if (Auth::attempt($credential)) {
            $request->session()->regenerate();
            if (auth()->user()->role === 1 || auth()->user()->role === 2) {
                $request->session()->regenerate();
                return redirect()->intended('/dashboard');
            } else {
                $request->session()->regenerate();
                return redirect()->intended('/');
            }
        }

        return back()->with('loginError', 'Login Failed!!!');
    }

    public function logout(Request $request)
    {
        Auth::logout();

        request()->session()->invalidate();

        request()->session()->regenerateToken();

        return redirect('/');
    }
}
