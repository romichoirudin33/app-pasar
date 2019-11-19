@extends('layouts.app')

@section('css')
    <link href="{{ asset('css/plugins/validetta/validetta.css') }}" rel="stylesheet" type="text/css" media="screen">
@endsection

@section('title', 'Upload Gambar')

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
                        </div>
                    </div>
                </div>
            </div>
            <div class="card">
                <form role="form" id="form" method="post" action="{{ route('admin.gambar-pasar.store') }}" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Nama Pasar</label>
                                    <select name="pasar_id" id="pasar_id" class="form-control" data-validetta="required">
                                        @if($detail_pasar == '')
                                            <option value="">Pilih</option>
                                        @else
                                            <option value="{{ $detail_pasar->id }}">{{ $detail_pasar->nama }}</option>
                                        @endif
                                        @foreach($pasar as $p)
                                            <option value="{{ $p->id }}">{{ $p->nama }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="nama_file">File input</label>
                                    <div class="input-group">
                                        <div class="custom-file">
                                            <input type="file" accept="image/jpeg, image/jpg, image/png" name="nama_file" class="custom-file-input" id="nama_file" required>
                                            <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                                        </div>
                                    </div>
                                    <p class="text-gray mt-2 text-sm">
                                        Format file hanya <b>jpeg, jpg, dan png</b> <br>
                                        dengan ukuran maksimal <b>2 MB</b>
                                    </p>
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
    <!-- bs-custom-file-input -->
    <script src="{{ asset('css/plugins/bs-custom-file-input/bs-custom-file-input.min.js')}}"></script>
    <script>
        $(function () {
            $("#form").validetta({
                realTime: true,
                display: 'inline',
                errorTemplateClass: 'validetta-inline'
            });
            bsCustomFileInput.init();
            
            $("#nama_file").on('change', function () {
                var FileSize = this.files[0].size / 1024 / 1024; // in MB
                if (FileSize > 2) {
                    alert('Ukuran file lebih dari 2 MB');
                    $("#nama_file").val(null); //for clearing with Jquery
                    $('.custom-file-label').html('Choose file');
                }
            })
        });
    </script>
@endsection