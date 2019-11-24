@extends('layouts.app')

@section('css')
    <link href="{{ asset('css/plugins/validetta/validetta.css') }}" rel="stylesheet" type="text/css" media="screen">
@endsection

@section('title', 'Tambah Data Pasar')

@section('content')
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
                    <div class="col-7 col-sm-9">
                        <div class="tab-content" id="vert-tabs-right-tabContent">
                            <!-- Data Pasar -->
                            <div class="tab-pane fade show active" id="pasar" role="tabpanel"
                                 aria-labelledby="pasar-tab">
                                <div class="row">
                                    <div class="col-md-6 col-sm-12">
                                        <div class="form-group">
                                            <input type="text" autocomplete="off" class="form-control" name="nama"
                                                   data-validetta="required" placeholder="Nama Pasar">
                                        </div>
                                        <div class="form-group">
                                            <input type="text" autocomplete="off" class="form-control" name="desa"
                                                   placeholder="Desa">
                                        </div>
                                        <div class="form-group">
                                            <input type="text" autocomplete="off" class="form-control" name="kec"
                                                   placeholder="Kecamatan">
                                        </div>
                                        <div class="form-group">
                                            <input type="text" autocomplete="off" class="form-control" name="luas"
                                                   data-validetta="number" placeholder="Luas Bangunan Pasar (m2)">
                                        </div>
                                        <div class="form-group">
                                            <input type="text" autocomplete="off" class="form-control" name="lahan"
                                                   data-validetta="number" placeholder="Luas Lahan Pasar (m2)">
                                        </div>
                                        <div class="form-group">
                                            <input type="text" autocomplete="off" class="form-control" name="pemb"
                                                   data-validetta="number,minLength[4],maxLength[4]"
                                                   placeholder="Tahun Pembangunan Contoh ({{ date('Y') }})">
                                        </div>
                                        <div class="form-group">
                                            <label>Posisi Koordinat</label>
                                            <div class="row">
                                                <div class="col-6">
                                                    <input type="text" autocomplete="off" class="form-control" name="ls"
                                                           data-validetta="number" placeholder="Lintang Selatan">
                                                </div>
                                                <div class="col-6">
                                                    <input type="text" autocomplete="off" class="form-control" name="bt"
                                                           data-validetta="number" placeholder="Bujur Timur">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-12">
                                        <div class="form-group">
                                            <input type="text" autocomplete="off" class="form-control" name="kondisi"
                                                   placeholder="Kondisi Pasar">
                                        </div>
                                        <div class="form-group">
                                            <input type="text" autocomplete="off" class="form-control" name="buka"
                                                   placeholder="Keterangan Buka (harian/mingguan/dll)">
                                        </div>
                                        <div class="form-group">
                                            <input type="text" autocomplete="off" class="form-control" name="unit"
                                                   placeholder="Unit Bagian">
                                        </div>
                                        <div class="form-group">
                                            <input type="text" autocomplete="off" class="form-control" name="upt"
                                                   placeholder="Keterangan UPT">
                                        </div>
                                        <div class="form-group">
                                            <input type="text" autocomplete="off" class="form-control" name="pengelola"
                                                   placeholder="Pengelola Pasar">
                                        </div>
                                        <div class="form-group">
                                            <label>Perkiraan Jumlah Omzet</label>
                                            <input type="text" autocomplete="off" class="form-control" name="omset"
                                                   data-validetta="number" placeholder="Rp. ">
                                        </div>
                                        <div class="form-group">
                                            <button type="button" class="btn btn-outline-primary btn-sm float-right"
                                                    onclick="document.getElementById('survei-tab').click()">
                                                Selanjutnya <span class="fa fa-arrow-right"></span>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Data Survei Pasar -->
                            <div class="tab-pane fade" id="survei" role="tabpanel"
                                 aria-labelledby="survei-tab">
                                <div class="row">
                                    <div class="col-md-6 col-sm-12">
                                        <div class="form-group">
                                            <label>Kantor Pasar</label>
                                            <select name="kantor_pasar" class="form-control">
                                                <option value="Ada">Ada</option>
                                                <option value="Tidak Ada">Tidak Ada</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Toilet</label>
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
                                        <hr>
                                        <div class="form-group">
                                            <input type="text" autocomplete="off" class="form-control" name="nama_kp"
                                                   placeholder="Nama Kepala Pasar">
                                        </div>
                                        <div class="form-group">
                                            <input type="text" autocomplete="off" class="form-control" name="hp_kp"
                                                   data-validetta="number,minLength[10],maxLength[13]"
                                                   placeholder="No HP Kepala Pasar">
                                        </div>
                                        <div class="form-group">
                                            <label>Juru Pungut (Jumlah & Insentif)</label>
                                            <div class="row">
                                                <div class="col-sm-3">
                                                    <input type="text" autocomplete="off" class="form-control"
                                                           name="juru_pungut"
                                                           data-validetta="number" placeholder="Jumlah">
                                                </div>
                                                <div class="col-sm-9">
                                                    <input type="text" autocomplete="off" class="form-control"
                                                           name="insentif_jp"
                                                           data-validetta="number" placeholder="Rp. (Insentif)">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label>Jumlah Petugas</label>
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <input type="text" autocomplete="off" class="form-control"
                                                           name="kebersihan"
                                                           data-validetta="number" placeholder="Kebersihan">
                                                </div>
                                                <div class="col-sm-6">
                                                    <input type="text" autocomplete="off" class="form-control"
                                                           name="keamanan"
                                                           data-validetta="number" placeholder="Keamanan">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-12">
                                        <div class="form-group">
                                            <input type="text" autocomplete="off" class="form-control"
                                                   name="pengelolaan" placeholder="Pengelolaan">
                                        </div>
                                        <div class="form-group">
                                            <input type="text" autocomplete="off" class="form-control" name="anggaran"
                                                   data-validetta="number" placeholder="Jumlah Anggaran (Rp.)">
                                        </div>
                                        <div class="form-group">
                                            <label>Pendapatan Lain-lain (Rp.)</label>
                                            <input type="text" autocomplete="off" class="form-control"
                                                   name="pendapatan_lain"
                                                   data-validetta="required, number" value="0">
                                        </div>
                                        <div class="form-group">
                                            <label>Kios (Jumlah & Setoran /bln)</label>
                                            <div class="row">
                                                <div class="col-sm-3">
                                                    <input type="text" autocomplete="off" class="form-control" name="jum_kios"
                                                           data-validetta="required, number" value="0" placeholder="Jumlah">
                                                </div>
                                                <div class="col-sm-9">
                                                    <input type="text" autocomplete="off" class="form-control" name="setor_kios"
                                                           data-validetta="required, number" value="0" placeholder="Rp. (Setoran)">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label>Ruko (Jumlah & Setoran /bln)</label>
                                            <div class="row">
                                                <div class="col-sm-3">
                                                    <input type="text" autocomplete="off" class="form-control" name="setor_ruko"
                                                           data-validetta="required, number" value="0" placeholder="Jumlah">
                                                </div>
                                                <div class="col-sm-9">
                                                    <input type="text" autocomplete="off" class="form-control" name="jum_ruko"
                                                           data-validetta="required, number" value="0" placeholder="Rp. (Setoran)">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label>Jumlah Los Pasar</label>
                                            <input type="text" autocomplete="off" class="form-control" name="los_pasar"
                                                   data-validetta="number">
                                        </div>
                                        <div class="form-group">
                                            <button type="button" class="btn btn-outline-success"
                                                    onclick="document.getElementById('pasar-tab').click()">
                                                <span class="fas fa-arrow-left"></span> Kembali
                                            </button>
                                            <button type="submit" class="btn btn-outline-primary float-right">
                                                <span class="fas fa-save"></span> Submit
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-5 col-sm-3">
                        <div class="nav flex-column nav-tabs nav-tabs-right h-100" id="vert-tabs-right-tab"
                             role="tablist" aria-orientation="vertical">
                            <a class="nav-link active" id="pasar-tab" data-toggle="pill"
                               href="#pasar" role="tab" aria-controls="pasar"
                               aria-selected="true">Pasar</a>
                            <a class="nav-link" id="survei-tab" data-toggle="pill"
                               href="#survei" role="tab"
                               aria-controls="survei" aria-selected="false">Survei</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.card-body -->
        </form>
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