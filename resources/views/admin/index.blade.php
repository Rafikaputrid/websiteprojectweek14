<!DOCTYPE html>
<html>

    <head>
        <title>CRUD Data Pegawai</title>
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
            <font color="#8C8C8C"><b>ADMIN</b></font>
            <br><br>

            <font face="Maiandra GD" style="text-align:center"><h1>DATA ADMIN</h1></font>

            <a href="/admin/tambah" class="btn btn-black">+ ADD NEW ADMIN</a>
            <br><br>
            <a href="/admin/cetak_pdf" target="_blank" class="btn btn-primary">CETAK PDF</a>
            <p></p>

            

            <table class="table table-sm table-bordered">
                <thead class="thead-light">
                <tr>
                    <th>Nama</th>
                    <th>Email</th>
                    <th>Password</th>
                    <th>No.HP</th>
                    <th>Alamat</th>
                    <th>Opsi</th>
                </tr>
                </thead>

                @foreach($admin as $a)
                <tr>
                    <td>{{ $a->NAMA_ADMIN }}</td>
                    <td>{{ $a->EMAIL_ADMIN }}</td>
                    <td>{{ $a->PASSWORD_ADMIN }}</td>
                    <td>{{ $a->NO_HP_ADMIN }}</td>
                    <td>{{ $a->ALAMAT_ADMIN }}</td>
                    <td>
                        <a class="btn btn-primary" href = "/admin/edit/{{ $a->ID_ADMIN }}">EDIT</a>
                        <a class="btn btn-danger" href ="/admin/delete/{{ $a->ID_ADMIN }}">HAPUS</a>
                    </td>
                </tr>
                @endforeach
            </table>
        </div>
    <body>
</html>