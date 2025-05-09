@extends('layout.app')
@extends('layout.header')
@section('konten')
    <section class="services section section__title" id="services">
        <h2 class="section-title">{{ $sodtiti->judul }}</h2>
        <div class="card-container">
            @if ($sodtiti)
                <div class="card" style="width: 1280px; height:720px; margin-left:35px;">
                    <img src="{{ asset('assets/sodtiti/gambar/' . $sodtiti->gambar) }}" alt="{{ $sodtiti->judul }}">
                </div>
            @endif
        </div>
    </section>
@endsection
@extends('layout.footer')
@section('css')
    <style>
        .card img {
            width: 100%;
            height: auto;
            display: block;
            max-width: 100%;
            max-height: 100%;
        }
    </style>
@endsection
