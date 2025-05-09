@extends('admin.layout.app')
@extends('admin.layout.header')
@extends('admin.layout.sidebar')

@section('konten')
    <main class="main users chart-page" id="skip-target">
        <div class="container">
            <h2 class="main-title">Tugas dan Fungsi Komunikasi dan Informasi Publik</h2>
            <a href="{{ route('admin.kip.isi.index') }}" class="btn btn-success">Tampilan Masukan Isi
                Tugas dan Fungsi
                Komunikasi dan Informasi Publik</a>
            <br>
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
                @error('nama_bagian')
                    <div class="alert alert-danger mt-3">
                        {{ $message }}
                    </div>
                @enderror
                @error('judul')
                    <div class="alert alert-danger mt-3">
                        {{ $message }}
                    </div>
                @enderror

                @error('sub_judul')
                    <div class="alert alert-danger mt-3">
                        {{ $message }}
                    </div>
                @enderror

                @error('judul_isi')
                    <div class="alert alert-danger mt-3">
                        {{ $message }}
                    </div>
                @enderror
                @error('foto')
                    <div class="alert alert-danger mt-3">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <br>
            <div class="row">
                <div class="col-lg-9">
                    <div class="users-table table-wrapper1">
                        <article class="sign-up">
                            <form class="sign-up-form form" action="{{ route('admin.kip.ubah', ['id' => $kip->id]) }}"
                                method="POST" style="width: 1100px;" enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                <label class="form-label-wrapper">
                                    <p class="form-label">Nama Bagian</p>
                                    <input type="text" name="nama_bagian" value="{{ $kip->nama_bagian }}"
                                        class="form-input">
                                </label>
                                <label class="form-label-wrapper">
                                    <p class="form-label">Judul</p>
                                    <input type="text" name="judul" value="{{ $kip->judul }}" class="form-input">
                                </label>
                                <label class="form-label-wrapper">
                                    <p class="form-label">Sub Judul</p>
                                    <textarea class="form-input" name="sub_judul" id="sub_judul" cols="30" rows="10" style="height: 100px"
                                        required>{{ $kip->sub_judul }}</textarea>
                                </label>
                                <label class="form-label-wrapper">
                                    <p class="form-label">Judul Isi</p>
                                    <input type="text" name="judul_isi" value="{{ $kip->judul_isi }}"
                                        class="form-input">
                                </label>
                                <label class="form-label-wrapper">
                                    <p class="form-label">Foto</p>
                                    <img src="{{ asset('assets/komunikasidaninformasipublik/foto/' . $kip->foto) }}"
                                        style="width: 200px;height:200px;">
                                    <br>
                                    <input type="file" name="foto" class="form-input" accept="image/*">
                                </label>
                                <br>
                                <button type="submit" class="btn btn-primary">Ubah</button>&nbsp;
                            </form>
                    </div>
                </div>
            </div>
            <br>
        </div>
    </main>
@endsection
@extends('admin.layout.footer')
