@extends('layouts.public')

@section('content')
    <div class="">
        <h3 class="text-bold mb-5">
            <form>
                <label for="pasar_id">Pilih Komoditi Pasar</label>
                <select name="pasar_id" id="pasar_id" class="form-control" onchange="this.form.submit()">
                    @if($detail_pasar == '')
                        <option value="">Pilih</option>
                    @else
                        <option value="{{ $detail_pasar->id }}">{{ $detail_pasar->nama }}</option>
                    @endif
                    @foreach($pasar as $p)
                        <option value="{{ $p->id }}">{{ $p->nama }}</option>
                    @endforeach
                </select>
            </form>
        </h3>
    </div>

    @if($show)
        <h6 class="mb-4">
            <strong>Berikut harga komoditi</strong>
        </h6>
        @if(count($data) > 0)
            <div class="row">
                <div class="col-md-2 col-sm-3">
                    <div class="card shadow mb-3">
                        <div class="card-body">
                            <h5 class="text-right">{{ number_format($data->beras_super) }}</h5>
                            <div class="text-primary" style="height: 80px; position: relative;">
                                <div style="position: absolute; bottom: 0px">
                                    Beras Super
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-2 col-sm-3">
                    <div class="card shadow mb-3">
                        <div class="card-body">
                            <h5 class="text-right">{{ number_format($data->beras_medium) }}</h5>
                            <div class="text-primary" style="height: 80px; position: relative;">
                                <div style="position: absolute; bottom: 0px">
                                    Beras Medium
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-2 col-sm-3">
                    <div class="card shadow mb-3">
                        <div class="card-body">
                            <h5 class="text-right">{{ number_format($data->jagung) }}</h5>
                            <div class="text-primary" style="height: 80px; position: relative;">
                                <div style="position: absolute; bottom: 0px">
                                    Jagung
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-2 col-sm-3">
                    <div class="card shadow mb-3">
                        <div class="card-body">
                            <h5 class="text-right">{{ number_format($data->kedelai_lokal_kuning_kecil) }}</h5>
                            <div class="text-primary" style="height: 80px; position: relative;">
                                <div style="position: absolute; bottom: 0px">
                                    Kedelai Lokal Kuning Kecil
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-2 col-sm-3">
                    <div class="card shadow mb-3">
                        <div class="card-body">
                            <h5 class="text-right">{{ number_format($data->kedelai_lokal_kuning_besar) }}</h5>
                            <div class="text-primary" style="height: 80px; position: relative;">
                                <div style="position: absolute; bottom: 0px">
                                    Kedelai Lokal Kuning Besar
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-2 col-sm-3">
                    <div class="card shadow mb-3">
                        <div class="card-body">
                            <h5 class="text-right">{{ number_format($data->ubi_kayu) }}</h5>
                            <div class="text-primary" style="height: 80px; position: relative;">
                                <div style="position: absolute; bottom: 0px">
                                    Ubi Kayu
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-2 col-sm-3">
                    <div class="card shadow mb-3">
                        <div class="card-body">
                            <h5 class="text-right">{{ number_format($data->ubi_jalar) }}</h5>
                            <div class="text-primary" style="height: 80px; position: relative;">
                                <div style="position: absolute; bottom: 0px">
                                    Ubi Jalar
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-2 col-sm-3">
                    <div class="card shadow mb-3">
                        <div class="card-body">
                            <h5 class="text-right">{{ number_format($data->gula) }}</h5>
                            <div class="text-primary" style="height: 80px; position: relative;">
                                <div style="position: absolute; bottom: 0px">
                                    Gula
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-2 col-sm-3">
                    <div class="card shadow mb-3">
                        <div class="card-body">
                            <h5 class="text-right">{{ number_format($data->minyak_goreng_bimoli) }}</h5>
                            <div class="text-primary" style="height: 80px; position: relative;">
                                <div style="position: absolute; bottom: 0px">
                                    Minyak Goreng Bimoli
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-2 col-sm-3">
                    <div class="card shadow mb-3">
                        <div class="card-body">
                            <h5 class="text-right">{{ number_format($data->minyak_goreng_curah) }}</h5>
                            <div class="text-primary" style="height: 80px; position: relative;">
                                <div style="position: absolute; bottom: 0px">
                                    Minyak Goreng Curah
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-2 col-sm-3">
                    <div class="card shadow mb-3">
                        <div class="card-body">
                            <h5 class="text-right">{{ number_format($data->tepung) }}</h5>
                            <div class="text-primary" style="height: 80px; position: relative;">
                                <div style="position: absolute; bottom: 0px">
                                    Tepung
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-2 col-sm-3">
                    <div class="card shadow mb-3">
                        <div class="card-body">
                            <h5 class="text-right">{{ number_format($data->daging_ayam) }}</h5>
                            <div class="text-primary" style="height: 80px; position: relative;">
                                <div style="position: absolute; bottom: 0px">
                                    Daging Ayam
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-2 col-sm-3">
                    <div class="card shadow mb-3">
                        <div class="card-body">
                            <h5 class="text-right">{{ number_format($data->telur_ayam_kampung) }}</h5>
                            <div class="text-primary" style="height: 80px; position: relative;">
                                <div style="position: absolute; bottom: 0px">
                                    Telur Ayam Kampung
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-2 col-sm-3">
                    <div class="card shadow mb-3">
                        <div class="card-body">
                            <h5 class="text-right">{{ number_format($data->telur_ayam_ras) }}</h5>
                            <div class="text-primary" style="height: 80px; position: relative;">
                                <div style="position: absolute; bottom: 0px">
                                    Telur Ayam Ras
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-2 col-sm-3">
                    <div class="card shadow mb-3">
                        <div class="card-body">
                            <h5 class="text-right">{{ number_format($data->cabe_merah_besar) }}</h5>
                            <div class="text-primary" style="height: 80px; position: relative;">
                                <div style="position: absolute; bottom: 0px">
                                    Cabe Merah Besar
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-2 col-sm-3">
                    <div class="card shadow mb-3">
                        <div class="card-body">
                            <h5 class="text-right">{{ number_format($data->cabe_keriting) }}</h5>
                            <div class="text-primary" style="height: 80px; position: relative;">
                                <div style="position: absolute; bottom: 0px">
                                    Cabe Keriting
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-2 col-sm-3">
                    <div class="card shadow mb-3">
                        <div class="card-body">
                            <h5 class="text-right">{{ number_format($data->cabe_rawit) }}</h5>
                            <div class="text-primary" style="height: 80px; position: relative;">
                                <div style="position: absolute; bottom: 0px">
                                    Cabe Rawit
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-2 col-sm-3">
                    <div class="card shadow mb-3">
                        <div class="card-body">
                            <h5 class="text-right">{{ number_format($data->bawang_merah_umbi_kering) }}</h5>
                            <div class="text-primary" style="height: 80px; position: relative;">
                                <div style="position: absolute; bottom: 0px">
                                    Bawang Merah Kering
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-2 col-sm-3">
                    <div class="card shadow mb-3">
                        <div class="card-body">
                            <h5 class="text-right">{{ number_format($data->bawang_merah_umbi_basah) }}</h5>
                            <div class="text-primary" style="height: 80px; position: relative;">
                                <div style="position: absolute; bottom: 0px">
                                    Bawang Merah Basah
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-2 col-sm-3">
                    <div class="card shadow mb-3">
                        <div class="card-body">
                            <h5 class="text-right">{{ number_format($data->bawang_putih_umbi_kering) }}</h5>
                            <div class="text-primary" style="height: 80px; position: relative;">
                                <div style="position: absolute; bottom: 0px">
                                    Bawang Putih Kering
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-2 col-sm-3">
                    <div class="card shadow mb-3">
                        <div class="card-body">
                            <h5 class="text-right">{{ number_format($data->bawang_putih_umbi_basah) }}</h5>
                            <div class="text-primary" style="height: 80px; position: relative;">
                                <div style="position: absolute; bottom: 0px">
                                    Bawang Putih Basah
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-2 col-sm-3">
                    <div class="card shadow mb-3">
                        <div class="card-body">
                            <h5 class="text-right">{{ number_format($data->kacang_tanah) }}</h5>
                            <div class="text-primary" style="height: 80px; position: relative;">
                                <div style="position: absolute; bottom: 0px">
                                    Kacang Tanah
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-2 col-sm-3">
                    <div class="card shadow mb-3">
                        <div class="card-body">
                            <h5 class="text-right">{{ number_format($data->kacang_hijau) }}</h5>
                            <div class="text-primary" style="height: 80px; position: relative;">
                                <div style="position: absolute; bottom: 0px">
                                    Kacang Hijau
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @else
            <div class="alert alert-primary" role="alert">
                <b>Info !</b><br>
                Data komoditi tidak ditemukan !!
            </div>
        @endif
    @endif
@endsection