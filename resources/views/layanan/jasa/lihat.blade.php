@extends('layout.app')
@extends('layout.header')
@section('konten')
    <!--==================== View ====================-->

    <section class="services section" id="services">
        <a href="{{ route('layanan.jasa') }}">
            <span class="button button--flex button--small button--link services__button">
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i
                    class="uil uil-arrow-left button__icon"></i>
                Kembali
            </span>
        </a>
        <h2 class="section__title">Lihat Jasa</h2>
        <span class="section__subtitle"></span>

        <div class="galeri__container container grid">
            <!--==================== Visi ====================-->
            <div class="galeri__content">
                <center>
                    <img class="product-image" src="{{ asset('assets/jasa/gambar/' . $jasa->gambar) }}" alt="lihat_jasa"
                        style="width: 500px; height:250px;">
                    <h1 class="product-title">{{ $jasa->judul }}</h1>
                </center>
                <div class="product-details">
                    <a href="assets/jasa/pdf/{{ $jasa->pdf }}"><a class="btn btn-success"
                            href="{{ route('admin.jasa.display', ['id' => $jasa->id]) }}" target="__blank">Display
                            PDF</a></a>
                    <p>{{ date('l, d F Y', strtotime($jasa->created_at)) }}</p>
                    <p>{{ $jasa->keterangan }}</p>
                </div>
            </div>
        </div>
    </section>
@endsection
@extends('layout.footer')
