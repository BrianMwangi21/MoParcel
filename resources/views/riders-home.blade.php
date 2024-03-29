<!DOCTYPE html>
<html lang="en">
  <head>
    <title>MoParcel | Riders Home</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    
    <link href="https://fonts.googleapis.com/css?family=Muli:300,400,700,900" rel="stylesheet">
    <link rel="stylesheet" href="fonts/icomoon/style.css">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/jquery-ui.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">

    <link rel="stylesheet" href="css/jquery.fancybox.min.css">

    <link rel="stylesheet" href="css/bootstrap-datepicker.css">

    <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">

    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/style.css">
    
  </head>
  <body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">
  
  <div class="site-wrap">

    <div class="site-mobile-menu site-navbar-target">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div>
   
    
    <header class="site-navbar py-4 js-sticky-header site-navbar-target" role="banner">
      
      <div class="container-fluid">
        <div class="d-flex align-items-center">
          <div class="site-logo mr-auto w-25"><a href="/">MoParcel | Riders Home</a></div>

          <div class="mx-auto text-center">
            <nav class="site-navigation position-relative text-right" role="navigation">
              <ul class="site-menu main-menu js-clone-nav mx-auto d-none d-lg-block  m-0 p-0">
                <li><a href="#home-section" class="nav-link">Home</a></li>
                <li><a href="#deliveries_section" class="nav-link">Deliveries</a></li>
                <li><a href="/riders" class="nav-link">Riders</a></li>
              </ul>
            </nav>
          </div>

          <div class="ml-auto w-25">
            <nav class="site-navigation position-relative text-right" role="navigation">
              <ul class="site-menu main-menu site-menu-dark js-clone-nav mr-auto d-none d-lg-block m-0 p-0">
                <li class="cta"><a href="#contact-section" class="nav-link"><span>Contact Us</span></a></li>
              </ul>
            </nav>
            <a href="#" class="d-inline-block d-lg-none site-menu-toggle js-menu-toggle text-black float-right"><span class="icon-menu h3"></span></a>
          </div>
        </div>
      </div>
      
    </header>

    <div class="intro-section" id="home-section">
      
      <div class="slide-1" style="background-image: url('images/hero_1.jpg');" data-stellar-background-ratio="0.5">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-12">
              <div class="row align-items-center">
                <div class="col-lg-12 ml-auto" data-aos="fade-up" data-aos-delay="500">
                  <form action="/edit-rider" method="post" class="form-box">
                    {{ csrf_field() }}
                    <h3 class="h4 text-black mb-4">Edit Riders Profile</h3>
                    <div class="form-group">
                      <input type="text" class="form-control" name="firstname" value="{{ $rider->firstname }}" readonly>
                    </div>
                    <div class="form-group">
                      <input type="text" class="form-control" name="lastname" value="{{ $rider->lastname }}" readonly>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" name="phone_number" value="{{ $rider->phone_number }}" >
                    </div>
                    <div class="form-group">
                      <input type="password" class="form-control" name="password" placeholder="Type new password to change it" >
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" name="id_number" value="{{ $rider->id_number }}" readonly>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" name="vehicle_reg" value="{{ $rider->vehicle_reg }}" >
                    </div>
                    <div class="form-group">
                        <select class="form-control" name="vehicle_type" >
                            <option value="car">Car</option>
                            <option value="motorbike">Motorbike</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" name="main_location" value="{{ $rider->main_location }}" >
                    </div>
                    <div class="form-group">
                        <input type="text" name="id" value="{{ $rider->id }}" hidden>
                        <input type="submit" class="btn btn-primary btn-pill" value="Save changes">
                    </div>

                    @if (session('error'))
                        <div class="alert alert-danger" style="margin-top: 10px;width: 100%">{{ session('error') }}</div>
                    @endif
            
                    @if (session('success'))
                        <div class="alert alert-success" style="margin-top: 10px;width: 100%">{{ session('success') }}</div>
                    @endif

                  </form>

                    <form action="/delete-rider" method="post" class="form-box" style="margin-top:10px">
                        {{ csrf_field() }}
                        <h3 class="h4 text-black mb-4">Delete Riders Profile</h3>
                        <input type="text" name="id" value="{{ $rider->id }}" hidden>
                        <input type="submit" class="btn btn-danger btn-pill" value="Delete rider">
                    </form>

                </div>
              </div>
            </div>
            
          </div>
        </div>
      </div>
    </div>
    
     
    <footer class="footer-section bg-white">
      <div class="container">
        <div class="row">
          <div class="col-md-4">
            <h3>About MoParcel</h3>
            <p>Delivering quicker than...</p>
          </div>

          <div class="col-md-3 ml-auto">
            <h3>Links</h3>
            <ul class="list-unstyled footer-links">
              <li><a href="/#home-section">Home</a></li>
              <li><a href="/#deliveries_section">Deliveries</a></li>
              <li><a href="/riders">Riders</a></li>
            </ul>
          </div>

        </div>

        <div class="row pt-5 mt-5 text-center">
          <div class="col-md-12">
            <div class="border-top pt-5">
            <p>
        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
        Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="icon-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank" >Colorlib</a>
        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
      </p>
            </div>
          </div>
          
        </div>
      </div>
    </footer>

  
    
  </div> <!-- .site-wrap -->

  <script src="js/jquery-3.3.1.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/jquery-ui.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/jquery.countdown.min.js"></script>
  <script src="js/bootstrap-datepicker.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/jquery.fancybox.min.js"></script>
  <script src="js/jquery.sticky.js"></script>

  
  <script src="js/main.js"></script>
    
  </body>
</html>