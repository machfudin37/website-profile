@extends('admin.layout.app')
@extends('admin.layout.header')
@extends('admin.layout.sidebar')

@section('konten')
    <main class="main users chart-page" id="skip-target">
        <div class="container">
            <h2 class="main-title">Edit Berita Kegiatan Foto</h2>
            @if (Session::has('error'))
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
            @error('keterangan')
                <div class="alert alert-danger mt-3">
                    {{ $message }}
                </div>
            @enderror
            @error('gambar')
                <div class="alert alert-danger mt-3">
                    {{ $message }}
                </div>
            @enderror
            @error('bagian')
                <div class="alert alert-danger mt-3">
                    {{ $message }}
                </div>
            @enderror
            <div class="row">
                <div class="col-lg-9">
                    <div class="users-table table-wrapper1">
                        <article class="sign-up">
                            <form class="sign-up-form form" action="{{ route('admin.foto.ubah', ['id' => $foto->id]) }}"
                                method="POST" style="width: 1100px;" enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                <label class="form-label-wrapper">
                                    <p class="form-label">Judul</p>
                                    <input class="form-input" type="text" name="judul" value="{{ $foto->judul }}">
                                </label>
                                <label class="form-label-wrapper">
                                    <p class="form-label">Keterangan</p>
                                    <textarea id="editor" class="form-input" name="keterangan" id="keterangan" cols="30" rows="10"
                                        style="height: 100px">{{ $foto->keterangan }}</textarea>
                                </label>
                                <label class="form-label-wrapper">
                                    <p class="form-label">Gambar</p>
                                    <input class="form-input" type="file" name="gambar" accept="image/*">
                                </label>
                                <label class="form-label-wrapper">
                                    <p class="form-label">Bagian</p>
                                    <select class="form-input" name="bagian" id="bagian">
                                        <option value="Pilih" disabled>Pilih</option>
                                        <option value="Tata Usaha" {{ $foto->bagian == 'Tata Usaha' ? 'selected' : '' }}>
                                            Tata Usaha</option>
                                        <option value="Komunikasi dan Informasi Publik"
                                            {{ $foto->bagian == 'Komunikasi dan Informasi Publik' ? 'selected' : '' }}>
                                            Komunikasi dan Informasi Publik</option>
                                        <option value="Jaringan Komunikasi Data"
                                            {{ $foto->bagian == 'Jaringan Komunikasi Data' ? 'selected' : '' }}>Jaringan
                                            Komunikasi Data</option>
                                        <option value="Sistem Informasi, Siber dan Sandi"
                                            {{ $foto->bagian == 'Sistem Informasi, Siber dan Sandi' ? 'selected' : '' }}>
                                            Sistem Informasi, Siber dan Sandi</option>
                                    </select>
                                </label>
                                <br>
                                <button type="submit" class="btn btn-primary">Submit</button>&nbsp;
                                <a href="{{ route('admin.foto.index') }}" class="btn btn-secondary">Kembali</a>
                            </form>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <script src="//cdn.ckeditor.com/4.22.1/full/ckeditor.js"></script>
    <script>
        CKEDITOR.replace('editor', {

                ckfinder: {
                    uploadUrl: "{{ route('ckeditor.upload', ['_token' => csrf_token()]) }}",
                },
            })
            .catch(error => {
                console.error(error);
            });
    </script>
    <style>
        .cke {
            width: 1000px;
        }

        .cke_contents {
            height: 1000px;
        }
    </style>
@endsection
@extends('admin.layout.footer')
