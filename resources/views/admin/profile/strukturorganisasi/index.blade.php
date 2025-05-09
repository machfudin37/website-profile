@extends('admin.layout.app')
@extends('admin.layout.header')
@extends('admin.layout.sidebar')

@section('konten')
    <main class="main users chart-page" id="skip-target">
        <div class="container">
            <h2 class="main-title">Struktur Oraganisasi</h2>
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
            </div>
            <div class="row">
                <div class="col-lg-9">
                    <div class="users-table table-wrapper1">
                        <article class="sign-up">
                            <form class="sign-up-form form"
                                action="{{ route('admin.strukturorganisasi.ubahgambar', ['id' => $strukturorganisasi->id]) }}"
                                method="POST" enctype="multipart/form-data" style="width: 1100px;">
                                @csrf
                                @method('PUT')
                                <label class="form-label-wrapper">
                                    <img src="{{ asset('assets/strukturorganisasi/' . $strukturorganisasi->gambar) }}"
                                        style="width: 200px;height:200px;">
                                    <br>
                                    <input type="file" name="gambar" class="form-input" accept="image/*">
                                </label>
                                <br>
                                <button type="submit" class="btn btn-primary">Ubah</button>&nbsp;
                            </form>
                        </article>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
@extends('admin.layout.footer')
