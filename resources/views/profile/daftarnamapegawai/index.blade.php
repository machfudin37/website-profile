@extends('layout.app')
@extends('layout.header')
@section('konten')
    <section class="services section section__title" id="services1">
        <h2 class="section-title">Data Pegawai</h2>
        <div class="card-container">
            <div class="card" style="width: 1200px; height:auto;">
                <div class="custom-table">
                    <table>
                        <thead>
                            <tr>
                                <th class="tabel-header no">No</th>
                                <th class="tabel-header">Nama</th>
                                <th class="tabel-header">NIP</th>
                                <th class="tabel-header">GOL</th>
                                <th class="tabel-header">Jabatan</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                                $no = 1;
                            @endphp
                            @foreach ($pegawai as $p)
                                <tr>
                                    <td class="tabel-header">{{ $no++ }}</td>
                                    <td>{{ $p->nama }}</td>
                                    <td>{{ $p->nip }}</td>
                                    <td class="tabel-header">{{ $p->golongan }}</td>
                                    <td class="tabel-header">{{ $p->jabatan }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <h2 class="section-title">Tenaga Ahli</h2>
        <div class="card-container">
            <div class="card" style="width: 1200px; height:auto;">
                <div class="custom-table">
                    <table>
                        <thead>
                            <tr>
                                <th class="tabel-header no">No</th>
                                <th class="tabel-header">Nama</th>
                                <th class="tabel-header">Seksi</th>
                                <th class="tabel-header">Bidang</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                                $no = 1;
                            @endphp
                            @foreach ($tenagaahli as $ta)
                                <tr>
                                    <td>{{ $no++ }}</td>
                                    <td>{{ $ta->nama }}</td>
                                    <td class="tabel-header">{{ $ta->seksi }}</td>
                                    <td class="tabel-header">{{ $ta->bidang }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>
@endsection
@extends('layout.footer')
@section('css')
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

        .alamat {
            width: 10px
        }

        thead {
            background-color: transparent;
            /* Warna latar header */
        }

        .tabel-header {
            text-align: center;
        }
    </style>
@endsection
