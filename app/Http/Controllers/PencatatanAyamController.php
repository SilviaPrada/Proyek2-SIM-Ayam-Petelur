<?php

namespace App\Http\Controllers;

use App\Models\PencatatanAyam;
use Illuminate\Http\Request;

class PencatatanAyamController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pencatatanAyam = PencatatanAyam::all();
        return view('admin.laporanPencatatan.index', compact(['pencatatanAyam']));
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
        PencatatanAyam::create($request->all());
        return redirect()->route('laporanPencatatan.index')->with('success', 'Pencatatan Berhasil Dibuat');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\PencatatanAyam  $pencatatanAyam
     * @return \Illuminate\Http\Response
     */
    public function show(PencatatanAyam $pencatatanAyam)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\PencatatanAyam  $pencatatanAyam
     * @return \Illuminate\Http\Response
     */
    public function edit(PencatatanAyam $id)
    {
        $pencatatanAyam = BateraiKandang::find($id);
        return view('admin.laporanPencatatan.edit', compact(['pencatatanAyam']));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\PencatatanAyam  $pencatatanAyam
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, PencatatanAyam $pencatatanAyam)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\PencatatanAyam  $pencatatanAyam
     * @return \Illuminate\Http\Response
     */
    public function destroy(PencatatanAyam $pencatatanAyam)
    {
        //
    }
}
