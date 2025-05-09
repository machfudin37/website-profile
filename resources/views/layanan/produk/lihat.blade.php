@extends('layout.app')
@extends('layout.header')
@section('konten')
    <!--==================== View ====================-->

    <section class="services section" id="services">
        <a href="{{ route('layanan.produk') }}">
            <span class="button button--flex button--small button--link services__button">
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i
                    class="uil uil-arrow-left button__icon"></i>
                Kembali
            </span>
        </a>
        <h2 class="section__title">Lihat Produk</h2>
        <span class="section__subtitle"></span>

        <div class="galeri__container container grid">
            <!--==================== Visi ====================-->
            <div class="galeri__content">
                <center>
                    <img class="product-image" src="{{ asset('assets/produk/gambar/' . $produk->gambar) }}"
                        alt="lihat_produk" style="width: 500px; height:250px;">
                    <h1 class="product-title">{{ $produk->judul }}</h1>
                </center>
                <div class="product-details">
                    <a href="assets/produk/pdf/{{ $produk->pdf }}"><a class="btn btn-success"
                            href="{{ route('admin.produk.display', ['id' => $produk->id]) }}" target="__blank">Display
                            PDF</a></a>
                    <p>{{ date('l, d F Y', strtotime($produk->created_at)) }}</p>
                    <p>{{ $produk->keterangan }}</p>
                </div>
            </div>
        </div>
    </section>
@endsection
@extends('layout.footer')
