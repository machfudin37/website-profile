@section('footer')
    <!-- ! Footer -->
    <footer class="footer">
        <div class="container footer--flex">
            <div class="footer-start">
                <p>{{ $beranda->tahun }} © <a href="{{ route('admin.beranda.index', ['id' => 1]) }}"
                        rel="noopener noreferrer">
                        Dashboard - {{ $beranda->nama }}</a> {{ $beranda->subject }}</p>
            </div>
            <ul class="footer-end">
            </ul>
        </div>
    </footer>
    </div>
    </div>
@endsection
