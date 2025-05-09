@extends('layout.app')
@extends('layout.header')
@section('konten')
    <section class="services section" id="services">
        <h2 class="section__title">Video</h2>
        <span class="section__subtitle"></span>
        <div class="card-container">
            @foreach ($video as $v)
                <div class="card">
                    <center>
                        {!! str_replace(['width="', 'height="'], ['width="250" height="100" style="max-width: 800px;"'], $v->video) !!}
                    </center>
                    <div class="card-content">
                        <h3 class="judul" style="text-align: start"><a
                                href="{{ route('galeri.video.lihat', ['id' => $v->id]) }}"
                                class="nav__link noSelect">{{ $v->judul }}</a></h3>
                        <p class="bagian"><i
                                class="fa-solid fa-user"></i>&nbsp;&nbsp;{{ $v->bagian }}&nbsp;&nbsp;&nbsp;&nbsp;<i
                                class="fa-solid fa-calendar-days"></i>&nbsp;&nbsp;{{ date('d-m-Y', strtotime($v->created_at)) }}
                        </p>
                    </div>
                </div>
            @endforeach
        </div>
        {{ $video->appends(request()->input())->links('layout.pagination') }}
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
            width: 200px;
            /* Sesuaikan dengan lebar yang diinginkan */
            overflow: hidden;
            text-overflow: ellipsis;
            margin-bottom: 10px;
        }

        .card-container {
            display: flex;
            flex-wrap: wrap;
            justify-content: flex-start;
            margin: 0 auto;
            /*
                                                Menengahkan
                                                card-container */
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
@extends('layout.footer')
