<?php

namespace App\Http\Controllers;

use App\Models\BeritaKegiatanFoto;
use App\Models\BeritaKegiatanVideo;
use Illuminate\Http\Request;

class BerandaController extends Controller
{
    public function index()
    {
        $data = [
            'title' => 'Beranda',
            'fotobaru' => BeritaKegiatanFoto::latest('created_at')->first(),
            'fototerbaru' => BeritaKegiatanFoto::latest()->limit(4)->get(),
            'fototu' => BeritaKegiatanFoto::latest()->where('bagian', 'Tata Usaha')->limit(4)->get(),
            'fotokip' => BeritaKegiatanFoto::latest()->where('bagian', 'Komunikasi dan Informasi Publik')->limit(4)->get(),
            'fotojkd' => BeritaKegiatanFoto::latest()->where('bagian', 'Jaringan Komunikasi Data')->limit(4)->get(),
            'fotosiss' => BeritaKegiatanFoto::latest()->where('bagian', 'Sistem Informasi, Siber dan Sandi')->limit(4)->get(),
            'videobaru' => BeritaKegiatanVideo::latest('created_at')->first(),
            'videoterbaru' => BeritaKegiatanVideo::latest()->limit(2)->get(),
            'videotu' => BeritaKegiatanVideo::latest()->where('bagian', 'Tata Usaha')->limit(2)->get(),
            'videokip' => BeritaKegiatanVideo::latest()->where('bagian', 'Komunikasi dan Informasi Publik')->limit(2)->get(),
            'videojkd' => BeritaKegiatanVideo::latest()->where('bagian', 'Jaringan Komunikasi Data')->limit(2)->get(),
            'videosiss' => BeritaKegiatanVideo::latest()->where('bagian', 'Sistem Informasi, Siber dan Sandi')->limit(2)->get(),
        ];
        return view('beranda.index', $data);
    }
}
