@extends('admin.layout.app')
@extends('admin.layout.header')
@extends('admin.layout.sidebar')

@section('konten')
    <main class="main users chart-page" id="skip-target">
        <div class="container">
            <h2 class="main-title">Lihat Jasa</h2>
            <div class="row">
                <div class="col-lg-9">
                    <div class="users-table table-wrapper1">
                        <article class="sign-up">
                            <form class="sign-up-form form" action="{{ route('admin.jasa.ubah', ['id' => $jasa->id]) }}"
                                method="POST" style="width: 1100px;" enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                <label class="form-label-wrapper">
                                    <p class="form-label">Judul</p>
                                    <input class="form-input" type="text" name="judul" value="{{ $jasa->judul }}"
                                        readonly>
                                </label>
                                <label class="form-label-wrapper">
                                    <p class="form-label">Keterangan</p>
                                    <textarea class="form-input" name="keterangan" id="keterangan" cols="30" rows="10" style="height: 100px"
                                        readonly>{{ $jasa->keterangan }}</textarea>
                                </label>
                                <label class="form-label-wrapper">
                                    <p class="form-label">Gambar</p>
                                    <img src="{{ asset('assets/jasa/gambar/' . $jasa->gambar) }}"
                                        style="width: 80px; height: 70px;">
                                </label>
                                <br>
                                <label class="form-label-wrapper">
                                    <p class="form-label">PDF</p>
                                    <a href="assets/jasa/pdf/{{ $jasa->pdf }}"><a class="btn btn-success"
                                            href="{{ route('admin.jasa.display', ['id' => $jasa->id]) }}" target="__blank"
                                            style="width: 150px; height:35px;">Display
                                            PDF</a></a>
                                </label>
                                <br>
                                <br>
                                <a href="{{ route('admin.jasa.index') }}" class="btn btn-secondary">Kembali</a>
                            </form>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
@extends('admin.layout.footer')
