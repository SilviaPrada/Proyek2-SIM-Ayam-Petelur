<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\AnakKandang;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;

class AnakKandangController extends Controller
{
    public function index(){
        $anakKandang = AnakKandang::all();
        return view('admin.anakKandang.index', compact(['anakKandang']));
    }

    public function create(){
        return view('admin.anakKandang.create');
    }

    public function store(Request $request){
        AnakKandang::create($request->all());
        return redirect()->route('anakKandang.index')->with('success', 'Anak Kandang Berhasil Ditambahkan');
    }

    public function edit($id){
        $anakKandang = AnakKandang::find($id);
        return view('admin.anakKandang.edit', compact(['anakKandang']));
    }

    public function update(Request $request,$id){
        $anakKandang = AnakKandang::find($id);
        $anakKandang->update($request->all());
        return redirect()->route('anakKandang.index')->with('success', 'Anak Kandang Berhasil Diubah!!');
    }

    public function destroy($id){
        $anakKandang = anakKandang::find($id);
        $anakKandang->delete();
        return redirect()->route('anakKandang.index')->with('success', 'Anak Kandang Berhasil DiHapus!!');
    }

    public function show($id)
    {
        
    }
}
