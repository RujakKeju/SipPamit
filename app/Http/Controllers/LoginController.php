<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index()
    {
        return view('login');
    }

    public function authentication(Request $request)
    {
        $user = $request->validate([
            'email' => ['required', 'email:dns'],
            'password' => 'required'
        ]);


        if(Auth::attempt($user)) {
            $request->session()->regenerate();

            return redirect()->intended('home');
        }
        
        return back()->with('loginError', "BISA LOGIN NGGA LER?");
    }
    
    public function logout(){

        Auth::logout();
 
        request()->session()->invalidate();
 
        request()->session()->regenerateToken();
 
        return redirect('/login');
    }
}
