@extends('admin.layout.app')
@extends('admin.layout.header')
@extends('admin.layout.sidebar')

@section('konten')
    <main class="main users chart-page" id="skip-target">
        <div class="container">
            <h2 class="main-title">Tambah Galeri</h2>
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
            @error('bagian')
                <div class="alert alert-danger mt-3">
                    {{ $message }}
                </div>
            @enderror
            @error('status')
                <div class="alert alert-danger mt-3">
                    {{ $message }}
                </div>
            @enderror
            @error('foto')
                <div class="alert alert-danger mt-3">
                    {{ $message }}
                </div>
            @enderror
            <div class="row">
                <div class="col-lg-9">
                    <div class="users-table table-wrapper1">
                        <article class="sign-up">
                            <form class="sign-up-form form" action="{{ route('admin.galeri.kirim') }}" method="post"
                                style="width: 1100px;" enctype="multipart/form-data">
                                @csrf
                                <label class="form-label-wrapper">
                                    <p class="form-label">Nama</p>
                                    <input class="form-input" type="text" name="nama" placeholder="Masukan Nama"
                                        required>
                                </label>
                                <label class="form-label-wrapper">
                                    <p class="form-label">Status</p>
                                    <select class="form-input" name="status" id="status" required>
                                        <option value="Pilih" disabled selected>Pilih</option>
                                        <option value="Pegawai">Pegawai</option>
                                        <option value="Tenaga Ahli">Tenaga Ahli</option>
                                    </select>
                                </label>
                                <label class="form-label-wrapper">
                                    <p class="form-label">Bagian</p>
                                    <select class="form-input" name="bagian" id="bagian" required>
                                        <option value="Pilih" disabled selected>Pilih</option>
                                        <option value="Tata Usaha">Tata Usaha</option>
                                        <option value="Komunikasi dan Informasi Publik">Komunikasi dan Informasi Publik
                                        </option>
                                        <option value="Jaringan Komunikasi Data">Jaringan Komunikasi Data</option>
                                        <option value="Sistem Informasi, Siber dan Sandi">Sistem Informasi, Siber dan Sandi
                                        </option>
                                    </select>
                                </label>
                                <label class="form-label-wrapper">
                                    <p class="form-label">Foto</p>
                                    <input class="form-input" type="file" name="foto" accept="image/*" required>
                                </label>
                                <br>
                                <button class="btn btn-primary">Submit</button>&nbsp;
                                <a href="{{ route('admin.galeri.index') }}" class="btn btn-secondary">Kembali</a>
                            </form>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
@extends('admin.layout.footer')
