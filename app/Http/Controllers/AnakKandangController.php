<?php

namespace App\Http\Controllers;

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

    public function show($id)
    {
        //
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

    public function ubah_foto($id)
    {
        $id = Crypt::decrypt($id);
        $anakKandang = AnakKandang::findorfail($id);
        return view('admin.anakKandang.ubah-foto', compact('anakKandang'));
    }

    public function update_foto(Request $request, $id)
    {
        $this->validate($request, [
            'foto_anak_kandang' => 'required'
        ]);

        $anakKandang = AnakKandang::findorfail($id);
        $foto_anak_kandang = $request->foto_anak_kandang;
        $new_foto = date('s' . 'i' . 'H' . 'd' . 'm' . 'Y') . "_" . $foto_anak_kandang->getClientOriginalName();
        $anakKandang_data = [
            'foto_anak_kandang' => 'uploads/anakKandang/' . $new_foto,
        ];
        $foto_anak_kandang->move('uploads/anakKandang/', $new_foto);
        $anakKandang->update($anakKandang_data);

        return redirect()->route('anakKandang.index')->with('success', 'Berhasil merubah foto!');
    }
}