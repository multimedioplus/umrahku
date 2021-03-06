<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" type="text/css">
  <link rel="stylesheet" href="{{asset('public/css/style.css')}}" type="text/css">
  
  <title>Umrahku</title>
  <style>
  .kotak {
    width:100%;
    height:180px;
    border-style:solid;
    border-color: #ddd;
    border-width: thin;
  }
  
  a:hover {
    text-decoration: none;
}
  
  #login-dp{
    padding: 30px;
    overflow:hidden;
    background-color:rgba(255,255,255);
}
#login-dp .help-block{
    font-size:12px
}
#login-dp .bottom{
    background-color:rgba(255,255,255);
    border-top:1px solid #ddd;
    clear:both;
    padding:14px;
}
#login-dp .social-buttons{
    margin:12px 0
}
#login-dp .social-buttons a{
    width: 49%;
}
#login-dp .form-group {
    margin-bottom: 10px;
}
.btn-fb{
    color: #fff;
    background-color:#3b5998;
}
.btn-fb:hover{
    color: #fff;
    background-color:#496ebc
}
.btn-tw{
    color: #fff;
    background-color:#55acee;
}
.btn-tw:hover{
    color: #fff;
    background-color:#59b5fa;
}
@media(max-width:768px){
    #login-dp{
        background-color: inherit;
        color: #fff;
    }
    #login-dp .bottom{
        background-color: inherit;
        border-top:0 none;
    }
}

  </style>
</head>

<body style="background:url({{asset('/laravel/public/img/wallpaper.jpg')}}) !important;">
    <div class="navbar bg-dark text-white p-1" style="padding:5px;" >
    <div class="row" style="width:100%;">
        <div class="col-md-4">
            <h6 style="margin-left:20px;padding: 2px;font-size: 14px;color: #ddd;">Situs booking travel umroh online mudah & terpercaya</h6> 
        </div>
        <div class="col-md-8">
            
        </div>
    </div>
    </div>
  </div>
   <nav class="navbar navbar-expand-md bg-primary navbar-dark fixed-top p-1">
    <div class="container">
      <a class="navbar-brand" href="{{url('/')}}"><b>UMRAHKU</b></a>
      <a class="nav-link" style="padding-left:50px;font-weight: bold;font-size:16px;color:#fff">Kategori</a>
      <a class="navbar-brand" style="width:150%;">
        <form action="{{url('paket-search')}}" method="POST">
        <input type="text" name="search" class="search" style="background-position: 6px 4px;padding: 7px 1px 7px 40px; height:35px;font-size:12px;" placeholder="Cari Paket Umroh" />
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        </form> </a>
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbar2SupportedContent" aria-controls="navbar2SupportedContent" aria-expanded="false" aria-label="Toggle navigation"> <span class="navbar-toggler-icon"></span> </button>
      <div class="collapse navbar-collapse text-center justify-content-end" id="navbar2SupportedContent">
        <ul class="navbar-nav">
          <li class="nav-item">
            <!--<a class="nav-link" href="#"><i class="fa d-inline fa-lg fa-shopping-cart" style="color:#fff;"></i></a>-->
          </li>
        </ul>
         @if (Route::has('login'))
                            @if (Auth::check())
                             <div class="dropdown">
                              <a class="dropdown-toggle" style="color:#fff;" href="{{ url('/home') }}" data-toggle="dropdown">{{ Auth::user()->name }}</a><span class="caret"></span>
                              <ul class="dropdown-menu" style="padding:15px;top:35px;">
                                <li class="nav-menu"><a href="{{ url('/home') }}">Home</a></li>
                                <li class="nav-menu"><a href="{{ url('/paket') }}">Paket</a></li>
                                <li class="nav-menu"><a href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">Logout</a></li>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    {{ csrf_field() }}
                                </form>
                              </ul>
                            </div>
                            @else
                                <a href="{{ route('register') }}" class="btn nav-link ml-2 btn-primary text-white" > Daftar</a>
                                <a href="#" class="btn navbar-link ml-2 text-white dropdown-toggle" data-toggle="dropdown" style="border-style: solid;border-width: 1px;border-color: #fafafa;"> Login</a>
                                <ul id="login-dp" class="dropdown-menu navbar-right">
                        				<li>
                        					 <div class="row" style="width: 100%;margin-left: 0px;">
                                					     <form class="form-horizontal" role="form" method="POST" action="{{ url('/login') }}"  accept-charset="UTF-8">
                        								 <!--<form class="form" role="form" method="post" action="{{url('/login') }}" accept-charset="UTF-8" id="login-nav">-->
                        								 {{ csrf_field() }}
                        										<div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                        											 <label for="email" class="col-md-12 control-label">E-Mail Address</label>
                        											 <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>
                        											 @if ($errors->has('email'))
                                                                        <span class="help-block">
                                                                            <strong>{{ $errors->first('email') }}</strong>
                                                                        </span>
                                                                    @endif
                        											 <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        										</div>
                        										<div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                        											 <label for="password" class="col-md-12 control-label">Password</label>
                        											 <input id="password" type="password" class="form-control" name="password" required>
                        											 @if ($errors->has('password'))
                                                                        <span class="help-block">
                                                                            <strong>{{ $errors->first('password') }}</strong>
                                                                        </span>
                                                                    @endif
                                                                    <br>
                                                                    <div class="form-group">
                                                                    <div class="col-md-12 col-md-offset-4">
                                                                        <div class="checkbox">
                                                                            <label>
                                                                                <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : ''}}> Remember Me
                                                                            </label>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                     <div class="help-block text-right"><a href="">Forget the password ?</a></div>
                        										</div>
                        										<div class="form-group">
                        											 <button type="submit" class="btn btn-primary btn-block">Sign in</button>
                        										</div>
                        								 </form>
                        							</div>
                        					 </div>
                        				</li>
                            @endif
                    @endif
          </div>
        </div>
     </nav>
<div class="container" style="padding: 50px;margin-left:0px;">
    <div class="row">
        <div class="col-md-5 bg-white text-dark" style="margin-top:20px;padding:40px;border-radius:10px;">
            <div class="panel panel-default">
                <div class="panel-heading"><h2>Daftar</h2><hr></div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/register') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-12 control-label">Nama</label>

                            <div class="col-md-12">
                                <input id="name" placeholder="Nama Lengkap Anda" style="100%" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-12 control-label">E-Mail </label>

                            <div class="col-md-12">
                                <input placeholder="Alamat Email Valid" style="100%" id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-12 control-label">Password</label>

                            <div class="col-md-12">
                                <input style="100%" placeholder="Password" id="password" type="password" class="form-control" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="password-confirm" class="col-md-12 control-label">Ulangi Password</label>

                            <div class="col-md-12">
                                <input placeholder="Ulangi Password Anda" style="100%" id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <label for="password-confirm" class="col-md-12 control-label">Daftar Sebagai</label>

                            <div class="col-md-12">
                               <select name="sebagai" class="form-control">
                                   <option value="User">Pembeli</option>
                                   <option value="Seller">Penyedia Umroh</option>
                               </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-12 col-md-offset-4">
                                <button type="submit" style="width: 100%;" class="btn btn-full btn-primary">
                                    Register
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
    </div>
    <!--Footer-->
    <footer class="page-footer center-on-small-only elegant-color-dark" style="margin-top:40px">

 <div class="text-white bg-dark">
    <div class="container">
      <div class="row">
        <div class="p-5 col-md-3"> <img src="{{asset('public/image/logo.png')}}"" width="50%" style="margin:0px 20px 10px 20px;"/>
          <h3 class="mb-4 text-secondary" style="margin-left:20px;">UMRAHKU</h3>
          <ul class="list-unstyled" style="margin-left:20px;">
            <a href="#" class="text-white">Home</a>
            <br>
            <a href="#" class="text-white">About us</a>
            <br>
            <a href="#" class="text-white">Our services</a>
            <br>
            <a href="#" class="text-white">Testimonials</a>
          </ul>
        </div>
        <div class="p-5 col-md-4">
          <h3 class="mb-4">Latest post</h3>
          <p>"<i>Here you can insert the latest news from your business. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</i>" &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;
            <br>
            <br>
            <br>"<i>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Excepteur sint occaecat cupidatat</i>"</p>
        </div>
        <div class="p-5 col-md-5">
          <h3>Get in touch</h3>
          <form class="my-4">
            <fieldset class="form-group"> <label for="exampleInputEmail1">Get monthly updates</label>
              <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email"> </fieldset>
            <button type="submit" class="btn btn-outline-light ">Submit</button>
          </form>
          <h3 class="mt-5">Social</h3>
          <div class="align-self-center col-12 my-4">
            <a href="https://www.facebook.com" target="_blank"><i class="fa fa-facebook d-inline fa-lg mr-3 text-white"></i></a>
            <a href="https://twitter.com" target="_blank"><i class="fa fa-twitter d-inline mx-3 fa-lg text-white"></i></a>
            <a href="https://www.instagram.com" target="_blank"><i class="fa fa-instagram d-inline mx-3 fa-lg text-white"></i></a>
            <a href="https://plus.google.com" target="_blank"><i class="fa fa-google-plus-official d-inline mx-3 fa-lg text-white"></i></a>
            <a href="https://pinterest.com" target="_blank"><i class="fa fa-pinterest-p d-inline mx-3 fa-lg text-white"></i></a>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12 mt-3">
          <p class="text-center">© Copyright 2017 UMRAHKU - All rights reserved. </p>
        </div>
      </div>
    </div>
  </div>

    </footer>
    <!--/.Footer-->
        <!-- JQuery -->
    <script type="text/javascript" src="{{ asset('public/js/jquery-3.2.1.min.js') }}"></script>

    <!-- Bootstrap dropdown -->
    <script type="text/javascript" src="{{ asset('public/js/popper.min.js') }}"></script>

    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="{{ asset('public/js/bootstrap.min.js') }}"></script>

    <script>
    new WOW().init();
    </script>

</body>
</html>
