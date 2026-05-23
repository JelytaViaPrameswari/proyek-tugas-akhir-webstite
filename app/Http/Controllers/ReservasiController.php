<?php

namespace App\Http\Controllers;

use App\Models\Reservasi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class ReservasiController extends Controller
{
    public function simpan(Request $request)
    {
        // validasi input agar data yg masuk sesuai
        $request->validate([
            'nama' => 'required|string|max:255',
            'email' => 'nullable|email|max:255',
            'telepon' => 'required|string|max:20',
            'tanggal' => 'required|date',
            'jam' => 'required',
            'jumlah_orang' => 'required|string|',
            'pilih_acara' => 'nullable|string',
            'catatan' => 'nullable|string',
        ]);

        // simpan data ke database 
        \App\Models\Reservasi::create([
            'nama' => $request->nama,
            'email' => $request->email,
            'telepon' => $request->telepon,
            'tanggal' => $request->tanggal,
            'jam' => $request->jam,
            'jumlah_orang' => $request->jumlah_orang,
            'pilih_acara' => $request->pilih_acara,
            'catatan' => $request->catatan
        ]);

        // Pastikan baris terakhir di dalam function simpan() adalah ini:
        return redirect()->back()->with('sukses', 'Reservasi meja Anda berhasil disimpan! Kami tunggu kedatangan Anda.');
    }
}
