@extends('layout.app')
@extends('layout.header')
@section('konten')
    <section class="services section section__title" id="services2">
        <h2 class="section-title">{{ $bagian->nama_bagian }}</h2>
        <div class="card-container">
            <div class="card" style="width: 700px; height:auto;">
                <div class=" card gambar" style="width: 700px;height:280px; margin-left:0; margin-top:0;">
                    <img src="{{ asset('assets/sisteminformasisiberdansandi/foto/' . $bagian->foto) }}" alt="foto"
                        style="width: 700px;height:280px; text-align:center">
                </div>
                <div class="card-content">
                    <h5 class="judul-bagian">{{ $bagian->judul }}</h5>
                    <p class="deskripsi-bagian">{{ $bagian->sub_judul }}</p>
                    <p class="judul-isi-bagian">{{ $bagian->judul_isi }}</p>
                    <ol>
                        @foreach ($isi as $i)
                            <li class="isi-bagian">{{ $i->isi }}</li>
                        @endforeach
                    </ol>
                </div>
            </div>
            <div id="accordion" role="tablist" aria-multiselectable="true">
                <div class="card" style="width: 450px; height:auto;">
                    <p class="card-header" role="tab" id="informasi" style="color: white;">
                        <button class="nav__link1 footer__bg" style="font-size:18px; width:450px; height:100px;"
                            data-toggle="collapse" data-parent="#accordion" data-target="#1" aria-expanded="true"
                            aria-controls="1">Informasi
                        </button>
                    </p>

                    <div id="1" class="collapse in show" role="tabpanel" aria-labelledby="informasi">
                        <div class="card-body" style="text-align:start; margin-left:15px;">

                        </div>
                    </div>
                </div>
                <div class="card" style="width: 450px; height:auto;">
                    <p class="card-header" role="tab" id="seputarkegiatan" style="color: white;">
                        <button class="nav__link1 footer__bg" style="font-size:18px; width:450px; height:100px;"
                            data-toggle="collapse" data-parent="#accordion" data-target="#2" aria-expanded="true"
                            aria-controls="2">Seputar Kegiatan
                        </button>
                    </p>

                    <div id="2" class="collapse in show" role="tabpanel" aria-labelledby="seputarkegiatan">
                        <div class="card-body" style="margin-left: 30px;">
                            @foreach ($beritafoto as $bf)
                                <div class="kegiatan-wrapper">
                                    <div class="gambarfoto">
                                        <img src="{{ asset('assets/beritakegiatanfoto/gambar/' . $bf->gambar) }}"
                                            title="{{ $bf->judul }}">
                                    </div>
                                    <p class="isi-foto"><a href="{{ route('galeri.foto.lihat', ['id' => $bf->id]) }}"
                                            class="nav__link noSelect">{{ $bf->judul }}</a></p>
                                </div>
                            @endforeach
                        </div>
                        <span class="button button--flex button--small button--link services__button lihat"><a
                                href="{{ route('galeri.foto') }}"
                                class="button button--flex button--small button--link services__button lihat"> Lihat
                                Semua</a>
                            <i class="uil uil-arrow-right button__icon"></i></span>
                    </div>
                </div>

                <div class="card" style="width: 450px; height:auto;">
                    <p class="card-header" role="tab" id="kegiatanvideo" style="color: white;">
                        <button class="nav__link1 footer__bg" style="font-size:18px; width:450px; height:100px;"
                            data-toggle="collapse" data-parent="#accordion" data-target="#3" aria-expanded="true"
                            aria-controls="3">Kegiatan Video
                        </button>
                    </p>

                    <div id="3" class="collapse in show" role="tabpanel" aria-labelledby="kegiatanvideo">
                        <div class="card-body" style="margin-left: 30px;">
                            <div class="wrapper">
                                @foreach ($beritavideo as $bv)
                                    <div class="embedvideo">
                                        {!! $bv->video !!}
                                    </div>
                                    <p class="isi">
                                        <a href="{{ route('galeri.video.lihat', ['id' => $bv->id]) }}"
                                            class="nav__link">{{ $bv->judul }}</a>
                                    </p>
                                @endforeach
                            </div>
                        </div>
                        <span class="button button--flex button--small button--link services__button lihat"><a
                                href="{{ route('galeri.video') }}"
                                class="button button--flex button--small button--link services__button lihat"> Lihat
                                Semua</a>
                            <i class="uil uil-arrow-right button__icon"></i></span>
                    </div>
                </div>
                <div class="card" style="width: 450px; height:auto;">
                    <p class="card-header" role="tab" id="galeri" style="color: white;">
                        <button class="nav__link1 footer__bg" style="font-size:18px; width:450px; height:100px;"
                            data-toggle="collapse" data-parent="#accordion" data-target="#4" aria-expanded="true"
                            aria-controls="4">Galeri
                        </button>
                    </p>

                    <div id="4" class="collapse in show" role="tabpanel" aria-labelledby="galeri">
                        <div class="card-body">
                            <div class="wrapper-gambar">
                                @foreach ($foto as $f)
                                    <img src="{{ asset('assets/pegawai/foto/' . $f->foto) }}" alt="{{ $f->nama }}"
                                        title="{{ $f->nama }}" class="wrapper-image">
                                @endforeach
                            </div>
                        </div>
                        <span class="button button--flex button--small button--link services__button lihat"><a
                                href="{{ route('galeri.kip') }}"
                                class="button button--flex button--small button--link services__button lihat"> Lihat
                                Semua</a>
                            <i class="uil uil-arrow-right button__icon"></i></span>
                    </div>
                </div>
            </div>
    </section>
    <style>
        .card-container {
            display: flex;
            flex-wrap: wrap;
            justify-content: flex-start;
            margin: 0 auto;
            /* Menengahkan card-container */
            max-width: 1300px;
            /* Sesuaikan dengan lebar maksimal yang diinginkan */
        }

        .card {
            width: 245px;
            height: 50px;
            margin: 30px;
            margin-bottom: 0px;
        }

        .gambar {
            width: 500px;
            height: 100px;
        }

        .gambar img {
            transition: transform 0.3s ease;
        }

        .gambar img:hover {
            transform: scale(1.2);
            transform-origin: center center;
        }

        .content-wrapper {
            display: flex;
            align-items: center;
            padding: 15px;
        }

        .wrapper-image {
            margin-right: 20px;

            /* Sesuaikan jarak antara gambar dan teks */

            display: flex;
            flex-wrap: wrap;
        }

        .wrapper {
            display: flex;
            align-items: center;
        }

        .kegiatan-wrapper {
            display: flex;
            align-items: center;
            margin-top: 10px;
        }

        .wrapper-gambar {
            display: flex;
            align-items: center;
            margin-top: 19px;
            flex-wrap: wrap;
        }

        .wrapper-gambar img:hover {
            transform: scale(1.2);
        }

        .wrapper-gambar .wrapper-image {
            margin-right: 6px;
            /* Sesuaikan margin kanan sesuai kebutuhan */
            width: 100px;
            height: 100px;
            clear: both;
        }

        .navbar {
            padding: 10px;
            /* Sesuaikan padding sesuai kebutuhan */
        }

        h2.sub-item-siss {
            font-size: 16px;
            color: white;
            margin-bottom: 10px;
        }

        .card-content .judul-bagian {
            font-family: Poppins;
            text-align: start;
            font-size: 25px;
            text-transform: uppercase;
        }

        .card-content .deskripsi-bagian {
            font-family: Poppins;
            text-align: start;
            font-size: 15px;
        }

        .card-content .judul-isi-bagian {
            font-family: Poppins;
            text-align: start;
            font-size: 15px;
        }

        .card-content .isi-bagian {
            font-family: Poppins;
            text-align: start;
            font-size: 15px;
            margin-left: 20px;
            margin-top: 10px;
        }

        h2.informasi {
            font-size: 16px;
            color: white;
            margin-bottom: 20px;
        }

        p.isi {
            margin-top: 18px;
            overflow: hidden;
            text-align: start;
            white-space: normal;
            font-size: 16px;
            color: var(--text-color);
        }

        .isi-foto {
            margin-left: 10px;
            overflow: hidden;
            text-align: start;
            white-space: pre-wrap;
            font-size: 16px;
            width: 100%;
            color: var(--text-color);
        }

        .gambarfoto img {
            width: 200px;
            height: 100px;
        }

        .beritavideo-siss {
            margin-top: 170px;
        }

        .galeri-siss {
            margin-top: 230px;
        }

        .collapse {
            display: none;
        }

        .collapsed {
            display: block;
        }

        .embedvideo iframe {
            width: 150px;
            height: 150px;
            margin-right: 10px;
            margin-top: 20px
        }
    </style>
@endsection
@extends('layout.footer')
