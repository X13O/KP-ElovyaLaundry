<?php

namespace App\Http\Controllers;

use App\Models\Tipe;
use Illuminate\Http\Request;

class TipeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $tipes = Tipe::all();

        return view('dashboard.tipe.index', [
            'title' => 'Tipe Cucian',
            'tipe' => $tipes
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.tipe.create', [
            'title' => 'Tambah Tipe Cucian',
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validasi = $request->validate([
            'tipe_harga' => 'required',
        ]);

        Tipe::create($validasi);

        return redirect('/dashboard/admin/tipe')->with('success', 'Tipe Cucian Berhasil di Tambahkan');
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
        $tipes = Tipe::find($id);

        return view('dashboard.tipe.edit', [
            'title' => 'Update Tipe Cucian',
            'tipe' => $tipes,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $tipes = Tipe::find($id);

        $validasi = $request->validate([
            'tipe_harga' => 'required',
        ]);

        $tipes->update($validasi);

        return redirect('/dashboard/admin/tipe')->with('success', 'Harga Tipe Cucian Berhasil di Update');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Tipe::destroy($id);

        return redirect('/dashboard/admin/tipe')->with('success', 'Tipe Cucian Berhasil di Hapus');
    }
}
