@extends('layouts.app')

@section('css')
    <!-- DataTables -->
    <link rel="stylesheet" href="{{ asset('css/plugins/datatables-bs4/css/dataTables.bootstrap4.css') }}">
@endsection

@section('title', 'Data Komoditi Pasar')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <div class="card-text">
                        <div class="row">
                            <div class="col-md-4">
                                <form>
                                    <label for="pasar_id">Filter Berdasarkan Pasar</label>
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
                                    <a href="{{ route('admin.gambar-pasar.create') }}"
                                       class="btn btn-outline-primary btn-xs">
                                        <span class="fas fa-plus"></span> Gambar Baru
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-body">
                    @if($detail_pasar != '')
                        <div class="card-title mb-3">
                            Gambar Pasar : {{ $detail_pasar->nama }}

                        </div>
                        <div class="float-right">
                            <a href="{{ route('admin.gambar-pasar.create', ['pasar_id' => $detail_pasar->id]) }}"
                               class="btn btn-outline-primary btn-xs">
                                <span class="fas fa-plus"></span> Gambar Baru
                            </a>
                        </div>
                    @endif
                    <div class="card-text">
                        @foreach($data as $i)
                            <div class="card">
                                <div class="card-body">
                                    <div class="card-text">
                                        @if(count($i->gambar_pasar) == 0)
                                            <div class="callout callout-info">
                                                <h5><i class="fas fa-info"></i> Note:</h5>
                                                Pasar {{ $i->nama }} belum pernah upload gambar, Silahkan upload
                                                terlebih dahulu
                                            </div>
                                        @endif

                                        <div class="row">
                                            @foreach($i->gambar_pasar as $g)
                                                <div class="col-md-3">
                                                    <a href="{{ asset('img/'.$g->nama_file) }}" target="_blank">
                                                        <img src="{{ asset('img/'.$g->nama_file) }}" alt=""
                                                             class="img-responsive" style="width: 100%">
                                                    </a>
                                                    <button class="btn btn-outline-danger btn-xs btn-block"
                                                            onclick="if (confirm('Anda yakin akan menghapus data ini ?')){
                                                                    event.preventDefault();
                                                                    document.getElementById('delete-{{ $g->id }}').submit();
                                                                    };">
                                                        <span class="fas fa-trash"></span> Hapus
                                                    </button>
                                                    <form id="delete-{{ $g->id }}"
                                                          action="{{ route('admin.gambar-pasar.destroy', ['id'=>$g->id]) }}"
                                                          method="post">
                                                        {{ method_field('DELETE') }}
                                                        {{ csrf_field() }}
                                                    </form>
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                            </div>


                        @endforeach
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