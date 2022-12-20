<?php

namespace App\Http\Controllers;

use App\Models\BateraiKandang;
use Illuminate\Http\Request;

class BateraiKandangController extends Controller
{
    public function index(){
        $bateraiKandang = BateraiKandang::all();
        return view('admin.baterai.index', compact(['bateraiKandang']));
    }

    public function create(){
        return view('admin.baterai.create');
    }

    public function store(Request $request){
        BateraiKandang::create($request->all());
        return redirect()->route('bateraiKandang.index')->with('success', 'Baterai Kandang Berhasil Dibuat');
    }

    public function edit($id){
        $bateraiKandang = BateraiKandang::find($id);
        return view('admin.baterai.edit', compact(['bateraiKandang']));
    }

    public function update(Request $request,$id){
        $bateraiKandang = BateraiKandang::find($id);
        $bateraiKandang->update($request->all());
        return redirect()->route('bateraiKandang.index')->with('success', 'Baterai Kandang Berhasil Diedit!!');
    }

    public function destroy($id){
        $bateraiKandang = BateraiKandang::find($id);
        $bateraiKandang->delete();
        return redirect()->route('bateraiKandang.index')->with('success', 'Baterai Kandang Berhasil DiHapus!!');
    }

    public function show($id)
    {
        
    }
}