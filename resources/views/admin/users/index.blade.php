@extends('layouts.app')

@section('css')
    <!-- DataTables -->
    <link rel="stylesheet" href="{{ asset('css/plugins/datatables-bs4/css/dataTables.bootstrap4.css') }}">
@endsection

@section('title', 'Data Users')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <div class="card-text">
                        <b>Total Record {{ count($data) }}</b>
                        <div class="float-right">
                            <a href="{{ route('admin.users.create') }}" class="btn btn-outline-primary btn-xs">
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
                                <th>Username</th>
                                <th>Email</th>
                                <th>Phone</th>
                                <th>Role</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($data as $i)
                                <tr>
                                    <td>
                                        <div class="btn-group btn-group-sm">
                                            <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                                                {{ $i->name }}
                                            </button>
                                            <div class="dropdown-menu">
                                                <a class="dropdown-item"
                                                   href="{{ route('admin.users.edit',['id'=>$i->id]) }}">
                                                    <span class="fas fa-edit"></span> Edit
                                                </a>
                                            </div>
                                        </div>
                                    </td>
                                    <td>{{ $i->username }}</td>
                                    <td>{{ $i->email }}</td>
                                    <td>{{ $i->phone }}</td>
                                    <td>{{ $i->role }}</td>
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