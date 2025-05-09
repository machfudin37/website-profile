<title>{{ $title }} | Web-Profile</title>
@if ($jasa)
    <iframe src="{{ asset('assets/jasa/pdf/' . $jasa->pdf) }}"width="100%" height="100%"></iframe>
@endif
