@section('footer')
    <!--==================== FOOTER ====================-->
    <footer class="footer">
        <div class="footer__bg">
            <div class="footer__container container1 grid">
                <div style="margin-right: 30px;">
                    <h3 class="footer__title">Kontak Kami</h3>
                    <span class="footer__subtitle" style="font-size: 13px">{{ $beranda->alamat }} Telp/Fax :
                        {{ $beranda->telpon }}</span>
                    <br>
                    <span class="button button--flex button--small button--link services__button lihat"><a
                            style="font-size: 18px; color:white;" href="{{ route('map.index', ['id' => 1]) }}"
                            class="button button--flex button--small button--link services__button lihat">Lokasi Maps</a>
                        <i class="uil uil-arrow-right button__icon" style="color:white"></i>
                    </span>
                </div>
                <div class="col-lg-2 col-md-6 footer-links" style="margin-right: 10px;">
                    <h4 class="footer__title">Partner Wilayah</h4>
                    <ul>
                        <li><i class="fa-solid fa-chevron-right" style="color: white"></i> <a href="https://jakarta.go.id/"
                                class="footer__title nav__link1 noSelect">Provinsi DKI
                                Jakarta</a>
                        </li>
                        <li><i class="fa-solid fa-chevron-right" style="color: white"></i> <a
                                href="https://pusat.jakarta.go.id/" class="footer__title nav__link1 noSelect">Jakarta
                                Pusat</a>
                        </li>
                        <li><i class="fa-solid fa-chevron-right" style="color: white"></i> <a
                                href="https://selatan.jakarta.go.id/" class="footer__title nav__link1 noSelect">Jakarta
                                Selatan</a>
                        </li>
                        <li><i class="fa-solid fa-chevron-right" style="color: white"></i> <a
                                href="https://barat.jakarta.go.id/" class="footer__title nav__link1 noSelect">Jakarta
                                Barat</a>
                        </li>
                        <li><i class="fa-solid fa-chevron-right" style="color: white"></i> <a
                                href="https://utara.jakarta.go.id/" class="footer__title nav__link1 noSelect">Jakarta
                                Utara</a>
                        </li>
                        <li><i class="fa-solid fa-chevron-right" style="color: white"></i> <a
                                href="https://pulauseribu.jakarta.go.id/"
                                class="footer__title nav__link1  noSelect">Kepulauan
                                Seribu</a></li>
                    </ul>
                </div>

                <div class="col-lg-2 col-md-6 footer-links" style="margin-right:30px;">
                    <h4 class="footer__title">Instansi Terkait</h4>
                    <ul>
                        <li><i class="fa-solid fa-chevron-right" style="color: white"></i> <a
                                href="https://jaktimkota.bps.go.id/" class="footer__title nav__link1 noSelect">e Kinerja</a>
                        </li>
                        <li><i class="fa-solid fa-chevron-right" style="color: white"></i> <a
                                href="https://jaktimkota.bps.go.id/" class="footer__title nav__link1 noSelect">SIPKD</a>
                        </li>
                        <li><i class="fa-solid fa-chevron-right" style="color: white"></i> <a
                                href="https://jaktimkota.bps.go.id/" class="footer__title nav__link1 noSelect">LSPE</a>
                        </li>
                        <li><i class="fa-solid fa-chevron-right" style="color: white"></i> <a
                                href="https://jaktimkota.bps.go.id/" class="footer__title nav__link1 noSelect">JDIH</a>
                        </li>
                        <li><i class="fa-solid fa-chevron-right" style="color: white"></i> <a
                                href="https://jaktimkota.bps.go.id/" class="footer__title nav__link1 noSelect">BKD</a>
                        </li>
                        <li><i class="fa-solid fa-chevron-right" style="color: white"></i> <a
                                href="https://jaktimkota.bps.go.id/" class="footer__title nav__link1 noSelect">KPKD JT</a>
                        </li>
                        <li><i class="fa-solid fa-chevron-right" style="color: white"></i> <a
                                href="https://jaktimkota.bps.go.id/" class="footer__title nav__link1 noSelect">Nakertrans
                                JT</a>
                        </li>
                    </ul>
                </div>
            </div>
            <br>
        </div>
    </footer>
    <div class="footer__content" style="display: flex; justify-content: space-between;">
        <p class="nav__link1 noSelect1" style="margin-left:30px;">&nbsp;{{ $beranda->tahun }} © {{ $beranda->nama }} -
            {{ $beranda->subject }}</p>
        <p class="nav__link1 noSelect1" style="margin-right:30px;">Kota Administrasi Jakarta Timur</p>
    </div>
@endsection
@section('css')
    <style>
        .footer__container {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
        }

        .footer__container>div {
            width: calc(33.33% - 40px);
            /* 20px merupakan jarak antar elemen */
            margin-bottom: 20px;
            /* Jarak bawah setiap elemen */
        }

        .footer__content {
            display: flex;
            align-items: center;
        }
    </style>
@endsection
