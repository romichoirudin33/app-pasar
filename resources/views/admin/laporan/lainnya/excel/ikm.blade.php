<?php
header('Content-type: application/ms-excel');
header('Content-Disposition: attachment; filename=ikm.xls');
?>

<html>
<head>
    <style>
        td {
            border-top: solid 1px black;
            border-bottom: solid 1px black;
        }
        td {
            border-top: solid 1px black;
        }
    </style>
</head>
<body>

<h5>
    <b>Laporan data IKM terbaru</b>
</h5>

<table style="font-size: 11px">
    <thead>
    <tr>
        <th rowspan="2">Nama Perusahaan</th>
        <th rowspan="2">Nama Pemilik</th>
        <th rowspan="2">HP Pemilik</th>
        <th rowspan="2">Jalan</th>
        <th rowspan="2">Desa</th>
        <th rowspan="2">Kec</th>
        <th rowspan="2">Jenis Industri</th>
        <th rowspan="2">Nama Produk</th>
        <th colspan="2">Jumlah Pekerja</th>
        <th rowspan="2">Nilai Investasi</th>
        <th rowspan="2">Kapasitas Jumlah Produk</th>
        <th rowspan="2">Satuan Produk</th>
        <th rowspan="2">Nilai Produksi</th>
        <th rowspan="2">Nilai BPP BP</th>
        <th rowspan="2">Status</th>
        <th rowspan="2">Ket. Bantuan</th>
    </tr>
    <tr>
        <th>Laki - Laki</th>
        <th>Perempuan</th>
    </tr>
    </thead>
    <tbody>
    @foreach($data as $i)
        <tr>
            <td>
                {{ $i->nama_perusahaan }}
            </td>
            <td>{{ $i->nama_pemilik }}</td>
            <td>{{ $i->hp_pemilik }}</td>
            <td>{{ $i->jln }}</td>
            <td>{{ $i->desa }}</td>
            <td>{{ $i->kec }}</td>
            <td>{{ $i->jenis_industri }}</td>
            <td>{{ $i->nama_produk }}</td>
            <td>{{ $i->tenaga_kerja_l }}</td>
            <td>{{ $i->tenaga_kerja_p }}</td>
            <td>{{ $i->nilai_investasi }}</td>
            <td>{{ $i->kapasitas_produk_jum }}</td>
            <td>{{ $i->kapasitas_produk_sat }}</td>
            <td>{{ $i->nilai_produksi }}</td>
            <td>{{ $i->nilai_bbp_bp }}</td>
            <td>{{ $i->status }}</td>
            <td>{{ $i->bantuan }}</td>
        </tr>
    @endforeach
    </tbody>
</table>
</body>
</html>
