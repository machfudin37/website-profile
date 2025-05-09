@extends('admin.layout.app')
@extends('admin.layout.header')
@extends('admin.layout.sidebar')

@section('konten')
    <main class="main users chart-page" id="skip-target">
        <div class="container">
            <h2 class="main-title">Lihat Galeri</h2>
            <div class="row">
                <div class="col-lg-9">
                    <div class="users-table table-wrapper1">
                        <article class="sign-up">
                            <form class="sign-up-form form" action="{{ route('admin.galeri.ubah', ['id' => $galeri->id]) }}"
                                method="POST" style="width: 1100px;" enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                <label class="form-label-wrapper">
                                    <p class="form-label">Nama</p>
                                    <input class="form-input" type="text" name="nama" value="{{ $galeri->nama }}"
                                        readonly>
                                </label>
                                <label class="form-label-wrapper">
                                    <p class="form-label">Status</p>
                                    <input class="form-input" type="text" name="status" value="{{ $galeri->status }}"
                                        readonly>
                                </label>
                                <label class="form-label-wrapper">
                                    <p class="form-label">Bagian</p>
                                    <input class="form-input" type="text" name="bagian" value="{{ $galeri->bagian }}"
                                        readonly>
                                </label>
                                <label class="form-label-wrapper">
                                    <p class="form-label">Foto</p>
                                    <img src="{{ asset('assets/pegawai/foto/' . $galeri->foto) }}"
                                        style="width: 80px; height: 70px;">
                                </label>
                                <br>
                                <br>
                                <a href="{{ route('admin.galeri.index') }}" class="btn btn-secondary">Kembali</a>
                            </form>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
@extends('admin.layout.footer')
