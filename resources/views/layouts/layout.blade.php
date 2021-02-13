<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Just Us Group</title>

        <!-- Styles -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/all.css">
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Acme&display=swap">
        <link rel="shortcut icon" type="image/x-icon" href="images/large/just-logo.png" />

    </head>
    <body>
    <div id="page" class="site bg-light">
	<a class="skip-link screen-reader-text" href="#primary"></a>

<header id="masthead" class="site-header">



<!-- Start NavBar -->
<div>
  <nav class="navbar navbar-expand-lg navbar-light bg-light " id="bilal">
      <!--Start NavBar Logo -->
      <div class="logo float-right">
      <!--<a class="navbar-brand" href="/">-->
          <img class="rounded-circle fixed-top" src="images/large/just-logo.png" alt="Just Us Group" width="100">
          <!--</a> -->
      </div>
      <!-- End NavBar Logo -->


      <!--Start NavBar Mobile -->

      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar" aria-controls="navbar" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
      </button>

      <!-- End NavBar Mobile -->


    <div class="collapse navbar-collapse" id="navbar">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="/">Home<span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="/" id="productsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Products</a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item inst" href="/tables">Tables</a>
            <a class="dropdown-item inst" href="/chairs">Chairs</a>
            <a class="dropdown-item inst" href="/swings">Swings</a>
            <a class="dropdown-item inst" href="/outdoor-living">Outdoor Living</a>
            <a class="dropdown-item inst" href="/outdoor-dining">Outdoor Dining</a>
            <a class="dropdown-item inst" href="/garden-chairs">Garden Chairs</a>
        </li>
        <li class="nav-item"><a class="nav-link" href="/projects">Projects</a></li>
        <li class="nav-item"><a class="nav-link" href="/about-us">About Us</a></li>
        <li class="nav-item"><a class="nav-link" href="/contact-us">Contact Us</a></li>
        <li class="nav-item"><a class="nav-link" href="/welcome-ar">العربية</a></li>
      </ul>
    </div>
  </nav>
</div>
<!-- End NavBar -->


<!-- Floating Social Media bar Starts -->


<div class="float-sm">
  <div class="fl-fl float-fb">
    <i class="fa fa-facebook"></i>
    <a href="https://www.facebook.com/Justusgroup-104479277909917" target="_blank"> Like us!</a>
  </div>
  <div class="fl-fl float-ig">
    <i class="fa fa-instagram"></i>
    <a href="https://www.instagram.com/justusgroup/" target="_blank">Follow us!</a>
  </div>
</div>


<!-- Floating Social Media bar Ends -->

            @yield('content')




            <footer class="section">
      <div class="container">
        <p>All Copyright Reseved &copy;2021 just-us-group.com</p>
        <ul>
          <li><a target="_blank" class="facebook" href="https://www.facebook.com/Justusgroup-104479277909917"><i class="fa fa-fw fa-2x fa-inverse fa-facebook"></i></a></li>
          <li><a target="_blank" class="instagram" href="https://www.instagram.com/justusgroup/"><i class="fa fa-fw fa-2x fa-inverse fa-instagram"></i></a></li>
        </ul>
      </div>
    </footer>

</div><!-- #page -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="js/jquery.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/fontawesome.min.js"></script>
    <script src="js/main.js"></script>
    <script src="js/navigation.js"></script>
    <script src="js/customizer.js"></script>



</body>
</html>
