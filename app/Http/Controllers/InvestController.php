<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\invest;

class InvestController extends Controller
{
    public function index()
    {
        return view('invest');
    }
    

}
