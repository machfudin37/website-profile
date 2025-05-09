@extends('admin.layout.app')
@extends('admin.layout.header')
@extends('admin.layout.sidebar')
@section('konten')
    <main class="main users chart-page" id="skip-target">
        <div class="container">
            <h2 class="main-title">Isi Tugas dan Fungsi Sistem Informasi Siber dan Sandi</h2>
            <a class="btn btn-primary" href="{{ route('admin.siss.tambah') }}">Tambah</a><br><br>
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
                @error('isi')
                    <div class="alert alert-danger mt-3">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="row">
                <div class="col-lg-9">
                    <div class="users-table table-wrapper1">
                        <article class="sign-up">
                            <div class="row">
                                <div class="col-lg-9">
                                    <div class="users-table table-wrapper1">
                                        <table class="posts-table" style="width: 1100px;">
                                            <thead>
                                                <tr class="users-table-info">
                                                    <th style="width: 70px;">
                                                        <label class="users-table__checkbox ms-20">
                                                            No
                                                        </label>
                                                    </th>
                                                    <th style="width: 900px;">
                                                        Isi
                                                    </th>
                                                    <th>
                                                        Action
                                                    </th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($isisiss as $index => $is)
                                                    <tr>
                                                        <td>{{ $index + $isisiss->firstItem() }}</td>
                                                        <td class="truncate">{{ $is->isi }}</td>
                                                        <td>
                                                            <span class="p-relative">
                                                                <button class="dropdown-btn transparent-btn" type="button"
                                                                    title="More info">
                                                                    <div class="sr-only">Pilihan</div>
                                                                    <i data-feather="more-horizontal"
                                                                        aria-hidden="true"></i>
                                                                </button>
                                                                <ul class="users-item-dropdown dropdown">
                                                                    <li>
                                                                        <form
                                                                            action="{{ route('admin.siss.edit', ['id' => $is->id]) }}"
                                                                            method="get">
                                                                            @csrf
                                                                            <button type="submit"
                                                                                class="btn btn-primary">Edit</button>
                                                                        </form>
                                                                    </li>
                                                                    <li>
                                                                        <form
                                                                            action="{{ route('admin.siss.hapus', ['id' => $is->id]) }}"
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
                                        {{ $isisiss->appends(request()->input())->links('admin.layout.pagination') }}
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
