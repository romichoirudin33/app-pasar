@extends('layouts.public')

@section('content')
    <div class="">
        <h3 class="text-bold mb-5">
            <form>
                <label for="pasar_id">Filter Berdasarkan Pasar</label>
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

    <h6 class="mb-4">
        <strong>Data saran dan Permasalahan</strong>
    </h6>
    @if(count($data) > 0)
        <div class="row">
            <div class="col-md-12">
                @foreach($data as $i)
                    <div class="card">
                        <div class="card-header">
                            <h5 class="card-title">
                                <img class="rounded-circle" style="width: 50px" src="{{ asset('css/dist/img/user1-128x128.jpg') }}"
                                     alt="user image">
                                <a href="#">{{ $i->nama }}</a>
                                <label class="label label-primary">
                                    Di Pasar {{ $i->pasar->nama }}
                                </label>
                                <div class="float-right" style="font-size: small">
                                    <span class="description">Dibuat - {{ $i->created_at->diffForHumans() }}</span>
                                </div>
                            </h5>

                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <?= $i->saran; ?>
                            <?= $i->ket; ?>
                        </div>
                        <!-- /.card-body -->
                    </div>
                @endforeach

                {{ $data->links() }}
            </div>
        </div>
    @endif
@endsection
