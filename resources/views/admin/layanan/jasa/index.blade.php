@extends('admin.layout.app')
@extends('admin.layout.header')
@extends('admin.layout.sidebar')

@section('konten')
    <main class="main users chart-page" id="skip-target">
        <div class="container">
            <h2 class="main-title">Jasa</h2>
            <a class="btn btn-primary" href="{{ route('admin.jasa.tambah') }}">Tambah</a><br><br>
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
                @error('judul')
                    <div class="alert alert-danger mt-3">
                        {{ $message }}
                    </div>
                @enderror
                @error('keterangan')
                    <div class="alert alert-danger mt-3">
                        {{ $message }}
                    </div>
                @enderror
                @error('gambar')
                    <div class="alert alert-danger mt-3">
                        {{ $message }}
                    </div>
                @enderror
                @error('pdf')
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
                                        Judul
                                    </th>
                                    <th>
                                        Keterangan
                                    </th>
                                    <th>
                                        Gambar
                                    </th>
                                    <th>
                                        PDF
                                    </th>
                                    <th>
                                        Tanggal
                                    </th>
                                    <th>
                                        Action
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($jasa as $index => $j)
                                    <tr>
                                        <td>{{ $index + $jasa->firstItem() }}</td>
                                        <td class="truncate">{{ $j->judul }}</td>
                                        <td class="truncate">{{ $j->keterangan }}</td>
                                        <td><img src="{{ asset('assets/jasa/gambar/' . $j->gambar) }}"
                                                style="width: 80px; height: 70px;">
                                        </td>
                                        <td><a href="assets/jasa/pdf/{{ $j->pdf }}"><a class="btn btn-success"
                                                    href="{{ route('admin.jasa.display', ['id' => $j->id]) }}"
                                                    target="__blank">Display
                                                    PDF</a></a>
                                        </td>
                                        <td>{{ date('l,d-m-Y', strtotime($j->created_at)) }}</td>
                                        <td>
                                            <span class="p-relative">
                                                <button class="dropdown-btn transparent-btn" type="button"
                                                    title="More info">
                                                    <div class="sr-only">Pilihan</div>
                                                    <i data-feather="more-horizontal" aria-hidden="true"></i>
                                                </button>
                                                <ul class="users-item-dropdown dropdown">
                                                    <li>
                                                        <form action="{{ route('admin.jasa.lihat', ['id' => $j->id]) }}"
                                                            method="get">
                                                            @csrf
                                                            <button type="submit" class="btn btn-success">Lihat</button>
                                                        </form>
                                                    </li>
                                                    <li>
                                                        <form action="{{ route('admin.jasa.edit', ['id' => $j->id]) }}"
                                                            method="get">
                                                            @csrf
                                                            <button type="submit" class="btn btn-primary">Edit</button>
                                                        </form>
                                                    </li>
                                                    <li>
                                                        <form action="{{ route('admin.jasa.hapus', ['id' => $j->id]) }}"
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
                        {{ $jasa->appends(request()->input())->links('admin.layout.pagination') }}
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
