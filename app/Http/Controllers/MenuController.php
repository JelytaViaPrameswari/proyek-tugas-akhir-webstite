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
            'foto' => 'required|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        // Ambil data foto
        $file = $request->file('foto');
        $namaFoto = time() . '_' . $file->getClientOriginalName();

        // simpan foto ke folder public/images
        $file->move(public_path('images'), $namaFoto);

        // Simpan ke databse
        \App\Models\Menu::create([
            'nama_menu'=> $request->nama_menu,
            'kategori'=> $request->kategori,
            'harga'=> $request->harga,
            'foto'=> $namaFoto,
        ]);

        return redirect()->route('admin.menu.index')->with('success', 'Menu berhasil ditambah');
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
    public function edit($id)
    {
        // cari data menu yg mau diedit dengan ID
        $menu = \App\Models\Menu::findOrFail($id);

        // pindah data menu ke halaman edit
        return view('admin.edit', compact('menu'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'nama_menu' => 'required',
            'kategori' => 'required',
            'harga' => 'required|numeric',
            'foto' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        $menu = \App\Models\Menu::findOrFail($id);
        $namaFoto = $menu->foto;

        // Jika ingin memakai foto baru
        if ($request->hasFile('foto')) {
            // hapus foto lama
            if ($menu->foto && file_exists(public_path('images/ . $menu->foto'))) {
                unlink(public_path('images/ . $menu->foto'));

                // simpan foto baru
                $file = $request->file('foto');
                $namaFoto = time() . '_' . $file->getClientOriginalName();
                $file->move(public_path('images'), $namaFoto);
            }
                $file = $request->file('foto');
                $namaFoto = time() . '_' . $file->getClientOriginalName();
                $file->move(public_path('images'), $namaFoto);
            // update ke database
            $menu->update([
                'nama_menu' => $request->nama_menu,
                'kategori' => $request->kategori,
                'harga' => $request->harga,
                'foto' => $namaFoto,
            ]);

            return redirect()->route('admin.menu.index')->with('success', 'Menu berhasil diperbarui');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        // cari data dengan ID
        $menu = \App\Models\Menu::findOrFail($id);

        // hapus file foto dari folder public/images
        if ($menu->foto && file_exists(public_path('images/' . $menu->foto))) {
            unlink(public_path('images/' . $menu->foto));
        }

        // Hapus data dari database
        $menu->delete();

        return redirect()->route('admin.menu.index')->with('success', 'Menu berhasil dihapus');
    }

    public function halamanUtama()
    {
        $semuaMenu = \App\Models\Menu::all();

        return view('welcome', compact('semuaMenu'));
    }
}

    
