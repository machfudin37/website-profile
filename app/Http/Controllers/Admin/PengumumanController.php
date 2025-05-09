<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Pengumuman;
use Illuminate\Http\Request;

class PengumumanController extends Controller
{
    public function index()
    {
        $data = [
            'title' => 'Admin Pengumuman',
            'pengumuman' => Pengumuman::all(),
        ];
        return view('admin.pengumuman.index', $data);
    }
    public function displaypdf($id)
    {
        $data = [
            'title' => 'Display PDF Pengumuman',
            'pengumuman' => Pengumuman::findOrFail($id),
        ];
        return view('admin.pengumuman.display', $data);
    }
    public function tambahpengumuman()
    {
        $data = [
            'title' => 'Tambah Pengumuman',
        ];
        return view('admin.pengumuman.tambah', $data);
    }
    public function kirimpengumuman(Request $request)
    {
        try {
            $request->validate([
                'isi' => 'required|string',
                'pdf' => 'required|mimes:pdf|max:2048', // Tambahkan validasi untuk tipe file PDF dan maksimal ukuran 2048 KB
            ], [
                'isi.required' => 'Kolom Isi tidak boleh kosong.',
                'isi.string' => 'Kolom Isi harus berupa teks.',
                'pdf.required' => 'Kolom PDF tidak boleh kosong.',
                'pdf.mimes' => 'Format file PDF tidak valid.',
                'pdf.max' => 'Ukuran file PDF tidak boleh lebih dari 2048 KB.',
            ]);
            $pdf = null;
            if ($request->hasFile('pdf')) {
                $filepdf = $request->file('pdf');
                $filenamepdf = $filepdf->hashName(); // Menggunakan nama unik untuk file
                $filepdf->move(public_path('assets/pengumuman/pdf'), $filenamepdf); // Simpan file_dokumentasi ke dalam direktori public
                $pdf = $filenamepdf;
            }

            Pengumuman::create([
                'isi' => $request->isi,
                'pdf' => $pdf,
            ]);

            return redirect()->route('admin.pengumuman.index')->with('success', 'Pengumuman Berhasil ditambahkan.');
        } catch (\Exception $e) {
            return redirect()->route('admin.pengumuman.tambah')->with('error', 'Pengumuman Gagal ditambahkan : ' . $e->getMessage());
        }
    }
    public function hapuspengumuman($id)
    {
        try {
            $pengumuman = Pengumuman::findOrFail($id);
            $pengumuman->delete();

            return redirect()->back()->with('success', 'Pengumuman berhasil dihapus.');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Pengumuman gagal dihapus: ' . $e->getMessage());
        }
    }
    public function editpengumuman($id)
    {
        $data = [
            'title' => 'Edit Pengumuman',
            'pengumuman' => Pengumuman::findOrFail($id),
        ];
        return view('admin.pengumuman.edit', $data);
    }
    public function ubahpengumuman(Request $request, $id)
    {
        try {
            $pengumuman = Pengumuman::findOrFail($id);
            $request->validate([
                'isi' => 'required|string',
                'pdf' => 'nullable|mimes:pdf|max:2048', // Tambahkan validasi untuk tipe file PDF dan maksimal ukuran 2048 KB
            ], [
                'isi.required' => 'Kolom Isi tidak boleh kosong.',
                'isi.string' => 'Kolom Isi harus berupa teks.',
                'pdf.required' => 'Kolom PDF tidak boleh kosong.',
                'pdf.mimes' => 'Format file PDF tidak valid.',
                'pdf.max' => 'Ukuran file PDF tidak boleh lebih dari 2048 KB.',
            ]);
            $pengumuman->isi = $request->input('isi');
            if ($request->hasFile('pdf')) {
                $pdf = null;
                if ($pengumuman->pdf && file_exists(public_path('asset/pengumuman/pdf/' . $pengumuman->pdf))) {
                    unlink(public_path('assets/pengumuman/pdf/' . $pengumuman->pdf));
                }

                $file = $request->file('pdf');
                $fileName = $file->hashName(); // Menggunakan nama unik untuk file
                $file->move(public_path('assets/pengumuman/pdf'), $fileName); // Simpan file_dokumentasi ke dalam direktori public
                $pdf = $fileName;

                $pengumuman->pdf = $pdf;
            }
            $pengumuman->save();

            return redirect()->route('admin.pengumuman.index')->with('success', 'Pengumuman berhasil diubah.');
        } catch (\Exception $e) {
            return redirect()->route('admin.pengumuman.edit', ['id' => $id])->with('error', 'Pengumuman Gagal diubah : ' . $e->getMessage());
        }
    }
}
