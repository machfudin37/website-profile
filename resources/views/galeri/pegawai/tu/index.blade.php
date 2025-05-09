@extends('layout.app')
@extends('layout.header')
@section('konten')
    <section class="services section section__title" id="services">
        <h2 class="section-title">Pegawai Tata Usaha</h2>
        <div class="wrapper-gambar">
            @foreach ($pegawaitu as $ptu)
                <img src="{{ asset('assets/pegawai/foto/' . $ptu->foto) }}" title="{{ $ptu->nama }}" class="wrapper-image">
            @endforeach
        </div>
        <h2 class="section-title">Tenaga Ahli Tata Usaha</h2>
        <div class="wrapper-gambar">
            @foreach ($tenagaahlitu as $tatu)
                <a target="_blank" href="{{ asset('assets/pegawai/foto/' . $tatu->foto) }}" title="{{ $tatu->nama }}">
                    <img src="{{ asset('assets/pegawai/foto/' . $tatu->foto) }}" class="wrapper-image">
                </a>
            @endforeach
        </div>
    </section>
    <style>
        .wrapper-gambar {
            display: flex;
            align-items: center;
            flex-wrap: wrap;
            margin-left: 120px;
            margin-bottom: 20px;
        }

        .wrapper-gambar img {
            margin-top: 30px;
            margin-left: 20px;
            align-items: center;
            transition: transform 0.3s ease-in-out;

        }

        .wrapper-gambar img:hover {
            transform: scale(1.2);
        }

        .wrapper-gambar .wrapper-image {
            /* Sesuaikan margin kanan sesuai kebutuhan */
            width: 200px;
            height: 150px;
            clear: both;
        }
    </style>
@endsection
@extends('layout.footer')
