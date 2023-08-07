<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Models\User;
use App\Http\Models\UserAccount;
use Illuminate\Http\Request;

class UsersController extends Controller
{
        // Fungsi untuk menampilkan form registrasi
        public function showRegistrationForm()
        {
            return view('register');
        }

        public function register(Request $request)
        {
            // Validasi data masukan
            $request->validate([
                'name' => 'required|string|max:255',
                'email' => 'required|string|email|unique:users|max:255',
                'password' => 'required|string|min:8|confirmed',
            ]);
    
            // Simpan data user baru ke database
            $user = new User([
                'name' => $request->name,
                'email' => $request->email,
                'password' => bcrypt($request->password),
            ]);
    
            $user->save();
    
            // Redirect atau lakukan tindakan lain setelah berhasil mendaftar
            return redirect()->route('view'); 
        }
}
