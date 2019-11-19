@extends('layouts.app')

@section('css')
    <link href="{{ asset('css/plugins/validetta/validetta.css') }}" rel="stylesheet" type="text/css" media="screen">
@endsection

@section('title', 'Catat Data Komoditi')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <div class="card-text">
                        <b>Harap mengisi data dengan benar !</b>
                        <div class="float-right">
                            <a href="{{ route('admin.komoditi.index') }}" class="btn btn-outline-success btn-xs">
                                <span class="fas fa-arrow-left"></span> Kembali
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card">
                <form role="form" id="form" method="post" action="{{ route('admin.komoditi.store') }}">
                    {{ csrf_field() }}
                    <div class="card-body">
                        <div class="row">
                            <!-- Data Pasar -->
                            <div class="col-md-4">
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
                                    <input type="date" autocomplete="off" class="form-control" name="tgl">
                                </div>
                                <div class="form-group">
                                    <label>Harga Beras Super (Rp.)</label>
                                    <input type="text" autocomplete="off" class="form-control" name="beras_super" data-validetta="required, number" value="0">
                                </div>
                                <div class="form-group">
                                    <label>Harga Beras Medium (Rp.)</label>
                                    <input type="text" autocomplete="off" class="form-control" name="beras_medium" data-validetta="required, number" value="0">
                                </div>
                                <div class="form-group">
                                    <label>Harga Jagung (Rp.)</label>
                                    <input type="text" autocomplete="off" class="form-control" name="jagung" data-validetta="required, number" value="0">
                                </div>
                                <div class="form-group">
                                    <label>Harga Kedelai Lokal Kuning Kecil (Rp.)</label>
                                    <input type="text" autocomplete="off" class="form-control" name="kedelai_lokal_kuning_kecil" data-validetta="required, number" value="0">
                                </div>
                                <div class="form-group">
                                    <label>Harga Kedelai Lokal Kuning Besar (Rp.)</label>
                                    <input type="text" autocomplete="off" class="form-control" name="kedelai_lokal_kuning_besar" data-validetta="required, number" value="0">
                                </div>

                                <div class="form-group">
                                    <label>Harga Gula (Rp.)</label>
                                    <input type="text" autocomplete="off" class="form-control" name="gula" data-validetta="required, number" value="0">
                                </div>
                            </div>
                            <!-- Data Survei Pasar -->
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Harga Ubi Kayu (Rp.)</label>
                                    <input type="text" autocomplete="off" class="form-control" name="ubi_kayu" data-validetta="required, number" value="0">
                                </div>
                                <div class="form-group">
                                    <label>Harga Ubi Jalar (Rp.)</label>
                                    <input type="text" autocomplete="off" class="form-control" name="ubi_jalar" data-validetta="required, number" value="0">
                                </div>
                                <div class="form-group">
                                    <label>Harga Tepung (Rp.)</label>
                                    <input type="text" autocomplete="off" class="form-control" name="tepung" data-validetta="required, number" value="0">
                                </div>
                                <div class="form-group">
                                    <label>Harga Daging Ayam (Rp.)</label>
                                    <input type="text" autocomplete="off" class="form-control" name="daging_ayam" data-validetta="required, number" value="0">
                                </div>
                                <div class="form-group">
                                    <label>Harga Telur Ayam Kampung (Rp.)</label>
                                    <input type="text" autocomplete="off" class="form-control" name="telur_ayam_kampung" data-validetta="required, number" value="0">
                                </div>
                                <div class="form-group">
                                    <label>Harga Telur Ayam Ras (Rp.)</label>
                                    <input type="text" autocomplete="off" class="form-control" name="telur_ayam_ras" data-validetta="required, number" value="0">
                                </div>
                                <div class="form-group">
                                    <label>Harga Cabe Merah Besar (Rp.)</label>
                                    <input type="text" autocomplete="off" class="form-control" name="cabe_merah_besar" data-validetta="required, number" value="0">
                                </div>
                                <div class="form-group">
                                    <label>Harga Cabe Keriting (Rp.)</label>
                                    <input type="text" autocomplete="off" class="form-control" name="cabe_keriting" data-validetta="required, number" value="0">
                                </div>
                                <div class="form-group">
                                    <label>Harga Cabe Rawit (Rp.)</label>
                                    <input type="text" autocomplete="off" class="form-control" name="cabe_rawit" data-validetta="required, number" value="0">
                                </div>
                            </div>
                            <!-- Jumlah Setoran -->
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Harga Minyak Goreng Bimoli (Rp.)</label>
                                    <input type="text" autocomplete="off" class="form-control" name="minyak_goreng_bimoli" data-validetta="required, number" value="0">
                                </div>
                                <div class="form-group">
                                    <label>Harga Minyak Goreng Curah (Rp.)</label>
                                    <input type="text" autocomplete="off" class="form-control" name="minyak_goreng_curah" data-validetta="required, number" value="0">
                                </div>
                                <div class="form-group">
                                    <label>Harga Bawang Merah Umbi Kering (Rp.)</label>
                                    <input type="text" autocomplete="off" class="form-control" name="bawang_merah_umbi_kering" data-validetta="required, number" value="0">
                                </div>
                                <div class="form-group">
                                    <label>Harga Bawang Merah Umbi Basah (Rp.)</label>
                                    <input type="text" autocomplete="off" class="form-control" name="bawang_merah_umbi_basah" data-validetta="required, number" value="0">
                                </div>
                                <div class="form-group">
                                    <label>Harga Bawang Putih Umbi Kering (Rp.)</label>
                                    <input type="text" autocomplete="off" class="form-control" name="bawang_putih_umbi_kering" data-validetta="required, number" value="0">
                                </div>
                                <div class="form-group">
                                    <label>Harga Bawang Putih Umbi Basah (Rp.)</label>
                                    <input type="text" autocomplete="off" class="form-control" name="bawang_putih_umbi_basah" data-validetta="required, number" value="0">
                                </div>
                                <div class="form-group">
                                    <label>Harga Kacang Tanah (Rp.)</label>
                                    <input type="text" autocomplete="off" class="form-control" name="kacang_tanah" data-validetta="required, number" value="0">
                                </div>
                                <div class="form-group">
                                    <label>Harga Kacang Hijau (Rp.)</label>
                                    <input type="text" autocomplete="off" class="form-control" name="kacang_hijau" data-validetta="required, number" value="0">
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