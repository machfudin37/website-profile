<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Strukturorganisasi;
use Illuminate\Http\Request;

class StrukturorganisasiController extends Controller
{
    public function index($id)
    {
        $data = [
            'title' => 'Admin Struktur Organisasi',
            'strukturorganisasi' => Strukturorganisasi::findOrFail($id),
        ];
        return view('admin.profile.strukturorganisasi.index', $data);
    }
    public function ubahgambar(Request $request, $id)
    {
        try {
            $strukturorganisasi = Strukturorganisasi::findOrFail($id);

            $request->validate([
                'gambar' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            ], [
                'gambar.required' => 'Gambar wajib diunggah.',
                'gambar.image' => 'File harus berupa gambar.',
                'gambar.mimes' => 'Format gambar tidak valid. Pilih format jpeg, png, jpg, atau gif.',
                'gambar.max' => 'Ukuran gambar tidak boleh lebih dari 2048 KB.',
            ]);

            if ($request->hasFile('gambar')) {
                $file = $request->file('gambar');
                $originalFileName = $file->getClientOriginalName(); // Mendapatkan nama asli file
                $file->move(public_path('assets/strukturorganisasi'), $originalFileName); // Simpan file ke dalam direktori public
                $gambar = $originalFileName;

                // Hapus file lama jika ada
                if ($strukturorganisasi->gambar && file_exists(public_path('assets/strukturorganisasi/' . $strukturorganisasi->gambar))) {
                    unlink(public_path('assets/strukturorganisasi/' . $strukturorganisasi->gambar));
                }

                $strukturorganisasi->gambar = $gambar;
                $strukturorganisasi->save();

                return redirect()->route('admin.strukturorganisasi.index', ['id' => 1])->with('success', 'Struktur Organisasi Berhasil diubah.');
            }
        } catch (\Exception $e) {
            return redirect()->route('admin.strukturorganisasi.index', ['id' => 1])->with('error', 'Struktur Organisasi Gagal diubah : ' . $e->getMessage());
        }
    }
}
