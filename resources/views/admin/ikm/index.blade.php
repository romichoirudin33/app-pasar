@extends('layouts.app')

@section('css')
    <!-- DataTables -->
    <link rel="stylesheet" href="{{ asset('css/plugins/datatables-bs4/css/dataTables.bootstrap4.css') }}">
@endsection

@section('title', 'Data IKM')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <div class="card-text">
                        <b>Total Record {{ count($data) }}</b>
                        <div class="float-right">
                            <a href="{{ route('admin.ikm.create') }}" class="btn btn-outline-primary btn-xs">
                                <span class="fas fa-plus"></span> Tambah
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-body">
                    <div class="card-text">
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
                            @foreach($data as $i)
                                <tr>
                                    <td>
                                        <div class="btn-group btn-group-sm">
                                            <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                                                {{ $i->nama_perusahaan }}
                                            </button>
                                            <div class="dropdown-menu">
                                                <a class="dropdown-item"
                                                   href="{{ route('admin.ikm.edit',['id'=>$i->id]) }}">
                                                    <span class="fas fa-edit"></span> Edit
                                                </a>
                                            </div>
                                        </div>
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