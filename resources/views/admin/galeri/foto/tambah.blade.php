@extends('admin.layout.app')
@extends('admin.layout.header')
@extends('admin.layout.sidebar')

@section('konten')
    <main class="main users chart-page" id="skip-target">
        <div class="container">
            <h2 class="main-title">Tambah Berita Kegitan Foto</h2>
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
                            <form class="sign-up-form form" action="{{ route('admin.foto.kirim') }}" method="post"
                                style="width: 1100px;" enctype="multipart/form-data">
                                @csrf
                                <label class="form-label-wrapper">
                                    <p class="form-label">Judul</p>
                                    <input class="form-input" type="text" name="judul" placeholder="Masukan Judul"
                                        required>
                                </label>
                                <label class="form-label-wrapper">
                                    <p class="form-label">Keterangan</p>
                                    <textarea id="editor" class="form-input" name="keterangan" id="keterangan" cols="30" rows="10"
                                        style="height: 100px" placeholder="Masukan Keterangan" required></textarea>
                                </label>
                                <label class="form-label-wrapper">
                                    <p class="form-label">Gambar</p>
                                    <input class="form-input" type="file" name="gambar" accept="image/*" required>
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
                                <br>
                                <button class="btn btn-primary">Submit</button>&nbsp;
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
