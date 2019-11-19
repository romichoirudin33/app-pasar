@extends('layouts.app')

@section('css')
    <link href="{{ asset('css/plugins/validetta/validetta.css') }}" rel="stylesheet" type="text/css" media="screen">
    <!-- summernote -->
    <link rel="stylesheet" href="{{ asset('css/plugins/summernote/summernote-bs4.css') }}">
@endsection

@section('title', 'Edit Kegiatan')

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
                            <button class="btn btn-outline-danger btn-xs "
                                    onclick="if (confirm('Anda yakin akan menghapus data ini ?')){
                                            event.preventDefault();
                                            document.getElementById('delete-{{ $data->id }}').submit();
                                            };">
                                <span class="fa fa-trash"></span>
                            </button>
                            <form id="delete-{{ $data->id }}"
                                  action="{{ route('admin.rapat.destroy', ['id'=>$data->id]) }}"
                                  method="post">
                                {{ method_field('DELETE') }}
                                {{ csrf_field() }}
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card">
                <form role="form" id="form" method="post" action="{{ route('admin.rapat.update', ['id'=> $data->id]) }}">
                    {{ csrf_field() }}
                    {{ method_field('PUT') }}
                    <div class="card-body">
                        <div class="form-group">
                            <label>Nama Pasar</label>
                            <select name="pasar_id" id="pasar_id" class="form-control">
                                <option value="{{ $data->pasar_id }}">{{ $data->pasar->nama }}</option>
                                @foreach($pasar as $p)
                                    <option value="{{ $p->id }}">{{ $p->nama }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Nama Kegiatan</label>
                            <input type="text" autocomplete="off" class="form-control" name="kegiatan" data-validetta="required" value="{{ $data->kegiatan }}">
                        </div>
                        <div class="form-group">
                            <label>Tanggal Kegiatan</label>
                            <input type="date" autocomplete="off" class="form-control" name="tanggal_kegiatan" data-validetta="required" value="{{ $data->tanggal_kegiatan }}">
                        </div>
                        <div class="form-group">
                            <label>Hasil Rapat</label>
                            <textarea name="hasil_rapat" class="textarea">{{ $data->hasil_rapat }}</textarea>
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