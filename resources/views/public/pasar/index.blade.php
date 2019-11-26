@extends('layouts.public')

@section('content')
    <div class="text-center">
        <h3 class="text-bold mb-2">
            Pasar - Pasar di Kabupaten Bima
        </h3>
    </div>

    <div class="text-right mb-5">
        <a href="{{ asset('img/syarat-penempatan-kios.pdf') }}" class="btn btn-info btn-xs" target="_blank">
            <span class="fas fa-download"></span> Syarat Penempatan Kios
        </a>
    </div>

    @foreach($data as $i)
        <div class="card shadow mb-4">
            <div class="card-body">
                <div class="card-text">
                    <div class="row">
                        <div class="col-md-4 col-sm-4">
                            @if(count($i->gambar_pasar) == 0)
                                <img src="{{ asset('img/noimage.png') }}" alt="" style="width: 100%">
                            @else
                                <img src="{{ asset('img/'.$i->gambar_pasar->first()->nama_file) }}" alt=""
                                     style="width: 100%">
                            @endif
                        </div>
                        <div class="col-md-8 col-sm-4">
                            <a href="{{ route('pasar_show',['id'=>$i->id]) }}"
                               class="btn btn-sm btn-outline-dark stretched-link mt-3 mb-3">
                                Pasar {{ $i->nama }} <span class="fa fa-arrow-circle-right"></span>
                            </a>
                            <table class="table table-bordered">
                                <thead>
                                <tr>
                                    <th>Desa</th>
                                    <th>Kecamatan</th>
                                    <th>Buka</th>
                                    <th>Omset</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>{{ $i->desa }}</td>
                                    <td>{{ $i->kec }}</td>
                                    <td>{{ $i->buka }}</td>
                                    <td>{{ $i->omset }}</td>
                                </tr>
                                </tbody>
                            </table>
                            <p>Silahkan klik untuk melihat detail Pasar {{ $i->nama }} ini.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endforeach

    {{ $data->links() }}
@endsection