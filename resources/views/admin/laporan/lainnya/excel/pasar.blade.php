<?php
header('Content-type: application/ms-excel');
header('Content-Disposition: attachment; filename=pasar.xls');
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
    <b>Laporan data Pasar terbaru</b>
</h5>

<table style="font-size: 11px">
    <thead>
    <tr>
        <th>No.</th>
        <th>Nama Pasar</th>
        <th>Desa</th>
        <th>Kecamatan</th>
        <th>Thn Pembangunan</th>
        <th>LS</th>
        <th>BT</th>
        <th>Kondisi</th>
        <th>Luas</th>
        <th>Lahan</th>
        <th>Unit</th>
        <th>Buka</th>
        <th>Omset</th>
        <th>UPT</th>
        <th>Pengelola</th>

        <th>Kantor Pasar</th>
        <th>Toilet</th>
        <th>Struktur Organisasi</th>
        <th>Nama Kepala Pasar</th>
        <th>No HP Kepala Pasar</th>
        <th>Jml Juru Pungut</th>
        <th>Insentif Juru Pungut</th>
        <th>Jml Kebersihan</th>
        <th>Jml Keamanan</th>
        <th>Jml Kios</th>
        <th>Jml Setoran Kios</th>
        <th>Jml Ruko</th>
        <th>Jml Setoran Ruko</th>
        <th>Jml Los Pasar</th>
        <th>Pendapatan Lain</th>
        <th>Potensi PAD</th>
        <th>Anggaran</th>
        <th>Pengelolaan</th>

    </tr>
    </thead>
    <tbody>
    @php
    $no = 1;
    @endphp
    @foreach($data as $i)
        <tr>
            <td>{{ $no++ }}</td>
            <td>{{ $i->nama }}</td>
            <td>{{ $i->desa }}</td>
            <td>{{ $i->kec }}</td>
            <td>{{ $i->pemb }}</td>
            <td>{{ $i->ls }}</td>
            <td>{{ $i->bt }}</td>
            <td>{{ $i->kondisi }}</td>
            <td>{{ $i->luas }}</td>
            <td>{{ $i->lahan }}</td>
            <td>{{ $i->unit }}</td>
            <td>{{ $i->buka }}</td>
            <td>{{ $i->omset }}</td>
            <td>{{ $i->upt }}</td>
            <td>{{ $i->pengelola }}</td>

            <td>{{ $i->survei->kantor_pasar }}</td>
            <td>{{ $i->survei->toilet }}</td>
            <td>{{ $i->survei->struktur }}</td>
            <td>{{ $i->survei->nama_kp }}</td>
            <td>{{ $i->survei->hp_kp }}</td>
            <td>{{ $i->survei->juru_pungut }}</td>
            <td>{{ $i->survei->insentif_jp }}</td>
            <td>{{ $i->survei->kebersihan }}</td>
            <td>{{ $i->survei->keamanan }}</td>
            <td>{{ $i->survei->jum_kios }}</td>
            <td>{{ $i->survei->setor_kios }}</td>
            <td>{{ $i->survei->jum_ruko }}</td>
            <td>{{ $i->survei->setor_ruko }}</td>
            <td>{{ $i->survei->los_pasar }}</td>
            <td>{{ $i->survei->pendapatan_lain }}</td>
            <td>{{ $i->survei->potensi_pad_awal + $i->survei->potensi_pad }}</td>
            <td>{{ $i->survei->anggaran }}</td>
            <td>{{ $i->survei->pengelolaan }}</td>
        </tr>
    @endforeach
    </tbody>
</table>
</body>
</html>
