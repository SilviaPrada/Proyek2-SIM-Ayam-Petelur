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
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('user.laporanPencatatan.index');
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
     * @param  \App\Models\PencatatanAyam  $pencatatanAyam
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('user.laporanPencatatan.show');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\PencatatanAyam  $pencatatanAyam
     * @return \Illuminate\Http\Response
     */
    public function edit(PencatatanAyam $pencatatanAyam)
    {
        //
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
        return redirect()->route('laporanPencatatan.index')->with('success', 'Pencatatan Ayam Berhasil Diedit!!');
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
        return redirect()->route('laporanPencatatan.index')->with('success', 'Pencatatan Ayam Berhasil DiHapus!!');
    }
}
