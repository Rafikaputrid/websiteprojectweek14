<!DOCTYPE html>
<html>
    <head>
        <title>CRUD Data Kategori</title>
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
                    <li class="active"><a class="nav-link" href="/kategori">KATEGORI</a></li>
                    <li><a class="nav-link" href="/transaksi">TRANSAKSI</a></li>
                    <li><a class="nav-link" href="/detail-transaksi">DETAIL TRANSAKSI</a></li>
                    <li><a class="nav-link" href="/metode-bayar">METODE BAYAR</a></li>
                </ul>
            </div>
        </nav>
        <br><br>

        <div class="container">
            <a href="/home-admin"><b>HOME</b></a>
            /
            <font color="#8C8C8C"><b>KATEGORI</b></font>
            <br><br>

            <font face="Maiandra GD" style="text-align:center"><h1>DATA KATEGORI BARANG</h1></font>

            <a href="/kategori/tambah" class="btn btn-black">+ ADD NEW KATEGORI</a>
            <p></p>

            <table class="table table-sm table-bordered">
                <thead class="thead-light">
                <tr>
                    <th style="width:150px">Kategori</th>
                    <th style="width:150px">Opsi</th>
                </tr>
                <thead>

                @foreach($kategori as $k)
                <tr>
                    <td>{{ $k->NAMA_KATEGORI }}</td>
                    <td>
                        <a class="btn btn-primary" href="kategori/edit/{{ $k->ID_KATEGORI }}">Edit</a>
                        <a class="btn btn-danger" href="kategori/delete/{{ $k->ID_KATEGORI }}">Delete</a>
                    </td>
                </tr>
                @endforeach
            </table>
        </div>
    </body>
</html>