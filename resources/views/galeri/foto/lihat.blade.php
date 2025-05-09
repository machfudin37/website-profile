@extends('layout.app')
@extends('layout.header')
@section('konten')
    <!--==================== View ====================-->
    <section class="services section section__title" id="services2">
        <div class="card-container">
            <div class="card" style="width: 700px; height:auto;">
                <div class="card gambar" style="width: 700px;height:280px; margin-left:0; margin-top:0;">
                    <img src="{{ asset('assets/beritakegiatanfoto/gambar/' . $foto->gambar) }}" alt="foto"
                        style="width: 700px;height:280px; text-align:center">
                </div>
                <div class="card-content">
                    <h1 class="judul-artikel">{{ $foto->judul }}</h1>
                    <p class="bagian"><i
                            class="fa-solid fa-user"></i>&nbsp;&nbsp;{{ $foto->bagian }}&nbsp;&nbsp;&nbsp;&nbsp;<i
                            class="fa-solid fa-calendar-days"></i>&nbsp;&nbsp;{{ date('d-m-Y', strtotime($foto->created_at)) }}
                    </p>
                    <div class="keterangan">
                        {!! $foto->keterangan !!}
                    </div>
                </div>
            </div>
            <div id="accordion" role="tablist" aria-multiselectable="true">
                <div class="card" style="width: 450px; height:auto;">
                    <p class="card-header" role="tab" id="seputarkegiatan" style="color: white;">
                        <button class="nav__link1 footer__bg" style="font-size:18px; width:450px; height:100px;"
                            data-toggle="collapse" data-parent="#accordion" data-target="#2" aria-expanded="true"
                            aria-controls="2">Seputar Kegiatan
                        </button>
                    </p>

                    <div id="2" class="collapse show" role="tabpanel" aria-labelledby="seputarkegiatan">
                        <div class="card-body" style="margin-left: 30px;">
                            @foreach ($beritafoto as $bf)
                                <div class="kegiatan-wrapper">
                                    <div class="gambarfoto">
                                        <img src="{{ asset('assets/beritakegiatanfoto/gambar/' . $bf->gambar) }}"
                                            alt="{{ $bf->judul }}" class="wrapper-image">
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

                    <div id="3" class="collapse show" role="tabpanel" aria-labelledby="kegiatanvideo">
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

            </div>
    </section>
    <style>
        .bagian {
            font-size: 13px;
            text-align: start;
            margin-top: 0px;
            margin-bottom: 10px;
        }

        .keterangan {
            font-size: 15px;
            text-align: start;
        }

        .judul-artikel {
            text-align: start;
            font-size: 20px;
        }

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

        .wrapper-image {
            margin-right: 20px;
            /* Sesuaikan jarak antara gambar dan teks */

            display: flex;
            flex-wrap: wrap;
        }

        .content-wrapper {
            display: flex;
            align-items: center;
            margin-top: 10px;
        }

        .gambarfoto img {
            width: 100px;
            height: 50px;
        }

        .wrapper {
            display: flex;
            align-items: center;
        }

        .wrapper-gambar {
            display: flex;
            align-items: center;
            margin-top: 19px;
            flex-wrap: wrap;
            margin-left: 30px;
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

        p.isi {
            margin-top: 18px;
            overflow: hidden;
            text-align: start;
            white-space: normal;
            font-size: 16px;
            color: var(--text-color);
        }

        .embedvideo iframe {
            width: 150px;
            height: 150px;
            margin-right: 10px;
            margin-top: 20px
        }

        .kegiatan-wrapper {
            display: flex;
            align-items: center;
            margin-top: 10px;
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
    </style>
@endsection
@extends('layout.footer')
