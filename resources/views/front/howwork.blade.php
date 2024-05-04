@extends('front.layouts.app')
@section('content')

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />
  <meta name="description" content="Clanora - Cleaning Services HTML5 Template">
  <link href="{{asset('front')}}/assets/images/favicon/favicon.png" rel="icon">
  <title>Clanora - Cleaning Services HTML5 Template</title>

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

    <!-- =========================
        Header
    =========================== -->
    <header class="header header-layout1">
      <div class="header-topbar">
        <div class="container-fluid">
          <div class="row align-items-center">
            <div class="col-12 d-flex align-items-center justify-content-between">
              <span class="topbar__text">
                <span class="colored__text"><i class="icon-alert"></i> Enjoy Our Hot Offers!</span>
                <span>Call for Free Estimate: +55 654 541 17</span>
              </span>
              <div class="d-flex">
                <ul class="contact__list d-flex flex-wrap align-items-center list-unstyled mb-0">
                  <li>
                    <i class="icon-email"></i>
                    <a href="#">
                      <span>Email: </span> <span>Clanora@7oroof.com</span>
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
                <a href="#" data-toggle="dropdown" class="dropdown-toggle nav__item-link">Home</a>
                <ul class="dropdown-menu">
                  <li class="nav__item">
                    <a href="index.html" class="nav__item-link">Home Modern</a>
                  </li><!-- /.nav-item -->
                  <li class="nav__item">
                    <a href="home-classic.html" class="nav__item-link">Home Classic</a>
                  </li><!-- /.nav-item -->
                 <!-- /.nav-item -->
                </ul><!-- /.dropdown-menu -->
              </li><!-- /.nav-item -->
              <li class="nav__item has-dropdown">
                <a href="#" data-toggle="dropdown" class="dropdown-toggle nav__item-link active">Company</a>
                <ul class="dropdown-menu">
                  <li class="nav__item">
                    <a href="about-us.html" class="nav__item-link">About Us</a>
                  </li><!-- /.nav-item -->
                  <li class="nav__item">
                    <a href="how-it-works.html" class="nav__item-link">How It Works</a>
                  </li><!-- /.nav-item -->
                  <li class="nav__item">
                    <a href="team.html" class="nav__item-link">Leadership Team</a>
                  </li><!-- /.nav-item -->
                  <li class="nav__item">
                    <a href="awards.html" class="nav__item-link">Awards & Recognition</a>
                  </li><!-- /.nav-item -->
                  <li class="nav__item">
                    <a href="locations.html" class="nav__item-link">Our Locations</a>
                  </li><!-- /.nav-item -->
                  <li class="nav__item">
                    <a href="faqs.html" class="nav__item-link">Help & FAQs</a>
                  </li> <!-- /.nav-item -->
                  <li class="nav__item">
                    <a href="gallery.html" class="nav__item-link">Our Gallery</a>
                  </li><!-- /.nav-item -->
                 <!-- /.nav-item -->
                </ul><!-- /.dropdown-menu -->
              </li><!-- /.nav-item -->
              <li class="nav__item has-dropdown">
                <a href="#" data-toggle="dropdown" class="dropdown-toggle nav__item-link">Services</a>
                <ul class="dropdown-menu wide-dropdown-menu">
                  <li class="nav__item">
                    <div class="row mx-0">
                      <div class="col-sm-6 dropdown-menu-col">
                        <a href="services.html" class="nav__item-link dropdown-menu-title">Services</a>
                        <ul class="nav flex-column">
                          <li class="nav__item">
                            <a class="nav__item-link" href="services-single.html">One Time Cleaning</a>
                          </li> <!-- /.nav-item -->
                          <li class="nav__item">
                            <a class="nav__item-link" href="services-single.html">Recurring Cleaning</a>
                          </li> <!-- /.nav-item -->
                          <li class="nav__item">
                            <a class="nav__item-link" href="services-single.html">Move Out-In Cleaning</a>
                          </li> <!-- /.nav-item -->
                          <li class="nav__item">
                            <a class="nav__item-link" href="services-single.html">Apartment Cleaning</a>
                          </li> <!-- /.nav-item -->
                          <li class="nav__item">
                            <a class="nav__item-link" href="services-single.html">Window Cleaning</a>
                          </li> <!-- /.nav-item -->
                          <li class="nav__item">
                            <a class="nav__item-link" href="services-single.html">Carpet Cleaning</a>
                          </li> <!-- /.nav-item -->
                        </ul>
                      </div><!-- /.col-sm-6 -->
                      <div class="col-sm-6 dropdown-menu-col">
                        <a href="industries.html" class="nav__item-link dropdown-menu-title">Industries</a>
                        <ul class="nav flex-column">
                          <li class="nav__item">
                            <a class="nav__item-link" href="industries-single.html">Manufacturing
                              Facilities</a>
                          </li> <!-- /.nav-item -->
                          <li class="nav__item">
                            <a class="nav__item-link" href="industries-single.html">Government buildings</a>
                          </li> <!-- /.nav-item -->
                          <li class="nav__item">
                            <a class="nav__item-link" href="industries-single.html">Educational Facilities</a>
                          </li> <!-- /.nav-item -->
                          <li class="nav__item">
                            <a class="nav__item-link" href="industries-single.html">Financial Institutions</a>
                          </li> <!-- /.nav-item -->
                          <li class="nav__item">
                            <a class="nav__item-link" href="industries-single.html">Medical Facilities</a>
                          </li> <!-- /.nav-item -->
                          <li class="nav__item">
                            <a class="nav__item-link" href="industries-single.html">Office Buildings</a>
                          </li> <!-- /.nav-item -->
                          <!-- /.nav-item -->
                        </ul>
                      </div><!-- /.col-sm-6 -->
                    </div><!-- /.row -->
                  </li><!-- /.nav-item -->
                </ul>
              </li><!-- /.nav-item -->
              <li class="nav__item has-dropdown">
                <a href="#" data-toggle="dropdown" class="dropdown-toggle nav__item-link">Pricing</a>
                <ul class="dropdown-menu">
                  <li class="nav__item">
                    <a href="pricing.html" class="nav__item-link">our Pricing</a>
                  </li><!-- /.nav-item -->
                  <li class="nav__item">
                    <a href="pricing-offers.html" class="nav__item-link">Special Offers</a>
                  </li><!-- /.nav-item -->
                  <li class="nav__item">
                    <a href="request-estimate.html" class="nav__item-link">Request An Estimate</a>
                  </li><!-- /.nav-item -->
                </ul><!-- /.dropdown-menu -->
              </li><!-- /.nav-item -->
              <li class="nav__item has-dropdown">
                <a href="#" data-toggle="dropdown" class="dropdown-toggle nav__item-link">News</a>
                <ul class="dropdown-menu">
                  <li class="nav__item">
                    <a href="blog.html" class="nav__item-link">Blog Grid</a>
                  </li><!-- /.nav-item -->
                  <li class="nav__item">
                    <a href="blog-single-post.html" class="nav__item-link">Single Blog Post</a>
                  </li><!-- /.nav-item -->
                </ul><!-- /.dropdown-menu -->
              </li><!-- /.nav-item -->
              <li class="nav__item has-dropdown">
                <a href="#" data-toggle="dropdown" class="dropdown-toggle nav__item-link">Shop</a>
                <ul class="dropdown-menu">
                  <li class="nav__item">
                    <a href="shop.html" class="nav__item-link">Shop Products</a>
                  </li><!-- /.nav-item -->
                  <li class="nav__item">
                    <a href="shop-single-product.html" class="nav__item-link">Single Product</a>
                  </li><!-- /.nav-item -->
                  <li class="nav__item">
                    <a href="shopping-cart.html" class="nav__item-link">Cart</a>
                  </li><!-- /.nav-item -->
                </ul><!-- /.dropdown-menu -->
              </li><!-- /.nav-item -->
              <li class="nav__item">
                <a href="contact-us.html" class="nav__item-link">Contact Us</a>
              </li><!-- /.nav-item -->
            </ul><!-- /.navbar-nav -->
            <div class="position-relative">
              <a href="#" class="action__btn action__btn-cart">
                <span>Cart</span> <i class="icon-cart"></i><span class="cart__counter">3</span>
              </a>
              <div class="cart-minipopup">
                <ul class="list-unstyled">
                  <li class="cart-item">
                    <div class="cart__img"><img src="{{asset('front')}}/assets/images/products/1.jpg" alt="thumb"></div>
                    <div class="cart__content">
                      <a class="cart__title" href="shop-single.html">Broom & Dustpan</a>
                      <span class="cart__price">$ 8.00</span>
                      <button class="cart__delete">&times;</button>
                    </div><!-- /.cart-item-content -->
                  </li><!-- /.cart-item -->
                  <li class="cart-item">
                    <div class="cart__img"><img src="{{asset('front')}}/assets/images/products/2.jpg" alt="thumb"></div>
                    <div class="cart__content">
                      <a class="cart__title" href="shop-single.html">Sponge Cleaner </a>
                      <span class="cart__price">$ 6.00</span>
                      <button class="cart__delete">&times;</button>
                    </div><!-- /.cart-item-content -->
                  </li><!-- /.cart-item -->
                </ul>
                <div class="cart-total">
                  <span>Total:</span>
                  <span>$14.00</span>
                </div><!-- /.cart-subtotal -->
                <a href="shopping-cart.html" class="btn btn__secondary btn__block">View Cart</a>
              </div><!-- /.cart-minipopup -->
            </div>
            <button class="close-mobile-menu d-block d-lg-none"><i class="fas fa-times"></i></button>
          </div><!-- /.navbar-collapse -->
          <ul class="navbar-actions d-none d-xl-flex align-items-center list-unstyled mb-0">
            <li><button class="action__btn-search"><i class="icon-search"></i></button></li>
            <li><a href="request-estimate.html" class="btn btn__primary action__btn-request">Request An Estimate </a>
            </li>
          </ul>
        </div><!-- /.container -->
      </nav><!-- /.navabr -->
    </header><!-- /.Header -->


















    <section class="page-title-layout1 page-title-light bg-overlay bg-parallax text-center">
        <div class="bg-img"><img src="{{asset('front')}}/assets/images/about/66.jpg" alt="background"></div>
        <div class="container">
          <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-12 col-xl-6 offset-xl-3">
              <h1 class="pagetitle__heading">About Us</h1>
              <p class="pagetitle__desc">We’ll take the time to discuss your preferences and priorities with you before
                your first home cleaning service and combine them with methods to provide the best clean possible by our
                residential housekeepers.
              </p>
              <div class="d-flex flex-wrap justify-content-center align-items-center">
                <a href="services" class="btn btn__white my-2 mx-3">
                  Our Services
                </a>
                {{-- <a href="request-estimate.html"
                  class="btn btn__white btn__outlined btn__lg justify-content-between my-2 mx-3">
                  <span>Request An Estimate</span>
                  <i class="icon-arrow-right"></i>
                </a> --}}
              </div>

            </div><!-- /.col-xl-6 -->
          </div><!-- /.row -->
        </div><!-- /.container -->
      </section><!-- /.page-title -->

















    <!-- ========================
       page title
    =========================== -->
    <section class="page-title-layout1 page-title-light bg-overlay bg-parallax text-center">
      <div class="bg-img"><img src="{{asset('front')}}/assets/images/page-titles/2.jpg" alt="background"></div>
      <div class="container">
        <div class="row">
          <div class="col-sm-12 col-md-12 col-lg-12 col-xl-6 offset-xl-3">
            <h1 class="pagetitle__heading">How It Works</h1>
            <p class="pagetitle__desc">We’ll take the time to discuss your preferences and priorities with you before
              your first home cleaning service and combine them with methods to provide the best clean possible by our
              residential housekeepers.
            </p>
            <div class="d-flex flex-wrap justify-content-center align-items-center">
              <a href="services.html" class="btn btn__white my-2 mx-3">
                Our Services
              </a>
              <a class="video__btn video__btn-white popup-video my-2 mx-3"
                href="https://www.youtube.com/watch?v=jwiIzNIK4dg">
                <div class="video__player">
                  <i class="fa fa-play"></i>
                </div>
                <span class="video__title color-white">Our Video!</span>
              </a>
            </div>
            <nav>
              <ol class="breadcrumb justify-content-center mb-0">
                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                <li class="breadcrumb-item"><a href="about-us.html">Company</a></li>
                <li class="breadcrumb-item active" aria-current="page">How It Works</li>
              </ol>
            </nav>
          </div><!-- /.col-xl-6 -->
        </div><!-- /.row -->
      </div><!-- /.container -->
    </section><!-- /.page-title -->

    <!-- ======================
     Work Process
    ========================= -->
    <section class="work-process-layout1">
      <div class="bg-img"><img src="{{asset('front')}}/assets/images/backgrounds/1.png" alt="background"></div>
      <div class="container">
        <div class="row">
          <div class="col-sm-12 col-md-12 col-lg-6 offset-lg-3">
            <div class="heading text-center mb-40">
              <h2 class="heading__subtitle">See How It Works!</h2>
              <h3 class="heading__title">Easy Steps For A Clean And <br> Healthy Environment</h3>
            </div><!-- /.heading -->
          </div><!-- /.col-lg-6 -->
        </div><!-- /.row -->
        <div class="row process-row">
          <!-- process item #1 -->
          <div class="col-sm-6 col-md-6 col-lg-3">
            <div class="process-item text-center">
              <div class="circle__icon"></div>
              <div class="check__icon">
                <i class="icon-checkmark"></i>
              </div>
              <h4 class="process__title">Provide Us With The Details</h4>
              <p class="process__desc">Just provide us the timing you want and we will set our schedule according to
                your need.</p>
              <div class="process__icon">
                <i class="icon-mop"></i>
              </div><!-- /.process__icon -->
            </div><!-- /.process-item -->
          </div><!-- /.col-lg-3 -->
          <!-- process item #2 -->
          <div class="col-sm-6 col-md-6 col-lg-3">
            <div class="process-item text-center">
              <div class="circle__icon"></div>
              <div class="check__icon">
                <i class="icon-checkmark"></i>
              </div>
              <h4 class="process__title">Pick The Suitable Plan For You</h4>
              <p class="process__desc">We come to you to inspect the area to prepare it for disinfection, and to take
                into concern.</p>
              <div class="process__icon">
                <i class="icon-sponge"></i>
              </div><!-- /.process__icon -->
            </div><!-- /.process-item -->
          </div><!-- /.col-lg-3 -->
          <!-- process item #3 -->
          <div class="col-sm-6 col-md-6 col-lg-3">
            <div class="process-item text-center">
              <div class="circle__icon"></div>
              <div class="check__icon">
                <i class="icon-checkmark"></i>
              </div>
              <h4 class="process__title">Online Scheduling In Few Clicks</h4>
              <p class="process__desc">We carry out the disinfection during couple of hours depending on house size and
                amount.</p>
              <div class="process__icon">
                <i class="icon-tap"></i>
              </div><!-- /.process__icon -->
            </div><!-- /.process-item -->
          </div><!-- /.col-lg-3 -->
          <!-- process item #4 -->
          <div class="col-sm-6 col-md-6 col-lg-3">
            <div class="process-item text-center">
              <div class="circle__icon"></div>
              <div class="check__icon">
                <i class="icon-checkmark"></i>
              </div>
              <h4 class="process__title">Cleaning With Care & leave quickly</h4>
              <p class="process__desc">We carry out the disinfection during couple of hours depending on house size and
                amount.</p>
              <div class="process__icon">
                <i class="icon-vacuum-cleaner"></i>
              </div><!-- /.process__icon -->
            </div><!-- /.process-item -->
          </div><!-- /.col-lg-3 -->
        </div><!-- /.row -->
        <div class="row">
          <div class="col-12 text-center">
            <p class="text__link mt-40 mb-0">Dedicated team of trained specialist.
              <a href="team.html" class="btn btn__secondary btn__link mx-1">
                <span>Meet Our Experts</span> <i class="icon-arrow-right"></i>
              </a>
            </p>
          </div><!-- /.col-12 -->
        </div><!-- /.row -->
      </div><!-- /.container -->
    </section><!-- /.Work Process -->

    <!-- ======================
     Clients
    ========================= -->
    <section class="clients pt-50 pb-50">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-sm-12 col-md-4 col-lg-4">
            <p class="font-weight-bold color-secondary my-3">
              Clanora’s trust ensures every service we offer will get your home cleaner and healthier, to your exact
              needs.
            </p>
          </div>
          <div class="col-sm-12 col-md-4 col-lg-8">
            <div class="slick-carousel"
              data-slick='{"slidesToShow": 4, "arrows": false, "dots": false, "autoplay": true,"autoplaySpeed": 2000, "infinite": true, "responsive": [ {"breakpoint": 992, "settings": {"slidesToShow": 3}}, {"breakpoint": 767, "settings": {"slidesToShow": 2}}, {"breakpoint": 480, "settings": {"slidesToShow": 2}}]}'>
              <div class="client">
                <img src="{{asset('front')}}/assets/images/clients/1.png" alt="client">
                <img src="{{asset('front')}}/assets/images/clients/1.png" alt="client">
              </div><!-- /.client -->
              <div class="client">
                <img src="{{asset('front')}}/assets/images/clients/2.png" alt="client">
                <img src="{{asset('front')}}/assets/images/clients/2.png" alt="client">
              </div><!-- /.client -->
              <div class="client">
                <img src="{{asset('front')}}/assets/images/clients/3.png" alt="client">
                <img src="{{asset('front')}}/assets/images/clients/3.png" alt="client">
              </div><!-- /.client -->
              <div class="client">
                <img src="{{asset('front')}}/assets/images/clients/4.png" alt="client">
                <img src="{{asset('front')}}/assets/images/clients/4.png" alt="client">
              </div><!-- /.client -->
              <div class="client">
                <img src="{{asset('front')}}/assets/images/clients/5.png" alt="client">
                <img src="{{asset('front')}}/assets/images/clients/5.png" alt="client">
              </div><!-- /.client -->
              <div class="client">
                <img src="{{asset('front')}}/assets/images/clients/6.png" alt="client">
                <img src="{{asset('front')}}/assets/images/clients/6.png" alt="client">
              </div><!-- /.client -->
              <div class="client">
                <img src="{{asset('front')}}/assets/images/clients/7.png" alt="client">
                <img src="{{asset('front')}}/assets/images/clients/7.png" alt="client">
              </div><!-- /.client -->
            </div><!-- /.carousel -->
          </div><!-- /.col-lg-6 -->
        </div><!-- /.row -->
      </div><!-- /.container -->
    </section><!-- /.Clients -->

    <!-- =========================
      Pricing
      =========================== -->
    <section class="pricing-layout3 pt-100 pb-100 bg-overlay bg-overlay-accent-gradient">
      <div class="bg-img"><img src="{{asset('front')}}/assets/images/banners/5.jpg" alt="banner"></div>
      <div class="container">
        <div class="row">
          <div class="col-12">
            <div class="tab-content">
              <div class="row">
                <div class="col-md-12 col-lg-6 offset-lg-6">
                  <nav class="nav nav-tabs justify-content-center">
                    <a class="nav__link" data-toggle="tab" href="#package1">
                      <div class="nav__icon">
                        <i class="icon-brush"></i>
                      </div>
                      <span>Residential</span>
                    </a>
                    <a class="nav__link active" data-toggle="tab" href="#package2">
                      <div class="nav__icon">
                        <i class="icon-glass-cleaning"></i>
                      </div>
                      <span>Commercial</span>
                    </a>
                    <a class="nav__link" data-toggle="tab" href="#package3">
                      <div class="nav__icon">
                        <i class="icon-hose"></i>
                      </div>
                      <span>Outdoor</span>
                    </a>
                  </nav>
                </div><!-- /.offset-lg-6 -->
              </div><!-- /.row -->
              <div class="tab-pane fade" id="package1">
                <div class="pricing-package p-0">
                  <div class="row row-gutter-0">
                    <div class="col-sm-12 col-md-12 col-lg-6 package__banner">
                      <div class="bg-img">
                        <img src="{{asset('front')}}/assets/images/pricing/banners/1.jpg" alt="bg">
                      </div>
                    </div><!-- /.col-md-6 -->
                    <div class="col-sm-12 col-md-12 col-lg-6">
                      <div class="package__body">
                        <div class="text-center">
                          <h5 class="package__title">Residential </h5>
                          <p class="package__desc">Providing Residential cleaning services which will help you protect
                            your
                            customers and employees, we care about clean and it shows in our work, our people, and also
                            in
                            our
                            commitment to delivering on our word, every day..</p>
                          <a href="pricing.html" class="btn btn__primary justify-content-between">
                            <span>Purchase Now</span>
                            <i class="icon-arrow-right"></i>
                          </a>
                        </div>
                        <ul class="package__list list-items list-items-layout2 list-horizontal list-unstyled">
                          <li>Manufacturing Facilities</li>
                          <li>Government buildings</li>
                          <li>Educational Facilities</li>
                          <li>Financial Institutions</li>
                          <li>Medical Facilities</li>
                          <li>Religious Building</li>
                        </ul>
                      </div><!-- /.package__body -->
                    </div><!-- /.col-md-6 -->
                  </div><!-- /.row -->
                </div><!-- /.pricing-package -->
              </div><!-- /.tab-pane -->
              <div class="tab-pane fade active show" id="package2">
                <div class="pricing-package p-0">
                  <div class="row row-gutter-0">
                    <div class="col-sm-12 col-md-12 col-lg-6 package__banner">
                      <div class="bg-img">
                        <img src="{{asset('front')}}/assets/images/pricing/banners/2.jpg" alt="bg">
                      </div>
                    </div><!-- /.col-md-6 -->
                    <div class="col-sm-12 col-md-12 col-lg-6">
                      <div class="package__body">
                        <div class="text-center">
                          <h5 class="package__title">Commercial </h5>
                          <p class="package__desc">Providing commercial cleaning services which will help you protect
                            your
                            customers and employees, we care about clean and it shows in our work, our people, and also
                            in
                            our
                            commitment to delivering on our word, every day..</p>
                          <a href="pricing.html" class="btn btn__primary justify-content-between">
                            <span>Purchase Now</span>
                            <i class="icon-arrow-right"></i>
                          </a>
                        </div>
                        <ul class="package__list list-items list-items-layout2 list-horizontal list-unstyled">
                          <li>Manufacturing Facilities</li>
                          <li>Government buildings</li>
                          <li>Educational Facilities</li>
                          <li>Financial Institutions</li>
                          <li>Medical Facilities</li>
                          <li>Religious Building</li>
                        </ul>
                      </div><!-- /.package__body -->
                    </div><!-- /.col-md-6 -->
                  </div><!-- /.row -->
                </div><!-- /.pricing-package -->
              </div><!-- /.tab-pane -->
              <div class="tab-pane fade" id="package3">
                <div class="pricing-package p-0">
                  <div class="row row-gutter-0">
                    <div class="col-sm-12 col-md-12 col-lg-6 package__banner">
                      <div class="bg-img">
                        <img src="{{asset('front')}}/assets/images/pricing/banners/3.jpg" alt="bg">
                      </div>
                    </div><!-- /.col-md-6 -->
                    <div class="col-sm-12 col-md-12 col-lg-6">
                      <div class="package__body">
                        <div class="text-center">
                          <h5 class="package__title">Outdoor </h5>
                          <p class="package__desc">Providing Outdoor cleaning services which will help you protect your
                            customers and employees, we care about clean and it shows in our work, our people, and also
                            in
                            our
                            commitment to delivering on our word, every day..</p>
                          <a href="pricing.html" class="btn btn__primary justify-content-between">
                            <span>Purchase Now</span>
                            <i class="icon-arrow-right"></i>
                          </a>
                        </div>
                        <ul class="package__list list-items list-items-layout2 list-horizontal list-unstyled">
                          <li>Manufacturing Facilities</li>
                          <li>Government buildings</li>
                          <li>Educational Facilities</li>
                          <li>Financial Institutions</li>
                          <li>Medical Facilities</li>
                          <li>Religious Building</li>
                        </ul>
                      </div><!-- /.package__body -->
                    </div><!-- /.col-md-6 -->
                  </div><!-- /.row -->
                </div><!-- /.pricing-package -->
              </div><!-- /.tab-pane -->
            </div><!-- /.tab-content -->
          </div><!-- /.col-lg-4 -->
        </div><!-- /.row -->
      </div><!-- /.container -->
    </section><!-- /.pricing  -->

    <!-- ========================
      feature-layout1
    ========================== -->
    <section class="feature-layout1">
      <div class="container">
        <div class="row">
          <div class="col-sm-12 col-md-12 col-lg-6 offset-lg-3">
            <div class="heading text-center">
              <h2 class="heading__subtitle">See Why Homeowners Like Us!</h2>
              <h3 class="heading__title mb-40">The Most Reliable Name in <br> Cleaning Business</h3>
            </div><!-- /heading -->
          </div><!-- /.col-lg-6 -->
        </div><!-- /.row -->
        <div class="row">
          <!-- feature item #1 -->
          <div class="col-sm-6 col-md-6 col-lg-3">
            <div class="feature-item">
              <div class="feature__body">
                <div class="feature__icon">
                  <i class="icon-hand-dryer"></i>
                </div><!-- /.feature__icon -->
                <h4 class="feature__title">Healthy Teams And Social Distance </h4>
                <p class="feature__desc">Our experts thoroughly trained and use proprietary cleaning and disinfecting
                  systems.</p>
                <a href="services.html" class="btn btn__secondary btn__link">
                  <i class="icon-arrow-right icon-outlined"></i>
                  <span>Read More</span>
                </a>
              </div><!-- /.feature__body -->
              <div class="feature__img">
                <img src="{{asset('front')}}/assets/images/features/1.jpg" alt="feature">
              </div><!-- /.feature__img -->
            </div><!-- /.feature-item -->
          </div><!-- /.col-lg-3 -->
          <!-- feature item #2 -->
          <div class="col-sm-6 col-md-6 col-lg-3">
            <div class="feature-item">
              <div class="feature__body">
                <div class="feature__icon">
                  <i class="icon-bucket"></i>
                </div><!-- /.feature__icon -->
                <h4 class="feature__title">Professional Grade Disinfectant </h4>
                <p class="feature__desc">Reduce cleaning time by about 25% while ensuring a spotless, disinfected
                  environment.</p>
                <a href="services.html" class="btn btn__secondary btn__link">
                  <i class="icon-arrow-right icon-outlined"></i>
                  <span>Read More</span>
                </a>
              </div><!-- /.feature__body -->
              <div class="feature__img">
                <img src="{{asset('front')}}/assets/images/features/2.jpg" alt="feature">
              </div><!-- /.feature__img -->
            </div><!-- /.feature-item -->
          </div><!-- /.col-lg-3 -->
          <!-- feature item #3 -->
          <div class="col-sm-6 col-md-6 col-lg-3">
            <div class="feature-item">
              <div class="feature__body">
                <div class="feature__icon">
                  <i class="icon-wet-floor"></i>
                </div><!-- /.feature__icon -->
                <h4 class="feature__title">Sterilized & Disinfected Cleaning Tools</h4>
                <p class="feature__desc">We'll familiarize ourselves with your facility and then create a customized
                  cleaning.</p>
                <a href="services.html" class="btn btn__secondary btn__link">
                  <i class="icon-arrow-right icon-outlined"></i>
                  <span>Read More</span>
                </a>
              </div><!-- /.feature__body -->
              <div class="feature__img">
                <img src="{{asset('front')}}/assets/images/features/3.jpg" alt="feature">
              </div><!-- /.feature__img -->
            </div><!-- /.feature-item -->
          </div><!-- /.col-lg-3 -->
          <!-- feature item #4 -->
          <div class="col-sm-6 col-md-6 col-lg-3">
            <div class="feature-item">
              <div class="feature__body">
                <div class="feature__icon">
                  <i class="icon-dusting"></i>
                </div><!-- /.feature__icon -->
                <h4 class="feature__title">100% Satisfaction Guarantee</h4>
                <p class="feature__desc">We offers a wide variety of services that can be customized to fit your </p>
                <a href="services.html" class="btn btn__secondary btn__link">
                  <i class="icon-arrow-right icon-outlined"></i>
                  <span>Read More</span>
                </a>
              </div><!-- /.feature__body -->
              <div class="feature__img">
                <img src="{{asset('front')}}/assets/images/features/4.jpg" alt="feature">
              </div><!-- /.feature__img -->
            </div><!-- /.feature-item -->
          </div><!-- /.col-lg-3 -->
        </div><!-- /.row -->
        <div class="row">
          <div class="col-sm-12 col-md-12 col-lg-6 offset-lg-3">
            <p class="text__link text-center mb-0">For a cleaning that meets your highest standards, you need a
              dedicated team of
              trained specialists. We arrive at each visit with all supplies needed to thoroughly clean your home with
              our extensive Cleaning Process.
              <a href="services.html" class="btn btn__secondary btn__link mx-1">
                <span>Contact Us For More Information</span> <i class="icon-arrow-right color-primary"></i>
              </a>
            </p>
          </div><!-- /.col-lg-6 -->
        </div><!-- /.row -->
      </div><!-- /.container -->
    </section><!-- /.feature-layout1 -->

    <!-- ==========================
        contact layout 2
    =========================== -->
    <section class="contact-layout2 bg-overlay bg-overlay-primary-gradient">
      <div class="bg-img"><img src="{{asset('front')}}/assets/images/banners/4.jpg" alt="banner"></div>
      <div class="container">
        <div class="row">
          <div class="col-sm-12 col-md-12 col-lg-7">
            <div class="contact-panel">
              <form class="contact-panel__form" method="post" action="{{asset('front')}}/assets/php/contact.php" id="contactForm">
                <div class="row">
                  <div class="col-sm-12">
                    <h4 class="contact-panel__title">Request An Estimate</h4>
                    <p class="contact-panel__desc mb-30">For a cleaning that meets your highest standards, you need a
                      dedicated team of trained specialists with all supplies needed to thoroughly clean your home.
                    </p>
                  </div>
                  <div class="col-sm-6 col-md-6 col-lg-6">
                    <div class="form-group">
                      <label for="service">Choose your service</label>
                      <select id="service" class="form-control">
                        <option>Coronavirus Cleaning</option>
                        <option>outdoor Cleaning</option>
                        <option>indoor Cleaning</option>
                      </select>
                    </div>
                  </div><!-- /.col-lg-6 -->
                  <div class="col-sm-6 col-md-6 col-lg-6">
                    <div class="form-group">
                      <label for="type">Indicate type of cleaning</label>
                      <select id="type" class="form-control">
                        <option>Weekly Regular</option>
                        <option>Monthly Regular</option>
                      </select>
                    </div>
                  </div><!-- /.col-lg-6 -->
                  <div class="col-sm-6 col-md-6 col-lg-6">
                    <div class="form-group">
                      <label for="facility">Facility type</label>
                      <select id="facility" class="form-control">
                        <option>Educational</option>
                        <option>Educational</option>
                      </select>
                    </div>
                  </div><!-- /.col-lg-6 -->
                  <div class="col-sm-6 col-md-6 col-lg-6">
                    <div class="form-group">
                      <label for="facilityName">Facility name</label>
                      <input type="text" class="form-control" placeholder="7oroof" id="facilityName">
                    </div>
                  </div><!-- /.col-lg-6 -->
                  <div class="col-sm-4">
                    <div class="form-group">
                      <label for="rooms">Room(s)?</label>
                      <div class="position-relative">
                        <button class="decrease-qty">
                          <i class="fas fa-caret-down"></i>
                        </button>
                        <input type="number" value="5" class="form-control input-number" id="rooms">
                        <button class="increase-qty">
                          <i class="fas fa-caret-up"></i>
                        </button>
                      </div>
                    </div>
                  </div><!-- /.col-lg-4 -->
                  <div class="col-sm-4">
                    <div class="form-group">
                      <label for="hallway">Hallway(s)? </label>
                      <div class="position-relative">
                        <button class="decrease-qty">
                          <i class="fas fa-caret-down"></i>
                        </button>
                        <input type="number" value="2" class="form-control input-number" id="hallway">
                        <button class="increase-qty">
                          <i class="fas fa-caret-up"></i>
                        </button>
                      </div>
                    </div>
                  </div><!-- /.col-lg-4 -->
                  <div class="col-sm-4">
                    <div class="form-group">
                      <label for="staircase">Staircase(s)?</label>
                      <div class="position-relative">
                        <button class="decrease-qty">
                          <i class="fas fa-caret-down"></i>
                        </button>
                        <input type="number" value="5" class="form-control input-number" id="staircase">
                        <button class="increase-qty">
                          <i class="fas fa-caret-up"></i>
                        </button>
                      </div>
                    </div>
                  </div><!-- /.col-lg-4 -->
                  <div class="col-12">
                    <div class="form-group">
                      <label>Do you have all the necessary cleaning supplies?</label>
                      <div>
                        <div class="custom-control custom-radio custom-control-inline">
                          <input type="radio" id="yes" name="radioGroup" class="custom-control-input" value="Yes"
                            checked>
                          <label class="custom-control-label" for="yes">Yes</label>
                        </div>
                        <div class="custom-control custom-radio custom-control-inline">
                          <input type="radio" id="no" name="radioGroup" class="custom-control-input" value="No">
                          <label class="custom-control-label" for="no">No</label>
                        </div>
                      </div>
                    </div>
                    <button type="submit"
                      class="btn btn__secondary btn__block btn__xhight d-flex justify-content-between mt-10">
                      <span>Submit Request</span> <i class="icon-arrow-right icon-outlined"></i>
                    </button>
                    <div class="contact-result"></div>
                  </div><!-- /.col-lg-12 -->
                </div><!-- /.row -->
              </form>
            </div>
          </div><!-- /.col-lg-7 -->
          <div class="col-sm-12 col-md-12 col-lg-5 d-flex flex-column justify-content-between">
            <div>
              <div class="heading-layout2 heading-light mb-40">
                <h2 class="heading__subtitle">We’re the Best Cleaning Company</h2>
                <h3 class="heading__title">Your Clients & Employees Deserve A Clean, Safe And Healthy Environment!!</h3>
                <p class="heading__desc">Hiring someone to clean your home can feel like a big decision as you want to
                  hire the best house cleaning service you can.</p>
              </div><!-- /.heading -->
              <div class="d-flex flex-wrap mb-70">
                <a href="services.html" class="btn btn__white mr-30">
                  <span>Explore More</span>
                  <i class="icon-arrow-right ml-20"></i>
                </a>
                <a href="shop.html" class="btn btn__white btn__outlined">Our Products</a>
              </div>
            </div>
            <div class="fancyboxs-layout1 fancybox-light">
              <div class="slick-carousel carousel-dots-light"
                data-slick='{"slidesToShow": 1, "arrows": false, "dots": true, "autoplay": false,"autoplaySpeed": 2000, "infinite": true}'>
                <div class="fancybox-item mb-0">
                  <div class="fancybox__icon">
                    <i class="icon-hanger"></i>
                  </div><!-- /.fancybox__icon -->
                  <div class="fancybox__body">
                    <h4 class="fancybox__title">Worry Free Services</h4>
                    <p class="fancybox__desc">We do everything we can to make our services as affordable as possible.
                      Our
                      budget flexibility extends all the way to employing the right amount of help at the right times to
                      make a positive difference in our customers’ lives and confidence in our services.
                    </p>
                  </div><!-- /.feature__body -->
                </div><!-- /.feature-item -->
                <div class="fancybox-item mb-0">
                  <div class="fancybox__icon">
                    <i class="icon-spray"></i>
                  </div><!-- /.fancybox__icon -->
                  <div class="fancybox__body">
                    <h4 class="fancybox__title">Trust & Affordability</h4>
                    <p class="fancybox__desc">We do everything we can to make our services as affordable as possible.
                      Our
                      budget flexibility extends all the way to employing the right amount of help at the right times to
                      make a positive difference in our customers’ lives and confidence in our services.
                    </p>
                  </div><!-- /.feature__body -->
                </div><!-- /.feature-item -->
              </div>
            </div>
          </div><!-- /.col-lg-5 -->
        </div><!-- /.row -->
      </div><!-- /.container -->
    </section><!-- /.contact layout 2 -->

    <!-- ======================
      Blog Grid
    ========================= -->
    <section class="blog-grid pb-60">
      <div class="container">
        <div class="row">
          <div class="col-sm-12 col-md-12 col-lg-6 offset-lg-3">
            <div class="heading text-center mb-40">
              <h2 class="heading__subtitle">Recent Articles</h2>
              <h3 class="heading__title">Tips, News & Updates</h3>
            </div><!-- /.heading -->
          </div><!-- /.col-lg-6 -->
        </div><!-- /.row -->
        <div class="row">
          <!-- Post Item #1 -->
          <div class="col-sm-12 col-md-6 col-lg-4">
            <div class="post-item">
              <div class="post__img">
                <a href="blog-single-post.html">
                  <img src="{{asset('front')}}/assets/images/blog/grid/1.jpg" alt="post image" loading="lazy">
                </a>
              </div><!-- /.post__img -->
              <div class="post__body">
                <div class="post__meta d-flex">
                  <div class="post__meta-cat">
                    <a href="#">Cleaning</a>
                    <a href="#">Tips</a>
                    <a href="#">Tricks</a>
                  </div><!-- /.blog-meta-cat -->
                  <span class="post__meta-date">Jan 30, 2022</span>
                </div>
                <h4 class="post__title"><a href="#">The Difference Between Bacterial and Viral Infections and How to
                    Avoid Them</a></h4>
                <div class="post__meta-author mb-30">By <a href="#">John Ezak</a></div>
                <p class="post__desc">While bacterial infections and viral infections are extremely common, both come
                  with their own particular set of mild and severe risks to reduce your facility's risk of exposure...
                </p>
                <a href="blog-single-post.html" class="btn btn__secondary btn__link">
                  <i class="icon-arrow-right"></i>
                  <span>Read More</span>
                </a>
              </div><!-- /.post__body -->
            </div><!-- /.post-item -->
          </div><!-- /.col-lg-4 -->
          <!-- Post Item #2 -->
          <div class="col-sm-12 col-md-6 col-lg-4">
            <div class="post-item">
              <div class="post__img">
                <a href="blog-single-post.html">
                  <img src="{{asset('front')}}/assets/images/blog/grid/2.jpg" alt="post image" loading="lazy">
                </a>
              </div><!-- /.post__img -->
              <div class="post__body">
                <div class="post__meta d-flex">
                  <div class="post__meta-cat">
                    <a href="#">Cleaning</a>
                    <a href="#">Disinfecting</a>
                  </div><!-- /.blog-meta-cat -->
                  <span class="post__meta-date">Jan 30, 2022</span>
                </div>
                <h4 class="post__title"><a href="#">Cleaning and Disinfecting Tips for Businesses Affected by
                    Coronavirus (COVID-19)</a></h4>
                <div class="post__meta-author mb-30">By <a href="#">Karl Barry</a></div>
                <p class="post__desc">Current data suggests that SARS-CoV-2, the virus that causes COVID-19, spreads
                  through respiratory droplets produced when infected person speaks, coughs, or
                </p>
                <a href="blog-single-post.html" class="btn btn__secondary btn__link">
                  <i class="icon-arrow-right"></i>
                  <span>Read More</span>
                </a>
              </div><!-- /.post__body -->
            </div><!-- /.post-item -->
          </div><!-- /.col-lg-4 -->
          <!-- Post Item #3 -->
          <div class="col-sm-12 col-md-6 col-lg-4">
            <div class="post-item">
              <div class="post__img">
                <a href="blog-single-post.html">
                  <img src="{{asset('front')}}/assets/images/blog/grid/3.jpg" alt="post image" loading="lazy">
                </a>
              </div><!-- /.post__img -->
              <div class="post__body">
                <div class="post__meta d-flex">
                  <div class="post__meta-cat">
                    <a href="#">Commercial</a>
                    <a href="#">Cleaning</a>
                  </div><!-- /.blog-meta-cat -->
                  <span class="post__meta-date">Jan 30, 2022</span>
                </div>
                <h4 class="post__title"><a href="#">Urethane Against Acrylic Treatments: Which is good for Your
                    Business</a></h4>
                <div class="post__meta-author mb-30">By <a href="#">Sophia Barry</a></div>
                <p class="post__desc">Commercial flooring helps your business shine. Easy to clean, safe work surface,
                  and affordable, commercial flooring can last for years if taken care of properly...
                </p>
                <a href="blog-single-post.html" class="btn btn__secondary btn__link">
                  <i class="icon-arrow-right"></i>
                  <span>Read More</span>
                </a>
              </div><!-- /.post__body -->
            </div><!-- /.post-item -->
          </div><!-- /.col-lg-4 -->
        </div><!-- /.row -->
      </div><!-- /.container -->
    </section><!-- /.blog Grid -->

    <!-- ========================
      Footer
    ========================== -->
    <footer class="footer">
      <div class="footer-primary">
        <div class="container">
          <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-3">
              <div class="footer-widget-contact">
                <h6 class="footer-widget__title">Quick Contacts</h6>
                <ul class="contact-list list-unstyled">
                  <li>If you have any questions or need help, feel free to contact with our team.</li>
                  <li>
                    <a href="tel:00201061245741" class="phone__number">
                      <i class="icon-phone"></i> <span>(002) 01061245741</span>
                    </a>
                  </li>
                  <li>2307 Beverley Rd Brooklyn, New York 11226 United States.</li>
                </ul>
                <a href="contact-us.html" class="btn btn__white btn__link mr-30">
                  <i class="fas fa-map-marker-alt"></i> <span>Get Directions</span>
                </a>
              </div><!-- /.footer-widget__content -->
            </div><!-- /.col-xl-2 -->
            <div class="col-sm-6 col-md-6 col-lg-2">
              <div class="footer-widget-nav">
                <h6 class="footer-widget__title">Company</h6>
                <nav>
                  <ul class="list-unstyled">
                    <li><a href="about-us.html">About Us</a></li>
                    <li><a href="team.html">Leadership Team</a></li>
                    <li><a href="blog.html">News & Media</a></li>
                    <li><a href="how-it-works.html">How it Works</a></li>
                    <li><a href="contact-us.html">Contacts</a></li>
                  </ul>
                </nav>
              </div><!-- /.footer-widget__content -->
            </div><!-- /.col-lg-2 -->
            <div class="col-sm-6 col-md-6 col-lg-2">
              <div class="footer-widget-nav">
                <h6 class="footer-widget__title">Services</h6>
                <nav>
                  <ul class="list-unstyled">
                    <li><a href="services-single.html">One Time Cleaning</a></li>
                    <li><a href="services-single.html">Recurring Cleaning</a></li>
                    <li><a href="services-single.html">Move Out-In Cleaning</a></li>
                    <li><a href="services-single.html">Apartment Cleaning</a></li>
                    <li><a href="services-single.html">Window Cleaning</a></li>
                    <li><a href="services-single.html">Carpet Cleaning</a></li>
                  </ul>
                </nav>
              </div><!-- /.footer-widget__content -->
            </div><!-- /.col-lg-2 -->
            <div class="col-sm-12 col-md-6 col-lg-4 offset-lg-1">
              <div class="footer-widget-newsletter">
                <img class="newsletter__stamp" src="{{asset('front')}}/assets/images/icons/stamp.png" alt="stamp">
                <h6 class="newsletter__title">Sign up for industry alerts, deals, news and insights from Clanora .</h6>
                <form class="newsletter__form">
                  <input type="text" class="form-control" placeholder="Your Email Address">
                  <button class="btn btn__secondary">Subscribe</button>
                </form>
              </div><!-- /.footer-widget__content -->
              <div class="d-flex justify-content-end">
                <p class="fz-14">Have a question? <a href="contact-us.html" class="underlined__link">Click here</a></p>
              </div>
            </div><!-- /.col-lg-2 -->
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
                  <span class="fz-14">&copy; 2022 Clanora, All Rights Reserved. With Love by </span>
                  <a class="fz-14 color-primary" href="http://themeforest.net/user/7oroof">7oroof.com</a>
                </div>
                <nav>
                  <ul class="list-unstyled footer__copyright-links d-flex flex-wrap mb-0">
                    <li><a href="#">Terms & Conditions</a></li>
                    <li><a href="#">Privacy Policy</a></li>
                    <li><a href="#">Cookies</a></li>
                  </ul>
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


