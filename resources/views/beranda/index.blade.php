@extends('layout.app')
@extends('layout.header')
@section('konten')
    <!--==================== MAIN ====================-->
    <main class="main">
        <!--==================== HOME ====================-->
        <section class="home section" id="home">
            
            <div class="home__container grid">
                <div class="home__content grid">
                    <div class="home__data">
                        <p class="home__title">{{$beranda->nama}}</p>
                        <p class="home__title">{{$beranda->subject}}</p>
                        <p class="home__title">{{$beranda->tempat}}</p>
                    </div>
                </div>
            </div>
        </section>
        <section class="services section section__title" id="services">
            <h2 class="section-title" style="">Informasi Terkait</h2>
            <div class="card-container">
                    <div class="card">
                        <div class="card-content">
                            <h3 class="main-title"><a href="{{ route('profile.strukturorganisasi', ['id' => 1]) }}"
                                    class="nav__link noSelect"><i class="fa fa-sitemap" style="color: orange;"></i>&nbsp;&nbsp;Struktur Organisasi</a></h3>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-content">
                            <h3 class="main-title"><a href="{{ route('profile.daftarnamapegawai') }}"
                                    class="nav__link noSelect"><i class="fa fa-users" style="color: blue"></i>&nbsp;&nbsp;Daftar Nama Pegawai</a></h3>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-content">
                            <h3 class="main-title"><a href="#"
                                    class="nav__link noSelect"><i class="fa fa-download" style="color: green"></i>&nbsp;&nbsp;Download Aplikasi</a></h3>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-content">
                            <h3 class="main-title"><a href="{{ route('admin.tupoksi.display', ['id' => 1]) }}"
                                    class="nav__link noSelect"><i class="fa-regular fa-file" style="color: yellow"></i>&nbsp;&nbsp;Tupoksi</a></h3>
                        </div>
                    </div>
            </div>
        </section> 
        <section class="services section section__title" id="services1">
            <h2 class="section-title">Berita Kegiatan Foto</h2>
            <div class="card-container">
                <div class="card" style="width: 700px; height:400px;">
                    <center>
                        <img src="{{ asset('assets/beritakegiatanfoto/gambar/' . $fotobaru->gambar) }}" alt="{{$fotobaru->judul}}" class="centered-image"
                            style="width: 100%; height:300px;">
                    </center>
                    <div class="card-content">
                        <h3 class="main-title" style="text-align: start"><a href="{{ route('galeri.foto.lihat', ['id' => $fotobaru->id]) }}"
                                class="nav__link noSelect">{{$fotobaru->judul}}</a></h3>
                                <p class="bagian"><i class="fa-solid fa-user"></i>&nbsp;&nbsp;{{$fotobaru->bagian}}&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa-solid fa-calendar-days"></i>&nbsp;&nbsp;{{ date('d-m-Y', strtotime($fotobaru->created_at)) }}</p>
                    </div>
                </div> 
                <div class="card" style="width: 450px; height:500px;">
                    <nav class="navbar">
                        <div class="menu-toggle" id="mobile-menu-1">
                            <ul class="nav-list main-title" id="nav-list-1">
                                <li class="active section-title1"><button data-target="#terbarufoto" data-toggle="tab" aria-expanded="true">TERBARU</button></li>
                                <li><button data-target="#tufoto" data-toggle="tab" aria-expanded="false">TU</button></li>
                                <li><button data-target="#kipfoto" data-toggle="tab" aria-expanded="false">KIP</button></li>
                                <li><button data-target="#kipfoto" data-toggle="tab" aria-expanded="false">JKD</button></li>
                                <li><button data-target="#sissfoto" data-toggle="tab" aria-expanded="false">SISS</button></li>
                            </ul>
                        </div>
                    </nav>
                        <div class="tab-content">
                            <div class="tab-pane active" id="terbarufoto">
                                @foreach ($fototerbaru as $ft) 
                                <div class="kegiatan-wrapper">
                                    <div class="gambarfoto">
                                    <img src="{{ asset('assets/beritakegiatanfoto/gambar/' . $ft->gambar) }}" alt="{{$ft->judul}}" class="wrapper-image"
                                    >
                                    </div>
                                    <p class="isi"><a href="{{ route('galeri.foto.lihat', ['id' => $ft->id]) }}"
                                        class="nav__link noSelect">{{$ft->judul}}</a></p>
                                </div>
                                @endforeach
                                <span class="button button--flex button--small button--link services__button lihat"><a
                                    href="{{ route('galeri.foto') }}"
                                    class="button button--flex button--small button--link services__button lihat"> Lihat
                                    Semua</a>
                                <i class="uil uil-arrow-right button__icon"></i></span>
                            </div>
                            <div class="tab-pane" id="tufoto">
                                @foreach ($fototu as $ftu) 
                                <div class="kegiatan-wrapper">
                                    <div class="gambarfoto">
                                        <img src="{{ asset('assets/beritakegiatanfoto/gambar/' . $ftu->gambar) }}" alt="{{$ftu->judul}}" class="wrapper-image"
                                        >
                                    </div>
                                    <p class="isi"><a href="{{ route('galeri.foto.lihat', ['id' => $ftu->id]) }}"
                                        class="nav__link noSelect">{{$ftu->judul}}</a></p>
                                </div>
                                @endforeach
                                <span class="button button--flex button--small button--link services__button lihat"><a
                                    href="{{ route('galeri.foto') }}"
                                    class="button button--flex button--small button--link services__button lihat"> Lihat
                                    Semua</a>
                                <i class="uil uil-arrow-right button__icon"></i></span>
                            </span>
                            </div>
                            <div class="tab-pane" id="kipfoto">
                                @foreach ($fotokip as $fk) 
                                <div class="kegiatan-wrapper">
                                    <div class="gambarfoto">
                                    <img src="{{ asset('assets/beritakegiatanfoto/gambar/' . $fk->gambar) }}" alt="{{$fk->judul}}" class="wrapper-image"
                                    >
                                    </div>
                                    <p class="isi"><a href="{{ route('galeri.foto.lihat', ['id' => $fk->id]) }}"
                                        class="nav__link noSelect">{{$fk->judul}}</a></p>
                                </div>
                                @endforeach
                                <span class="button button--flex button--small button--link services__button lihat"><a
                                    href="{{ route('galeri.foto') }}"
                                    class="button button--flex button--small button--link services__button lihat"> Lihat
                                    Semua</a>
                                <i class="uil uil-arrow-right button__icon"></i></span>
                            </div>
                            <div class="tab-pane" id="itifoto">
                                @foreach ($fotojkd as $fj) 
                                <div class="kegiatan-wrapper">
                                    <div class="gambarfoto">
                                        <img src="{{ asset('assets/beritakegiatanfoto/gambar/' . $fj->gambar) }}" alt="{{$fj->judul}}" class="wrapper-image"
                                        >
                                    </div>
                                    <p class="isi"><a href="{{ route('galeri.foto.lihat', ['id' => $fj->id]) }}"
                                        class="nav__link noSelect">{{$fj->judul}}</a></p>
                                </div>
                                @endforeach
                                <span class="button button--flex button--small button--link services__button lihat"><a
                                    href="{{ route('galeri.foto') }}"
                                    class="button button--flex button--small button--link services__button lihat"> Lihat
                                    Semua</a>
                                <i class="uil uil-arrow-right button__icon"></i></span>
                            </div>
                            <div class="tab-pane" id="sissfoto">
                                @foreach ($fotosiss as $fs) 
                                <div class="kegiatan-wrapper">
                                    <div class="gambarfoto">
                                    <img src="{{ asset('assets/beritakegiatanfoto/gambar/' . $fs->gambar) }}" alt="{{$fs->judul}}" class="wrapper-image"
                                    ></div>
                                    <p class="isi"><a href="{{ route('galeri.foto.lihat', ['id' => $fs->id]) }}"
                                        class="nav__link noSelect">{{$fs->judul}}</a></p>
                                </div>
                                @endforeach
                                <span class="button button--flex button--small button--link services__button lihat"><a
                                    href="{{ route('galeri.foto') }}"
                                    class="button button--flex button--small button--link services__button lihat"> Lihat
                                    Semua</a>
                                <i class="uil uil-arrow-right button__icon"></i></span>
                            </div>
                        </div>
                </div>  
            </div>
        </section>
        <section class="services section section__title" id="services2">
            <h2 class="section-title" style="">Berita Kegiatan Video</h2>
            <div class="card-container">
                <div class="card" style="width: 700px; height:400px;">
                    <center>
                        <div class="videobaru">
                            {!! $videobaru->video !!}
                        </div>
                    </center>
                    <div class="card-content">
                        <h3 class="main-title" style="text-align: start"><a href="{{ route('galeri.video.lihat', ['id' => $videobaru->id]) }}"
                                class="nav__link noSelect">{{$videobaru->judul}}</a></h3>
                                <p class="bagian"><i class="fa-solid fa-user"></i>&nbsp;&nbsp;{{$videobaru->bagian}}&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa-solid fa-calendar-days"></i>&nbsp;&nbsp;{{ date('d-m-Y', strtotime($videobaru->created_at)) }}</p>
                    </div>
                </div> 
                <div class="card" style="width: 450px; height:500px;">
                    <nav class="navbar">
                        <div class="menu-toggle" id="mobile-menu-2">
                            <ul class="nav-list main-title" id="nav-list-2">
                                <li class="active section-title1"><button data-target="#terbaruvideo" data-toggle="tab" aria-expanded="true">TERBARU</button></li>
                                <li><button data-target="#tuvideo" data-toggle="tab" aria-expanded="false">TU</button></li>
                                <li><button data-target="#kipvideo" data-toggle="tab" aria-expanded="false">KIP</button></li>
                                <li><button data-target="#itivideo" data-toggle="tab" aria-expanded="false">JKD</button></li>
                                <li><button data-target="#sissvideo" data-toggle="tab" aria-expanded="false">SISS</button></li>
                            </ul>
                        </div>
                    </nav>
                        <div class="tab-content">
                            <div class="tab-pane active" id="terbaruvideo">
                                @foreach ($videoterbaru as $vt) 
                                <div class="content-wrapper">
                                    <div class="video-card">
                                        {!! $vt->video !!}
                                    </div>
                                    <p class="isi-foto"><a href="{{ route('galeri.video.lihat', ['id' => $vt->id]) }}"
                                        class="nav__link noSelect">{{$vt->judul}}</a></p>
                                </div>
                                @endforeach
                                <span class="button button--flex button--small button--link services__button lihat"><a
                                    href="{{ route('galeri.video') }}"
                                    class="button button--flex button--small button--link services__button lihat"> Lihat
                                    Semua</a>
                                <i class="uil uil-arrow-right button__icon"></i></span>
                            </div>
                            <div class="tab-pane" id="tuvideo">
                                @foreach ($videotu as $vtu) 
                                <div class="content-wrapper">
                                    <div class="video-card">
                                        {!! $vtu->video !!}
                                    </div>
                                    <p class="isi-foto"><a href="{{ route('galeri.video.lihat', ['id' => $vtu->id]) }}"
                                        class="nav__link noSelect">{{$vtu->judul}}</a></p>
                                </div>
                                @endforeach
                                <span class="button button--flex button--small button--link services__button lihat"><a
                                    href="{{ route('galeri.video') }}"
                                    class="button button--flex button--small button--link services__button lihat"> Lihat
                                    Semua</a>
                                <i class="uil uil-arrow-right button__icon"></i></span>
                            </div>
                            <div class="tab-pane" id="kipvideo">
                                @foreach ($videokip as $vk) 
                                <div class="content-wrapper">
                                    <div class="video-card">
                                        {!! $vk->video !!}
                                    </div>
                                    <p class="isi-foto"><a href="{{ route('galeri.video.lihat', ['id' => $vk->id]) }}"
                                        class="nav__link noSelect">{{$vk->judul}}</a></p>
                                </div>
                                @endforeach
                                <span class="button button--flex button--small button--link services__button lihat"><a
                                    href="{{ route('galeri.video') }}"
                                    class="button button--flex button--small button--link services__button lihat"> Lihat
                                    Semua</a>
                                <i class="uil uil-arrow-right button__icon"></i></span>
                            </div>
                            <div class="tab-pane" id="itivideo">
                                @foreach ($videojkd as $vj) 
                                <div class="content-wrapper">
                                    <div class="video-card">
                                        {!! $vj->video !!}
                                    </div>
                                    <p class="isi-foto"><a href="{{ route('galeri.video.lihat', ['id' => $vj->id]) }}"
                                        class="nav__link noSelect">{{$vj->judul}}</a></p>
                                </div>
                                @endforeach
                                <span class="button button--flex button--small button--link services__button lihat"><a
                                    href="{{ route('galeri.video') }}"
                                    class="button button--flex button--small button--link services__button lihat"> Lihat
                                    Semua</a>
                                <i class="uil uil-arrow-right button__icon"></i></span>
                            </div>
                            <div class="tab-pane" id="sissvideo">
                                @foreach ($videosiss as $vs) 
                                <div class="content-wrapper">
                                    <div class="video-card">
                                        {!! $vs->video !!}
                                    </div>
                                    <p class="isi-foto"><a href="{{ route('galeri.video.lihat', ['id' => $vs->id]) }}"
                                        class="nav__link noSelect">{{$vs->judul}}</a></p>
                                </div>
                                @endforeach
                                <span class="button button--flex button--small button--link services__button lihat"><a
                                    href="{{ route('galeri.video') }}"
                                    class="button button--flex button--small button--link services__button lihat"> Lihat
                                    Semua</a>
                                <i class="uil uil-arrow-right button__icon"></i></span>
                            </div>
                        </div>
                </div>  
            </div>
        </section>
    </main>
    <style>
        .bagian {
            font-size: 13px;
            text-align: start;
        }
        .gambarfoto img{
            width: 200px;
            height: 100px;
        }
        .waktu {
            font-size: 13px;
            text-align: start;
        }
        .centered-image {
            display: block;
            margin: 0 auto;
        }
        .videobaru iframe {
            width: 100%;
            height: 80%;
        }
        .video-card iframe {
            width: 200px;
            height: 150px;
        }
        .kegiatan-wrapper {
            display: flex;
            align-items: center;
            margin-top: 10px;
        }
        .isi {
            margin-left: 10px;
            overflow: hidden;
            text-align: start;
            white-space: pre-wrap;
            font-size: 16px;
            width: 100%;
            color: var(--text-color);
        }
    </style>
@endsection
@extends('layout.footer')
@section('css')
<style>
    .card-container {
        display: flex;
        flex-wrap: wrap;
        justify-content: flex-start;
        margin: 0 auto;
        /* Menengahkan card-container */
        width: 1300px;
        /* Sesuaikan dengan lebar maksimal yang diinginkan */
    }

    .card {
        width: 245px;
        height: 50px;
        margin: 30px;
    }
    .card-berita {
        width: 250px;
        margin: 30px;
    }
    .content-wrapper {
        display: flex;
        align-items: center;
        padding: 15px;
    }
    .wrapper-image {
        margin-right: 20px; /* Sesuaikan jarak antara gambar dan teks */
        display: block;
    }
    .navbar {
        padding: 15px;
        text-align: center;
    }

    .nav-list {
        list-style: none;
        padding: 0;
        margin: 0;
    }

    .nav-list li {
        display: inline;
        margin-right: 30px;
    }

    .nav-list li button {
        text-decoration: none;
        font-size: 14px;
    }

    .tab-content {
        margin-left: 20px;
    }

    .tab-pane {
        display: none;
        margin-bottom: 10px;
    }

    .tab-pane.active {
        display: block;
    }

    /* Tambahkan gaya untuk menu yang aktif */
    .nav-list li.active button {
        background-color: #0fbbf0; /* Ubah ke warna hijau tua */
        padding: 10px;
        height: 34px;
        color: #006400;
    }
    .nav-list li button:hover {
        background-color: #006400; /* Warna hijau tua saat disentuh */
        color: #fff;
        padding: 8px;
    }
    .content-wrapper .isi-foto{
        overflow: hidden;
        margin-left:10;
        text-align: start;
        word-wrap: break-word;
        font-size: 13px;
        color: var(--text-color);
    }
    #home{
        background-image: url("{{ asset('assets/background/'.$beranda->background) }}");
        background-size: cover;
        height: 100vh;
    }
    .home__data p{
        color: white;
        background-color:rgba(0, 0, 0, .25); 
        text-align:start;
        margin-left: 50px;
        word-wrap: break-word;
        width: 500px;
        max-width: 500px;
        font-size: 30px;
        font-family:sans-serif;
        text-transform: uppercase;
    }
</style>
@endsection
@section('js')
    <script>
        var backgroundImages = @json(#);
        var currentIndex = 0;

        document.addEventListener("DOMContentLoaded", function() {
            const homeSection = document.querySelector(".home");

            document.addEventListener("keydown", function(event) {
                if (event.key === "ArrowRight") {
                    // Geser ke gambar latar belakang berikutnya
                    currentIndex = (currentIndex + 1) % backgroundImages.length;
                } else if (event.key === "ArrowLeft") {
                    // Geser ke gambar latar belakang sebelumnya
                    currentIndex = (currentIndex - 1 + backgroundImages.length) % backgroundImages.length;
                }

                // Perbarui background-position dengan menggunakan URL gambar yang baru
                homeSection.style.backgroundImage = `url('${backgroundImages[currentIndex].filename}')`;
                homeSection.dataset.currentIndex = currentIndex;
            });
        });
    </script>
    <script>
        document.addEventListener("DOMContentLoaded", function () {
            // Foto
            const mobileMenu1 = document.getElementById("mobile-menu-1");
            const navList1 = document.getElementById("nav-list-1");
            const tabs1 = document.querySelectorAll("#mobile-menu-1 [data-toggle='tab']");
            const tabPanes1 = document.querySelectorAll("#services1 .tab-pane");

            mobileMenu1.addEventListener("click", function () {
                navList1.classList.toggle("show");
            });

            tabs1.forEach(tab => {
                tab.addEventListener("click", function () {
                    tabs1.forEach(t => t.parentElement.classList.remove("active"));
                    this.parentElement.classList.add("active");

                    const targetTabId = this.getAttribute("data-target").substring(1);
                    tabPanes1.forEach(pane => {
                        pane.classList.remove("active");
                    });

                    document.getElementById(targetTabId).classList.add("active");
                });
            });

            // Video
            const mobileMenu2 = document.getElementById("mobile-menu-2");
            const navList2 = document.getElementById("nav-list-2");
            const tabs2 = document.querySelectorAll("#mobile-menu-2 [data-toggle='tab']");
            const tabPanes2 = document.querySelectorAll("#services2 .tab-pane");

            mobileMenu2.addEventListener("click", function () {
                navList2.classList.toggle("show");
            });

            tabs2.forEach(tab => {
                tab.addEventListener("click", function () {
                    tabs2.forEach(t => t.parentElement.classList.remove("active"));
                    this.parentElement.classList.add("active");

                    const targetTabId = this.getAttribute("data-target").substring(1);
                    tabPanes2.forEach(pane => {
                        pane.classList.remove("active");
                    });

                    document.getElementById(targetTabId).classList.add("active");
                });
            });
        });
    </script>
@endsection
