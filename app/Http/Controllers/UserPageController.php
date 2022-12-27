<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PencatatanAyam;

class UserPageController extends Controller
{
    public function store(Request $request)
    {
        PencatatanAyam::create($request->all());
        if (auth()->user()->is_admin == 1) {
            return redirect()->route('pencatatanAyam.crud')->with('success', 'Pencatatan Berhasil Dibuat');
        } else if(auth()->user()->is_admin == 0){
            return view('user.home');
        } 
    }

    public function show($id)
    {

    }

    public function edit($id)
    {
        $pencatatanAyam = PencatatanAyam::find($id);
        if (auth()->user()->is_admin == 1) {
            return view('admin.laporanPencatatan.edit', compact(['pencatatanAyam']));
        } else if(auth()->user()->is_admin == 0){
            return view('user.home', compact(['pencatatanAyam']));
        }
    }

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
