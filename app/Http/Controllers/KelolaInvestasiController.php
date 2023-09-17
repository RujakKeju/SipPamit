<?php

namespace App\Http\Controllers;

use App\Models\invest;
use Illuminate\Http\Request;

class KelolaInvestasiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $invests = invest::all();
        return view('mykelolainvestasi', compact('invests'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\invest  $invest
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $invest = invest::find($id);
        return view('mydetailkelolainvestasi', compact(['invest']));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\invest  $invest
     * @return \Illuminate\Http\Response
     */
    public function edit(invest $invest)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\invest  $invest
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, invest $invest)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\invest  $invest
     * @return \Illuminate\Http\Response
     */
    public function destroy(invest $invest)
    {
        //
    }
}
