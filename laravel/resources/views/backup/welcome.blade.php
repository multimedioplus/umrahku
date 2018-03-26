<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Umrahku</title>

                <!-- Font Awesome -->
                <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

                <!-- Fonts -->
                <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

                <!-- Bootstrap core CSS -->
                <link href="{{ asset('public/css/bootstrap.min.css') }}" rel="stylesheet">

                <!-- Material Design Bootstrap -->
                <link href="{{ asset('public/css/mdb.min.css') }}" rel="stylesheet">

                <!-- Styles -->
                <style rel="stylesheet">
                    /* TEMPLATE STYLES */
                    /* Necessary for full page carousel*/

                    html,
                    body,
                    .view {
                        height: 100%;
                    }
                    /* Navigation*/

                    .navbar {
                        background-color: transparent;
                    }

                    .scrolling-navbar {
                        -webkit-transition: background .5s ease-in-out, padding .5s ease-in-out;
                        -moz-transition: background .5s ease-in-out, padding .5s ease-in-out;
                        transition: background .5s ease-in-out, padding .5s ease-in-out;
                    }

                    .top-nav-collapse {
                        background-color: #008e76;
                    }

                    footer.page-footer {
                        background-color: #008e76;
                        margin-top: 0;
                    }

                    @media only screen and (max-width: 768px) {
                        .navbar {
                            background-color: #008e76;
                        }
                    }
                    /* Carousel*/

                    .carousel,
                    .carousel-item,
                    .active {
                        height: 100%;
                    }

                    .carousel-inner {
                        height: 100%;
                    }
                    /*Caption*/

                    .flex-center {
                        color: #fff;
                    }

                    @media (min-width: 776px) {
                        .carousel .view ul li {
                            display: inline;
                        }
                        .carousel .view .full-bg-img ul li .flex-item {
                            margin-bottom: 1.5rem;
                        }
                    }
                    .navbar .btn-group .dropdown-menu a:hover {
                        color: #000 !important;
                    }
                    .navbar .btn-group .dropdown-menu a:active {
                        color: #fff !important;
                    }
                </style>


    </head>
    <body>
      <nav class="navbar navbar-expand-lg navbar-dark fixed-top scrolling-navbar">
          <div class="container">
              <a class="navbar-brand" href="#">Umrahku</a>
              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
              </button>

              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                  <ul class="navbar-nav mr-auto">
                      <li class="nav-item active">
                          <a class="nav-link" href="{{ url('/home') }}">Home <span class="sr-only">(current)</span></a>
                      </li>
                      <li class="nav-item">
                          <a class="nav-link" href="{{ url('/tentang') }}">Tentang</a>
                      </li>
                      <li class="nav-item">
                          <a class="nav-link" href="{{ url('/call') }}">Hubungi Kami</a>
                      </li>
                      <li class="nav-item btn-group">
                          <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Paket Umroh
                          </a>
                          <div class="dropdown-menu dropdown-primary" aria-labelledby="navbarDropdownMenuLink">
                              <a class="dropdown-item" href="{{ url('/paket') }}">Paket Umroh</a>
                              <a class="dropdown-item" href="#">Another action</a>
                              <a class="dropdown-item" href="#">Something else here</a>
                          </div>
                      </li>
                    </ul>
                    @if (Route::has('login'))
                        <div class="top-right links">
                            @if (Auth::check())
                                <a class="navbar-link" style="color:#fff;" href="{{ url('/home') }}">{{ Auth::user()->name }}</a>
                            @else
                                <a class="navbar-link" style="color:#fff;" href="{{ route('login') }}">Login</a>>
                            @endif
                        </div>
                    @endif

              </div>

          </div>
      </nav>
  <!--/.Navbar-->

  <!--Carousel Wrapper-->
  <div id="carousel-example-3" class="carousel slide carousel-fade white-text" data-ride="carousel" data-interval="false">
      <!--Indicators-->
      <ol class="carousel-indicators">
          <li data-target="#carousel-example-3" data-slide-to="0" class="active"></li>
          <li data-target="#carousel-example-3" data-slide-to="1"></li>
          <li data-target="#carousel-example-3" data-slide-to="2"></li>
      </ol>
      <!--/.Indicators-->

      <!--Slides-->
      <div class="carousel-inner" role="listbox">

          <!-- First slide -->
          <div class="carousel-item active view hm-black-light" style="background-image: url('{{asset('/laravel/public/img/wallpaper.jpg')}}'); background-repeat: no-repeat; background-size: cover;">

              <!-- Caption -->
              <div class="full-bg-img flex-center white-text">
                  <ul class="animated fadeInUp col-md-12">
                      <li>
                          <h1 class="h1-responsive flex-item font-bold">UMRAHKU.ID</h1>
                          <li>
                              <p class="flex-item">Pesan Paket Umrah Mudah dari berbagai agency</p>
                          </li>
                          <li>
                              <a target="_blank" href="{{url('/paket')}}" class="btn btn-primary btn-lg flex-item" rel="nofollow">Cari Paket</a>
                          </li>
                          <li>
                              <a target="_blank" href="{{url('/download')}}" class="btn btn-secondary btn-lg flex-item" rel="nofollow">Download</a>
                          </li>
                  </ul>
              </div>
              <!-- /.Caption -->

          </div>
          <!-- /.First slide -->

          <!-- Second slide -->
          <div class="carousel-item view hm-black-light" style="background-image: url('{{asset('/laravel/public/img/6haji.jpg')}}'); background-repeat: no-repeat; background-size: cover;">

              <!-- Caption -->
              <div class="full-bg-img flex-center white-text">
                  <ul class="animated fadeInUp col-md-12">
                      <li>
                          <h1 class="h1-responsive">Umrah Mudah Dengan UMRAHKU.ID</h1>
                      </li>
                      <li>
                          <p class="my-4">Rencanakan Keberangkatan Umrah dengan Mudah dari Berbagai Paket oleh Puluhan Agency Terpercaya</p>
                      </li>
                  </ul>
              </div>
              <!-- /.Caption -->

          </div>
          <!-- /.Second slide -->

          <!-- Third slide -->
          <div class="carousel-item view hm-black-light" style="background-image: url('{{asset('/laravel/public/img/makkah.jpg')}}'); background-repeat: no-repeat; background-size: cover;">

              <!-- Caption -->
              <div class="full-bg-img flex-center white-text">
                  <ul class="animated fadeInUp col-md-12">
                      <li>
                          <h1 class="h1-responsive">Umrah Jadi Lebih Mudah dan Aman</h1></li>
                      <li>
                          <p class="my-4">Di dukung dengan puluhan Agency Terpercaya dan Aman</p>
                      </li>
                  </ul>
              </div>
              <!-- /.Caption -->

          </div>
          <!-- /.Third slide -->

      </div>
      <!--/.Slides-->

      <!--Controls-->
      <a class="carousel-control-prev" href="#carousel-example-3" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carousel-example-3" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
      </a>
      <!--/.Controls-->
  </div>
  <!--/.Carousel Wrapper-->

  <!-- Section About Us -->

<!--Section: Features v.4-->
<div class="container">
<section class="section feature-box">
<h1 class="divider section-heading pt-4 text-center wow fadeIn" data-wow-delay="1s">Mengapa harus UMRAHKU.ID ?</h1>
  <!--Section description-->
<p class="section-description lead grey-text wow fadeIn" data-wow-delay="1.1s">UMRAHKU.ID adalah salah satu penyedia layanan paket umrah yang bekerjasama dengan banyak agency terpercaya dan dijamin aman. Umrahku juga satu satunya penyedia paket umrah yang terhubung dengan user hingga ke Tanah Suci</p>

<!--Grid row-->
<div class="row features-small">

    <!--Grid column-->
    <div class="col-md-4">

        <!--Grid row-->
        <div class="row mb-2 wow fadeIn" data-wow-delay="1.6s">
            <div class="col-2">
                <i class="fa fa-flag-checkered indigo-text"></i>
            </div>
            <div class="col-10">
                <h5 class="feature-title">International</h5>
                <p class="grey-text">Aplikasi Umrahku berbasis Internasional dimana Anda dapat terhubung meski berada di Tanah Suci</p>
            </div>
        </div>
        <!--Grid row-->

        <!--Grid row-->
        <div class="row mb-2 wow fadeIn" data-wow-delay="1.8s">
            <div class="col-2">
                <i class="fa fa-flask blue-text"></i>
            </div>
            <div class="col-10">
                <h5 class="feature-title">Mudah</h5>
                <p class="grey-text">Anda dapat dengan mudah memesan paket umrah yang sesuai dengan budget dan waktu keberangkatan Anda</p>
            </div>
        </div>
        <!--Grid row-->

        <!--Grid row-->
        <div class="row mb-2 wow fadeIn" data-wow-delay="2s">
            <div class="col-2">
                <i class="fa fa-glass cyan-text"></i>
            </div>
            <div class="col-10">
                <h5 class="feature-title">Tanpa Ribet</h5>
                <p class="grey-text">Pesan paket langsung melalui gadget, tanpa ribet</p>
            </div>
        </div>
        <!--Grid row-->

    </div>
    <!--Grid column-->

    <!--Grid column-->
    <div class="col-md-4 mb-2 center-on-small-only flex-center wow fadeIn" data-wow-delay="1.4s">
        <img src="{{asset('/laravel/public/img/iphone-portfolio1.png')}}" alt="" class="z-depth-0">
    </div>
    <!--Grid column-->

    <!--Grid column-->
    <div class="col-md-4">

        <!--Grid row-->
        <div class="row mb-2 wow fadeIn" data-wow-delay="2.2s">
            <div class="col-2">
                <i class="fa fa-heart deep-purple-text"></i>
            </div>
            <div class="col-10">
                <h5 class="feature-title">Nyaman</h5>
                <p class="grey-text">Seluruh informasi mengenai perjalanan Umroh Anda, dapat dipantau di layar smartphone Anda</p>
            </div>
        </div>
        <!--Grid row-->

        <!--Grid row-->
        <div class="row mb-2 wow fadeIn" data-wow-delay="2.4s">
            <div class="col-2">
                <i class="fa fa-flash purple-text"></i>
            </div>
            <div class="col-10">
                <h5 class="feature-title">Cepat</h5>
                <p class="grey-text">Tersesat atau keluar dari rombongan ketika melakukan ibadah umrah, Jangan khawatir tekan tombol bantuan dan bantuan akan segera datang</p>
            </div>
        </div>
        <!--Grid row-->

        <!--Grid row-->
        <div class="row mb-2">
            <div class="col-2 wow fadeIn" data-wow-delay="2.6s">
                <i class="fa fa-magic pink-text"></i>
            </div>
            <div class="col-10 wow fadeIn" data-wow-delay="2.8s">
                <h5 class="feature-title">Tetap Terhubung</h5>
                <p class="grey-text">Dimanapun Anda, akan tetap terhubung dengan grub umrahku. Share informasi informatis seputar umrah, perjalanan, hingga pengalaman</p>
            </div>
        </div>
        <!--Grid row-->

    </div>
    <!--Grid column-->

</div>
<!--Grid row-->

</section>
</div>

<!-- Section Product -->
<div style="padding:40px; background:#008e76;">
    <div class="divider-new pt-2">
        <h2 style="color:#fff;" class="h2-responsive wow fadeIn">Pilihan Paket Terbaik</h2>
    </div>

<!--Section: Best features-->
<section id="best-features">

<div class="row pt-3">

    <!--First columnn-->
    <div class="col-lg-3 mb-r">

        <!--Card-->
        <div class="card wow fadeIn">

            <!--Card image-->
            <img class="img-fluid" style="height: 180px;"  src="{{asset('/laravel/public/img/haji1.jpg')}}" alt="Card image cap">

            <!--Card content-->
            <div class="card-body" style="height:250px;">
                <!--Title-->
                <h4 class="card-title text-center" style="font-size:16px; font-weight:500;">Attawwa Tours 2017 Umrah Ekonomis Maret</h4>
                <hr>
                <!--Text-->
                <p class="card-text">Program Umroh Hemat Paket Reguler Selama 10 hari Keberangkatan 5 Maret 2019</p>
                    <a class="btn btn-info btn-fill pull-right" style="width:100%;background:#008E76;">Detail Paket</a>
            </div>

        </div>
        <!--/.Card-->
    </div>
    <!--First columnn-->

    <!--Second columnn-->
    <div class="col-lg-3 mb-r">
        <!--Card-->
        <div class="card wow fadeIn" data-wow-delay="0.2s">

            <!--Card image-->
            <img class="img-fluid" style="height: 180px;"  src="{{asset('/laravel/public/img/haji2.jpg')}}" alt="Card image cap">

            <!--Card content-->
            <div class="card-body" style="height:250px;">
                <!--Title-->
                <h4 class="card-title text-center"  style="font-size:16px; font-weight:500;">Mahabbah Umrah 2018 Umroh VIP Maret</h4>
                <hr>
                <!--Text-->
                <p class="card-text">Program Umroh Paket VIP 10 Maret 2018 mahabbah umrah seharga $ 2,205/quad...seat terbatas..</p>
                <a class="btn btn-info btn-fill pull-right" style="width:100%;background:#008E76;">Detail Paket</a>
            </div>

        </div>
        <!--/.Card-->
    </div>
    <!--Second columnn-->

    <!--Third columnn-->
    <div class="col-lg-3 mb-r">
        <!--Card-->
        <div class="card wow fadeIn" data-wow-delay="0.4s">

            <!--Card image-->
            <img class="img-fluid" style="height: 180px;"  src="{{asset('/laravel/public/img/haji3.jpg')}}" alt="Card image cap">

            <!--Card content-->
            <div class="card-body" style="height:250px;">
                <!--Title-->
                <h4 class="card-title text-center"  style="font-size:16px; font-weight:500;">Mahabbah Umrah 2018 Umroh Bintang 4 Januari</h4>
                <hr>
                <!--Text-->
                <p class="card-text">Program Umroh Paket bintang 4 29 Januari 2018 mahabbah umrah seharga $ 1,610/quad</p>
                <a class="btn btn-info btn-fill pull-right" style="width:100%;background:#008E76;">Detail Paket</a>
            </div>

        </div>
        <!--/.Card-->
    </div>
    <!--Third columnn-->

    <!--First columnn-->
    <div class="col-lg-3 mb-r">
        <!--Card-->
        <div class="card wow fadeIn" data-wow-delay="0.6s">

            <!--Card image-->
            <img class="img-fluid" style="height: 180px;"  src="{{asset('/laravel/public/img/haji4.jpg')}}" alt="Card image cap">

            <!--Card content-->
            <div class="card-body" style="height:250px;">
                <!--Title-->
                <h4 class="card-title text-center"  style="font-size:16px; font-weight:500;">Shabilla Travel 2017 Umroh Hemat November</h4>
                <hr>
                <!--Text-->
                <p class="card-text">Program Umroh Paket hemat 25 november 2017 Shabilla Travel seharga $ 1,704/quad</p>
                <a class="btn btn-info btn-fill pull-right" style="width:100%;background:#008E76;">Detail Paket</a>
            </div>

        </div>
        <!--/.Card-->
    </div>
    <!--First columnn-->
</div>

</section>
<!--/Section: Best features-->

</div>
<div class="container">
<div class="divider-new">
<h2 class="h2-responsive wow fadeIn">Hubungi Kami</h2>
</div>
<!--Section: Contact-->
<section id="contact pb-5">
<div class="row containers">
<div class="col-md-6">
  <div class="content" style="padding:20px;">
    <h1>Alamat Lengkap</h1>
    <iframe width="100%" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3957.8024410440553!2d112.76522584989917!3d-7.2633107947314475!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd7f980de3be43f%3A0xdb97fb005ae58469!2sRevio+Space!5e0!3m2!1sen!2sid!4v1512790500402" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
  </div>
</div>
<div class="col-md-6" >

  <div class="deskripsi" style="padding:20px;">
    <h1>Hubungi Kami</h1>
    <form>
  <div class="form-row" style="margin-left:-18px;margin-right:-18px;">
    <div class="form-group col-md-6">
      <input type="text" class="form-control" id="inputEmail4" placeholder="Nama Depan">
    </div>
    <div class="form-group col-md-6">
      <input type="text" class="form-control" id="inputPassword4" placeholder="Nama Belakang">
    </div>
  </div>
  <div class="form-group">
    <input type="text" class="form-control" id="inputAddress" placeholder="Email">
  </div>
  <div class="form-group">
    <input type="text" class="form-control" id="inputAddress2" placeholder="Nomor Telpon">
  </div>
  <div class="row">
  <div class="form-group col-md-4">
    <select id="inputState" class="form-control">
      <option selected>Choose...</option>
      <option>...</option>
    </select>
  </div>
    <div class="form-group col-md-4">
      <select id="inputState" class="form-control">
        <option selected>Choose...</option>
        <option>...</option>
      </select>
    </div>
    <div class="form-group col-md-4">
      <select id="inputState" class="form-control">
        <option selected>Choose...</option>
        <option>...</option>
      </select>
    </div>
  </div>
  <div class="form-group">
    <div class="form-check">
      <label class="form-check-label">
        <input class="form-check-input" type="checkbox"> Check me out
      </label>
    </div>
  </div>
  <button type="submit" class="btn btn-primary">Sign in</button>
</form>
</div>
</div>
</div>
</section>
<!--Section: Contact-->
</div>
<div class="divider pt-2" style="margin-bottom:">
</div>


<!--Footer-->
<footer class="page-footer center-on-small-only elegant-color-dark">

<!--Footer Links-->
<div class="container-fluid">
    <div class="row">

        <!--First column-->
        <div class="col-lg-3 col-md-6 ml-auto">
            <h5 class="titles font-bold mt-3 mb-4">Tentang Umrahku.id</h5>
            <p>Umrahku adalah sebuah aplikasi yang dibuat untuk memudahkan masyarakat dalam memesan perjalanan umrah  </p>

            <p>Aplikasi ini dilengkapi dengan berbagai fitur yang memudahkan masyarakat dalam mencari paket umrah terbaik dari berbagai travel terpercaya</p>
        </div>
        <!--/.First column-->

        <hr class="w-100 clearfix d-sm-none">

        <!--Second column-->
        <div class="col-lg-2 col-md-6 ml-auto">
            <h5 class="title font-bold mt-3 mb-4">Our Projects</h5>
            <ul>
                <li><a href="#!">Jeffs Bike Shop</a></li>
                <li><a href="#!">Main Street Restaurant</a></li>
                <li><a href="#!">Connect Groceries</a></li>
                <li><a href="#!">White-To-Black Coffe Shop</a></li>
            </ul>
        </div>
        <!--/.Second column-->

        <hr class="w-100 clearfix d-sm-none">

        <!--Third column-->
        <div class="col-lg-2 col-md-6 ml-auto">
            <h5 class="title font-bold mt-3 mb-4">Useful Resources</h5>
            <ul>
                <li><a href="#!">2016 Advertising Report</a></li>
                <li><a href="#!">Best NY Agencies</a></li>
                <li><a href="#!">Trends for 2017</a></li>
                <li><a href="#!">World Advertisement Report</a></li>
            </ul>
        </div>
        <!--/.Third column-->

        <hr class="w-100 clearfix d-sm-none">

        <!--Fourth column-->
        <div class="col-lg-2 col-md-6 ml-auto">
            <h5 class="title font-bold mt-3 mb-4">Find us on</h5>
            <ul>
                <li><a href="#!">Facebook</a></li>
                <li><a href="#!">Twitter</a></li>
                <li><a href="#!">LinkedIn</a></li>
                <li><a href="#!">Behance</a></li>
            </ul>
        </div>
        <!--/.Fourth column-->

    </div>
</div>
<!--/.Footer Links-->

<!--Copyright-->
<div class="footer-copyright">
    <div class="container-fluid">
        © 2015 Copyright: <a href="https://www.umrahku.id"> Umrahku.id </a>

    </div>
</div>
<!--/.Copyright-->

</footer>
<!--/.Footer-->
  <!-- SCRIPTS -->

  <!-- JQuery -->
  <script type="text/javascript" src="{{ asset('public/js/jquery-3.2.1.min.js') }}"></script>

  <!-- Bootstrap dropdown -->
  <script type="text/javascript" src="{{ asset('public/js/popper.min.js') }}"></script>

  <!-- Bootstrap core JavaScript -->
  <script type="text/javascript" src="{{ asset('public/js/bootstrap.min.js') }}"></script>

  <!-- MDB core JavaScript -->
  <script type="text/javascript" src="{{ asset('public/js/mdb.min.js') }}"></script>

  <script>
  new WOW().init();
  </script>
</body>
</html>
