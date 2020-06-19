<!DOCTYPE html>
<html>
    <head>
        <title>Krebag</title>
        <link rel="stylesheet" type="text/css" href="css/bootstrap.css">	
        <script type="text/javascript" src="js/jquery.js"></script>
        <script type="text/javascript" src="js/bootstrap.js"></script>
    </head>

    <body>
        <!-- Membuat Navbar -->
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container-fluid">
                <a class="navbar-brand" href="/home-cust">
                    <font size="8"face="Beyond The Mountains">K<font face="Brush Script MT">re<font face="Beyond The Mountains">B<font face="Mistral">ag</font></font></font></font>
                </a>
                <ul class="navbar navbar-nav">
                    <li class="active"><a class="nav-link" href="/home-cust">HOME</a></li>
                    <li><a class="nav-link" href="/home-cust/handbag">HANDBAG</a></li>
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
                    <li><a href="/login-cust"><img src="image/icon/userr.ico" alt="" width="16" height="16" title="Login/SignUp"></a></li>
                    </div>
                    <li><a href="#"><img src="image/icon/cart.ico" alt="" width="16" height="16" title="Cart"></a></li>
                </ul>
            </div>
        </nav>

        <!-- Membuat Carousel -->
        <div id="MyCarouselFade" class="carousel slide carousel-fade" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="image/Carousel/Tas11-Carousel.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="image/Carousel/car9.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="image/Carousel/car10.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="image/Carousel/car13.jpg" class="d-block w-100" alt="...">
                </div>
            </div>
            <a class="carousel-control-prev" href="#MyCarouselFade" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#MyCarouselFade" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>

        <br></br>

        <!-- Menampilkan Hot Items -->
        <div class="pembungkus">
            <font face="Hey August"><h1>H O T - I T E M S</h1></font>
        </div>
        <!-- car1 -->
        <div id="CarouselFade" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <center>
                    <div class="container-fluid row">
                        <div class="col-md-4">
                            <div class="col-md-12">
                                <a href="#"><img src="image/tas/ranselpria.jpg" width="100%" alt="..."></a>
                                <div class="caption">
                                    <h4>Backpack No.120</h4>
                                    <font size="4" color="red">
                                        <b>Rp 225.000</b>
                                    </font>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="col-md-12">
                                <a href="#"><img src="image/tas/ranselpria-13.jpg" width="100%" alt="..."></a>
                                <div class="caption">
                                    <h4>Backpack No.103</h4>
                                    <font size="4" color="red">
                                        <b>Rp 375.000</b>
                                    </font>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="col-md-12">
                                <a href="#"><img src="image/tas/ranselpria-3.jpg" width="100%" alt="..."></a>
                                <div class="caption">
                                    <h4>Backpack No.132</h4>
                                    <font size="4" color="red">
                                        <b>Rp 315.000</b>
                                    </font>
                                </div>
                            </div>
                        </div>
                    </div>
                    </center>
                </div>

                <!--car2-->

                <div class="carousel-item">
                    <center>
                    <div class="container-fluid row">
                        <div class="col-md-4">
                            <div class="col-md-12">
                                <a href="#"><img src="image/tas/kondangan-16.jpg" width="100%" alt="..."></a>
                                <div class="caption">
                                    <h4>Sling Bag No.60</h4>
                                    <font size="4" color="red">
                                        <b>Rp 225.000</b>
                                    </font>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="col-md-12">
                                <a href="#"><img src="image/tas/kondangan-31.jpg" width="100%" alt="..."></a>
                                <div class="caption">
                                    <h4>Sling Bag No.45</h4>
                                    <font size="4" color="red">
                                        <b>Rp 375.000</b>
                                    </font>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="col-md-12">
                                <a href="#"><img src="image/tas/kondangan-43.jpg" width="100%" alt="..."></a>
                                <div class="caption">
                                    <h4>Sling Bag No.23</h4>
                                    <font size="4" color="red">
                                        <b>Rp 315.000</b>
                                    </font>
                                </div>
                            </div>
                        </div>
                    </div>
                    </center>
                </div>
            </div>

            <!-- icon next prev -->
            <a class="carousel-control-prev" href="#CarouselFade" role="button" data-slide="prev" style="margin-left:50px">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#CarouselFade" role="button" data-slide="next" style="margin-right:50px">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>



<!--
        <div class="pembungkus" style="margin-left:70px ; text-align:left ; color:#662828">
            <font face="Hey August"><h1>H A N D B A G</font>
        </div>
        <center>
        <div style="font-family:Segoe UI" class="container-fluid row">
            <div class="col-md-4">
                <div class="col-sm-12">
                    <a href="/barang"><img width=100% src="image/tas/kondangan-50.webp"></a>
                    <div class="caption">
                        <h4>Red Bag No.231</h4>
                        <font size="4" color="red">
                            <b>Rp 245.000</b>
                        </font>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="col-md-12">
                    <a href="/barang"><img width=100% src="image/tas/handbag-7.jpg"></a>
                    <div class="caption">
                        <h4>Sling Bag No.122</h4>
                        <font size="4" color="red">
                            <b>Rp 305.000</b>
                        </font>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="col-md-12">
                    <a href="/barang"><img width=100% src="image/icon/next.png"></a>
                    <div class="caption">
                        <h4>NEXT</h4>
                    </div>
                </div>
            </div>
        </div>
        </center>
-->
        <br/>
        <hr size="5px" width="50%" color="black">
        <br/>

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
                    <img src="image/Metode Pembayaran/logpay1.png" width="50%" alt="..."><br><br>
                    <img src="image/Metode Pembayaran/logpay2.png" width="50%" alt="..."><br><br>
                    <img src="image/Metode Pembayaran/logpay3.png" width="50%" alt="...">
                </div>

                <div style="margin-top:40px ; margin-bottom:50px ; color:#C1C7CF" class="col-md-3">
                    <h6>Find Us On</h6><br/>
                    <a href="facebook.com" style="color:white ; text-decoration:none"><img src="image/icon/facebook.png" width="16" height="16" alt=""> facebook </a><br><br>
                    <a href="instagram.com" style="color:white ; text-decoration:none"><img src="image/icon/instagram.png" width="16" height="16" alt=""> instagram </a><br><br>
                    <a href="twitter.com" style="color:white ; text-decoration:none"><img src="image/icon/twitter.png" width="16" height="16" alt=""> twitter </a><br><br>
                    <a href="youtube.com" style="color:white ; text-decoration:none"><img src="image/icon/youtube.png" width="16" height="16" alt=""> youtube </a><br><br>
                    <a href="pinterest.com" style="color:white ; text-decoration:none"><img src="image/icon/pinterest.png" width="16" height="16" alt=""> pinterest</a><br><br>
                </div>
            </div>

            <div style="color:#C1C7CF ; text-align:center ; font-size:12">
                © 2020 - 2024 Krebag sekre S.p.A. - All rights reserved. SIAE LICENCE # 2294/I/1936 and 5647/I/1936
            </div>
        </nav>
    </body>
</html>