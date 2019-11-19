@extends('layouts.app')

@section('css')
    <link href="{{ asset('css/plugins/validetta/validetta.css') }}" rel="stylesheet" type="text/css" media="screen">
@endsection

@section('title', 'Tambah Data UKM')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <div class="card-text">
                        <b>Harap mengisi data dengan benar !</b>
                        <div class="float-right">
                            <a href="{{ route('admin.ukm.index') }}" class="btn btn-outline-success btn-xs">
                                <span class="fas fa-arrow-left"></span> Kembali
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card">
                <form role="form" id="form" method="post" action="{{ route('admin.ukm.store') }}">
                    {{ csrf_field() }}
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Nama Pemilik</label>
                                    <input type="text" autocomplete="off" class="form-control" name="nama_pemilik" data-validetta="required">
                                </div>
                                <div class="form-group">
                                    <label>Nama Perusahaan</label>
                                    <input type="text" autocomplete="off" class="form-control" name="nama_perusahaan" data-validetta="required">
                                </div>
                                <div class="form-group">
                                    <label>Alamat</label>
                                    <textarea name="alamat" class="form-control" rows="5"></textarea>
                                </div>
                                <div class="form-group">
                                    <label>Bidang Usaha</label>
                                    <input type="text" autocomplete="off" class="form-control" name="bidang_usaha">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Modal Usaha</label>
                                    <input type="text" autocomplete="off" class="form-control" name="modal_usaha" data-validetta="number">
                                </div>
                                <div class="form-group">
                                    <label>Omset per hari</label>
                                    <input type="text" autocomplete="off" class="form-control" name="omset_per_hari" data-validetta="number">
                                </div>
                                <div class="form-group">
                                    <label>TK</label>
                                    <input type="text" autocomplete="off" class="form-control" name="tk">
                                </div>
                                <div class="form-group">
                                    <label>Izin Usaha</label>
                                    <input type="text" autocomplete="off" class="form-control" name="izin_usaha">
                                </div>
                                <div class="form-group">
                                    <label>Keterangan</label>
                                    <input type="text" autocomplete="off" class="form-control" name="keterangan">
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