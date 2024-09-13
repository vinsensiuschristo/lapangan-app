<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = User::all();
        return view('admin.user.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.user.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request->all());

        $request->validate([
            'id' => 'required',
            'nama' => 'required',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:6',
        ]);

        $hashPassword = bcrypt($request->password);

        User::create([
            'id' => $request->id,
            'name' => $request->nama,
            'email' => $request->email,
            'password' => $hashPassword
        ]);

        return redirect()->route('admin.user.index')->with('success', 'Admin Berhasil Dibuat');
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
        $user = User::find($id);

        return view('admin.user.edit', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'nama' => 'required',
            'email' => 'required|email',
            'password' => 'required|min:6',
        ]);

        $user = User::find($id);

        if ($user) {
            User::where('id', $id)->update([
                'id' => $user->id,
                'name' => $request->nama,
                'email' => $request->email,
                'password' => bcrypt($request->password)
            ]);
            return redirect()->route('admin.user.index')->with('success', 'Admin Berhasil Diupdate');
        } else {
            return redirect()->route('admin.user.index')->with('error', 'Admin tidak ditemukan');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $user = User::find($id);

        if ($user) {
            $user->delete();
            return redirect()->route('admin.user.index')->with('success', 'Admin Berhasil Dihapus');
        } else {
            return redirect()->route('admin.user.index')->with('error', 'Admin tidak ditemukan');
        }
    }
}
