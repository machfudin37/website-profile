<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Beranda;
use App\Models\Pengumuman;
use App\Models\Tupoksi;
use Illuminate\Http\Request;

class BerandaController extends Controller
{
    public function index($id)
    {
        $data = [
            'title' => 'Admin Beranda',
            'beranda' => Beranda::findOrFail($id),
            'pengumuman' => Pengumuman::all(),
        ];
        return view('admin.beranda.index', $data);
    }
    public function ubah(Request $request, $id)
    {
        // Validasi data input
        $request->validate([
            'nama' => 'required|regex:/^[a-zA-Z]/|max:255',
            'subject' => 'required|regex:/^[a-zA-Z, ]+$/|max:255',
            'tempat' => 'required|string',
            'tahun' => 'required|numeric',
        ], [
            'nama.required' => 'Nama tidak boleh kosong.',
            'nama.regex' => 'Nama hanya boleh berisi huruf dan tidak ada spasi.',
            'nama.max' => 'Panjang nama tidak boleh lebih dari 255 karakter.',
            'subject.required' => 'Subject tidak boleh kosong.',
            'subject.regex' => 'Subject boleh berisi huruf, spasi dan koma.',
            'subject.max' => 'Panjang subject tidak boleh lebih dari 255 karakter.',
            'tempat.required' => 'Tempat tidak boleh kosong.',
            'tempat.string' => 'Tempat harus berupa teks.',
            'tahun.required' => 'Tahun tidak boleh kosong.',
            'tahun.numeric' => 'Tahun harus berupa angka.',
        ]);

        try {
            // Update record di tabel 'beranda'
            $beranda = Beranda::findOrFail($id);
            $beranda->nama = $request->input('nama');
            $beranda->subject = $request->input('subject');
            $beranda->tempat = $request->input('tempat');
            $beranda->tahun = $request->input('tahun');
            $beranda->save();
            return redirect()->route('admin.beranda.index', ['id' => 1])->with('success', 'Data berhasil diubah.');
        } catch (\Exception $e) {
            return redirect()->route('admin.beranda.index', ['id' => 1])->with('error', 'Data Gagal diubah :' . $e->getMessage());
        }
    }
    public function ubahkontak(Request $request, $id)
    {
        // Validasi data input
        $request->validate([
            'alamat' => 'required|string|max:255',
            'telpon' => 'required|string|max:255',
            'email' => 'required|email',
        ], [
            'alamat.required' => 'Alamat tidak boleh kosong.',
            'alamat.string' => 'Alamat hanya boleh berisi teks.',
            'alamat.max' => 'Panjang Alamat tidak boleh lebih dari 255 karakter.',
            'telpon.required' => 'Telpon tidak boleh kosong.',
            'telpon.regex' => 'Telpon boleh berisi teks',
            'telpon.max' => 'Panjang Telpon tidak boleh lebih dari 255 karakter.',
            'email.required' => 'Email tidak boleh kosong.',
            'email.email' => 'Email harus dalam bentuk email.',
        ]);

        try {
            // Update record di tabel 'beranda'
            $beranda = Beranda::findOrFail($id);
            $beranda->alamat = $request->input('alamat');
            $beranda->telpon = $request->input('telpon');
            $beranda->email = $request->input('email');
            $beranda->save();
            return redirect()->route('admin.beranda.index', ['id' => 1])->with('successkontak', 'Data berhasil diubah.');
        } catch (\Exception $e) {
            return redirect()->route('admin.beranda.index', ['id' => 1])->with('errorkontak', 'Data Gagal diubah :' . $e->getMessage());
        }
    }
    public function ubahlogo(Request $request, $id)
    {
        try {
            $beranda = Beranda::findOrFail($id);

            $request->validate([
                'logo' => 'required|image|mimes:jpeg,png,jpg|max:2048',
            ], [
                'logo.required' => 'Logo wajib diunggah.',
                'logo.image' => 'File harus berupa gambar.',
                'logo.mimes' => 'Format gambar tidak valid. Pilih format jpeg, png, jpg.',
                'logo.max' => 'Ukuran gambar tidak boleh lebih dari 2048 KB.',
            ]);

            if ($request->hasFile('logo')) {
                $file = $request->file('logo');
                $originalFileName = $file->getClientOriginalName(); // Mendapatkan nama asli file
                $file->move(public_path('assets/logo'), $originalFileName); // Simpan file ke dalam direktori public
                $logo = $originalFileName;

                // Hapus file lama jika ada
                if ($beranda->logo && file_exists(public_path('assets/logo/' . $beranda->logo))) {
                    unlink(public_path('assets/logo/' . $beranda->logo));
                }

                $beranda->logo = $logo;
                $beranda->save();

                return redirect()->route('admin.beranda.index', ['id' => 1])->with('successlogo', 'Logo Berhasil diubah.');
            }
        } catch (\Exception $e) {
            return redirect()->route('admin.beranda.index', ['id' => 1])->with('errorlogo', 'Logo Gagal diubah : ' . $e->getMessage());
        }
    }
    public function ubahrunningtext(Request $request, $id)
    {
        try {
            $beranda = Beranda::findOrFail($id);
            $beranda->runningtext = $request->input('runningtext');
            $beranda->save();

            return redirect()->route('admin.beranda.index', ['id' => 1])->with('successrunningtext', 'Running Text Berhasil diubah.');
        } catch (\Exception $e) {
            return redirect()->route('admin.beranda.index', ['id' => 1])->with('errorrunningtext', 'Running Text Gagal diubah : ' . $e->getMessage());
        }
    }
    public function ubahtupoksi(Request $request, $id)
    {
        try {
            $beranda = Beranda::findOrFail($id);
            $request->validate([
                'tupoksi' => 'nullable|mimes:pdf|max:2048', // Tambahkan validasi untuk tipe file PDF dan maksimal ukuran 2048 KB
            ], [
                'tupoksi.mimes' => 'Format file PDF tidak valid.',
                'tupoksi.max' => 'Ukuran file PDF tidak boleh lebih dari 2048 KB.',
            ]);
            if ($request->hasFile('tupoksi')) {
                $tupoksi = null;
                if ($beranda->tupoksi && file_exists(public_path('asset/tupoksi/pdf/' . $beranda->tupoksi))) {
                    unlink(public_path('assets/tupoksi/pdf/' . $beranda->tupoksi));
                }

                $file = $request->file('tupoksi');
                $fileName = $file->getClientOriginalName(); // Menggunakan nama unik untuk file
                $file->move(public_path('assets/tupoksi/pdf'), $fileName); // Simpan file_dokumentasi ke dalam direktori public
                $tupoksi = $fileName;

                $beranda->tupoksi = $tupoksi;
            }
            $beranda->save();

            return redirect()->route('admin.beranda.index', ['id' => 1])->with('successtupoksi', 'Tupoksi berhasil diubah.');
        } catch (\Exception $e) {
            return redirect()->route('admin.beranda.index', ['id' => 1])->with('errortupoksi', 'Tupoksi Gagal diubah : ' . $e->getMessage());
        }
    }
    public function displaytupoksi($id)
    {
        $data = [
            'title' => 'Display PDF Tupoksi',
            'beranda' => Beranda::findOrFail($id),
        ];
        return view('admin.tupoksi.display', $data);
    }
    public function ubahbackground(Request $request, $id)
    {
        try {
            $beranda = Beranda::findOrFail($id);

            $request->validate([
                'background' => 'required|image|mimes:jpeg,png,jpg|max:2048',
            ], [
                'background.required' => 'Background wajib diunggah.',
                'background.image' => 'File harus berupa gambar.',
                'background.mimes' => 'Format gambar tidak valid. Pilih format jpeg, png, jpg.',
                'background.max' => 'Ukuran gambar tidak boleh lebih dari 2048 KB.',
            ]);

            if ($request->hasFile('background')) {
                $file = $request->file('background');
                $originalFileName = $file->getClientOriginalName(); // Mendapatkan nama asli file
                $file->move(public_path('assets/background'), $originalFileName); // Simpan file ke dalam direktori public
                $background = $originalFileName;

                // Hapus file lama jika ada
                if ($beranda->background && file_exists(public_path('assets/background/' . $beranda->background))) {
                    unlink(public_path('assets/background/' . $beranda->background));
                }

                $beranda->background = $background;
                $beranda->save();

                return redirect()->route('admin.beranda.index', ['id' => 1])->with('successbg', 'Background Berhasil diubah.');
            }
        } catch (\Exception $e) {
            return redirect()->route('admin.beranda.index', ['id' => 1])->with('errorbg', 'Background Gagal diubah : ' . $e->getMessage());
        }
    }
}
