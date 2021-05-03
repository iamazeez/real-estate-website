<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{ asset('css/all.css') }} ">
  <!-- Bootstrap -->
  <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">
  <!-- Custom -->
  <link rel="stylesheet" href="{{ asset('css/style.css') }}">

  <title>BT Real Estate</title>
</head>

<body>
  <!-- Top Bar -->
  <section id="top-bar" class="p-3">
    <div class="container">
      <div class="row">
        <div class="col-md-4">
          <i class="fas fa-phone"></i> (617)-555-5555
        </div>
        <div class="col-md-4">
          <i class="fas fa-envelope-open"></i> contact@btrealestate.co
        </div>
        <div class="col-md-4">
          <div class="social text-right">
            <a href="#">
              <i class="fab fa-twitter"></i>
            </a>
            <a href="#">
              <i class="fab fa-facebook"></i>
            </a>
            <a href="#">
              <i class="fab fa-linkedin"></i>
            </a>
            <a href="#">
              <i class="fab fa-instagram"></i>
            </a>
            <a href="#">
              <i class="fab fa-pinterest"></i>
            </a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-primary sticky-top">
    <div class="container">
      <a class="navbar-brand" href="index.html">
        <img src="assets/img/logo.png" class="logo" alt="">
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <ul class="navbar-nav">
          <li class="nav-item active mr-3">
            <a class="nav-link" href="{{ route('home') }}">Home</a>
          </li>
          <li class="nav-item mr-3">
            <a class="nav-link" href="{{ route('about') }}">About</a>
          </li>
          <li class="nav-item mr-3">
            <a class="nav-link" href="{{ route('listings') }}">Featured Listings</a>
          </li>
        </ul>

        @guest
        <ul class="navbar-nav ml-auto">
            <li class="nav-item mr-3">
              <a class="nav-link" href="{{ route('register') }}">
                <i class="fas fa-user-plus"></i> Register</a>
            </li>
            <li class="nav-item mr-3">
              <a class="nav-link" href="{{ route('login') }}">
                <i class="fas fa-sign-in-alt"></i>

                Login</a>
            </li>
          </ul>
        @endguest

        @auth
        <ul class="navbar-nav ml-auto">
            <li class="nav-item mr-3">
              <a class="nav-link" href="{{ route('register') }}">
                <i class="fas fa-user-plus"></i> Profile</a>
            </li>

            <li class="nav-item mr-3">
                <a class="nav-link" href="{{ route('create-listing') }}">
                  <i class="fas fa-home"></i> Sell home</a>
              </li>

            <li class="nav-item mr-3">
              <form method="post" action='{{ route('logout') }}'>
                  @csrf
                  <button style='cursor:pointer; margin-top:.3rem; background:none; border:none;font-size:1.1rem;color:rgba(255, 255, 255, 0.5);'><i class="fas fa-sign-in-alt"></i> Logout</button>
              </form>
            </li>
          </ul>
        @endauth

      </div>
    </div>
  </nav>
  <div id="loader"></div>
@yield('content')

  <!-- Footer -->
  <footer id="main-footer" class="py-4 bg-primary text-white text-center">
    Copyright &copy;
    <span class="year"></span> BT Real Estate
  </footer>

  <script src="{{ asset('js/jquery-3.3.1.min.js') }} "></script>
  <script src="{{ asset('js/bootstrap.bundle.min.js') }} "></script>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
  <!-- All JS & AJAX code is in main -->
  <script src="{{ asset('js/main.js') }} "></script>
</body>

</html>
