@extends('layouts.app')

@section('css')
    <!-- DataTables -->
    <link rel="stylesheet" href="{{ asset('css/plugins/datatables-bs4/css/dataTables.bootstrap4.css') }}">
@endsection

@section('title', 'Sampah (Saran dan Permasalahan)')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <div class="card-text">
                        <b>Total Record {{ count($data) }}</b>
                        <div class="float-right">
                            <a href="{{ route('admin.saran.create') }}" class="btn btn-outline-primary btn-xs">
                                <span class="fas fa-plus"></span> Tambah
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-body">
                    <div class="card-text">

                        @foreach($data as $i)
                        <div class="post">
                            <div class="user-block">
                                <img class="img-circle img-bordered-sm" src="{{ asset('css/dist/img/user1-128x128.jpg') }}"
                                     alt="user image">
                                <span class="username">
                                    <a href="#">{{ $i->nama }}</a>
                                    <a href="{{ route('admin.saran.edit', ['id' => $i->id]) }}" class="float-right btn-tool">
                                        <i class="fas fa-edit"></i>
                                    </a>
                                </span>
                                <span class="description">Dibuat - {{ $i->created_at->diffForHumans() }}</span>
                            </div>
                            <!-- /.user-block -->
                            <?= $i->saran; ?>
                            <?= $i->ket; ?>
                        </div>
                        @endforeach

                        {{ $data->links() }}
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