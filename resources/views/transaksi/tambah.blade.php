<!DOCTYPE html>
<html>
    <head>
        <title>Data Transaksi Baru</title>
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
                    <li class="active"><a class="nav-link" href="/metode-bayar">METODE BAYAR</a></li>
                </ul>
            </div>
        </nav>
        <br><br>

        <div class="container">
            <a href="/home-admin"><b>HOME</b></a>
            /
            <a href="/transaksi"><b>TRANSAKSI</b></a>
            /
            <font color="#8C8C8C"><b>TAMBAH DATA</b></font>
            <br><br>

            <font face="Maiandra GD" style="text-align:center"><h1>DATA TRANSAKSI BARU</h1></font>
            <br>

            <form action="/transaksi/store" method="post">
                {{ csrf_field() }}
                
                <div class="form-group row">
                    <label for="inputMetode" class="col-sm-2 col-form-label">ID Metode Bayar</label>
                    <div class="col-sm-10">
                        <input type="int" name="metode" class="form-control" id="inputMetode">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="inputPelanggan" class="col-sm-2 col-form-label">ID Pelanggan</label>
                    <div class="col-sm-10">
                        <input type="int" name="pelanggan" class="form-control" id="inputPelanggan">
                    </div>
                </div>
                    
                <div class="form-group row">
                    <label for="inputAdmin" class="col-sm-2 col-form-label">ID Admin</label>
                    <div class="col-sm-10">
                        <input type="int" name="admin" class="form-control" id="inputAdmin">
                    </div>
                </div>
                    
                <div class="form-group row">
                    <label for="inputTanggal" class="col-sm-2 col-form-label">Tanggal Transaksi</label>
                    <div class="col-sm-10">
                        <input type="date" name="tgl" class="form-control" id="inputTanggal">
                    </div>
                </div>
                    
                <div class="form-group row">
                    <label for="inputBiaya" class="col-sm-2 col-form-label">Total Transaksi</label>
                    <div class="col-sm-10">
                        <input type="int" name="total" class="form-control" id="inputBiaya">
                    </div>
                </div>
                    
                <div style="text-align:right">
                    <a href="/transaksi" class="btn btn-danger">CANCEL</a>
                    <button class="btn btn-primary">SIMPAN</button>
                </div>

            </form>
        </div>
    </body>
</html>