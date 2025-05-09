@extends('admin.layout.app')
@extends('admin.layout.header')
@extends('admin.layout.sidebar')

@section('konten')
    <main class="main users chart-page" id="skip-target">
        <div class="container">
            <h2 class="main-title">Edit Pengumuman</h2>
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
            @error('pdf')
                <div class="alert alert-danger mt-3">
                    {{ $message }}
                </div>
            @enderror
            <div class="row">
                <div class="col-lg-9">
                    <div class="users-table table-wrapper1">
                        <article class="sign-up">
                            <form class="sign-up-form form"
                                action="{{ route('admin.pengumuman.ubah', ['id' => $pengumuman->id]) }}" method="POST"
                                style="width: 1100px;" enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                <label class="form-label-wrapper">
                                    <p class="form-label">Isi</p>
                                    <textarea class="form-input" name="isi" id="isi" cols="30" rows="10" style="height: 100px">{{ $pengumuman->isi }}</textarea>
                                </label>
                                <label class="form-label-wrapper">
                                    <p class="form-label">PDF</p>
                                    <input class="form-input" type="file" name="pdf" accept=".pdf">
                                </label>
                                <br>
                                <button type="submit" class="btn btn-primary">Submit</button>&nbsp;
                                <a href="{{ route('admin.pengumuman.index') }}" class="btn btn-secondary">Kembali</a>
                            </form>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
@extends('admin.layout.footer')
