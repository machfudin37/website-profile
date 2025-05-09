@extends('admin.layout.app')
@extends('admin.layout.header')
@extends('admin.layout.sidebar')

@section('konten')
    <main class="main users chart-page" id="skip-target">
        <div class="container">
            <h2 class="main-title">Informasi Komunikasi dan Informasi Publik</h2>
            <a class="btn btn-success" href="{{ route('data.wartawan.lihat') }}">Lihat Tampilan
                Data Jurnalis/Wartawan JT</a>
            <a class="btn btn-success" href="{{ route('organisasi.kewartawanan.lihat', ['id' => 1]) }}">Lihat Tampilan
                Organisasi
                Kewartawanan</a>
            <a class="btn btn-primary" href="{{ route('admin.organisasi.edit', ['id' => 1]) }}">Edit Tampilan Organisasi
                Kewartawanan</a>
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
                @error('media')
                    <div class="alert alert-danger mt-3">
                        {{ $message }}
                    </div>
                @enderror
                @error('jenis_media')
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
                                    <h2 class="main-title">Data Jurnalis/Wartawan Jakarta Timur</h2>
                                    <a class="btn btn-primary" href="{{ route('admin.kip.wartawan.tambah') }}">Tambah</a>
                                    <div class="users-table table-wrapper1">
                                        <article class="sign-up">
                                            <div class="row">
                                                <div class="col-lg-9">
                                                    <div class="users-table table-wrapper1">
                                                        <table class="posts-table" style="width: 1000px;">
                                                            <thead>
                                                                <tr class="users-table-info">
                                                                    <th style="width: 70px;">
                                                                        <label class="users-table__checkbox ms-20">
                                                                            No
                                                                        </label>
                                                                    </th>
                                                                    <th>
                                                                        Nama Wartawan
                                                                    </th>
                                                                    <th>
                                                                        Jenis Media
                                                                    </th>
                                                                    <th>
                                                                        Media
                                                                    </th>
                                                                    <th>
                                                                        Action
                                                                    </th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                @foreach ($wartawan as $index => $w)
                                                                    <tr>
                                                                        <td>{{ $index + $wartawan->firstItem() }}</td>
                                                                        <td>{{ $w->nama }}</td>
                                                                        <td>{{ $w->jenis_media }}</td>
                                                                        <td>{{ $w->media }}</td>
                                                                        <td>
                                                                            <span class="p-relative">
                                                                                <button class="dropdown-btn transparent-btn"
                                                                                    type="button" title="More info">
                                                                                    <div class="sr-only">Pilihan</div>
                                                                                    <i data-feather="more-horizontal"
                                                                                        aria-hidden="true"></i>
                                                                                </button>
                                                                                <ul class="users-item-dropdown dropdown">
                                                                                    <li>
                                                                                        <form
                                                                                            action="{{ route('admin.kip.wartawan.edit', ['id' => $w->id]) }}"
                                                                                            method="get">
                                                                                            @csrf
                                                                                            <button type="submit"
                                                                                                class="btn btn-primary">Edit</button>
                                                                                        </form>
                                                                                    </li>
                                                                                    <li>
                                                                                        <form
                                                                                            action="{{ route('admin.kip.wartawan.hapus', ['id' => $w->id]) }}"
                                                                                            method="post">
                                                                                            @csrf
                                                                                            @method('DELETE')
                                                                                            <button class="btn btn-danger"
                                                                                                type="submit">Hapus</button>
                                                                                        </form>
                                                                                    </li>
                                                                                </ul>
                                                                            </span>
                                                                        </td>
                                                                    </tr>
                                                                @endforeach
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                    <br>
                                                    <div class="pagination">
                                                        {{ $wartawan->appends(request()->input())->links('admin.layout.pagination') }}
                                                    </div>
                                                </div>
                                            </div>
                                        </article>
                                    </div>
                                </div>
                            </div>
                        </article>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
@extends('admin.layout.footer')
