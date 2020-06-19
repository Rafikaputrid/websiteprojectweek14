<!DOCTYPE html>
<html>
    <head>
        <title>CRUD Data Barang</title>
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
                    <li class="active"><a class="nav-link" href="/barang">BARANG</a></li>
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
            <font color="#8C8C8C"><b>BARANG</b></font>
            <br><br>

            <font face="Maiandra GD" style="text-align:center"><h1>DATA BARANG</h1></font>

            <a href="/barang/tambah" class="btn btn-black">+ ADD NEW PRODUCT</a>
            <p></p>
            <table class="table table-sm table-bordered">
                <thead class="thead-light">
                    <tr>
                        <th>Gambar</th>
                        <th width="80px">ID Kategori</th>
                        <th width="200px">Nama</th>
                        <th>Harga</th>
                        <th width="80px">Jumlah Stok</th>
                        <th>Warna</th>
                        <th>Bahan</th>
                        <th>Berat</th>
                        <th>Panjang</th>
                        <th>Lebar</th>
                        <th>Tinggi</th>
                        <th width="300px">Keterangan</th>
                        <th>Opsi</th>
                    </tr>
                </thead>

                @foreach($barang as $b)
                <tr>
                    <td><img width="150px" src="{{ url('/data_file/'.$b->GAMBAR) }}"></td>
                    <td>{{ $b->ID_KATEGORI }}</td>
                    <td>{{ $b->NAMA_BARANG }}</td>
                    <td>{{ $b->HARGA_BARANG }}</td>
                    <td>{{ $b->STOK_BARANG }}</td>
                    <td>{{ $b->WARNA }}</td>
                    <td>{{ $b->BAHAN }}</td>
                    <td>{{ $b->BERAT }}</td>
                    <td>{{ $b->PANJANG }}</td>
                    <td>{{ $b->LEBAR }}</td>
                    <td>{{ $b->TINGGI }}</td>
                    <td>{{ $b->KETERANGAN_BARANG }}</td>
                    <td>
                        <a class="btn btn-primary" href="/barang/edit/{{ $b->ID_BARANG }}">EDIT</a>
                        <p></p>
                        <a class="btn btn-danger" href="/barang/delete/{{ $b->ID_BARANG }}">DELETE</a>
                    </td>
                </tr>
                @endforeach
            </table>
        </div>
    </body>
</html>