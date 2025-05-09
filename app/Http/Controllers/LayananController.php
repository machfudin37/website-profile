<?php

namespace App\Http\Controllers;

use App\Models\Jasa;
use App\Models\Produk;
use Illuminate\Http\Request;

class LayananController extends Controller
{
    public function produk()
    {
        $data = [
            'title' => 'Produk',
            'produk' => Produk::all(),
        ];
        return view('layanan.produk.index', $data);
    }
    public function lihatproduk($id)
    {
        $data = [
            'title' => 'Lihat Produk',
            'produk' => Produk::findOrFail($id),
        ];
        return view('layanan.produk.lihat', $data);
    }
    public function jasa()
    {
        $data = [
            'title' => 'Jasa',
            'jasa' => Jasa::all(),
        ];
        return view('layanan.jasa.index', $data);
    }
    public function lihatjasa($id)
    {
        $data = [
            'title' => 'Lihat Jasa',
            'jasa' => Jasa::findOrFail($id),
        ];
        return view('layanan.jasa.lihat', $data);
    }
}
