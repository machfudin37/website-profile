<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\IsiJaringanKomunikasiData;
use App\Models\IsiKomunikasidanInformasiPublik;
use App\Models\IsiSistemInformasiSiberdanSandi;
use App\Models\IsiTataUsaha;
use App\Models\JaringanKomunikasiData;
use App\Models\KomunikasidanInformasiPublik;
use App\Models\SistemInformasiSiberdanSandi;
use App\Models\TataUsaha;
use Illuminate\Http\Request;

class BagianController extends Controller
{
    public function tugasdanfungsitatausaha($id)
    {
        $data = [
            'title' => 'Admin Tugas dan Fungsi Tata Usaha',
            'tatausaha' => TataUsaha::findOrFail($id),
        ];
        return view('admin.bagian.tatausaha.index', $data);
    }
    public function ubahtugasdanfungsitatausaha(Request $request, $id)
    {
        try {
            $tatausaha = TataUsaha::findOrFail($id);
            $request->validate([
                'nama_bagian' => 'required|string',
                'judul' => 'required|string',
                'sub_judul' => 'required|string',
                'judul_isi' => 'required|string',
                'foto' => 'nullable|image|mimes:jpeg,png,jpg|max:2048', // Tambahkan validasi untuk tipe file gambar dan maksimal ukuran 2048 KB
            ], [
                'nama_bagian.required' => 'Kolom Nama Bagian tidak boleh kosong.',
                'nama_bagian.string' => 'Kolom Nama Bagian hanya boleh berisi teks',
                'judul.required' => 'Kolom Judul tidak boleh kosong.',
                'judul.string' => 'Kolom Judul hanya boleh berisi teks',
                'sub_judul.required' => 'Kolom Sub Judul tidak boleh kosong.',
                'sub_judul.string' => 'Kolom Sub Judul hanya boleh berisi teks',
                'judul_isi.required' => 'Kolom Judul Isi tidak boleh kosong.',
                'judul_isi.string' => 'Kolom Judul Isi hanya boleh berisi teks',
                'foto.image' => 'File harus berupa foto (jpeg, png, jpg).',
                'foto.mimes' => 'Format file foto tidak valid.',
                'foto.max' => 'Ukuran file foto tidak boleh lebih dari 2048 KB.',
            ]);
            $tatausaha->nama_bagian = $request->input('nama_bagian');
            $tatausaha->judul = $request->input('judul');
            $tatausaha->sub_judul = $request->input('sub_judul');
            $tatausaha->judul_isi = $request->input('judul_isi');
            if ($request->hasFile('foto')) {
                $foto = null;
                if ($tatausaha->foto && file_exists(public_path('asset/tatausaha/foto/' . $tatausaha->foto))) {
                    unlink(public_path('assets/tatausaha/foto/' . $tatausaha->foto));
                }

                $file = $request->file('foto');
                $fileName = $file->getClientOriginalName(); // Menggunakan nama unik untuk file
                $file->move(public_path('assets/tatausaha/foto'), $fileName); // Simpan foto ke dalam direktori public
                $foto = $fileName;

                $tatausaha->foto = $foto;
            }
            $tatausaha->save();

            return redirect()->route('admin.tatausaha.index', ['id' => 1])->with('success', 'Tugas dan Fungsi berhasil diubah.');
        } catch (\Exception $e) {
            return redirect()->route('admin.tatausaha.index', ['id' => 1])->with('error', 'Gagal mengubah Tugas dan Fungsi: ' . $e->getMessage());
        }
    }
    public function isitugasdanfungsitatausaha()
    {
        $data = [
            'title' => 'Admin Isi Tugas dan Fungsi Tata Usaha',
            'isitatausaha' => IsiTataUsaha::latest()->paginate(10)->WithQueryString(),
        ];
        return view('admin.bagian.tatausaha.isi.index', $data);
    }
    public function tambahtugasdanfungsitatausaha()
    {
        $data = [
            'title' => 'Tambah Isi Tugas dan Fungsi Tata Usaha',
        ];
        return view('admin.bagian.tatausaha.isi.tambah', $data);
    }
    public function kirimtugasdanfungsitatausaha(Request $request)
    {
        $request->validate([
            'isi' => 'required|string',
        ], [
            'isi.required' => 'Kolom Isi tidak boleh kosong.',
            'isi.string' => 'Kolom Isi hanya boleh berisi teks',
        ]);

        try {
            IsiTataUsaha::create([
                'isi' => $request->isi,
            ]);

            return redirect()->route('admin.tatausaha.isi.index')->with('success', 'Isi Tugas dan Fungsi berhasil ditambahkan.');
        } catch (\Exception $e) {
            return redirect()->route('admin.tatausaha.tambah')->with('error', 'Isi Tugas dan Fungsi gagal ditambahkan : ' . $e->getMessage());
        }
    }
    public function hapustugasdanfungsitatausaha($id)
    {
        try {
            $isitatausaha = IsiTataUsaha::findOrFail($id);
            $isitatausaha->delete();

            return redirect()->back()->with('success', 'Isi Tugas dan Fungsi berhasil dihapus.');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Isi Tugas dan Fungsi gagal dihapus: ' . $e->getMessage());
        }
    }
    public function edittugasdanfungsitatausaha($id)
    {
        $data = [
            'title' => 'Edit Isi Tugas dan Fungsi Tata Usaha',
            'isitatausaha' => IsiTataUsaha::findOrFail($id),
        ];
        return view('admin.bagian.tatausaha.isi.edit', $data);
    }

    public function ubahisitugasdanfungsitatausaha(Request $request, $id)
    {
        try {
            $request->validate([
                'isi' => 'required|string',
            ], [
                'isi.required' => 'Kolom Isi tidak boleh kosong.',
                'isi.string' => 'Kolom Isi hanya boleh berisi teks',
            ]);

            $isitatausaha = IsiTataUsaha::findOrFail($id);
            $isitatausaha->update([
                'isi' => $request->isi,
            ]);

            return redirect()->route('admin.tatausaha.isi.index')->with('success', 'Isi Tugas dan Fungsi berhasil diubah.');
        } catch (\Exception $e) {
            return redirect()->route('admin.tatausaha.edit', ['id' => $id])->with('error', 'Gagal mengubah Isi Tugas dan Fungsi: ' . $e->getMessage());
        }
    }
    public function tugasdanfungsikip($id)
    {
        $data = [
            'title' => 'Admin Tugas dan Fungsi Komunikasi dan Informasi Publik',
            'kip' => KomunikasidanInformasiPublik::findOrFail($id),
        ];
        return view('admin.bagian.komunikasidaninformasipublik.index', $data);
    }
    public function ubahtugasdanfungsikip(Request $request, $id)
    {
        try {
            $kip = KomunikasidanInformasiPublik::findOrFail($id);
            $request->validate([
                'nama_bagian' => 'required|string',
                'judul' => 'required|string',
                'sub_judul' => 'required|string',
                'judul_isi' => 'required|string',
                'foto' => 'nullable|image|mimes:jpeg,png,jpg|max:2048', // Tambahkan validasi untuk tipe file gambar dan maksimal ukuran 2048 KB
            ], [
                'nama_bagian.required' => 'Kolom Nama Bagian tidak boleh kosong.',
                'nama_bagian.string' => 'Kolom Nama Bagian hanya boleh berisi teks',
                'judul.required' => 'Kolom Judul tidak boleh kosong.',
                'judul.string' => 'Kolom Judul hanya boleh berisi teks',
                'sub_judul.required' => 'Kolom Sub Judul tidak boleh kosong.',
                'sub_judul.string' => 'Kolom Sub Judul hanya boleh berisi teks',
                'judul_isi.required' => 'Kolom Judul Isi tidak boleh kosong.',
                'judul_isi.string' => 'Kolom Judul Isi hanya boleh berisi teks',
                'foto.image' => 'File harus berupa foto (jpeg, png, jpg).',
                'foto.mimes' => 'Format file foto tidak valid.',
                'foto.max' => 'Ukuran file foto tidak boleh lebih dari 2048 KB.',
            ]);
            $kip->nama_bagian = $request->input('nama_bagian');
            $kip->judul = $request->input('judul');
            $kip->sub_judul = $request->input('sub_judul');
            $kip->judul_isi = $request->input('judul_isi');
            if ($request->hasFile('foto')) {
                $foto = null;
                if ($kip->foto && file_exists(public_path('asset/komunikasidaninformasipublik/foto/' . $kip->foto))) {
                    unlink(public_path('assets/komunikasidaninformasipublik/foto/' . $kip->foto));
                }

                $file = $request->file('foto');
                $fileName = $file->getClientOriginalName(); // Menggunakan nama unik untuk file
                $file->move(public_path('assets/komunikasidaninformasipublik/foto'), $fileName); // Simpan foto ke dalam direktori public
                $foto = $fileName;

                $kip->foto = $foto;
            }
            $kip->save();

            return redirect()->route('admin.kip.index', ['id' => 1])->with('success', 'Tugas dan Fungsi berhasil diubah.');
        } catch (\Exception $e) {
            return redirect()->route('admin.kip.index', ['id' => 1])->with('error', 'Gagal mengubah Tugas dan Fungsi: ' . $e->getMessage());
        }
    }
    public function isitugasdanfungsikip()
    {
        $data = [
            'title' => 'Admin Isi Tugas dan Fungsi Komunikasi dan Informasi Publik',
            'isikip' => IsiKomunikasidanInformasiPublik::latest()->paginate(10)->WithQueryString(),
        ];
        return view('admin.bagian.komunikasidaninformasipublik.isi.index', $data);
    }
    public function tambahtugasdanfungsikip()
    {
        $data = [
            'title' => 'Tambah Isi Tugas dan Fungsi Komunikasi dan Informasi Publik',
        ];
        return view('admin.bagian.komunikasidaninformasipublik.isi.tambah', $data);
    }
    public function kirimtugasdanfungsikip(Request $request)
    {
        $request->validate([
            'isi' => 'required|string',
        ], [
            'isi.required' => 'Kolom Isi tidak boleh kosong.',
            'isi.string' => 'Kolom Isi hanya boleh berisi teks',
        ]);

        try {
            IsiKomunikasidanInformasiPublik::create([
                'isi' => $request->isi,
            ]);

            return redirect()->route('admin.kip.isi.index')->with('success', 'Isi Tugas dan Fungsi berhasil ditambahkan.');
        } catch (\Exception $e) {
            return redirect()->route('admin.kip.tambah')->with('error', 'Isi Tugas dan Fungsi gagal ditambahkan : ' . $e->getMessage());
        }
    }
    public function hapustugasdanfungsikip($id)
    {
        try {
            $isikip = IsiKomunikasidanInformasiPublik::findOrFail($id);
            $isikip->delete();

            return redirect()->back()->with('success', 'Isi Tugas dan Fungsi berhasil dihapus.');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Isi Tugas dan Fungsi gagal dihapus: ' . $e->getMessage());
        }
    }
    public function edittugasdanfungsikip($id)
    {
        $data = [
            'title' => 'Edit Isi Tugas dan Fungsi Komunikasi dan Informasi Publik',
            'isikip' => IsiKomunikasidanInformasiPublik::findOrFail($id),
        ];
        return view('admin.bagian.komunikasidaninformasipublik.isi.edit', $data);
    }

    public function ubahisitugasdanfungsikip(Request $request, $id)
    {
        try {
            $request->validate([
                'isi' => 'required|string',
            ], [
                'isi.required' => 'Kolom Isi tidak boleh kosong.',
                'isi.string' => 'Kolom Isi hanya boleh berisi teks',
            ]);

            $isikip = IsiKomunikasidanInformasiPublik::findOrFail($id);
            $isikip->update([
                'isi' => $request->isi,
            ]);

            return redirect()->route('admin.kip.isi.index')->with('success', 'Isi Tugas dan Fungsi berhasil diubah.');
        } catch (\Exception $e) {
            return redirect()->route('admin.kip.edit', ['id' => $id])->with('error', 'Gagal mengubah Isi Tugas dan Fungsi: ' . $e->getMessage());
        }
    }
    public function tugasdanfungsijkd($id)
    {
        $data = [
            'title' => 'Admin Tugas dan Fungsi Jaringan Komunikasi Data',
            'jkd' => JaringanKomunikasiData::findOrFail($id),
        ];
        return view('admin.bagian.jaringankomunikasidata.index', $data);
    }
    public function ubahtugasdanfungsijkd(Request $request, $id)
    {
        try {
            $jkd = JaringanKomunikasiData::findOrFail($id);
            $request->validate([
                'nama_bagian' => 'required|string',
                'judul' => 'required|string',
                'sub_judul' => 'required|string',
                'judul_isi' => 'required|string',
                'foto' => 'nullable|image|mimes:jpeg,png,jpg|max:2048', // Tambahkan validasi untuk tipe file gambar dan maksimal ukuran 2048 KB
            ], [
                'nama_bagian.required' => 'Kolom Nama Bagian tidak boleh kosong.',
                'nama_bagian.string' => 'Kolom Nama Bagian hanya boleh berisi teks',
                'judul.required' => 'Kolom Judul tidak boleh kosong.',
                'judul.string' => 'Kolom Judul hanya boleh berisi teks',
                'sub_judul.required' => 'Kolom Sub Judul tidak boleh kosong.',
                'sub_judul.string' => 'Kolom Sub Judul hanya boleh berisi teks',
                'judul_isi.required' => 'Kolom Judul Isi tidak boleh kosong.',
                'judul_isi.string' => 'Kolom Judul Isi hanya boleh berisi teks',
                'foto.image' => 'File harus berupa foto (jpeg, png, jpg).',
                'foto.mimes' => 'Format file foto tidak valid.',
                'foto.max' => 'Ukuran file foto tidak boleh lebih dari 2048 KB.',
            ]);
            $jkd->nama_bagian = $request->input('nama_bagian');
            $jkd->judul = $request->input('judul');
            $jkd->sub_judul = $request->input('sub_judul');
            $jkd->judul_isi = $request->input('judul_isi');
            if ($request->hasFile('foto')) {
                $foto = null;
                if ($jkd->foto && file_exists(public_path('asset/jaringankomunikasidata/foto/' . $jkd->foto))) {
                    unlink(public_path('assets/jaringankomunikasidata/foto/' . $jkd->foto));
                }

                $file = $request->file('foto');
                $fileName = $file->getClientOriginalName(); // Menggunakan nama unik untuk file
                $file->move(public_path('assets/jaringankomunikasidata/foto'), $fileName); // Simpan foto ke dalam direktori public
                $foto = $fileName;

                $jkd->foto = $foto;
            }
            $jkd->save();

            return redirect()->route('admin.jkd.index', ['id' => 1])->with('success', 'Tugas dan Fungsi berhasil diubah.');
        } catch (\Exception $e) {
            return redirect()->route('admin.jkd.index', ['id' => 1])->with('error', 'Gagal mengubah Tugas dan Fungsi: ' . $e->getMessage());
        }
    }
    public function isitugasdanfungsijkd()
    {
        $data = [
            'title' => 'Admin Isi Tugas dan Fungsi Jaringan Komunikasi Data',
            'isijkd' => IsiJaringanKomunikasiData::latest()->paginate(10)->WithQueryString(),
        ];
        return view('admin.bagian.jaringankomunikasidata.isi.index', $data);
    }
    public function tambahtugasdanfungsijkd()
    {
        $data = [
            'title' => 'Tambah Isi Tugas dan Fungsi Jaringan Komunikasi Data',
        ];
        return view('admin.bagian.jaringankomunikasidata.isi.tambah', $data);
    }
    public function kirimtugasdanfungsijkd(Request $request)
    {
        $request->validate([
            'isi' => 'required|string',
        ], [
            'isi.required' => 'Kolom Isi tidak boleh kosong.',
            'isi.string' => 'Kolom Isi hanya boleh berisi teks',
        ]);

        try {
            IsiJaringanKomunikasiData::create([
                'isi' => $request->isi,
            ]);

            return redirect()->route('admin.jkd.isi.index')->with('success', 'Isi Tugas dan Fungsi berhasil ditambahkan.');
        } catch (\Exception $e) {
            return redirect()->route('admin.jkd.tambah')->with('error', 'Isi Tugas dan Fungsi gagal ditambahkan : ' . $e->getMessage());
        }
    }
    public function hapustugasdanfungsijkd($id)
    {
        try {
            $isijkd = IsiJaringanKomunikasiData::findOrFail($id);
            $isijkd->delete();

            return redirect()->back()->with('success', 'Isi Tugas dan Fungsi berhasil dihapus.');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Isi Tugas dan Fungsi gagal dihapus: ' . $e->getMessage());
        }
    }
    public function edittugasdanfungsijkd($id)
    {
        $data = [
            'title' => 'Edit Isi Tugas dan Fungsi Tata Usaha',
            'isijkd' => IsiJaringanKomunikasiData::findOrFail($id),
        ];
        return view('admin.bagian.jaringankomunikasidata.isi.edit', $data);
    }

    public function ubahisitugasdanfungsijkd(Request $request, $id)
    {
        try {
            $request->validate([
                'isi' => 'required|string',
            ], [
                'isi.required' => 'Kolom Isi tidak boleh kosong.',
                'isi.string' => 'Kolom Isi hanya boleh berisi teks',
            ]);

            $isijkd = IsiJaringanKomunikasiData::findOrFail($id);
            $isijkd->update([
                'isi' => $request->isi,
            ]);

            return redirect()->route('admin.jkd.isi.index')->with('success', 'Isi Tugas dan Fungsi berhasil diubah.');
        } catch (\Exception $e) {
            return redirect()->route('admin.jkd.edit', ['id' => $id])->with('error', 'Gagal mengubah Isi Tugas dan Fungsi: ' . $e->getMessage());
        }
    }
    public function tugasdanfungsisiss($id)
    {
        $data = [
            'title' => 'Admin Tugas dan Fungsi Sistem Informasi Siber dan Sandi',
            'siss' => SistemInformasiSiberdanSandi::findOrFail($id),
        ];
        return view('admin.bagian.sisteminformasisiberdansandi.index', $data);
    }
    public function ubahtugasdanfungsisiss(Request $request, $id)
    {
        try {
            $siss = SistemInformasiSiberdanSandi::findOrFail($id);
            $request->validate([
                'nama_bagian' => 'required|string',
                'judul' => 'required|string',
                'sub_judul' => 'required|string',
                'judul_isi' => 'required|string',
                'foto' => 'nullable|image|mimes:jpeg,png,jpg|max:2048', // Tambahkan validasi untuk tipe file gambar dan maksimal ukuran 2048 KB
            ], [
                'nama_bagian.required' => 'Kolom Nama Bagian tidak boleh kosong.',
                'nama_bagian.string' => 'Kolom Nama Bagian hanya boleh berisi teks',
                'judul.required' => 'Kolom Judul tidak boleh kosong.',
                'judul.string' => 'Kolom Judul hanya boleh berisi teks',
                'sub_judul.required' => 'Kolom Sub Judul tidak boleh kosong.',
                'sub_judul.string' => 'Kolom Sub Judul hanya boleh berisi teks',
                'judul_isi.required' => 'Kolom Judul Isi tidak boleh kosong.',
                'judul_isi.string' => 'Kolom Judul Isi hanya boleh berisi teks',
                'foto.image' => 'File harus berupa foto (jpeg, png, jpg).',
                'foto.mimes' => 'Format file foto tidak valid.',
                'foto.max' => 'Ukuran file foto tidak boleh lebih dari 2048 KB.',
            ]);
            $siss->nama_bagian = $request->input('nama_bagian');
            $siss->judul = $request->input('judul');
            $siss->sub_judul = $request->input('sub_judul');
            $siss->judul_isi = $request->input('judul_isi');
            if ($request->hasFile('foto')) {
                $foto = null;
                if ($siss->foto && file_exists(public_path('asset/sisteminformasisiberdansandi/foto/' . $siss->foto))) {
                    unlink(public_path('assets/sisteminformasisiberdansandi/foto/' . $siss->foto));
                }

                $file = $request->file('foto');
                $fileName = $file->getClientOriginalName(); // Menggunakan nama unik untuk file
                $file->move(public_path('assets/sisteminformasisiberdansandi/foto'), $fileName); // Simpan foto ke dalam direktori public
                $foto = $fileName;

                $siss->foto = $foto;
            }
            $siss->save();

            return redirect()->route('admin.siss.index', ['id' => 1])->with('success', 'Tugas dan Fungsi berhasil diubah.');
        } catch (\Exception $e) {
            return redirect()->route('admin.siss.index', ['id' => 1])->with('error', 'Gagal mengubah Tugas dan Fungsi: ' . $e->getMessage());
        }
    }
    public function isitugasdanfungsisiss()
    {
        $data = [
            'title' => 'Admin Isi Tugas dan Fungsi Sistem Informasi Siber dan Sandi',
            'isisiss' => IsiSistemInformasiSiberdanSandi::latest()->paginate(10)->WithQueryString(),
        ];
        return view('admin.bagian.sisteminformasisiberdansandi.isi.index', $data);
    }
    public function tambahtugasdanfungsisiss()
    {
        $data = [
            'title' => 'Tambah Isi Tugas dan Fungsi Sistem Informasi Siber dan Sandi',
        ];
        return view('admin.bagian.sisteminformasisiberdansandi.isi.tambah', $data);
    }
    public function kirimtugasdanfungsisiss(Request $request)
    {
        $request->validate([
            'isi' => 'required|string',
        ], [
            'isi.required' => 'Kolom Isi tidak boleh kosong.',
            'isi.string' => 'Kolom Isi hanya boleh berisi teks.',
        ]);

        try {
            IsiSistemInformasiSiberdanSandi::create([
                'isi' => $request->isi,
            ]);

            return redirect()->route('admin.siss.isi.index')->with('success', 'Isi Tugas dan Fungsi berhasil ditambahkan.');
        } catch (\Exception $e) {
            return redirect()->route('admin.siss.tambah')->with('error', 'Isi Tugas dan Fungsi gagal ditambahkan : ' . $e->getMessage());
        }
    }
    public function hapustugasdanfungsisiss($id)
    {
        try {
            $isisiss = IsiSistemInformasiSiberdanSandi::findOrFail($id);
            $isisiss->delete();

            return redirect()->back()->with('success', 'Isi Tugas dan Fungsi berhasil dihapus.');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Isi Tugas dan Fungsi gagal dihapus: ' . $e->getMessage());
        }
    }
    public function edittugasdanfungsisiss($id)
    {
        $data = [
            'title' => 'Edit Isi Tugas dan Fungsi Sistem Informasi Siber dan Sandi',
            'isisiss' => IsiSistemInformasiSiberdanSandi::findOrFail($id),
        ];
        return view('admin.bagian.sisteminformasisiberdansandi.isi.edit', $data);
    }

    public function ubahisitugasdanfungsisiss(Request $request, $id)
    {
        try {
            $request->validate([
                'isi' => 'required|string',
            ], [
                'isi.required' => 'Kolom Isi tidak boleh kosong.',
                'isi.string' => 'Kolom Isi hanya boleh berisi teks',
            ]);

            $isisiss = IsiSistemInformasiSiberdanSandi::findOrFail($id);
            $isisiss->update([
                'isi' => $request->isi,
            ]);

            return redirect()->route('admin.siss.isi.index')->with('success', 'Isi Tugas dan Fungsi berhasil diubah.');
        } catch (\Exception $e) {
            return redirect()->route('admin.siss.edit', ['id' => $id])->with('error', 'Gagal mengubah Isi Tugas dan Fungsi: ' . $e->getMessage());
        }
    }
}
