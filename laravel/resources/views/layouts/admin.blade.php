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
     <div class="containerr" style="margin-top:-20px;">
    <div class="row">
      <div class="col-md-2" style="z-index:0;box-shadow: 1px 0px 20px rgba(0, 0, 0, 0.08);overflow-x: visible; overflow-y: hidden;background:#fff;margin-top:20px;height:1124px; width:100%;position:absolute;padding: 40px;">
        <a href="{{url('/home')}}" class="text-dark" style="z-index:1;"><i class="fa fa-clock-o fa-1x" title="User Profile" aria-hidden="true" style="padding:10px"></i>Dashboard</a><br>
        <a href="{{url('/user')}}" class="text-dark"><i class="fa fa-user fa-1x" title="List User" aria-hidden="true" style="padding:10px"></i>User<br>
        <a href="{{url('/inputPackage')}}" class="text-dark"><i class="fa fa-file fa-1x" title="List User" aria-hidden="true" style="padding:10px"></i>Input Package<br>
        <a href="{{url('/listPackage')}}" class="text-dark"><i class="fa fa-table fa-1x" title="List User" aria-hidden="true" style="padding:10px"></i>List Package<br>
        <a href="{{url('/dataCustomer')}}" class="text-dark"><i class="fa fa-users fa-1x" title="List User" aria-hidden="true" style="padding:10px"></i>List Buyer <br>
        <a href="{{url('/dataCustomer')}}" class="text-dark"><i class="fa fa-comment fa-1x" title="List User" aria-hidden="true" style="padding:10px"></i>Feedback<br>
        <a href="{{url('/dataCustomer')}}" class="text-dark"><i class="fa fa-gear fa-1x" title="List User" aria-hidden="true" style="padding:10px"></i>Setting<br>
        <a href="{{ route('logout') }}"
            onclick="event.preventDefault();
                     document.getElementById('logout-form').submit();"><a class="text-dark" href="{{url('/dataCustomer')}}"><i class="fa fa-sign-out fa-1x" title="List User" aria-hidden="true" style="padding:10px"></i>Logout<br></a> 
      </div>
      <div class="col-md-10 container" style="margin-top:30px;margin-right:0px;">
        @yield('content')
      </div>
        
    </div>
    <br />
    <br />
    <!--Footer-->
    <footer class="page-footer center-on-small-only elegant-color-dark" style="margin-top:-20px;position:relative;z-index:99">

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

    </footer>
    <!--/.Footer-->

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
    
    <script>
	CKEDITOR.replace( 'editor1', {
		// Define the toolbar: http://docs.ckeditor.com/ckeditor4/docs/#!/guide/dev_toolbar
		// The standard preset from CDN which we used as a base provides more features than we need.
		// Also by default it comes with a 2-line toolbar. Here we put all buttons in a single row.
		toolbar: [
// 			{ name: 'clipboard', items: [ 'Undo', 'Redo' ] },
// 			{ name: 'styles', items: [ 'Styles', 'Format' ] },
			{ name: 'basicstyles', items: [ 'Bold', 'Italic', 'Strike', '-', 'RemoveFormat' ] },
			{ name: 'paragraph', items: [ 'NumberedList', 'BulletedList', '-', 'Outdent', 'Indent', '-', 'Blockquote' ] },
			{ name: 'links', items: [ 'Link', 'Unlink' ] },
			{ name: 'insert', items: [ 'Image', 'EmbedSemantic', 'Table' ] },
			{ name: 'tools', items: [ 'Maximize' ] },
			{ name: 'editing', items: [ 'Scayt' ] }
		],

		// Since we define all configuration options here, let's instruct CKEditor to not load config.js which it does by default.
		// One HTTP request less will result in a faster startup time.
		// For more information check http://docs.ckeditor.com/ckeditor4/docs/#!/api/CKEDITOR.config-cfg-customConfig
		customConfig: '',

		// Enabling extra plugins, available in the standard-all preset: http://ckeditor.com/presets-all
		extraPlugins: 'autoembed,embedsemantic,image2,uploadimage,uploadfile',

		/*********************** File management support ***********************/
		// In order to turn on support for file uploads, CKEditor has to be configured to use some server side
		// solution with file upload/management capabilities, like for example CKFinder.
		// For more information see http://docs.ckeditor.com/ckeditor4/docs/#!/guide/dev_ckfinder_integration

		// Uncomment and correct these lines after you setup your local CKFinder instance.
		// filebrowserBrowseUrl: 'http://example.com/ckfinder/ckfinder.html',
		// filebrowserUploadUrl: 'http://example.com/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files',
		/*********************** File management support ***********************/

		// Remove the default image plugin because image2, which offers captions for images, was enabled above.
		removePlugins: 'image',

		// Make the editing area bigger than default.
		height: 300,

		// An array of stylesheets to style the WYSIWYG area.
		// Note: it is recommended to keep your own styles in a separate file in order to make future updates painless.
		contentsCss: [ 'https://cdn.ckeditor.com/4.8.0/standard-all/contents.css', 'mystyles.css' ],

		// This is optional, but will let us define multiple different styles for multiple editors using the same CSS file.
		bodyClass: 'article-editor',

		// Reduce the list of block elements listed in the Format dropdown to the most commonly used.
		format_tags: 'p;h1;h2;h3;pre',

		// Simplify the Image and Link dialog windows. The "Advanced" tab is not needed in most cases.
		removeDialogTabs: 'image:advanced;link:advanced',

		// Define the list of styles which should be available in the Styles dropdown list.
		// If the "class" attribute is used to style an element, make sure to define the style for the class in "mystyles.css"
		// (and on your website so that it rendered in the same way).
		// Note: by default CKEditor looks for styles.js file. Defining stylesSet inline (as below) stops CKEditor from loading
		// that file, which means one HTTP request less (and a faster startup).
		// For more information see http://docs.ckeditor.com/ckeditor4/docs/#!/guide/dev_styles
		stylesSet: [
			/* Inline Styles */
			{ name: 'Marker',			element: 'span', attributes: { 'class': 'marker' } },
			{ name: 'Cited Work',		element: 'cite' },
			{ name: 'Inline Quotation',	element: 'q' },

			/* Object Styles */
			{
				name: 'Special Container',
				element: 'div',
				styles: {
					padding: '5px 10px',
					background: '#eee',
					border: '1px solid #ccc'
				}
			},
			{
				name: 'Compact table',
				element: 'table',
				attributes: {
					cellpadding: '5',
					cellspacing: '0',
					border: '1',
					bordercolor: '#ccc'
				},
				styles: {
					'border-collapse': 'collapse'
				}
			},
			{ name: 'Borderless Table',		element: 'table',	styles: { 'border-style': 'hidden', 'background-color': '#E6E6FA' } },
			{ name: 'Square Bulleted List',	element: 'ul',		styles: { 'list-style-type': 'square' } },

			/* Widget Styles */
			// We use this one to style the brownie picture.
			{ name: 'Illustration', type: 'widget', widget: 'image', attributes: { 'class': 'image-illustration' } },
			// Media embed
			{ name: '240p', type: 'widget', widget: 'embedSemantic', attributes: { 'class': 'embed-240p' } },
			{ name: '360p', type: 'widget', widget: 'embedSemantic', attributes: { 'class': 'embed-360p' } },
			{ name: '480p', type: 'widget', widget: 'embedSemantic', attributes: { 'class': 'embed-480p' } },
			{ name: '720p', type: 'widget', widget: 'embedSemantic', attributes: { 'class': 'embed-720p' } },
			{ name: '1080p', type: 'widget', widget: 'embedSemantic', attributes: { 'class': 'embed-1080p' } }
		]
	} );
</script>

</body>
</html>
