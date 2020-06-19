<!DOCTYPE html>
<html>

    <head>
        <title>Edit Data Pelanggan</title>
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
                    <li class="active"><a class="nav-link" href="/pelanggan">PELANGGAN</a></li>
                    <li><a class="nav-link" href="/barang">BARANG</a></li>
                    <li><a class="nav-link" href="/kategori">KATEGORI</a></li>
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
            <a href="/pelanggan"><b>PELANGGAN</b></a>
            /
            <font color="#8C8C8C"><b>EDIT DATA</b></font>
            <br><br>

            <font face="Maiandra GD" style="text-align:center"><h1>EDIT DATA PELANGGAN</h1></font>
            <br>

            @foreach($pelanggan as $p)
            <form action="/pelanggan/upgrade" method="post">
                {{ csrf_field() }}
                <input type="hidden" name="id" value="{{ $p->ID_PELANGGAN }}">

                <div class="form-group row">
                    <label for="inputNama" class="col-sm-2 col-form-label">Nama</label>
                    <div class="col-sm-10">
                        <input type="text" name="Nama" class="form-control" id="inputNama" value="{{ $p->NAMA_PELANGGAN }}">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="inputEmail" class="col-sm-2 col-form-label">Email</label>
                    <div class="col-sm-10">
                        <input type="text" name="Email" class="form-control" id="inputEmail" value="{{ $p->EMAIL_PELANGGAN }}">
                    </div>
                </div>
                    
                <div class="form-group row">
                    <label for="inputPassword" class="col-sm-2 col-form-label">Password</label>
                    <div class="col-sm-10">
                        <input type="text" name="Password" class="form-control" id="inputPassword" value="{{ $p->PASSWORD }}">
                    </div>
                </div>
                    
                <div class="form-group row">
                    <label for="inputHP" class="col-sm-2 col-form-label">No. HP</label>
                    <div class="col-sm-10">
                        <input type="text" name="hp" class="form-control" id="inputHP" value="{{ $p->NO_HP_PELANGGAN }}">
                    </div>
                </div>
                    
                <div class="form-group row">
                    <label for="inputAlamat" class="col-sm-2 col-form-label">Alamat</label>
                    <div class="col-sm-10">
                        <input type="text" name="Alamat" class="form-control" id="inputAlamat" value="{{ $p->ALAMAT_PELANGGAN }}">
                    </div>
                </div>
                    
                <div style="text-align:right">
                    <a href="/pelanggan" class="btn btn-danger">CANCEL</a>
                    <button class="btn btn-primary">SIMPAN</button>
                </div>

            </form>
            @endforeach
        </div>
    </body>
</html>