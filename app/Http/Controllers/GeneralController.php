<?php

namespace App\Http\Controllers;

use App\Models\Bus;
use App\Models\User;
use App\Models\Tujuan;
use App\Models\Booking;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class GeneralController extends Controller
{
    public function beranda()
    {
        $bus = Bus::all();
        $tujuan = Tujuan::all();
        return view('main',['bus' => $bus, 'tujuan' => $tujuan]);
    }

    public function search(Request $request)
    {
        $search = $request->input('search');
        $bus = Bus::where('nama_bus','LIKE',"%$search%")->get();
        return view('main',['bus' => $bus]);
    }


    public function login()
    {
        return view('auth.login');
    }
    public function register()
    {
        return view('auth.register');
    }
    public function loginAdmin()
    {
        return view('auth.loginAdmin');
    }

    //-----------ADMIN-----------
    public function adminDashboard()
    {
        return view('admin.dashboard');
    }
    public function adminData()
    {
        $bus = Bus::all();
        return view('admin.data',['bus' => $bus]);
    }

    public function dataUser()
    {
        $user = User::all();
        return view('admin.userlogin' , ['user' => $user]);
    }
}
