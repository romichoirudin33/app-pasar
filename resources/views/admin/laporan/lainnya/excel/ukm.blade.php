<?php
header('Content-type: application/ms-excel');
header('Content-Disposition: attachment; filename=ukm.xls');
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
    <b>Laporan data UKM terbaru</b>
</h5>

<table style="font-size: 11px">
    <thead>
    <tr>
        <th>Nama Pemilik</th>
        <th>Nama Perusahaan</th>
        <th>Alamat</th>
        <th>Bidang Usaha</th>
        <th>Modal Usaha</th>
        <th>Omset/hari</th>
        <th>TK</th>
        <th>Izin_Usaha</th>
        <th>keterangan</th>
    </tr>
    </thead>
    <tbody>
    @foreach($data as $i)
        <tr>
            <td>
                <div class="btn-group btn-group-sm">
                    <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                        {{ $i->nama_pemilik }}
                    </button>
                    <div class="dropdown-menu">
                        <a class="dropdown-item"
                           href="{{ route('admin.ukm.edit',['id'=>$i->id]) }}">
                            <span class="fas fa-edit"></span> Edit
                        </a>
                    </div>
                </div>
            </td>
            <td>{{ $i->nama_perusahaan }}</td>
            <td>{{ $i->alamat }}</td>
            <td>{{ $i->bidang_usaha }}</td>
            <td>{{ $i->modal_usaha }}</td>
            <td>{{ $i->omset_per_hari }}</td>
            <td>{{ $i->tk }}</td>
            <td>{{ $i->izin_usaha }}</td>
            <td>{{ $i->keterangan }}</td>
        </tr>
    @endforeach
    </tbody>
</table>
</body>
</html>
