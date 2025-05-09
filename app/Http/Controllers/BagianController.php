<?php

namespace App\Http\Controllers;

use App\Models\BeritaKegiatanFoto;
use App\Models\BeritaKegiatanVideo;
use App\Models\GaleriPegawai;
use App\Models\InformasiKepegawaian;
use App\Models\InformasiKeuangan;
use App\Models\IsiJaringanKomunikasiData;
use App\Models\IsiKomunikasidanInformasiPublik;
use App\Models\IsiSistemInformasiSiberdanSandi;
use App\Models\IsiTataUsaha;
use App\Models\JaringanKomunikasiData;
use App\Models\KomunikasidanInformasiPublik;
use App\Models\SistemInformasiSiberdanSandi;
use App\Models\TataUsaha;
use App\Models\TenagaAhli;
use Illuminate\Http\Request;

class BagianController extends Controller
{
    public function tu()
    {
        $data = [
            'title' => 'Tata Usaha',
            'bagian' => TataUsaha::all()->first(),
            'isi' => IsiTataUsaha::all(),
            'beritafoto' => BeritaKegiatanFoto::where('bagian', 'Tata Usaha')->latest()->limit(1)->get(),
            'beritavideo' => BeritaKegiatanVideo::where('bagian', 'Tata Usaha')->latest()->limit(1)->get(),
            'foto' => GaleriPegawai::where('bagian', 'Tata Usaha')->latest()->limit(8)->get(),
            'keuangan' => InformasiKeuangan::all(),
            'kepegawaian' => InformasiKepegawaian::all(),

        ];
        return view('bagian.tu.index', $data);
    }
    public function kip()
    {
        $data = [
            'title' => 'Komunukasi Informasi dan Publikasi',
            'bagian' => KomunikasidanInformasiPublik::all()->first(),
            'isi' => IsiKomunikasidanInformasiPublik::all(),
            'beritafoto' => BeritaKegiatanFoto::where('bagian', 'Komunikasi dan Informasi Publik')->latest()->limit(1)->get(),
            'beritavideo' => BeritaKegiatanVideo::where('bagian', 'Komunikasi dan Informasi Publik')->latest()->limit(1)->get(),
            'foto' => GaleriPegawai::where('bagian', 'Komunikasi dan Informasi Publik')->latest()->limit(8)->get(),
        ];
        return view('bagian.kip.index', $data);
    }
    public function jkd()
    {
        $data = [
            'title' => 'Jaringan Komunikasi dan Data',
            'bagian' => JaringanKomunikasiData::all()->first(),
            'isi' => IsiJaringanKomunikasiData::all(),
            'beritafoto' => BeritaKegiatanFoto::where('bagian', 'Jaringan Komunikasi Data')->latest()->limit(1)->get(),
            'beritavideo' => BeritaKegiatanVideo::where('bagian', 'Jaringan Komunikasi Data')->latest()->limit(1)->get(),
            'foto' => GaleriPegawai::where('bagian', 'Jaringan Komunikasi Data')->latest()->limit(8)->get(),
        ];
        return view('bagian.jkd.index', $data);
    }
    public function siss()
    {
        $data = [
            'title' => 'Sistem Informasi, Siber dan Statistik',
            'bagian' => SistemInformasiSiberdanSandi::all()->first(),
            'isi' => IsiSistemInformasiSiberdanSandi::all(),
            'beritafoto' => BeritaKegiatanFoto::where('bagian', 'Sistem Informasi, Siber dan Sandi')->latest()->limit(2)->get(),
            'beritavideo' => BeritaKegiatanVideo::where('bagian', 'Sistem Informasi, Siber dan Sandi')->latest()->limit(1)->get(),
            'foto' => GaleriPegawai::where('bagian', 'Sistem Informasi, Siber dan Sandi')->latest()->limit(8)->get(),
        ];
        return view('bagian.siss.index', $data);
    }
}
