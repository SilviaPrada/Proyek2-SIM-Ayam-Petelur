<?php

namespace App\Http\Controllers;

use App\Models\PerhitunganRumus;
use Illuminate\Http\Request;

class PerhitunganRumusController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function perhitunganDeplesi($data)
    {
        return view('user.perhitunganDeplesi');

    }

    public function perhitunganHenDay($data)
    {
        return view('user.perhitunganHenDay');

    }

    public function perhitunganEggWeight($data)
    {
        return view('user.perhitunganEggWeight');

    }

    public function perhitunganFCR($data)
    {
        return view('user.perhitunganFCR');

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
     * @param  \App\Models\PerhitunganRumus  $perhitunganRumus
     * @return \Illuminate\Http\Response
     */
    public function show(PerhitunganRumus $perhitunganRumus)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\PerhitunganRumus  $perhitunganRumus
     * @return \Illuminate\Http\Response
     */
    public function edit(PerhitunganRumus $perhitunganRumus)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\PerhitunganRumus  $perhitunganRumus
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, PerhitunganRumus $perhitunganRumus)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\PerhitunganRumus  $perhitunganRumus
     * @return \Illuminate\Http\Response
     */
    public function destroy(PerhitunganRumus $perhitunganRumus)
    {
        //
    }
}
