@section('header')
    <!--==================== HEADER ====================-->
    <header class="header" id="header">
        <nav class="nav container" style="margin-left:50px;">
            <img src="{{ asset('assets/logo/' . $beranda->logo) }}" alt="logo"
                style="width: 50px; height: 40px; justify-content:flex-start">
            <a href="{{ route('beranda.index') }}" class="nav__logo noSelect"
                style="text-transform:capitalize; max-width:200px;">{{ $beranda->tempat }}</a>

            <div class="nav__menu" id="nav-menu">
                <ul class="nav__list grid">
                    <li class="nav__item">
                        <div class="dropdown">
                            <a href="{{ route('beranda.index') }}" class="nav__link noSelect">
                                <i class="uil uil-estate nav__icon"></i> Beranda
                            </a>
                        </div>
                    </li>

                    <li class="nav__item">
                        <div class="dropdown">
                            <a href="{{ route('pengumuman.index') }}" class="nav__link noSelect">
                                <i class="uil uil-estate nav__icon"></i> Pengumuman
                            </a>
                        </div>
                    </li>
                    <li class="nav__item">
                        <div class="dropdown">
                            <button class="nav__link noSelect dropdown-toggle" type="button" data-toggle="dropdown"
                                style="font-size:15px;font-family:Poppins;">Profile
                                <span class="caret"></span></button>
                            <ul class="dropdown-menu" style="background-color: var(--nav-color);">
                                <li><a tabindex="-1" href="{{ route('profile.tugasfungsi') }}" class="noSelect"
                                        style="color:var(--title-color);">Tugas dan Fungsi</a></li>
                                <li><a tabindex="-1" href="{{ route('profile.strukturorganisasi', ['id' => 1]) }}"
                                        class="noSelect" style="color:var(--title-color);">Struktur Oraganisasi</a></li>
                                <li><a tabindex="-1" href="{{ route('profile.videoprofile', ['id' => 1]) }}"
                                        class="noSelect" style="color:var(--title-color);">Video Profile</a></li>
                                <li><a tabindex="-1" href="{{ route('profile.daftarnamapegawai') }}" class="noSelect"
                                        style="color:var(--title-color);">Daftar Nama Pegawai</a></li>
                            </ul>
                        </div>
                    </li>

                    <li class="nav__item">
                        <div class="dropdown">
                            <button class="nav__link noSelect dropdown-toggle" type="button" data-toggle="dropdown"
                                style="font-size:15px;font-family:Poppins;">Bagian
                                <span class="caret"></span></button>
                            <ul class="dropdown-menu" style="background-color: var(--nav-color);">
                                <li><a tabindex="-1" href="{{ route('bagian.tu.index') }}"
                                        style="color:var(--title-color);">Tata
                                        Usaha</a></li>
                                <li><a tabindex="-1" href="{{ route('bagian.kip.index') }}"
                                        style="color:var(--title-color);">Komunikasi
                                        dan Informasi Publik</a></li>
                                <li><a tabindex="-1" href="{{ route('bagian.jkd.index') }}"
                                        style="color:var(--title-color);">Infrastruktur
                                        Data</a></li>
                                <li><a tabindex="-1" href="{{ route('bagian.siss.index') }}"
                                        style="color:var(--title-color);">Aplikasi
                                        Siber dan Statistik</a></li>
                            </ul>
                        </div>
                    </li>
                    <li class="nav__item">
                        <div class="dropdown">
                            <button class="nav__link noSelect dropdown-toggle" type="button" data-toggle="dropdown"
                                style="font-size:15px;font-family:Poppins;">Berita
                                <span class="caret"></span></button>
                            <ul class="dropdown-menu" style="background-color: var(--nav-color);">
                                <li><a tabindex="-1" href="{{ route('galeri.foto') }}" class="noSelect"
                                        style="color:var(--title-color);">Berita Kegiatan Foto</a></li>
                                <li><a tabindex="-1" href="{{ route('galeri.video') }}" class="noSelect"
                                        style="color:var(--title-color);">Berita Kegiatan Video</a></li>
                            </ul>
                        </div>
                    </li>

                    <li class="nav__item">
                        <div class="dropdown">
                            <button class="nav__link noSelect dropdown-toggle" type="button" data-toggle="dropdown"
                                style="font-size:15px;font-family:Poppins;">Tentang Kami
                                <span class="caret"></span></button>
                            <ul class="dropdown-menu" style="background-color: var(--nav-color);">
                                <li><a tabindex="-1" href="{{ route('kontak.index') }}" class="noSelect"
                                        style="color:var(--title-color);">Kontak</a></li>
                                <li><a tabindex="-1" href="{{ route('map.index', ['id' => 1]) }}" class="noSelect"
                                        style="color:var(--title-color);">Lokasi</a></li>
                            </ul>
                        </div>
                    </li>
                </ul>
                <i class="uil uil-times nav__close noSelect" id="nav-close"></i>
            </div>

            <div class="nav__btns">
                <!-- theme change button -->
                <i class="uil uil-moon change-theme" id="theme-button"></i>

                <div class="nav__toggle noSelect" id="nav-toggle">
                    <i class="uil uil-apps"></i>
                </div>
            </div>
        </nav>
        <marquee behavior="scroll" direction="left" scrollamount="5"
            style="font-size: 15px; background-color: var(--first-color-second);">
            <a href="{{ route('pengumuman.index') }}">
                <strong style="color:white">
                    {{ $beranda->runningtext }}
                </strong>
            </a>
        </marquee>
        <div>
        </div>
    </header>
@endsection
@section('css')
    <style>
        .dropdown {
            position: relative;
            display: inline-block;
        }

        .dropdown-menu {
            display: none;
            position: absolute;
            top: 100%;
            left: 0;
            box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
            min-width: 160px;
            z-index: 1;
        }

        .dropdown-submenu {
            position: relative;
        }

        .dropdown-submenu .dropdown-menu {
            left: auto;
            right: 0;
        }

        .dropdown-submenu .dropdown-menu::after {
            right: auto;
            left: 10px;
        }
    </style>
@endsection
@section('js')
    <script>
        $(document).ready(function() {
            $('.dropdown-submenu a.noSelect').on("click", function(e) {
                $(this).next('ul').toggle();
                e.stopPropagation();
                e.preventDefault();
            });
        });
    </script>
@endsection
