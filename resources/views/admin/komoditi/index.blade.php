@extends('layouts.app')

@section('css')
    <!-- DataTables -->
    <link rel="stylesheet" href="{{ asset('css/plugins/datatables-bs4/css/dataTables.bootstrap4.css') }}">
@endsection

@section('title', 'Data Komoditi Pasar')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <div class="card-text">
                        <div class="row">
                            <div class="col-md-4">
                                <form>
                                    <label for="pasar_id">Nama Pasar</label>
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
                            </div>
                            <div class="col-md-8">
                                <div class="float-right">
                                    <a href="{{ route('admin.komoditi.create') }}" class="btn btn-outline-primary btn-xs">
                                        <span class="fas fa-plus"></span> Catat Baru
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-body">
                    @if($detail_pasar != '')
                    <div class="card-title mb-3">Komoditi Pasar : {{ $detail_pasar->nama }}</div>
                    @endif
                    <div class="card-text">
                        <table class="table table-bordered table-hover table-responsive">
                            <thead>
                            <tr>
                                <th>Tanggal</th>
                                <th>Beras Super</th>
                                <th>Beras Medium</th>
                                <th>Jagung</th>
                                <th>Kedelai Lokal Kuning Kecil</th>
                                <th>Kedelai Lokal Kuning Besar</th>
                                <th>Ubi Kayu</th>
                                <th>Ubi Jalar</th>
                                <th>Gula</th>
                                <th>Minyak Goreng Bimoli</th>
                                <th>Minyak Goreng Curah</th>
                                <th>Tepung</th>
                                <th>Daging Ayam</th>
                                <th>Telur Ayam Kampung</th>
                                <th>Telur Ayam Ras</th>
                                <th>Cabe Merah Besar</th>
                                <th>Cabe Keriting</th>
                                <th>Cabe Rawit</th>
                                <th>Bawang Merah Kering</th>
                                <th>Bawang Merah Basah</th>
                                <th>Bawang Putih Kering</th>
                                <th>Bawang Putih Basah</th>
                                <th>Kacang Tanah</th>
                                <th>Kacang Hijau</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($data as $i)
                                <tr>
                                    <td>{{ date('d-m-Y', strtotime($i->tgl)) }}</td>
                                    <td>{{ $i->beras_super }}</td>
                                    <td>{{ $i->beras_medium }}</td>
                                    <td>{{ $i->jagung }}</td>
                                    <td>{{ $i->kedelai_lokal_kuning_kecil }}</td>
                                    <td>{{ $i->kedelai_lokal_kuning_besar }}</td>
                                    <td>{{ $i->ubi_kayu }}</td>
                                    <td>{{ $i->ubi_jalar }}</td>
                                    <td>{{ $i->gula }}</td>
                                    <td>{{ $i->minyak_goreng_bimoli }}</td>
                                    <td>{{ $i->minyak_goreng_curah }}</td>
                                    <td>{{ $i->tepung }}</td>
                                    <td>{{ $i->daging_ayam }}</td>
                                    <td>{{ $i->telur_ayam_kampung }}</td>
                                    <td>{{ $i->telur_ayam_ras }}</td>
                                    <td>{{ $i->cabe_merah_besar }}</td>
                                    <td>{{ $i->cabe_keriting }}</td>
                                    <td>{{ $i->cabe_rawit }}</td>
                                    <td>{{ $i->bawang_merah_umbi_kering }}</td>
                                    <td>{{ $i->bawang_merah_umbi_basah }}</td>
                                    <td>{{ $i->bawang_putih_umbi_kering }}</td>
                                    <td>{{ $i->bawang_putih_umbi_basah }}</td>
                                    <td>{{ $i->kacang_tanah }}</td>
                                    <td>{{ $i->kacang_hijau }}</td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('js')
    <!-- DataTables -->
    <script src="{{ asset('css/plugins/datatables/jquery.dataTables.js') }}"></script>
    <script src="{{ asset('css/plugins/datatables-bs4/js/dataTables.bootstrap4.js') }}"></script>
    <script>
        $(function () {
            $('.table').DataTable({
                "paging": true,
                "lengthChange": true,
                "ordering": false,
                "info": true,
                "autoWidth": false,
            });
        });
    </script>
@endsection