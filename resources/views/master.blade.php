<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <meta http-equiv="X-UA-Compatible" content="IE=edge">

  <title>UTAS Computer Rental Service</title>

  <link rel="stylesheet" href="{{ asset ('css/bootstrap.css') }}" >
  
  <link rel="stylesheet" href="{{ asset ('css/maicons.css') }}">

  <link rel="stylesheet" href="{{ asset ('utasanim/animate/animate.css') }}">

  <link rel="stylesheet" href="{{ asset ('utasanim/owl-carousel/css/owl.carousel.css') }}">

  <link rel="stylesheet" href="{{ asset ('utasanim/fancybox/css/jquery.fancybox.css') }}">

  <link rel="stylesheet" href="{{asset ('css/utastheme.css') }}">

</head>
<body>

  
  <header>
    

    <nav class="navbar navbar-expand-lg navbar-light">
      <div class="container">
       <a href="index.html" class="navbar-brand"><img src="{{ asset ('img/utas-logo.jpg') }}" style="margin-right:20px;">UTAS COMPUTER RENTAL SERVICE</a>

        <button class="navbar-toggler" data-toggle="collapse" data-target="#navbarContent" aria-controls="navbarContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="navbar-collapse collapse" id="navbarContent">
          <ul class="navbar-nav ml-auto pt-3 pt-lg-0">
            <li class="nav-item">
              <a href="home.html" class="nav-link">Home</a>
            </li>
            <li class="nav-item">
              <a href="register.html" class="nav-link">Register</a>
            </li>
           
          </ul>
        </div>
      </div> <!-- .container -->
    </nav> <!-- .navbar -->
</header>

<div class="container">
    @yield('content')
</div>













  <footer class="page-footer">
    <div class="container">

      <hr>

      <div class="row mt-4">
        <div class="col-md-12 text-center">
          <p>Copyright 2022. developed by <a href="#">UTAS</a></p>
        </div>
       
      </div>
    </div>
  </footer>

  
<script src="{{ asset ('js/jquery-3.5.1.min.js') }}"></script>
<></script>
<script src="{{asset ('js/bootstrap.bundle.min.js') }}"></script>

<script src="{{ asset ('utasanim/owl-carousel/js/owl.carousel.min.js') }}"></script>

<script src="{{ asset ('utasanim/wow/wow.min.js') }}"></script>

<script src="{{ asset ('utasanim/fancybox/js/jquery.fancybox.min.js') }}"></script>

<script src="{{ asset ('utasanim/isotope/isotope.pkgd.min.js') }}"></script>


<script src="{{ asset ('js/utastheme.js')  }}"></script>

</body>
</html>