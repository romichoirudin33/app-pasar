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
        <strong>Data kaboro weki</strong>
    </h6>
    @if(count($data) > 0)
        <div class="row">
            <div class="col-md-12">
                @foreach($data as $i)
                    <div class="card shadow mb-2">
                        <div class="card-header">
                            <h5 class="card-title">
                                Kegiatan <a href="#">{{ $i->kegiatan }}</a> di pasar {{ $i->pasar->nama }}
                                <div class="float-right" style="font-size: small">
                                    <i class="far fa-clock"></i> {{ date('d-m-Y', strtotime($i->tanggal_kegiatan)) }}
                                </div>
                            </h5>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <?= $i->hasil_rapat  ?>
                        </div>
                        <!-- /.card-body -->
                    </div>
                @endforeach

                {{ $data->links() }}
            </div>
        </div>
    @endif
@endsection
