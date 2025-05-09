<?php

namespace App\Http\Controllers;

use App\Models\Isikominfotik;
use App\Models\Misi;
use App\Models\Pegawai;
use App\Models\Strukturorganisasi;
use App\Models\TenagaAhli;
use App\Models\Tugasdanfungsikominfotik;
use App\Models\VideoProfile;
use App\Models\Visi;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function tugasfungsi()
    {
        $data = [
            'title' => 'Tugas dan Fungsi',
            'kominfotik' => Tugasdanfungsikominfotik::first(),
            'isikominfotik' => Isikominfotik::all(),
        ];
        return view('profile.tugasdanfungsi.index', $data);
    }
    public function videoprofile($id)
    {
        $data = [
            'title' => 'Video Profile',
            'videoprofile' => VideoProfile::findOrFail($id),
        ];
        return view('profile.videoprofile.index', $data);
    }
    public function strukturorganisasi($id)
    {
        $data = [
            'title' => 'Struktur Organisasi',
            'strukturorganisasi' => Strukturorganisasi::findOrFail($id),
        ];
        return view('profile.strukturorganisasi.index', $data);
    }
    public function daftarnamapegawai()
    {
        $data = [
            'title' => 'Daftar Nama Pegawai',
            'pegawai' => Pegawai::all(),
            'tenagaahli' => TenagaAhli::all(),
        ];
        return view('profile.daftarnamapegawai.index', $data);
    }
}
