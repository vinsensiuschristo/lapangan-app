<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use Illuminate\Http\Request;

class KategoriController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $kategoris = Kategori::all();
        return view('admin.kategori.index', compact('kategoris'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.kategori.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|',
            'id' => 'required|unique:App\Models\Kategori,id|max_digits:4',
        ]);

        Kategori::create([
            'nama' => $request->nama,
            'id' => $request->id,
        ]);

        return redirect()->route('admin.kategori.index')->with('success', 'Kategori berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $kategori = Kategori::find($id);

        if (!$kategori) {
            return redirect()->route('admin.kategori.index')->with('error', 'Kategori tidak ditemukan');
        }

        return view('admin.kategori.edit', compact('kategori'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'nama' => 'required|',
        ]);

        $kategori = Kategori::find($id);

        if ($kategori) {
            Kategori::where('id', $id)->update([
                'id' => $kategori->id,
                'nama' => $request->nama,
            ]);
            return redirect()->route('admin.kategori.index')->with('success', 'Kategori Berhasil Diupdate');
        } else {
            return redirect()->route('admin.kategori.index')->with('error', 'Kategori tidak ditemukan');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $kategori = Kategori::find($id);

        if ($kategori) {
            $kategori->delete();
            return redirect()->route('admin.kategori.index')->with('success', 'Kategori berhasil dihapus');
        } else {
            return redirect()->route('admin.kategori.index')->with('error', 'Kategori tidak ditemukan');
        }
    }
}
