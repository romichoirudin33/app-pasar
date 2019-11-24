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
                        <table class="table table-bordered table-sm">
                            <tr>
                                <th width="40%">Nama Pasar</th>
                                <td width="5px">:</td>
                                <td>{{ $data->nama }}</td>
                            </tr>
                            <tr>
                                <th>Desa</th>
                                <td width="5px">:</td>
                                <td>{{ $data->desa }}</td>
                            </tr>
                            <tr>
                                <th>Kecamatan</th>
                                <td width="5px">:</td>
                                <td>{{ $data->kec }}</td>
                            </tr>
                            <tr>
                                <th>Luas Bangunan Pasar (m<sup>2</sup>)</th>
                                <td width="5px">:</td>
                                <td>{{ $data->luas }}</td>
                            </tr>
                            <tr>
                                <th>Luas Lahan Pasar (m<sup>2</sup>)</th>
                                <td width="5px">:</td>
                                <td>{{ $data->lahan }}</td>
                            </tr>
                            <tr>
                                <th>Tahun Pembangunan</th>
                                <td width="5px">:</td>
                                <td>{{ $data->pemb }}</td>
                            </tr>
                            <tr>
                                <th>Posisi Koordinat (Lintang Selatan / Bujur Timur)</th>
                                <td width="5px">:</td>
                                <td>{{ $data->ls }} / {{ $data->bt }}</td>
                            </tr>
                            <tr>
                                <th>Kondisi</th>
                                <td width="5px">:</td>
                                <td>{{ $data->kondisi }}</td>
                            </tr>
                            <tr>
                                <th>Keterangan Buka</th>
                                <td width="5px">:</td>
                                <td>{{ $data->buka }}</td>
                            </tr>
                            <tr>
                                <th>Unit Bagian</th>
                                <td width="5px">:</td>
                                <td>{{ $data->unit }}</td>
                            </tr>
                            <tr>
                                <th>Keterangan UPT</th>
                                <td width="5px">:</td>
                                <td>{{ $data->upt }}</td>
                            </tr>
                            <tr>
                                <th>Pengelola Pasar</th>
                                <td width="5px">:</td>
                                <td>{{ $data->pengelola }}</td>
                            </tr>
                            <tr>
                                <th>Perkiraan Jumlah Omset (Rp.)</th>
                                <td width="5px">:</td>
                                <td>{{ $data->omset }}</td>
                            </tr>
                            <tr>
                                <td colspan="3"></td>
                            </tr>
                            <tr>
                                <th>Kantor Pasar</th>
                                <td width="5px">:</td>
                                <td>{{ $data->survei->kantor_pasar }}</td>
                            </tr>
                            <tr>
                                <th>Toilet</th>
                                <td width="5px">:</td>
                                <td>{{ $data->survei->toilet }}</td>
                            </tr>
                            <tr>
                                <th>Struktur Organisasi</th>
                                <td width="5px">:</td>
                                <td>{{ $data->survei->struktur }}</td>
                            </tr>
                            <tr>
                                <th>Nama Kepala Pasar</th>
                                <td width="5px">:</td>
                                <td>{{ $data->survei->nama_kp }}</td>
                            </tr>
                            <tr>
                                <th>No HP Kepala Pasar</th>
                                <td width="5px">:</td>
                                <td>{{ $data->survei->hp_kp }}</td>
                            </tr>
                            <tr>
                                <th>Juru Pungut (Jumlah - Insentif)</th>
                                <td width="5px">:</td>
                                <td>{{ $data->survei->juru_pungut }} - Rp. {{ $data->survei->insentif_jp }}</td>
                            </tr>
                            <tr>
                                <th>Jumlah Anggaran</th>
                                <td width="5px">:</td>
                                <td>{{ $data->survei->anggaran }}</td>
                            </tr>
                            <tr>
                                <th>Pengelolaan</th>
                                <td width="5px">:</td>
                                <td>{{ $data->survei->pengelolaan }}</td>
                            </tr>
                            <tr>
                                <th>Jumlah Petugas Kebersihan</th>
                                <td width="5px">:</td>
                                <td>{{ $data->survei->kebersihan }}</td>
                            </tr>
                            <tr>
                                <th>Jumlah Petugas Keamanan</th>
                                <td width="5px">:</td>
                                <td>{{ $data->survei->keamanan }}</td>
                            </tr>
                            <tr>
                                <th>Jumlah Los Pasar</th>
                                <td width="5px">:</td>
                                <td>{{ $data->survei->los_pasar }}</td>
                            </tr>
                            <tr>
                                <th>Kios (Jumlah & Setoran)</th>
                                <td width="5px">:</td>
                                <td>{{ $data->survei->jum_kios }} - Rp. {{ $data->survei->setor_kios }}</td>
                            </tr>
                            <tr>
                                <th>Ruko (Jumlah & Setoran)</th>
                                <td width="5px">:</td>
                                <td>{{ $data->survei->jum_ruko }} - Rp. {{ $data->survei->setor_ruko }}</td>
                            </tr>
                            <tr>
                                <th>Jumlah Pendapatan Lain-lain (Rp.)</th>
                                <td width="5px">:</td>
                                <td>{{ $data->survei->pendapatan_lain }}</td>
                            </tr>
                            <tr>
                                <th>Potensi PAD (Rp.)</th>
                                <td width="5px">:</td>
                                <td>{{ $data->survei->potensi_pad + $data->survei->potensi_pad_awal }}</td>
                            </tr>
                        </table>
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