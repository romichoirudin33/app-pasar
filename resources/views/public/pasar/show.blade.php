@extends('layouts.public')

@section('content')
    <div class="row">
        <div class="col-md-6">
            @if(count($data->gambar_pasar) > 0)
                <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                        @php
                            $active = true;
                        @endphp
                        @foreach($data->gambar_pasar as $g)
                            <div class="carousel-item {{ $active ? 'active' : '' }}">
                                <img src="{{ asset('img/'.$g->nama_file) }}" class="d-block w-100" alt="...">
                            </div>
                            @php
                                $active = false;
                            @endphp
                        @endforeach
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            @else
                <img src="{{ asset('img/noimage.png') }}" alt="" class="img-bordered w-100">
            @endif
        </div>
        <div class="col-md-6">
            <div class="text-center">
                <h4 class="mb-4">
                    Detail Pasar <b>{{ $data->nama }}</b>
                </h4>
            </div>

            <table class="table table-bordered table-sm">
                <tr>
                    <th>Desa</th>
                    <td width="5px">:</td>
                    <td>{{ $data->desa }}</td>
                </tr>
                <tr>
                    <th>Kec</th>
                    <td width="5px">:</td>
                    <td>{{ $data->kec }}</td>
                </tr>
                <tr>
                    <th>Thn Bangun</th>
                    <td width="5px">:</td>
                    <td>{{ $data->pemb }}</td>
                </tr>
                <tr>
                    <th>Kondisi</th>
                    <td width="5px">:</td>
                    <td>{{ $data->kondisi }}</td>
                </tr>
                <tr>
                    <th>Luas</th>
                    <td width="5px">:</td>
                    <td>{{ $data->luas }}</td>
                </tr>
                <tr>
                    <th>Buka</th>
                    <td width="5px">:</td>
                    <td>{{ $data->buka }}</td>
                </tr>
                <tr>
                    <th>Jumlah</th>
                    <td width="5px">:</td>
                    <td>{{ $data->jumlah }}</td>
                </tr>
                <tr>
                    <th>Omset</th>
                    <td width="5px">:</td>
                    <td>{{ $data->omset }}</td>
                </tr>
                <tr>
                    <th>Pengelola</th>
                    <td width="5px">:</td>
                    <td>{{ $data->pengelola }}</td>
                </tr>
            </table>
        </div>
    </div>

    <h5><strong>Pasar Lainnya</strong></h5>
    <div class="row">
        @foreach($pasar_lainnya as $i)
        <div class="col-md-3 col-sm-6">
            <div class="card">
                @if(count($i->gambar_pasar) > 0)
                    <img src="{{ asset('img/'.$i->gambar_pasar->first()->nama_file) }}" class="card-img-top" alt="...">
                @else
                    <img src="{{ asset('img/noimage.png') }}" class="card-img-top" alt="...">
                @endif
                <div class="card-body">
                    <h5 class="card-title">{{ $i->nama }}</h5>
                    <a href="{{ route('pasar_show', ['id' => $i->id]) }}" class="btn btn-outline-dark btn-block btn-sm stretched-link">Klik untuk detail</a>
                </div>
            </div>
        </div>
        @endforeach
    </div>

@endsection