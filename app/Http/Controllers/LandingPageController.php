<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\products;


class LandingPageController extends Controller
{
    public function index(){
        $empatProduk = products::take(4)->get();

        $farmerUser = User::where('role', 'peternak')->get();

    }


}
