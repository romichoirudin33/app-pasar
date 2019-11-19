@extends('layouts.app')

@section('css')
    <link href="{{ asset('css/plugins/validetta/validetta.css') }}" rel="stylesheet" type="text/css" media="screen">
    <!-- summernote -->
    <link rel="stylesheet" href="{{ asset('css/plugins/summernote/summernote-bs4.css') }}">
@endsection

@section('title', 'Tambah Kegiatan')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <div class="card-text">
                        <b>Harap mengisi data dengan benar !</b>
                        <div class="float-right">
                            <a href="{{ route('admin.rapat.index') }}" class="btn btn-outline-success btn-xs">
                                <span class="fas fa-arrow-left"></span> Kembali
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card">
                <form role="form" id="form" method="post" action="{{ route('admin.rapat.store') }}">
                    {{ csrf_field() }}
                    <div class="card-body">
                        <div class="form-group">
                            <label>Nama Kegiatan</label>
                            <input type="text" autocomplete="off" class="form-control" name="kegiatan" data-validetta="required">
                        </div>
                        <div class="form-group">
                            <label>Tanggal Kegiatan</label>
                            <input type="date" autocomplete="off" class="form-control" name="tanggal_kegiatan" data-validetta="required">
                        </div>
                        <div class="form-group">
                            <label>Hasil Rapat</label>
                            <textarea name="hasil_rapat" class="textarea"></textarea>
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
    <!-- Summernote -->
    <script src="{{ asset('css/plugins/summernote/summernote-bs4.min.js') }}"></script>
    <script>
        $(function () {
            $("#form").validetta({
                realTime: true,
                display: 'inline',
                errorTemplateClass: 'validetta-inline'
            });
            // Summernote
            $('.textarea').summernote()
        });
    </script>
@endsection