@extends('admin.layout.app')
@extends('admin.layout.header')
@extends('admin.layout.sidebar')

@section('konten')
    <main class="main users chart-page" id="skip-target">
        <div class="container">
            <h2 class="main-title">Map</h2>
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
                @error('lokasi')
                    <div class="alert alert-danger mt-3">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="row">
                <div class="col-lg-9">
                    <div class="users-table table-wrapper1">
                        <article class="sign-up">
                            <form class="sign-up-form form" action="{{ route('admin.map.ubah', ['id' => $map->id]) }}"
                                method="POST" style="width: 1100px;">
                                @csrf
                                @method('PUT')
                                <center>
                                    @if (isset($map->lokasi))
                                        {!! $map->lokasi !!}
                                    @endif
                                </center>
                                <br>
                                <label class="form-label-wrapper">
                                    <p class="form-label">Lokasi</p>
                                    <textarea class="form-input" name="lokasi" id="lokasi" cols="30" rows="10" style="height: 100px" required>{{ $map->lokasi }}</textarea>
                                </label>
                                <br>
                                <button type="submit" class="btn btn-primary">Ubah</button>&nbsp;
                            </form>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
@extends('admin.layout.footer')
