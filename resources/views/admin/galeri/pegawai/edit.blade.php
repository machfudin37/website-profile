@extends('admin.layout.app')
@extends('admin.layout.header')
@extends('admin.layout.sidebar')

@section('konten')
    <main class="main users chart-page" id="skip-target">
        <div class="container">
            <h2 class="main-title">Edit Galeri</h2>
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
                            <form class="sign-up-form form" action="{{ route('admin.galeri.ubah', ['id' => $galeri->id]) }}"
                                method="POST" style="width: 1100px;" enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                <label class="form-label-wrapper">
                                    <p class="form-label">Nama</p>
                                    <input class="form-input" type="text" name="nama" value="{{ $galeri->nama }}">
                                </label>
                                <label class="form-label-wrapper">
                                    <p class="form-label">Status</p>
                                    <select class="form-input" name="status" id="status">
                                        <option value="Pilih" disabled>Pilih</option>
                                        <option value="Pegawai" {{ $galeri->bagian == 'Pegawai' ? 'selected' : '' }}>
                                            Pegawai</option>
                                        <option value="Tenaga Ahli"
                                            {{ $galeri->bagian == 'Tenaga Ahli' ? 'selected' : '' }}>
                                            Tenaga Ahli</option>
                                    </select>
                                </label>
                                <label class="form-label-wrapper">
                                    <p class="form-label">Bagian</p>
                                    <select class="form-input" name="bagian" id="bagian">
                                        <option value="Pilih" disabled>Pilih</option>
                                        <option value="Tata Usaha" {{ $galeri->bagian == 'Tata Usaha' ? 'selected' : '' }}>
                                            Tata Usaha</option>
                                        <option value="Komunikasi dan Informasi Publik"
                                            {{ $galeri->bagian == 'Komunikasi dan Informasi Publik' ? 'selected' : '' }}>
                                            Komunikasi dan Informasi Publik</option>
                                        <option value="Jaringan Komunikasi Data"
                                            {{ $galeri->bagian == 'Jaringan Komunikasi Data' ? 'selected' : '' }}>Jaringan
                                            Komunikasi Data</option>
                                        <option value="Sistem Informasi, Siber dan Sandi"
                                            {{ $galeri->bagian == 'Sistem Informasi, Siber dan Sandi' ? 'selected' : '' }}>
                                            Sistem Informasi, Siber dan Sandi</option>
                                    </select>
                                </label>
                                <label class="form-label-wrapper">
                                    <p class="form-label">Foto</p>
                                    <input class="form-input" type="file" name="foto" accept="image/*">
                                </label>
                                <br>
                                <button type="submit" class="btn btn-primary">Submit</button>&nbsp;
                                <a href="{{ route('admin.galeri.index') }}" class="btn btn-secondary">Kembali</a>
                            </form>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
@extends('admin.layout.footer')
