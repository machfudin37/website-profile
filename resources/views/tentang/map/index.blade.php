@extends('layout.app')
@extends('layout.header')
@section('konten')
    <!--==================== CONTACT ME ====================-->
    <section class="contact section" id="contact">
        <span class="section__subtitle"></span>
        <h2 class="section__title">Maps</h2>
        <span class="section__subtitle"></span>
        <center>
            @if (isset($map->lokasi))
                {!! $map->lokasi !!}
            @endif
        </center>
        </form>
    </section>
@endsection
@extends('layout.footer')
