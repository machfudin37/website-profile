@extends('layout.app')
@extends('layout.header')
@section('konten')
    <section class="services section section__title" id="services1">
        <h2 class="section-title">Data Jurnalis/Wartawan Jakarta Timur</h2>
        <div class="card-container">
            <div class="card" style="width: 1200px; height:auto;">
                <div class="custom-table">
                    <table>
                        <thead>
                            <tr>
                                <th colspan="3" style="text-align: center;">TV</th>
                            </tr>
                            <tr>
                                <th class="no">No</th>
                                <th class="nama">Nama</th>
                                <th>Media</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                                $no = 1;
                            @endphp
                            @foreach ($tv as $t)
                                <tr>
                                    <td>{{ $no++ }}</td>
                                    <td>{{ $t->nama }}</td>
                                    <td>{{ $t->media }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="custom-table">
                    <table>
                        <thead>
                            <tr>
                                <th colspan="3" style="text-align: center;">Website</th>
                            </tr>
                            <tr>
                                <th class="no">No</th>
                                <th class="nama">Nama</th>
                                <th>Media</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                                $no = 1;
                            @endphp
                            @foreach ($website as $w)
                                <tr>
                                    <td>{{ $no++ }}</td>
                                    <td>{{ $w->nama }}</td>
                                    <td>{{ $w->media }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="custom-table">
                    <table>
                        <thead>
                            <tr>
                                <th colspan="3" style="text-align: center;">Media Cetak</th>
                            </tr>
                            <tr>
                                <th class="no">No</th>
                                <th class="nama">Nama</th>
                                <th>Media</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                                $no = 1;
                            @endphp
                            @foreach ($mediacetak as $mc)
                                <tr>
                                    <td>{{ $no++ }}</td>
                                    <td>{{ $mc->nama }}</td>
                                    <td>{{ $mc->media }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="custom-table">
                    <table>
                        <thead>
                            <tr>
                                <th colspan="3" style="text-align: center;">Radio</th>
                            </tr>
                            <tr>
                                <th class="no">No</th>
                                <th class="nama">Nama</th>
                                <th>Media</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                                $no = 1;
                            @endphp
                            @foreach ($radio as $r)
                                <tr>
                                    <td>{{ $no++ }}</td>
                                    <td>{{ $r->nama }}</td>
                                    <td>{{ $r->media }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>
    <style>
        .custom-table {
            width: 80%;
            height: 20%;
            margin: 50px 50px;
        }

        table {
            width: 1087px;
            border-collapse: collapse;
            border: 1px solid var(--title-color);
            ;
            /* Warna garis tabel */
        }

        th,
        td {
            padding: 10px;
            text-align: left;
            font-size: 15px;
            font-family: Arial, Helvetica, sans-serif;
            border: 1px solid var(--title-color);
            /* Warna garis sel */
        }

        .no {
            width: 10px;
        }

        thead {
            background-color: transparent;
            /* Warna latar header */
        }

        .nama {
            width: 500px;
        }
    </style>
@endsection
@extends('layout.footer')
