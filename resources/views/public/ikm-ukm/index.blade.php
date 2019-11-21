@extends('layouts.public')

@section('css')
    <!-- DataTables -->
    <link rel="stylesheet" href="{{ asset('css/plugins/datatables-bs4/css/dataTables.bootstrap4.css') }}">
@endsection

@section('content')
    {{--data ikm--}}
    @if(count($ikm) > 0)
        <div class="row mb-3">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <div class="card-title">
                            <strong>Data IKM</strong>
                        </div>
                        <div class="card-body">
                            <table class="table table-bordered table-hover table-responsive">
                                <thead>
                                <tr>
                                    <th rowspan="2">Nama Perusahaan</th>
                                    <th rowspan="2">Nama Pemilik</th>
                                    <th rowspan="2">HP Pemilik</th>
                                    <th rowspan="2">Jalan</th>
                                    <th rowspan="2">Desa</th>
                                    <th rowspan="2">Kec</th>
                                    <th rowspan="2">Jenis Industri</th>
                                    <th rowspan="2">Nama Produk</th>
                                    <th colspan="2">Jumlah Pekerja</th>
                                    <th rowspan="2">Nilai Investasi</th>
                                    <th rowspan="2">Kapasitas Jumlah Produk</th>
                                    <th rowspan="2">Satuan Produk</th>
                                    <th rowspan="2">Nilai Produksi</th>
                                    <th rowspan="2">Nilai BPP BP</th>
                                    <th rowspan="2">Status</th>
                                    <th rowspan="2">Ket. Bantuan</th>
                                </tr>
                                <tr>
                                    <th>Laki - Laki</th>
                                    <th>Perempuan</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($ikm as $i)
                                    <tr>
                                        <td>
                                            {{ $i->nama_perusahaan }}
                                        </td>
                                        <td>{{ $i->nama_pemilik }}</td>
                                        <td>{{ $i->hp_pemilik }}</td>
                                        <td>{{ $i->jln }}</td>
                                        <td>{{ $i->desa }}</td>
                                        <td>{{ $i->kec }}</td>
                                        <td>{{ $i->jenis_industri }}</td>
                                        <td>{{ $i->nama_produk }}</td>
                                        <td>{{ $i->tenaga_kerja_l }}</td>
                                        <td>{{ $i->tenaga_kerja_p }}</td>
                                        <td>{{ $i->nilai_investasi }}</td>
                                        <td>{{ $i->kapasitas_produk_jum }}</td>
                                        <td>{{ $i->kapasitas_produk_sat }}</td>
                                        <td>{{ $i->nilai_produksi }}</td>
                                        <td>{{ $i->nilai_bbp_bp }}</td>
                                        <td>{{ $i->status }}</td>
                                        <td>{{ $i->bantuan }}</td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @else
        <div class="alert alert-primary" role="alert">
            <b>Info !</b><br>
            Data IKM tidak ditemukan !!
        </div>
    @endif

    {{--data ukm--}}
    @if(count($ukm) > 0)
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <div class="card-title">
                            <strong>Data UKM</strong>
                        </div>
                        <div class="card-body">
                            <table class="table table-bordered table-hover table-responsive">
                                <thead>
                                <tr>
                                    <th>Nama Pemilik</th>
                                    <th>Nama Perusahaan</th>
                                    <th>Alamat</th>
                                    <th>Bidang Usaha</th>
                                    <th>Modal Usaha</th>
                                    <th>Omset/hari</th>
                                    <th>TK</th>
                                    <th>Izin_Usaha</th>
                                    <th>keterangan</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($ukm as $i)
                                    <tr>
                                        <td>
                                            {{ $i->nama_pemilik }}
                                        </td>
                                        <td>{{ $i->nama_perusahaan }}</td>
                                        <td>{{ $i->alamat }}</td>
                                        <td>{{ $i->bidang_usaha }}</td>
                                        <td>{{ $i->modal_usaha }}</td>
                                        <td>{{ $i->omset_per_hari }}</td>
                                        <td>{{ $i->tk }}</td>
                                        <td>{{ $i->izin_usaha }}</td>
                                        <td>{{ $i->keterangan }}</td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @else
        <div class="alert alert-primary" role="alert">
            <b>Info !</b><br>
            Data UKM tidak ditemukan !!
        </div>
    @endif
@endsection

@section('js')
    <!-- DataTables -->
    <script src="{{ asset('css/plugins/datatables/jquery.dataTables.js') }}"></script>
    <script src="{{ asset('css/plugins/datatables-bs4/js/dataTables.bootstrap4.js') }}"></script>
    <script>
        $(function () {
            $('.table').DataTable({
                "paging": true,
                "lengthChange": true,
                "ordering": false,
                "info": true,
                "autoWidth": false,
            });
        });
    </script>
@endsection