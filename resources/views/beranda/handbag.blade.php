<!DOCTYPE html>
<html>
    <head>
        <title>Handbag - Krebag</title>
        <link rel="stylesheet" type="text/css" href="/css/bootstrap.css">	
        <script type="text/javascript" src="/js/jquery.js"></script>
        <script type="text/javascript" src="/js/bootstrap.js"></script>
    </head>

    <body>
        <!-- Membuat Navbar -->
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container-fluid">
                <a class="navbar-brand" href="/home-cust">
                    <font size="8"face="Beyond The Mountains">K<font face="Brush Script MT">re<font face="Beyond The Mountains">B<font face="Mistral">ag</font></font></font></font>
                </a>
                <ul class="navbar navbar-nav">
                    <li><a class="nav-link" href="/home-cust">HOME</a></li>
                    <li class="active"><a class="nav-link" href="/home-cust/handbag">HANDBAG</a></li>
                    <li><a class="nav-link" href="/home-cust/slingbag">SLINGBAG</a></li>
                    <li><a class="nav-link" href="/home-cust/waistbag">WAISTBAG</a></li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="menuDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            TOTEBAG
                        </a>
                        <div class="dropdown-menu" aria-labelledby="menuDropdown">
                            <a class="dropdown-item" href="#">Laki-Laki</a>
                            <a class="dropdown-item" href="#">Wanita</a>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="menuDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            KOPER
                        </a>
                        <div class="dropdown-menu" aria-labelledby="menuDropdown">
                            <a class="dropdown-item" href="#">Laki-Laki</a>
                            <a class="dropdown-item" href="#">Wanita</a>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="menuDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            BACKPACK
                        </a>
                        <div class="dropdown-menu" aria-labelledby="menuDropdown">
                            <a class="dropdown-item" href="#">Laki-Laki</a>
                            <a class="dropdown-item" href="#">Wanita</a>
                        </div>
                    </li>
                </ul>
                <ul class="row navbar navbar-nav" style="margin-right:3px">
                    <li>
                        <form class="form-inline">
                        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-secondary my-2 my-sm-0" type="submit">Search</button>
                        </form>
                    </li>

                    <div class="col">
                    <li><a href="/login-cust"><img src="/image/icon/userr.ico" alt="" width="16" height="16" title="Login/SignUp"></a></li>
                    </div>
                    <li><a href="#"><img src="/image/icon/cart.ico" alt="" width="16" height="16" title="Cart"></a></li>
                </ul>
            </div>
        </nav>

        <br><br>
        
        <div class="container">
            <a href="/home-cust" style="text-decoration:none ; color:#0E1349"><b>HOME</b></a> 
            / 
            <font color="#909090"><b>HANDBAG</b></font>
            <br><br><br>
        <font face="Hey August"><h1>H A N D B A G S</h1></font>
        <hr width="23%" color="#D4D4D4" align="left">
        <br>

        <!--Menampilkan item dalam bentuk table -->
        <table class="table table-sm table-bordered">
                <thead class="thead-light">
                    <tr>
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
                    </tr>
                </thead>

                @foreach($barang as $b)
                <tr>
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
                </tr>
                @endforeach
            </table>
    </body>
</html>