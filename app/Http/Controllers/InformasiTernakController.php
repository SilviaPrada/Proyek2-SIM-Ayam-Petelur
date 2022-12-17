<?php

namespace App\Http\Controllers;

use App\Models\InformasiTernak;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Str;
use App\Http\Controllers\Controller;

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
        return view('admin.informasi.index', compact('informasiTernak'));
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
        $this->validate($request, [
            'nama_penyakit' => 'required',
            'keterangan' => 'required',
            'gejala' => 'required',
            'pengobatan' => 'required'
        ]);

        InformasiTernak::updateOrCreate(
            [
                'id' => $request->penyakit_id
            ],
            [
                'nama_penyakit' => $request->nama_penyakit,
                'keterangan' => $request->keterangan,
                'gejala' => $request->gejala,
                'pengobatan' => $request->pengobatan,
            ]
        );

        return redirect()->back()->with('success', 'Informasi berhasil diperbarui!'); 
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\InformasiTernak  $informasiTernak
     * @return \Illuminate\Http\Response
     */
    public function show(InformasiTernak $informasiTernak)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\InformasiTernak  $informasiTernak
     * @return \Illuminate\Http\Response
     */
    public function edit(InformasiTernak $informasiTernak)
    {
        //
        $informasiTernak = Crypt::decrypt($informasiTernak);
        $informasiTernak = InformasiTernak::findorfail($informasiTernak);
        return view('admin.informasi.edit', compact('informasiTernak'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\InformasiTernak  $informasiTernak
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, InformasiTernak $informasiTernak)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\InformasiTernak  $informasiTernak
     * @return \Illuminate\Http\Response
     */
    public function destroy(InformasiTernak $informasiTernak)
    {
        $informasiTernak = InformasiTernak::findorfail($informasiTernak);
        $informasiTernak->delete();
        return redirect()->back()->with('warning', 'Informasi berhasil dihapus! (Silahkan cek trash Informasi)');
    }

    public function trash()
    {
        $informasiTernak = InformasiTernak::onlyTrashed()->get();
        return view('admin.informasi.trash', compact('informasiTernak'));
    }

    public function restore($informasiTernak)
    {
        $informasiTernak = Crypt::decrypt($informasiTernak);
        $informasiTernak = InformasiTernak::withTrashed()->findorfail($informasiTernak);
        $informasiTernak->restore();
        return redirect()->back()->with('info', 'Infomrasi berhasil direstore! (Silahkan cek informasi)');
    }

    public function kill($informasiTernak)
    {
        $informasiTernak = InformasiTernak::withTrashed()->findorfail($informasiTernak);
        $informasiTernak->forceDelete();
        return redirect()->back()->with('success', 'Informasi berhasil dihapus secara permanent');
    }
}
