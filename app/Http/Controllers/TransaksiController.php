<?php

namespace App\Http\Controllers;

use App\Models\Transaksi;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class TransaksiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('dashboard.laporan.index', [
            'title' => 'Laporan',
            'transaksi' => Transaksi::where('user_id', auth()->user()->id)->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validasi = $request->validate([
            'tgl_transaksi' => 'required',
            'kode_transaksi' => 'required',
            'category_id' => 'required',
            'tipe_harga_id' => 'required',
            'nama_konsumen' => 'required',
            'nomor_konsumen' => 'required',
            'berat_cucian' => 'required',
            'total_harga' => 'required',
            'bayar' => 'required',
            'kembalian' => 'required',
            'status_transaksi' => 'required',
        ]);

        $validasi['user_id'] = auth()->user()->id;

        // Set 'tipe_cucian_id' to the selected 'tipe_harga_id'
        $validasi['tipe_cucian_id'] = $request->input('tipe_harga_id');

        Transaksi::create($validasi);

        return redirect('/dashboard/admin/laporan')->with('success', 'Transaksi Berhasil di Tambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        return view('dashboard.laporan.show', [
            'title' => 'Laporan Transaksi',
            'post' => Transaksi::find($id),
        ]);
    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $transaksi = Transaksi::find($id);

        return view('dashboard.laporan.edit', [
            'title' => 'Update Transaksi',
            'transaksi' => $transaksi,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $transaksi = Transaksi::find($id);

        $validasi = $request->validate([
            'tgl_transaksi' => 'required',
            'kode_transaksi' => 'required',
            'category_id' => 'required',
            'tipe_harga_id' => 'required',
            'nama_konsumen' => 'required',
            'nomor_konsumen' => 'required',
            'berat_cucian' => 'required',
            'total_harga' => 'required',
            'bayar' => 'required',
            'kembalian' => 'required',
            'status_transaksi' => 'required',
        ]);

        $validasi['user_id'] = auth()->user()->id;

        $transaksi->update($validasi);

        return redirect('/dashboard/admin/laporan')->with('success', 'Transaksi Berhasil di Update');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        Transaksi::destroy($id);

        return redirect('/dashboard/admin/laporan')->with('success', 'Transaksi Berhasil di Hapus');
    }
}
