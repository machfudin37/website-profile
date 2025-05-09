<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title }} | Web-Profile</title>
    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ asset('assets/logo/' . $beranda->logo) }}" type="image/png">
    <!-- Custom styles -->
    <link rel="stylesheet" href="{{ asset('assets/admin/css/style.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/button.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/alert.css') }}">
    @yield('css')
</head>

<body>
    @yield('login')
    @yield('sidebar')
    @yield('header')
    @yield('konten')
    @yield('footer')

    <!-- Chart library -->
    <script src="{{ asset('assets/admin/plugins/chart.min.js') }}"></script>
    <!-- Icons library -->
    <script src="{{ asset('assets/admin/plugins/feather.min.js') }}"></script>
    <!-- Custom scripts -->
    <script src="{{ asset('assets/admin/js/script.js') }}"></script>
</body>

</html>
