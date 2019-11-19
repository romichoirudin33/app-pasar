@extends('layouts.app')

@section('css')
    <!-- DataTables -->
    <link rel="stylesheet" href="{{ asset('css/plugins/datatables-bs4/css/dataTables.bootstrap4.css') }}">
@endsection

@section('title', 'Kaboro Weki')

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
                                    <select name="pasar_id" id="pasar_id" class="form-control" onchange="this.form.submit()">
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
                                    <a href="{{ route('admin.rapat.create') }}" class="btn btn-outline-primary btn-xs">
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
                        @foreach($data as $i)
                        <div class="card">
                            <div class="card-header">
                                <h5 class="card-title">
                                    Kegiatan <a href="#">{{ $i->kegiatan }}</a> di pasar {{ $i->pasar->nama }}
                                </h5>
                                <div class="float-right text-gray">
                                    <i class="far fa-clock"></i> {{ date('d-m-Y', strtotime($i->tanggal_kegiatan)) }}
                                    <a href="{{ route('admin.rapat.edit', ['id' => $i->id]) }}" class="btn btn-outline-info btn-xs">
                                        <i class="far fa-edit"></i>
                                    </a>
                                </div>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <?= $i->hasil_rapat  ?>
                            </div>
                            <!-- /.card-body -->
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