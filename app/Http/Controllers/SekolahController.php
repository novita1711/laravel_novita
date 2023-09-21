<?php

namespace App\Http\Controllers;

use App\Models\sekolah;
use Illuminate\Http\Request;

class SekolahController extends Controller
{
    public function index()
    {
        $sekolahs =sekolah::all();
        return view('sekolahs.index') -> with ('sekolahs', $sekolahs);
        
    }

    public function tambah()
    {
        $sekolahs = sekolah::all();
        return view('sekolahs.tambah')->with ('sekolahs', $sekolahs);
    }
    public function simpan(Request $request)
    {
        $sekolah = new sekolah ();
        
        $sekolah->nama_sekolah = $request->nama_sekolah;
        $sekolah->alamat = $request->alamat;
        $sekolah->jurusan = $request->jurusan;
        $sekolah->jumlah_guru = $request->jumlah_guru;

        $sekolah->save();

        return redirect()->route('sekolah.index');
        
    }
public function edit($id)
{
    $sekolah=sekolah::find($id);

    return view('sekolahs.edit', [
        'sekolahs' => $sekolah,
    ]);
}
public function update(Request $request, $id)
{
    $sekolah = sekolah::find($id);
        
    $sekolah->nama_sekolah = $request->nama_sekolah;
    $sekolah->alamat = $request->alamat;
    $sekolah->jurusan = $request->jurusan;
    $sekolah->jumlah_guru = $request->jumlah_guru;

    $sekolah->save();

    return redirect()->route('sekolah.index');
}
public function destroy($id)
{
    $sekolah = sekolah::find($id);

    $sekolah->delete();

    return redirect()->route('sekolah.index');

}
}
