<?php

namespace App\Http\Controllers;

use App\Models\BeritaKegiatanFoto;
use App\Models\BeritaKegiatanVideo;

class GaleriController extends Controller
{
    public function foto()
    {
        $data = [
            'title' => 'Berita Kegiatan Foto',
            'foto' => BeritaKegiatanFoto::latest()->paginate(8),
        ];
        return view('galeri.foto.index', $data);
    }
    public function lihatfoto($id)
    {
        $data = [
            'title' => 'Berita Kegiatan Foto',
            'foto' => BeritaKegiatanFoto::findOrFail($id),
            'beritafoto' => BeritaKegiatanFoto::where('id', '!=', $id)->latest()->limit(2)->get(),
            'beritavideo' => BeritaKegiatanVideo::latest()->limit(1)->get(),
        ];
        return view('galeri.foto.lihat', $data);
    }
    public function video()
    {
        $data = [
            'title' => 'Berita Kegiatan Video',
            'video' => BeritaKegiatanVideo::latest()->paginate(8),
        ];
        return view('galeri.video.index', $data);
    }
    public function lihatvideo($id)
    {
        $data = [
            'title' => 'Berita Kegiatan Video',
            'video' => BeritaKegiatanVideo::findOrFail($id),
            'beritafoto' => BeritaKegiatanFoto::latest()->limit(2)->get(),
            'beritavideo' => BeritaKegiatanVideo::where('id', '!=', $id)->latest()->limit(1)->get(),
        ];
        return view('galeri.video.lihat', $data);
    }
}
