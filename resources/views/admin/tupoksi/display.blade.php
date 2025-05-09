@extends('layout.app')
@extends('layout.header')
@section('konten')
    <section class="services section section__title" id="services">
        <h2 class="section-title" style="margin-bottom:70px;">Tupoksi</h2>
        @if ($beranda && $beranda->tupoksi)
            <iframe src="{{ asset('assets/tupoksi/pdf/' . $beranda->tupoksi) }}" width="100%" height="500px"
                style="border: 1px solid #ccc;"></iframe>
        @else
            <p>File Tupoksi tidak ditemukan.</p>
        @endif
    </section>
@endsection
@extends('layout.footer')
