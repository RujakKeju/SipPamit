<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;


class UsersController extends Controller
{
        // Fungsi untuk menampilkan form registrasi
        public function showRegistrationForm()
        {
            return view('myregister',[
                'title' => 'Register',
                'active' => 'Register'
            ]);
        }

     
        public function register(Request $request)
        {
            // Validasi data masukan
            $validateData = $request->validate([
                'name' => ['required','max:255'],
                'username' => ['required','max:255'],
                'email' => ['required','max:255','unique:users'],
                'address' => ['required','max:255'],
                'password' => ['required','min:8','max:255'],
                'contact_phone' => ['required','max:255'],
                'descript' => ['required','max:255'],
                'role' =>  ['required']
            ]);
            
            $validateData['password'] = Hash::make($request->password);
            $user = new User();
            $user->create($validateData);
    
            // Redirect atau lakukan tindakan lain setelah berhasil mendaftar
            return redirect('/login');
        }
}
