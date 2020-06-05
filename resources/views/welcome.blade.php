@extends('layouts.public')

@section('css')
    <style>
        .carousel-control-prev {
            background-image: linear-gradient(to left, rgba(255,0,0,0), rgb(113, 113, 113));
        }

        .carousel-control-next {
            background-image: linear-gradient(to right, rgba(255,0,0,0), rgb(113, 113, 113));
        }
    </style>
@endsection

@section('content')
    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel"
         style="margin-left: -4rem; margin-right: -4rem; margin-bottom: 4rem">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="d-block w-100" src="{{ asset('assets-img/IKLAN-BAPEDA-KAB-2.jpg') }}"
                     alt="First slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="{{ asset('assets-img/IKLAN-BAPEDA-KAB.jpg') }}"
                     alt="Second slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="{{ asset('assets-img/DENAH-EDIT.jpg') }}"
                     alt="Third slide">
            </div>
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

    <div class="text-center mt-3">

        <button class="btn btn-outline-dark mb-2" data-toggle="modal" data-target="#exampleModal">
            <img src="{{ asset('assets-img/phone_PNG49047.png') }}" style="height: 50px">
            Call Pedagang
        </button>
        <br><br>

        <button class="btn btn-outline-dark mb-2" data-toggle="modal" data-target="#exampleModal1">
            <img src="{{ asset('assets-img/icon-pengelola.png') }}" style="height: 50px">
            Call Pengelola
        </button>

        <div class="modal fade " id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div id="carouselExampleControls1" class="carousel slide" data-ride="carousel">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img class="d-block w-100" src="{{ asset('assets-img/IKLAN-BAPEDA-1.png') }}" alt="Iklan Bapeda 1">
                                </div>
                                <div class="carousel-item">
                                    <img class="d-block w-100" src="{{ asset('assets-img/IKLAN-BAPEDA-2.png') }}" alt="Iklan Bapeda 2">
                                </div>
                                <div class="carousel-item">
                                    <img class="d-block w-100" src="{{ asset('assets-img/IKLAN-BAPEDA-3.png') }}" alt="Iklan Bapeda 3">
                                </div>
                            </div>
                            <a class="carousel-control-prev" href="#carouselExampleControls1" role="button" data-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next" href="#carouselExampleControls1" role="button" data-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <div class="modal fade " id="exampleModal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-xl" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <img src="{{ asset('assets-img/IKLAN-BAPEDA-PASAR.jpg') }}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="text-center mt-5">
        <h3 class="text-bold mb-5">
            Program Unggulan Sigesit Bima
        </h3>
    </div>

    <div class="row">
        <div class="col-md-4 col-sm-6 col-xs-6">
            <div class="card mb-4" style="height: 250px">
                <div class="card-body text-center">
                    <img src="https://www.jing.fm/clipimg/full/143-1430726_fruits-pasartap-add-to-market-icon-png.png"
                         style="height: 80px">
                    <h5 class="card-title"></h5>
                    <a href="" class="btn btn-outline-dark mt-3 mb-3">Pasar</a>
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
        <div class="col-md-4 col-sm-6 col-xs-6">
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
                    <img src="https://www.sigesitbima.com/assets-img/icon-sampah.png" style="height: 80px">
                    <h5 class="card-title"></h5>
                    <a href="{{ route('saran') }}" class="btn btn-outline-dark stretched-link mt-3 mb-3">Sampah</a>
                    <p class="card-text">Fitur Saran dan Permasalahan untuk pelayanan lebih baik.</p>
                </div>
            </div>
        </div>
        <div class="col-md-4 col-sm-6 col-xs-6">
            <div class="card mb-4" style="height: 250px">
                <div class="card-body text-center">
                    <img src="https://www.ukmriau.com/wp-content/uploads/2018/03/icon-kategori-ukm.png"
                         style="height: 80px">
                    <h5 class="card-title"></h5>
                    <a href="{{ route('ikm-ukm') }}" class="btn btn-outline-dark stretched-link mt-3 mb-3">IKM Dan
                        UKM</a>
                    <p class="card-text">Cek data IKM dan UKM terdaftar makin mudah.</p>
                </div>
            </div>
            <div class="card mb-4" style="height: 250px">
                <div class="card-body text-center">
                    <img src="https://www.freeiconspng.com/uploads/stock-exchange-icon-png-1.png" style="height: 80px">
                    <h5 class="card-title"></h5>
                    <a href="{{ route('grafik-pad') }}" class="btn btn-outline-dark stretched-link mt-3 mb-3">PAD</a>
                    <p class="card-text">Grafik Pendapatan Asli Daerah dari pasar.</p>
                </div>
            </div>
        </div>
    </div>
@endsection