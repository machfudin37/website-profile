@extends('layout.app')
@extends('layout.header')
@section('konten')
    <section class="services section section__title" id="services1">
        <h2 class="section-title">Pengumuman</h2>
        <div class="card-container">
            <div class="card" style="width: 1200px; max-height:800px;">
                <div class="custom-table">
                    <table>
                        <thead>
                            <tr>
                                <th class="no">No</th>
                                <th class="isi">Pengumuman</th>
                                <th class="display">Lihat</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                                $no = 1;
                            @endphp
                            @foreach ($pengumuman as $p)
                                <tr>
                                    <td>{{ $no++ }}</td>
                                    <td>{{ $p->isi }}</td>
                                    <td><a class="btn btn-success"
                                            href="{{ route('admin.pengumuman.display', ['id' => $p->id]) }}"
                                            target="__blank" style="height:40px;width:140px;">Display
                                            PDF</a></td>
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

        .isi {
            text-align: center;
        }

        .display {
            width: 10px;
            text-align: center;
        }

        thead {
            background-color: transparent;
            /* Warna latar header */
        }
    </style>
@endsection
@extends('layout.footer')
