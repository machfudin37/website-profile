@extends('admin.layout.app')
@extends('admin.layout.header')
@extends('admin.layout.sidebar')

@section('konten')
    <main class="main users chart-page" id="skip-target">
        <div class="container">
            <h2 class="main-title">Tambah Tugas dan Fungsi Kominfotik</h2>
            @if (Session::has('error'))
                <div class="alert alert-danger mt-3">
                    <p style="color: red">
                        {{ Session::get('error') }}
                    </p>
                </div>
            @endif
            @error('isi')
                <div class="alert alert-danger mt-3">
                    {{ $message }}
                </div>
            @enderror
            <div class="row">
                <div class="col-lg-9">
                    <div class="users-table table-wrapper1">
                        <article class="sign-up">
                            <form class="sign-up-form form" action="{{ route('admin.tugasdanfungsikominfotik.kirim') }}"
                                method="post" style="width: 1100px;">
                                @csrf
                                <label class="form-label-wrapper">
                                    <p class="form-label">Isi</p>
                                    <textarea class="form-input" type="text" name="isi" id="isi" cols="30" rows="10"
                                        style="height: 100px" placeholder="Masukan Isi"></textarea>
                                </label>
                                <br>
                                <button class="btn btn-primary">Submit</button>&nbsp;
                                <a href="{{ route('admin.tugasdanfungsikominfotik.isi.index') }}"
                                    class="btn btn-secondary">Kembali</a>
                            </form>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
@extends('admin.layout.footer')
