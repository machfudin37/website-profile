<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\DaftarNamaPegawai;
use App\Models\Pegawai;
use App\Models\TenagaAhli;
use Illuminate\Http\Request;

class DaftarNamaPegawaiController extends Controller
{
    public function index()
    {
        $data = [
            'title' => 'Admin Daftar Nama Pegawai',
            'pegawai' => Pegawai::oldest()->paginate(10, ['*'], 'pegawai')->WithQueryString(),
            'tenagaahli' => TenagaAhli::oldest()->paginate(10, ['*'], 'tenagaahli')->WithQueryString(),
        ];
        return view('admin.profile.daftarnamapegawai.index', $data);
    }
    public function tambahpegawai()
    {
        $data = [
            'title' => 'Tambah Pegawai',
        ];
        return view('admin.profile.daftarnamapegawai.pegawai.tambah', $data);
    }
    public function tambahtenagaahli()
    {
        $data = [
            'title' => 'Tambah Tenaga Ahli',
        ];
        return view('admin.profile.daftarnamapegawai.tenagaahli.tambah', $data);
    }
    public function kirimpegawai(Request $request)
    {
        try {
            $request->validate([
                'nama' => 'required|regex:/^[a-zA-Z,. ]+$/',
                'nip' => 'required|numeric',
                'golongan' => 'required|string',
                'jabatan' => 'required|string',
            ], [
                'nama.required' => 'Kolom Nama tidak boleh kosong.',
                'nama.regex' => 'Kolom Nama harus berupa huruf, spasi, titik dan koma.',
                'nip.required' => 'Kolom Nip tidak boleh kosong.',
                'nip.numeric' => 'Kolom Nip harus berupa angka.',
                'golongan.required' => 'Kolom Golongan tidak boleh kosong.',
                'golongan.string' => 'Kolom Golongan harus berupa teks.',
                'jabatan.required' => 'Kolom Jabatan tidak boleh kosong.',
                'jabatan.string' => 'Kolom Jabatan harus berupa teks.',
            ]);
            Pegawai::create([
                'nama' => $request->nama,
                'nip' => $request->nip,
                'golongan' => $request->golongan,
                'jabatan' => $request->jabatan,
            ]);

            return redirect()->route('admin.daftarnamapegawai.index')->with('success', 'Pegawai Berhasil ditambahkan.');
        } catch (\Exception $e) {
            return redirect()->route('admin.pegawai.tambah')->with('error', 'Pegawai Gagal ditambahkan : ' . $e->getMessage());
        }
    }
    public function kirimtenagaahli(Request $request)
    {
        try {
            $request->validate([
                'nama' => 'required|regex:/^[a-zA-Z,. ]+$/',
                'seksi' => 'required|string',
                'bidang' => 'required|string',
            ], [
                'nama.required' => 'Kolom Nama tidak boleh kosong.',
                'nama.regex' => 'Kolom Nama harus berupa huruf, spasi, titik dan koma.',
                'seksi.required' => 'Kolom seksi tidak boleh kosong.',
                'seksi.string' => 'Kolom seksi harus berupa teks.',
                'bidang.required' => 'Kolom bidang tidak boleh kosong.',
                'bidang.string' => 'Kolom bidang harus berupa teks.',
            ]);

            TenagaAhli::create([
                'nama' => $request->nama,
                'seksi' => $request->seksi,
                'bidang' => $request->bidang,
            ]);

            return redirect()->route('admin.daftarnamapegawai.index')->with('successta', 'Tenaga Ahli Berhasil ditambahkan.');
        } catch (\Exception $e) {
            return redirect()->route('admin.tenagaahli.tambah')->with('errorta', 'Tenaga Ahli Gagal ditambahkan : ' . $e->getMessage());
        }
    }
    public function hapuspegawai($id)
    {
        try {
            $pegawai = Pegawai::findOrFail($id);
            $pegawai->delete();

            return redirect()->back()->with('success', 'Pegawai berhasil dihapus.');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Pegawai gagal dihapus: ' . $e->getMessage());
        }
    }
    public function hapustenagaahli($id)
    {
        try {
            $tenagaahli = TenagaAhli::findOrFail($id);
            $tenagaahli->delete();

            return redirect()->back()->with('successta', 'Tenaga Ahli berhasil dihapus.');
        } catch (\Exception $e) {
            return redirect()->back()->with('errorta', 'Tenaga Ahli gagal dihapus: ' . $e->getMessage());
        }
    }
    public function editpegawai($id)
    {
        $data = [
            'title' => 'Edit Pegawai',
            'pegawai' => Pegawai::findOrFail($id),
        ];
        return view('admin.profile.daftarnamapegawai.pegawai.edit', $data);
    }
    public function edittenagaahli($id)
    {
        $data = [
            'title' => 'Edit Tenaga Ahli',
            'tenagaahli' => TenagaAhli::findOrFail($id),
        ];
        return view('admin.profile.daftarnamapegawai.tenagaahli.edit', $data);
    }
    public function ubahpegawai(Request $request, $id)
    {
        try {
            $pegawai = Pegawai::findOrFail($id);
            $request->validate([
                'nama' => 'required|regex:/^[a-zA-Z,. ]+$/',
                'nip' => 'required|numeric',
                'golongan' => 'required|string',
                'jabatan' => 'required|string',
            ], [
                'nama.required' => 'Kolom Nama tidak boleh kosong.',
                'nama.regex' => 'Kolom Nama harus berupa huruf, spasi, titik dan koma.',
                'nip.required' => 'Kolom Nip tidak boleh kosong.',
                'nip.numeric' => 'Kolom Nip harus berupa angka.',
                'golongan.required' => 'Kolom Golongan tidak boleh kosong.',
                'golongan.string' => 'Kolom Golongan harus berupa teks.',
                'jabatan.required' => 'Kolom Jabatan tidak boleh kosong.',
                'jabatan.string' => 'Kolom Jabatan harus berupa teks.',
            ]);
            $pegawai->nama = $request->input('nama');
            $pegawai->nip = $request->input('nip');
            $pegawai->golongan = $request->input('golongan');
            $pegawai->jabatan = $request->input('jabatan');
            $pegawai->save();

            return redirect()->route('admin.daftarnamapegawai.index')->with('success', 'Pegawai berhasil diubah.');
        } catch (\Exception $e) {
            return redirect()->route('admin.pegawai.edit', ['id' => $id])->with('error', 'Pegawai Gagal diubah : ' . $e->getMessage());
        }
    }
    public function ubahtenagaahli(Request $request, $id)
    {
        try {
            $tenagaahli = TenagaAhli::findOrFail($id);
            $request->validate([
                'nama' => 'required|regex:/^[a-zA-Z,. ]+$/',
                'seksi' => 'required|string',
                'bidang' => 'required|string',
            ], [
                'nama.required' => 'Kolom Nama tidak boleh kosong.',
                'nama.regex' => 'Kolom Nama harus berupa huruf, spasi, titik dan koma.',
                'seksi.required' => 'Kolom seksi tidak boleh kosong.',
                'seksi.string' => 'Kolom seksi harus berupa teks.',
                'bidang.required' => 'Kolom bidang tidak boleh kosong.',
                'bidang.string' => 'Kolom bidang harus berupa teks.',
            ]);
            $tenagaahli->nama = $request->input('nama');
            $tenagaahli->seksi = $request->input('seksi');
            $tenagaahli->bidang = $request->input('bidang');

            $tenagaahli->save();

            return redirect()->route('admin.daftarnamapegawai.index')->with('successta', 'Tenaga Ahli berhasil diubah.');
        } catch (\Exception $e) {
            return redirect()->route('admin.tenagaahli.edit', ['id' => $id])->with('errorta', 'Tenaga Ahli Gagal diubah : ' . $e->getMessage());
        }
    }
}
