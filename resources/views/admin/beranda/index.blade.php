@extends('admin.layout.app')
@extends('admin.layout.header')
@extends('admin.layout.sidebar')

@section('konten')
    <main class="main users chart-page" id="skip-target">
        <div class="container">
            <h2 class="main-title">Beranda</h2>
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
                @error('nama')
                    <div class="alert alert-danger mt-3">
                        {{ $message }}
                    </div>
                @enderror

                @error('email')
                    <div class="alert alert-danger mt-3">
                        {{ $message }}
                    </div>
                @enderror

                @error('subject')
                    <div class="alert alert-danger mt-3">
                        {{ $message }}
                    </div>
                @enderror

                @error('tahun')
                    <div class="alert alert-danger mt-3">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="row">
                <div class="col-lg-9">
                    <div class="users-table table-wrapper1">
                        <article class="sign-up">
                            <form class="sign-up-form form"
                                action="{{ route('admin.beranda.ubah', ['id' => $beranda->id]) }}" method="POST"
                                style="width: 1100px;">
                                @csrf
                                @method('PUT')
                                <label class="form-label-wrapper">
                                    <p class="form-label">Nama Perusahaan</p>
                                    <input type="text" name="nama" value="{{ $beranda->nama }}" class="form-input">
                                </label>
                                <label class="form-label-wrapper">
                                    <p class="form-label">Subject</p>
                                    <input type="text" name="subject" value="{{ $beranda->subject }}" class="form-input">
                                </label>
                                <label class="form-label-wrapper">
                                    <p class="form-label">Tahun</p>
                                    <input type="text" name="tahun" value="{{ $beranda->tahun }}" class="form-input">
                                </label>
                                <label class="form-label-wrapper">
                                    <p class="form-label">Tempat</p>
                                    <input type="text" name="tempat" value="{{ $beranda->tempat }}" class="form-input">
                                </label>
                                <br>
                                <button type="submit" class="btn btn-primary">Ubah</button>&nbsp;
                            </form>
                        </article>
                    </div>
                </div>
            </div>
            <br>
            <div class="messages">
                @if (Session::has('successkontak'))
                    <div class="alert alert-success mt-3">
                        <p style="color: green">
                            {{ Session::get('success') }}
                        </p>
                    </div>
                @elseif (Session::has('errorkontak'))
                    <div class="alert alert-danger mt-3">
                        <p style="color: red">
                            {{ Session::get('error') }}
                        </p>
                    </div>
                @endif
                @error('alamat')
                    <div class="alert alert-danger mt-3">
                        {{ $message }}
                    </div>
                @enderror

                @error('telpon')
                    <div class="alert alert-danger mt-3">
                        {{ $message }}
                    </div>
                @enderror

                @error('email')
                    <div class="alert alert-danger mt-3">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="row">
                <div class="col-lg-9">
                    <div class="users-table table-wrapper1">
                        <article class="sign-up">
                            <form class="sign-up-form form"
                                action="{{ route('admin.beranda.ubahkontak', ['id' => $beranda->id]) }}" method="POST"
                                style="width: 1100px;">
                                @csrf
                                @method('PUT')
                                <label class="form-label-wrapper">
                                    <p class="form-label">Alamat</p>
                                    <input type="text" name="alamat" value="{{ $beranda->alamat }}" class="form-input">
                                </label>
                                <label class="form-label-wrapper">
                                    <p class="form-label">Telp/Fax</p>
                                    <input type="text" name="telpon" value="{{ $beranda->telpon }}" class="form-input">
                                </label>
                                <label class="form-label-wrapper">
                                    <p class="form-label">Email</p>
                                    <input type="text" name="email" value="{{ $beranda->email }}" class="form-input">
                                </label>
                                <br>
                                <button type="submit" class="btn btn-primary">Ubah</button>&nbsp;
                            </form>
                        </article>
                    </div>
                </div>
            </div>
            <br>
            <div class="messages">
                @if (Session::has('successrunningtext'))
                    <div class="alert alert-success mt-3">
                        <p style="color: green">
                            {{ Session::get('successrunningtext') }}
                        </p>
                    </div>
                @elseif (Session::has('errorrunningtext'))
                    <div class="alert alert-danger mt-3">
                        <p style="color: red">
                            {{ Session::get('errorrunningtext') }}
                        </p>
                    </div>
                @endif
            </div>
            <div class="row">
                <div class="col-lg-9">
                    <div class="users-table table-wrapper1">
                        <article class="sign-up">
                            <form class="sign-up-form form"
                                action="{{ route('admin.beranda.ubahrunningtext', ['id' => $beranda->id]) }}"
                                method="POST" enctype="multipart/form-data" style="width: 1100px;">
                                @csrf
                                @method('PUT')
                                <label class="form-label-wrapper">
                                    <p class="form-label">Pengumuman</p>
                                    <select class="form-input" name="runningtext" id="runningtext">
                                        <option value="Pilih" disabled>Pilih</option>
                                        @foreach ($pengumuman as $p)
                                            <option value="{{ $p->isi }}"
                                                {{ $beranda->runningtext == $p->isi ? 'selected' : '' }}>
                                                {{ $p->isi }}
                                            </option>
                                        @endforeach
                                    </select>
                                </label>
                                <br>
                                <button type="submit" class="btn btn-primary">Ubah</button>&nbsp;
                            </form>
                        </article>
                    </div>
                </div>
            </div>
            <br>
            <div class="messages">
                @if (Session::has('successlogo'))
                    <div class="alert alert-success mt-3">
                        <p style="color: green">
                            {{ Session::get('successlogo') }}
                        </p>
                    </div>
                @elseif (Session::has('errorlogo'))
                    <div class="alert alert-danger mt-3">
                        <p style="color: red">
                            {{ Session::get('errorlogo') }}
                        </p>
                    </div>
                @endif
            </div>
            <div class="row">
                <div class="col-lg-9">
                    <div class="users-table table-wrapper1">
                        <article class="sign-up">
                            <form class="sign-up-form form"
                                action="{{ route('admin.beranda.ubahlogo', ['id' => $beranda->id]) }}" method="POST"
                                enctype="multipart/form-data" style="width: 1100px;">
                                @csrf
                                @method('PUT')
                                <label class="form-label-wrapper">
                                    <p class="form-label">Logo</p>
                                    <img src="{{ asset('assets/logo/' . $beranda->logo) }}"
                                        style="width: 200px;height:200px;">
                                    <br>
                                    <input type="file" name="logo" class="form-input" accept="image/*">
                                </label>
                                <br>
                                <button type="submit" class="btn btn-primary">Ubah</button>&nbsp;
                            </form>
                        </article>
                    </div>
                </div>
            </div>
            <br>
            <div class="messages">
                @if (Session::has('successtupoksi'))
                    <div class="alert alert-success mt-3">
                        <p style="color: green">
                            {{ Session::get('successtupoksi') }}
                        </p>
                    </div>
                @elseif (Session::has('errortupoksi'))
                    <div class="alert alert-danger mt-3">
                        <p style="color: red">
                            {{ Session::get('errortupoksi') }}
                        </p>
                    </div>
                @endif
            </div>
            <div class="row">
                <div class="col-lg-9">
                    <div class="users-table table-wrapper1">
                        <article class="sign-up">
                            <form class="sign-up-form form"
                                action="{{ route('admin.beranda.ubahtupoksi', ['id' => $beranda->id]) }}" method="POST"
                                enctype="multipart/form-data" style="width: 1100px;">
                                @csrf
                                @method('PUT')
                                <label class="form-label-wrapper">
                                    <p class="form-label">Tupoksi</p>
                                    <a class="btn btn-success"
                                        href="{{ route('admin.tupoksi.display', ['id' => $beranda->id]) }}"
                                        target="__blank" style="height:40px;width:140px;">Display
                                        PDF</a>
                                    <br>
                                    <input type="file" name="tupoksi" class="form-input" accept=".pdf">
                                </label>
                                <br>
                                <button type="submit" class="btn btn-primary">Ubah</button>&nbsp;
                            </form>
                        </article>
                    </div>
                </div>
            </div>
            <br>
            <div class="messages">
                @if (Session::has('successbg'))
                    <div class="alert alert-success mt-3">
                        <p style="color: green">
                            {{ Session::get('successbg') }}
                        </p>
                    </div>
                @elseif (Session::has('errorbg'))
                    <div class="alert alert-danger mt-3">
                        <p style="color: red">
                            {{ Session::get('errorbg') }}
                        </p>
                    </div>
                @endif
            </div>
            <div class="row">
                <div class="col-lg-9">
                    <div class="users-table table-wrapper1">
                        <article class="sign-up">
                            <form class="sign-up-form form"
                                action="{{ route('admin.beranda.ubahbackground', ['id' => $beranda->id]) }}"
                                method="POST" enctype="multipart/form-data" style="width: 1100px;">
                                @csrf
                                @method('PUT')
                                <label class="form-label-wrapper">
                                    <p class="form-label">Background</p>
                                    <img src="{{ asset('assets/background/' . $beranda->background) }}"
                                        style="width: 200px;height:200px;">
                                    <br>
                                    <input type="file" name="background" class="form-input" accept="image/*">
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
