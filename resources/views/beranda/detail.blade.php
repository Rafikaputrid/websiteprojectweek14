<!DOCTYPE html>
<html>
    <head>
        @foreach ($barang as $b)
        <title>Detail - {{ $b->NAMA_BARANG }}</title>
        @endforeach
        <link rel="stylesheet" type="text/css" href="/css/bootstrap.css">	
        <script type="text/javascript" src="/js/jquery.js"></script>
        <script type="text/javascript" src="/js/bootstrap.js"></script>
    </head>

    <body>
        <!-- Membuat Navbar -->
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container-fluid">
                <a class="navbar-brand" href="/home">
                    <font size="8"face="Beyond The Mountains">K<font face="Brush Script MT">re<font face="Beyond The Mountains">B<font face="Mistral">ag</font></font></font></font>
                </a>
                <ul class="navbar navbar-nav">
                    <li class="active"><a class="nav-link" href="/home">HOME</a></li>
                    <li><a class="nav-link" href="/home-cust/handbag">HANDBAG</a></li>
                    <li><a class="nav-link" href="/slingbag">SLINGBAG</a></li>
                    <li><a class="nav-link" href="/waistbag">WAISTBAG</a></li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="menuDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            TOTEBAG
                        </a>
                        <div class="dropdown-menu" aria-labelledby="menuDropdown">
                            <a class="dropdown-item" href="/laki">Laki-Laki</a>
                            <a class="dropdown-item" href="/wanita">Wanita</a>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="menuDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            KOPER
                        </a>
                        <div class="dropdown-menu" aria-labelledby="menuDropdown">
                            <a class="dropdown-item" href="/laki">Laki-Laki</a>
                            <a class="dropdown-item" href="/wanita">Wanita</a>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="menuDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            BACKPACK
                        </a>
                        <div class="dropdown-menu" aria-labelledby="menuDropdown">
                            <a class="dropdown-item" href="/laki">Laki-Laki</a>
                            <a class="dropdown-item" href="/wanita">Wanita</a>
                        </div>
                    </li>
                </ul>
                <ul class="row navbar navbar-nav navbar-right">
                    <li><form class="form-inline">
                        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-secondary my-2 my-sm-0" type="submit">Search</button>
                    </form></li>
                    <li class="col-sm-1"><a href="/login"><img src="image/icon/user.svg" alt="" width="16" height="16" title="Login/SignUp"></a></li>
                    <li class="col-sm-1"><a href="/cart"><img src="image/icon/shopping-bag.svg" alt="" width="16" height="16" title="Cart"></a></li>
                </ul>
            </div>
        </nav>
        <br><br>

        @foreach ($barang as $b)
        <div class="container">
            <a href="/home-cust"><b>HOME</b></a> 
            /
            <a href="/home-cust"><b>HANDBAG</b></a>
            /
            <font style="text-transform:uppercase ; color:#909090"><b>{{ $b->NAMA_BARANG }}</b></font>
            <br><br><br>
        </div>
        @endforeach

        @foreach ($barang as $b)
            <center>
            <div class="col-md-12">
                <img src="data:image/jpg;base64,<?php echo base64_encode($gambar);?>"> 
            </div>
            </center>

            <div class="container">
                <div class="row">
                    <div class="col-md-5">
                        <font style="text-transform:uppercase ; face:'Maiandra GD'"><h1>{{ $b->NAMA_BARANG}}</h1></font>
                        <font face='Maiandra GD'><h3>Rp. {{ $b->HARGA_BARANG }}</h3></font>

                        <b>{{ $b->KETERANGAN_BARANG }}</b>
                        <br><br><br>

                        <div class="number">
                            <span class="minus" style="cursor:pointer"><font color="white"><b>-</b></font></span>
                            <input style="height:40px ; width:150px ; text-align:center ; font-size:20px ; border:2px solid black ; border-radius:4px ; display:inline-block ; vertical-align:middle" type="text" value="1">
                            <span class="plus" style="cursor:pointer"><font color="white"><b>+</b></font></span>
                            <font color="white">p</font>
                            <span><a href="/cart" class="btn btn-black" style="padding:6px 45px 6px 45px"><b>ADD TO CART</b></a></span><br><br>
                            <a href="/buy" class="btn btn-red" style="padding:6px 170px 6px 170px"><b>BUY IT NOW</b></a>
                        </div>
                    </div>
                    
                    <div class="col-md-2"></div>

                    <div class="col-md-5">
                        <br><br><br><br>
                        <h3>PRODUCT SPESIFICATION</h3>
                        <div class="row">
                            <div class="col-md-3">
                                <b>
                                Color<br>
                                Weight<br>
                                Dimension
                                </b>
                            </div>

                            <div class="col-md-5">
                                <b>
                                : {{ $b->WARNA }}<br>
                                : {{ $b->BERAT }}<br>
                                : {{ $b->PANJANG }} x {{ $b->LEBAR }} x {{ $b->TINGGI }} cm
                                </b>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
        <br><br><br><br>



        <!-- Navbar Bawah -->
        <nav class="navbar-dark bg-dark">
            <div style="margin-left:100px ; font-size:13px ; font-family:Arial" class="container row">
                <div style="margin-top:130px" class="col-md-3">
                    <a href="/home" style="color:white ; text-decoration:none">
                        <font size="20"face="Beyond The Mountains">K<font face="Brush Script MT">re<font face="Beyond The Mountains">B<font face="Mistral">ag</font></font></font></font>
                    </a>
                </div>

                <div style="margin-top:40px ; margin-bottom:50px ; color:#C1C7CF" class="col-md-3">
                    <h6>May We Help You?</h6><br/>
                    <a href="/home" style="color:white ; text-decoration:none">FAQs</a><br><br>
                    <a href="/handbag" style="color:white ; text-decoration:none">Transaction</a><br><br>
                    <a href="/handbag" style="color:white ; text-decoration:none">Product Care</a><br><br>
                </div>

                <div style="margin-top:40px ; margin-bottom:50px ; color:#C1C7CF" class="col-md-3">
                    <h6>Payment Method</h6><br/>
                    <img src="/image/Metode Pembayaran/logpay1.png" width="50%" alt="..."><br><br>
                    <img src="/image/Metode Pembayaran/logpay2.png" width="50%" alt="..."><br><br>
                    <img src="/image/Metode Pembayaran/logpay3.png" width="50%" alt="...">
                </div>

                <div style="margin-top:40px ; margin-bottom:50px ; color:#C1C7CF" class="col-md-3">
                    <h6>Find Us On</h6><br/>
                    <a href="facebook.com" style="color:white ; text-decoration:none"><img src="/image/icon/facebook.png" width="16" height="16" alt=""> facebook </a><br><br>
                    <a href="instagram.com" style="color:white ; text-decoration:none"><img src="/image/icon/instagram.png" width="16" height="16" alt=""> instagram </a><br><br>
                    <a href="twitter.com" style="color:white ; text-decoration:none"><img src="/image/icon/twitter.png" width="16" height="16" alt=""> twitter </a><br><br>
                    <a href="youtube.com" style="color:white ; text-decoration:none"><img src="/image/icon/youtube.png" width="16" height="16" alt=""> youtube </a><br><br>
                    <a href="pinterest.com" style="color:white ; text-decoration:none"><img src="/image/icon/pinterest.png" width="16" height="16" alt=""> pinterest</a><br><br>
                </div>
            </div>

            <div style="color:#C1C7CF ; text-align:center ; font-size:12">
                © 2020 - 2024 Krebag sekre S.p.A. - All rights reserved. SIAE LICENCE # 2294/I/1936 and 5647/I/1936
            </div>
        </nav>
    </body>
</html>