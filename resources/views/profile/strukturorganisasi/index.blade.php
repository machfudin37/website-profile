@extends('layout.app')
@extends('layout.header')
@section('konten')
    <section class="services section section__title" id="services">
        <h2 class="section-title">Struktur Organisasi</h2>
        <div class="card-container">
            @if ($strukturorganisasi)
                
            <div class="card">
                <div class="zoom" id="strukturorganisasi">
                    <img src="{{ asset('assets/strukturorganisasi/' . $strukturorganisasi->gambar) }}">
                </div>
            </div>
            @endif
        </div>
    </section>
@endsection
@extends('layout.footer')
@section('css')
    <style>
        .card {
            width: 1200px;
            height: 1000px;
            margin-left: 70px;
        }

        .zoom {
            width: 1200px;
            height: 1000px;
            display: inline-block;
            position: relative;

        }

        .zoom::after {
            content: '';
            display: block;
            width: 1350px;
            height: 1000px;
            position: absolute;
            top: 0;
            right: 0;
        }

        .zoom img {
            display: block;
            height: 1000px;
            width: 1350px;
            left: 0;
        }

        .zoom img::selection {
            background-color: transparent;
        }
    </style>
@endsection
