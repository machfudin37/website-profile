@extends('layout.app')
@extends('layout.header')
@section('konten')
    <section class="services section section__title" id="services1">
        <h2 class="section-title">{{ $cctv->judul }}</h2>
        <div class="card-container">
            <div class="body-cctv">
                {!! $cctv->body !!}
            </div>
        </div>
    </section>
    <style>
        .custom-table {
            width: 80%;
            height: 20%;
            margin: 50px 50px;
        }

        table {
            width: 1087px;
            border-collapse: collapse;
            border: 1px solid var(--title-color);
            ;
            /* Warna garis tabel */
        }

        th,
        td {
            padding: 10px;
            text-align: left;
            font-size: 15px;
            font-family: Arial, Helvetica, sans-serif;
            border: 1px solid var(--title-color);
            /* Warna garis sel */
        }

        .no {
            width: 10px;
        }

        .isi {
            text-align: center;
        }

        .display {
            width: 10px;
            text-align: center;
        }

        thead {
            background-color: transparent;
            /* Warna latar header */
        }

        .body-cctv {
            margin-left: 100px;
            margin-top: 40px;
        }
    </style>
@endsection
@extends('layout.footer')
