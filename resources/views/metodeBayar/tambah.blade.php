<!DOCTYPE html>
<html>
    <head>
        <title>New Method Payment</title>
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
            <a href="/metode-bayar"><b>METODE BAYAR</b></a>
            /
            <font color="#8C8C8C"><b>TAMBAH DATA</b></font>
            <br><br>

            <font face="Maiandra GD" style="text-align:center"><h1>DATA METODE PEMBAYARAN BARU</h1></font>
            <br>

            <form action="/metode-bayar/store" method="post">
                {{ csrf_field() }}
                <div class="form-group row">
                    <label for="inputNama" class="col-sm-3 col-form-label">Nama Metode Pembayaran</label>
                    <div class="col-sm-9">
                        <input type="text" name="metode" class="form-control" id="inputNama">
                    </div>
                </div>

                <div style="text-align:right">
                    <a href="/metode-bayar" class="btn btn-danger">CANCEL</a>
                    <button class="btn btn-primary">SIMPAN</button>
                </div>

            </form>
        </div>
    </body>
</html>