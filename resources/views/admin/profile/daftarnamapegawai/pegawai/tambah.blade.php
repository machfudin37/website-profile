@extends('admin.layout.app')
@extends('admin.layout.header')
@extends('admin.layout.sidebar')

@section('konten')
    <main class="main users chart-page" id="skip-target">
        <div class="container">
            <h2 class="main-title">Tambah Pegawai</h2>
            @if (Session::has('error'))
                <div class="alert alert-danger mt-3">
                    <p style="color: red">
                        {{ Session::get('error') }}
                    </p>
                </div>
            @endif
            @error('nama')
                <div class="alert alert-danger mt-3">
                    {{ $message }}
                </div>
            @enderror
            @error('nip')
                <div class="alert alert-danger mt-3">
                    {{ $message }}
                </div>
            @enderror
            @error('golongan')
                <div class="alert alert-danger mt-3">
                    {{ $message }}
                </div>
            @enderror
            @error('jabatan')
                <div class="alert alert-danger mt-3">
                    {{ $message }}
                </div>
            @enderror
            <div class="row">
                <div class="col-lg-9">
                    <div class="users-table table-wrapper1">
                        <article class="sign-up">
                            <form class="sign-up-form form" action="{{ route('admin.pegawai.kirim') }}" method="post"
                                style="width: 1100px;" enctype="multipart/form-data">
                                @csrf
                                <label class="form-label-wrapper">
                                    <p class="form-label">Nama</p>
                                    <input class="form-input" type="text" name="nama" placeholder="Masukan Nama"
                                        required>
                                </label>
                                <label class="form-label-wrapper">
                                    <p class="form-label">NIP</p>
                                    <input class="form-input" type="text" name="nip" placeholder="Masukan NIP"
                                        required>
                                </label>
                                <label class="form-label-wrapper">
                                    <p class="form-label">Golongan</p>
                                    <input class="form-input" type="text" name="golongan" placeholder="Masukan Golongan"
                                        required>
                                </label>
                                <label class="form-label-wrapper">
                                    <p class="form-label">Jabatan</p>
                                    <input class="form-input" type="text" name="jabatan" placeholder="Masukan Jabatan"
                                        required>
                                </label>
                                <br>
                                <button class="btn btn-primary">Submit</button>&nbsp;
                                <a href="{{ route('admin.daftarnamapegawai.index') }}" class="btn btn-secondary">Kembali</a>
                            </form>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
@extends('admin.layout.footer')
