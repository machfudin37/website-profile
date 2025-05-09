<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Isikominfotik;
use App\Models\Tugasdanfungsikominfotik;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function tugasdanfungsi($id)
    {
        $data = [
            'title' => 'Admin Tugas dan Fungsi',
            'kominfotik' => Tugasdanfungsikominfotik::findOrFail($id),
        ];
        return view('admin.profile.tugasdanfungsi.index', $data);
    }
    public function ubahtugasdanfungsi(Request $request, $id)
    {
        try {
            $request->validate([
                'judul' => 'required|regex:/^[a-zA-Z\s.,()]+$/',
                'sub_judul' => 'required|regex:/^[a-zA-Z\s.,<>()]+$/',
                'judul_isi' => 'required|regex:/^[a-zA-Z\s.,:()]+$/',
            ], [
                'judul.required' => 'Kolom Judul tidak boleh kosong.',
                'judul.regex' => 'Kolom Judul hanya boleh berisi huruf, spasi, titik, koma, dan tutup kurung.',
                'sub_judul.required' => 'Kolom Sub Judul tidak boleh kosong.',
                'sub_judul.regex' => 'Kolom Sub Judul hanya boleh berisi huruf, spasi, titik, koma, dan tutup kurung.',
                'judul_isi.required' => 'Kolom Judul Isi tidak boleh kosong.',
                'judul_isi.regex' => 'Kolom Judul Isi hanya boleh berisi huruf, spasi, titik, koma, dan tutup kurung.',
            ]);

            $kominfotik = Tugasdanfungsikominfotik::findOrFail($id);
            $kominfotik->update([
                'judul' => $request->judul,
                'sub_judul' => $request->sub_judul,
                'judul_isi' => $request->judul_isi,
            ]);

            return redirect()->route('admin.tugasdanfungsikominfotik.index', ['id' => 1])->with('success', 'Tugas dan Fungsi berhasil diubah.');
        } catch (\Exception $e) {
            return redirect()->route('admin.tugasdanfungsikominfotik.index', ['id' => 1])->with('error', 'Gagal mengubah Tugas dan Fungsi: ' . $e->getMessage());
        }
    }
    public function isitugasdanfungsi()
    {
        $data = [
            'title' => 'Admin Isi Tugas dan Fungsi Kominfotik',
            'isikominfotik' => Isikominfotik::latest()->paginate(10)->WithQueryString(),
        ];
        return view('admin.profile.tugasdanfungsi.isi.index', $data);
    }
    public function tambahtugasdanfungsi()
    {
        $data = [
            'title' => 'Tambah Isi Tugas dan Fungsi',
        ];
        return view('admin.profile.tugasdanfungsi.isi.tambah', $data);
    }
    public function kirimtugasdanfungsi(Request $request)
    {
        $request->validate([
            'isi' => 'required|string',
        ], [
            'isi.required' => 'Kolom Isi tidak boleh kosong.',
            'isi.string' => 'Kolom Isi hanya boleh berisi teks.',
        ]);

        try {
            Isikominfotik::create([
                'isi' => $request->isi,
            ]);

            return redirect()->route('admin.tugasdanfungsikominfotik.isi.index')->with('success', 'Isi Tugas dan Fungsi berhasil ditambahkan.');
        } catch (\Exception $e) {
            return redirect()->route('admin.tugasdanfungsikominfotik.tambah')->with('error', 'Isi Tugas dan Fungsi gagal ditambahkan : ' . $e->getMessage());
        }
    }
    public function hapustugasdanfungsi($id)
    {
        try {
            $isikominfotik = Isikominfotik::findOrFail($id);
            $isikominfotik->delete();

            return redirect()->back()->with('success', 'Isi Tugas dan Fungsi berhasil dihapus.');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Isi Tugas dan Fungsi gagal dihapus: ' . $e->getMessage());
        }
    }
    public function edittugasdanfungsi($id)
    {
        $data = [
            'title' => 'Edit Isi Tugas dan Fungsi',
            'isikominfotik' => Isikominfotik::findOrFail($id),
        ];
        return view('admin.profile.tugasdanfungsi.isi.edit', $data);
    }

    public function ubahisitugasdanfungsi(Request $request, $id)
    {
        try {
            $request->validate([
                'isi' => 'required|string',
            ], [
                'isi.required' => 'Kolom Isi tidak boleh kosong.',
                'isi.string' => 'Kolom Isi hanya boleh berisi teks.',
            ]);

            $isikominfotik = Isikominfotik::findOrFail($id);
            $isikominfotik->update([
                'isi' => $request->isi,
            ]);

            return redirect()->route('admin.tugasdanfungsikominfotik.isi.index')->with('success', 'Isi Tugas dan Fungsi berhasil diubah.');
        } catch (\Exception $e) {
            return redirect()->route('admin.tugasdanfungsikominfotik.edit', ['id' => $id])->with('error', 'Gagal mengubah Isi Tugas dan Fungsi: ' . $e->getMessage());
        }
    }
}
