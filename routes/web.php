<?php

use App\Http\Controllers\Admin\BagianController as AdminBagianController;
use App\Http\Controllers\Admin\BerandaController as AdminBerandaController;
use App\Http\Controllers\Admin\DaftarNamaPegawaiController;
use App\Http\Controllers\Admin\GaleriController as AdminGaleriController;
use App\Http\Controllers\Admin\InformasiController;
use App\Http\Controllers\Admin\KontakController as AdminKontakController;
use App\Http\Controllers\Admin\LayananController as AdminLayananController;
use App\Http\Controllers\Admin\LoginController;
use App\Http\Controllers\Admin\MapController as AdminMapController;
use App\Http\Controllers\Admin\PengumumanController as AdminPengumumanController;
use App\Http\Controllers\Admin\ProfileController as AdminProfileController;
use App\Http\Controllers\Admin\StrukturorganisasiController;
use App\Http\Controllers\Admin\TupoksiController;
use App\Http\Controllers\Admin\VideoProfileController;
use App\Http\Controllers\BagianController;
use App\Http\Controllers\BerandaController;
use App\Http\Controllers\GaleriController;
use App\Http\Controllers\KontakController;
use App\Http\Controllers\MapController;
use App\Http\Controllers\PengumumanController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [BerandaController::class, 'index'])->name('beranda');
Route::get('/beranda', [BerandaController::class, 'index'])->name('beranda.index');
// Admin Login
Route::get('/admin', [LoginController::class, 'index'])->name('admin.login');
Route::post('actionlogin', [LoginController::class, 'actionlogin'])->name('actionlogin');
Route::get('actionlogout', [LoginController::class, 'actionlogout'])->name('actionlogout')->middleware('auth');
// Admin Beranda
Route::get('/admin/beranda/{id}', [AdminBerandaController::class, 'index'])->name('admin.beranda.index')->middleware('auth');
Route::put('/admin/beranda/{id}/ubah', [AdminBerandaController::class, 'ubah'])->name('admin.beranda.ubah')->middleware('auth');
Route::put('/admin/beranda/{id}/ubahkontak', [AdminBerandaController::class, 'ubahkontak'])->name('admin.beranda.ubahkontak')->middleware('auth');
Route::put('/admin/beranda/{id}/ubahlogo', [AdminBerandaController::class, 'ubahlogo'])->name('admin.beranda.ubahlogo')->middleware('auth');
Route::put('/admin/beranda/{id}/ubahbackground', [AdminBerandaController::class, 'ubahbackground'])->name('admin.beranda.ubahbackground')->middleware('auth');
Route::put('/admin/beranda/{id}/ubahrunningtext', [AdminBerandaController::class, 'ubahrunningtext'])->name('admin.beranda.ubahrunningtext')->middleware('auth');
Route::put('/admin/beranda/{id}/tupoksi', [AdminBerandaController::class, 'ubahtupoksi'])->name('admin.beranda.ubahtupoksi')->middleware('auth');
Route::put('/admin/beranda/{id}/tupoksi', [AdminBerandaController::class, 'ubahtupoksi'])->name('admin.beranda.ubahtupoksi')->middleware('auth');
Route::get('tupoksi/{id}/display', [AdminBerandaController::class, 'displaytupoksi'])->name('admin.tupoksi.display');
// Admin Struktur Organisasi
Route::get('/admin/strukturorganisasi/{id}', [StrukturorganisasiController::class, 'index'])->name('admin.strukturorganisasi.index')->middleware('auth');
Route::put('/admin/strukturorganisasi/{id}/ubahgambar', [StrukturorganisasiController::class, 'ubahgambar'])->name('admin.strukturorganisasi.ubahgambar')->middleware('auth');
// Admin Video Profile
Route::get('/admin/videoprofile/{id}', [VideoProfileController::class, 'index'])->name('admin.videoprofile.index')->middleware('auth');
Route::put('/admin/videoprofile/{id}/ubahvideo', [VideoProfileController::class, 'ubahvideo'])->name('admin.videoprofile.ubahvideo')->middleware('auth');
// Admin Tugas dan Fungsi Kominfotik
Route::get('/admin/profile/tugasdanfungsi/kominfotik/{id}', [AdminProfileController::class, 'tugasdanfungsi'])->name('admin.tugasdanfungsikominfotik.index')->middleware('auth');
Route::put('/admin/profile/{id}/ubahtugasdanfungsi/kominfotik', [AdminProfileController::class, 'ubahtugasdanfungsi'])->name('admin.tugasdanfungsikominfotik.ubah')->middleware('auth');
Route::get('/admin/profile/tugasdanfungsi/kominfotik', [AdminProfileController::class, 'isitugasdanfungsi'])->name('admin.tugasdanfungsikominfotik.isi.index')->middleware('auth');
Route::get('/admin/profile/kominfotik/tambah', [AdminProfileController::class, 'tambahtugasdanfungsi'])->name('admin.tugasdanfungsikominfotik.tambah')->middleware('auth');
Route::post('/admin/profile/tugasdanfungsi/kominfotik/kirim', [AdminProfileController::class, 'kirimtugasdanfungsi'])->name('admin.tugasdanfungsikominfotik.kirim')->middleware('auth');
Route::get('/admin/profile/tugasdanfungsi/kominfotik/{id}/edit', [AdminProfileController::class, 'edittugasdanfungsi'])->name('admin.tugasdanfungsikominfotik.edit')->middleware('auth');
Route::put('/admin/profile/tugasdanfungsi/kominfotik/{id}/ubah', [AdminProfileController::class, 'ubahisitugasdanfungsi'])->name('admin.tugasdanfungsikominfotik.ubahisi')->middleware('auth');
Route::delete('/admin/profile/tugasdanfungsi/kominfotik/hapus/{id}', [AdminProfileController::class, 'hapustugasdanfungsi'])->name('admin.tugasdanfungsikominfotik.hapus')->middleware('auth');
// Admin Tugas dan Fungsi Bagian Tata Usaha
Route::get('/admin/bagian/tugasdanfungsi/tatausaha/{id}', [AdminBagianController::class, 'tugasdanfungsitatausaha'])->name('admin.tatausaha.index')->middleware('auth');
Route::put('/admin/bagian/{id}/ubahtugasdanfungsi/tatausaha', [AdminBagianController::class, 'ubahtugasdanfungsitatausaha'])->name('admin.tatausaha.ubah')->middleware('auth');
Route::get('/admin/bagian/tugasdanfungsi/tatausaha', [AdminBagianController::class, 'isitugasdanfungsitatausaha'])->name('admin.tatausaha.isi.index')->middleware('auth');
Route::get('/admin/bagian/tatausaha/tambah', [AdminBagianController::class, 'tambahtugasdanfungsitatausaha'])->name('admin.tatausaha.tambah')->middleware('auth');
Route::post('/admin/bagian/tatausaha/kirim', [AdminBagianController::class, 'kirimtugasdanfungsitatausaha'])->name('admin.tatausaha.kirim')->middleware('auth');
Route::get('/admin/bagian/tatausaha/{id}/edit', [AdminBagianController::class, 'edittugasdanfungsitatausaha'])->name('admin.tatausaha.edit')->middleware('auth');
Route::put('/admin/bagian/tatausaha/{id}/ubah', [AdminBagianController::class, 'ubahisitugasdanfungsitatausaha'])->name('admin.tatausaha.ubahisi')->middleware('auth');
Route::delete('/admin/bagian/tatausaha/hapus/{id}', [AdminBagianController::class, 'hapustugasdanfungsitatausaha'])->name('admin.tatausaha.hapus')->middleware('auth');
// Admin Tugas dan Fungsi Bagian Komunikasi dan Informasi Publik
Route::get('/admin/bagian/tugasdanfungsi/komunikasidaninformasipublik/{id}', [AdminBagianController::class, 'tugasdanfungsikip'])->name('admin.kip.index')->middleware('auth');
Route::put('/admin/bagian/{id}/ubahtugasdanfungsi/komunikasidaninformasipublik', [AdminBagianController::class, 'ubahtugasdanfungsikip'])->name('admin.kip.ubah')->middleware('auth');
Route::get('/admin/bagian/tugasdanfungsi/komunikasidaninformasipublik', [AdminBagianController::class, 'isitugasdanfungsikip'])->name('admin.kip.isi.index')->middleware('auth');
Route::get('/admin/bagian/komunikasidaninformasipublik/tambah', [AdminBagianController::class, 'tambahtugasdanfungsikip'])->name('admin.kip.tambah')->middleware('auth');
Route::post('/admin/bagian/komunikasidaninformasipublik/kirim', [AdminBagianController::class, 'kirimtugasdanfungsikip'])->name('admin.kip.kirim')->middleware('auth');
Route::get('/admin/bagian/komunikasidaninformasipublik/{id}/edit', [AdminBagianController::class, 'edittugasdanfungsikip'])->name('admin.kip.edit')->middleware('auth');
Route::put('/admin/bagian/komunikasidaninformasipublik/{id}/ubah', [AdminBagianController::class, 'ubahisitugasdanfungsikip'])->name('admin.kip.ubahisi')->middleware('auth');
Route::delete('/admin/bagian/komunikasidaninformasipublik/hapus/{id}', [AdminBagianController::class, 'hapustugasdanfungsikip'])->name('admin.kip.hapus')->middleware('auth');
// Admin Tugas dan Fungsi Bagian Jaringan Komunikasi Data
Route::get('/admin/bagian/tugasdanfungsi/jaringankomunikasidata/{id}', [AdminBagianController::class, 'tugasdanfungsijkd'])->name('admin.jkd.index')->middleware('auth');
Route::put('/admin/bagian/{id}/ubahtugasdanfungsi/jaringankomunikasidata', [AdminBagianController::class, 'ubahtugasdanfungsijkd'])->name('admin.jkd.ubah')->middleware('auth');
Route::get('/admin/bagian/tugasdanfungsi/jaringankomunikasidata', [AdminBagianController::class, 'isitugasdanfungsijkd'])->name('admin.jkd.isi.index')->middleware('auth');
Route::get('/admin/bagian/jaringankomunikasidata/tambah', [AdminBagianController::class, 'tambahtugasdanfungsijkd'])->name('admin.jkd.tambah')->middleware('auth');
Route::post('/admin/bagian/jaringankomunikasidata/kirim', [AdminBagianController::class, 'kirimtugasdanfungsijkd'])->name('admin.jkd.kirim')->middleware('auth');
Route::get('/admin/bagian/jaringankomunikasidata/{id}/edit', [AdminBagianController::class, 'edittugasdanfungsijkd'])->name('admin.jkd.edit')->middleware('auth');
Route::put('/admin/bagian/jaringankomunikasidata/{id}/ubah', [AdminBagianController::class, 'ubahisitugasdanfungsijkd'])->name('admin.jkd.ubahisi')->middleware('auth');
Route::delete('/admin/bagian/jaringankomunikasidata/hapus/{id}', [AdminBagianController::class, 'hapustugasdanfungsijkd'])->name('admin.jkd.hapus')->middleware('auth');
// Admin Tugas dan Fungsi Bagian Sistem Informasi Siber dan Sandi
Route::get('/admin/bagian/tugasdanfungsi/sisteminformasisiberdansandi/{id}', [AdminBagianController::class, 'tugasdanfungsisiss'])->name('admin.siss.index')->middleware('auth');
Route::put('/admin/bagian/{id}/ubahtugasdanfungsi/sisteminformasisiberdansandi', [AdminBagianController::class, 'ubahtugasdanfungsisiss'])->name('admin.siss.ubah')->middleware('auth');
Route::get('/admin/bagian/tugasdanfungsi/sisteminformasisiberdansandi', [AdminBagianController::class, 'isitugasdanfungsisiss'])->name('admin.siss.isi.index')->middleware('auth');
Route::get('/admin/bagian/sisteminformasisiberdansandi/tambah', [AdminBagianController::class, 'tambahtugasdanfungsisiss'])->name('admin.siss.tambah')->middleware('auth');
Route::post('/admin/bagian/sisteminformasisiberdansandi/kirim', [AdminBagianController::class, 'kirimtugasdanfungsisiss'])->name('admin.siss.kirim')->middleware('auth');
Route::get('/admin/bagian/sisteminformasisiberdansandi/{id}/edit', [AdminBagianController::class, 'edittugasdanfungsisiss'])->name('admin.siss.edit')->middleware('auth');
Route::put('/admin/bagian/sisteminformasisiberdansandi/{id}/ubah', [AdminBagianController::class, 'ubahisitugasdanfungsisiss'])->name('admin.siss.ubahisi')->middleware('auth');
Route::delete('/admin/bagian/sisteminformasisiberdansandi/hapus/{id}', [AdminBagianController::class, 'hapustugasdanfungsisiss'])->name('admin.siss.hapus')->middleware('auth');
// Admin Pengumuman
Route::get('/admin/pengumuman', [AdminPengumumanController::class, 'index'])->name('admin.pengumuman.index')->middleware('auth');
Route::get('/admin/pengumuman/tambah', [AdminPengumumanController::class, 'tambahpengumuman'])->name('admin.pengumuman.tambah')->middleware('auth');
Route::post('/admin/pengumuman/kirim', [AdminPengumumanController::class, 'kirimpengumuman'])->name('admin.pengumuman.kirim')->middleware('auth');
Route::get('/admin/pengumuman/{id}/edit', [AdminPengumumanController::class, 'editpengumuman'])->name('admin.pengumuman.edit')->middleware('auth');
Route::put('/admin/pengumuman/{id}/ubah', [AdminPengumumanController::class, 'ubahpengumuman'])->name('admin.pengumuman.ubah')->middleware('auth');
Route::delete('/admin/pengumuman/hapus/{id}', [AdminPengumumanController::class, 'hapuspengumuman'])->name('admin.pengumuman.hapus')->middleware('auth');
Route::get('pengumuman/{id}/display', [AdminPengumumanController::class, 'displaypdf'])->name('admin.pengumuman.display');
// Admin Daftar Nama Pegawai
Route::get('/admin/daftarnamapegawai', [DaftarNamaPegawaiController::class, 'index'])->name('admin.daftarnamapegawai.index')->middleware('auth');
Route::get('/admin/daftarnamapegawai/pegawai/tambah', [DaftarNamaPegawaiController::class, 'tambahpegawai'])->name('admin.pegawai.tambah')->middleware('auth');
Route::post('/admin/daftarnamapegawai/pegawai/kirim', [DaftarNamaPegawaiController::class, 'kirimpegawai'])->name('admin.pegawai.kirim')->middleware('auth');
Route::get('/admin/daftarnamapegawai/pegawai/{id}/edit', [DaftarNamaPegawaiController::class, 'editpegawai'])->name('admin.pegawai.edit')->middleware('auth');
Route::put('/admin/daftarnamapegawai/pegawai/{id}/ubah', [DaftarNamaPegawaiController::class, 'ubahpegawai'])->name('admin.pegawai.ubah')->middleware('auth');
Route::delete('/admin/daftarnamapegawai/pegawai/hapus/{id}', [DaftarNamaPegawaiController::class, 'hapuspegawai'])->name('admin.pegawai.hapus')->middleware('auth');
Route::get('/admin/daftarnamapegawai/tenagaahli/tambah', [DaftarNamaPegawaiController::class, 'tambahtenagaahli'])->name('admin.tenagaahli.tambah')->middleware('auth');
Route::post('/admin/daftarnamapegawai/tenagaahli/kirim', [DaftarNamaPegawaiController::class, 'kirimtenagaahli'])->name('admin.tenagaahli.kirim')->middleware('auth');
Route::get('/admin/daftarnamapegawai/tenagaahli/{id}/edit', [DaftarNamaPegawaiController::class, 'edittenagaahli'])->name('admin.tenagaahli.edit')->middleware('auth');
Route::put('/admin/daftarnamapegawai/tenagaahli/{id}/ubah', [DaftarNamaPegawaiController::class, 'ubahtenagaahli'])->name('admin.tenagaahli.ubah')->middleware('auth');
Route::delete('/admin/daftarnamapegawai/tenagaahli/hapus/{id}', [DaftarNamaPegawaiController::class, 'hapustenagaahli'])->name('admin.tenagaahli.hapus')->middleware('auth');
// Admin Informasi Tata Usaha
Route::get('/admin/informasi/tatausaha', [InformasiController::class, 'indextatausaha'])->name('admin.informasi.tatausaha.index')->middleware('auth');
Route::get('/admin/informasi/kepegawaian/tambah', [InformasiController::class, 'tambahkepegawaian'])->name('admin.tatausaha.kepegawaian.tambah')->middleware('auth');
Route::post('/admin/informasi/kepegawaian/kirim', [InformasiController::class, 'kirimkepegawaian'])->name('admin.tatausaha.kepegawaian.kirim')->middleware('auth');
Route::get('/admin/informasi/kepegawaian/{id}/edit', [InformasiController::class, 'editkepegawaian'])->name('admin.tatausaha.kepegawaian.edit')->middleware('auth');
Route::put('/admin/informasi/kepegawaian/{id}/ubah', [InformasiController::class, 'ubahkepegawaian'])->name('admin.tatausaha.kepegawaian.ubah')->middleware('auth');
Route::delete('/admin/informasi/kepegawaian/hapus/{id}', [InformasiController::class, 'hapuskepegawaian'])->name('admin.tatausaha.kepegawaian.hapus')->middleware('auth');
Route::get('/admin/informasi/keuangan/tambah', [InformasiController::class, 'tambahkeuangan'])->name('admin.tatausaha.keuangan.tambah')->middleware('auth');
Route::post('/admin/informasi/keuangan/kirim', [InformasiController::class, 'kirimkeuangan'])->name('admin.tatausaha.keuangan.kirim')->middleware('auth');
Route::get('/admin/informasi/keuangan/{id}/edit', [InformasiController::class, 'editkeuangan'])->name('admin.tatausaha.keuangan.edit')->middleware('auth');
Route::put('/admin/informasi/keuangan/{id}/ubah', [InformasiController::class, 'ubahkeuangan'])->name('admin.tatausaha.keuangan.ubah')->middleware('auth');
Route::delete('/admin/informasi/keuangan/hapus/{id}', [InformasiController::class, 'hapuskeuangan'])->name('admin.tatausaha.keuangan.hapus')->middleware('auth');
Route::get('keuangan/{id}/display', [InformasiController::class, 'displaykeuangan'])->name('admin.keuangan.display');
Route::get('kepegawaian/{id}/display', [InformasiController::class, 'displaykepegawaian'])->name('admin.kepegawaian.display');
// Admin Informasi Jaringan Komunikasi Data
Route::get('/admin/informasi/jaringankomunikasidata', [InformasiController::class, 'indexjkd'])->name('admin.informasi.jkd.index')->middleware('auth');
Route::get('/admin/informasi/jaringankomunikasidata/sodtiti/{id}', [InformasiController::class, 'indexjkdsodtiti'])->name('admin.informasi.jkd.sodtiti')->middleware('auth');
Route::put('/admin/informasi/jaringakomunikasidata/{id}/ubahsodtiti', [InformasiController::class, 'ubahsodtiti'])->name('admin.informasi.jkd.ubahsodtiti')->middleware('auth');
Route::get('/admin/informasi/jaringankomunikasidata/daftarcctv/{id}', [InformasiController::class, 'indexjkddaftarcctv'])->name('admin.informasi.jkd.daftarcctv')->middleware('auth');
Route::put('/admin/informasi/jaringakomunikasidata/{id}/ubahdaftarcctv', [InformasiController::class, 'ubahdaftarcctv'])->name('admin.informasi.jkd.ubahdaftarcctv')->middleware('auth');
Route::get('jaringankomunikasidata/sodtiti/{id}', [InformasiController::class, 'displaysodtiti'])->name('jkd.display.sodtiti');
Route::get('jaringankomunikasidata/daftarcctv/{id}', [InformasiController::class, 'displaydaftarcctv'])->name('jkd.display.daftarcctv');
// Admin Informasi Komunikasi dan Informasi Publik
Route::get('/admin/informasi/komunikasidaninformasipublik', [InformasiController::class, 'indexkip'])->name('admin.informasi.kip.index')->middleware('auth');
Route::get('/admin/informasi/wartawan/tambah', [InformasiController::class, 'tambahwartawan'])->name('admin.kip.wartawan.tambah')->middleware('auth');
Route::post('/admin/informasi/wartawan/kirim', [InformasiController::class, 'kirimwartawan'])->name('admin.kip.wartawan.kirim')->middleware('auth');
Route::get('/admin/informasi/wartawan/{id}/edit', [InformasiController::class, 'editwartawan'])->name('admin.kip.wartawan.edit')->middleware('auth');
Route::put('/admin/informasi/wartawan/{id}/ubah', [InformasiController::class, 'ubahwartawan'])->name('admin.kip.wartawan.ubah')->middleware('auth');
Route::delete('/admin/informasi/wartawan/hapus/{id}', [InformasiController::class, 'hapuswartawan'])->name('admin.kip.wartawan.hapus')->middleware('auth');
Route::get('/admin/organisasikewartawanan/{id}', [InformasiController::class, 'indexorganisasiwartawan'])->name('admin.organisasi.edit')->middleware('auth');
Route::post('/upload', [InformasiController::class, 'upload'])->name('ckeditor.upload')->middleware('auth');
Route::put('/admin/organisasikewartawanan/{id}/ubah', [InformasiController::class, 'ubah'])->name('admin.organisasi.ubah')->middleware('auth');
Route::get('/organisasikewartawanan/{id}/lihat', [InformasiController::class, 'lihatorganisasikewartawanan'])->name('organisasi.kewartawanan.lihat');
Route::get('/jurnalisjakartatimur/lihat', [InformasiController::class, 'lihatdatawartawan'])->name('data.wartawan.lihat');
// Admin Galeri Pegawai
Route::get('/admin/galeri/pegawai/tambah', [AdminGaleriController::class, 'tambahgaleri'])->name('admin.galeri.tambah')->middleware('auth');
Route::get('/admin/galeri/pegawai', [AdminGaleriController::class, 'indexgaleri'])->name('admin.galeri.index')->middleware('auth');
Route::post('/admin/galeri/pegawai/kirim', [AdminGaleriController::class, 'kirimgaleri'])->name('admin.galeri.kirim')->middleware('auth');
Route::get('/admin/galeri/pegawai/{id}/edit', [AdminGaleriController::class, 'editgaleri'])->name('admin.galeri.edit')->middleware('auth');
Route::get('/admin/galeri/pegawai/{id}/lihat', [AdminGaleriController::class, 'lihatgaleri'])->name('admin.galeri.lihat')->middleware('auth');
Route::put('/admin/galeri/pegawai/{id}/ubah', [AdminGaleriController::class, 'ubahgaleri'])->name('admin.galeri.ubah')->middleware('auth');
Route::delete('/admin/galeri/pegawai/hapus/{id}', [AdminGaleriController::class, 'hapusgaleri'])->name('admin.galeri.hapus')->middleware('auth');
// Galeri Tampilan Pegawai
Route::get('/galeri/pegawai/tatausaha', [AdminGaleriController::class, 'galeritu'])->name('galeri.tu');
Route::get('/galeri/pegawai/komunikasidaninformasipublik', [AdminGaleriController::class, 'galerikip'])->name('galeri.kip');
Route::get('/galeri/pegawai/jaringankomunikasidata', [AdminGaleriController::class, 'galerijkd'])->name('galeri.jkd');
Route::get('/galeri/pegawai/sisteminformasisiberdansandi', [AdminGaleriController::class, 'galerisiss'])->name('galeri.siss');
// Admin Foto
Route::get('/admin/galeri/beritakegiatanfoto/tambah', [AdminGaleriController::class, 'tambahfoto'])->name('admin.foto.tambah')->middleware('auth');
Route::get('/admin/galeri/beritakegiatanfoto', [AdminGaleriController::class, 'foto'])->name('admin.foto.index')->middleware('auth');
Route::post('/admin/galeri/beritakegiatanfoto/kirim', [AdminGaleriController::class, 'kirimfoto'])->name('admin.foto.kirim')->middleware('auth');
Route::get('/admin/galeri/beritakegiatanfoto/{id}/edit', [AdminGaleriController::class, 'editfoto'])->name('admin.foto.edit')->middleware('auth');
Route::get('/admin/galeri/beritakegiatanfoto/{id}/lihat', [AdminGaleriController::class, 'lihatfoto'])->name('admin.foto.lihat')->middleware('auth');
Route::put('/admin/galeri/beritakegiatanfoto/{id}/ubah', [AdminGaleriController::class, 'ubahfoto'])->name('admin.foto.ubah')->middleware('auth');
Route::delete('/admin/galeri/beritakegiatanfoto/hapus/{id}', [AdminGaleriController::class, 'hapusfoto'])->name('admin.foto.hapus')->middleware('auth');
// Admin Video
Route::get('/admin/galeri/video/tambah', [AdminGaleriController::class, 'tambahvideo'])->name('admin.video.tambah')->middleware('auth');
Route::get('/admin/galeri/video', [AdminGaleriController::class, 'video'])->name('admin.video.index')->middleware('auth');
Route::post('/admin/galeri/video/kirim', [AdminGaleriController::class, 'kirimvideo'])->name('admin.video.kirim')->middleware('auth');
Route::get('/admin/galeri/video/{id}/edit', [AdminGaleriController::class, 'editvideo'])->name('admin.video.edit')->middleware('auth');
Route::get('/admin/galeri/video/{id}/lihat', [AdminGaleriController::class, 'lihatvideo'])->name('admin.video.lihat')->middleware('auth');
Route::put('/admin/galeri/video/{id}/ubah', [AdminGaleriController::class, 'ubahvideo'])->name('admin.video.ubah')->middleware('auth');
Route::delete('/admin/galeri/video/hapus/{id}', [AdminGaleriController::class, 'hapusvideo'])->name('admin.video.hapus')->middleware('auth');
// Admin Kontak
Route::get('/admin/kontak', [AdminKontakController::class, 'index'])->name('admin.kontak')->middleware('auth');
Route::get('/admin/kontak/{id}/lihat', [AdminKontakController::class, 'lihat'])->name('kontak.lihat')->middleware('auth');
Route::delete('/admin/kontak/hapus/{id}', [AdminKontakController::class, 'hapus'])->name('kontak.hapus')->middleware('auth');
// Admin Map
Route::get('/admin/map/{id}', [AdminMapController::class, 'index'])->name('admin.map.index')->middleware('auth');
Route::put('/admin/map/{id}/ubah', [AdminMapController::class, 'ubah'])->name('admin.map.ubah')->middleware('auth');

//Kontak
Route::get('/kontak', [KontakController::class, 'index'])->name('kontak.index');
Route::post('/kontak', [KontakController::class, 'kirim'])->name('kontak.kirim');
Route::get('/map/{id}', [MapController::class, 'index'])->name('map.index');
Route::get('/profile/tugasdanfungsi', [ProfileController::class, 'tugasfungsi'])->name('profile.tugasfungsi');
Route::get('/profile/videoprofile/{id}', [ProfileController::class, 'videoprofile'])->name('profile.videoprofile');
Route::get('/profile/strukturorganisasi/{id}', [ProfileController::class, 'strukturorganisasi'])->name('profile.strukturorganisasi');
Route::get('/profile/daftarnamapegawai', [ProfileController::class, 'daftarnamapegawai'])->name('profile.daftarnamapegawai');
Route::get('/galeri/foto', [GaleriController::class, 'foto'])->name('galeri.foto');
Route::get('/pengumuman', [PengumumanController::class, 'index'])->name('pengumuman.index');
Route::get('/galeri/foto/lihat/{id}', [GaleriController::class, 'lihatfoto'])->name('galeri.foto.lihat');
Route::get('/galeri/video', [GaleriController::class, 'video'])->name('galeri.video');
Route::get('/galeri/video/lihat/{id}', [GaleriController::class, 'lihatvideo'])->name('galeri.video.lihat');
Route::get('/bagian/tatausaha', [BagianController::class, 'tu'])->name('bagian.tu.index');
Route::get('/bagian/komunikasiinformasipublik', [BagianController::class, 'kip'])->name('bagian.kip.index');
Route::get('/bagian/jaringankomunikasidata', [BagianController::class, 'jkd'])->name('bagian.jkd.index');
Route::get('/bagian/sisteminformasisiberdansandi', [BagianController::class, 'siss'])->name('bagian.siss.index');
