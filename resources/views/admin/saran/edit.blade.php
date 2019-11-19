@extends('layouts.app')

@section('css')
    <link href="{{ asset('css/plugins/validetta/validetta.css') }}" rel="stylesheet" type="text/css" media="screen">
    <!-- summernote -->
    <link rel="stylesheet" href="{{ asset('css/plugins/summernote/summernote-bs4.css') }}">
@endsection

@section('title', 'Edit Saran')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <div class="card-text">
                        <b>Harap mengisi data dengan benar !</b>
                        <div class="float-right">
                            <a href="{{ route('admin.saran.index') }}" class="btn btn-outline-success btn-xs">
                                <span class="fas fa-arrow-left"></span> Kembali
                            </a>
                            <button class="btn btn-outline-danger btn-xs "
                                    onclick="if (confirm('Anda yakin akan menghapus data ini ?')){
                                            event.preventDefault();
                                            document.getElementById('delete-{{ $data->id }}').submit();
                                            };">
                                <span class="fa fa-trash"></span>
                            </button>
                            <form id="delete-{{ $data->id }}"
                                  action="{{ route('admin.saran.destroy', ['id'=>$data->id]) }}"
                                  method="post">
                                {{ method_field('DELETE') }}
                                {{ csrf_field() }}
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card">
                <form role="form" id="form" method="post" action="{{ route('admin.saran.update', ['id'=> $data->id]) }}">
                    {{ csrf_field() }}
                    {{ method_field('PUT') }}
                    <div class="card-body">
                        <div class="form-group">
                            <label>Pemberi Saran</label>
                            <input type="text" autocomplete="off" class="form-control" name="nama" data-validetta="required" value="{{ $data->nama }}">
                        </div>
                        <div class="form-group">
                            <label>Saran</label>
                            <textarea name="saran" class="textarea">{{ $data->saran }}</textarea>
                        </div>
                        <div class="form-group">
                            <label>Keterangan</label>
                            <textarea name="ket" class="textarea">{{ $data->ket }}</textarea>
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