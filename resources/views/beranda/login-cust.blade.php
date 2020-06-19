<!DOCTYPE html>
<html>
    <head>
        <title>Login Customer @Krebag</title>
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


    <!-- LOGIN CUST -->
        <form action="/postLoginCust" method="post">
        {{ csrf_field() }}
        <center>
        <div class="row">
            <div class="col-sm-6">
                <div class="col-sm-8">
                    <br><br><br>
                    <h3 text-align="left">SIGN IN</h3>
                    <h6>Sign in now and see your favorite bags</h6>
                    <br><br><br>
                    <div class="form-group row">
                        <label style="text-align:left" for="inputEmail" class="col-sm-2 col-form-label"><h6>Email</h6></label>
                        <div class="col-sm-10">
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    
                    <div class="form-group row">
                        <label for="inputPassword" class="col-sm-2 col-form-label"><h6>Password</h6></label>
                        <div class="col-sm-10">
                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                            @if(\Session::has('alert'))
                                <div style="text-align:left ; color:red">{{Session::get('alert')}}</div>
                            @endif
                        </div>
                    </div>
                    <br>
                </div>
            </div>

            <div class="col-sm-6" style="background-color:#B0C4DE">
                <div class="col-sm-10">
                <br><br><br>
                    <h3>CREATE AN ACCOUNT</h3>
                    <br><br><br><br>
                    <h6>Browse a personalized list <br> created just for you</h6>
                    <br>
                    <h4>SO JOIN WITH US!</h4>
                </div>
            </div>
        </div>


        <div class="row">
            <div class="col-sm-6">
                <div class="col-sm-10">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                        <label class="form-check-label" for="remember">
                            <h6>{{ __('Remember Me') }}</h6>
                        </label>
                    </div><br><br>

                    <button class="btn btn-black" style="padding:9px 178px 9px 178px"><b>SIGN IN</b></button>
                    <br><br><a href="#"><strong>forgot your password?</strong></a>
                    <br><br><br><br><br>
                </div>
            </div>
            <div class="col-sm-6" style="background-color:#B0C4DE">
                <br><br><br>
                <div class="col-sm-10">
                    <a href="/signup" class="btn btn-black" style="padding:9px 177px 9px 177px"><b>SIGN UP</b></a>
                </div>
            </div>
        </div>
        </center>
        </form>

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