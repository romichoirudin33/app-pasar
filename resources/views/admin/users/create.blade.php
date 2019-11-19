@extends('layouts.app')

@section('css')
    <link href="{{ asset('css/plugins/validetta/validetta.css') }}" rel="stylesheet" type="text/css" media="screen">
@endsection

@section('title', 'Tambah Data User')

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
                        </div>
                    </div>
                </div>
            </div>
            <div class="card">
                <form role="form" id="form" method="post" action="{{ route('admin.users.store') }}">
                    {{ csrf_field() }}
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Nama</label>
                                    <input type="text" autocomplete="off" class="form-control" name="name" data-validetta="required">
                                </div>
                                <div class="form-group">
                                    <label>Email</label>
                                    <input type="email" autocomplete="off" class="form-control" name="email">
                                </div>
                                <div class="form-group">
                                    <label>Phone</label>
                                    <input type="text" autocomplete="off" class="form-control" name="phone" data-validetta="numeric,minLength[11],maxLength[13]">
                                </div>
                                <div class="form-group">
                                    <label>Role</label>
                                    <select name="role" class="form-control">
                                        <option value="admin">admin</option>
                                        <option value="operator">operator</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Username</label>
                                    <input type="text" autocomplete="off" class="form-control" name="username" data-validetta="required">
                                </div>
                                <div class="form-group">
                                    <label>Password</label>
                                    <input type="password" autocomplete="off" class="form-control" name="password" data-validetta="required">
                                </div>
                                <div class="form-group">
                                    <label>Ulangi Password</label>
                                    <input type="password" autocomplete="off" class="form-control" name="c_password" data-validetta="required,,equalTo[password]">
                                </div>
                            </div>
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