<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />
  <meta name="description" content="Clanora - Cleaning Services HTML5 Template">
  <link href="{{asset('front')}}/assets/images/favicon/favicon.png" rel="icon">
  <title>clean home</title>

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
                <span>Call : 01060499520</span>
              </span>
              <div class="d-flex">
                <ul class="contact__list d-flex flex-wrap align-items-center list-unstyled mb-0">
                  <li>
                    <i class="icon-email"></i>
                    <a href="#">
                      <span>Email: </span> <span> cleanhome@200.com
                    </span>
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
                  <!-- /.nav-item -->
                </ul><!-- /.dropdown-menu -->
              </li><!-- /.nav-item -->
              <li class="nav__item has-dropdown">
                <a href="#"  class="nav__item-link active">Services</a>
                <ul class="dropdown-menu wide-dropdown-menu">
                  <li class="nav__item">
                    <div class="row mx-0">
                     <!-- /.col-sm-6 -->
                      <!-- /.col-sm-6 -->
                    </div><!-- /.row -->
                  </li><!-- /.nav-item -->
                </ul>
              </li><!-- /.nav-item -->


              <li class="nav__item">
                <a href="contact" class="nav__item-link">Contact Us</a>
              </li><!-- /.nav-item -->
            </ul><!-- /.navbar-nav -->
            <div class="position-relative">

              <div class="cart-minipopup">
                <ul class="list-unstyled">
                  <li class="cart-item">
                    <div class="cart__img"><img src="{{asset('front')}}/assets/images/products/1.jpg" alt="thumb"></div>
                    <!-- /.cart-item-content -->
                  </li><!-- /.cart-item -->
                 <!-- /.cart-item -->
                </ul>


              </div><!-- /.cart-minipopup -->
            </div>

          </div><!-- /.navbar-collapse -->
          <ul class="navbar-actions d-none d-xl-flex align-items-center list-unstyled mb-0">
            <li><button class="action__btn-search"><i class="icon-search"></i></button></li>
            <li><a href="http://127.0.0.1:8000/login" class="btn btn__primary action__btn-request">login</a>
              {{-- <li><a href="request-estimate.html" class="btn btn__primary action__btn-request">cleanhome@200.com</a> --}}
            </li>
          </ul>
        </div><!-- /.container -->
      </nav><!-- /.navabr -->
    </header><!-- /.Header -->

    <!-- ========================
       page title
    =========================== -->
    <section class="page-title-layout3 page-title-light bg-overlay bg-parallax">
      <div class="bg-img"><img src="{{asset('front')}}/assets/images/page-titles/66.jpg" alt="background"></div>
      <div class="container">
        <div class="row">
          <div class="col-sm-12 col-md-12 col-lg-12 col-xl-6">
            <h1 class="pagetitle__heading">Industries</h1>
            <p class="pagetitle__desc">Hiring someone to clean your home can feel like a big decision as you want to
              hire the best house cleaning service you can. So, we gathered some details about professional cleaning
              franchises.</p>
            <div class="d-flex flex-wrap align-items-center">
              <a href="about" class="btn btn__accent justify-content-between my-2 mr-30">
                <span>Our Core Values</span>
                <i class="icon-arrow-right"></i>
              </a>

            </div>
          </div><!-- /.col-xl-6 -->
        </div><!-- /.row -->
      </div><!-- /.container -->
    </section><!-- /.page-title -->

    <!-- ======================
      Portfolio
    ========================= -->
    <section class="portfolio-layout1 pb-50">
      <div class="bg-img"><img src="{{asset('front')}}/assets/images/backgrounds/3.jpg" alt="background"></div>
      <div class="container">
        <div class="row">
          <div class="col-sm-12 col-md-12 col-lg-6 offset-lg-3">
            <div class="heading text-center mb-40">
              <h2 class="heading__subtitle">Industries We Serve </h2>
              <h3 class="heading__title">Helping Different Industries And All Types Of Facilities</h3>
            </div><!-- /.heading -->
          </div><!-- /.col-lg-6 -->
        </div><!-- /.row -->
        <div class="row">
          <!-- portfolio Item #1 -->
          <div class="col-sm-12 col-md-6 col-lg-4">
            <div class="portfolio-item">
              <div class="portfolio__img">
                <img src="{{asset('front')}}/assets/images/portfolio/1.jpg" alt="portfolio image" loading="lazy">
              </div><!-- /.portfolio__img -->
              <div class="portfolio__body">
                <h4 class="portfolio__title">Manufacturing Facilities</h4>
                <p class="portfolio__desc">We listen to your needs and respond with a customized plan specific to you,
                  scheduled to best fit your business operations...
                </p>

              </div><!-- /.portfolio__body -->
            </div><!-- /.portfolio-item -->
          </div><!-- /.col-lg-4 -->
          <!-- portfolio Item #2 -->
          <div class="col-sm-12 col-md-6 col-lg-4">
            <div class="portfolio-item">
              <div class="portfolio__img">
                <img src="{{asset('front')}}/assets/images/portfolio/e.jpg" alt="portfolio image" loading="lazy">
              </div><!-- /.portfolio__img -->
              <div class="portfolio__body">
                <h4 class="portfolio__title">Educational Facilities</h4>
                <p class="portfolio__desc">Our educational facility cleaning experts are backed by over six decades of
                  experience and understand the unique requirements of...
                </p>

              </div><!-- /.portfolio__body -->
            </div><!-- /.portfolio-item -->
          </div><!-- /.col-lg-4 -->
          <!-- portfolio Item #3 -->
          <div class="col-sm-12 col-md-6 col-lg-4">
            <div class="portfolio-item">
              <div class="portfolio__img">
                <img src="{{asset('front')}}/assets/images/portfolio/3.jpg" alt="portfolio image" loading="lazy">
              </div><!-- /.portfolio__img -->
              <div class="portfolio__body">
                <h4 class="portfolio__title">Medical Facilities</h4>
                <p class="portfolio__desc">Along with creating a clean, welcoming for each patient, our Patient-Centered
                  Cleaning Program is designed to help you exceed expectations...
                </p>

              </div><!-- /.portfolio__body -->
            </div><!-- /.portfolio-item -->
          </div><!-- /.col-lg-4 -->
          <!-- portfolio Item #4 -->
          <div class="col-sm-12 col-md-6 col-lg-4">
            <div class="portfolio-item">
              <div class="portfolio__img">
                <img src="{{asset('front')}}/assets/images/portfolio/f.jpg" alt="portfolio image" loading="lazy">
              </div><!-- /.portfolio__img -->
              <div class="portfolio__body">
                <h4 class="portfolio__title">Financial Institutions</h4>
                <p class="portfolio__desc">As for our cleaning products, we use green cleaners that are effective
                  without leaving behind any bothersome odors. We will also make sure that we use the appropriate
                  cleaners and methods for sensitive areas of your facility.
                </p>

              </div><!-- /.portfolio__body -->
            </div><!-- /.portfolio-item -->
          </div><!-- /.col-lg-4 -->
          <!-- portfolio Item #5 -->
          <div class="col-sm-12 col-md-6 col-lg-4">
            <div class="portfolio-item">
              <div class="portfolio__img">
                <img src="{{asset('front')}}/assets/images/portfolio/g.jpg" alt="portfolio image" loading="lazy">
              </div><!-- /.portfolio__img -->
              <div class="portfolio__body">
                <h4 class="portfolio__title">Government Buildings</h4>
                <p class="portfolio__desc">With our highly skilled, experienced cleaning technicians, you can be sure
                  your place of worship is in the best hands to keep it beautiful and welcoming.
                </p>
                <a href="portfolio-single.html" class="btn btn__primary btn__link">
                  <i class="icon-arrow-right icon-filled"></i>
                  <span>Read More</span>
                </a>
              </div><!-- /.portfolio__body -->
            </div><!-- /.portfolio-item -->
          </div><!-- /.col-lg-4 -->
          <!-- portfolio Item #6 -->
          <div class="col-sm-12 col-md-6 col-lg-4">
            <div class="portfolio-item">
              <div class="portfolio__img">
                <img src="{{asset('front')}}/assets/images/portfolio/f.jpg" alt="portfolio image" loading="lazy">
              </div><!-- /.portfolio__img -->
              <div class="portfolio__body">
                <h4 class="portfolio__title">Religious Building</h4>
                <p class="portfolio__desc">We’ll work with you to fully understand needs, accommodate any special
                  requests and avoid any areas that you indicate.
                </p>
                <a href="portfolio-single.html" class="btn btn__primary btn__link">
                  <i class="icon-arrow-right icon-filled"></i>
                  <span>Read More</span>
                </a>
              </div><!-- /.portfolio__body -->
            </div><!-- /.portfolio-item -->
          </div><!-- /.col-lg-4 -->
        </div><!-- /.row -->
        <div class="row">
          <div class="col-sm-12 col-md-12 col-lg-6 offset-lg-3">
            <p class="text__link text-center mt-20 mb-0">For a cleaning that meets your highest standards, you need a
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
    </section><!-- /.portfolio -->

    <!-- ==========================
        contact layout 3
    =========================== -->


    <form class="contact-panel__form" method="post" action="{{asset('front')}}/assets/php/home.php" id="contactForm">
        <div class="row">

          <div class="col-sm-6 col-md-6 col-lg-6">
            <div class="error">
                @if ($errors->any())
                @foreach ($errors->all() as $error)
                <div class="alert alert-danger p-1 my-1">{{$error}}</div>
                @endforeach
                @endif
                <div class="success">
                    @if(session('success')!=null)
                    <div class="alert alert-success">{{session('seccess')}}</div>
                    @endif
                </div>
            </div>



        </div>
      </form>
      <div
        class="contact-panel__info d-flex flex-column justify-content-between bg-overlay bg-overlay-primary-gradient">
        <div class="bg-img"><img src="{{asset('front')}}/assets/images/banners/2.jpg" alt="banner"></div>
        @csrf
      </div>
</div>

    <section class="contact-layout3 bg-overlay bg-overlay-secondary-gradient">
        <div class="bg-img"><img src="{{asset('front')}}/assets/images/banners/6.jpg" alt="banner"></div>
        <div class="container">
          <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-12 col-xl-5 d-flex flex-column justify-content-between">
              <div>
                <div class="heading-layout2 heading-light mb-40">
                  <h3 class="heading__title">Take your time back and sign up for house cleaning with the best cleaning experts.</h3>
                  <p class="heading__desc">Hiring someone to clean your home can feel like a big decision as you want to
                    hire the best house cleaning service you can. So, we gathered some details about professional cleaning
                    franchises to help you!</p>
                </div><!-- /.heading -->
                <div class="d-flex align-items-center flex-wrap mb-70">
                  <a href="contact" class="btn btn__white mr-30">
                    <span>Schedule A Visit</span>
                    <i class="icon-arrow-right ml-20"></i>
                  </a>
                  <a href="tel:00201061245741" class="phone__number d-flex align-items-center">
                    <img src="{{asset('front')}}/assets/images/icons/phone.png" alt="phone">
                    <div class="ml-20">
                      <span class="color-white d-block">01060499520</span>
                      <span class="color-white fz-14 font-weight-normal">Call 24HR / 7Days</span>
                    </div>
                  </a>
                </div>
              </div>

            </div><!-- /.col-lg-5 -->


  {{--  --}}

            <div class="col-sm-12 col-md-12 col-lg-12 col-xl-7">
              <div class="contact-panel">
                <div class="contact-panel__header  bg-overlay bg-overlay-accent-gradient">
                  <div class="bg-img"><img src="{{asset('front')}}/assets/images/banners/4.jpg" alt="banner"></div>
                  <h4 class="contact-panel__title mb-0">Request An Estimate</h4>
                </div>
                <form class="contact-panel__form" method="POST" action="{{ route('front.home.sendMessagee')}}" id="contactForm">
                  <div class="error">
                      @if ($errors->any())
                      @foreach ($errors->all() as $error)
                      <div class="alert alert-danger p-1 my-1">{{$error}}</div>
                      @endforeach
                      @endif
                      <div class="success">
                          @if(session('success')!=null)
                          <div class="alert alert-success">{{session('seccess')}}</div>
                          @endif
                      </div>
                  </div>
                  @csrf
                  <div class="row">
                    <div class="col-sm-6 col-md-6 col-lg-6">
                      <div class="form-group">
                        <label for="service">Choose your service</label>
                        <select id="service" name="service" class="form-control">
                          <option>Coronavirus Cleaning</option>
                          <option>outdoor Cleaning</option>
                          <option>indoor Cleaning</option>
                        </select>
                      </div>
                    </div><!-- /.col-lg-6 -->
                    <div class="col-sm-6 col-md-6 col-lg-6">
                      <div class="form-group">
                        <label for="type">Indicate type of cleaning</label>
                        <select id="type" name="indicate" class="form-control">
                          <option>Weekly Regular</option>
                          <option>Monthly Regular</option>
                        </select>
                      </div>
                    </div><!-- /.col-lg-6 -->
                    <div class="col-sm-6 col-md-6 col-lg-6">
                      <div class="form-group">
                        <label for="facility">Facility type</label>
                        <select id="facility" name="facility"  class="form-control">
                          <option>Educational</option>
                          <option>Mosques</option>
                          <option>Home</option>
                          <option> Medical Facilities</option>
                          Medical Facilities
                        </select>
                      </div>
                    </div><!-- /.col-lg-6 -->
                    <div class="col-sm-6 col-md-6 col-lg-6">
                      <div class="form-group">
                        <label for="facilityName">Facility name</label>
                        <input type="text" class="form-control" name="facilityName"  placeholder="name" id="facilityName">
                      </div>
                    </div><!-- /.col-lg-6 -->
                    <div class="col-sm-4">
                      <div class="form-group">
                        <label for="rooms">Room(s)?</label>
                        <div class="position-relative">
                          <button class="decrease-qty">
                            <i class="fas fa-caret-down"></i>
                          </button>
                          <input type="number" value="5"  name="room" class="form-control input-number" id="rooms">
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
                          <input type="number" value="2" name="hallway" class="form-control input-number" id="hallway">
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
                          <input type="number" value="5"  name="staircase"  class="form-control input-number" id="staircase">
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

  {{--  --}}


              </div>
            </div><!-- /.col-lg-7 -->
          </div><!-- /.row -->
        </div><!-- /.container -->
      </section><!-- /.contact layout 3 -->




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



    <!-- ========================
      Footer
    ========================== -->
    <footer class="footer">
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
                    <li><a href="service">News & Media</a></li>
                    <li><a href="gallery">our gallery</a></li>
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
