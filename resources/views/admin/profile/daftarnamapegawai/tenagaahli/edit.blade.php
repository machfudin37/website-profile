@extends('admin.layout.app')
@extends('admin.layout.header')
@extends('admin.layout.sidebar')

@section('konten')
    <main class="main users chart-page" id="skip-target">
        <div class="container">
            <h2 class="main-title">Edit Tenaga Ahli</h2>
            @if (Session::has('errorta'))
                <div class="alert alert-danger mt-3">
                    <p style="color: red">
                        {{ Session::get('errorta') }}
                    </p>
                </div>
            @endif
            @error('nama')
                <div class="alert alert-danger mt-3">
                    {{ $message }}
                </div>
            @enderror
            @error('seksi')
                <div class="alert alert-danger mt-3">
                    {{ $message }}
                </div>
            @enderror
            @error('bidang')
                <div class="alert alert-danger mt-3">
                    {{ $message }}
                </div>
            @enderror
            <div class="row">
                <div class="col-lg-9">
                    <div class="users-table table-wrapper1">
                        <article class="sign-up">
                            <form class="sign-up-form form"
                                action="{{ route('admin.tenagaahli.ubah', ['id' => $tenagaahli->id]) }}" method="POST"
                                style="width: 1100px;" enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                <label class="form-label-wrapper">
                                    <p class="form-label">Nama</p>
                                    <input class="form-input" type="text" name="nama" value="{{ $tenagaahli->nama }}">
                                </label>
                                <label class="form-label-wrapper">
                                    <p class="form-label">Seksi</p>
                                    <select class="form-input" name="seksi" id="seksi">
                                        <option value="Pilih" disabled>Pilih</option>
                                        <option value="Tata Usaha"
                                            {{ $tenagaahli->seksi == 'Tata Usaha' ? 'selected' : '' }}>
                                            Tata Usaha</option>
                                        <option value="Komunikasi dan Informasi Publik"
                                            {{ $tenagaahli->seksi == 'Komunikasi dan Informasi Publik' ? 'selected' : '' }}>
                                            Komunikasi dan Informasi Publik</option>
                                        <option value="Jaringan Komunikasi Data"
                                            {{ $tenagaahli->seksi == 'Jaringan Komunikasi Data' ? 'selected' : '' }}>
                                            Jaringan
                                            Komunikasi Data</option>
                                        <option value="Sistem Informasi, Siber dan Sandi"
                                            {{ $tenagaahli->seksi == 'Sistem Informasi, Siber dan Sandi' ? 'selected' : '' }}>
                                            Sistem Informasi, Siber dan Sandi</option>
                                    </select>
                                </label>
                                <label class="form-label-wrapper">
                                    <p class="form-label">Bidang</p>
                                    <input class="form-input" type="text" name="bidang"
                                        value="{{ $tenagaahli->bidang }}">
                                </label>
                                <br>
                                <button type="submit" class="btn btn-primary">Submit</button>&nbsp;
                                <a href="{{ route('admin.daftarnamapegawai.index') }}"
                                    class="btn btn-secondary">Kembali</a>
                            </form>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
@extends('admin.layout.footer')
