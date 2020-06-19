<!DOCTYPE html>
<html>
    <head>
        <title>CRUD Data Metode Pembayaran</title>
        <link rel="stylesheet" type="text/css" href="/css/bootstrap.css">
    </head>

    <body>
        <!-- Membuat Navbar -->
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container-fluid">
                <a class="navbar-brand" href="/home-admin">
                    <font size="8"face="Beyond The Mountains">K<font face="Brush Script MT">re<font face="Beyond The Mountains">B<font face="Mistral">ag</font></font></font></font>
                </a>
                <ul class="navbar navbar-nav" style="margin-right:200px">
                    <li><a class="nav-link" href="/home-admin">HOME</a></li>
                    <li><a class="nav-link" href="/admin">ADMIN</a></li>
                    <li><a class="nav-link" href="/pelanggan">PELANGGAN</a></li>
                    <li><a class="nav-link" href="/barang">BARANG</a></li>
                    <li><a class="nav-link" href="/kategori">KATEGORI</a></li>
                    <li><a class="nav-link" href="/transaksi">TRANSAKSI</a></li>
                    <li><a class="nav-link" href="/detail-transaksi">DETAIL TRANSAKSI</a></li>
                    <li class="active"><a class="nav-link" href="/metode-bayar">METODE BAYAR</a></li>
                </ul>
            </div>
        </nav>
        <br><br>

        <div class="container">
            <a href="/home-admin"><b>HOME</b></a>
            /
            <font color="#8C8C8C"><b>METODE PEMBAYARAN</b></font>
            <br><br>

            <font face="Maiandra GD" style="text-align:center"><h1>DATA METODE PEMBAYARAN</h1></font>

            <a href="/metode-bayar/tambah" class="btn btn-black">+ ADD NEW METHOD</a>
            <p></p>

            <table class="table table-sm table-bordered">
                <thead class="thead-light">
                    <tr>
                        <th style="width:150px">Metode Bayar</th>
                        <th style="width:150px">Opsi</th>
                    </tr>
                </thead>

                @foreach($metode_pembayaran as $m)
                <tr>
                    <td>{{ $m->NAMA_METODE_BAYAR }}</td>
                    <td>
                        <a class="btn btn-primary" href="/metode-bayar/edit/{{ $m->ID_METODE_BAYAR }}">EDIT</a>
                        <a class="btn btn-danger" href="/metode-bayar/delete/{{ $m->ID_METODE_BAYAR }}">DELETE</a>
                    </td>
                </tr>
                @endforeach
            </table>
        </div>
    </body>
</html>