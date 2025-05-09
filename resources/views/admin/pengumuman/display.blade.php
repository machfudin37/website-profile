@extends('layout.app')
@extends('layout.header')
@section('konten')
    <section class="services section section__title" id="services">
        @if ($pengumuman && $pengumuman->pdf)
            <h2 class="section-title" style="margin-bottom:70px;">{{ $pengumuman->isi }}</h2>
            <iframe src="{{ asset('assets/pengumuman/pdf/' . $pengumuman->pdf) }}" width="100%" height="500px"
                style="border: 1px solid #ccc;"></iframe>
        @endif
    </section>
@endsection
@extends('layout.footer')
