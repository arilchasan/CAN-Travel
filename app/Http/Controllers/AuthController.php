<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function authRegister(Request $request) {
        
        $validateData = $request->validate( [
            'username' => 'required',
            'email' => 'required|email:dns',
            'password' => 'required|string|min:8',
        ]);

        $validateData['password'] = Hash::make($validateData['password']);

        User::create($validateData);
        return redirect('/login')->with('success', 'Register berhasil, silahkan login');
    }

    public function authLogin(Request $request)
    {
        $credentials = $request->validate([
            'username' => 'required',
            'password' => 'required|string|min:8',
        ]);
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->intended('/');
        }
        return back()->with('error', 'Terjadi kesalahan saat login')->onlyInput('username');
    }


    public function authLogout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/');
    }


    
}
