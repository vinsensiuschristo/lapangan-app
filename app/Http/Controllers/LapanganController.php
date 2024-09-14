<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use App\Models\Lapangan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class LapanganController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $lapangans = DB::table('lapangan')
            ->join('kategori', 'lapangan.kategori_id', '=', 'kategori.id')
            ->select('lapangan.*', 'kategori.nama as nama_kategori')
            ->get();

        return view('admin.lapangan.index', compact('lapangans'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $kategoris = Kategori::all();
        return view('admin.lapangan.create', compact('kategoris'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'id' => 'required|unique:App\Models\Lapangan,id',
            'nama' => 'required',
            'kategori' => 'required',
            'harga' => 'required',
            'foto1' => 'required|mimes:png,jpg,jpeg|max:2048',
            'foto2' => 'mimes:png,jpg,jpeg|max:2048',
            'foto3' => 'mimes:png,jpg,jpeg|max:2048',
        ]);

        $foto1 = $request->file('foto1');
        $fileName = time() . '_' . $foto1->getClientOriginalName();
        $path = 'foto-lapangan/' . $fileName;
        Storage::disk('public')->put($path, file_get_contents($foto1));

        $foto2 = $request->file('foto2');
        if ($request->hasFile('foto2')) {
            $fileName2 = time() . '_' . $foto2->getClientOriginalName();
            $path2 = 'foto-lapangan/' . $fileName2;
            Storage::disk('public')->put($path2, file_get_contents($foto2));
        } else {
            $fileName2 = null;
        }


        // dd('foto2');
        $foto3 = $request->file('foto3');
        if ($request->hasFile('foto3')) {
            $fileName3 = time() . '_' . $foto3->getClientOriginalName();
            $path3 = 'foto-lapangan/' . $fileName3;
            Storage::disk('public')->put($path3, file_get_contents($foto3));
        } else {
            $fileName3 = null;
        }


        Lapangan::create([
            'id' => $request->id,
            'nama' => $request->nama,
            'harga' => $request->harga,
            'foto' => $fileName,
            'foto2' => $request->hasFile('foto2') ? $fileName2 : null,
            'foto3' => $request->hasFile('foto3') ? $fileName3 : null,
            'kategori_id' => $request->kategori,
        ]);



        return redirect()->route('admin.lapangan.index')->with('success', 'Lapangan berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $lapangan = DB::table('lapangan')
            ->join('kategori', 'lapangan.kategori_id', '=', 'kategori.id')
            ->select('lapangan.*', 'kategori.nama as nama_kategori')
            ->where('lapangan.id', $id)
            ->get()->first();

        return view('admin.lapangan.show', compact('lapangan'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $lapangan = Lapangan::find($id);
        $kategoris = Kategori::all();

        return view('admin.lapangan.edit', compact('lapangan', 'kategoris'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'nama' => 'required',
            'kategori' => 'required',
            'harga' => 'required',
            'foto1' => 'mimes:png,jpg,jpeg|max:2048',
            'foto2' => 'mimes:png,jpg,jpeg|max:2048',
            'foto3' => 'mimes:png,jpg,jpeg|max:2048',
        ]);

        $foto1 = $request->file('foto1');
        if ($request->hasFile('foto1')) {
            $fileName1 = time() . '_' . $foto1->getClientOriginalName();
            $path2 = 'foto-lapangan/' . $fileName1;
            Storage::disk('public')->put($path2, file_get_contents($foto1));
        } else {
            $fileName1 = null;
        }

        $foto2 = $request->file('foto2');
        if ($request->hasFile('foto2')) {
            $fileName2 = time() . '_' . $foto2->getClientOriginalName();
            $path2 = 'foto-lapangan/' . $fileName2;
            Storage::disk('public')->put($path2, file_get_contents($foto2));
        } else {
            $fileName2 = null;
        }


        // dd('foto2');
        $foto3 = $request->file('foto3');
        if ($request->hasFile('foto3')) {
            $fileName3 = time() . '_' . $foto3->getClientOriginalName();
            $path3 = 'foto-lapangan/' . $fileName3;
            Storage::disk('public')->put($path3, file_get_contents($foto3));
        } else {
            $fileName3 = null;
        }


        Lapangan::where('id', $id)->update([
            'id' => $request->id,
            'nama' => $request->nama,
            'harga' => $request->harga,
            'foto' => $request->hasFile('foto1') ? $fileName1 : null,
            'foto2' => $request->hasFile('foto2') ? $fileName2 : null,
            'foto3' => $request->hasFile('foto3') ? $fileName3 : null,
            'kategori_id' => $request->kategori,
        ]);

        return redirect()->route('admin.lapangan.index')->with('success', 'Lapangan berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $lapangan = Lapangan::find($id);
        Storage::disk('public')->delete('foto-lapangan/' . $lapangan->foto);
        Storage::disk('public')->delete('foto-lapangan/' . $lapangan->foto2);
        Storage::disk('public')->delete('foto-lapangan/' . $lapangan->foto3);

        $lapangan->delete();

        return redirect()->route('admin.lapangan.index')->with('success', 'Lapangan berhasil dihapus');
    }
}
