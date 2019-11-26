<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sigesit Bima</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="{{ asset('css/plugins/fontawesome-free/css/all.min.css') }}">
    <style>
        .jumbotron {
            border-radius: 0;
            height: 400px;
            background-size: cover;
            background-image: url('https://scontent-frx5-1.cdninstagram.com/vp/916a23df54eb551521a72a30f7711842/5E4CD5FA/t51.2885-15/e35/69081181_750246332073108_960838464931487512_n.jpg?_nc_ht=scontent-frx5-1.cdninstagram.com&_nc_cat=100&se=7&ig_cache_key=MjEyMDkxMDMxMDQzNzAwMTgyNQ%3D%3D.2');
        }

        .link-app:hover{
            text-decoration: underline;
            color: #7abaff;
        }

        .table-sm{
            font-size: 14px;
        }

    </style>
    @yield('css')
</head>

<body style="background: #ececec">

<div class="jumbotron">
    <div class="float-right mr-5">
        <a href="{{ url('admin') }}" class="btn btn-outline-dark">
            Admin Page
        </a>
    </div>

    <a href="{{ url('/') }}" style="" class="link-app text-bold text-white">
        <h1 class="ml-5 mb-3" style="font-family: 'Montserrat', sans-serif;">
            Sigesit Bima
        </h1>
    </a>

    <p class="ml-5 text-white text-light h6">
        Website Resmi Pemerintah Kabupaten Bima
        <br>
        Transparansi, Akuntable dan Partisipatif
    </p>
</div>

<div class="container">
    <div class="row bg-white shadow p-5" style="margin-top: -100px; margin-bottom: 100px">
        <div class="col md-12">
            @yield('content')
        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>

@yield('js')

</body>

</html>