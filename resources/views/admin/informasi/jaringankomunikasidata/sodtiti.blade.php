@extends('admin.layout.app')
@extends('admin.layout.header')
@extends('admin.layout.sidebar')

@section('konten')
    <main class="main users chart-page" id="skip-target">
        <div class="container">
            <h2 class="main-title">Standar Operasional
                Dukungan Teknis
                Infrastruktur Teknologi Informasi</h2>
            <a href="{{ route('jkd.display.sodtiti', ['id' => 1]) }}" target="_blank" class="btn btn-success">Tampilan Standar
                Operasional
                Dukungan Teknis
                Infrastruktur Teknologi Informasi
            </a>
            <div class="messages">
                @if (Session::has('success'))
                    <div class="alert alert-success mt-3">
                        <p style="color: green">
                            {{ Session::get('success') }}
                        </p>
                    </div>
                @elseif (Session::has('error'))
                    <div class="alert alert-danger mt-3">
                        <p style="color: red">
                            {{ Session::get('error') }}
                        </p>
                    </div>
                @endif
                @error('judul')
                    <div class="alert alert-danger mt-3">
                        {{ $message }}
                    </div>
                @enderror
                @error('gambar')
                    <div class="alert alert-danger mt-3">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="row">
                <div class="col-lg-9">
                    <div class="users-table table-wrapper1">
                        <article class="sign-up">
                            <form class="sign-up-form form"
                                action="{{ route('admin.informasi.jkd.ubahsodtiti', ['id' => $sodtiti->id]) }}"
                                method="POST" style="width: 1100px;" enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                <label class="form-label-wrapper">
                                    <p class="form-label">Judul</p>
                                    <input type="text" name="judul" value="{{ $sodtiti->judul }}" class="form-input">
                                </label>
                                <label class="form-label-wrapper">
                                    <p class="form-label">Gambar</p>
                                    <img src="{{ asset('assets/sodtiti/gambar/' . $sodtiti->gambar) }}"
                                        style="width: 200px;height:200px;">
                                    <br>
                                    <input type="file" name="gambar" class="form-input" accept="image/*">
                                </label>
                                <br>
                                <button type="submit" class="btn btn-primary">Ubah</button>&nbsp;
                                <a class="btn btn-secondary" href="{{ route('admin.informasi.jkd.index') }}">
                                    Kembali</a>
                            </form>
                    </div>
                </div>
            </div>
            <br>
        </div>
    </main>
@endsection
@extends('admin.layout.footer')
