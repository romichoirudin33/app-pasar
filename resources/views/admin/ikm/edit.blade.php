@extends('layouts.app')

@section('css')
    <link href="{{ asset('css/plugins/validetta/validetta.css') }}" rel="stylesheet" type="text/css" media="screen">
@endsection

@section('title', 'Edit Data IKM')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <div class="card-text">
                        <b>Harap mengisi data dengan benar !</b>
                        <div class="float-right">
                            <a href="{{ route('admin.ikm.index') }}" class="btn btn-outline-success btn-xs">
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
                                  action="{{ route('admin.ikm.destroy', ['id'=>$data->id]) }}"
                                  method="post">
                                {{ method_field('DELETE') }}
                                {{ csrf_field() }}
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card">
                <form role="form" id="form" method="post"
                      action="{{ route('admin.ikm.update', ['id' => $data->id]) }}">
                    {{ csrf_field() }}
                    {{ method_field('PUT') }}
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Nama Perusahaan</label>
                                    <input type="text" autocomplete="off" class="form-control" name="nama_perusahaan" data-validetta="required" value="{{ $data->nama_perusahaan }}">
                                </div>
                                <div class="form-group">
                                    <label>Nama Pemilik</label>
                                    <input type="text" autocomplete="off" class="form-control" name="nama_pemilik" data-validetta="required" value="{{ $data->nama_pemilik }}">
                                </div>
                                <div class="form-group">
                                    <label>HP Pemilik</label>
                                    <input type="text" autocomplete="off" class="form-control" name="hp_pemilik" data-validetta="numeric,minLength[11],maxLength[13]" value="{{ $data->hp_pemilik }}">
                                </div>
                                <div class="form-group">
                                    <label>Jalan</label>
                                    <input type="text" autocomplete="off" class="form-control" name="jln" value="{{ $data->jln }}">
                                </div>
                                <div class="form-group">
                                    <label>Desa</label>
                                    <input type="text" autocomplete="off" class="form-control" name="desa" value="{{ $data->desa }}">
                                </div>
                                <div class="form-group">
                                    <label>Kecamatan</label>
                                    <input type="text" autocomplete="off" class="form-control" name="kec" value="{{ $data->kec }}">
                                </div>
                                <div class="form-group">
                                    <label>Jenis Industri</label>
                                    <input type="text" autocomplete="off" class="form-control" name="jenis_industri" value="{{ $data->jenis_industri }}">
                                </div>
                                <div class="form-group">
                                    <label>Nama Produk</label>
                                    <input type="text" autocomplete="off" class="form-control" name="nama_produk" value="{{ $data->nama_produk }}">
                                </div>
                                <div class="form-group">
                                    <label>Status</label>
                                    <select name="status" class="form-control">
                                        <option value="{{ $data->status }}">{{ $data->status }}</option>
                                        <option value="formal">formal</option>
                                        <option value="non formal">non formal</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Jml Tenaga Kerja Laki-laki</label>
                                    <input type="text" autocomplete="off" class="form-control" name="tenaga_kerja_l" data-validetta="numeric" value="{{ $data->tenaga_kerja_l }}">
                                </div>
                                <div class="form-group">
                                    <label>Jml Tenaga Kerja Perempuan</label>
                                    <input type="text" autocomplete="off" class="form-control" name="tenaga_kerja_p" data-validetta="numeric" value="{{ $data->tenaga_kerja_p }}">
                                </div>
                                <div class="form-group">
                                    <label>Nilai Investasi</label>
                                    <input type="text" autocomplete="off" class="form-control" name="nilai_investasi" data-validetta="numeric" value="{{ $data->nilai_investasi }}">
                                </div>
                                <div class="form-group">
                                    <label>Jml Kapasitas Produk</label>
                                    <input type="text" autocomplete="off" class="form-control" name="kapasitas_produk_jum" data-validetta="numeric" value="{{ $data->kapasitas_produk_jum }}">
                                </div>
                                <div class="form-group">
                                    <label>Satuan Produk</label>
                                    <input type="text" autocomplete="off" class="form-control" name="kapasitas_produk_sat" value="{{ $data->kapasitas_produk_sat }}">
                                </div>
                                <div class="form-group">
                                    <label>Nilai Produksi</label>
                                    <input type="text" autocomplete="off" class="form-control" name="nilai_produksi" data-validetta="numeric" value="{{ $data->nilai_produksi }}">
                                </div>
                                <div class="form-group">
                                    <label>Nilai BPP BP</label>
                                    <input type="text" autocomplete="off" class="form-control" name="nilai_bbp_bp" data-validetta="numeric" value="{{ $data->nilai_bbp_bp }}">
                                </div>
                                <div class="form-group">
                                    <label>Keterangan Bantuan</label>
                                    <input type="text" autocomplete="off" class="form-control" name="bantuan" value="{{ $data->bantuan }}">
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