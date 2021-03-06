<!DOCTYPE html>
<html>
    <head>
        <title>EDIT DATA ADMIN</title>
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
                    <li class="active"><a class="nav-link" href="/admin">ADMIN</a></li>
                    <li><a class="nav-link" href="/pelanggan">PELANGGAN</a></li>
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
            <a href="/admin"><b>ADMIN</b></a>
            /
            <font color="#8C8C8C"><b>EDIT DATA</b></font>
            <br><br>

            <font face="Maiandra GD" style="text-align:center"><h1>EDIT DATA ADMIN</h1></font>
            <br>

            @foreach($admin as $a)
            <form action="/admin/update" method="post">
                {{ csrf_field() }}
                
                <input type="hidden" name="id" value="{{ $a->ID_ADMIN }}">
                <div class="form-group row">
                    <label for="inputNama" class="col-sm-2 col-form-label">Nama</label>
                    <div class="col-sm-10">
                        <input type="text" name="nama" class="form-control" id="inputNama" value="{{ $a->NAMA_ADMIN }}">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="inputEmail" class="col-sm-2 col-form-label">Email</label>
                    <div class="col-sm-10">
                        <input type="text" name="email" class="form-control" id="inputEmail" value="{{ $a->EMAIL_ADMIN }}">
                    </div>
                </div>
                    
                <div class="form-group row">
                    <label for="inputPassword" class="col-sm-2 col-form-label">Password</label>
                    <div class="col-sm-10">
                        <input type="text" name="password" class="form-control" id="inputPassword" value="{{ $a->PASSWORD_ADMIN }}">
                    </div>
                </div>
                    
                <div class="form-group row">
                    <label for="inputHP" class="col-sm-2 col-form-label">No. HP</label>
                    <div class="col-sm-10">
                        <input type="text" name="hp" class="form-control" id="inputHP" value="{{ $a->NO_HP_ADMIN }}">
                    </div>
                </div>
                    
                <div class="form-group row">
                    <label for="inputAlamat" class="col-sm-2 col-form-label">Alamat</label>
                    <div class="col-sm-10">
                        <input type="text" name="alamat" class="form-control" id="inputAlamat" value="{{ $a->ALAMAT_ADMIN }}">
                    </div>
                </div>
                    
                <div style="text-align:right">
                    <a href="/admin" class="btn btn-danger">CANCEL</a>
                    <button class="btn btn-primary">SIMPAN</button>
                </div>
                
            </form>
            @endforeach
        </div>
    </body>
</html>