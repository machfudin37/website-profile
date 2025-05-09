@extends('admin.layout.app')
@extends('admin.layout.header')
@extends('admin.layout.sidebar')

@section('konten')
    <main class="main users chart-page" id="skip-target">
        <div class="container">
            <h2 class="main-title">Tambah Wartawan</h2>
            @if (Session::has('error'))
                <div class="alert alert-danger mt-3">
                    <p style="color: red">
                        {{ Session::get('errorta') }}
                    </p>
                </div>
            @endif
            @error('sub_menu')
                <div class="alert alert-danger mt-3">
                    {{ $message }}
                </div>
            @enderror
            @error('pdf')
                <div class="alert alert-danger mt-3">
                    {{ $message }}
                </div>
            @enderror
            <div class="row">
                <div class="col-lg-9">
                    <div class="users-table table-wrapper1">
                        <article class="sign-up">
                            <form class="sign-up-form form" action="{{ route('admin.kip.wartawan.kirim') }}" method="post"
                                style="width: 1100px;" enctype="multipart/form-data">
                                @csrf
                                <label class="form-label-wrapper">
                                    <p class="form-label">Nama</p>
                                    <input class="form-input" type="text" name="nama" placeholder="Masukan Nama"
                                        required>
                                </label>
                                <label class="form-label-wrapper">
                                    <p class="form-label">Jenis Media</p>
                                    <select class="form-input" name="jenis_media" id="jenis_media" required>
                                        <option value="Pilih" disabled selected>Pilih</option>
                                        <option value="TV">TV</option>
                                        <option value="Website">Website
                                        </option>
                                        <option value="Media Cetak">Media Cetak</option>
                                        <option value="Radio">Radio
                                        </option>
                                    </select>
                                </label>
                                <label class="form-label-wrapper">
                                    <p class="form-label">Media</p>
                                    <input class="form-input" type="text" name="media" placeholder="Masukan Media"
                                        required>
                                </label>
                                <br>
                                <button class="btn btn-primary">Submit</button>&nbsp;
                                <a href="{{ route('admin.informasi.kip.index') }}" class="btn btn-secondary">Kembali</a>
                            </form>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
@extends('admin.layout.footer')
