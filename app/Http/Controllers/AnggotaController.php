<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Anggota;

class AnggotaController extends Controller
{
        // view index
        public function index()
        {
            $anggota = Anggota::orderBy('created_at', 'DESC')->get();
            return view('anggota.index', compact('anggota'));
        }

        // view tambah
    public function tambah()
    {
        return view('anggota.tambah');
    }
    // simpan setelah tambah
    public function simpan(Request $request)
    {
        $this->validate($request, [
            'nama' => 'required|string',
            'angkatan' => 'integer',
            'jurusan' => 'string',
            'gender' => 'string',
            'tempatl' => 'string',
            'tanggall' => 'date'
        ]);

        try {
            $anggota = Anggota::create([
                'nama' => $request->nama,
                'angkatan' => $request->angkatan,
                'jurusan' => $request->jurusan,
                'gender' => $request->gender,
                'tempatl' => $request->tempatl,
                'tanggall' => $request->tanggall
            ]);
            return redirect('/anggota')->with(['success' => '<b>' . $anggota->nama . '</b> Telah disimpan']);
        } catch(\Exception $e) {
            return redirect('/anggota/tambah')->with(['error' => $e->getMessage()]);
        }
    }
    // View Update - bagian EDIT
    public function edit($id)
    {
        $anggota = Anggota::find($id);
        return view('anggota.edit', compact('anggota'));
    }
    // bagian update setelah edit
    public function update(Request $request, $id)
    {
        $anggota = Anggota::find($id);
        $anggota->update([
            'nama' => $request->nama,
            'angkatan' => $request->angkatan,
            'jurusan' => $request->jurusan,
            'gender' => $request->gender,
            'tempatl' => $request->tempatl,
            'tanggall' => $request->tanggall
        ]);
        return redirect('/anggota')->with(['success' => '<b>' . $anggota->nama . '</b> Diperbaharui']);
    }
    //Hapus
    public function hapus($id)
    {
        $anggota = Anggota::find($id);
        $anggota->delete();
        return redirect('/anggota')->with(['success' => '<b>' . $anggota->nama . '</b> Berhasil Dihapus']);
    }
}
