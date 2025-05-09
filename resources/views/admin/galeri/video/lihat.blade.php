@extends('admin.layout.app')
@extends('admin.layout.header')
@extends('admin.layout.sidebar')

@section('konten')
    <main class="main users chart-page" id="skip-target">
        <div class="container">
            <h2 class="main-title">Lihat Berita Kegiatan Video</h2>
            <div class="row">
                <div class="col-lg-9">
                    <div class="users-table table-wrapper1">
                        <article class="sign-up">
                            <form class="sign-up-form form" action="{{ route('admin.video.ubah', ['id' => $video->id]) }}"
                                method="POST" style="width: 1100px;" enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                <label class="form-label-wrapper">
                                    <p class="form-label">Judul</p>
                                    <input class="form-input" type="text" name="judul" value="{{ $video->judul }}"
                                        readonly>
                                </label>
                                <label class="form-label-wrapper">
                                    <p class="form-label">Keterangan</p>
                                    <textarea id="editor" class="form-input" name="keterangan" id="keterangan" cols="30" rows="10"
                                        style="height: 100px" readonly>{{ $video->keterangan }}</textarea>
                                </label>
                                <label class="form-label-wrapper">
                                    <p class="form-label">Video</p>
                                    {!! str_replace(['width="', 'height="'], ['width="250" height="100" style="max-width: 800px;"'], $video->video) !!}
                                </label>
                                <label class="form-label-wrapper">
                                    <p class="form-label">Bagian</p>
                                    <input class="form-input" type="text" name="bagian" value="{{ $video->bagian }}"
                                        readonly>
                                </label>
                                <br>
                                <br>
                                <a href="{{ route('admin.video.index') }}" class="btn btn-secondary">Kembali</a>
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
