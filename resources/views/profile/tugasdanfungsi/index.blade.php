@extends('layout.app')
@extends('layout.header')
@section('konten')
    <section class="services section section__title" id="services">
        <h2 class="section-title">{{ $kominfotik->judul }}</h2>
        <div class="card-container">
            <div class="card" style="width: 1180px; height:900px;">
                <div class="card-content">
                    <p class="deskripsi-bagian">{{ $kominfotik->sub_judul }}</p>
                    <p class="judul-isi-bagian">{{ $kominfotik->judul_isi }}</p>
                    <ol>
                        @foreach ($isikominfotik as $ik)
                            <li class="isi-bagian">{{ $ik->isi }}</li>
                        @endforeach
                    </ol>
                </div>
            </div>
    </section>
    <style>
        .card-content .judul-bagian {
            font-family: Poppins;
            text-align: start;
            text-transform: uppercase;
            font-size: 25px;
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
    </style>
@endsection
@extends('layout.footer')
@section('css')
@endsection
