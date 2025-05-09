<title>{{ $title }} | Web-Profile</title>
@if ($produk)
    <iframe src="{{ asset('assets/produk/pdf/' . $produk->pdf) }}"width="100%" height="100%"></iframe>
@endif
