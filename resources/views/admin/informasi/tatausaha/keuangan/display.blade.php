@extends('layout.app')
@extends('layout.header')
@section('konten')
    <section class="services section section__title" id="services">
        <h2 class="section-title" style="margin-bottom:70px;">{{ $keuangan->sub_menu }}</h2>
        @if ($keuangan && $keuangan->pdf)
            <iframe src="{{ asset('assets/keuangan/pdf/' . $keuangan->pdf) }}" width="100%" height="500px"
                style="border: 1px solid #ccc;"></iframe>
        @else
            <p>File Keuangan tidak ditemukan.</p>
        @endif
    </section>
@endsection
@extends('layout.footer')
