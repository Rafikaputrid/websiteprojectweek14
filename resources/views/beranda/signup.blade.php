<!DOCTYPE html>
<html>
    <head>
        <title>Sign Up Customer @Krebag</title>
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
                    <li class="active"><a class="nav-link" href="/home">HOME</a></li>
                    <li><a class="nav-link" href="/home-cust/handbag">HANDBAG</a></li>
                    <li><a class="nav-link" href="/home-cust/slingbag">SLINGBAG</a></li>
                    <li><a class="nav-link" href="/home-cust/waistbag">WAISTBAG</a></li>
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
                <ul class="row navbar navbar-nav" style="margin-right:3px">
                    <li>
                        <form class="form-inline">
                        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-secondary my-2 my-sm-0" type="submit">Search</button>
                        </form>
                    </li>

                    <div class="col">
                    <li><a href="/login"><img src="image/icon/userr.ico" alt="" width="16" height="16" title="Login/SignUp"></a></li>
                    </div>
                    <li><a href="/cart"><img src="image/icon/cart.ico" alt="" width="16" height="16" title="Cart"></a></li>
                </ul>
            </div>
        </nav>

        <br><br><br><br>
        <!-- LAMAN SIGN UP -->
        <div class="container" style="padding-left:200px ; padding-right:200px">
        <center><h1>SIGN UP</h1>
        <h6>Join with us right now!</h6></center>
        <br><br>
        <form action="/postSignUp" method="post">
            {{ csrf_field() }}
            <h6>
                <div class="form-group row">
                    <label for="inputNama" class="col-sm-2 col-form-label">Nama</label>
                    <div class="col-sm-10">
                        <input type="text" name="Nama" class="form-control @error('Nama') is-invalid @enderror" id="inputNama" required autocomplete="Nama" autofocus>
                        @error('Nama')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                
                <div class="form-group row">
                    <label for="inputEmail" class="col-sm-2 col-form-label">Email</label>
                    <div class="col-sm-10">
                        <input type="Email" name="Email" class="form-control @error('Email') is-invalid @enderror" id="inputEmail" value="{{ old('email') }}" required autocomplete="Email" autofocus>
                        @error('Email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                    
                <div class="form-group row">
                    <label for="inputPassword" class="col-sm-2 col-form-label">Password</label>
                    <div class="col-sm-10">
                        <input type="password" name="Password" class="form-control @error('Password') is-invalid @enderror" id="inputPassword" required autocomplete="Password">
                        @error('Password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                    
                <div class="form-group row">
                    <label for="inputHP" class="col-sm-2 col-form-label">No. HP</label>
                    <div class="col-sm-10">
                        <input type="text" name="hp" class="form-control @error('hp') is-invalid @enderror" id="inputHP" required autocomplete="hp">
                        @error('hp')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                    
                <div class="form-group row">
                    <label for="inputAlamat" class="col-sm-2 col-form-label">Alamat</label>
                    <div class="col-sm-10">
                        <input type="text" name="Alamat" class="form-control @error('Alamat') is-invalid @enderror" id="inputAlamat" required autocomplete="Alamat">
                        @error('Alamat')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                        <br>
                        @if(\Session::has('alert'))
                            <div style="text-align:left ; color:red">{{Session::get('alert')}}</div>
                        @endif
                    </div>
                </div>
                    
                <div style="text-align:right">
                    <a href="/pelanggan" class="btn btn-danger">CANCEL</a>
                    <button class="btn btn-black">SIGN UP</button>
                </div>
            </h6>
        </form>
        </div>

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