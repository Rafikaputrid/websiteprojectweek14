<!DOCTYPE html>
<html>
    <head>
        <title>Login Customer @Krebag</title>
        <link rel="stylesheet" type="text/css" href="css/bootstrap.css">	
        <script type="text/javascript" src="js/jquery.js"></script>
        <script type="text/javascript" src="js/bootstrap.js"></script>
    </head>

    <body>
    <!-- LOGIN ADMIN -->
        <form action="/postLoginAdmin" method="post">
        {{ csrf_field() }}
        <center>
        <div class="row">
            <div class="col-sm-3"></div>
            <div class="col-sm-6">
                <div class="col-sm-8">
                    <br><br><br><br><br><br>
                    <h1 text-align="left">SIGN IN</h1>
                    <h6>Sign in now and back to work</h6>
                    <br><br>
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
                    
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                        <label class="form-check-label" for="remember">
                            <h6>{{ __('Remember Me') }}</h6>
                        </label>
                    </div>
                    <br>
                    
                    <button class="btn btn-black" style="padding:9px 176px 9px 176px"><b>SIGN IN</b></button>
                    <br><br><a href="#"><strong>forgot your password?</strong></a>

                </div>
            </div>
            <div class="col-sm-3"></div>
        </div>
        </center>
        </form>
    </body>
</html>