@extends('admin.layout.app')
@extends('admin.layout.header')
@extends('admin.layout.sidebar')

@section('konten')
    <main class="main users chart-page" id="skip-target">
        <div class="container">
            <h2 class="main-title">Galeri</h2>
            <a class="btn btn-primary" href="{{ route('admin.galeri.tambah') }}">Tambah</a>
            <br><br>
            <a class="btn btn-success" href="{{ route('galeri.tu') }}" target="_blank">Lihat Tampilan Tata Usaha</a>
            <a class="btn btn-success" href="{{ route('galeri.kip') }}" target="_blank">Lihat Tampilan Komunikasi dan
                Informasi
                Publik</a>
            <a class="btn btn-success" href="{{ route('galeri.jkd') }}" target="_blank">Lihat Tampilan Jaringan Komunikasi
                Data</a><br><br>
            <a class="btn btn-success" href="{{ route('galeri.siss') }}" target="_blank">Lihat Tampilan Sistem Informasi
                Siber dan
                Sandi</a>
            <br><br>
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
            </div>
            <div class="row">
                <div class="col-lg-9">
                    <div class="users-table table-wrapper1">
                        <table class="posts-table" style="width: 1100px;">
                            <thead>
                                <tr class="users-table-info">
                                    <th>
                                        <label class="users-table__checkbox ms-20">
                                            No
                                        </label>
                                    </th>
                                    <th>
                                        Nama
                                    </th>
                                    <th>
                                        Bagian
                                    </th>
                                    <th>
                                        Status
                                    </th>
                                    <th>
                                        Foto
                                    </th>
                                    <th>
                                        Action
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($galeri as $index => $g)
                                    <tr>
                                        <td>{{ $index + $galeri->firstItem() }}</td>
                                        <td class="truncate">{{ $g->nama }}</td>
                                        <td class="truncate">{{ $g->bagian }}</td>
                                        <td>{{ $g->status }}</td>
                                        <td><img src="{{ asset('assets/pegawai/foto/' . $g->foto) }}"
                                                style="width: 80px; height: 70px;">
                                        </td>
                                        <td>
                                            <span class="p-relative">
                                                <button class="dropdown-btn transparent-btn" type="button"
                                                    title="More info">
                                                    <div class="sr-only">Pilihan</div>
                                                    <i data-feather="more-horizontal" aria-hidden="true"></i>
                                                </button>
                                                <ul class="users-item-dropdown dropdown">
                                                    <li>
                                                        <form action="{{ route('admin.galeri.lihat', ['id' => $g->id]) }}"
                                                            method="get">
                                                            @csrf
                                                            <button type="submit" class="btn btn-success">Lihat</button>
                                                        </form>
                                                    </li>
                                                    <li>
                                                        <form action="{{ route('admin.galeri.edit', ['id' => $g->id]) }}"
                                                            method="get">
                                                            @csrf
                                                            <button type="submit" class="btn btn-primary">Edit</button>
                                                        </form>
                                                    </li>
                                                    <li>
                                                        <form action="{{ route('admin.galeri.hapus', ['id' => $g->id]) }}"
                                                            method="post">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button class="btn btn-danger" type="submit">Hapus</button>
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
                        {{ $galeri->appends(request()->input())->links('admin.layout.pagination') }}
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection

@extends('admin.layout.footer')

@section('css')
    <style>
        .truncate {
            max-width: 100px;
            white-space: nowrap;
            overflow: hidden;
            text-overflow: ellipsis;
            /* Menampilkan titik-titik jika teks terpotong */
        }
    </style>
@endsection
