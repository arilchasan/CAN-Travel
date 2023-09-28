<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function adminLogin(Request $request) 
    {
        $credentials = $request->only('username', 'password');
        if (Auth::guard('admins')->attempt($request->only('username', 'password'))) {
            $request->session()->regenerate();
            return redirect('/admin/dashboard');
        }
       
    }

    public function adminLogout(Request $request)
    {
        Auth::guard('admins')->logout();
        return redirect('/');
    }
}
