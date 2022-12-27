<?php

namespace App\Http\Controllers;

use App\Models\PencatatanAyam;
use App\Models\BateraiKandang;
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
        return view('admin.laporanPencatatan.index');
    }

    public function crud()
    {
        $pencatatanAyam = PencatatanAyam::all();
        if (auth()->user()->is_admin == 1) {
            return view('admin.laporanPencatatan.crud', compact(['pencatatanAyam']));
        } else if(auth()->user()->is_admin == 0){
            return view('user.home', compact(['pencatatanAyam']));
        }   
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
        if (auth()->user()->is_admin == 1) {
            return redirect()->route('pencatatanAyam.crud')->with('success', 'Pencatatan Berhasil Dibuat');
        } else if(auth()->user()->is_admin == 0){
            return view('user.home');
        } 
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\PencatatanAyam  $pencatatanAyam
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

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
        if (auth()->user()->is_admin == 1) {
            return view('admin.laporanPencatatan.edit', compact(['pencatatanAyam']));
        } else if(auth()->user()->is_admin == 0){
            return view('user.home', compact(['pencatatanAyam']));
        }
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
        if (auth()->user()->is_admin == 1) {
            return redirect()->route('pencatatanAyam.crud')->with('success', 'Pencatatan Ayam Berhasil Diedit!!');
        } else if(auth()->user()->is_admin == 0){
            return redirect()->route('user.home')->with('success', 'Pencatatan Ayam Berhasil Diedit!!');
        }
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
        if (auth()->user()->is_admin == 1) {
            return view('admin.laporanPencatatan.crud');
        } else if(auth()->user()->is_admin == 0){
            return view('user.home');
        }
    }
}