<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" type="text/css">
  <link rel="stylesheet" href="{{asset('public/css/style.css')}}" type="text/css">
  <script src="https://cdn.ckeditor.com/4.8.0/standard-all/ckeditor.js"></script>
  
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

<body style="background-color:#edf1f5 !important;">
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
  <div class="py-5 my-4">
    <div class="container" style="margin-top:30px;">
      <div class="row">
        <div class="col-md-2">
          <p class="lead text-dark"><b>Travel Favorit :</b></p>
        </div>
        <div class="col-md-10">
            <?php 
            foreach($user as $data)
          {
               $id = $data->id;
               $name = $data->name;
               echo "<a href='#'><font class='bubble'>".$name."</font></a>";
        }
            ?>
      </div>
    </div>
      <div class="row">
        <div class="col-md-4">
          <img style="padding:3px" class="img-fluid d-block" src="{{asset('laravel/public/image/umrah_turki.jpg')}}">
        </div>
        <div class="col-md-4">
          <img style="padding:3px" class="img-fluid d-block" src="{{asset('laravel/public/image/umrah+aqsa.JPG')}}"> </div>
        <div class="col-md-4">
          <img style="padding:3px" class="img-fluid d-block" src="{{asset('laravel/public/image/paketumroh.jpg')}}"> </div>
      </div>
    </div>
  </div>
  <div class="full"  style="background-color:#fff; padding:50px;">
  <div class="p-0">
    <div class="container">
      <div class="row">
        <div class="col-md-12 m-0">
          <p class="lead text-primary"><b>Pilihan Travel Terbaik</b></p>
        </div>
      </div>
    </div>
  </div>
  <div class="py-0">
    <div class="container">
      <div class="row">
         <?php 
            foreach($user as $pengguna)
          {
               $foto = $pengguna ->foto;
        ?>
        
        <div class="col-md-2" style="margin:10px;">
          <img class="img-fluid d-block kotak" src="{{asset('laravel/public/foto/')}}<?php echo "/".$foto; ?>">
        </div>
        
        <?php
        }
        ?>
      </div>
    </div>
    <div class="py-5">
    <div class="container" style="margin-top:20px;">
      <div class="row">
        <div class="col-md-12">
          <p class="lead text-primary"><b>Travel Terbaru dan Terupdate&nbsp;</b></p>
        </div>
      </div>
      
      <div class="row">
                <?php 
            foreach($terbaru as $paket)
          {
              $id = $paket->id;
               $nama = $paket->nama;
               $harga = $paket->harga;
               $user = $paket->user;
               $hotel = $paket->hotel;
               $foto = $paket->foto;
               $pesawat = $paket->pesawat;
               $berangkat = $paket->berangkat;
               $kembali = $paket->kembali;
               $rute = $paket->rute;
               $seat = $paket->seat;
               $kamar = $paket->kamar;
        ?>
        <div class="col-md-2 product-card">
          <img class="img-fluid d-block" src="{{asset('laravel/public/image/')}}<?php echo "/".$foto; ?>">
          <h2 class="judul-produk"><a href="detail-paket-<?php echo $id; ?>"><?php echo $nama; ?></a></h2>
          <p class="harga-produk">Rp <?php echo number_format($harga); ?></p>
          <p style="text-align:center; margin-top:-15px;">
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star"></span>
          </p><hr />
          <p style="text-align:center; font-size:12px;">
            <?php echo $user; ?>
          </p>
        </div>
        <?php } ?>  
      </div>
    </div>
  </div>
  </div>
  
  <div class="py-5">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <p class="lead text-primary"><b>Travel Recomended dan Termurah&nbsp;</b></p>
        </div>
      </div>
      <div class="row">
        <?php 
            foreach($termurah as $paket)
          {
              $id = $paket->id;
               $nama = $paket->nama;
               $harga = $paket->harga;
               $user = $paket->user;
               $hotel = $paket->hotel;
               $foto = $paket->foto;
               $pesawat = $paket->pesawat;
               $berangkat = $paket->berangkat;
               $kembali = $paket->kembali;
               $rute = $paket->rute;
               $seat = $paket->seat;
               $kamar = $paket->kamar;
        ?>
        <div class="col-md-2 product-card">
          <img class="img-fluid d-block" src="{{asset('laravel/public/image/')}}<?php echo "/".$foto; ?>">
          <h2 class="judul-produk"><a href="detail-paket-<?php echo $id; ?>"><?php echo $nama; ?></a></h2>
          <p class="harga-produk">Rp <?php echo number_format($harga); ?></p>
          <p style="text-align:center; margin-top:-15px;">
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star"></span>
          </p><hr />
          <p style="text-align:center; font-size:12px;">
            <?php echo $user; ?>
          </p>
        </div>
        <?php } ?>  
      </div>
    </div>
  </div>
  <div class="py-5">
    <div class="container" style="margin-top:-40px;">
      <div class="row">
        <div class="col-md-12">
          <p class="lead text-primary"><b>Paket Umroh Terlengkap&nbsp;</b></p>
        </div>
      </div>
      <div class="row">
                <?php 
            foreach($terlengkap as $paket)
          {
              $id = $paket->id;
               $nama = $paket->nama;
               $harga = $paket->harga;
               $user = $paket->user;
               $hotel = $paket->hotel;
               $foto = $paket->foto;
               $pesawat = $paket->pesawat;
               $berangkat = $paket->berangkat;
               $kembali = $paket->kembali;
               $rute = $paket->rute;
               $seat = $paket->seat;
               $kamar = $paket->kamar;
        ?>
        <div class="col-md-2 product-card">
          <img class="img-fluid d-block" src="{{asset('laravel/public/image/')}}<?php echo "/".$foto; ?>">
          <h2 class="judul-produk"><a href="detail-paket-<?php echo $id; ?>"><?php echo $nama; ?></a></h2>
          <p class="harga-produk">Rp <?php echo number_format($harga); ?></p>
          <p style="text-align:center; margin-top:-15px;">
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star"></span>
          </p><hr />
          <p style="text-align:center; font-size:12px;">
            <?php echo $user; ?>
          </p>
        </div>
        <?php } ?>  
      </div>
    </div>
  </div>
</div>

<div class="py-5">
  <div class="container" style="margin-top:10px;">
    <div class="row">
      <div class="col-md-2" style="text-align:center;">
        <div class="circle">
          <i class="fa d-inline fa-lg fa-shield text-primary" style="font-size:65px;"></i>
        </div>
        <p class="judul">
          Jaminan 100% Aman
        </p>
        <p class="judul-produk">
          Payment system Umrahku menjamin keamanan uang Anda dalam bertransaksi. Pelajari amannya Umrahku
        </p>
      </div>

      <div class="col-md-2" style="text-align:center;">
        <div class="circle">
          <i class="fa d-inline fa-lg fa-credit-card-alt text-primary" style="font-size:50px;"></i>
        </div>
        <p class="judul">
          Kemudahan Pembayaran
        </p>
        <p class="judul-produk">
          Umrahku menyediakan berbagai metode pembayaran untuk bertransaksi
        </p>
      </div>

      <div class="col-md-2" style="text-align:center;">
        <div class="circle">
          <i class="fa d-inline fa-lg fa-users text-primary" style="font-size:60px;"></i>
        </div>
        <p class="judul">
          Customer Support yang Responsif
        </p>
        <p class="judul-produk">
          CS Umrahku siap membantu Anda melalui e-mail, media sosial dan call center (021-5081-3333)
        </p>
      </div>

      <div class="col-md-2" style="text-align:center;">
        <div class="circle">
          <i class="fa d-inline fa-lg fa-plane text-primary" style="font-size:70px;"></i>
        </div>
        <p class="judul">
          Travel Terpecaya
        </p>
        <p class="judul-produk">
          Umrahku menjamin keberangkatan dan kepulangan anda dari hingga ke Tanah Suci
        </p>
      </div>

      <div class="col-md-2" style="text-align:center;">
        <div class="circle">
          <i class="fa d-inline fa-lg fa-star-o text-primary" style="font-size:70px;"></i>
        </div>
        <p class="judul">
          Paket Travel Terbaik
        </p>
        <p class="judul-produk">
          Dapatkan berbagai paket terbaik dan terpercaya. Dapatkan juga paket travel sesuai kebutuhan Anda.
        </p>
      </div>

      <div class="col-md-2" style="text-align:center;">
        <div class="circle">
          <i class="fa d-inline fa-lg fa-mobile text-primary" style="font-size:90px;"></i>
        </div>
        <p class="judul">
          Kemudahan Akses Mobile
        </p>
        <p class="judul-produk">
          Download aplikasi Umrahku di Android dan iOS. Nikmati kemudahan beli paket umroh dan informasi tentang umroh dari gadget Anda
        </p>
      </div>

    </div>
  </div>
</div>
  <div class="text-white bg-dark">
    <div class="container">
      <div class="row">
        <div class="p-5 col-md-3"> <img src="{{asset('laravel/public/image/logo.png')}}"" width="50%" style="margin:0px 20px 10px 20px;"/>
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
            <button type="submit" class="btn btn-outline-light">Submit</button>
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
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
</body>

</html>
