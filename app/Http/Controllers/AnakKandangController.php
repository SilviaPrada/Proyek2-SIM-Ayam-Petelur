<?php

namespace App\Http\Controllers;

use App\Models\AnakKandang;
use App\Models\BateraiKandang;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Crypt;

class AnakKandangController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // berarti anak kandang
        // pada halaman index anak kandang nnt akan ditampilkan urutan brdasarkan baterainya
        $bateraiKandang = BateraiKandang::OrderBy('nama_baterai', 'asc')->get();
        return view('admin.anakKandang.index', compact('bateraiKandang'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // creatnya di admin.index
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
            'no_ktp' => 'required|string|unique:anakKandang',
            'nama_anak_kandang' => 'required',
            'jk' => 'required',
            'baterai_id' => 'required'
        ]);

        if ($request->foto_anak_kandang) {
            $foto = $request->foto_anak_kandang;
            $new_foto_anak_kandang = date('siHdmY') . "_" . $foto_anak_kandang->getClientOriginalName();
            $foto_anak_kandang->move('uploads/anakKandang/', $new_foto_anak_kandang);
            $nameFoto_anak_kandang = 'uploads/anakKandang/' . $new_foto_anak_kandang;
        } else {
            if ($request->jk == 'L') {
                $nameFoto_anak_kandang = 'uploads/anakKandang/52471919042020_male.jpg';
            } else {
                $nameFoto_anak_kandang = 'uploads/anakKandang/50271431012020_female.jpg';
            }
        }

        AnakKandang::create([
            'no_ktp' => $request->no_ktp,
            'nama_anak_kandang' => $request->nama_anak_kandang,
            'jk' => $request->jk,
            'baterai_id' => $request->baterai_id,
            'telp' => $request->telp,
            'tmp_lahir' => $request->tmp_lahir,
            'tgl_lahir' => $request->tgl_lahir,
            'foto_anak_kandang' => $nameFoto_anak_kandang
        ]);

        return redirect()->back()->with('success', 'Berhasil menambahkan data anak kandang baru!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(AnakKandang $anakKandang)
    {
        //
        $anakKandang = Crypt::decrypt($anakKandang);
        $anakKandang = AnakKandang::findorfail($anakKandang);
        return view('admin.anakKandang.details', compact('anakKandang'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(AnakKandang $anakKandang)
    {
        //
        $anakKandang = Crypt::decrypt($anakKandang);
        $anakKandang = AnakKandang::findorfail($anakKandang);
        $bateraiKandang= BateraiKandang::all();
        return view('admin.anakKandang.edit', compact('anakKandang', 'bateraiKandang'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, AnakKandang $anakKandang)
    {
        //
        $this->validate($request, [
            'nama_anak_kandang' => 'required',
            'jk' => 'required',
            'baterai_id' => 'required'
        ]);

        $anakKandang = AnakKandang::findorfail($anakKandang);
        $user = User::where('no_ktp', $anakKandang->no_ktp)->first();
        if ($user) {
            $user_data = [
                'name' => $request->nama_anak_kandang
            ];
            $user->update($user_data);
        } else {
        }

        $anakKandang_data = [
            'nama_anak_kandang' => $request->nama_anak_kandang,
            'jk' => $request->jk,
            'baterai_id' => $request->baterai_id,
            'telp' => $request->telp,
            'tmp_lahir' => $request->tmp_lahir,
            'tgl_lahir' => $request->tgl_lahir,
        ];
        $anakKandang->update($anakKandang_data);

        return redirect()->route('anakKandang.index')->with('success', 'Data anak kandang berhasil diperbarui!');
    
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(AnakKandang $anakKandang)
    {
        //
        $anakKandang = AnakKandang::findorfail($anakKandang);
        $countUser = User::where('no_ktp', $anakKandang->no_ktp)->count();
        if ($countUser >= 1) {
            $user = User::where('no_ktp', $anakKandang->no_ktp)->first();
            $anakKandang->delete();
            $user->delete();
            return redirect()->back()->with('warning', 'Data anak kandang berhasil dihapus! (Silahkan cek trash data anak kandang)');
        } else {
            $anakKandang->delete();
            return redirect()->back()->with('warning', 'Data anak kandang berhasil dihapus! (Silahkan cek trash data anak kandang)');
        }
    }

    //penyimpanan data yang sudah di hapus
    public function trash()
    {
        $anakKandang = AnakKandang::onlyTrashed()->get();
        return view('admin.anakKandang.trash', compact('anakKandang'));
    }

    // Mengembalikan data yang sudah di hapus sementara
    public function restore(AnakKandang $anakKandang)
    {
        $anakKandang = Crypt::decrypt($anakKandang);
        $anakKandang = AnakKandang::withTrashed()->findorfail($anakKandang);
        $countUser = User::withTrashed()->where('no_ktp', $anakKandang->no_ktp)->count();
        if ($countUser >= 1) {
            $user = User::withTrashed()->where('no_ktp', $anakKandang->no_ktp)->first();
            $anakKandang->restore();
            $user->restore();
            return redirect()->back()->with('info', 'Data anak kandang berhasil direstore! (Silahkan cek data anak kandang)');
        } else {
            $anakKandang->restore();
            return redirect()->back()->with('info', 'Data anak kandang berhasil direstore! (Silahkan cek data anak kandang)');
        }
    }

    // Menghapus data secara permanen
    public function kill(AnakKandang $anakKandang)
    {
        $anakKandang = AnakKandang::withTrashed()->findorfail($anakKandang);
        $countUser = User::withTrashed()->where('no_ktp', $anakKandang->no_ktp)->count();
        if ($countUser >= 1) {
            $user = User::withTrashed()->where('no_ktp', $anakKandang->no_ktp)->first();
            $anakKandang->forceDelete();
            $user->forceDelete();
            return redirect()->back()->with('success', 'Data anak kandang berhasil dihapus secara permanent');
        } else {
            $anakKandang->forceDelete();
            return redirect()->back()->with('success', 'Data anak kandang berhasil dihapus secara permanent');
        }
    }

    public function ubah_foto(AnakKandang $anakKandang)
    {
        $anakKandang = Crypt::decrypt($anakKandang);
        $anakKandang = AnakKandang::findorfail($anakKandang);
        return view('admin.anakKandang.ubah-foto', compact('anakKandang'));
    }

    public function update_foto(Request $request, AnakKandang $anakKandang)
    {
        $this->validate($request, [
            'foto_anak_kandang' => 'required'
        ]);

        $anakKandang = AnakKandang::findorfail($anakKandang);
        $foto_anak_kandang = $request->foto_anak_kandang;
        $new_foto_anak_kandang = date('s' . 'i' . 'H' . 'd' . 'm' . 'Y') . "_" . $foto->getClientOriginalName();
        $anakKandang_data = [
            'foto_anak_kandang' => 'uploads/anakKandang/' . $new_foto_anak_kandang,
        ];
        $foto_anak_kandang->move('uploads/anakKandang/', $new_foto_anak_kandang);
        $anakKandang->update($anakKandang_data);

        return redirect()->route('anakKandang.index')->with('success', 'Berhasil merubah foto!');
    }

    public function view(Request $request)
    {
        $anakKandang = AnakKandang::OrderBy('nama_anak_kandang', 'asc')->where('baterai_id', $request->id)->get();

        foreach ($anakKandang as $val) {
            $newForm[] = array(
                'baterai' => $val->kelas->nama_baterai,
                'no_ktp' => $val->no_ktp,
                'nama_anak_kandang' => $val->nama_anak_kandang,
                'jk' => $val->jk,
                'foto_anak_Kandang' => $val->foto_anak_kandang
            );
        }

        return response()->json($newForm);
    }

    public function bateraiKandang(AnakKandang $anakKandang)
    {
        $anakKandang = Crypt::decrypt($anakKandang);
        $anakKandang = AnakKandang::where('baterai_id', $anakKandang)->OrderBy('nama_anak_kandang', 'asc')->get();
        $bateraiKandang= BateraiKandang::findorfail($bateraiKandang);
        return view('admin.anakKandang.show', compact('anakKandang', 'bateraiKandang'));
    }

    public function deleteAll()
    {
        $anakKandang = AnakKandang::all();
        if ($anakKandang->count() >= 1) {
            AnakKandang::whereNotNull('id')->delete();
            AnakKandang::withTrashed()->whereNotNull('id')->forceDelete();
            return redirect()->back()->with('success', 'Data table anak kandang berhasil dihapus!');
        } else {
            return redirect()->back()->with('warning', 'Data table anak kandang kosong!');
        }
    }
}
