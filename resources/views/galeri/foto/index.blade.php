@extends('layout.app')
@extends('layout.header')
@section('konten')
    <section class="services section section__title" id="services">
        <h2 class="section-title">Berita Kegiatan Foto</h2>
        <span class="section__subtitle"></span>
        <div class="card-container">
            @foreach ($foto as $f)
                <div class="card" style="max-height:350px;">
                    <center>
                        <img src="{{ asset('assets/beritakegiatanfoto/gambar/' . $f->gambar) }}" alt="foto"
                            class="centered-image" style="width: 245px; height:100px">
                    </center>
                    <div class="card-content">
                        <h3 class="judul" style="text-align: start"><a
                                href="{{ route('galeri.foto.lihat', ['id' => $f->id]) }}"
                                class="nav__link noSelect">{{ $f->judul }}</a></h3>
                        <p class="bagian"><i
                                class="fa-solid fa-user"></i>&nbsp;&nbsp;{{ $f->bagian }}&nbsp;&nbsp;&nbsp;&nbsp;<i
                                class="fa-solid fa-calendar-days"></i>&nbsp;&nbsp;{{ date('d-m-Y', strtotime($f->created_at)) }}
                        </p>
                    </div>
                </div>
            @endforeach
        </div>
        {{ $foto->appends(request()->input())->links('layout.pagination') }}
    </section>
    <style>
        .bagian {
            font-size: 13px;
            text-align: start;
            margin-top: 0px;
        }

        .judul {
            font-size: 13px;
            text-align: start;
            width: 250px;
            /* Sesuaikan dengan lebar yang diinginkan */
            overflow: hidden;
            text-overflow: ellipsis;
            margin-bottom: 10px;
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
            max-width: 1300px;
            /* Sesuaikan dengan lebar maksimal yang diinginkan */
        }

        .card {
            width: 250px;
            margin: 30px;
        }

        .centered-image {
            display: block;
            margin: 0 auto;
            width: 100%;
            height: auto;
        }
    </style>
@endsection
