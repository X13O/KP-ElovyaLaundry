<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class PelangganController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pelanggan = User::all();

        return view('dashboard.pelanggan.index', [
            'title' => 'Pelanggan',
            'pelanggan' => $pelanggan
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
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
        $pelanggan = User::find($id);

        return view('dashboard.pelanggan.edit', [
            'title' => 'Update Role Data Pelanggan',
            'pelanggan' => $pelanggan,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $pelanggan = User::find($id);

        $validasi = $request->validate([
            'email' => 'required',
            'username' => 'required',
            'nomor_hp' => 'required',
            'alamat' => 'required',
            'role' => 'required',
        ]);

        $pelanggan->update($validasi);

        return redirect('/dashboard/admin/pelanggan')->with('success', 'Role Data Pelanggan Berhasil di Update');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        User::destroy($id);

        return redirect('/dashboard/admin/pelanggan')->with('success', 'Data Pelanggan Berhasil di Hapus');
    }
}
