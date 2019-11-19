@extends('layouts.app')

@section('css')
    <link href="{{ asset('css/plugins/validetta/validetta.css') }}" rel="stylesheet" type="text/css" media="screen">
@endsection

@section('title', 'Tambah Data Pasar')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <div class="card-text">
                        <b>Harap mengisi data dengan benar !</b>
                        <div class="float-right">
                            <a href="{{ route('admin.pasar.index') }}" class="btn btn-outline-success btn-xs">
                                <span class="fas fa-arrow-left"></span> Kembali
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card">
                <form role="form" id="form" method="post" action="{{ route('admin.pasar.store') }}">
                    {{ csrf_field() }}
                    <div class="card-body">
                        <div class="row">
                            <!-- Data Pasar -->
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Nama Pasar</label>
                                    <input type="text" autocomplete="off" class="form-control" name="nama" data-validetta="required">
                                </div>
                                <div class="form-group">
                                    <label>Desa</label>
                                    <input type="text" autocomplete="off" class="form-control" name="desa">
                                </div>
                                <div class="form-group">
                                    <label>Kecamatan</label>
                                    <input type="text" autocomplete="off" class="form-control" name="kec">
                                </div>
                                <div class="form-group">
                                    <label>Tahun Pembangunan</label>
                                    <input type="text" autocomplete="off" class="form-control" name="pemb" data-validetta="number,minLength[4],maxLength[4]">
                                </div>
                                <div class="form-group">
                                    <label>Lintang Selatan / Latitude</label>
                                    <input type="text" autocomplete="off" class="form-control" name="ls" data-validetta="number">
                                </div>
                                <div class="form-group">
                                    <label>Bujur Timur / Longitude</label>
                                    <input type="text" autocomplete="off" class="form-control" name="bt" data-validetta="number">
                                </div>
                                <div class="form-group">
                                    <label>Kondisi</label>
                                    <input type="text" autocomplete="off" class="form-control" name="kondisi">
                                </div>
                                <div class="form-group">
                                    <label>Luas (m<sup>2</sup>)</label>
                                    <input type="text" autocomplete="off" class="form-control" name="luas" data-validetta="number">
                                </div>

                                <div class="form-group">
                                    <label>Buka</label>
                                    <input type="text" autocomplete="off" class="form-control" name="buka">
                                </div>
                                <div class="form-group">
                                    <label>Unit Bagian</label>
                                    <input type="text" autocomplete="off" class="form-control" name="unit">
                                </div>
                                <div class="form-group">
                                    <label>Keterangan UPT</label>
                                    <input type="text" autocomplete="off" class="form-control" name="upt">
                                </div>
                            </div>
                            <!-- Data Survei Pasar -->
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Pengelola Pasar</label>
                                    <input type="text" autocomplete="off" class="form-control" name="pengelola">
                                </div>
                                <div class="form-group">
                                    <label>Kantor Pasar</label>
                                    <select name="kantor_pasar" class="form-control">
                                        <option value="Ada">Ada</option>
                                        <option value="Tidak Ada">Tidak Ada</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Toiler</label>
                                    <select name="toilet" class="form-control">
                                        <option value="Ada">Ada</option>
                                        <option value="Tidak Ada">Tidak Ada</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Struktur Organisasi</label>
                                    <select name="struktur" class="form-control">
                                        <option value="Ada">Ada</option>
                                        <option value="Tidak Ada">Tidak Ada</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Nama Kepala Pasar</label>
                                    <input type="text" autocomplete="off" class="form-control" name="nama_kp">
                                </div>
                                <div class="form-group">
                                    <label>No HP Kepala Pasar</label>
                                    <input type="text" autocomplete="off" class="form-control" name="hp_kp" data-validetta="number,minLength[10],maxLength[13]">
                                </div>
                                <div class="form-group">
                                    <label>Jumlah Juru Pungut</label>
                                    <input type="text" autocomplete="off" class="form-control" name="juru_pungut" data-validetta="number">
                                </div>
                                <div class="form-group">
                                    <label>Insentif Juru Pungut</label>
                                    <input type="text" autocomplete="off" class="form-control" name="insentif_jp" data-validetta="number">
                                </div>
                                <div class="form-group">
                                    <label>Jumlah Anggaran (Rp.)</label>
                                    <input type="text" autocomplete="off" class="form-control" name="anggaran" data-validetta="number">
                                </div>
                                <div class="form-group">
                                    <label>Pengelolaan</label>
                                    <input type="text" autocomplete="off" class="form-control" name="pengelolaan">
                                </div>
                            </div>
                            <!-- Jumlah Setoran -->
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Jumlah Petugas Kebersihan</label>
                                    <input type="text" autocomplete="off" class="form-control" name="kebersihan" data-validetta="number">
                                </div>
                                <div class="form-group">
                                    <label>Jumlah Petugas Keamanan</label>
                                    <input type="text" autocomplete="off" class="form-control" name="keamanan" data-validetta="number">
                                </div>
                                <div class="form-group">
                                    <label>Jumlah Setoran Bakulan (Rp.)</label>
                                    <input type="text" autocomplete="off" class="form-control" name="setor_bakulan" data-validetta="required, number" value="0">
                                </div>
                                <div class="form-group">
                                    <label>Jumlah Bakulan Di Pasar</label>
                                    <input type="text" autocomplete="off" class="form-control" name="jum_bakulan" data-validetta="required, number" value="0">
                                </div>
                                <div class="form-group">
                                    <label>Jumlah Setoran Kios (Rp.)/Bulan</label>
                                    <input type="text" autocomplete="off" class="form-control" name="setor_kios" data-validetta="required, number" value="0">
                                </div>
                                <div class="form-group">
                                    <label>Jumlah Kios Di Pasar</label>
                                    <input type="text" autocomplete="off" class="form-control" name="jum_kios" data-validetta="required, number" value="0">
                                </div>
                                <div class="form-group">
                                    <label>Jumlah Setoran Ruko (Rp.)/Bulan</label>
                                    <input type="text" autocomplete="off" class="form-control" name="setor_ruko" data-validetta="required, number" value="0">
                                </div>
                                <div class="form-group">
                                    <label>Jumlah Ruko Di Pasar</label>
                                    <input type="text" autocomplete="off" class="form-control" name="jum_ruko" data-validetta="required, number" value="0">
                                </div>
                                <div class="form-group">
                                    <label>Jumlah Pendapatan Lain-lain (Rp.)</label>
                                    <input type="text" autocomplete="off" class="form-control" name="pendapatan_lain" data-validetta="required, number" value="0">
                                </div>
                                <div class="form-group">
                                    <label>Jumlah Los Pasar</label>
                                    <input type="text" autocomplete="off" class="form-control" name="los_pasar" data-validetta="number">
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /.card-body -->

                    <div class="card-footer">
                        <button type="submit" class="btn btn-outline-primary">
                            <span class="fas fa-save"></span> Submit
                        </button>
                    </div>
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