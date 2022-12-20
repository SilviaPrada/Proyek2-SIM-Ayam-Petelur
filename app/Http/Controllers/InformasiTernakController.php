<?php

namespace App\Http\Controllers;

use App\Models\InformasiTernak;
use Illuminate\Http\Request;

class InformasiTernakController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $informasiTernak = InformasiTernak::all();
        return view('admin.informasi.index', compact(['informasiTernak']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.informasi.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        InformasiTernak::create($request->all());
        return redirect()->route('informasiTernak.index')->with('success', 'Informasi Ternak Berhasil Dibuat');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\InformasiTernak  $informasiTernak
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\InformasiTernak  $informasiTernak
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $informasiTernak = InformasiTernak::find($id);
        return view('admin.informasi.edit', compact(['informasiTernak']));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\InformasiTernak  $informasiTernak
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $informasiTernak = InformasiTernak::find($id);
        $informasiTernak->update($request->all());
        return redirect()->route('informasiTernak.index')->with('success', 'Informasi Ternak Berhasil Diedit!!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\InformasiTernak  $informasiTernak
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $informasiTernak = InformasiTernak::find($id);
        $informasiTernak->delete();
        return redirect()->route('informasiTernak.index')->with('success', 'Informasi Ternak Berhasil DiHapus!!');
    }
}
