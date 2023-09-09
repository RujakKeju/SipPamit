<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\User;


class AdminController extends Controller
{
    public function index()
    {
        // Menggunakan Eloquent, menghitung jumlah pengguna dengan ID peran yang sesuai
        $farmersCount = User::where('role', 'peternak')->count();
        // Menggunakan Eloquent, menghitung jumlah pengguna yang bukan admin
        $userCount = User::where('role', '!=', 'admin')->count();
        return view('mydashboard',['jumlah_peternak' => $farmersCount,'jumlahUser'=>$userCount]);
    }
}
