<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\DaftarCCTV;
use App\Models\InformasiKepegawaian;
use App\Models\InformasiKeuangan;
use App\Models\InformasiOrganisasiKewartawanan;
use App\Models\InformasiWartawan;
use App\Models\sodtiti;
use Illuminate\Http\Request;

class InformasiController extends Controller
{
    public function indextatausaha()
    {
        $data = [
            'title' => 'Informasi Tata Usaha',
            'kepegawaian' => InformasiKepegawaian::oldest()->paginate(10, ['*'], 'kepegawaian')->WithQueryString(),
            'keuangan' => InformasiKeuangan::oldest()->paginate(10, ['*'], 'keuangan')->WithQueryString(),
        ];
        return view('admin.informasi.tatausaha.index', $data);
    }
    public function tambahkepegawaian()
    {
        $data = [
            'title' => 'Tambah Kepegawaian',
        ];
        return view('admin.informasi.tatausaha.kepegawaian.tambah', $data);
    }
    public function tambahkeuangan()
    {
        $data = [
            'title' => 'Tambah Keuangan',
        ];
        return view('admin.informasi.tatausaha.keuangan.tambah', $data);
    }
    public function kirimkepegawaian(Request $request)
    {
        try {
            $request->validate([
                'sub_menu' => 'required|string',
                'pdf' => 'required|mimes:pdf|max:2048', // Tambahkan validasi untuk tipe file PDF dan maksimal ukuran 2048 KB
            ], [
                'sub_menu.required' => 'Kolom Sub Menu tidak boleh kosong.',
                'sub_menu.string' => 'Kolom Golongan harus berupa teks.',
                'pdf.required' => 'Kolom PDF tidak boleh kosong.',
                'pdf.mimes' => 'Format file PDF tidak valid.',
                'pdf.max' => 'Ukuran file PDF tidak boleh lebih dari 2048 KB.',

            ]);
            $pdf = null;
            if ($request->hasFile('pdf')) {
                $filepdf = $request->file('pdf');
                $filenamepdf = $filepdf->hashName(); // Menggunakan nama unik untuk file
                $filepdf->move(public_path('assets/kepegawaian/pdf'), $filenamepdf); // Simpan file_dokumentasi ke dalam direktori public
                $pdf = $filenamepdf;
            }

            InformasiKepegawaian::create([
                'sub_menu' => $request->sub_menu,
                'pdf' => $pdf,
            ]);

            return redirect()->route('admin.informasi.tatausaha.index')->with('successk', 'Kepegawai Berhasil ditambahkan.');
        } catch (\Exception $e) {
            return redirect()->route('admin.tatausaha.kepegawaian.tambah')->with('errork', 'Kepegawai Gagal ditambahkan : ' . $e->getMessage());
        }
    }
    public function kirimkeuangan(Request $request)
    {
        try {
            $request->validate([
                'sub_menu' => 'required|string',
                'pdf' => 'required|mimes:pdf|max:2048', // Tambahkan validasi untuk tipe file PDF dan maksimal ukuran 2048 KB
            ], [
                'sub_menu.required' => 'Kolom Sub Menu tidak boleh kosong.',
                'sub_menu.string' => 'Kolom Golongan harus berupa teks.',
                'pdf.required' => 'Kolom PDF tidak boleh kosong.',
                'pdf.mimes' => 'Format file PDF tidak valid.',
                'pdf.max' => 'Ukuran file PDF tidak boleh lebih dari 2048 KB.',

            ]);
            $pdf = null;
            if ($request->hasFile('pdf')) {
                $filepdf = $request->file('pdf');
                $filenamepdf = $filepdf->hashName(); // Menggunakan nama unik untuk file
                $filepdf->move(public_path('assets/keuangan/pdf'), $filenamepdf); // Simpan file_dokumentasi ke dalam direktori public
                $pdf = $filenamepdf;
            }

            InformasiKeuangan::create([
                'sub_menu' => $request->sub_menu,
                'pdf' => $pdf,
            ]);

            return redirect()->route('admin.informasi.tatausaha.index')->with('success', 'Keuangan Berhasil ditambahkan.');
        } catch (\Exception $e) {
            return redirect()->route('admin.tatausaha.keuangan.tambah')->with('error', 'Keuangan Gagal ditambahkan : ' . $e->getMessage());
        }
    }
    public function hapuskepegawaian($id)
    {
        try {
            $kepegawaian = InformasiKepegawaian::findOrFail($id);
            $kepegawaian->delete();

            return redirect()->back()->with('successk', 'Kepegawaian berhasil dihapus.');
        } catch (\Exception $e) {
            return redirect()->back()->with('errork', 'Kepegawaian gagal dihapus: ' . $e->getMessage());
        }
    }
    public function hapuskeuangan($id)
    {
        try {
            $keuangan = InformasiKeuangan::findOrFail($id);
            $keuangan->delete();

            return redirect()->back()->with('success', 'Keuangan berhasil dihapus.');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Keuangan gagal dihapus: ' . $e->getMessage());
        }
    }
    public function editkepegawaian($id)
    {
        $data = [
            'title' => 'Edit Kepegawaian',
            'kepegawaian' => InformasiKepegawaian::findOrFail($id),
        ];
        return view('admin.informasi.tatausaha.kepegawaian.edit', $data);
    }
    public function editkeuangan($id)
    {
        $data = [
            'title' => 'Edit Keuangan',
            'keuangan' => InformasiKeuangan::findOrFail($id),
        ];
        return view('admin.informasi.tatausaha.keuangan.edit', $data);
    }
    public function ubahkepegawaian(Request $request, $id)
    {
        try {
            $kepegawaian = InformasiKepegawaian::findOrFail($id);
            $request->validate([
                'sub_menu' => 'required|string',
                'pdf' => 'nullable|mimes:pdf|max:2048', // Tambahkan validasi untuk tipe file PDF dan maksimal ukuran 2048 KB
            ], [
                'sub_menu.required' => 'Kolom Sub Menu tidak boleh kosong.',
                'sub_menu.string' => 'Kolom Sub Menu harus berupa teks.',
                'pdf.mimes' => 'Format file PDF tidak valid.',
                'pdf.max' => 'Ukuran file PDF tidak boleh lebih dari 2048 KB.',
            ]);
            $kepegawaian->sub_menu = $request->input('sub_menu');
            if ($request->hasFile('pdf')) {
                $pdf = null;
                if ($kepegawaian->pdf && file_exists(public_path('asset/kepegawaian/pdf/' . $kepegawaian->pdf))) {
                    unlink(public_path('assets/kepegawaian/pdf/' . $kepegawaian->pdf));
                }

                $file = $request->file('pdf');
                $fileName = $file->hashName(); // Menggunakan nama unik untuk file
                $file->move(public_path('assets/kepegawaian/pdf'), $fileName); // Simpan file_dokumentasi ke dalam direktori public
                $pdf = $fileName;

                $kepegawaian->pdf = $pdf;
            }
            $kepegawaian->save();

            return redirect()->route('admin.informasi.tatausaha.index')->with('successk', 'Kepegawaian berhasil diubah.');
        } catch (\Exception $e) {
            return redirect()->route('admin.tatausaha.kepegawaian.edit', ['id' => $id])->with('errork', 'Kepegawaian Gagal diubah : ' . $e->getMessage());
        }
    }
    public function ubahkeuangan(Request $request, $id)
    {
        try {
            $keuangan = InformasiKeuangan::findOrFail($id);
            $request->validate([
                'sub_menu' => 'required|string',
                'pdf' => 'nullable|mimes:pdf|max:2048', // Tambahkan validasi untuk tipe file PDF dan maksimal ukuran 2048 KB
            ], [
                'sub_menu.required' => 'Kolom Sub Menu tidak boleh kosong.',
                'sub_menu.string' => 'Kolom Sub Menu harus berupa teks.',
                'pdf.mimes' => 'Format file PDF tidak valid.',
                'pdf.max' => 'Ukuran file PDF tidak boleh lebih dari 2048 KB.',
            ]);
            $keuangan->sub_menu = $request->input('sub_menu');
            if ($request->hasFile('pdf')) {
                $pdf = null;
                if ($keuangan->pdf && file_exists(public_path('asset/keuangan/pdf/' . $keuangan->pdf))) {
                    unlink(public_path('assets/keuangan/pdf/' . $keuangan->pdf));
                }

                $file = $request->file('pdf');
                $fileName = $file->hashName(); // Menggunakan nama unik untuk file
                $file->move(public_path('assets/keuangan/pdf'), $fileName); // Simpan file_dokumentasi ke dalam direktori public
                $pdf = $fileName;

                $keuangan->pdf = $pdf;
            }
            $keuangan->save();

            return redirect()->route('admin.informasi.tatausaha.index')->with('success', 'Keuangan berhasil diubah.');
        } catch (\Exception $e) {
            return redirect()->route('admin.tatausaha.keuangan.edit', ['id' => $id])->with('error', 'Keuangan Gagal diubah : ' . $e->getMessage());
        }
    }
    public function indexkip()
    {
        $data = [
            'title' => 'Informasi Komunikasi dan Informasi Publik',
            'wartawan' => InformasiWartawan::latest()->paginate(10)->WithQueryString(),
        ];
        return view('admin.informasi.komunikasidaninformasipublik.index', $data);
    }
    public function tambahwartawan()
    {
        $data = [
            'title' => 'Tambah Wartawan',
        ];
        return view('admin.informasi.komunikasidaninformasipublik.tambah', $data);
    }
    public function kirimwartawan(Request $request)
    {
        try {
            $request->validate([
                'nama' => 'required|string',
                'media' => 'required|string',
            ], [
                'nama.required' => 'Kolom Nama tidak boleh kosong.',
                'nama.string' => 'Kolom Nama harus berupa teks.',
                'media.required' => 'Kolom Media tidak boleh kosong.',
                'media.string' => 'Kolom Media harus berupa teks.',
            ]);

            InformasiWartawan::create([
                'nama' => $request->nama,
                'jenis_media' => $request->jenis_media,
                'media' => $request->media,
            ]);

            return redirect()->route('admin.informasi.kip.index')->with('success', 'Wartawan Berhasil ditambahkan.');
        } catch (\Exception $e) {
            return redirect()->route('admin.kip.wartawan.tambah')->with('error', 'Wartawan Gagal ditambahkan : ' . $e->getMessage());
        }
    }
    public function hapuswartawan($id)
    {
        try {
            $wartawan = InformasiWartawan::findOrFail($id);
            $wartawan->delete();

            return redirect()->back()->with('success', 'Wartawan berhasil dihapus.');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Wartawan gagal dihapus: ' . $e->getMessage());
        }
    }
    public function editwartawan($id)
    {
        $data = [
            'title' => 'Edit Wartawan',
            'wartawan' => InformasiWartawan::findOrFail($id),
        ];
        return view('admin.informasi.komunikasidaninformasipublik.edit', $data);
    }
    public function ubahwartawan(Request $request, $id)
    {
        try {
            $wartawan = InformasiWartawan::findOrFail($id);
            $request->validate([
                'nama' => 'required|string',
                'media' => 'required|string',
            ], [
                'nama.required' => 'Kolom Nama tidak boleh kosong.',
                'nama.string' => 'Kolom Nama harus berupa teks.',
                'media.required' => 'Kolom Media tidak boleh kosong.',
                'media.string' => 'Kolom Media harus berupa teks.',
            ]);
            $wartawan->nama = $request->input('nama');
            $wartawan->jenis_media = $request->input('jenis_media');
            $wartawan->media = $request->input('media');
            $wartawan->save();

            return redirect()->route('admin.informasi.kip.index')->with('success', 'Wartawan berhasil diubah.');
        } catch (\Exception $e) {
            return redirect()->route('admin.kip.wartawan.edit', ['id' => $id])->with('error', 'Wartawan Gagal diubah : ' . $e->getMessage());
        }
    }
    public function indexorganisasiwartawan($id)
    {
        $data = [
            'title' => 'Organisasi Kewartawanan',
            'body' => InformasiOrganisasiKewartawanan::findOrFail($id),
        ];
        return view('admin.informasi.komunikasidaninformasipublik.organisasikewartawanan', $data);
    }
    public function ubah(Request $request, $id)
    {
        try {

            $body = InformasiOrganisasiKewartawanan::findOrFail($id);
            $body->update([
                'body' => $request->body,
            ]);

            return redirect()->route('admin.organisasi.edit', ['id' => 1])->with('success', 'Content Organisasi Kewartawanan berhasil diubah.');
        } catch (\Exception $e) {
            return redirect()->route('admin.organisasi.edit', ['id' => 1])->with('error', 'Content Organisasi Kewartawanan Gagal diubah :' . $e->getMessage());
        }
    }
    public function lihatorganisasikewartawanan($id)
    {
        $data = [
            'title' => 'Organisasi Kewartawanan',
            'body' => InformasiOrganisasiKewartawanan::findOrFail($id),
        ];
        return view('admin.informasi.komunikasidaninformasipublik.organisasikewartawanan.index', $data);
    }
    public function lihatdatawartawan()
    {
        $data = [
            'title' => 'Data Wartawan Jakarta Timur',
            'tv' => InformasiWartawan::where('jenis_media', 'TV')->get(),
            'website' => InformasiWartawan::where('jenis_media', 'Website')->get(),
            'mediacetak' => InformasiWartawan::where('jenis_media', 'Media Cetak')->get(),
            'radio' => InformasiWartawan::where('jenis_media', 'Radio')->get(),
        ];
        return view('admin.informasi.komunikasidaninformasipublik.wartawan.index', $data);
    }
    public function displaykeuangan($id)
    {
        $data = [
            'title' => 'Display PDF Keuangan',
            'keuangan' => InformasiKeuangan::findOrFail($id),
        ];
        return view('admin.informasi.tatausaha.keuangan.display', $data);
    }
    public function displaykepegawaian($id)
    {
        $data = [
            'title' => 'Display PDF Kepegawaian',
            'kepegawaian' => InformasiKepegawaian::findOrFail($id),
        ];
        return view('admin.informasi.tatausaha.kepegawaian.display', $data);
    }
    public function indexjkd()
    {
        $data = [
            'title' => 'Informasi Jaringan Komunikasi Data',
            'wartawan' => InformasiWartawan::latest()->paginate(5)->WithQueryString(),
        ];
        return view('admin.informasi.jaringankomunikasidata.index', $data);
    }
    public function indexjkdsodtiti($id)
    {
        $data = [
            'title' => 'Admin Standar Operasional Dukungan Teknis Infrastruktur Teknologi Informasi',
            'sodtiti' => sodtiti::findOrFail($id),
        ];
        return view('admin.informasi.jaringankomunikasidata.sodtiti', $data);
    }
    public function indexjkddaftarcctv($id)
    {
        $data = [
            'title' => 'Admin Daftar CCTV',
            'cctv' => DaftarCCTV::findOrFail($id),
        ];
        return view('admin.informasi.jaringankomunikasidata.daftarcctv', $data);
    }
    public function ubahdaftarcctv(Request $request, $id)
    {
        try {

            $cctv = DaftarCCTV::findOrFail($id);
            $cctv->update([
                'judul' => $request->judul,
                'body' => $request->body,
            ]);

            return redirect()->route('admin.informasi.jkd.daftarcctv', ['id' => 1])->with('success', 'Daftar CCTV berhasil diubah.');
        } catch (\Exception $e) {
            return redirect()->route('admin.informasi.jkd.daftarcctv', ['id' => 1])->with('error', 'Daftar CCTV Gagal diubah :' . $e->getMessage());
        }
    }
    public function ubahsodtiti(Request $request, $id)
    {
        try {
            $sodtiti = sodtiti::findOrFail($id);
            $request->validate([
                'judul' => 'required|string',
                'gambar' => 'nullable|image|mimes:jpeg,png,jpg|max:2048', // Tambahkan validasi untuk tipe file gambar dan maksimal ukuran 2048 KB
            ], [
                'judul.required' => 'Kolom Judul tidak boleh kosong.',
                'judul.string' => 'Kolom Judul hanya boleh berisi text.',
                'gambar.image' => 'File harus berupa gambar (jpeg, png, jpg).',
                'gambar.mimes' => 'Format file gambar tidak valid.',
                'gambar.max' => 'Ukuran file gambar tidak boleh lebih dari 2048 KB.',
            ]);
            $sodtiti->judul = $request->input('judul');
            if ($request->hasFile('gambar')) {
                $gambar = null;
                if ($sodtiti->gambar && file_exists(public_path('asset/sodtiti/gambar/' . $sodtiti->gambar))) {
                    unlink(public_path('assets/sodtiti/gambar/' . $sodtiti->gambar));
                }

                $file = $request->file('gambar');
                $fileName = $file->getClientOriginalName(); // Menggunakan nama unik untuk file
                $file->move(public_path('assets/sodtiti/gambar'), $fileName); // Simpan gambar ke dalam direktori public
                $gambar = $fileName;

                $sodtiti->gambar = $gambar;
            }
            $sodtiti->save();

            return redirect()->route('admin.informasi.jkd.sodtiti', ['id' => 1])->with('success', 'Data berhasil diubah.');
        } catch (\Exception $e) {
            return redirect()->route('admin.informasi.jkd.sodtiti', ['id' => 1])->with('error', 'Gagal mengubah Data: ' . $e->getMessage());
        }
    }
    public function displaysodtiti($id)
    {
        $data = [
            'title' => 'Standar Operasional Dukungan Teknis Infrastruktur Teknologi Informasi',
            'sodtiti' => sodtiti::findOrFail($id),
        ];
        return view('admin.informasi.jaringankomunikasidata.displaysodtiti', $data);
    }
    public function displaydaftarcctv($id)
    {
        $data = [
            'title' => 'Daftar CCTV',
            'cctv' => DaftarCCTV::findOrFail($id),
        ];
        return view('admin.informasi.jaringankomunikasidata.displaydaftarcctv', $data);
    }
}
