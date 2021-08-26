<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="{{ asset('js/booking.js') }}" defer></script>
    <script src="{{ asset('js/contact.js') }}" defer></script>
    <script src="{{ asset('js/jqBootstrapValidation.min.js') }}" defer></script>
    <script src="{{ asset('js/main.js') }}" defer></script>



    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">


    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Hotel booking online</title>
  <meta content="" name="description">
  <meta content="" name="keywords">
 

 
    <!-- Favicons -->
    <link href="img/logo.ico" rel="icon">
    <link href="img/logo.jpg" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:100,200,300,400,500,600,700,800,900" rel="stylesheet">
   

  <!-- Vendor CSS File -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="assets/vendor/animate/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/slick/slick.css" rel="stylesheet">
  <link href="assets/vendor/slick/slick-theme.css" rel="stylesheet">
  <link href="assets/vendor/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />
 
  <!-- Template Main CSS File -->
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/login.css') }}" rel="stylesheet">
    <link href="{{ asset('css/hover-style.css') }}" rel="stylesheet">
  <link href="{{ asset('css/my.css') }}" rel="stylesheet">
  <link href="{{ asset('css/style.css') }}" rel="stylesheet">
  
  <script type="text/javascript" src="{{asset('js/main.js')}}"></script>  
</head>
<body>
    <div id="app">
          <!-- Header Section Start -->
    


         <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    ABC hotel
                </a>
                 <a href="/seerooms" class="navbar-brand">seerooms</a>
                 <a href="/history" class="navbar-brand">your bookings</a>

                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>
  

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar
                    <ul class="navbar-nav mr-auto">

                    </ul>

                     Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto p-5">
                        <!-- Authentication Links -->
                        @guest   <a href="/seerooms">seerooms</a>
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                                                   

                                </li>
                            @endif
                            
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav> 

        <main class="py-4">
            @yield('content')
        </main>
    </div>
<script>

var botmanWidget ={
title : 'chat with us',

};
</script>
<script src='https://cdn.jsdelivr.net/npm/botman-web-widget@0/build/js/widget.js'></script>

<div id="footer">
  <div class="container">
      <div class="row">
          <div class="col-12">
            <div class="social-links">
              <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
              <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
              <a href="#" class="instagram"><i class="fa fa-instagram"></i></a>
              <a href="#" class="google-plus"><i class="fa fa-skype"></i></a>
              <a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a>
            </div>
          </div>
          <div class="col-12">
              <p>Copyright &#169;
                  <a href="#">Abc Hotel </a> All Rights Reserved.</p>

          </div>
      </div>
  </div>
</div>
<!-- Footer Section End -->

<a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

<!-- Vendor JavaScript File -->
<script src="assets/vendor/jquery/jquery.min.js"></script>
<script src="assets/vendor/jquery/jquery-migrate.min.js"></script>
<script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="assets/vendor/easing/easing.min.js"></script>
<script src="assets/vendor/stickyjs/sticky.js"></script>
<script src="assets/vendor/superfish/hoverIntent.js"></script>
<script src="assets/vendor/superfish/superfish.min.js"></script>
<script src="assets/vendor/wow/wow.min.js"></script>
<script src="assets/vendor/slick/slick.min.js"></script>
<script src="assets/vendor/tempusdominus/js/moment.min.js"></script>
<script src="assets/vendor/tempusdominus/js/moment-timezone.min.js"></script>
<script src="assets/vendor/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

<!-- Booking Javascript File -->
<script src="public/js/booking.js"></script>
<script src="public/js/jqBootstrapValidation.min.js"></script>

<!-- Main Javascript File -->
<script src="js/main.js"></script>
</body>

        <form action="/createmessage" method="post" role="form" class="php-email-form">
          @csrf
            <div class="col-md-6 form-group">
              <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
            </div>
            <div class="col-md-6 form-group mt-3 mt-md-0">
              <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
            </div>
          </div>
          
          <div class="form-group mt-3">
            <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
          </div>
          
          <div class="text-center"><button type="submit">Send Message</button></div>
        </form>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->


  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

      
</body>
 
</html>

