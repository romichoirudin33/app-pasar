@extends('layouts.app')

@section('title', 'Laporan Lainnya')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <div class="card-text">
                        <div class="callout callout-info">
                            <h5>
                                Laporan <b>Data Pasar Terbaru</b>
                                <a href="{{ route('admin.laporan.download', ['jenis' => 'pasar']) }}"
                                   class="btn btn-outline-success btn-sm float-right" style="text-decoration: none"
                                   target="_blank">
                                    Download <i class="fas fa-download"></i>
                                </a>
                            </h5>
                        </div>
                        <div class="callout callout-info">
                            <h5>
                                Laporan <b>Data IKM Terbaru</b>
                                <a href="{{ route('admin.laporan.download', ['jenis' => 'ikm']) }}"
                                   class="btn btn-outline-success btn-sm float-right" style="text-decoration: none"
                                   target="_blank">
                                    Download <i class="fas fa-download"></i>
                                </a>
                            </h5>
                        </div>
                        <div class="callout callout-info">
                            <h5>
                                Laporan <b>Data UKM Terbaru</b>
                                <a href="{{ route('admin.laporan.download', ['jenis' => 'ukm']) }}"
                                   class="btn btn-outline-success btn-sm float-right" style="text-decoration: none"
                                   target="_blank">
                                    Download <i class="fas fa-download"></i>
                                </a>
                            </h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection