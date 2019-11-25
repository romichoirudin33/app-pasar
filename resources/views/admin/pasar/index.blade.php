@extends('layouts.app')

@section('css')
    <!-- DataTables -->
    <link rel="stylesheet" href="{{ asset('css/plugins/datatables-bs4/css/dataTables.bootstrap4.css') }}">
@endsection

@section('title', 'Data Pasar')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <div class="card-text">
                        <b>Total Record {{ count($data) }}</b>
                        <a href="{{ asset('img/syarat-penempatan-kios.pdf') }}" class="btn btn-info btn-xs" target="_blank">
                            <span class="fas fa-download"></span> Syarat Penempatan Kios
                        </a>
                        <div class="float-right">
                            <a href="{{ route('admin.pasar.create') }}" class="btn btn-outline-primary btn-xs">
                                <span class="fas fa-plus"></span> Tambah
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-body">
                    <div class="card-text">
                        <table class="table table-bordered table-hover">
                            <thead>
                            <tr>
                                <th>Nama</th>
                                <th>Desa</th>
                                <th>Kecamatan</th>
                                <th>Pembangunan</th>
                                <th>Kondisi</th>
                                <th>Luas (m<sup>2</sup>)</th>
                                <th>Lahan</th>
                                <th>Buka</th>
                                <th>Jumlah</th>
                                <th>Omset</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($data as $i)
                                <tr>
                                    <td>
                                        <div class="btn-group btn-group-sm">
                                            <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                                                {{ $i->nama }}
                                            </button>
                                            <div class="dropdown-menu">
                                                <a class="dropdown-item"
                                                   href="{{ route('admin.pasar.show',['id'=>$i->id]) }}">
                                                    <span class="fas fa-eye"></span> Lihat Detail
                                                </a>
                                                <a class="dropdown-item"
                                                   href="{{ route('admin.pasar.edit',['id'=>$i->id]) }}">
                                                    <span class="fas fa-edit"></span> Edit
                                                </a>
                                            </div>
                                        </div>
                                    </td>
                                    <td>{{ $i->desa }}</td>
                                    <td>{{ $i->kec }}</td>
                                    <td>{{ $i->pemb }}</td>
                                    <td>{{ $i->kondisi }}</td>
                                    <td>{{ $i->luas }}</td>
                                    <td>{{ $i->lahan }}</td>
                                    <td>{{ $i->buka }}</td>
                                    <td>{{ $i->jumlah }}</td>
                                    <td>{{ $i->omset }}</td>
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