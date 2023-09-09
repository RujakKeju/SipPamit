<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class DashboardController extends Controller
{
    public function jumlahPeternak()
    {
        // Menggunakan Eloquent, menghitung jumlah pengguna dengan ID peran yang sesuai
        $farmersCount = User::where('role', 'peternak')->count();

        return "Jumlah peternak: " . $farmersCount;
    }

    public function jumlah_user()
    {
        // Menggunakan Eloquent, menghitung jumlah pengguna yang bukan admin
        $userCount = User::where('role', '!=', 'admin')->count();

        return "Jumlah pengguna (kecuali admin): " . $userCount;
    }
}
