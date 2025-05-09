@extends('admin.layout.app')
@extends('admin.layout.header')
@extends('admin.layout.sidebar')

@section('konten')
    <main class="main users chart-page" id="skip-target">
        <div class="container">
            <h2 class="main-title">Lihat Kontak</h2>
            <div class="row">
                <div class="col-lg-9">
                    <div class="users-table table-wrapper1">
                        <article class="sign-up">
                            <form class="sign-up-form form" action="{{ route('admin.kontak') }}" method="get"
                                style="width: 1100px;">
                                @csrf
                                <label class="form-label-wrapper">
                                    <p class="form-label">Nama</p>
                                    <input class="form-input" type="text" name="nama" value="{{ $kontak->nama }}"
                                        readonly>
                                </label>
                                <label class="form-label-wrapper">
                                    <p class="form-label">Email</p>
                                    <input class="form-input" type="email" name="email" value="{{ $kontak->email }}"
                                        readonly>
                                </label>
                                <label class="form-label-wrapper">
                                    <p class="form-label">Subject</p>
                                    <input class="form-input" type="text" name="Subject" value="{{ $kontak->subject }}"
                                        readonly>
                                </label>
                                <label class="form-label-wrapper">
                                    <p class="form-label">Tanggal</p>
                                    <input class="form-input" type="tanggal" name="tanggal"
                                        value="{{ date('d-m-Y', strtotime($kontak->created_at)) }}" readonly>
                                </label>
                                <label class="form-label-wrapper">
                                    <p class="form-label">Message</p>
                                    <textarea class="form-input" name="message" id="message" cols="30" rows="10" style="height: 150px" readonly>{{ $kontak->message }}</textarea>
                                </label>
                                <br>
                                <button class="btn btn-secondary">Kembali</button>
                            </form>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
@extends('admin.layout.footer')
