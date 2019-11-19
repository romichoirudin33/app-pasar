@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title mb-2">Dashboard</h5>
                    <div class="card-text">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                    Selamat datang di aplikasi komoditi pasar
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
