@extends('admin.layout.app')
@extends('admin.layout.header')
@extends('admin.layout.sidebar')

@section('konten')
    <main class="main users chart-page" id="skip-target">
        <div class="container">
            <h2 class="main-title">Informasi Jaringan Komunikasi Data</h2>
            <a href="{{ route('jkd.display.sodtiti', ['id' => 1]) }}" target="_blank" class="btn btn-success">Tampilan Standar
                Operasional
                Dukungan Teknis
                Infrastruktur Teknologi Informasi
            </a>
            <a href="{{ route('jkd.display.daftarcctv', ['id' => 1]) }}" target="_blank" class="btn btn-success">Tampilan
                Daftar
                CCTV
            </a>
            <br>
            <br>
            <a class="btn btn-primary" href="{{ route('admin.informasi.jkd.sodtiti', ['id' => 1]) }}">Edit Standar
                Operasional
                Dukungan Teknis
                Infrastruktur Teknologi Informasi</a>
            <a class="btn btn-primary" href="{{ route('admin.informasi.jkd.daftarcctv', ['id' => 1]) }}">Edit Daftar
                CCTV</a>
            <br>
            <br>
        </div>
    </main>
@endsection
@extends('admin.layout.footer')
