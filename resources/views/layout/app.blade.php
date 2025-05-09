<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="Web-Profile" />
    <title>{{ $title }} | Web-Profile</title>
    <link rel="shortcut icon" href="{{ asset('assets/logo/' . $beranda->logo) }}" type="image/*">

    <!--==================== OPEN GRAPH META TAGS ===================== -->
    <meta property="og:title" content="{{ $title }} | Web-Profile" />
    <meta property="og:image" content="{{ asset('assets/img/PwaImages/ios/512.png') }} " />
    <meta property="og:description" content="Web-Profile" />

    <!--==================== TWITTER META TAGS ===================== -->
    <meta name="twitter:title" content="Kominfotik - Profile" />
    <meta name="twitter:description" content="Web-Profile" />
    <meta name="twitter:image" content="{{ asset('assets/img/PwaImages/ios/512.png') }}" />

    <!--==================== UNICONS ====================-->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css" />

    <!-- ====================PWA================== -->
    <link rel="manifest" href="manifest.json" />
    <!-- ios support -->
    <link rel="apple-touch-icon" href="{{ asset('assets/img/PwaImages/ios/32.png') }} " />
    <link rel="apple-touch-icon" href="{{ asset('assets/img/PwaImages/ios/72.png') }} " />
    <link rel="apple-touch-icon" href="{{ asset('assets/img/PwaImages/ios/100.png') }} " />
    <link rel="apple-touch-icon" href="{{ asset('assets/img/PwaImages/ios/128.png') }} " />
    <link rel="apple-touch-icon" href="{{ asset('assets/img/PwaImages/ios/144.png') }} " />
    <link rel="apple-touch-icon" href="{{ asset('assets/img/PwaImages/ios/152.png') }} " />
    <link rel="apple-touch-icon" href="{{ asset('assets/img/PwaImages/ios/192.png') }} " />
    <link rel="apple-touch-icon" href="{{ asset('assets/img/PwaImages/ios/256.png') }} " />
    <link rel="apple-touch-icon" href="{{ asset('assets/img/PwaImages/ios/512.png') }} " />
    <meta name="apple-mobile-web-app-status-bar" content="#6E57E0" />
    <meta name="theme-color" content="#6E57E0" />

    <!-- ============FAVICONS============== -->
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('assets/img/favicons/apple-touch-icon.png') }} " />
    <link rel="icon" type="image/png" sizes="32x32"
        href="{{ asset('assets//img/favicons/favicon-32x32.png') }}" />
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('assets/img/favicons/favicon-16x16.png') }}" />
    <link rel="icon" type="image/x-icon" href="{{ asset('assets/img/favicons/favicon.ico') }} " />

    <!--==================== SWIPER CSS ====================-->
    <link rel="stylesheet" href="{{ asset('assets/css/swiper-bundle.min.css') }}" />

    <!--==================== CSS ====================-->
    <link rel="stylesheet" href="{{ asset('assets/css/styles.css') }}" />
    <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/button.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/card.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/card.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/view.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
        integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    @yield('css')
</head>

<body>
    <!-- ===================== LOADER ==================== -->

    @yield('header')
    @yield('konten')
    @yield('footer')



    <!--==================== SCROLL TOP ====================-->

    <a href="#" class="scrollup" id="scroll-up">
        <i class="uil uil-arrow-up scrollup__icon"></i>
    </a>

    <!--==================== SWIPER JS ====================-->
    <script src="{{ asset('assets/js/swiper-bundle.min.js') }}"></script>

    <!--==================== MAIN JS ====================-->
    <script src="{{ asset('assets/js/main.js') }}"></script>
    <script src="{{ asset('assets/js/app.js') }}"></script>
    <script src="{{ asset('assets/js/dropdown.js') }}"></script>
    <script src='{{ asset('assets/js/jquery.zoom.min.js') }}'></script>
    <script src='https://code.jquery.com/jquery-3.6.4.min.js'></script>
    <script src='{{ asset('assets/js/jquery.zoom.js') }}'></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
    @yield('js')
</body>

</html>
