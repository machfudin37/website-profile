@extends('admin.layout.app')
@extends('admin.layout.header')
@extends('admin.layout.sidebar')

@section('konten')
    <main class="main users chart-page" id="skip-target">
        <div class="container">
            <h2 class="main-title">Edit Daftar CCTV</h2>
            <a class="btn btn-success" target="_blank" href="{{ route('jkd.display.daftarcctv', ['id' => 1]) }}">Lihat
                Tampilan
                Daftar CCTV</a>
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
                @error('body')
                    <div class="alert alert-danger mt-3">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="row">
                <div class="col-lg-9">
                    <div class="users-table table-wrapper1">
                        <article class="sign-up">
                            <div class="row sign-up-form form" style="width: 1100px; margin-left:5px;">
                                <div class="col-lg-9">
                                    <form action="{{ route('admin.informasi.jkd.ubahdaftarcctv', ['id' => 1]) }}"
                                        method="POST" enctype="multipart/form-data">
                                        @csrf
                                        @method('PUT')
                                        <label class="form-label-wrapper">
                                            <p class="form-label">Judul</p>
                                            <input type="text" name="judul" value="{{ $cctv->judul }}"
                                                class="form-input">
                                        </label>
                                        <label class="form-label-wrapper">
                                            <p class="form-label">Body</p>
                                            <textarea name="body" id="editor">{{ $cctv->body }}</textarea>
                                        </label>
                                        <br>
                                        <button type="submit" class="btn btn-primary"> Ubah</button>
                                        <a class="btn btn-secondary" href="{{ route('admin.informasi.jkd.index') }}">
                                            Kembali</a>
                                    </form>
                                </div>
                            </div>
                        </article>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <script src="//cdn.ckeditor.com/4.22.1/standard/ckeditor.js"></script>
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
