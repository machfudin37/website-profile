<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            'name' => 'admin',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('123'),
        ]);
        DB::table('beranda')->insert([
            'nama' => 'Suku Dinas',
            'subject' => 'Komunikasi, Informatika dan Statistik',
            'tempat' => 'Kota Administrasi Jakarta Timur',
            'logo' => 'Lambang.png',
            'background' => 'bg.jpg',
            'alamat' => 'JL. Dr. Sumarno Pulogebang Gedung Blok B1 LT.3 / Gedung Blok A LT.8 ',
            'telpon' => '(021) 4800 509 / (021) 4800463',
            'email' => 'sudinkominfotik@gmail.com',
            'tahun' => '2023',
            'runningtext' => 'Pilih',
            'tupoksi' => 'tupoksi.pdf',
        ]);
        DB::table('strukturorganisasi')->insert([
            'gambar' => 'strukturorganisasi.jpeg',
        ]);
        DB::table('videoprofile')->insert([
            'video' => 'videoprofile.mp4',
        ]);
        DB::table('organisasi_kewartawanan')->insert([
            'body' => '<table border="0" cellspacing="0" style="height:180px; width:741px">
            <tbody>
                <tr>
                    <th scope="col"><img alt="pwrcpk banten" class="gambar-1"
                            src="https://timur.jakarta.go.id/kominfotikjt/img/organisasi_wartawan_clip_image002_0000.jpg"
                            style="height:112px; width:116px" /></th>
                    <th scope="col"><img
                            alt="https://encrypted-tbn3.gstatic.com/images?q=tbn:ANd9GcSPFHMHBSEDbDDiSUe_slfWUWjraTtVBQIsAVhbo-DhJDMBr7d9SQ"
                            class="gambar-1"
                            src="https://timur.jakarta.go.id/kominfotikjt/img/organisasi_wartawan_clip_image004_0000.jpg"
                            style="height:101px; width:116px" /></th>
                    <th scope="col"><img alt="https://www.jawapossmakassar.com/wp-content/uploads/2014/09/Untitled-3.jpg"
                            class="gambar-1"
                            src="https://timur.jakarta.go.id/kominfotikjt/img/organisasi_wartawan_clip_image006_0000.jpg"
                            style="height:103px; width:122px" /></th>
                    <th scope="col"><img
                            alt="https://lh3.googleusercontent.com/-NwctqDvK2fA/AAAAAAAAAAI/AAAAAAAAAok/scfBnOfzyWw/s512-c/photo.jpg"
                            class="gambar-1"
                            src="https://timur.jakarta.go.id/kominfotikjt/img/organisasi_wartawan_clip_image008_0000.jpg"
                            style="height:102px; width:113px" /></th>
                    <th scope="col"><img alt="https://lintaspatroli.files.wordpress.com/2011/11/logo-pji1.jpg"
                            class="gambar-1"
                            src="https://timur.jakarta.go.id/kominfotikjt/img/organisasi_wartawan_clip_image010_0000.jpg"
                            style="height:106px; width:144px" /></th>
                </tr>
            </tbody>
        </table>

        <p>Eforia reformasi memberi lahan tumbuh suburnya mass media yang bak cendawan di pagi hari, yang melahirkan banyaknya
            surat kabar, majalah (harian/ mingguan/ bulanan) dan media televisi, yang selalu memberikan tayangan berita
            informasi/ opini ke masyarakat secara masif.<br />
            Banyak media massa tersebut membawa banyak pekerja media, yang kemudian berkumpul sesuai kekhasan medianya, atau
            kesamaan rasa pertemanan. Sehingga kemudian berkembang dan dikukuhkan menjadi sebuah organisasi senasib
            sepenanggungan, jadilah organisasi kewartawanan.<br />
            Organisasi kewartawanan adalah wadah dari perkumpulan/ paguyuban dari para &nbsp;jurnalis/ wartawan/ reporter media
            cetak dan media elektronik. Saat ini banyak organisasi kewartawanan, yang terdeteksi berjumlah 40-an organisasi,
            dari sebanyak itu hanya 3 (tiga) organisasi kewartawan yang diakui secara yuridis formal. Antara lain Persatuan
            Wartawan Indonesia (PWI), Aliansi Jurnalis Indonesia (AJI) dan Ikatan Jurnalis Televisi Indonesia (IJTI).<br />
            Ketiga organisasi kewartawanan, yaitu: PWI, AJI, IJTI diakui berdasarkan Surat Keputusan Dewan Pers No.
            12/SK-DP/VIII/2006 tentang Hasil Verifikasi Organisasi Wartawan.</p>

        <p><br />
            Dimana sesuai Undang Undang RI Nomor 40 Tahun 1999 Tentang Pers mensyaratkan kriteria dari suatu perusahaan pers,
            seperti antara lain diatur dalam pasal 12 UU Pers yang tegas menyebutkan &ldquo;Perusahaan pers wajib mengumumkan
            nama, alamat dan penanggung jawab secara terbuka melalui media yang bersangkutan; khusus untuk penerbitan pers
            ditambah nama dan alamat percetakan&rdquo;.</p>

        <p>&nbsp;</p>

        <p class="judul"><strong>ORGANISASI KEWARTAWANAN YANG TERVERIFIKASI DEWAN PERS</strong></p>

        <p class="judul"><strong>Persatuan Wartawan Indonesia (PWI)</strong><br />
            <img alt="https://www.zonadinamika.com/wp-content/uploads/2014/09/PWI.jpg"
                src="https://timur.jakarta.go.id/kominfotikjt/img/organisasi_wartawan_clip_image012_0000.jpg"
                style="height:166px; width:187px" /><br />
            Logo/ lambang organisasi kewartawanan Persatuan Wartawan Indonesia (PWI)
        </p>

        <p class="judul"><img src="https://timur.jakarta.go.id/kominfotikjt/organisasi_wartawan_clip_image014_0000.jpg"
                style="height:178px; width:277px" /><br />
            Wakil Pemimpin Redaksi Majalah Kartini, Endang Werdiningsih,resmi sebagai Ketua Persatuan Wartawan Indonesia
            Provinsi DKI Jakarta (PWI Jaya) periode 2014-2019,(26/4). Disebelahnya H. Kamsul Hasan Ketua<br />
            PWI Jaya sebelumnya.</p>

        <p>&nbsp;</p>

        <p>PWI Provinsi DKI Jakarta yang di ketuai oleh Endang Werdiningsih (082114065450) beranggotakan para wartawan dari
            berbagai media, berkantor di Gedung Sasana Prasada Karya Jl. Suryopranoto No. 8,&nbsp;Jakpus lantai 4 dan 5 yang
            difasilitasi pada gedung milik Pemda DKI tersebut.<br />
            Persatuan Wartawan Indonesia (PWI) dibentuk tanggal 9 Februari 1946 sebagai wadah dan wahana Aspirasi perjuangan
            wartawan dan pers Indonesia yang berlingkup nasional.<br />
            Karena sejarah dan kedekatannya dengan pemerintah, PWI dianggap sebagai organisasi kewartawanan plat merah oleh
            organisasi kewartawanan lainnya, organisasi ini yang pertama diakui oleh pemerintah lewat Departemen Penerangan RI,
            karena kedekatannya sehingga mendapat fasilitas dari Pemda, dalam bentuk gedung/ ruang kantor.</p>

        <p><strong>&nbsp;</strong><strong>&nbsp;</strong></p>

        <p class="judul"><strong>Aliansi Jurnalis Indonesia (AJI)</strong><br />
            <img alt="https://apakabarsidimpuan.com/wp-content/uploads/2014/12/aji1.png"
                src="https://timur.jakarta.go.id/kominfotikjt/img/organisasi_wartawan_clip_image016_0000.jpg"
                style="height:151px; width:160px" /><br />
            Logo/ lambang organisasi kewartawanan Aliansi Jurnalis Indonesia (AJI)
        </p>

        <p>&nbsp;</p>

        <p class="judul"><img alt="https://cdn-2.tstatic.net/tribunnews/foto/bank/images/aji-jakarta-ketua_20150301_091208.jpg"
                src="https://timur.jakarta.go.id/kominfotikjt/img/organisasi_wartawan_clip_image018_0000.jpg"
                style="height:125px; width:191px" /><br />
            Ketua AJI Jakarta periode 2013-2018 Ahmad Nurhasim (kanan) dan Sekretaris Muhammad Irham (Varia.id) (28/2/2015).
            (TEMPO/Sunudyantoro)</p>

        <p>&nbsp;</p>

        <p>Aliansi Jurnalis Indonesia (AJI) Jakarta yang diketuai Ahmad Nurhasim dari jurnalis Tempo, beranggotakan para
            jurnalis/ wartawan antara lain: Tempo, Kompas, Tribunnews.<br />
            Para anggotanya dikenal dan dianggap idealis oleh sejawatnya, sehingga lebih disegani narasumbernya.<br />
            Aliansi Jurnalis Independen (AJI) lahir sebagai perlawanan komunitas pers Indonesia, dimana 100 orang yang terdiri
            dari jurnalis dan kolumnis berkumpul di Sirnagalih, Bogor, 7 Agustus 1994. Pada hari itulah mereka menandatangani
            Deklarasi Sirnagalih. Inti deklarasi ini adalah menuntut dipenuhinya hak publik atas informasi, menentang
            pengekangan pers, menolak wadah tunggal untuk jurnalis, serta mengumumkan berdirinya AJI.&nbsp;</p>

        <p><strong>&nbsp;</strong></p>

        <p class="judul"><strong>Ikatan Jurnalis Televisi Indonesia (IJTI)</strong></p>

        <p class="judul"><img alt="https://ijti.org/img_files/logo.png"
                src="https://timur.jakarta.go.id/kominfotikjt/img/organisasi_wartawan_clip_image020_0000.gif"
                style="height:137px; width:148px" /></p>

        <p class="judul">Logo/ lambang organisasi kewartawanan Ikatan Jurnalis Televisi Indonesia (IJTI)</p>

        <p>&nbsp;</p>

        <p class="judul"><img alt="https://media.licdn.com/mpr/mpr/shrinknp_400_400/p/7/005/0ae/1aa/143ff42.jpg"
                src="https://timur.jakarta.go.id/kominfotikjt/img/organisasi_wartawan_clip_image022_0000.jpg"
                style="height:148px; width:131px" /><br />
            Fajar Kurniawan (ANTV) sebagai ketua IJTI DKI periode 2013-2017. Sementara posisi sekretaris umum diisi oleh Danang
            sangga Buana (Globaltv).&nbsp;</p>

        <p>&nbsp;</p>

        <p>Ikatan Jurnalistik Televisi Indonesia (IJTI) yang diketuai Fajar Kurniawan dari ANTV, beranggotakan para jurnalis/
            reporter televisi pemerintah dan swasta.<br />
            IJTI didirikan tanggal 25 April 1998, berawal dari pembicaraan beberapa reporter Indosiar dan SCTV, yang sedang
            mengadakan peliputan di Pulau Panjang Kepulauan Seribu, maka disepakati ide pembentukan Organisasi Jurnalis
            Televisi, yang bisa menjadi wadah pemberdayaan dan peningkatan profesi para jurnalis televisi. Pertemuan ini
            melahirkan gagasan pembentukan organisasi jurnalis televisi swasta dan pemerintah.</p>

        <ul>
        </ul>',
        ]);
        DB::table('map')->insert([
            'lokasi' => '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.375639028955!2d106.94159487387904!3d-6.214090693773792!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e698d70059c8b3f%3A0x207cb9a26106d5f9!2sSudin%20Kominfotik%20Jakarta%20Timur!5e0!3m2!1sid!2sid!4v1700100012394!5m2!1sid!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>',
        ]);
        DB::table('tugasdanfungsikominfotik')->insert([
            'judul' => 'TUGAS DAN FUNGSI SUDIN KOMINFOTIK',
            'sub_judul' => 'Suku Dinas Kominfo dan Statistik Kota Administrasi merupakan Unit Kerja Dinas Kominfo dan Statistik pada Kota Administrasi dan dipimpin oleh seorang Kepala Suku Dinas yang secara teknis dan administrasi berkedudukan di bawah dan bertanggung jawab kepada Kepala Dinas, serta secara operasional dikoordinasikan oleh Walikota. Suku Dinas Kominfo dan Statistik Kota Administrasi mempunyai tugas melaksanakan urusan komunikasi dan informatika, statistik, dan persandian di wilayah Kota administrasi.',
            'judul_isi' => 'Suku Dinas Kominfo dan Statistik Kota Administrasi menyelenggarakan fungsi :',
        ]);
        DB::table('tatausaha')->insert([
            'nama_bagian' => 'TATA USAHA',
            'judul' => 'TUGAS DAN FUNGSI TATA USAHA',
            'sub_judul' => 'Subbagian Tata Usaha merupakan Satuan Kerja staf Suku Dinas dalam pelaksanaan administrasi pada Suku Dinas dan dipimpin oleh seorang Kepala Subbagian yang berkedudukan di bawah dan bertanggung jawab kepada Kepala Suku Dinas.',
            'judul_isi' => 'Subbagian Tata Usaha mempunyai tugas:',
            'foto' => 'tatausaha.jpg',
        ]);
        DB::table('komunikasidaninformasipublik')->insert([
            'nama_bagian' => 'KOMUNIKASI INFORMASI PUBLIK',
            'judul' => 'TUGAS DAN FUNGSI KOMUNIKASI INFORMASI PUBLIK',
            'sub_judul' => 'Seksi Komunikasi dan Informasi Publik merupakan Satuan Kerja lini Suku Dinas dalam pelaksanaan pengelolaan komunikasi dan informasi publik di wilayah Kota Administrasi dan dipimpin oleh seorang Kepala Seksi yang berkedudukan di bawah dan bertanggung jawab kepada Kepala Suku Dinas.',
            'judul_isi' => 'Seksi Komunikasi dan Informasi Publik mempunyai tugas :',
            'foto' => 'kip.png',
        ]);
        DB::table('jaringankomunikasidata')->insert([
            'nama_bagian' => 'JARINGAN KOMUNIKASI DATA',
            'judul' => 'TUGAS DAN FUNGSI JARINGAN KOMUNIKASI DATA',
            'sub_judul' => 'Seksi Jaringan Komunikasi Data berkedudukan di bawah dan bertanggung jawab kepada Suku Dinas Kota.',
            'judul_isi' => 'Seksi Jaringan Komunikasi Data mempunyai tugas:',
            'foto' => 'jkd.jpg',
        ]);
        DB::table('sisteminformasisiberdansandi')->insert([
            'nama_bagian' => 'SISTEM INFORMASI SIBER DAN SANDI',
            'judul' => 'TUGAS DAN FUNGSI SISTEM INFORMASI, SIBER DAN SANDI',
            'sub_judul' => 'Seksi Sistem Informasi, Siber dan Sandi berkedudukan di bawah dan bertanggung jawab kepada Suku Dinas Kota.Seksi Sistem Informasi, dipimpin oleh Kepala Seksi.Seksi Sistem Informasi, Siber dan Sandi.',
            'judul_isi' => 'Seksi Sistem Informasi, Siber dan Sandi mempunyai tugas:',
            'foto' => 'siss.jpg',
        ]);
        DB::table('beritakegiatanfoto')->insert([
            [
                'judul' => 'RAPAT KOORDINASI SEKSI SISTEM INFORMASI SIBER DAN SANDI',
                'keterangan' => 'Rapat Koordinasi Seksi Sistem Informasi Siber dan Sandi',
                'bagian' => 'Sistem Informasi, Siber dan Sandi',
                'gambar' => '1.jpg',
            ],
            [
                'judul' => 'KOMITMEN LINDUNGI DATA DARI SERANGAN SIBER, SUDIN KOMINFOTIK JAKARTA TIMUR KEMBANGKAN APLIKASI CLOUD INTERNAL',
                'keterangan' => '<p>Jakarta, 12 Maret 2020 - Suku Dinas Kominfotik Kota Administrasi Jakarta Timur mensosialisasikan Aplikasi Cloud internal yang bertempat di Kantor Walikota Blok B1 Lantai 3. Acara tersebut dihadiri oleh ASN dan tenaga ahli yang bekerja di lingkungan Sudin Kominfotik Kota Administrasi Jakarta Timur dalam upaya meningkatkan keamanan data dan memudahkan dalam penyimpanan serta berbagi data yang tersimpan di cloud dalam server Sudin Kominfotik Kota Administrasi Jakarta Timur.</p>
                <p>&nbsp;</p>
                <p>Dalam pembukaannnya Kepala seksi Sistem Informasi, Siber dan Sandi, menyampaikan ucapan terima kasih atas kolaborasi dan dukungan Bidang Siber dan Sandi Dinas Kominfotik dengan Seksi Jaringan Keamananan Data Sudin Kominfotik Kota Administrasi Jakarta Timur dalam pengembangan Aplikasi ini.</p>
                <p>&nbsp;</p>
                <p>Antusiasme para peserta sosialisasi terlihat sangat besar, terutama ketika pemateri memaparkan mengenai bahaya yang dapat ditimbulkan akibat dari serangan siber dan ancaman keamanan data mulai dari serangan virus hingga serangan malware yang &quot;menyandera&quot; berkas dokumen di komputer akibat ransomware, dalam sosialisasi kali ini juga disampaikan fitur-fitur kelebihan yang dapat dimanfaatkan seperti share, publish, taggar, dll sehingga diharapkan dapat memudahkan pekerjaan dan meningkatkan kinerja.</p>
                <p>&nbsp;</p>
                <p>&quot;Kedepan akan terus dikembangkan fungsi dan fitur pada cloud, bahkan ke BIG Data pada tahun-tahun mendatang sehingga akan semakin memberikan pengalaman terbaik dalam bertugas&quot; Pungkas Kepala seksi Sistem Informasi, Siber dan Sandi Sudin Kominfotik</p>
                <p><br />
                Dari Komintofik Jakarta Timur, tim SISS melaporkan</p>',
                'bagian' => 'Sistem Informasi, Siber dan Sandi',
                'gambar' => '2.jpg',
            ],
        ]);
        DB::table('beritakegiatanvideo')->insert([
            [
                'judul' => 'Pemkot Jaktim Sidak Pangan dan Kestabilan Harga Bahan Pokok Di Pasar Kramatjati',
                'keterangan' => 'Pemkot Jaktim Sidak Pangan dan Kestabilan Harga Bahan Pokok Di Pasar Kramatjati',
                'bagian' => 'Komunikasi dan Informasi Publik',
                'video' => '<iframe width="716" height="403" src="https://www.youtube.com/embed/uiSaJM99eIE" title="Pemkot Jaktim Sidak Pangan dan Kestabilan Harga Bahan Pokok Di Pasar Kramatjati" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>',
            ],
            [
                'judul' => 'Sudin Kominfotik Jaktim Matikan Jaringan Internet Cegah Virus Wannacry',
                'keterangan' => 'Sudin Kominfotik Jaktim Matikan Jaringan Internet Cegah Virus Wannacry',
                'bagian' => 'Jaringan Komunikasi Data',
                'video' => '<iframe width="716" height="403" src="https://www.youtube.com/embed/uNAzb_K0J3A" title="Sudin Kominfotik Jaktim Matikan Jaringan Internet Cegah Virus Wannacry" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>',
            ],
            [
                'judul' => 'Sudin Kominfotik Jaktim Matikan Jaringan Internet Cegah Virus Wannacry',
                'keterangan' => 'Sudin Kominfotik Jaktim Matikan Jaringan Internet Cegah Virus Wannacry',
                'bagian' => 'Sistem Informasi, Siber dan Sandi',
                'video' => '<iframe width="716" height="403" src="https://www.youtube.com/embed/uNAzb_K0J3A" title="Sudin Kominfotik Jaktim Matikan Jaringan Internet Cegah Virus Wannacry" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>',
            ],
        ]);
        DB::table('sodtiti')->insert([
            'judul' => 'STANDAR OPERASIONAL DUKUNGAN TEKNIS INFRASTRUKTUR TEKNOLOGI INFORMASI',
            'gambar' => 'sodititi.jpg',
        ]);
        DB::table('isikominfotik')->insert([
            [
                'isi' => 'penyusunan Rencana Strategis, Rencana Kerja dan Rencana Kerja dan Anggaran Dinas sesuai dengan lingkup tugasnya',
            ],
            [
                'isi' => 'pelaksanaan Dokumen Pelaksanaan Anggaran Dinas sesuai dengan lingkup tugasnya',
            ],
            [
                'isi' => 'perumusan kebijakan, proses bisnis, standar dan prosedur Suku Dinas Kota',
            ],
            [
                'isi' => 'pelaksanaan kebijakan, proses bisnis, standar dan prosedur Suku Dinas Kota',
            ],
            [
                'isi' => 'pengelolaan opini dan aspirasi publik pada wilayah kota',
            ],
            [
                'isi' => 'pengelolaan dan pelayanan komunikasi dan informasi publik pada wilayah kota',
            ],
            [
                'isi' => 'penyediaan konten lintas sektoral dan pengelolaan media komunikasi publik pada wilayah kota',
            ],
            [
                'isi' => 'pengelolaan media komunikasi publik pada wilayah kota',
            ],
            [
                'isi' => 'pelaksanaan manajemen komunikasi krisis pada wilayah kota',
            ],
            [
                'isi' => 'pelaksanaan pemantauan informasi dan penetapan agenda prioritas komunikasi Pemerintah Daerah pada wilayah kota',
            ],
            [
                'isi' => 'pelaksanaan kemitraan dengan pemangku kepentingan pada wilayah kota',
            ],
            [
                'isi' => 'pelaksanaan layanan hubungan media pada wilayah kota',
            ],
            [
                'isi' => 'penyelenggaraan layanan infrastruktur pusat data, pusat pemulihan bencana dan Teknologi Informasi dan Komunikasi (TIK) pada wilayah kota',
            ],
            [
                'isi' => 'pelaksanaan layanan keamanan informasi, siber dan sandi pada wilayah kota',
            ],
            [
                'isi' => 'penyelenggaraan layanan pengembangan jaringan intranet dan penggunaan akses intemet pada wilayah kota',
            ],
            [
                'isi' => 'penyelenggaraan layanan sistem komunikasi intra Pemerintah Daerah pada wilayah kota',
            ],
            [
                'isi' => 'penyelenggaraan layanan aplikasi dan proses bisnis pemerintahan berbasis elektronik pada wilayah kota',
            ],
            [
                'isi' => 'fasilitasi kegiatan statistik pada wilayah kota',
            ],
            [
                'isi' => 'penyelenggaraan ekosistem Provinsi dan kota cerdas pada wilayah kota',
            ],
            [
                'isi' => 'pelaksanaan kesekretariatan Suku Dinas Kota',
            ],
            [
                'isi' => 'pelaksanaan koordinasi, pemantauan, evaluasi, pelaporan dan pertanggungjawaban pelaksanaan tugas Suku Dinas Kota',
            ],
            [
                'isi' => 'pelaksanaan tugas kedinasan lain yang diberikan oleh Kepala Dinas',
            ],
        ]);
        DB::table('isitatausaha')->insert([
            [
                'isi' => 'menyusun Rencana Strategis, Rencana Kerja dan Rencana Kerja dan Anggaran Dinas sesuai dengan lingkup tugasnya',
            ],
            [
                'isi' => 'mengoordinasikan penyusunan Rencana Strategis, Rencana Kerja dan Rencana Kerja dan Anggaran Dinas sesuai dengan lingkup tugasnya',
            ],
            [
                'isi' => 'melaksanakan Dokumen Pelaksanaan Anggaran Dinas sesuai dengan lingkup tugasnya',
            ],
            [
                'isi' => 'mengoordinasikan pelaksanaan Dokumen Pelaksanaan Anggaran Dinas sesuai dengan lingkup tugasnya',
            ],
            [
                'isi' => 'merumuskan kebijakan, proses bisnis, standar dan prosedur Suku Dinas Kota sesuai dengan lingkup tugasnya',
            ],
            [
                'isi' => 'melaksanakan kebijakan, proses bisnis, standar dan prosedur Suku Dinas Kota sesuai dengan lingkup tugasnya',
            ],
            [
                'isi' => 'mengelola kepegawaian Suku Dinas Kota',
            ],
            [
                'isi' => 'mengelola keuangan Suku Dinas Kota',
            ],
            [
                'isi' => 'mengelola barang Suku Dinas Kota',
            ],
            [
                'isi' => 'mengelola kerumahtanggaan, ketatalaksanaan, ketatausahaan, kearsipan dan kehumasan Suku Dinas Kota',
            ],
            [
                'isi' => 'mengelola data dan sistem informasi Suku Dinas Kota',
            ],
            [
                'isi' => 'melaksanakan koordinasi, pemantauan, evaluasi, pelaporan dan pertanggungjawaban pelaksanaan tugas Suku Dinas Kota sesuai dengan lingkup tugasnya',
            ],
            [
                'isi' => 'mengoordinasikan pelaksanaan koordinasi, pemantauan, evaluasi, pelaporan dan pertanggungjawaban pelaksanaan tugas Suku Dinas Kota',
            ],
            [
                'isi' => 'melaksanakan tugas kedinasan lain yang diberikan oleh Kepala Suku Dinas',
            ],
        ]);
        DB::table('isikomunikasidaninformasipublik')->insert([
            [
                'isi' => 'menyusun Rencana Strategis, Rencana Kerja dan Rencana Kerja dan Anggaran Dinas sesuai dengan lingkup tugasnya',
            ],
            [
                'isi' => 'melaksanakan Dokumen Pelaksanaan Anggaran Dinas sesuai dengan lingkup tugasnya',
            ],
            [
                'isi' => 'merumuskan kebijakan, proses bisnis, standar dan prosedur Suku Dinas Kota sesuai dengan lingkup tugasnya',
            ],
            [
                'isi' => 'melaksanakan kebijakan, proses bisnis, standar dan prosedur Suku Dinas Kota sesuai dengan lingkup tugasnya',
            ],
            [
                'isi' => 'melaksanakan pengelolaan opini dan aspirasi publik pada wilayah kota',
            ],
            [
                'isi' => 'melaksanakan pengelolaan dan pelayanan komunikasi dan informasi publik pada wilayah kota',
            ],
            [
                'isi' => 'melaksanakan penyediaan konten lintas sektoral dan pengelolaan media komunikasi publik pada wilayah kota',
            ],
            [
                'isi' => 'melaksanakan pengelolaan media komunikasi publik pada wilayah kota',
            ],
            [
                'isi' => 'melaksanakan manajemen komunikasi krisis pada wilayah kota',
            ],
            [
                'isi' => 'melaksanakan pemantauan informasi dan penetapan agenda prioritas komunikasi Pemerintah Daerah pada wilayah kota',
            ],
            [
                'isi' => 'melaksanakan layanan hubungan media pada wilayah kota',
            ],
            [
                'isi' => 'melaksanakan koordinasi, pemantauan, evaluasi, pelaporan dan pertanggungjawaban pelaksanaan tugas Suku Dinas Kota sesuai dengan lingkup tugasnya',
            ],
            [
                'isi' => 'melaksanakan tugas kedinasan lain yang diberikan oleh Kepala Suku Dinas',
            ],
        ]);
        DB::table('isijaringankomunikasidata')->insert([
            [
                'isi' => 'menyusun Rencana Strategis, Rencana Kerja dan Rencana Kerja dan Anggaran Dinas sesuai dengan lingkup tugasnya',
            ],
            [
                'isi' => 'melaksanakan Dokumen Pelaksanaan Anggaran Dinas sesuai dengan lingkup tugasnya',
            ],
            [
                'isi' => 'merumuskan kebijakan, proses bisnis, standar dan prosedur Suku Dinas Kota sesuai dengan lingkup tugasnya',
            ],
            [
                'isi' => 'melaksanakan kebijakan, proses bisnis, standar dan prosedur Suku Dinas Kota sesuai dengan lingkup tugasnya',
            ],
            [
                'isi' => 'melaksanakan penyelenggaraan layanan pusat data, infrastruktur informatika dan telekomunikasi pada wilayah kota',
            ],
            [
                'isi' => 'melaksanakan layanan pengembangan jaringan intranet dan penggunaan akses internet pada wilayah kota',
            ],
            [
                'isi' => 'melaksanakan layanan sistem komunikasi intra Pemerintah Daerah Provinsi pada wilayah kota',
            ],
            [
                'isi' => 'melaksanakan pengembangan sumber daya Teknologi Informasi dan Komunikasi (TIK) pada wilayah kota',
            ],
            [
                'isi' => 'melaksanakan ekosistem Provinsi cerdas pada wilayah kota',
            ],
            [
                'isi' => 'melaksanakan koordinasi, pemantauan, evaluasi, pelaporan dan pertanggungjawaban pelaksanaan tugas Suku Dinas Kota sesuai dengan lingkup tugasnya',
            ],
            [
                'isi' => 'melaksanakan tugas kedinasan lain yang diberikan oleh Kepala Suku Dinas',
            ],
        ]);
        DB::table('isisisteminformasisiberdansandi')->insert([
            [
                'isi' => 'menyusun Rencana Strategis, Rencana Kerja dan Rencana Kerja dan Anggaran Dinas sesuai dengan lingkup tugasnya',
            ],
            [
                'isi' => 'melaksanakan Dokumen Pelaksanaan Anggaran Dinas sesuai dengan lingkup tugasnya',
            ],
            [
                'isi' => 'merumuskan kebijakan, proses bisnis, standar dan prosedur Suku Dinas Kota sesuai dengan lingkup tugasnya',
            ],
            [
                'isi' => 'melaksanakan kebijakan, proses bisnis, standar dan prosedur Suku Dinas Kota sesuai dengan lingkup tugasnya',
            ],
            [
                'isi' => 'melaksanakan layanan keamanan informasi, siber dan sandi pada wilayah kota',
            ],
            [
                'isi' => 'melaksanakan fasilitasi perlindungan informasi pada kegiatan penting Pemerintah Daerah melalui teknik pengamanan gelombang frekuensi atau sinyal pada wilayah kota',
            ],
            [
                'isi' => 'melaksanakan layanan pemanfaatan sertifikat elektronik di Pemerintah Daerah pada wilayah kota',
            ],
            [
                'isi' => 'melaksanakan penanggulangan dan pemulihan insiden keamanan informasi pada wilayah kota',
            ],
            [
                'isi' => 'melaksanakan jaring komunikasi sandi pada wilayah kota',
            ],
            [
                'isi' => 'melaksanakan layanan aplikasi dan proses bisnis pemerintahan berbasis elektronik pada wilayah kota',
            ],
            [
                'isi' => 'melaksanakan fasilitasi dan optimalisasi basis data dan perangkat lunak penunjang sistem informasi manajemen pada wilayah kota',
            ],
            [
                'isi' => 'melaksanakan fasilitasi kegiatan statistik pada wilayah kota',
            ],
            [
                'isi' => 'melaksanakan koordinasi, pemantauan, evaluasi, pelaporan dan pertanggung jawaban pelaksanaan tugas Suku Dinas Kota sesuai dengan lingkup tugasnya',
            ],
            [
                'isi' => 'melaksanakan tugas kedinasan lain yang diberikan oleh Kepala Suku Dinas',
            ],
        ]);
        DB::table('pegawai')->insert([
            [
                'nama' => 'Nuruning Septarida',
                'nip' => '197309081993022001',
                'golongan' => 'IV/B',
                'jabatan' => 'Kepala Suku Dinas',
            ],
            [
                'nama' => 'Eva Monica P',
                'nip' => '197008181996032002/120994',
                'golongan' => 'IV A',
                'jabatan' => 'Kasubbag Tata Usaha',
            ],
            [
                'nama' => 'Dwi Sukarno Putro',
                'nip' => '198511242011011007',
                'golongan' => 'IIID',
                'jabatan' => 'Kasi Komunikasi dan Informasi Publik',
            ],
            [
                'nama' => 'Hadi R. Soemarto',
                'nip' => '197802142011011004',
                'golongan' => 'IIID',
                'jabatan' => 'Kasi Jaringan Komunikasi Data',
            ],
            [
                'nama' => 'Mawar Indah Puspitasari, S.Kom',
                'nip' => '198508242011012020',
                'golongan' => 'III D',
                'jabatan' => 'Kasi Sistem Informasi, Siber dan Sandi',
            ],
            [
                'nama' => 'Dra. Hetdy Duma Sari M',
                'nip' => '196508021993022001/131308',
                'golongan' => 'III D',
                'jabatan' => 'Staf',
            ],
            [
                'nama' => 'Rodin Daulat G.T, S.Sos',
                'nip' => '197402282014082014/188427',
                'golongan' => 'III B',
                'jabatan' => 'Staf',
            ],
            [
                'nama' => 'Elly Shalihah, S.IKom',
                'nip' => '198212282008012012/169035',
                'golongan' => 'III B',
                'jabatan' => 'Staf',
            ],
            [
                'nama' => 'Fikri Muhammad, A.Md.I.Kom',
                'nip' => '199610122020121005',
                'golongan' => 'II C',
                'jabatan' => 'Staf',
            ],
            [
                'nama' => 'Rizki Jamaludin Hanif',
                'nip' => '199406082020121011',
                'golongan' => 'II C',
                'jabatan' => 'Staf',
            ],
            [
                'nama' => 'Arifiadi Patahuddin',
                'nip' => '198709092020121011',
                'golongan' => 'PENGATUR (II/C)',
                'jabatan' => 'Staf',
            ],
        ]);
        DB::table('tenaga_ahli')->insert([
            [
                'nama' => 'Idham Mubarak, S.Kom',
                'seksi' => 'Komunikasi dan Informasi Publik',
                'bidang' => 'Editor Video',
            ],
            [
                'nama' => 'Ajid Hendarto, S.Kom.I',
                'seksi' => 'Komunikasi dan Informasi Publik',
                'bidang' => 'Reporter',
            ],
            [
                'nama' => 'Suryaman',
                'seksi' => 'Komunikasi dan Informasi Publik',
                'bidang' => 'Kameramen',
            ],
            [
                'nama' => 'Shiwi Anggoro Mulyo',
                'seksi' => 'Komunikasi dan Informasi Publik',
                'bidang' => 'Computer Operator',
            ],
            [
                'nama' => 'Sunarti',
                'seksi' => 'Sistem Informasi, Siber dan Sandi',
                'bidang' => 'Technical Support',
            ],
            [
                'nama' => 'Kasimun',
                'seksi' => 'Jaringan Komunikasi Data',
                'bidang' => 'Technical Support',
            ],
            [
                'nama' => 'Arif Ruli',
                'seksi' => 'Jaringan Komunikasi Data',
                'bidang' => 'Technical Support',
            ],
            [
                'nama' => 'Hamdani Wibisono',
                'seksi' => 'Jaringan Komunikasi Data',
                'bidang' => 'Technical Support',
            ],
            [
                'nama' => 'Haviz Alfan',
                'seksi' => 'Jaringan Komunikasi Data',
                'bidang' => 'Technical Support',
            ],
            [
                'nama' => 'Tri Sutrisno',
                'seksi' => 'Jaringan Komunikasi Data',
                'bidang' => 'Technical Support',
            ],
            [
                'nama' => 'Muhamad Zulfikar',
                'seksi' => 'Sistem Informasi, Siber dan Sandi',
                'bidang' => 'Web Aplikasi',
            ],
            [
                'nama' => 'Ariansyah',
                'seksi' => 'Sistem Informasi, Siber dan Sandi',
                'bidang' => 'Master Programmer',
            ],
            [
                'nama' => 'Denovensa Agra Saktrina',
                'seksi' => 'Komunikasi dan Informasi Publik',
                'bidang' => 'Fotografer',
            ],
            [
                'nama' => 'Jonathan Permana Siahaan',
                'seksi' => 'Komunikasi dan Informasi Publik',
                'bidang' => 'Reporter',
            ],
            [
                'nama' => 'Adhitya Pratama Putra',
                'seksi' => 'Komunikasi dan Informasi Publik',
                'bidang' => 'Fotografer',
            ],
            [
                'nama' => 'Atiyah',
                'seksi' => 'Komunikasi dan Informasi Publik',
                'bidang' => 'Redaktur Bahasa Indonesia',
            ],
            [
                'nama' => 'Oscar Julianto Lukito Putro',
                'seksi' => 'Komunikasi dan Informasi Publik',
                'bidang' => 'Kameramen',
            ],
            [
                'nama' => 'Aria Jaya Triyana',
                'seksi' => 'Komunikasi dan Informasi Publik',
                'bidang' => 'Desain Grafis',
            ],
            [
                'nama' => 'Dimas Aditya',
                'seksi' => 'Komunikasi dan Informasi Publik',
                'bidang' => 'Multimedia',
            ],
            [
                'nama' => 'Lungguh Syam',
                'seksi' => 'Jaringan Komunikasi Data',
                'bidang' => 'Technical Support',
            ],
            [
                'nama' => 'Arif Nurjaman',
                'seksi' => 'Jaringan Komunikasi Data',
                'bidang' => 'Technical Support',
            ],
            [
                'nama' => 'Adhi Wibowo',
                'seksi' => 'Jaringan Komunikasi Data',
                'bidang' => 'Technical Support',
            ],
            [
                'nama' => 'Alvian Kurnadi',
                'seksi' => 'Jaringan Komunikasi Data',
                'bidang' => 'Technical Support',
            ],
            [
                'nama' => 'Bima Pratama',
                'seksi' => 'Jaringan Komunikasi Data',
                'bidang' => 'Technical Support',
            ],
            [
                'nama' => 'Andhika Wira Kusumah',
                'seksi' => 'Komunikasi dan Informasi Publik',
                'bidang' => 'Technical Support',
            ],
        ]);
        DB::table('daftarcctv')->insert([
            'judul' => 'Daftar CCTV',
            'body' => '<table align="center" border="2" cellpadding="0" cellspacing="0">
            <tbody>
                <tr>
                    <td rowspan="2">NO</td>
                    <td rowspan="2">LOKASI</td>
                    <td colspan="2">SURVEI CCTV</td>
                    <td>JUMLAH</td>
                    <td colspan="2" rowspan="2">KETERANGAN KECAMATAN/KELURAHAN&nbsp;</td>
                    <td>JUMLAH</td>
                    <td rowspan="2">KET</td>
                    <td>TOTAL</td>
                    <td rowspan="2">WILAYAH</td>
                    <td rowspan="2">FUNGSI</td>
                    <td rowspan="2">KETERANGAN</td>
                </tr>
                <tr>
                    <td>SUDAH</td>
                    <td>BELUM</td>
                    <td>GEDUNG/KELURAHAN</td>
                    <td>CCTV</td>
                    <td>CCTV</td>
                </tr>
                <tr>
                    <td>1</td>
                    <td>Walikota Jakarta Timur</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>Blok A</td>
                    <td>1</td>
                    <td>Seluruh Lantai</td>
                    <td>47</td>
                    <td>2014</td>
                    <td>65</td>
                    <td>Jakarta Timur</td>
                    <td>Aktif</td>
                    <td>Lokal</td>
                </tr>
                <tr>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>2</td>
                    <td>Ruang Walikota</td>
                    <td>4</td>
                    <td>2014</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>Aktif</td>
                    <td>Lokal</td>
                </tr>
                <tr>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>3</td>
                    <td>Ruang Wakil Walikota</td>
                    <td>4</td>
                    <td>2014</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>Aktif</td>
                    <td>Lokal</td>
                </tr>
                <tr>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>4</td>
                    <td>Ruang Sekko</td>
                    <td>4</td>
                    <td>2014</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>Aktif</td>
                    <td>Lokal</td>
                </tr>
                <tr>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>5</td>
                    <td>Pintu Gerbang</td>
                    <td>2</td>
                    <td>2014</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>Aktif</td>
                    <td>Lokal</td>
                </tr>
                <tr>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>6</td>
                    <td>Loby</td>
                    <td>1</td>
                    <td>2014</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>Aktif</td>
                    <td>Lokal</td>
                </tr>
                <tr>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>7</td>
                    <td>Lapangan</td>
                    <td>1</td>
                    <td>2014</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>Aktif</td>
                    <td>Lokal</td>
                </tr>
                <tr>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>8</td>
                    <td>Atap</td>
                    <td>2</td>
                    <td>2014</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>Aktif</td>
                    <td>Lokal</td>
                </tr>
                <tr>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                </tr>
                <tr>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>Blok B1</td>
                    <td>1</td>
                    <td>Bank DKI</td>
                    <td>1</td>
                    <td>2014</td>
                    <td>3</td>
                    <td>&nbsp;</td>
                    <td>Aktif</td>
                    <td>Lokal</td>
                </tr>
                <tr>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>2</td>
                    <td>Pintu Masuk</td>
                    <td>1</td>
                    <td>2014</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>Aktif</td>
                    <td>Lokal</td>
                </tr>
                <tr>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>3</td>
                    <td>Pengadaan Kominfomas</td>
                    <td>1</td>
                    <td>2014</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>Aktif</td>
                    <td>Lokal</td>
                </tr>
                <tr>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                </tr>
                <tr>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>Blok B2</td>
                    <td>1</td>
                    <td>Pintu Masuk Tata Ruang</td>
                    <td>1</td>
                    <td>2014</td>
                    <td>17</td>
                    <td>&nbsp;</td>
                    <td>Aktif</td>
                    <td>Lokal</td>
                </tr>
                <tr>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>2</td>
                    <td>Pintu Masuk Satpol PP</td>
                    <td>2</td>
                    <td>2014</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>Aktif</td>
                    <td>Lokal</td>
                </tr>
                <tr>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                </tr>
                <tr>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>Blok C</td>
                    <td>1</td>
                    <td>Ruang Serba Guna</td>
                    <td>12</td>
                    <td>2014</td>
                    <td>14</td>
                    <td>&nbsp;</td>
                    <td>Aktif</td>
                    <td>Lokal</td>
                </tr>
                <tr>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>2</td>
                    <td>Ruang Pengendalian</td>
                    <td>2</td>
                    <td>2014</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>Aktif</td>
                    <td>Lokal</td>
                </tr>
                <tr>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                </tr>
                <tr>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>Blok D</td>
                    <td>1</td>
                    <td>Seluruh Lantai (15 Lantai) @2 CCTV</td>
                    <td>30</td>
                    <td>2014</td>
                    <td>31</td>
                    <td>&nbsp;</td>
                    <td>Aktif</td>
                    <td>Lokal</td>
                </tr>
                <tr>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>2</td>
                    <td>Lantai 16</td>
                    <td>1</td>
                    <td>2014</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>Aktif</td>
                    <td>Lokal</td>
                </tr>
                <tr>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>Kecamatan Matraman</td>
                    <td>&radic;</td>
                    <td>&nbsp;</td>
                    <td>6 Kelurahan</td>
                    <td>1.</td>
                    <td>Kecamatan Matraman</td>
                    <td>3</td>
                    <td>2016</td>
                    <td>32</td>
                    <td>Jakarta Timur</td>
                    <td>Aktif</td>
                    <td>Lokal</td>
                </tr>
                <tr>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>2.</td>
                    <td>Kelurahan Pisangan Baru</td>
                    <td>4</td>
                    <td>2016</td>
                    <td>&nbsp;</td>
                    <td>Jakarta Timur</td>
                    <td>Aktif</td>
                    <td>Lokal</td>
                </tr>
                <tr>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>3.</td>
                    <td>Kelurahan Utan Kayu Selatan</td>
                    <td>3</td>
                    <td>2016</td>
                    <td>&nbsp;</td>
                    <td>Jakarta Timur</td>
                    <td>Aktif</td>
                    <td>Lokal</td>
                </tr>
                <tr>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>4.</td>
                    <td>Kelurahan Utan Kayu Utara</td>
                    <td>4</td>
                    <td>2016</td>
                    <td>&nbsp;</td>
                    <td>Jakarta Timur</td>
                    <td>Aktif</td>
                    <td>Lokal</td>
                </tr>
                <tr>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>5.</td>
                    <td>Kelurahan kayu Manis</td>
                    <td>8</td>
                    <td>2016</td>
                    <td>&nbsp;</td>
                    <td>Jakarta Timur</td>
                    <td>Aktif</td>
                    <td>Lokal</td>
                </tr>
                <tr>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>6.</td>
                    <td>Kelurahan Pal Meriam</td>
                    <td>6</td>
                    <td>2016</td>
                    <td>&nbsp;</td>
                    <td>Jakarta Timur</td>
                    <td>Aktif</td>
                    <td>Lokal</td>
                </tr>
                <tr>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>7.</td>
                    <td>Kelurahan Kebon Manggis</td>
                    <td>4</td>
                    <td>2016</td>
                    <td>&nbsp;</td>
                    <td>Jakarta Timur</td>
                    <td>Aktif</td>
                    <td>Lokal</td>
                </tr>
                <tr>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>Kecamatan Pulogadung</td>
                    <td>&radic;</td>
                    <td>&nbsp;</td>
                    <td>6 Kelurahan</td>
                    <td>1.</td>
                    <td>Kecamatan Pulogadung</td>
                    <td>4</td>
                    <td>2014</td>
                    <td>34</td>
                    <td>Jakarta Timur</td>
                    <td>Aktif</td>
                    <td>Lokal</td>
                </tr>
                <tr>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>2.</td>
                    <td>Kelurahan Pulogadung</td>
                    <td>4</td>
                    <td>2016</td>
                    <td>&nbsp;</td>
                    <td>Jakarta Timur</td>
                    <td>Aktif</td>
                    <td>Lokal</td>
                </tr>
                <tr>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>3.</td>
                    <td>Kelurahan Kayu Putih</td>
                    <td>4</td>
                    <td>2016</td>
                    <td>&nbsp;</td>
                    <td>Jakarta Timur</td>
                    <td>Aktif</td>
                    <td>Lokal</td>
                </tr>
                <tr>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>4.</td>
                    <td>Kelurahan Jati</td>
                    <td>8</td>
                    <td>2014</td>
                    <td>&nbsp;</td>
                    <td>Jakarta Timur</td>
                    <td>Aktif</td>
                    <td>Lokal</td>
                </tr>
                <tr>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>5.</td>
                    <td>Kelurahan Rawamangun</td>
                    <td>4</td>
                    <td>2016</td>
                    <td>&nbsp;</td>
                    <td>Jakarta Timur</td>
                    <td>Aktif</td>
                    <td>Lokal</td>
                </tr>
                <tr>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>6.</td>
                    <td>Kelurahan Pisangan Timur</td>
                    <td>6</td>
                    <td>2014</td>
                    <td>&nbsp;</td>
                    <td>Jakarta Timur</td>
                    <td>Aktif</td>
                    <td>Lokal</td>
                </tr>
                <tr>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>7.</td>
                    <td>Kelurahan Cipinang</td>
                    <td>4</td>
                    <td>2014</td>
                    <td>&nbsp;</td>
                    <td>Jakarta Timur</td>
                    <td>Aktif</td>
                    <td>Lokal</td>
                </tr>
                <tr>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                </tr>
                <tr>
                    <td>4</td>
                    <td>Kecamatan Jatinegara</td>
                    <td>&radic;</td>
                    <td>&nbsp;</td>
                    <td>8 Kelurahan</td>
                    <td>1.</td>
                    <td>Kecamatan Jatinegara</td>
                    <td>4</td>
                    <td>2016</td>
                    <td>31</td>
                    <td>Jakarta Timur</td>
                    <td>Aktif</td>
                    <td>Lokal</td>
                </tr>
                <tr>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>2.</td>
                    <td>Kelurahan bali Mester</td>
                    <td>0</td>
                    <td>2016</td>
                    <td>&nbsp;</td>
                    <td>Jakarta Timur</td>
                    <td>Aktif</td>
                    <td>Lokal</td>
                </tr>
                <tr>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>3.</td>
                    <td>Kelurahan Kampung Melayu</td>
                    <td>4</td>
                    <td>2016</td>
                    <td>&nbsp;</td>
                    <td>Jakarta Timur</td>
                    <td>Aktif</td>
                    <td>Lokal</td>
                </tr>
                <tr>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>4.</td>
                    <td>Kelurahan Bidaracina</td>
                    <td>4</td>
                    <td>2016</td>
                    <td>&nbsp;</td>
                    <td>Jakarta Timur</td>
                    <td>Aktif</td>
                    <td>Lokal</td>
                </tr>
                <tr>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>5.</td>
                    <td>Kelurahan Cipinang Cempedak</td>
                    <td>0</td>
                    <td>2016</td>
                    <td>&nbsp;</td>
                    <td>Jakarta Timur</td>
                    <td>-</td>
                    <td>tidak ada CCTV</td>
                </tr>
                <tr>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>6.</td>
                    <td>Kelurahan Rawa Bunga</td>
                    <td>5</td>
                    <td>2016</td>
                    <td>&nbsp;</td>
                    <td>Jakarta Timur</td>
                    <td>Aktif</td>
                    <td>Lokal</td>
                </tr>
                <tr>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>7.</td>
                    <td>Kelurahan Cipinang Besar Utara</td>
                    <td>4</td>
                    <td>2016</td>
                    <td>&nbsp;</td>
                    <td>Jakarta Timur</td>
                    <td>Aktif</td>
                    <td>perangkat rusak</td>
                </tr>
                <tr>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>8.</td>
                    <td>Kelurahan Cipinang Besar Selatan</td>
                    <td>4</td>
                    <td>2016</td>
                    <td>&nbsp;</td>
                    <td>Jakarta Timur</td>
                    <td>Aktif</td>
                    <td>Lokal</td>
                </tr>
                <tr>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>9.</td>
                    <td>Kelurahan Cipinang Muara</td>
                    <td>6</td>
                    <td>2016</td>
                    <td>&nbsp;</td>
                    <td>Jakarta Timur</td>
                    <td>Aktif</td>
                    <td>Lokal</td>
                </tr>
                <tr>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                </tr>
                <tr>
                    <td>5.</td>
                    <td>Kecamatan Duren Sawit</td>
                    <td>&radic;</td>
                    <td>&nbsp;</td>
                    <td>7 Kelurahan</td>
                    <td>1.</td>
                    <td>Kecamatan Duren Sawit</td>
                    <td>0</td>
                    <td>2014</td>
                    <td>31</td>
                    <td>Jakarta Timur</td>
                    <td>-</td>
                    <td>tidak ada CCTV</td>
                </tr>
                <tr>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>2.</td>
                    <td>Kelurahan Pondok Bambu</td>
                    <td>4</td>
                    <td>2016</td>
                    <td>&nbsp;</td>
                    <td>Jakarta Timur</td>
                    <td>Aktif</td>
                    <td>Lokal</td>
                </tr>
                <tr>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>3.</td>
                    <td>Kelurahan Duren Sawit</td>
                    <td>4</td>
                    <td>2016</td>
                    <td>&nbsp;</td>
                    <td>Jakarta Timur</td>
                    <td>Aktif</td>
                    <td>Lokal</td>
                </tr>
                <tr>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>4.</td>
                    <td>Kelurahan Pondok Kelapa</td>
                    <td>6</td>
                    <td>2016</td>
                    <td>&nbsp;</td>
                    <td>Jakarta Timur</td>
                    <td>Aktif</td>
                    <td>Lokal</td>
                </tr>
                <tr>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>5.</td>
                    <td>Kelurahan Pondok Kopi</td>
                    <td>4</td>
                    <td>2016</td>
                    <td>&nbsp;</td>
                    <td>Jakarta Timur</td>
                    <td>Aktif</td>
                    <td>Lokal</td>
                </tr>
                <tr>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>6.</td>
                    <td>Kelurahan Malaka Jaya</td>
                    <td>4</td>
                    <td>2016</td>
                    <td>&nbsp;</td>
                    <td>Jakarta Timur</td>
                    <td>Aktif</td>
                    <td>Lokal</td>
                </tr>
                <tr>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>7.</td>
                    <td>Kelurahan Malaka Sari</td>
                    <td>6</td>
                    <td>2016</td>
                    <td>&nbsp;</td>
                    <td>Jakarta Timur</td>
                    <td>Aktif</td>
                    <td>Lokal</td>
                </tr>
                <tr>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>8.</td>
                    <td>KelurahanKlender</td>
                    <td>3</td>
                    <td>2016</td>
                    <td>&nbsp;</td>
                    <td>Jakarta Timur</td>
                    <td>Aktif</td>
                    <td>Lokal</td>
                </tr>
                <tr>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                </tr>
                <tr>
                    <td>6.</td>
                    <td>Kecamatan Kramat Jati</td>
                    <td>&radic;</td>
                    <td>&nbsp;</td>
                    <td>7 Kelurahan</td>
                    <td>1.</td>
                    <td>Kecamatan Kramat Jati</td>
                    <td>0</td>
                    <td>2014</td>
                    <td>37</td>
                    <td>Jakarta Timur</td>
                    <td>-</td>
                    <td>tidak ada CCTV</td>
                </tr>
                <tr>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>2.</td>
                    <td>Kelurahan Kramat Jati</td>
                    <td>4</td>
                    <td>2014</td>
                    <td>&nbsp;</td>
                    <td>Jakarta Timur</td>
                    <td>Aktif</td>
                    <td>Lokal</td>
                </tr>
                <tr>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>3.</td>
                    <td>Kelurahan Batu Ampar</td>
                    <td>0</td>
                    <td>2014</td>
                    <td>&nbsp;</td>
                    <td>Jakarta Timur</td>
                    <td>Aktif</td>
                    <td>Lokal</td>
                </tr>
                <tr>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>4.</td>
                    <td>Kelurahan Bale Kambang</td>
                    <td>4</td>
                    <td>2014</td>
                    <td>&nbsp;</td>
                    <td>Jakarta Timur</td>
                    <td>Aktif</td>
                    <td>Lokal</td>
                </tr>
                <tr>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>5.</td>
                    <td>Kelurahan Kampung Tengah</td>
                    <td>12</td>
                    <td>2016</td>
                    <td>&nbsp;</td>
                    <td>Jakarta Timur</td>
                    <td>Aktif</td>
                    <td>Lokal</td>
                </tr>
                <tr>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>6.</td>
                    <td>Kelurahan Dukuh</td>
                    <td>3</td>
                    <td>2014</td>
                    <td>&nbsp;</td>
                    <td>Jakarta Timur</td>
                    <td>Aktif</td>
                    <td>Lokal</td>
                </tr>
                <tr>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>7.</td>
                    <td>Kelurahan Cawang</td>
                    <td>14</td>
                    <td>2014</td>
                    <td>&nbsp;</td>
                    <td>Jakarta Timur</td>
                    <td>Aktif</td>
                    <td>Lokal</td>
                </tr>
                <tr>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>8.</td>
                    <td>Kelurahan Cililitan</td>
                    <td>0</td>
                    <td>2014</td>
                    <td>&nbsp;</td>
                    <td>Jakarta Timur</td>
                    <td>-</td>
                    <td>tidak ada CCTV</td>
                </tr>
                <tr>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                </tr>
                <tr>
                    <td>7.</td>
                    <td>Kecamatan Makasar</td>
                    <td>&radic;</td>
                    <td>&nbsp;</td>
                    <td>5 Kelurahan</td>
                    <td>1.</td>
                    <td>Kecamatan Makasar</td>
                    <td>0</td>
                    <td>2014</td>
                    <td>17</td>
                    <td>Jakarta Timur</td>
                    <td>-</td>
                    <td>tidak ada CCTV</td>
                </tr>
                <tr>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>2.</td>
                    <td>Kelurahan Makasar</td>
                    <td>0</td>
                    <td>2014</td>
                    <td>&nbsp;</td>
                    <td>Jakarta Timur</td>
                    <td>-</td>
                    <td>tidak ada CCTV</td>
                </tr>
                <tr>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>3.</td>
                    <td>Kelurahan Pinang Ranti</td>
                    <td>4</td>
                    <td>2016</td>
                    <td>&nbsp;</td>
                    <td>Jakarta Timur</td>
                    <td>Aktif</td>
                    <td>Lokal</td>
                </tr>
                <tr>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>4.</td>
                    <td>Kelurahan Halim PK</td>
                    <td>6</td>
                    <td>2014</td>
                    <td>&nbsp;</td>
                    <td>Jakarta Timur</td>
                    <td>Aktif</td>
                    <td>Lokal</td>
                </tr>
                <tr>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>5.</td>
                    <td>Kelurahan Cipinang Melayu</td>
                    <td>3</td>
                    <td>2014</td>
                    <td>&nbsp;</td>
                    <td>Jakarta Timur</td>
                    <td>Aktif</td>
                    <td>Lokal</td>
                </tr>
                <tr>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>6.</td>
                    <td>Kelurahan Kebon Pala</td>
                    <td>4</td>
                    <td>2014</td>
                    <td>&nbsp;</td>
                    <td>Jakarta Timur</td>
                    <td>Aktif</td>
                    <td>Lokal</td>
                </tr>
                <tr>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                </tr>
                <tr>
                    <td>8.</td>
                    <td>Kecamatan Pasar Rebo</td>
                    <td>&radic;</td>
                    <td>&nbsp;</td>
                    <td>5 Kelurahan</td>
                    <td>1.</td>
                    <td>Kecamatan Pasar Rebo</td>
                    <td>0</td>
                    <td>2014</td>
                    <td>23</td>
                    <td>Jakarta Timur</td>
                    <td>-</td>
                    <td>tidak ada CCTV</td>
                </tr>
                <tr>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>2.</td>
                    <td>Kelurahan Pekayon</td>
                    <td>0</td>
                    <td>2014</td>
                    <td>&nbsp;</td>
                    <td>Jakarta Timur</td>
                    <td>-</td>
                    <td>tidak ada CCTV</td>
                </tr>
                <tr>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>3.</td>
                    <td>Kelurahan Kampung Gedong</td>
                    <td>4</td>
                    <td>2014</td>
                    <td>&nbsp;</td>
                    <td>Jakarta Timur</td>
                    <td>Aktif&nbsp;</td>
                    <td>Lokal</td>
                </tr>
                <tr>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>4.</td>
                    <td>Kelurahan Cipayung</td>
                    <td>3</td>
                    <td>2016</td>
                    <td>&nbsp;</td>
                    <td>Jakarta Timur</td>
                    <td>Aktif&nbsp;</td>
                    <td>Lokal</td>
                </tr>
                <tr>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>5.</td>
                    <td>Kelurahan Kampung Baru</td>
                    <td>0</td>
                    <td>2014</td>
                    <td>&nbsp;</td>
                    <td>Jakarta Timur</td>
                    <td>Aktif&nbsp;</td>
                    <td>Lokal</td>
                </tr>
                <tr>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>6.</td>
                    <td>Kelurahan Kali Sari</td>
                    <td>4</td>
                    <td>2016</td>
                    <td>&nbsp;</td>
                    <td>Jakarta Timur</td>
                    <td>Aktif&nbsp;</td>
                    <td>Lokal</td>
                </tr>
                <tr>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>7</td>
                    <td>Kelurahan Cijantung</td>
                    <td>12</td>
                    <td>2016</td>
                    <td>&nbsp;</td>
                    <td>Jakarta Timur</td>
                    <td>Aktif&nbsp;</td>
                    <td>Lokal</td>
                </tr>
                <tr>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                </tr>
                <tr>
                    <td>9.</td>
                    <td>Kecamatan Ciracas</td>
                    <td>&radic;</td>
                    <td>&nbsp;</td>
                    <td>5 Kelurahan</td>
                    <td>1.</td>
                    <td>Kecamatan Ciracas</td>
                    <td>8</td>
                    <td>2016</td>
                    <td>25</td>
                    <td>Jakarta Timur</td>
                    <td>Aktif</td>
                    <td>Lokal</td>
                </tr>
                <tr>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>2.</td>
                    <td>Kelurahan Ciracas</td>
                    <td>5</td>
                    <td>2016</td>
                    <td>&nbsp;</td>
                    <td>Jakarta Timur</td>
                    <td>-</td>
                    <td>tidak ada CCTV</td>
                </tr>
                <tr>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>3.</td>
                    <td>Kelurahan Cibubur</td>
                    <td>4</td>
                    <td>2014</td>
                    <td>&nbsp;</td>
                    <td>Jakarta Timur</td>
                    <td>Aktif</td>
                    <td>Lokal</td>
                </tr>
                <tr>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>4</td>
                    <td>Kelurahan Kelapa Dua Wetan</td>
                    <td>4</td>
                    <td>2014</td>
                    <td>&nbsp;</td>
                    <td>Jakarta Timur</td>
                    <td>Aktif</td>
                    <td>Lokal</td>
                </tr>
                <tr>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>5</td>
                    <td>Kelurahan Susukan</td>
                    <td>4</td>
                    <td>2014</td>
                    <td>&nbsp;</td>
                    <td>Jakarta Timur</td>
                    <td>Aktif</td>
                    <td>Lokal</td>
                </tr>
                <tr>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>6</td>
                    <td>Kelurahan Kampung Rambutan</td>
                    <td>0</td>
                    <td>2014</td>
                    <td>&nbsp;</td>
                    <td>Jakarta Timur</td>
                    <td>-</td>
                    <td>tidak ada CCTV</td>
                </tr>
                <tr>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                </tr>
                <tr>
                    <td>10</td>
                    <td>Kecamatan Cipayung</td>
                    <td>&radic;</td>
                    <td>&nbsp;</td>
                    <td>8 Kelurahan</td>
                    <td>1</td>
                    <td>Kecamatan Cipayung</td>
                    <td>4</td>
                    <td>2014</td>
                    <td>27</td>
                    <td>Jakarta Timur</td>
                    <td>Aktif</td>
                    <td>Lokal</td>
                </tr>
                <tr>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>2</td>
                    <td>Kelurahan Lubang Buaya</td>
                    <td>0</td>
                    <td>2014</td>
                    <td>&nbsp;</td>
                    <td>Jakarta Timur</td>
                    <td>-</td>
                    <td>tidak ada CCTV</td>
                </tr>
                <tr>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>3</td>
                    <td>Kelurahan Ceger</td>
                    <td>4</td>
                    <td>2016</td>
                    <td>&nbsp;</td>
                    <td>Jakarta Timur</td>
                    <td>Aktif</td>
                    <td>Lokal</td>
                </tr>
                <tr>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>4</td>
                    <td>Kelurahan Cipayung</td>
                    <td>3</td>
                    <td>2014</td>
                    <td>&nbsp;</td>
                    <td>Jakarta Timur</td>
                    <td>Aktif</td>
                    <td>Lokal</td>
                </tr>
                <tr>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>5</td>
                    <td>Kelurahan Munjul</td>
                    <td>4</td>
                    <td>2014</td>
                    <td>&nbsp;</td>
                    <td>Jakarta Timur</td>
                    <td>Aktif</td>
                    <td>Lokal</td>
                </tr>
                <tr>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>6</td>
                    <td>Kelurahan Pondok Rangon</td>
                    <td>4</td>
                    <td>2014</td>
                    <td>&nbsp;</td>
                    <td>Jakarta Timur</td>
                    <td>Aktif</td>
                    <td>Lokal</td>
                </tr>
                <tr>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>7</td>
                    <td>Kelurahan Cilangkap</td>
                    <td>4</td>
                    <td>2016</td>
                    <td>&nbsp;</td>
                    <td>Jakarta Timur</td>
                    <td>Aktif</td>
                    <td>Lokal</td>
                </tr>
                <tr>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>8</td>
                    <td>Kelurahan Setu</td>
                    <td>4</td>
                    <td>2014</td>
                    <td>&nbsp;</td>
                    <td>Jakarta Timur</td>
                    <td>Aktif</td>
                    <td>Lokal</td>
                </tr>
                <tr>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>9</td>
                    <td>Kelurahan Bambu Apus</td>
                    <td>0</td>
                    <td>2014</td>
                    <td>&nbsp;</td>
                    <td>Jakarta Timur</td>
                    <td>-</td>
                    <td>tidak ada CCTV</td>
                </tr>
                <tr>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                </tr>
                <tr>
                    <td>11</td>
                    <td>Kecamatan Cakung</td>
                    <td>&radic;</td>
                    <td>&nbsp;</td>
                    <td>7 Kelurahan</td>
                    <td>1</td>
                    <td>Kecamatan Cakung</td>
                    <td>4</td>
                    <td>2016</td>
                    <td>32</td>
                    <td>Jakarta Timur</td>
                    <td>Aktif</td>
                    <td>Lokal</td>
                </tr>
                <tr>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>2</td>
                    <td>Kelurahan Cakung Barat</td>
                    <td>4</td>
                    <td>2016</td>
                    <td>&nbsp;</td>
                    <td>Jakarta Timur</td>
                    <td>Aktif</td>
                    <td>Lokal</td>
                </tr>
                <tr>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>3</td>
                    <td>Kelurahan Cskung Timur</td>
                    <td>4</td>
                    <td>2016</td>
                    <td>&nbsp;</td>
                    <td>Jakarta Timur</td>
                    <td>Aktif</td>
                    <td>Lokal</td>
                </tr>
                <tr>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>4</td>
                    <td>Kelurahan Rawa Terate</td>
                    <td>4</td>
                    <td>2016</td>
                    <td>&nbsp;</td>
                    <td>Jakarta Timur</td>
                    <td>Aktif</td>
                    <td>Lokal</td>
                </tr>
                <tr>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>5</td>
                    <td>Kelurahan Jatinegara</td>
                    <td>4</td>
                    <td>2016</td>
                    <td>&nbsp;</td>
                    <td>Jakarta Timur</td>
                    <td>Aktif</td>
                    <td>Lokal</td>
                </tr>
                <tr>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>6</td>
                    <td>Kelurahan Penggilingan</td>
                    <td>4</td>
                    <td>2016</td>
                    <td>&nbsp;</td>
                    <td>Jakarta Timur</td>
                    <td>Aktif</td>
                    <td>Lokal</td>
                </tr>
                <tr>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>7</td>
                    <td>Kelurahan Pulo Gebang</td>
                    <td>4</td>
                    <td>2016</td>
                    <td>&nbsp;</td>
                    <td>Jakarta Timur</td>
                    <td>Aktif</td>
                    <td>Lokal</td>
                </tr>
                <tr>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>8</td>
                    <td>Kelurahan Ujung Menteng</td>
                    <td>4</td>
                    <td>2016</td>
                    <td>&nbsp;</td>
                    <td>Jakarta Timur</td>
                    <td>Aktif</td>
                    <td>Lokal</td>
                </tr>
            </tbody>
        </table>',
        ]);
        DB::table('informasi_keuangan')->insert([
            [
                'sub_menu' => 'Syarat - Syarat Dokumen Pengadaan Langsung Tenaga Ahli',
                'pdf' => 'tupoksi.pdf',
            ],
            [
                'sub_menu' => 'Syarat - Syarat Pengajuan SPP LS',
                'pdf' => 'tupoksi.pdf',
            ],
            [
                'sub_menu' => 'Syarat - Syarat Pengajuan SPP UP/GU',
                'pdf' => 'tupoksi.pdf',
            ],
            [
                'sub_menu' => 'Syarat - Syarat DokumenBelanja Langsung',
                'pdf' => 'tupoksi.pdf',
            ],
            [
                'sub_menu' => 'Syarat - Syarat Dokumen Pengadaan Langsung Barang / Jasa',
                'pdf' => 'tupoksi.pdf',
            ],
        ]);
        DB::table('informasi_kepegawaian')->insert([
            [
                'sub_menu' => 'Data Pegawai',
                'pdf' => 'tupoksi.pdf',
            ],
            [
                'sub_menu' => 'Rekap Pegawai Cuti',
                'pdf' => 'tupoksi.pdf',
            ],
            [
                'sub_menu' => 'Syarat-Syarat Pengajuan Kenaikan Pangkat',
                'pdf' => 'tupoksi.pdf',
            ],
            [
                'sub_menu' => 'Syarat-Syarat Pengajuan Penyesuaian Ijazah',
                'pdf' => 'tupoksi.pdf',
            ],
            [
                'sub_menu' => 'Syarat-Syarat Pengajuan Penghargaan',
                'pdf' => 'tupoksi.pdf',
            ],
        ]);
        DB::table('wartawan')->insert([
            [
                'nama' => 'Ariesta',
                'jenis_media' => 'TV',
                'media' => 'Elshinta TV',
            ],
            [
                'nama' => 'Rio Manik',
                'jenis_media' => 'TV',
                'media' => 'RCTI/ MNC TV',
            ],
            [
                'nama' => 'Anwar Sadat',
                'jenis_media' => 'TV',
                'media' => 'Viva News',
            ],
            [
                'nama' => 'Riski',
                'jenis_media' => 'TV',
                'media' => 'InewsTV',
            ],
            [
                'nama' => 'Imam Subroto',
                'jenis_media' => 'TV',
                'media' => 'MNC TV',
            ],
            [
                'nama' => 'Bowo',
                'jenis_media' => 'TV',
                'media' => 'SCTV',
            ],
            [
                'nama' => 'Nugroho',
                'jenis_media' => 'TV',
                'media' => 'Detik TV',
            ],
            [
                'nama' => 'Noval',
                'jenis_media' => 'TV',
                'media' => 'Net TV',
            ],
            [
                'nama' => 'Sumantri',
                'jenis_media' => 'TV',
                'media' => 'Metro TV',
            ],
            [
                'nama' => 'Stev man',
                'jenis_media' => 'TV',
                'media' => 'Berita Satu TV',
            ],
            [
                'nama' => 'Subadri',
                'jenis_media' => 'TV',
                'media' => 'Indosiar TV',
            ],
            [
                'nama' => 'Apank',
                'jenis_media' => 'TV',
                'media' => 'Trans 7',
            ],
            [
                'nama' => 'Efrizal',
                'jenis_media' => 'TV',
                'media' => 'Trans 7',
            ],
            [
                'nama' => 'Joko Puji Olay',
                'jenis_media' => 'TV',
                'media' => 'Jak TV',
            ],
            [
                'nama' => 'Nizar',
                'jenis_media' => 'TV',
                'media' => 'Kompas TV',
            ],
            [
                'nama' => 'Ardi Praseno',
                'jenis_media' => 'TV',
                'media' => 'Kompas TV',
            ],
            [
                'nama' => 'Simon Tobing',
                'jenis_media' => 'TV',
                'media' => 'TV One',
            ],
            [
                'nama' => 'Ario',
                'jenis_media' => 'TV',
                'media' => 'AN TV',
            ],
            [
                'nama' => 'Malau Colin',
                'jenis_media' => 'TV',
                'media' => 'RTV',
            ],
            [
                'nama' => 'Gunawan Sugro',
                'jenis_media' => 'TV',
                'media' => 'CNN Indonesia',
            ],
            [
                'nama' => 'Erri',
                'jenis_media' => 'TV',
                'media' => 'TV Plus',
            ],
            [
                'nama' => 'Robertus',
                'jenis_media' => 'Website',
                'media' => 'Kompas.com',
            ],
            [
                'nama' => 'Edo',
                'jenis_media' => 'Website',
                'media' => 'Detik.com',
            ],
            [
                'nama' => 'Nanda',
                'jenis_media' => 'Website',
                'media' => 'liputan6.com',
            ],
            [
                'nama' => 'Rona',
                'jenis_media' => 'Website',
                'media' => 'Merdeka.com',
            ],
            [
                'nama' => 'Nurito',
                'jenis_media' => 'Website',
                'media' => 'beritajakarta.com',
            ],
            [
                'nama' => 'Wahyu',
                'jenis_media' => 'Website',
                'media' => 'beritajakarta.com',
            ],
            [
                'nama' => 'Imam',
                'jenis_media' => 'Website',
                'media' => 'Merdeka.com',
            ],
            [
                'nama' => 'Ade',
                'jenis_media' => 'Website',
                'media' => 'Inilah.com',
            ],
            [
                'nama' => 'Samsul',
                'jenis_media' => 'Website',
                'media' => 'okezone',
            ],
            [
                'nama' => 'Wahyu Aji',
                'jenis_media' => 'Website',
                'media' => 'tribune.com',
            ],
            ['nama' => 'Madina', 'jenis_media' => 'Media Cetak', 'media' => 'Kompas'],
            ['nama' => 'Joko', 'jenis_media' => 'Media Cetak', 'media' => 'Wartakota'],
            ['nama' => 'Adi', 'jenis_media' => 'Media Cetak', 'media' => 'Lampu Hijau'],
            ['nama' => 'Akmal', 'jenis_media' => 'Media Cetak', 'media' => 'Media Indonesia'],
            ['nama' => 'Bagja', 'jenis_media' => 'Media Cetak', 'media' => 'Sindo'],
            ['nama' => 'Priska', 'jenis_media' => 'Media Cetak', 'media' => 'Suara Pembaruan'],
            ['nama' => 'Harits', 'jenis_media' => 'Media Cetak', 'media' => 'Jawa Pos'],
            ['nama' => 'Dede', 'jenis_media' => 'Media Cetak', 'media' => 'Jurnas'],
            ['nama' => 'Ebe', 'jenis_media' => 'Media Cetak', 'media' => 'Tempo'],
            ['nama' => 'Ifand,Junius S', 'jenis_media' => 'Media Cetak', 'media' => 'Poskota'],
            ['nama' => 'Amin', 'jenis_media' => 'Media Cetak', 'media' => 'Infonitas'],
            ['nama' => 'Putra', 'jenis_media' => 'Media Cetak', 'media' => 'Tiga Pilar'],
            ['nama' => 'Ahmad', 'jenis_media' => 'Media Cetak', 'media' => 'Lihat Jakarta'],
            ['nama' => 'Dasril', 'jenis_media' => 'Media Cetak', 'media' => 'Nur Foto'],
            ['nama' => 'Rahma', 'jenis_media' => 'Media Cetak', 'media' => 'Republika'],
            ['nama' => 'Joko', 'jenis_media' => 'Radio', 'media' => 'Elshinta Radio'],
        ]);
        DB::table('galeripegawai')->insert([
            [
                'nama' => 'Agung Andhika, S.Kom',
                'bagian' => 'Jaringan Komunikasi Data',
                'status' => 'Pegawai',
                'foto' => 'agung.jpg',
            ],
            [
                'nama' => 'Rentina Romauli, S,Kom',
                'bagian' => 'Jaringan Komunikasi Data',
                'status' => 'Pegawai',
                'foto' => 'rentina.jpg',
            ],
            [
                'nama' => 'Dra. Hetdy Duma Sari M',
                'bagian' => 'Jaringan Komunikasi Data',
                'status' => 'Pegawai',
                'foto' => 'hetdy.jpg',
            ],
            [
                'nama' => 'Drs. M.Syarip',
                'bagian' => 'Jaringan Komunikasi Data',
                'status' => 'Pegawai',
                'foto' => 'syarip.jpg',
            ],
            [
                'nama' => 'Arjun Simanjuntak',
                'bagian' => 'Jaringan Komunikasi Data',
                'status' => 'Pegawai',
                'foto' => 'arjun.jpg',
            ],
            [
                'nama' => 'Kasimun',
                'bagian' => 'Jaringan Komunikasi Data',
                'status' => 'Tenaga Ahli',
                'foto' => 'kasimun.jpg',
            ],
            [
                'nama' => 'Purwanto',
                'bagian' => 'Jaringan Komunikasi Data',
                'status' => 'Tenaga Ahli',
                'foto' => 'purwanto.jpg',
            ],
            [
                'nama' => 'Arif Ruli',
                'bagian' => 'Jaringan Komunikasi Data',
                'status' => 'Tenaga Ahli',
                'foto' => 'Arif.jpg',
            ],
            [
                'nama' => 'Hamdani Wibisono',
                'bagian' => 'Jaringan Komunikasi Data',
                'status' => 'Tenaga Ahli',
                'foto' => 'Dani.jpg',
            ],
            [
                'nama' => 'Haviz Alfan',
                'bagian' => 'Jaringan Komunikasi Data',
                'status' => 'Tenaga Ahli',
                'foto' => 'Haviz.jpg',
            ],
            [
                'nama' => 'Akmar Holmes, MM',
                'bagian' => 'Jaringan Komunikasi Data',
                'status' => 'Tenaga Ahli',
                'foto' => 'Omesh.jpg',
            ],
            [
                'nama' => 'Tri Sutrisno',
                'bagian' => 'Jaringan Komunikasi Data',
                'status' => 'Tenaga Ahli',
                'foto' => 'Omesh.jpg',
            ],
        ]);
        DB::table('pengumuman')->insert([
            'isi' => 'Pengumuman Penerimaan Pendaftaran Calon Tenaga Informasi Dan Teknologi Perseorangan/Tenaga Non PNS',
            'pdf' => 'Pengumuman Recruitment Technical Support.pdf',
        ]);
    }
}
