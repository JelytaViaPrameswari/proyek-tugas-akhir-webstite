<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use Illuminate\Http\Request;

class MenuController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $semuaMenu = \App\Models\Menu::all();
        return view('admin.index', compact('semuaMenu'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validasi input menu
        $request->validate([
            'nama_menu' => 'required',
            'kategori' => 'required',
            'harga' => 'required|numeric',
            'foto' => 'required|image|mimes:jpg,png,jpeg',
        ]);

        // Cek foto yang diupload
        $namaFoto = time(). '.' . $request->foto->extension();
        $request ->foto->move(public_path('images'), $namaFoto);

        // Masukkan data ke db_cafe
        \App\Models\Menu::created([
            'nama_menu' => $request->nama_menu,
            'kategori' => $request->kategori,
            'harga' => $request->harga,
            'foto' => $namaFoto,
        ]);

        // Kembali ke halaman tabel admin
        return redirect()->route('admin.menu.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Menu $menu)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Menu $menu)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Menu $menu)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Menu $menu)
    {
        //
    }
}
