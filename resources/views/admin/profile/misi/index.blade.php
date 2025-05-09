@extends('admin.layout.app')
@extends('admin.layout.header')
@extends('admin.layout.sidebar')

@section('konten')
    <main class="main users chart-page" id="skip-target">
        <div class="container">
            <h2 class="main-title">Misi</h2>
            <a class="btn btn-primary" href="{{ route('admin.misi.tambah') }}">Tambah</a><br><br>
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
                @error('misi')
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
                                        Misi
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
                                @php
                                    $i = 1;
                                @endphp
                                @foreach ($misi as $m)
                                    <tr>
                                        <td>{{ $i++ }}</td>
                                        <td class="truncate">{{ $m->misi }}</td>
                                        <td>{{ date('d-m-Y', strtotime($m->created_at)) }}</td>
                                        <td>
                                            <span class="p-relative">
                                                <button class="dropdown-btn transparent-btn" type="button"
                                                    title="More info">
                                                    <div class="sr-only">Pilihan</div>
                                                    <i data-feather="more-horizontal" aria-hidden="true"></i>
                                                </button>
                                                <ul class="users-item-dropdown dropdown">
                                                    <li>
                                                        <form action="{{ route('admin.misi.edit', ['id' => $m->id]) }}"
                                                            method="get">
                                                            @csrf
                                                            <button type="submit" class="btn btn-primary">Edit</button>
                                                        </form>
                                                    </li>
                                                    <br>
                                                    <li>
                                                        <form action="{{ route('admin.misi.hapus', ['id' => $m->id]) }}"
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
