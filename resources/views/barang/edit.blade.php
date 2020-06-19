<!DOCTYPE html>
<html>
    <head>
        <title>Edit Data Barang</title>
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
            <a href="/barang"><b>BARANG</b></a>
            /
            <font color="#8C8C8C"><b>EDIT DATA</b></font>
            <br><br>

            <font face="Maiandra GD" style="text-align:center"><h1>EDIT DATA BARANG</h1></font>
            <br>

            @foreach($barang as $b)
            <form action="/barang/update" method="post" enctype="multipart/form-data">
                {{ csrf_field() }}
                <input type="hidden" name="id_barang" value="{{ $b->ID_BARANG}}">

                <div class="form-group row">
                    <label for="inputKategori" class="col-sm-2 col-form-label">ID Kategori</label>
                    <div class="col-sm-10">
                        <select type="int" id="InputKategori" name="kategori" class="form-control">
                            <option>{{ $b->ID_KATEGORI }}</option>
                            <option></option>
                            @foreach ($kategori as $k)
                            <option>{{ $k->ID_KATEGORI }} - {{ $k->NAMA_KATEGORI }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="inputNama" class="col-sm-2 col-form-label">Nama Barang</label>
                    <div class="col-sm-10">
                        <input type="text" name="barang" class="form-control" id="inputNama" value="{{ $b->NAMA_BARANG }}">
                    </div>
                </div>
                
                <div class="form-group row">
                    <label for="inputHarga" class="col-sm-2 col-form-label">Harga Barang</label>
                    <div class="col-sm-10">
                        <input type=int name="harga" class="form-control" id="inputHarga" value="{{ $b->HARGA_BARANG }}">
                    </div>
                </div>
                
                <div class="form-group row">
                    <label for="inputStok" class="col-sm-2 col-form-label">Jumlah Stok</label>
                    <div class="col-sm-10">
                        <input type=int name="stok" class="form-control" id="inputStok" value="{{ $b->STOK_BARANG }}">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="inputWarna" class="col-sm-2 col-form-label">Warna</label>
                    <div class="col-sm-10">
                        <input type=text name="warna" class="form-control" id="inputWarna" value="{{ $b->WARNA }}">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="inputBahan" class="col-sm-2 col-form-label">Bahan</label>
                    <div class="col-sm-10">
                        <input type=text name="bahan" class="form-control" id="inputBahan" value="{{ $b->BAHAN }}">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="inputBerat" class="col-sm-2 col-form-label">Berat</label>
                    <div class="col-sm-10">
                        <input type=text name="berat" class="form-control" id="inputBerat" value="{{ $b->BERAT }}">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="inputPanjang" class="col-sm-2 col-form-label">Panjang</label>
                    <div class="col-sm-10">
                        <input type=int name="panjang" class="form-control" id="inputPanjang" value="{{ $b->PANJANG }}">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="inputLebar" class="col-sm-2 col-form-label">Lebar</label>
                    <div class="col-sm-10">
                        <input type=int name="lebar" class="form-control" id="inputLebar" value="{{ $b->LEBAR }}">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="inputTinggi" class="col-sm-2 col-form-label">Tinggi</label>
                    <div class="col-sm-10">
                        <input type=int name="tinggi" class="form-control" id="inputTinggi" value="{{ $b->TINGGI }}">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="inputKeterangan" class="col-sm-2 col-form-label">Keterangan</label>
                    <div class="col-sm-10">
                        <input type="text" name="keterangan" class="form-control" id="inputKeterangan" value="{{ $b->KETERANGAN_BARANG }}">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="inputGambar" class="col-sm-2 col-form-label">Gambar</label>
                    <div class="col-sm-10">
                        <input type="file" name="gambar" class="form-control" id="inputGambar">
                    </div>
                </div>

                <div style="text-align:right">
                    <a href="/barang" class="btn btn-danger">CANCEL</a>
                    <button class="btn btn-primary">SIMPAN</button>
                </div>

            </form>
            @endforeach
        </div>
    </body>
</html>