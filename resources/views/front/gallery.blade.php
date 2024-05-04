@extends('front.layouts.app')
@section('content')

<header class="header header-layout1">
    <div class="header-topbar">
      <div class="container-fluid">
        <div class="row align-items-center">
          <div class="col-12 d-flex align-items-center justify-content-between">
            <span class="topbar__text">
              <span class="colored__text">Enjoy Our Hot Offers!</span> Call:01060499520
            </span>
            <div class="d-flex">
              <ul class="contact__list d-flex flex-wrap align-items-center list-unstyled mb-0">
                <li>
                  <i class="icon-email"></i>
                  <a href="#">
                    <span>Email: </span> <span>cleanhome@200.com</span>
                  </a>
                </li>
                <li>
                  <i class="icon-clock"></i>
                  <a href="contact-us.html">
                    <span>Working Hours: </span> <span>Mon-Fri: 8am – 7pm</span>
                  </a>
                </li>
              </ul><!-- /.contact__list -->
              <ul class="social-icons list-unstyled mb-0 ml-30">
                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
              </ul><!-- /.social-icons -->
            </div>
          </div><!-- /.col-12 -->
        </div><!-- /.row -->
      </div><!-- /.container -->
    </div><!-- /.header-top -->
    <nav class="navbar navbar-expand-lg sticky-navbar">
      <div class="container-fluid">
        <a class="navbar-brand" href="index.html">
          <img src="{{asset('front')}}/assets/images/logo/logo-light.png" class="logo-light" alt="logo">
          <img src="{{asset('front')}}/assets/images/logo/logo-dark.png" class="logo-dark" alt="logo">
        </a>
        <button class="navbar-toggler" type="button">
          <span class="menu-lines"><span></span></span>
        </button>
        <div class="collapse navbar-collapse" id="mainNavigation">
          <ul class="navbar-nav mr-auto">
            <li class="nav__item has-dropdown">
              <a href="#" class=" nav__item-link">Home</a>

            </li><!-- /.nav-item -->
            <li class="nav__item has-dropdown">
              <a href="#" data-toggle="dropdown" class="dropdown-toggle nav__item-link">Company</a>
              <ul class="dropdown-menu">
                <li class="nav__item">
                  <a href="about" class="nav__item-link">About Us</a>
                </li><!-- /.nav-item -->

                <li class="nav__item">
                  <a href="team" class="nav__item-link">Leadership Team</a>
                </li><!-- /.nav-item -->



                <li class="nav__item">
                  <a href="gallery" class="nav__item-link">Our Gallery</a>
                </li><!-- /.nav-item -->

              </ul><!-- /.dropdown-menu -->
            </li><!-- /.nav-item -->
            <li class="nav__item has-dropdown">
              <a href="service" class="nav__item-link">Service</a>

            </li><!-- /.nav-item -->



            <li class="nav__item">
              <a href="contact" class="nav__item-link active">Contact Us</a>
            </li><!-- /.nav-item -->
          </ul><!-- /.navbar-nav -->

          <button class="close-mobile-menu d-block d-lg-none"><i class="fas fa-times"></i></button>
        </div><!-- /.navbar-collapse -->
       
      </div><!-- /.container -->
    </nav><!-- /.navabr -->
  </header><!-- /.Header -->


    <!-- ========================
       page title
    =========================== -->
    <section class="page-title-layout1 page-title-light bg-overlay bg-parallax text-center">
      <div class="bg-img"><img src="{{asset('front')}}/assets/images/page-titles/7.jpg" alt="background"></div>
      <div class="container">
        <div class="row">
          <div class="col-sm-12 col-md-12 col-lg-12 col-xl-6 offset-xl-3">
            <h1 class="pagetitle__heading">Our Gallery</h1>
            <p class="pagetitle__desc">We’ll take the time to discuss your preferences and priorities with you before
              your first home cleaning service and combine them with methods to provide the best clean possible by our
              residential housekeepers.
            </p>
            <div class="d-flex flex-wrap justify-content-center align-items-center">
              <a href="how-it-works.html" class="btn btn__accent my-2 mx-3">
                <span>Our Core Values</span>
                <i class="icon-arrow-right"></i>
              </a>
            </div>
            <nav>
              <ol class="breadcrumb justify-content-center mb-0">
                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                <li class="breadcrumb-item"><a href="about-us.html">Company</a></li>
                <li class="breadcrumb-item active" aria-current="page">Gallery</li>
              </ol>
            </nav>
          </div><!-- /.col-xl-6 -->
        </div><!-- /.row -->
      </div><!-- /.container -->
    </section><!-- /.page-title -->

    <!-- ========================
     gallery layout2
    =========================== -->
    <section class="gallery-layout2 pt-130 pb-90">
      <div class="container">
        <div class="row">
          <div class="col-sm-6 col-md-4 col-lg-4">
            <div class="gallery-img">
              <a class="popup-gallery-item" href="{{asset('front')}}/assets/images/portfolio/11.jpg"><i class="fas fa-plus"></i></a>
              <img src="{{asset('front')}}/assets/images/portfolio/11.jpg" alt="gallery img">
            </div><!-- /.gallery-img -->
          </div><!-- /.col-lg-4 -->
          <div class="col-sm-6 col-md-4 col-lg-4">
            <div class="gallery-img">
              <a class="popup-gallery-item" href="{{asset('front')}}/assets/images/portfolio/12.jpg"><i class="fas fa-plus"></i></a>
              <img src="{{asset('front')}}/assets/images/portfolio/12.jpg" alt="gallery img">
            </div><!-- /.gallery-img -->
          </div><!-- /.col-lg-4 -->
          <div class="col-sm-6 col-md-4 col-lg-4">
            <div class="gallery-img">
              <a class="popup-gallery-item" href="{{asset('front')}}/assets/images/portfolio/14.jpg"><i class="fas fa-plus"></i></a>
              <img src="{{asset('front')}}/assets/images/portfolio/14.jpg" alt="gallery img">
            </div><!-- /.gallery-img -->
          </div><!-- /.col-lg-4 -->
          <div class="col-sm-6 col-md-4 col-lg-4">
            <div class="gallery-img">
              <a class="popup-gallery-item" href="{{asset('front')}}/assets/images/portfolio/14.jpg"><i class="fas fa-plus"></i></a>
              <img src="{{asset('front')}}/assets/images/portfolio/14.jpg" alt="gallery img">
            </div><!-- /.gallery-img -->
          </div><!-- /.col-lg-4 -->
          <div class="col-sm-6 col-md-4 col-lg-4">
            <div class="gallery-img">
              <a class="popup-gallery-item" href="{{asset('front')}}/assets/images/portfolio/55.jpg"><i class="fas fa-plus"></i></a>
              <img src="{{asset('front')}}/assets/images/portfolio/55.jpg" alt="gallery img">
            </div><!-- /.gallery-img -->
          </div><!-- /.col-lg-4 -->
          <div class="col-sm-6 col-md-4 col-lg-4">
            <div class="gallery-img">
              <a class="popup-gallery-item" href="{{asset('front')}}/assets/images/portfolio/9.jpg"><i class="fas fa-plus"></i></a>
              <img src="{{asset('front')}}/assets/images/portfolio/9.jpg" alt="gallery img">
            </div><!-- /.gallery-img -->
          </div><!-- /.col-lg-4 -->
        </div><!-- /.row -->
      </div><!-- /.container -->
    </section><!-- /.gallery layout2 -->

    <!-- ========================
      Footer
    ========================== -->


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
@endsection

