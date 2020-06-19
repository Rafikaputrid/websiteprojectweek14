<!DOCTYPE html>
<html>
    <head>
        <title>CRUD Data Transaksi</title>
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
                    <li class="active"><a class="nav-link" href="/transaksi">TRANSAKSI</a></li>
                    <li><a class="nav-link" href="/detail-transaksi">DETAIL TRANSAKSI</a></li>
                    <li><a class="nav-link" href="/metode-bayar">METODE BAYAR</a></li>
                </ul>
            </div>
        </nav>
        <br><br>

        <div class="container">
            <a href="/home-admin"><b>HOME</b></a>
            /
            <font color="#8C8C8C"><b>TRANSAKSI</b></font>
            <br><br>

            <font face="Maiandra GD" style="text-align:center"><h1>DATA TRANSAKSI</h1></font>

            <a href="/transaksi/tambah" class="btn btn-black">+ ADD NEW TRANSACTION</a>
            <p></p>

            <table class="table table-sm table-bordered">
                <thead class="thead-light">
                    <tr>
                        <th>ID Metode Bayar</th>
                        <th>ID Pelanggan</th>
                        <th>ID Admin</th>
                        <th>Tanggal Transaksi</th>
                        <th>Total Transaksi</th>
                        <th>Opsi</th>
                    </tr>
                </thead>

                @foreach($transaksi as $t)
                <tr>
                    <td>{{ $t->ID_METODE_BAYAR }}</td>
                    <td>{{ $t->ID_PELANGGAN }}</td>
                    <td>{{ $t->ID_ADMIN }}</td>
                    <td>{{ $t->TGL_TRANSAKSI }}</td>
                    <td>{{ $t->TOTAL_TRANSAKSI }}</td>
                    <td>
                        <a class="btn btn-primary" href="/transaksi/edit/{{ $t->ID_TRANSAKSI }}">EDIT</a>
                        <a class="btn btn-danger" href="/transaksi/delete/{{ $t->ID_TRANSAKSI }}">DELETE</a>
                    </td>
                </tr>
                @endforeach
            </table>
        </div>
    </body>
</html>