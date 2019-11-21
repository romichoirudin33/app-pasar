@extends('layouts.public')

@section('content')
    <div class="text-center">
        <h3 class="text-bold mb-5">
            Program Unggulan Sigesit Bima
        </h3>
    </div>

    <div class="row">
        <div class="col-md-4">
            <div class="card mb-4" style="height: 250px">
                <div class="card-body text-center">
                    <img src="https://www.jing.fm/clipimg/full/143-1430726_fruits-pasartap-add-to-market-icon-png.png"
                         style="height: 80px">
                    <h5 class="card-title"></h5>
                    <a href="{{ route('pasar') }}" class="btn btn-outline-dark stretched-link mt-3 mb-3">Pasar</a>
                    <p class="card-text">Cek pasar sekitar bima.</p>
                </div>
            </div>
            <div class="card mb-4" style="height: 250px">
                <div class="card-body text-center">
                    <img src="https://data.jabarprov.go.id/uploads/group/2019-05-08-045114.178043icon4.png"
                         style="height: 80px">
                    <h5 class="card-title"></h5>
                    <a href="{{ route('komoditi') }}" class="btn btn-outline-dark stretched-link mt-3 mb-3">Komoditi</a>
                    <p class="card-text">Cek harga komoditi untuk kebutuhan pasar.</p>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card mb-4" style="height: 250px">
                <div class="card-body text-center">
                    <img src="https://www.pngfind.com/pngs/b/561-5612335_nutrition-and-dietetics-meeting-round-icon-png-transparent.png"
                         style="height: 80px">
                    <h5 class="card-title"></h5>
                    <a href="{{ route('rapat') }}" class="btn btn-outline-dark stretched-link mt-3 mb-3">Kaboro Weki</a>
                    <p class="card-text">Informasi hasil kumpul demi kemajuan pasar.</p>
                </div>
            </div>
            <div class="card mb-4" style="height: 250px">
                <div class="card-body text-center">
                    <img src="https://gusdwi.info/wp-content/uploads/2019/09/icon-feat-04.png" style="height: 80px">
                    <h5 class="card-title"></h5>
                    <a href="{{ route('saran') }}" class="btn btn-outline-dark stretched-link mt-3 mb-3">Sampah</a>
                    <p class="card-text">Fitur Saran dan Permasalahan untuk pelayanan lebih baik.</p>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card mb-4" style="height: 250px">
                <div class="card-body text-center">
                    <img src="https://www.ukmriau.com/wp-content/uploads/2018/03/icon-kategori-ukm.png"
                         style="height: 80px">
                    <h5 class="card-title"></h5>
                    <a href="{{ route('ikm-ukm') }}" class="btn btn-outline-dark stretched-link mt-3 mb-3">IKM Dan UKM</a>
                    <p class="card-text">Cek data IKM dan UKM terdaftar makin mudah.</p>
                </div>
            </div>
            <div class="card mb-4" style="height: 250px">
                <div class="card-body text-center">
                    <img src="https://www.freeiconspng.com/uploads/stock-exchange-icon-png-1.png" style="height: 80px">
                    <h5 class="card-title mt-3">PAD</h5>
                    <p class="card-text">Grafik Pendapatan Asli Daerah dari pasar.</p>
                </div>
            </div>
        </div>
    </div>
@endsection