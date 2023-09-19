<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\invest;

class PeternakController extends Controller
{
    public function index()
    {
        $invest = invest::all();
        return view('mydetailkelolainvestasi', compact('invest'));
    }
}
