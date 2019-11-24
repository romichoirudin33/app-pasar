@extends('layouts.app')

@section('css')
    <link href="{{ asset('css/plugins/validetta/validetta.css') }}" rel="stylesheet" type="text/css" media="screen">
@endsection

@section('title', 'Tambah Saran')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <div class="card-text">
                        <b>Harap mengisi data dengan benar !</b>
                        <div class="float-right">
                            <a href="{{ route('admin.bakulan.index') }}" class="btn btn-outline-success btn-xs">
                                <span class="fas fa-arrow-left"></span> Kembali
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card">
                <form role="form" id="form" method="post" action="{{ route('admin.bakulan.store') }}">
                    {{ csrf_field() }}
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-7">
                                <div class="form-group">
                                    <label>Nama Pasar</label>
                                    <select name="pasar_id" id="pasar_id" class="form-control">
                                        <option value="">Pilih</option>
                                        @foreach($pasar as $p)
                                            <option value="{{ $p->id }}">{{ $p->nama }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Tanggal</label>
                                    <input type="date" name="tanggal" class="form-control" data-validetta="required">
                                </div>
                                <div class="form-group">
                                    <label>Jumlah Bakulan dan Setoran Perbakulan</label>
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <input type="text" name="jum_bakulan" class="form-control"
                                                   data-validetta="required, number" placeholder="Jumlah">
                                        </div>
                                        <div class="col-sm-9">
                                            <input type="text" name="setor_bakulan" class="form-control"
                                                   data-validetta="required, number" placeholder="Setoran (Rp. )">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
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