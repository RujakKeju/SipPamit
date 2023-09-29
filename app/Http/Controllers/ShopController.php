<?php

namespace App\Http\Controllers;
use App\Models\products;

use Illuminate\Http\Request;

class ShopController extends Controller
{
    public function index()
    {
        return view('shop', [
            'daftarShop' => products::all()
        ]);
    }
}
