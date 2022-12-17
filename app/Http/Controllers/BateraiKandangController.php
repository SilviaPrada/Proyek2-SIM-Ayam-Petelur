<?php

namespace App\Http\Controllers;

use App\Models\BateraiKandang;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Str;
use App\Http\Controllers\Controller;

class BateraiKandangController extends Controller
{
    public function index()
    {
        // as baterai
        $bateraiKandang = BateraiKandang::all();
        return view('admin.baterai.index', compact(['bateraiKandang']));
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
            'nama_baterai' => 'required',
            'total_ayam' => 'required',
        ]);

        BateraiKandang::updateOrCreate(
            [
                'id' => $request->baterai_id
            ],
            [
                'nama_baterai' => $request->nama_baterai,
                'total_ayam' => $request->total_ayam,
            ]
        );

        return redirect()->back()->with('success', 'Data baterai berhasil diperbarui!'); 
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($bateraiKandang)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(BateraiKandang $bateraiKandang)
    {
        //
        $bateraiKandang = Crypt::decrypt($bateraiKandang);
        $bateraiKandang = BateraiKandang::findorfail($bateraiKandang);
        return view('admin.baterai.edit', compact('bateraiKandang'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $bateraiKandang)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(BateraiKandang $bateraiKandang)
    {
        //
        $bateraiKandang = BateraiKandang::findorfail($bateraiKandang);
        $bateraiKandang->delete();
        return redirect()->back()->with('warning', 'Data baterai berhasil dihapus! (Silahkan cek trash Baterai)');
    }

    public function trash()
    {
        $bateraiKandang = BateraiKandang::onlyTrashed()->get();
        return view('admin.baterai.trash', compact('bateraiKandang'));
    }

    public function restore($bateraiKandang)
    {
        $bateraiKandang = Crypt::decrypt($bateraiKandang);
        $bateraiKandang = BateraiKandang::withTrashed()->findorfail($bateraiKandang);
        $bateraiKandang->restore();
        return redirect()->back()->with('info', 'Data baterai berhasil direstore! (Silahkan cek baterai)');
    }

    public function kill($bateraiKandang)
    {
        $bateraiKandang = BateraiKandang::withTrashed()->findorfail($bateraiKandang);
        $bateraiKandang->forceDelete();
        return redirect()->back()->with('success', 'Data baterai berhasil dihapus secara permanent');
    }
}