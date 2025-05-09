@extends('layout.app')
@extends('layout.header')
@section('konten')
    <section class="services section section__title" id="services">
        <h2 class="section-title">Organisasi Kewartawanan</h2>
        <div class="card-container">
            <div class="card" style="width: 1200px; max-height:auto;">
                <div class="custom_body">
                    {!! $body->body !!}

                </div>
            </div>
        </div>
    </section>
    <style>
        .custom_body {
            font-size: 13px;
            margin-top: 20px;
            margin-bottom: 20px;
            margin-left: 30px;
            margin-right: 10px;
            text-align: start;
        }

        img {
            display: block;
            margin-left: auto;
            margin-right: auto;
            text-align: center;
        }

        .gambar-1 {
            margin-left: 150px;
        }

        .judul {
            text-align: center;
        }
    </style>
@endsection
@extends('layout.footer')
