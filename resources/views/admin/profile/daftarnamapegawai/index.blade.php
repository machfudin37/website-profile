@extends('admin.layout.app')
@extends('admin.layout.header')
@extends('admin.layout.sidebar')

@section('konten')
    <main class="main users chart-page" id="skip-target">
        <div class="container">
            <h2 class="main-title">Daftar Nama Pegawai</h2>
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
                @error('nip')
                    <div class="alert alert-danger mt-3">
                        {{ $message }}
                    </div>
                @enderror
                @error('golongan')
                    <div class="alert alert-danger mt-3">
                        {{ $message }}
                    </div>
                @enderror
                @error('jabatan')
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
                                    <h2 class="main-title">Pegawai</h2>
                                    <a class="btn btn-primary" href="{{ route('admin.pegawai.tambah') }}">Tambah</a>
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
                                                                        Nama
                                                                    </th>
                                                                    <th>
                                                                        NIP
                                                                    </th>
                                                                    <th>
                                                                        GOL
                                                                    </th>
                                                                    <th>
                                                                        Jabatan
                                                                    </th>
                                                                    <th>
                                                                        Action
                                                                    </th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                @foreach ($pegawai as $index => $p)
                                                                    <tr>
                                                                        <td>{{ $index + $pegawai->firstItem() }}</td>
                                                                        <td>{{ $p->nama }}</td>
                                                                        <td>{{ $p->nip }}</td>
                                                                        <td>{{ $p->golongan }}</td>
                                                                        <td>{{ $p->jabatan }}</td>
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
                                                                                            action="{{ route('admin.pegawai.edit', ['id' => $p->id]) }}"
                                                                                            method="get">
                                                                                            @csrf
                                                                                            <button type="submit"
                                                                                                class="btn btn-primary">Edit</button>
                                                                                        </form>
                                                                                    </li>
                                                                                    <li>
                                                                                        <form
                                                                                            action="{{ route('admin.pegawai.hapus', ['id' => $p->id]) }}"
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
                                                        {{ $pegawai->appends(request()->input())->links('admin.layout.pagination') }}
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
            <br>
            <div class="messages">
                @if (Session::has('successta'))
                    <div class="alert alert-success mt-3">
                        <p style="color: green">
                            {{ Session::get('successta') }}
                        </p>
                    </div>
                @elseif (Session::has('errorta'))
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
            </div>
            <div class="row">
                <div class="col-lg-9">
                    <div class="users-table table-wrapper1">
                        <article class="sign-up">
                            <div class="row sign-up-form form" style="width: 1100px; margin-left:5px;">
                                <div class="col-lg-9">
                                    <h2 class="main-title">Tenaga Ahli</h2>
                                    <a class="btn btn-primary" href="{{ route('admin.tenagaahli.tambah') }}">Tambah</a>
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
                                                                        Nama
                                                                    </th>
                                                                    <th>
                                                                        Seksi
                                                                    </th>
                                                                    <th>
                                                                        Bidang
                                                                    </th>
                                                                    <th>
                                                                        Action
                                                                    </th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                @foreach ($tenagaahli as $index => $ta)
                                                                    <tr>
                                                                        <td>{{ $index + $tenagaahli->firstItem() }}</td>
                                                                        <td>{{ $ta->nama }}</td>
                                                                        <td>{{ $ta->seksi }}</td>
                                                                        <td>{{ $ta->bidang }}</td>
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
                                                                                            action="{{ route('admin.tenagaahli.edit', ['id' => $ta->id]) }}"
                                                                                            method="get">
                                                                                            @csrf
                                                                                            <button type="submit"
                                                                                                class="btn btn-primary">Edit</button>
                                                                                        </form>
                                                                                    </li>
                                                                                    <li>
                                                                                        <form
                                                                                            action="{{ route('admin.tenagaahli.hapus', ['id' => $ta->id]) }}"
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
                                                        {{ $tenagaahli->appends(request()->input())->links('admin.layout.pagination') }}
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
