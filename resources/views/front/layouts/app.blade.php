<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />
  <meta name="description" content="clean home">
  <link href="{{asset('front')}}/assets/images/favicon/favicon.png" rel="icon">
  <title>clean home </title>

  <link rel="stylesheet"
    href="https://fonts.googleapis.com/css2?family=Fira+Sans:wght@400;500;600;700&family=Roboto:wght@400;700&family=Covered+By+Your+Grace&display=swap">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css">
  <link rel="stylesheet" href="{{asset('front')}}/assets/css/libraries.css">
  <link rel="stylesheet" href="{{asset('front')}}/assets/css/style.css">
</head>

<body>
  <div class="wrapper">
    <div class="preloader">
      <div class="loading"><span></span><span></span><span></span><span></span></div>
    </div><!-- /.preloader -->



    @yield('content')



    <!-- ========================
      Footer
    ========================== -->
    <footer class="footer mt-50">
        <div class="footer-primary">
          <div class="container">
            <div class="row">
              <div class="col-sm-12 col-md-12 col-lg-3">

                  {{-- <a class="navbar-brand s-5" href="index.html"> --}}
                      {{-- <img src="{{asset('front')}}/assets/images/logo/logo-light.png" class="logo-light" alt="logo"> --}}
                      {{-- <img src="{{asset('front')}}/assets/images/logo/logo-dark.png" class="logo-dark" alt="logo"> --}}
                    </a>
                  <!-- /.footer-widget__content -->
              </div><!-- /.col-xl-2 -->


              <div class="col-sm-12 col-md-12 col-lg-3">
                  <div class="footer-widget-contact">
                    <h6 class="footer-widget__title">Quick Contacts</h6>
                    <ul class="contact-list list-unstyled">
                      <li>If you have any questions or need help, feel free to contact with our team.</li>
                      <li>
                        <a href="tel:00201061245741" class="phone__number">
                          <i class="icon-phone"></i> <span>01060499520</span>
                        </a>
                      </li>
                      <li>cario:minya</li>
                    </ul>
                    <a href="contact" class="btn btn__white btn__link mr-30">

                    </a>
                  </div><!-- /.footer-widget__content -->
                </div>


              <div class="col-sm-6 col-md-6 col-lg-2">
                <div class="footer-widget-nav">
                  <h6 class="footer-widget__title">Company</h6>
                  <nav>
                    <ul class="list-unstyled">
                      <li><a href="about">About Us</a></li>
                      <li><a href="team">Leadership Team</a></li>
                      <li><a href="service">Service</a></li>
                      <li><a href="gallery">Our gallery</a></li>
                      <li><a href="contact">Contacts</a></li>
                    </ul>
                  </nav>
                </div><!-- /.footer-widget__content -->
              </div><!-- /.col-lg-2 -->
              <div class="col-sm-6 col-md-6 col-lg-2">
                <div class="footer-widget-nav">
                  <h6 class="footer-widget__title">Services</h6>
                  <nav>
                    <ul class="list-unstyled">
                      <li><a >One Time Cleaning</a></li>
                      <li><a >Recurring Cleaning</a></li>
                      <li><a>Move Out-In Cleaning</a></li>
                      <li><a">Apartment Cleaning</a></li>
                      <li><a>Window Cleaning</a></li>
                      <li><a>Carpet Cleaning</a></li>
                    </ul>
                  </nav>
                </div><!-- /.footer-widget__content -->
              </div><!-- /.col-lg-2 -->
             <!-- /.col-lg-2 -->
            </div><!-- /.row -->
          </div><!-- /.container -->
        </div><!-- /.footer-primary -->
        <div class="footer-secondary">
          <div class="container">
            <div class="row align-items-center">
              <div class="col-sm-12 col-md-4 col-lg-4 col-xl-2">
                <ul class="social-icons list-unstyled my-2">
                  <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                  <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                  <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                </ul><!-- /.social-icons -->
              </div><!-- /.col-xl-2 -->
              <div class="col-sm-12 col-md-8 col-lg-8 col-xl-10 d-flex justify-content-between align-items-center">
                <div>
                  <div class="footer__copyrights">
                    <span class="fz-14">&copy;Team Home Clean</span>

                  </div>
                  <nav>

                  </nav>
                </div>
                <button id="scrollTopBtn">
                  <i class="fas fa-long-arrow-alt-up"></i>
                  <span class="scroll__text">Scroll To Top</span>
                </button>
              </div><!-- /.col-xl-10 -->
            </div><!-- /.row -->
          </div><!-- /.container -->
        </div><!-- /.footer-secondary -->
      </footer><!-- /.Footer -->
    </div><!-- /.wrapper -->
    <div class="search-popup">
      <button type="button" class="search-popup__close"><i class="fas fa-times"></i></button>
      <form class="search-popup__form">
        <input type="text" class="search-popup__form__input" placeholder="Type Words Then Enter">
        <button class="search-popup__btn"><i class="icon-search"></i></button>
      </form>
    </div><!-- /. search-popup -->
      <script src="{{asset('front')}}/assets/js/jquery-3.6.0.min.js"></script>
      <script src="{{asset('front')}}/assets/js/plugins.js"></script>
      <script src="{{asset('front')}}/assets/js/main.js"></script>
    </body>

    </html>




























































