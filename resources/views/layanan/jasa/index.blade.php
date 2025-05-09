@extends('layout.app')
@extends('layout.header')
@section('konten')
    <section class="services section" id="services">
        <h2 class="section__title">Jasa</h2>
        <span class="section__subtitle"></span>
        <div class="card-container">
            @foreach ($jasa as $j)
                <div class="card">
                    <center>
                        <img src="{{ asset('assets/jasa/gambar/' . $j->gambar) }}" alt="jasa" class="centered-image"
                            style="width: 245px; height:100px">
                    </center>
                    <div class="card-content">
                        <h3 class="main-title"><a
                                href="{{ route('layanan.jasa.lihat', ['id' => $j->id]) }}">{{ $j->judul }}</a></h3>
                    </div>
                </div>
            @endforeach
        </div>
    </section>
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
