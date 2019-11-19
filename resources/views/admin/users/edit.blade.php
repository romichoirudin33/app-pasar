@extends('layouts.app')

@section('css')
    <link href="{{ asset('css/plugins/validetta/validetta.css') }}" rel="stylesheet" type="text/css" media="screen">
@endsection

@section('title', 'Edit Data User')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <div class="card-text">
                        <b>Harap mengisi data dengan benar !</b>
                        <div class="float-right">
                            <a href="{{ route('admin.users.index') }}" class="btn btn-outline-success btn-xs">
                                <span class="fas fa-arrow-left"></span> Kembali
                            </a>
                            @if($data->id != Auth::user()->id)
                                <button class="btn btn-outline-danger btn-xs "
                                        onclick="if (confirm('Anda yakin akan menghapus data ini ?')){
                                                event.preventDefault();
                                                document.getElementById('delete-{{ $data->id }}').submit();
                                                };">
                                    <span class="fa fa-trash"></span>
                                </button>
                                <form id="delete-{{ $data->id }}"
                                      action="{{ route('admin.users.destroy', ['id'=>$data->id]) }}"
                                      method="post">
                                    {{ method_field('DELETE') }}
                                    {{ csrf_field() }}
                                </form>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
            <div class="card">
                <form role="form" id="form" method="post"
                      action="{{ route('admin.users.update', ['id' => $data->id]) }}">
                    {{ csrf_field() }}
                    {{ method_field('PUT') }}
                    <div class="card-body">
                        <div class="form-group">
                            <label>Nama</label>
                            <input type="text" autocomplete="off" class="form-control" name="name"
                                   data-validetta="required" value="{{ $data->name }}">
                        </div>
                        <div class="form-group">
                            <label>Username</label>
                            <input type="text" autocomplete="off" class="form-control" value="{{ $data->username }}" readonly>
                        </div>
                        <div class="form-group">
                            <label>Email</label>
                            <input type="email" autocomplete="off" class="form-control" name="email"
                                   value="{{ $data->email }}">
                        </div>
                        <div class="form-group">
                            <label>Phone</label>
                            <input type="text" autocomplete="off" class="form-control" name="phone"
                                   data-validetta="numeric,minLength[11],maxLength[13]" value="{{ $data->phone }}">
                        </div>
                        <div class="form-group">
                            <label>Role</label>
                            <select name="role" class="form-control">
                                <option value="{{ $data->role }}">{{ $data->role }}</option>
                                <option value="admin">admin</option>
                                <option value="operator">operator</option>
                            </select>
                        </div>
                    </div>
                    <!-- /.card-body -->

                    <div class="card-footer">
                        <button type="submit" class="btn btn-outline-primary">
                            <span class="fas fa-save"></span> Submit
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

@section('js')
    <script type="text/javascript" src="{{ asset('css/plugins/validetta/validetta.js') }}"></script>
    <script type="text/javascript" src="{{ asset('css/plugins/validetta/lang/validettaLang-ID.js') }}"></script>
    <script>
        $(function () {
            $("#form").validetta({
                realTime: true,
                display: 'inline',
                errorTemplateClass: 'validetta-inline'
            });
        });
    </script>
@endsection