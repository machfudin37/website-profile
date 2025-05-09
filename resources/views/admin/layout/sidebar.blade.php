@section('sidebar')
    <div class="layer"></div>
    <!-- ! Body -->
    <a class="skip-link sr-only" href="#skip-target">Skip to content</a>
    <div class="page-flex">
        <!-- ! Sidebar -->
        <aside class="sidebar">
            <div class="sidebar-start">
                <div class="sidebar-head">
                    <a href="{{ route('admin.beranda.index', ['id' => 1]) }}" class="logo-wrapper" title="Home">
                        <img src="{{ asset('assets/logo/' . $beranda->logo) }}" style="width: 49px; height: 49px;">
                        <div class="logo-text">
                            <span
                                class="logo-title"style="font-size: 8px;font-weight: 700;line-height: 1.4;letter-spacing: 0.86px; max-width:90px;">{{ $beranda->tempat }}</span>
                        </div>
                    </a>
                    <button class="sidebar-toggle transparent-btn" title="Menu" type="button">
                        <span class="sr-only">Toggle menu</span>
                        <span class="icon menu-toggle" aria-hidden="true"></span>
                    </button>
                </div>
                <div class="sidebar-body">
                    <ul class="sidebar-body-menu">
                        <li>
                            <a href="{{ route('admin.beranda.index', ['id' => 1]) }}"><span class="icon home"
                                    aria-hidden="true"></span>Beranda</a>
                        </li>
                        <li>
                            <a href="{{ route('admin.pengumuman.index') }}"><span class="icon message"
                                    aria-hidden="true"></span>Pengumuman</a>
                        </li>
                        <li>
                            <a class="show-cat-btn" href="##">
                                <span class="icon paper" aria-hidden="true"></span>Profile
                                <span class="category__btn transparent-btn" title="Open list">
                                    <span class="sr-only">Open list</span>
                                    <span class="icon arrow-down" aria-hidden="true"></span>
                                </span>
                            </a>
                            <ul class="cat-sub-menu">
                                <li>
                                    <a href="{{ route('admin.tugasdanfungsikominfotik.index', ['id' => 1]) }}">Tugas dan
                                        Fungsi Kominfotik</a>
                                </li>
                                <li>
                                    <a href="{{ route('admin.strukturorganisasi.index', ['id' => 1]) }}">Struktur
                                        Oragnisasi</a>
                                </li>
                                <li>
                                    <a href="{{ route('admin.videoprofile.index', ['id' => 1]) }}">Video Profile</a>
                                </li>
                                <li>
                                    <a href="{{ route('admin.daftarnamapegawai.index') }}">Daftar Nama Pegawai</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a class="show-cat-btn" href="##">
                                <span class="icon user-3" aria-hidden="true"></span>Bagian
                                <span class="category__btn transparent-btn" title="Open list">
                                    <span class="sr-only">Open list</span>
                                    <span class="icon arrow-down" aria-hidden="true"></span>
                                </span>
                            </a>
                            <ul class="cat-sub-menu">
                                <li>
                                    <a href="{{ route('admin.tatausaha.index', ['id' => 1]) }}">Tata
                                        Usaha</a>
                                </li>
                                <li>
                                    <a href="{{ route('admin.kip.index', ['id' => 1]) }}">Komunikasi dan Informasi
                                        Publik</a>
                                </li>
                                <li>
                                    <a href="{{ route('admin.jkd.index', ['id' => 1]) }}">Infrastruktur Data</a>
                                </li>
                                <li>
                                    <a href="{{ route('admin.siss.index', ['id' => 1]) }}">Aplikasi Siber dan Statistik</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="{{ route('admin.galeri.index') }}"><span class="icon image"
                                    aria-hidden="true"></span>Galeri</a>
                        </li>
                        <li>
                            <a class="show-cat-btn" href="##">
                                <span class="icon image" aria-hidden="true"></span>Berita Kegiatan
                                <span class="category__btn transparent-btn" title="Open list">
                                    <span class="sr-only">Open list</span>
                                    <span class="icon arrow-down" aria-hidden="true"></span>
                                </span>
                            </a>
                            <ul class="cat-sub-menu">
                                <li>
                                    <a href="{{ route('admin.foto.index') }}">Berita Kegiatan Foto</a>
                                </li>
                                <li>
                                    <a href="{{ route('admin.video.index') }}">Berita Kegiatan Video</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a class="show-cat-btn" href="##">
                                <span class="icon notification" aria-hidden="true"></span>Informasi
                                <span class="category__btn transparent-btn" title="Open list">
                                    <span class="sr-only">Open list</span>
                                    <span class="icon arrow-down" aria-hidden="true"></span>
                                </span>
                            </a>
                            <ul class="cat-sub-menu">
                                <li>
                                    <a href="{{ route('admin.informasi.tatausaha.index') }}">Tata Usaha</a>
                                </li>
                                <li>
                                    <a href="{{ route('admin.informasi.kip.index') }}">Komunikasi dan Informasi Publik</a>
                                </li>
                                <li>
                                    <a href="{{ route('admin.informasi.jkd.index') }}">Jaringan Komunikasi Data</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a class="show-cat-btn" href="#">
                                <span class="icon category" aria-hidden="true"></span>Tentang Kami
                                <span class="category__btn transparent-btn" title="Open list">
                                    <span class="sr-only">Open list</span>
                                    <span class="icon arrow-down" aria-hidden="true"></span>
                                </span>
                            </a>
                            <ul class="cat-sub-menu">
                                <li>
                                    <a href="{{ route('admin.map.index', ['id' => 1]) }}">Maps</a>
                                </li>
                                <li>
                                    <a href="{{ route('admin.kontak') }}">Kontak</a>
                                </li>
                            </ul>
                    </ul>
                    <span class="system-menu__title">system</span>
                    <ul class="sidebar-body-menu">
                        <li>
                            <a class="theme-switcher" title="Switch theme">
                                <i class="sun-icon" data-feather="sun" aria-hidden="true"></i>
                                <i class="moon-icon" data-feather="moon" aria-hidden="true"></i></span>&nbsp;&nbsp;Theme
                                Switcher
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('actionlogout') }}">
                                <span data-feather="log-out" aria-hidden="true"></span>&nbsp;&nbsp;Log out
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </aside>
    @endsection
