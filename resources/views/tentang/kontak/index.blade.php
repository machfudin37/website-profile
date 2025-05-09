@extends('layout.app')
@extends('layout.header')
@section('konten')
    <!--==================== CONTACT ME ====================-->
    <section class="contact section" id="contact">
        <h2 class="section__title">Kontak Kami</h2>
        <span class="section__subtitle"></span>

        <div class="contact__container container grid">
            <div>
                <div class="contact__information">
                    <i class="uil uil-phone contact__icon"></i>

                    <div>
                        <h3 class="contact__title">Panggil</h3>
                        <span class="contact__subtitle">{{ $beranda->telpon }}</span>
                    </div>
                </div>

                <div class="contact__information">
                    <i class="uil uil-envelope contact__icon"></i>

                    <div>
                        <h3 class="contact__title">Email</h3>
                        <span class="contact__subtitle">{{ $beranda->email }}</span>
                    </div>
                </div>

                <div class="contact__information">
                    <i class="uil uil-map-marker contact__icon"></i>

                    <div>
                        <h3 class="contact__title">Lokasi</h3>
                        <span class="contact__subtitle">{{ $beranda->alamat }}</span>
                    </div>
                </div>
            </div>

            <form action="{{ route('kontak.kirim') }}" class="contact__form grid" method="post"
                enctype="multipart/form-data">
                @csrf
                <div class="contact__inputs grid">
                    <div class="contact__content">
                        <label for="" class="contact__label">Nama</label>
                        <input type="text" class="contact__input" name="nama" required />
                    </div>

                    <div class="contact__content">
                        <label for="" class="contact__label">Email</label>
                        <input type="email" class="contact__input" name="email" required />
                    </div>
                </div>
                <div class="contact__content">
                    <label for="" class="contact__label">Subject</label>
                    <input type="text" class="contact__input" name="subject" required />
                </div>
                <div class="contact__content">
                    <label for="" class="contact__label">Message</label>
                    <textarea id="message" cols="0" rows="7" class="contact__input" name="message" required></textarea>
                </div>

                <div class="button-and-messages">
                    <button type="submit" class="button button--flex">
                        Kirim
                        <i class="uil uil-message button__icon"></i>
                    </button>

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

                        @error('subject')
                            <div class="alert alert-danger mt-3">
                                {{ $message }}
                            </div>
                        @enderror

                        @error('keterangan')
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
                </div>
            </form>
        </div>
    </section>
@endsection
@extends('layout.footer')
@section('css')
    <style>
        /* Style container */
        .button-and-messages {
            display: flex;
            align-items: center;
            /* Pusatkan vertikal */
        }

        /* Style button */
        .button--flex {
            margin-right: 10px;
        }

        /* Style messages */
        .messages {
            display: flex;
            flex-direction: column;
        }

        /* Style each message */
        .alert {
            margin-top: 5px;
        }
    </style>
@endsection
