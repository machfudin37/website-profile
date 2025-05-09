@extends('layout.app')
@extends('layout.header')
@section('konten')
    <section class="services section section__title" id="services">
        <h2 class="section-title">Video Profile</h2>
        <div class="card-container">
            @if ($videoprofile)
                <div class="card" style="width: 1280px; height:720px; margin-left:35px;">
                    <video class="videoprofile" controls>
                        <source src="{{ asset('assets/videoprofile/' . $videoprofile->video) }}" type="video/mp4">
                    </video>
                </div>
            @endif
        </div>
    </section>
@endsection
@extends('layout.footer')
@section('css')
    <style>
        .card .videoprofile {
            width: auto;
            height: auto;
            object-fit: cover;
        }
    </style>
@endsection
