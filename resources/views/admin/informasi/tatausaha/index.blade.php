@extends('admin.layout.app')
@extends('admin.layout.header')
@extends('admin.layout.sidebar')

@section('konten')
    <main class="main users chart-page" id="skip-target">
        <div class="container">
            <h2 class="main-title">Informasi Tata Usaha</h2>
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
            </div>
            <div class="row">
                <div class="col-lg-9">
                    <div class="users-table table-wrapper1">
                        <article class="sign-up">
                            <div class="row sign-up-form form" style="width: 1100px; margin-left:5px;">
                                <div class="col-lg-9">
                                    <h2 class="main-title">Keuangan</h2>
                                    <a class="btn btn-primary"
                                        href="{{ route('admin.tatausaha.keuangan.tambah') }}">Tambah</a>
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
                                                                        Sub Menu
                                                                    </th>
                                                                    <th>
                                                                        PDF
                                                                    </th>
                                                                    <th>
                                                                        Action
                                                                    </th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                @foreach ($keuangan as $index => $k)
                                                                    <tr>
                                                                        <td>{{ $index + $keuangan->firstItem() }}</td>
                                                                        <td>{{ $k->sub_menu }}</td>
                                                                        <td><a href="#"><a class="btn btn-success"
                                                                                    href="{{ route('admin.keuangan.display', ['id' => $k->id]) }}"
                                                                                    target="__blank"
                                                                                    style="height:40px;width:140px;">Display
                                                                                    PDF</a></a></td>
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
                                                                                            action="{{ route('admin.tatausaha.keuangan.edit', ['id' => $k->id]) }}"
                                                                                            method="get">
                                                                                            @csrf
                                                                                            <button type="submit"
                                                                                                class="btn btn-primary">Edit</button>
                                                                                        </form>
                                                                                    </li>
                                                                                    <li>
                                                                                        <form
                                                                                            action="{{ route('admin.tatausaha.keuangan.hapus', ['id' => $k->id]) }}"
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
                                                        {{ $keuangan->appends(request()->input())->links('admin.layout.pagination') }}
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
                @if (Session::has('successk'))
                    <div class="alert alert-success mt-3">
                        <p style="color: green">
                            {{ Session::get('successk') }}
                        </p>
                    </div>
                @elseif (Session::has('errork'))
                    <div class="alert alert-danger mt-3">
                        <p style="color: red">
                            {{ Session::get('errork') }}
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
            </div>
            <div class="row">
                <div class="col-lg-9">
                    <div class="users-table table-wrapper1">
                        <article class="sign-up">
                            <div class="row sign-up-form form" style="width: 1100px; margin-left:5px;">
                                <div class="col-lg-9">
                                    <h2 class="main-title">Kepegawaian</h2>
                                    <a class="btn btn-primary"
                                        href="{{ route('admin.tatausaha.kepegawaian.tambah') }}">Tambah</a>
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
                                                                        Sub Menu
                                                                    </th>
                                                                    <th>
                                                                        PDF
                                                                    </th>
                                                                    <th>
                                                                        Action
                                                                    </th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                @foreach ($kepegawaian as $index => $ke)
                                                                    <tr>
                                                                        <td>{{ $index + $kepegawaian->firstItem() }}</td>
                                                                        <td>{{ $ke->sub_menu }}</td>
                                                                        <td><a href="#"><a class="btn btn-success"
                                                                                    href="{{ route('admin.kepegawaian.display', ['id' => $ke->id]) }}"
                                                                                    target="__blank"
                                                                                    style="height:40px;width:140px;">Display
                                                                                    PDF</a></a></td>
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
                                                                                            action="{{ route('admin.tatausaha.kepegawaian.edit', ['id' => $ke->id]) }}"
                                                                                            method="get">
                                                                                            @csrf
                                                                                            <button type="submit"
                                                                                                class="btn btn-primary">Edit</button>
                                                                                        </form>
                                                                                    </li>
                                                                                    <li>
                                                                                        <form
                                                                                            action="{{ route('admin.tatausaha.kepegawaian.hapus', ['id' => $ke->id]) }}"
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
                                                        {{ $kepegawaian->appends(request()->input())->links('admin.layout.pagination') }}
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
