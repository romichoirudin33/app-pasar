@extends('layouts.app')

@section('css')
    <link href="{{ asset('css/plugins/validetta/validetta.css') }}" rel="stylesheet" type="text/css" media="screen">
@endsection

@section('title', 'Detail Pasar')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <div class="card-text">
                        <b>Detail data pasar !</b>
                        <div class="float-right">
                            <a href="{{ route('admin.pasar.index') }}" class="btn btn-outline-primary btn-xs">
                                <span class="fas fa-list"></span> Tampilkan Semua
                            </a>
                            <a href="{{ route('admin.pasar.edit', ['id' => $data->id]) }}" class="btn btn-outline-success btn-xs">
                                <span class="fas fa-edit"></span> Edit Data
                            </a>
                            <button class="btn btn-outline-danger btn-xs "
                               onclick="if (confirm('Anda yakin akan menghapus data ini ?')){
                                       event.preventDefault();
                                       document.getElementById('delete-{{ $data->id }}').submit();
                                       };">
                                <span class="fa fa-trash"></span>
                            </button>
                            <form id="delete-{{ $data->id }}"
                                  action="{{ route('admin.pasar.destroy', ['id'=>$data->id]) }}"
                                  method="post">
                                {{ method_field('DELETE') }}
                                {{ csrf_field() }}
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card">
                <form role="form" id="form">
                    <div class="card-body">
                        <div class="row">
                            <!-- Data Pasar -->
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Nama Pasar</label>
                                    <input type="text" class="form-control" value="{{ $data->nama }}">
                                </div>
                                <div class="form-group">
                                    <label>Desa</label>
                                    <input type="text" class="form-control" value="{{ $data->desa }}">
                                </div>
                                <div class="form-group">
                                    <label>Kecamatan</label>
                                    <input type="text" class="form-control" value="{{ $data->kec }}">
                                </div>
                                <div class="form-group">
                                    <label>Tahun Pembangunan</label>
                                    <input type="text" class="form-control" value="{{ $data->pemb }}">
                                </div>
                                <div class="form-group">
                                    <label>Lintang Selatan / Latitude</label>
                                    <input type="text" class="form-control" value="{{ $data->ls }}">
                                </div>
                                <div class="form-group">
                                    <label>Bujur Timur / Longitude</label>
                                    <input type="text" class="form-control" value="{{ $data->bt }}">
                                </div>
                                <div class="form-group">
                                    <label>Kondisi</label>
                                    <input type="text" class="form-control" value="{{ $data->kondisi }}">
                                </div>
                                <div class="form-group">
                                    <label>Luas (m<sup>2</sup>)</label>
                                    <input type="text" class="form-control" value="{{ $data->luas }}">
                                </div>

                                <div class="form-group">
                                    <label>Buka</label>
                                    <input type="text" class="form-control" value="{{ $data->buka }}">
                                </div>
                                <div class="form-group">
                                    <label>Unit Bagian</label>
                                    <input type="text" class="form-control" value="{{ $data->unit }}">
                                </div>
                                <div class="form-group">
                                    <label>Keterangan UPT</label>
                                    <input type="text" class="form-control" value="{{ $data->upt }}">
                                </div>
                            </div>
                            <!-- Data Survei Pasar -->
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Pengelola Pasar</label>
                                    <input type="text" class="form-control" value="{{ $data->pengelola }}">
                                </div>
                                <div class="form-group">
                                    <label>Kantor Pasar</label>
                                    <input type="text" class="form-control" value="{{ $data->survei->kantor_pasar }}">
                                </div>
                                <div class="form-group">
                                    <label>Toiler</label>
                                    <input type="text" class="form-control" value="{{ $data->survei->toilet }}">
                                </div>
                                <div class="form-group">
                                    <label>Struktur Organisasi</label>
                                    <input type="text" class="form-control" value="{{ $data->survei->struktur }}">
                                </div>
                                <div class="form-group">
                                    <label>Nama Kepala Pasar</label>
                                    <input type="text" class="form-control" value="{{ $data->survei->nama_kp }}">
                                </div>
                                <div class="form-group">
                                    <label>No HP Kepala Pasar</label>
                                    <input type="text" class="form-control" value="{{ $data->survei->hp_kp }}">
                                </div>
                                <div class="form-group">
                                    <label>Jumlah Juru Pungut</label>
                                    <input type="text" class="form-control" value="{{ $data->survei->juru_pungut }}">
                                </div>
                                <div class="form-group">
                                    <label>Insentif Juru Pungut</label>
                                    <input type="text" class="form-control" value="{{ $data->survei->insentif_jp }}">
                                </div>
                                <div class="form-group">
                                    <label>Jumlah Anggaran (Rp.)</label>
                                    <input type="text" class="form-control" value="{{ $data->survei->anggaran }}">
                                </div>
                                <div class="form-group">
                                    <label>Pengelolaan</label>
                                    <input type="text" class="form-control" value="{{ $data->survei->pengelolaan }}">
                                </div>
                            </div>
                            <!-- Jumlah Setoran -->
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Jumlah Petugas Kebersihan</label>
                                    <input type="text" class="form-control" value="{{ $data->survei->kebersihan }}">
                                </div>
                                <div class="form-group">
                                    <label>Jumlah Petugas Keamanan</label>
                                    <input type="text" class="form-control" value="{{ $data->survei->keamanan }}">
                                </div>
                                <div class="form-group">
                                    <label>Jumlah Setoran Bakulan (Rp.)</label>
                                    <input type="text" class="form-control" value="{{ $data->survei->setor_bakulan }}">
                                </div>
                                <div class="form-group">
                                    <label>Jumlah Bakulan Di Pasar</label>
                                    <input type="text" class="form-control" value="{{ $data->survei->jum_bakulan }}">
                                </div>
                                <div class="form-group">
                                    <label>Jumlah Setoran Kios (Rp.)/Bulan</label>
                                    <input type="text" class="form-control" value="{{ $data->survei->setor_kios }}">
                                </div>
                                <div class="form-group">
                                    <label>Jumlah Kios Di Pasar</label>
                                    <input type="text" class="form-control" value="{{ $data->survei->jum_kios }}">
                                </div>
                                <div class="form-group">
                                    <label>Jumlah Setoran Ruko (Rp.)/Bulan</label>
                                    <input type="text" class="form-control" value="{{ $data->survei->setor_ruko }}">
                                </div>
                                <div class="form-group">
                                    <label>Jumlah Ruko Di Pasar</label>
                                    <input type="text" class="form-control" value="{{ $data->survei->jum_ruko }}">
                                </div>
                                <div class="form-group">
                                    <label>Jumlah Pendapatan Lain-lain (Rp.)</label>
                                    <input type="text" class="form-control" value="{{ $data->survei->pendapatan_lain }}">
                                </div>
                                <div class="form-group">
                                    <label>Jumlah Los Pasar</label>
                                    <input type="text" class="form-control" value="{{ $data->survei->los_pasar }}">
                                </div>
                                <div class="form-group">
                                    <label>Potensi PAD</label>
                                    <input type="text" class="form-control" value="{{ $data->survei->potensi_pad }}">
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /.card-body -->
                </form>
            </div>
        </div>
    </div>
@endsection

@section('js')
    <script type="text/javascript" src="{{ asset('css/plugins/validetta/validetta.js') }}"></script>
    <script type="text/javascript" src="{{ asset('css/plugins/validetta/lang/validettaLang-ID.js') }}"></script>
    <script>
        $(function () {
            $("#form").validetta({
                realTime: true,
                display: 'inline',
                errorTemplateClass: 'validetta-inline'
            });
        });
    </script>
@endsection