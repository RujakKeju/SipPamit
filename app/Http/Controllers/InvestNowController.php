<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InvestNowController extends Controller
{
    public function index()
    {
        return view('invest-now');
    }
}
