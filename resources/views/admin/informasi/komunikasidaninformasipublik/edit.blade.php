@extends('admin.layout.app')
@extends('admin.layout.header')
@extends('admin.layout.sidebar')

@section('konten')
    <main class="main users chart-page" id="skip-target">
        <div class="container">
            <h2 class="main-title">Edit Wartawan</h2>
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
            @error('jenis_media')
                <div class="alert alert-danger mt-3">
                    {{ $message }}
                </div>
            @enderror
            @error('media')
                <div class="alert alert-danger mt-3">
                    {{ $message }}
                </div>
            @enderror
            <div class="row">
                <div class="col-lg-9">
                    <div class="users-table table-wrapper1">
                        <article class="sign-up">
                            <form class="sign-up-form form"
                                action="{{ route('admin.kip.wartawan.ubah', ['id' => $wartawan->id]) }}" method="POST"
                                style="width: 1100px;" enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                <label class="form-label-wrapper">
                                    <p class="form-label">Nama</p>
                                    <input class="form-input" type="text" name="nama" value="{{ $wartawan->nama }}">
                                </label>
                                <label class="form-label-wrapper">
                                    <p class="form-label">Jenis Media</p>
                                    <select class="form-input" name="jenis_media" id="jenis_media">
                                        <option value="Pilih" disabled>Pilih</option>
                                        <option value="TV" {{ $wartawan->jenis_media == 'TV' ? 'selected' : '' }}>
                                            TV</option>
                                        <option value="Website" {{ $wartawan->jenis_media == 'Website' ? 'selected' : '' }}>
                                            Website</option>
                                        <option value="Media Cetak"
                                            {{ $wartawan->jenis_media == 'Media Cetak' ? 'selected' : '' }}>Media Cetak
                                        </option>
                                        <option value="Radio" {{ $wartawan->jenis_media == 'Radio' ? 'selected' : '' }}>
                                            Radio</option>
                                    </select>
                                </label>
                                <label class="form-label-wrapper">
                                    <p class="form-label">Media</p>
                                    <input class="form-input" type="text" name="media" value="{{ $wartawan->media }}">
                                </label>
                                <br>
                                <button type="submit" class="btn btn-primary">Submit</button>&nbsp;
                                <a href="{{ route('admin.informasi.kip.index') }}" class="btn btn-secondary">Kembali</a>
                            </form>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
@extends('admin.layout.footer')
