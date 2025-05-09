<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\BeritaKegiatanFoto;
use App\Models\BeritaKegiatanVideo;
use App\Models\GaleriPegawai;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class GaleriController extends Controller
{
    public function foto()
    {
        $data = [
            'title' => 'Admin Berita Kegiatan Foto',
            'foto' => BeritaKegiatanFoto::latest()->paginate(5)->WithQueryString(),
        ];
        return view('admin.galeri.foto.index', $data);
    }
    public function tambahfoto()
    {
        $data = [
            'title' => 'Tambah Berita Kegiatan Foto',
        ];
        return view('admin.galeri.foto.tambah', $data);
    }
    public function kirimfoto(Request $request)
    {
        try {
            $request->validate([
                'judul' => 'required|string',
                'keterangan' => 'required|string',
                'bagian' => 'required', Rule::in(['Tata Usaha', 'Komunikasi dan Informasi Publik', 'Jaringan Komunikasi Data', 'Sistem Informasi, Siber dan Sandi']),
                'gambar' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048', // Tambahkan validasi untuk tipe file gambar dan maksimal ukuran 2048 KB
            ], [
                'judul.required' => 'Kolom judul tidak boleh kosong.',
                'judul.string' => 'Kolom judul harus berupa teks',
                'keterangan.required' => 'Kolom keterangan tidak boleh kosong.',
                'keterangan.string' => 'Kolom keterangan harus berupa teks.',
                'keterangan.required' => 'Kolom bagian tidak bisa memilih pilih.',
                'gambar.required' => 'Kolom gambar tidak boleh kosong.',
                'gambar.image' => 'File harus berupa gambar (jpeg, png, jpg, gif).',
                'gambar.mimes' => 'Format file gambar tidak valid.',
                'gambar.max' => 'Ukuran file gambar tidak boleh lebih dari 2048 KB.',
            ]);
            $gambar = null;
            if ($request->hasFile('gambar')) {
                $filegambar = $request->file('gambar');
                $filenamegambar = $filegambar->hashName(); // Menggunakan nama unik untuk file
                $filegambar->move(public_path('assets/beritakegiatanfoto/gambar'), $filenamegambar); // Simpan file_dokumentasi ke dalam direktori public
                $gambar = $filenamegambar;
            }

            BeritaKegiatanFoto::create([
                'judul' => $request->judul,
                'keterangan' => $request->keterangan,
                'bagian' => $request->bagian,
                'gambar' => $gambar,
            ]);

            return redirect()->route('admin.foto.index')->with('success', 'Berita Kegiatan Foto Berhasil ditambahkan.');
        } catch (\Exception $e) {
            return redirect()->route('admin.foto.tambah')->with('error', 'Berita Kegiatan Foto Gagal ditambahkan : ' . $e->getMessage());
        }
    }
    public function hapusfoto($id)
    {
        try {
            $foto = BeritaKegiatanFoto::findOrFail($id);
            $foto->delete();

            return redirect()->back()->with('success', 'Berita Kegiatan Foto berhasil dihapus.');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Berita Kegiatan Foto gagal dihapus: ' . $e->getMessage());
        }
    }
    public function editfoto($id)
    {
        $data = [
            'title' => 'Edit Berita Kegiatan Foto',
            'foto' => BeritaKegiatanFoto::findOrFail($id),
        ];
        return view('admin.galeri.foto.edit', $data);
    }
    public function ubahfoto(Request $request, $id)
    {
        try {
            $foto = BeritaKegiatanFoto::findOrFail($id);
            $request->validate([
                'judul' => 'required|string',
                'keterangan' => 'required|string',
                'gambar' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048', // Tambahkan validasi untuk tipe file gambar dan maksimal ukuran 2048 KB
                'bagian' => Rule::in(['Tata Usaha', 'Komunikasi dan Informasi Publik', 'Jaringan Komunikasi Data', 'Sistem Informasi, Siber dan Sandi']),
            ], [
                'judul.required' => 'Kolom judul tidak boleh kosong.',
                'judul.string' => 'Kolom judul harus berupa text.',
                'keterangan.required' => 'Kolom keterangan tidak boleh kosong.',
                'keterangan.string' => 'Kolom keterangan harus berupa teks.',
                'gambar.image' => 'File harus berupa gambar (jpeg, png, jpg, gif).',
                'gambar.mimes' => 'Format file gambar tidak valid.',
                'gambar.max' => 'Ukuran file gambar tidak boleh lebih dari 2048 KB.',
            ]);
            $foto->judul = $request->input('judul');
            $foto->keterangan = $request->input('keterangan');
            $foto->bagian = $request->input('bagian');
            if ($request->hasFile('gambar')) {
                $gambar = null;
                if ($foto->gambar && file_exists(public_path('asset/beritakegiatanfoto/gambar/' . $foto->gambar))) {
                    unlink(public_path('assets/beritakegiatanfoto/gambar/' . $foto->gambar));
                }

                $file = $request->file('gambar');
                $fileName = $file->hashName(); // Menggunakan nama unik untuk file
                $file->move(public_path('assets/beritakegiatanfoto/gambar'), $fileName); // Simpan gambar ke dalam direktori public
                $gambar = $fileName;

                $foto->gambar = $gambar;
            }
            $foto->save();

            return redirect()->route('admin.foto.index')->with('success', 'Berita Kegiatan Foto berhasil diubah.');
        } catch (\Exception $e) {
            return redirect()->route('admin.foto.edit', ['id' => $id])->with('error', 'Berita Kegiatan Foto Gagal diubah : ' . $e->getMessage());
        }
    }
    public function lihatfoto($id)
    {
        $data = [
            'title' => 'Berita Kegiatan Foto',
            'foto' => BeritaKegiatanFoto::find($id),
        ];

        return view('admin.galeri.foto.lihat', $data);
    }
    public function video()
    {
        $data = [
            'title' => 'Admin Berita Kegiatan Video',
            'video' => BeritaKegiatanVideo::latest()->paginate(5)->WithQueryString(),
        ];
        return view('admin.galeri.video.index', $data);
    }
    public function tambahvideo()
    {
        $data = [
            'title' => 'Tambah Berita Kegiatan Video',
        ];
        return view('admin.galeri.video.tambah', $data);
    }
    public function kirimvideo(Request $request)
    {
        try {
            $request->validate([
                'judul' => 'required|string',
                'keterangan' => 'required|string',
                'video' => 'required|string|regex:/^<iframe.*<\/iframe>$/', // Tambahkan validasi untuk tipe file gambar dan maksimal ukuran 2048 KB
                'bagian' => 'required', Rule::in(['Tata Usaha', 'Komunikasi dan Informasi Publik', 'Jaringan Komunikasi Data', 'Sistem Informasi, Siber dan Sandi']),
            ], [
                'judul.required' => 'Kolom judul tidak boleh kosong.',
                'judul.string' => 'Kolom judul harus berupa teks.',
                'keterangan.required' => 'Kolom keterangan tidak boleh kosong.',
                'keterangan.string' => 'Kolom keterangan harus berupa teks.',
                'video.required' => 'Kolom video tidak boleh kosong.',
                'video.string' => 'Kolom video harus berupa Embed Youtube.',
                'video.regex' => 'Kolom video harus berupa Embed Youtube.',
            ]);

            BeritaKegiatanVideo::create([
                'judul' => $request->judul,
                'keterangan' => $request->keterangan,
                'bagian' => $request->bagian,
                'video' => $request->video,
            ]);

            return redirect()->route('admin.video.index')->with('success', 'Berita Kegiatan Video Berhasil ditambahkan.');
        } catch (\Exception $e) {
            return redirect()->route('admin.video.tambah')->with('error', 'Berita Kegiatan Video Gagal ditambahkan : ' . $e->getMessage());
        }
    }
    public function hapusvideo($id)
    {
        try {
            $video = BeritaKegiatanVideo::findOrFail($id);
            $video->delete();

            return redirect()->back()->with('success', 'Berita Kegiatan Video berhasil dihapus.');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Berita Kegiatan Video gagal dihapus: ' . $e->getMessage());
        }
    }
    public function editvideo($id)
    {
        $data = [
            'title' => 'Edit Berita Kegiatan Video',
            'video' => BeritaKegiatanVideo::findOrFail($id),
        ];
        return view('admin.galeri.video.edit', $data);
    }
    public function ubahvideo(Request $request, $id)
    {
        try {
            $video = BeritaKegiatanVideo::findOrFail($id);
            $request->validate([
                'judul' => 'required|string',
                'keterangan' => 'required|string',
                'video' => 'required|string|regex:/^<iframe.*<\/iframe>$/', // Tambahkan validasi untuk tipe file gambar dan maksimal ukuran 2048 KB
                'bagian' => Rule::in(['Tata Usaha', 'Komunikasi dan Informasi Publik', 'Jaringan Komunikasi Data', 'Sistem Informasi, Siber dan Sandi']),
            ], [
                'judul.required' => 'Kolom judul tidak boleh kosong.',
                'judul.string' => 'Kolom judul harus berupa text.',
                'keterangan.required' => 'Kolom keterangan tidak boleh kosong.',
                'keterangan.string' => 'Kolom keterangan harus berupa teks.',
                'video.required' => 'Kolom video tidak boleh kosong.',
                'video.string' => 'Kolom video harus berupa Embed Youtube.',
                'video.regex' => 'Kolom video harus berupa Embed Youtube.',
            ]);
            $video->judul = $request->input('judul');
            $video->keterangan = $request->input('keterangan');
            $video->video = $request->input('video');
            $video->bagian = $request->input('bagian');
            $video->save();

            return redirect()->route('admin.video.index')->with('success', 'Berita Kegiatan Video berhasil diubah.');
        } catch (\Exception $e) {
            return redirect()->route('admin.video.edit', ['id' => $id])->with('error', 'Berita Kegiatan Video Gagal diubah : ' . $e->getMessage());
        }
    }
    public function lihatvideo($id)
    {
        $data = [
            'title' => 'Lihat Berita Kegiatan Video',
            'video' => BeritaKegiatanVideo::find($id),
        ];

        return view('admin.galeri.video.lihat', $data);
    }
    public function indexgaleri()
    {
        $data = [
            'title' => 'Admin Galeri',
            'galeri' => GaleriPegawai::latest()->paginate(5)->WithQueryString(),
        ];
        return view('admin.galeri.pegawai.index', $data);
    }
    public function tambahgaleri()
    {
        $data = [
            'title' => 'Tambah Data Galeri',
        ];
        return view('admin.galeri.pegawai.tambah', $data);
    }
    public function kirimgaleri(Request $request)
    {
        try {
            $request->validate([
                'nama' => 'required|string',
                'bagian' => 'required', Rule::in(['Tata Usaha', 'Komunikasi dan Informasi Publik', 'Jaringan Komunikasi Data', 'Sistem Informasi, Siber dan Sandi']),
                'status' => 'required', Rule::in(['Pegawai', 'Tenaga Ahli']),
                'foto' => 'required|image|mimes:jpeg,png,jpg|max:10240', // Tambahkan validasi untuk tipe file gambar dan maksimal ukuran 2048 KB
            ], [
                'nama.required' => 'Kolom nama tidak boleh kosong.',
                'nama.string' => 'Kolom nama harus berupa teks',
                'foto.required' => 'Kolom foto tidak boleh kosong.',
                'foto.image' => 'File harus berupa foto (jpeg, png, jpg).',
                'foto.mimes' => 'Format file foto tidak valid.',
                'foto.max' => 'Ukuran file foto tidak boleh lebih dari 10240 KB.',
            ]);
            $foto = null;
            if ($request->hasFile('foto')) {
                $filefoto = $request->file('foto');
                $filenamefoto = $filefoto->hashName(); // Menggunakan nama unik untuk file
                $filefoto->move(public_path('assets/pegawai/foto'), $filenamefoto); // Simpan file_dokumentasi ke dalam direktori public
                $foto = $filenamefoto;
            }

            GaleriPegawai::create([
                'nama' => $request->nama,
                'bagian' => $request->bagian,
                'status' => $request->status,
                'foto' => $foto,
            ]);
            return redirect()->route('admin.galeri.index')->with('success', 'Data Galeri Berhasil ditambahkan.');
        } catch (\Exception $e) {
            return redirect()->route('admin.galeri.tambah')->with('error', 'Data Galeri Gagal ditambahkan : ' . $e->getMessage());
        }
    }
    public function hapusgaleri($id)
    {
        try {
            $galeri = GaleriPegawai::findOrFail($id);
            $galeri->delete();

            return redirect()->back()->with('success', 'Data Galeri berhasil dihapus.');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Data Galeri gagal dihapus: ' . $e->getMessage());
        }
    }
    public function editgaleri($id)
    {
        $data = [
            'title' => 'Edit Galeri',
            'galeri' => GaleriPegawai::findOrFail($id),
        ];
        return view('admin.galeri.pegawai.edit', $data);
    }
    public function ubahgaleri(Request $request, $id)
    {
        try {
            $galeri = GaleriPegawai::findOrFail($id);
            $request->validate([
                'nama' => 'required|string',
                'bagian' => 'required', Rule::in(['Tata Usaha', 'Komunikasi dan Informasi Publik', 'Jaringan Komunikasi Data', 'Sistem Informasi, Siber dan Sandi']),
                'status' => 'required', Rule::in(['Pegawai', 'Tenaga Ahli']),
                'foto' => 'image|mimes:jpeg,png,jpg,gif|max:10240', // Tambahkan validasi untuk tipe file gambar dan maksimal ukuran 2048 KB
            ], [
                'nama.required' => 'Kolom nama tidak boleh kosong.',
                'nama.string' => 'Kolom nama harus berupa teks',
                'foto.image' => 'File harus berupa foto (jpeg, png, jpg, gif).',
                'foto.mimes' => 'Format file foto tidak valid.',
                'foto.max' => 'Ukuran file foto tidak boleh lebih dari 10240 KB.',
            ]);
            $galeri->nama = $request->input('nama');
            $galeri->bagian = $request->input('bagian');
            $galeri->status = $request->input('status');
            if ($request->hasFile('foto')) {
                $foto = null;
                if ($galeri->foto && file_exists(public_path('asset/pegawai/foto/' . $galeri->foto))) {
                    unlink(public_path('assets/pegawai/foto/' . $galeri->foto));
                }

                $file = $request->file('foto');
                $fileName = $file->hashName(); // Menggunakan nama unik untuk file
                $file->move(public_path('assets/pegawai/foto'), $fileName); // Simpan foto ke dalam direktori public
                $foto = $fileName;

                $galeri->foto = $foto;
            }
            $galeri->save();

            return redirect()->route('admin.galeri.index')->with('success', 'Data Galeri berhasil diubah.');
        } catch (\Exception $e) {
            return redirect()->route('admin.galeri.edit', ['id' => $id])->with('error', 'Data Galeri Gagal diubah : ' . $e->getMessage());
        }
    }
    public function lihatgaleri($id)
    {
        $data = [
            'title' => 'Lihat Galeri',
            'galeri' => GaleriPegawai::find($id),
        ];

        return view('admin.galeri.pegawai.lihat', $data);
    }
    public function galeritu()
    {
        $data = [
            'title' => 'Galeri Tata Usaha',
            'pegawaitu' => GaleriPegawai::where('bagian', 'Tata Usaha')->where('status', 'Pegawai')->latest()->get(),
            'tenagaahlitu' => GaleriPegawai::where('bagian', 'Tata Usaha')->where('status', 'Tenaga Ahli')->latest()->get(),
        ];

        return view('galeri.pegawai.tu.index', $data);
    }
    public function galerikip()
    {
        $data = [
            'title' => 'Galeri Komunikasi dan Informasi Publik',
            'pegawaikip' => GaleriPegawai::where('bagian', 'Komunikasi dan Informasi Publik')->where('status', 'Pegawai')->latest()->get(),
            'tenagaahlikip' => GaleriPegawai::where('bagian', 'Komunikasi dan Informasi Publik')->where('status', 'Tenaga Ahli')->latest()->get(),
        ];

        return view('galeri.pegawai.kip.index', $data);
    }
    public function galerijkd()
    {
        $data = [
            'title' => 'Galeri Jaringan Komunikasi Data',
            'pegawaijkd' => GaleriPegawai::where('bagian', 'Jaringan Komunikasi Data')->where('status', 'Pegawai')->latest()->get(),
            'tenagaahlijkd' => GaleriPegawai::where('bagian', 'Jaringan Komunikasi Data')->where('status', 'Tenaga Ahli')->latest()->get(),
        ];

        return view('galeri.pegawai.jkd.index', $data);
    }
    public function galerisiss()
    {
        $data = [
            'title' => 'Galeri Sistem Informasi, Siber dan Sandi',
            'pegawaisiss' => GaleriPegawai::where('bagian', 'Sistem Informasi, Siber dan Sandi')->where('status', 'Pegawai')->latest()->get(),
            'tenagaahlisiss' => GaleriPegawai::where('bagian', 'Sistem Informasi, Siber dan Sandi')->where('status', 'Tenaga Ahli')->latest()->get(),
        ];

        return view('galeri.pegawai.siss.index', $data);
    }
}
