<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Buku;

class BukuController extends Controller
{
    // view index
    public function index()
    {
        $buku = Buku::orderBy('created_at', 'DESC')->get();
        return view('buku.index', compact('buku'));
    }
    // view tambah
    public function tambah()
    {
        return view('buku.tambah');
    }
    // simpan setelah tambah
    public function simpan(Request $request)
    {
        $this->validate($request, [
            'judul' => 'required|string',
            'pengarang' => 'string',
            'penerbit' => 'string',
            'tahun' => 'integer'
        ]);

        try {
            $buku = Buku::create([
                'judul' => $request->judul,
                'pengarang' => $request->pengarang,
                'penerbit' => $request->penerbit,
                'tahun' => $request->tahun
            ]);
            return redirect('/buku')->with(['success' => '<b>' . $buku->judul . '</b> Telah disimpan']);
        } catch(\Exception $e) {
            return redirect('/buku/tambah')->with(['error' => $e->getMessage()]);
        }
    }
    // View Update - bagian EDIT
    public function edit($id)
    {
        $buku = Buku::find($id);
        return view('buku.edit', compact('buku'));
    }
    // bagian update setelah edit
    public function update(Request $request, $id)
    {
        $buku = Buku::find($id);
        $buku->update([
            'judul' => $request->judul,
            'pengarang' => $request->pengarang,
            'penerbit' => $request->penerbit,
            'tahun' => $request->tahun
        ]);
        return redirect('/buku')->with(['success' => '<b>' . $buku->judul . '</b> Diperbaharui']);
    }
    //Hapus
    public function hapus($id)
    {
        $buku = Buku::find($id);
        $buku->delete();
        return redirect('/buku')->with(['success' => '<b>' . $buku->judul . '</b> Berhasil Dihapus']);
    }
}