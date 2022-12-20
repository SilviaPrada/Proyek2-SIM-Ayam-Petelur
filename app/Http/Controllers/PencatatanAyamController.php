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
        return view('admin.laporanPencatatan.create');
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
        return redirect()->route('pencatatanAyam.index')->with('success', 'Pencatatan Berhasil Dibuat');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\PencatatanAyam  $pencatatanAyam
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\PencatatanAyam  $pencatatanAyam
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $pencatatanAyam = PencatatanAyam::find($id);
        return view('admin.laporanPencatatan.edit', compact(['pencatatanAyam']));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\PencatatanAyam  $pencatatanAyam
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $pencatatanAyam = PencatatanAyam::find($id);
        $pencatatanAyam->update($request->all());
        return redirect()->route('pencatatanAyam.index')->with('success', 'Pencatatan Ayam Berhasil Diedit!!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\PencatatanAyam  $pencatatanAyam
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $pencatatanAyam = PencatatanAyam::find($id);
        $pencatatanAyam->delete();
        return redirect()->route('pencatatanAyam.index')->with('success', 'Pencatatan Ayam Berhasil DiHapus!!');
    }
}