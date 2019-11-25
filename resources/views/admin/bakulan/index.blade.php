@extends('layouts.app')

@section('css')
    <!-- DataTables -->
    <link rel="stylesheet" href="{{ asset('css/plugins/datatables-bs4/css/dataTables.bootstrap4.css') }}">
@endsection

@section('title', 'Setor Bakulan')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <div class="card-text">
                        <div class="row">
                            <div class="col-md-4">
                                <form>
                                    <label for="pasar_id">Nama Pasar</label>
                                    <select name="pasar_id" id="pasar_id" class="form-control"
                                            onchange="this.form.submit()">
                                        @if($detail_pasar == '')
                                            <option value="">Pilih</option>
                                        @else
                                            <option value="{{ $detail_pasar->id }}">{{ $detail_pasar->nama }}</option>
                                        @endif
                                        @foreach($pasar as $p)
                                            <option value="{{ $p->id }}">{{ $p->nama }}</option>
                                        @endforeach
                                    </select>
                                </form>
                            </div>
                            <div class="col-md-8">
                                <div class="float-right">
                                    <a href="{{ route('admin.bakulan.create') }}"
                                       class="btn btn-outline-primary btn-xs">
                                        <span class="fas fa-plus"></span> Tambah
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card">
                <div class="card-body">
                    <div class="card-text">
                        <table class="table table-bordered table-sm">
                            <thead>
                            <tr>
                                <th>Tanggal</th>
                                <th>Jumlah Pedagang</th>
                                <th>Jumlah Setoran</th>
                                <th>Total Setoran Pedagang</th>
                                <th>Pasar</th>
                                <th></th>
                            </tr>
                            </thead>
                            <tbody>
                            @php
                                $total = 0;
                            @endphp
                            @foreach($data as $i)
                                <tr>
                                    <td>{{ date('d-m-Y', strtotime($i->tanggal)) }}</td>
                                    <td>{{ $i->jum_bakulan }}</td>
                                    <td>{{ $i->setor_bakulan }}</td>
                                    <td>{{ $i->total_setoran_bakulan }}</td>
                                    @php
                                        $total += $i->total_setoran_bakulan;
                                    @endphp
                                    <td>{{ $i->pasar->nama }}</td>
                                    <td>
                                        <button class="btn btn-outline-danger btn-xs "
                                                onclick="if (confirm('Anda yakin akan menghapus data ini ?')){
                                                        event.preventDefault();
                                                        document.getElementById('delete-{{ $i->id }}').submit();
                                                        };">
                                            <span class="fa fa-trash"></span>
                                        </button>
                                        <form id="delete-{{ $i->id }}"
                                              action="{{ route('admin.bakulan.destroy', ['id'=>$i->id]) }}"
                                              method="post">
                                            {{ method_field('DELETE') }}
                                            {{ csrf_field() }}
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                            <tfoot>
                            <th colspan="3">
                                Total
                            </th>
                            <th>
                                {{ $total }}
                            </th>
                            <th colspan="2"></th>
                            </tfoot>
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