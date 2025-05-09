@extends('admin.layout.app')
@extends('admin.layout.header')
@extends('admin.layout.sidebar')

@section('konten')
    <main class="main users chart-page" id="skip-target">
        <div class="container">
            <h2 class="main-title">Edit Kepegawaian</h2>
            @if (Session::has('error'))
                <div class="alert alert-danger mt-3">
                    <p style="color: red">
                        {{ Session::get('error') }}
                    </p>
                </div>
            @endif
            @error('sub_menu')
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
                                action="{{ route('admin.tatausaha.keuangan.ubah', ['id' => $keuangan->id]) }}"
                                method="POST" style="width: 1100px;" enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                <label class="form-label-wrapper">
                                    <p class="form-label">Sub Menu</p>
                                    <input class="form-input" type="text" name="sub_menu"
                                        value="{{ $keuangan->sub_menu }}">
                                </label>
                                <label class="form-label-wrapper">
                                    <p class="form-label">PDF</p>
                                    <input class="form-input" type="file" name="pdf" accept=".pdf">
                                </label>
                                <br>
                                <button type="submit" class="btn btn-primary">Submit</button>&nbsp;
                                <a href="{{ route('admin.informasi.tatausaha.index') }}"
                                    class="btn btn-secondary">Kembali</a>
                            </form>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
@extends('admin.layout.footer')
