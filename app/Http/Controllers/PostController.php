<?php

namespace App\Http\Controllers;

use App\Models\Transaksi;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function show()
    {
        $post = Transaksi::latest();

        if (request('search')) {
            $post->where('kode_transaksi', 'like', '%' . request('search') . '%');
        }

        return view('dashboard.post', [
            'title' => 'Laporan Transaksi',
            'post' => $post->get()
        ]);
    }
}
