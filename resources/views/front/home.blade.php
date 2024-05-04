@extends('front.layouts.app')
@section('content')



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
                  <a href="#"  class="nav__item-link active">Home</a>

                </li><!-- /.nav-item -->
                {{-- <li class="nav__item has-dropdown">
                    <a href="#" data-toggle="dropdown" class="dropdown-toggle nav__item-link active">Home</a>

                  </li> --}}
                <li class="nav__item has-dropdown">
                  <a href="#" data-toggle="dropdown" class="dropdown-toggle nav__item-link">Company</a>
                  <ul class="dropdown-menu">
                    <li class="nav__item">
                      <a href="about" class="nav__item-link" href="{{route('front.contact')}}">About Us</a>
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
                  <a href="service"  class="nav__item-link">Services</a>
                  <ul class="dropdown-menu wide-dropdown-menu">
                    <li class="nav__item">

                    </li><!-- /.nav-item -->
                  </ul>
                </li><!-- /.nav-item -->
             <!-- /.nav-item -->
                {{-- <li class="nav__item has-dropdown">
                  <a href="#" data-toggle="dropdown" class="dropdown-toggle nav__item-link">News</a>
                  <ul class="dropdown-menu">
                    <li class="nav__item">
                      <a href="blog.html" class="nav__item-link">Blog Grid</a> --}}
                    {{-- </li> --}}
                    <!-- /.nav-item -->
                    {{-- <li class="nav__item">
                      <a href="blog-single-post.html" class="nav__item-link">Single Blog Post</a> --}}
                    {{-- </li><!-- /.nav-item --> --}}
                  {{-- </ul><!-- /.dropdown-menu --> --}}
                {{-- </li><!-- /.nav-item --> --}}
                {{-- <li class="nav__item has-dropdown">
                  <a href="#" data-toggle="dropdown" class="dropdown-toggle nav__item-link">Shop</a>
                  <ul class="dropdown-menu">
                    <li class="nav__item">
                      <a href="shop.html" class="nav__item-link">Shop Products</a>
                    </li> --}}
                    <!-- /.nav-item -->
                    {{-- <li class="nav__item">
                      <a href="shop-single-product.html" class="nav__item-link">Single Product</a>
                    </li> --}}
                    <!-- /.nav-item -->
                    {{-- <li class="nav__item">
                      <a href="shopping-cart.html" class="nav__item-link">Cart</a>
                    </li> --}}
                    <!-- /.nav-item -->
                  {{-- </ul> --}}
                  <!-- /.dropdown-menu -->
                {{-- </li> --}}
                <!-- /.nav-item -->
                <li class="nav__item">
                  <a href="contact" class="nav__item-link" href="{{route('front.contact')}}">Contact Us</a>
                </li><!-- /.nav-item -->
              </ul><!-- /.navbar-nav -->
              <ul class="navbar-actions d-none d-xl-flex align-items-center list-unstyled mb-0">
                <li><button class="action__btn-search"><i class="icon-search"></i></button></li>
                <li><a href="http://127.0.0.1:8000/home" class="btn btn__primary action__btn-request">login </a>
                </li>
              </ul>
              <button class="close-mobile-menu d-block d-lg-none"><i class="fas fa-times"></i></button>
            </div><!-- /.navbar-collapse -->

          </div><!-- /.container -->
        </nav><!-- /.navabr -->
      </header><!-- /.Header -->
 +
    <section class="slider">
      <div class="slick-carousel carousel-arrows-light carousel-dots-light m-slides-0"
        data-slick='{"slidesToShow": 1, "arrows": true, "dots": true, "speed": 700,"fade": true,"cssEase": "linear"}'>
        <div class="slide-item bg-overlay align-v-h">
          <div class="bg-img"><img src="{{asset('front')}}/assets/images/sliders/1.jpg" alt="slide img"></div>
          <div class="container">
            <div class="row align-items-center">
              <div class="col-sm-12 col-md-12 col-lg-12 col-xl-7">
                <div class="slide__content">
                  <h2 class="slide__title">Providing Quality Janitorial & Cleaning Services For People.</h2>
                  <p class="slide__desc">Our cleaning experts deliver the highest quality of clean you can always count,
                    let us help you with all of your cleaning and disinfecting responsibilities now.
                  </p>
                  <div class="d-flex flex-wrap align-items-center">
                    <a href="about" class="btn btn__accent mr-30">
                      <span>More About Us</span>
                      <i class="icon-arrow-right"></i>
                    </a>
                    <a href="service" class="btn btn__white">
                      our services
                    </a>
                  </div>
                </div><!-- /.slide-content -->
              </div><!-- /.col-xl-7 -->
            </div><!-- /.row -->
          </div><!-- /.container -->
        </div><!-- /.slide-item -->
        <div class="slide-item bg-overlay align-v-h">
          <div class="bg-img"><img src="{{asset('front')}}/assets/images/sliders/5.jpg" alt="slide img"></div>
          <div class="container">
            <div class="row align-items-center">
              <div class="col-sm-12 col-md-12 col-lg-12 col-xl-7">
                <div class="slide__content">
                  <h2 class="slide__title">Highest Standards Of Clean & Guarantee to You.</h2>
                  <p class="slide__desc">Our cleaning experts deliver the highest quality of clean you can always count,
                    let us help you with all of your cleaning and disinfecting responsibilities now.
                  </p>
                  <div class="d-flex flex-wrap align-items-center">
                    <a href="about" class="btn btn__accent mr-30">
                      <span>More About Us</span>
                      <i class="icon-arrow-right"></i>
                    </a>
                    <a href="service" class="btn btn__white">
                      our services
                    </a>
                  </div>
                </div><!-- /.slide-content -->
              </div><!-- /.col-xl-7 -->
            </div><!-- /.row -->
          </div><!-- /.container -->
        </div><!-- /.slide-item -->
      </div><!-- /.carousel -->
      <div class="container position-relative">
        <div class="fancybox-item mb-0 d-none">
          <div class="fancybox__icon">
            <i class="icon-sanitary"></i>
          </div>
          <h2 class="fancybox__title">Delivering the highest standards of clean and guarantee to treat your home and
            office.
          </h2>
        </div><!-- /.fancybox-item -->
      </div>
    </section><!-- /.slider -->

    <!-- ========================
      About Layout 1
    =========================== -->
    <section class="about-layout1 pt-130 pb-120">
      <div class="container">
        <div class="row">
          <div class="col-sm-12 col-md-12 col-lg-7 col-xl-6">
            <div class="row">
              <div class="col-12">
                <div class="heading-layout2">
                  <h2 class="heading__subtitle">The Most Reliable Name in Cleaning Business</h2>
                  <h3 class="heading__title mb-40">Trusted Cleaning Professionals For The Highest Quality Clean You Can
                    Always Count On!</h3>
                </div><!-- /heading -->
              </div>
              <div class="col-sm-12 col-md-2">
                <div class="about__icon">
                  <i class="icon-bucket"></i>
                </div>
              </div><!-- /.col-sm-2 -->
              <div class="col-sm-12 col-md-10">
                <div class="about__Text">
                  <p class="mb-20">We work closely with clients in finding the most cost effective solutions while still
                    providing a level of service that will produce a clean, healthy work environment as well as one that
                    protects the capital investment you have made in your facility. </p>
                  <div class="d-flex align-items-center mb-40">
                    <a href="contact" class="btn btn__primary mr-30">
                      <span>Contact Us</span>
                      <i class="icon-arrow-right ml-20"></i>
                    </a>
                    <img src="{{asset('front')}}/assets/images/about/singnture.png" alt="singnture">
                  </div>
                </div>
                <ul class="list-items list-items-layout2 list-horizontal list-unstyled">
                  <li>100% satisfaction guarantee</li>
                  <li>Customized cleaning plans</li>
                  <li>Desensitisation injections</li>
                  <li>Bonded and insured</li>
                  <li>Natural cleaning products</li>
                </ul>
              </div><!-- /.col-sm-10 -->
            </div><!-- /.row -->
          </div><!-- /.col-xl-6 -->
          <div class="col-sm-12 col-md-12 col-lg-5 col-xl-5 offset-xl-1">
            <div class="about__img">
              <img src="{{asset('front')}}/assets/images/about/3.jpg" alt="about">
              <div class="rating">
                <div class="rating__icon">

                </div><!-- /.rating__icon -->
                <div class="rating__text">
                  <span class="rating__percentage">97%</span>
                  <span>Customer Rating</span>
                </div><!-- /.rating__text -->
              </div><!-- /.rating -->
              <div class="cta__banner">
                <div class="slick-carousel"
                  data-slick='{"slidesToShow": 1, "slidesToScroll": 1, "arrows": false, "dots": true}'>
                  <div>
                    <div class="cta__icon">
                      <i class="icon-soap"></i>
                    </div>
                    <p class="cta__desc">Our housekeepers will always arrive with your customized cleaning plan in hand
                      to help.
                    </p>
                  </div>
                  <div>
                    <div class="cta__icon">
                      <i class="icon-wet-floor"></i>
                    </div>
                    <p class="cta__desc">We proudly offer our proprietary Capture and Cleaning system, which works
                      better.
                    </p>
                  </div>
                </div><!-- /.slick-carousel -->
              </div><!-- /.cta__banner -->
            </div><!-- /.about__img -->
          </div><!-- /.col-xl-5 -->
        </div><!-- /.row -->
      </div><!-- /.container -->
    </section><!-- /.About Layout 1 -->






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



    <!-- ========================
        Services Layout 1
    =========================== -->
    <section class="services-layout1 services-carousel pt-130 pb-60">
      <div class="bg-img"><img src="{{asset('front')}}/assets/images/backgrounds/3.jpg" alt="background"></div>
      <div class="container">
        <div class="row">
          <div class="col-sm-12 col-md-12 col-lg-6 offset-lg-3">
            <div class="heading text-center mb-60">
              <h2 class="heading__subtitle">Cleaning Plans FOr Your Needs</h2>
              <h3 class="heading__title">Specialist Disinfection Services That Fits Your Premises</h3>
            </div><!-- /.heading -->
          </div><!-- /.col-lg-6 -->
        </div><!-- /.row -->
        <div class="row">
          <div class="col-12">
            <div class="slick-carousel"
              data-slick='{"slidesToShow": 3, "slidesToScroll": 3, "autoplay": false, "arrows": false, "dots": true, "responsive": [ {"breakpoint": 992, "settings": {"slidesToShow": 2,"slidesToScroll": 2}}, {"breakpoint": 767, "settings": {"slidesToShow": 1,"slidesToScroll": 1}}, {"breakpoint": 480, "settings": {"slidesToShow": 1,"slidesToScroll": 1}}]}'>
              <!-- service item #1 -->
              <div class="service-item">
                <div class="service__overlay">
                  <div class="bg-img">
                    <img src="{{asset('front')}}/assets/images/services/1.jpg" alt="service">
                  </div>
                </div><!-- /.service__overlay -->
                <div class="service__body">
                  <div class="service__icon">
                    <i class="icon-house"></i>
                  </div><!-- /.service__icon -->
                  <h4 class="service__title">Occasional & One Time Cleaning Service</h4>
                  <p class="service__desc">We have a custom cleaning service designed to help you clean when you need
                    it,
                    whether we clean one time or on regular, your house will always sparkle clean
                  </p>
                  <a href="service" class="btn btn__secondary btn__block d-flex justify-content-between">
                    <span>Read More</span>
                    <i class="icon-arrow-right icon-outlined"></i>
                  </a>
                </div><!-- /.service__body -->
              </div><!-- /.service-item -->
              <!-- service item #2 -->
              <div class="service-item">
                <div class="service__overlay">
                  <div class="bg-img">
                    <img src="{{asset('front')}}/assets/images/services/2.jpg" alt="service">
                  </div>
                </div><!-- /.service__overlay -->
                <div class="service__body">
                  <div class="service__icon">
                    <i class="icon-maid"></i>
                  </div><!-- /.service__icon -->
                  <h4 class="service__title">Recurring & Ongoing Cleaning Service</h4>
                  <p class="service__desc">With recurring service you will never have to worry about the unexpected and
                    your home will be clean and ready, recurring service will get your home tidy so you enjoy your...
                  </p>
                  <a href="service" class="btn btn__secondary btn__block d-flex justify-content-between">
                    <span>Read More</span>
                    <i class="icon-arrow-right icon-outlined"></i>
                  </a>
                </div><!-- /.service__body -->
              </div><!-- /.service-item -->
              <!-- service item #3 -->
              <div class="service-item">
                <div class="service__overlay">
                  <div class="bg-img">
                    <img src="{{asset('front')}}/assets/images/services/3.jpg" alt="service">
                  </div>
                </div><!-- /.service__overlay -->
                <div class="service__body">
                  <div class="service__icon">
                    <i class="icon-wipe"></i>
                  </div><!-- /.service__icon -->
                  <h4 class="service__title">Move Out & Move In Cleaning Service</h4>
                  <p class="service__desc">We offer flexible move in and move out cleaning services to ease the
                    transition
                    into your new space, whether you need the entire house cleaned or just certain items on it.
                  </p>
                  <a href="service" class="btn btn__secondary btn__block d-flex justify-content-between">
                    <span>Read More</span>
                    <i class="icon-arrow-right icon-outlined"></i>
                  </a>
                </div><!-- /.service__body -->
              </div><!-- /.service-item -->
              <!-- service item #4 -->
              <div class="service-item">
                <div class="service__overlay">
                  <div class="bg-img">
                    <img src="{{asset('front')}}/assets/images/services/4.jpg" alt="service">
                  </div>
                </div><!-- /.service__overlay -->
                <div class="service__body">
                  <div class="service__icon">
                    <i class="icon-dusting"></i>
                  </div><!-- /.service__icon -->
                  <h4 class="service__title">Professional Apartment Cleaning Service</h4>
                  <p class="service__desc">While residential service may seem like a luxury, when you think about the
                    advantages, you may realize cleaning services are a great investment return on your investment.
                  </p>
                  <a href="service" class="btn btn__secondary btn__block d-flex justify-content-between">
                    <span>Read More</span>
                    <i class="icon-arrow-right icon-outlined"></i>
                  </a>
                </div><!-- /.service__body -->
              </div><!-- /.service-item -->
              <!-- service item #5 -->
              <div class="service-item">
                <div class="service__overlay">
                  <div class="bg-img">
                    <img src="{{asset('front')}}/assets/images/services/5.jpg" alt="service">
                  </div>
                </div><!-- /.service__overlay -->
                <div class="service__body">
                  <div class="service__icon">
                    <i class="icon-glass-cleaning"></i>
                  </div><!-- /.service__icon -->
                  <h4 class="service__title">Residential Window Cleaning Services</h4>
                  <p class="service__desc">If you've ever tackled cleaning your home's windows, you know how time
                    consuming it can be and how physically demanding it is from digging out ladders and equipment.
                  </p>
                  <a href="service" class="btn btn__secondary btn__block d-flex justify-content-between">
                    <span>Read More</span>
                    <i class="icon-arrow-right icon-outlined"></i>
                  </a>
                </div><!-- /.service__body -->
              </div><!-- /.service-item -->
              <!-- service item #6 -->
              <div class="service-item">
                <div class="service__overlay">
                  <div class="bg-img">
                    <img src="{{asset('front')}}/assets/images/services/6.jpg" alt="service">
                  </div>
                </div><!-- /.service__overlay -->
                <div class="service__body">
                  <div class="service__icon">
                    <i class="icon-vacuum-cleaner"></i>
                  </div><!-- /.service__icon -->
                  <h4 class="service__title">Professional Carpet Cleaning Services</h4>
                  <p class="service__desc">Dirt and other particles that are left too long work their way into fibers
                    break down your carpet's fibers. Once they embedded, they can be almost impossible to remove.
                  </p>
                  <a href="service" class="btn btn__secondary btn__block d-flex justify-content-between">
                    <span>Read More</span>
                    <i class="icon-arrow-right icon-outlined"></i>
                  </a>
                </div><!-- /.service__body -->
              </div><!-- /.service-item -->
            </div><!-- /.carousel -->
          </div><!-- /.col-12 -->
        </div><!-- /.row -->
      </div><!-- /.container -->
    </section><!-- /.Services Layout 1 -->

    <!-- ========================
        cta Layout 1
    =========================== -->
    {{-- <section class="cta-layout1 pt-50 pb-50 border-top">
      <div class="container">
        <div class="row">
          <div class="col-12 d-flex flex-wrap align-items-center justify-content-between">
            <div class="cta__block my-3">
              <a href="services.html" class="btn btn__primary btn__link">
                <i class="icon-arrow-right icon-outlined"></i>
              </a>
              <strong>
                Custom Plans For A Clean And Healthy Environment. <span class="color-secondary">Get A Free
                  Estimate</span>
              </strong>
            </div>
            <div class="d-flex flex-wrap">
              <a href="services.html" class="btn btn__primary btn__lg justify-content-between mr-30">
                <span>Explore All Services</span>
                <i class="icon-arrow-right"></i>
              </a>
              <a href="shop.html" class="btn btn__secondary btn__outlined">
                Our Products
              </a>
            </div>
          </div>
        </div>
      </div>
    </section> --}}

    <!-- ========================
      feature carousel
    ========================== -->
    <section class="feature-layout1 feature-carousel bg-overlay bg-overlay-secondary-gradient pt-100 pb-0">
      <div class="bg-img"><img src="{{asset('front')}}/assets/images/banners/3.jpg" alt="background"></div>
      <div class="container">
        <div class="row heading">
          <div class="col-12">
            <h2 class="heading__subtitle color-accent">See Why Homeowners Like Us!</h2>
          </div><!-- /.col-12 -->
          <div class="col-sm-12 col-md-12 col-lg-6 col-xl-5">
            <h3 class="heading__title color-white">Experience Ultimate Level Of Cleaning Power With Tailored Industry
              Leading Services.</h3>
          </div><!-- /.col-xl-5 -->
          <div class="col-sm-12 col-md-12 col-lg-6 col-xl-6 offset-xl-1">
            <p class="heading__desc font-weight-bold color-gray mb-30">We’ll take the time to discuss your preferences
              and priorities with you before your first home cleaning service and combine them with our methods to
              provide the best clean possible. Our residential housekeepers will always arrive with your customized
              cleaning plan in hand to ensure that all of your needs are taken into account.
            </p>
            <p class="heading__desc font-weight-bold color-gray mb-30">Now more than ever, detailed disinfecting methods
              should be in place to protect the guests and employees of your facility.
            </p>
            <div class="d-flex flex-wrap mb-70">
              {{-- <a href="about-us.html" class="btn btn__accent mr-30">
                <span>Our Core Values</span>
                <i class="icon-arrow-right ml-20"></i>
              </a> --}}

            </div>
          </div><!-- /.col-xl-6 -->
        </div><!-- /.row -->
        <div class="row">
          <div class="col-12">
            <div class="slick-carousel carousel-dots-light"
              data-slick='{"slidesToShow": 4, "slidesToScroll": 4, "autoplay": false, "arrows": false, "dots": true, "responsive": [ {"breakpoint": 992, "settings": {"slidesToShow": 2,"slidesToScroll": 2}}, {"breakpoint": 767, "settings": {"slidesToShow": 1,"slidesToScroll": 1}}, {"breakpoint": 480, "settings": {"slidesToShow": 1,"slidesToScroll": 1}}]}'>
              <!-- feature item #1 -->
              <div class="feature-item">
                <div class="feature__body">
                  <div class="feature__icon">
                    <i class="icon-hand-dryer"></i>
                  </div><!-- /.feature__icon -->
                  <h4 class="feature__title">Healthy Teams And Social Distance </h4>
                  <p class="feature__desc">Our experts thoroughly trained and use proprietary cleaning and disinfecting
                    systems.</p>
                  {{-- <a href="services.html" class="btn btn__secondary btn__link">
                    <i class="icon-arrow-right icon-outlined"></i>
                    <span>Read More</span>
                  </a> --}}
                </div><!-- /.feature__body -->
                <div class="feature__img">
                  <img src="{{asset('front')}}/assets/images/features/1.jpg" alt="feature">
                </div><!-- /.feature__img -->
              </div><!-- /.feature-item -->
              <!-- feature item #2 -->
              <div class="feature-item">
                <div class="feature__body">
                  <div class="feature__icon">
                    <i class="icon-bucket"></i>
                  </div><!-- /.feature__icon -->
                  <h4 class="feature__title">Professional Grade Disinfectant </h4>
                  <p class="feature__desc">Reduce cleaning time by about 25% while ensuring a spotless, disinfected
                    environment.</p>

                </div><!-- /.feature__body -->
                <div class="feature__img">
                  <img src="{{asset('front')}}/assets/images/features/2.jpg" alt="feature">
                </div><!-- /.feature__img -->
              </div><!-- /.feature-item -->
              <!-- feature item #3 -->
              <div class="feature-item">
                <div class="feature__body">
                  <div class="feature__icon">
                    <i class="icon-wet-floor"></i>
                  </div><!-- /.feature__icon -->
                  <h4 class="feature__title">Sterilized & Disinfected Cleaning Tools</h4>
                  <p class="feature__desc">We'll familiarize ourselves with your facility and then create a customized
                    cleaning.</p>

                </div><!-- /.feature__body -->
                <div class="feature__img">
                  <img src="{{asset('front')}}/assets/images/features/3.jpg" alt="feature">
                </div><!-- /.feature__img -->
              </div><!-- /.feature-item -->
              <!-- feature item #4 -->
              <div class="feature-item">
                <div class="feature__body">
                  <div class="feature__icon">
                    <i class="icon-dusting"></i>
                  </div><!-- /.feature__icon -->
                  <h4 class="feature__title">100% Satisfaction Guarantee</h4>
                  <p class="feature__desc">We offers a wide variety of services that can be customized to fit your </p>

                </div><!-- /.feature__body -->
                <div class="feature__img">
                  <img src="{{asset('front')}}/assets/images/features/4.jpg" alt="feature">
                </div><!-- /.feature__img -->
              </div><!-- /.feature-item -->
              <!-- feature item #5 -->
              <div class="feature-item">
                <div class="feature__body">
                  <div class="feature__icon">
                    <i class="icon-bucket"></i>
                  </div><!-- /.feature__icon -->
                  <h4 class="feature__title">Professional Grade Disinfectant </h4>
                  <p class="feature__desc">Reduce cleaning time by about 25% while ensuring a spotless, disinfected
                    environment.</p>

                </div><!-- /.feature__body -->
                <div class="feature__img">
                  <img src="{{asset('front')}}/assets/images/features/2.jpg" alt="feature">
                </div><!-- /.feature__img -->
              </div><!-- /.feature-item -->
            </div><!-- /.carousel -->
          </div><!-- /.col-12 -->
        </div><!-- /.row -->
        <div class="row mt-60">
          <div class="col-sm-12 col-md-12 col-lg-6">
            <div class="read__note d-flex flex-wrap mb-30">
              <div class="rating mb-10 mr-40">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
              </div>
              <p class="note__text">
                <span class="font-weight-bold">99.9% Customer Satisfaction</span>
                based on 750+ reviews from our beloved customers and 20,000 natural products!
              </p>
            </div><!-- /.read__note -->
          </div><!-- /.col-lg-6 -->
          <div class="col-sm-12 col-md-12 col-lg-6">
            <div class="cta__banner d-flex bg-overlay bg-overlay-primary">
              <div class="bg-img">
                <img src="{{asset('front')}}/assets/images/banners/4.jpg" alt="bg">
              </div>
              <div class="cta__img">
                <img src="{{asset('front')}}/assets/images/cta/1.jpg" alt="cta">
              </div><!-- /.cta__img -->
              <div class="cta__body">
                <h3 class="cta__title">Healthy Environment For Family</h3>
                <p class="cta__desc">The processes and systems we put in place provide high quality service with a focus
                  on safety.</p>

              </div><!-- /.cta__body -->
            </div><!-- /.cta__banner -->
          </div><!-- /.col-lg-6 -->
        </div><!-- /.row -->
      </div><!-- /.container -->
    </section><!-- /.feature-carousel -->

    <!-- =========================
      Pricing
      =========================== -->
    <section class="pricing-layout2  pb-80">
      <div class="container">
        <div class="row">
          <div class="col-sm-12 col-md-12 col-lg-6 offset-lg-3">
            <div class="heading text-center mb-40">
              <h2 class="heading__subtitle">Customized Cleaning Plans</h2>
              <h3 class="heading__title">Quality Leader Among Cleaning Companies In The Industry!</h3>
            </div><!-- /.heading -->
          </div><!-- /.col-lg-6 -->
        </div><!-- /.row -->
        <div class="row packages-wrapper">
          <!-- pricing item #1-->
          <div class="col-sm-12 col-md-12 col-lg-4">
            <div class="pricing-package">
              <div class="package__body">
                <h4 class="package__subtitle">For Homes</h4>
                <h5 class="package__title">Residential Offers</h5>
                <div class="d-flex justify-content-center mb-40">
                  <div class="package__icon">
                    <i class="icon-sponge"></i>
                  </div><!-- /.package__icon -->
                  <div class="package__icon">
                    <i class="icon-vacuum-cleaner"></i>
                  </div><!-- /.package__icon -->
                  <div class="package__icon">
                    <i class="icon-brush"></i>
                  </div><!-- /.package__icon -->
                </div>
                <p class="package__desc">Residential house cleaning services always focus on cleaning for health, our
                  extensive industry experience give us a leg up.</p>
                <ul class="package__list list-items list-items-layout2 list-unstyled">
                  <li>Window sills & ledges</li>
                  <li>Hard surface floors</li>
                  <li>Remove cobwebs</li>
                  <li>Empty trash</li>
                </ul>
              </div><!-- /.package__body -->
              <div class="package__footer d-flex">
                <div class="bg-img"><img src="{{asset('front')}}/assets/images/pricing/1.jpg" alt="bg"></div>
                <div class="package__price">
                  <span class="package__currency">$</span><span>150</span><span class="package__period">/Mo</span>
                </div>
                <a  class="btn btn__primary btn__block justify-content-between">

                  <i class="icon-arrow-right"></i>
                </a>
              </div><!-- /.package__footer -->
            </div><!-- /.pricing-package -->
          </div><!-- /.col-lg-4 -->
          <!-- pricing item #2-->
          <div class="col-sm-12 col-md-12 col-lg-4">
            <div class="pricing-package">
              <div class="package__body">
                <h4 class="package__subtitle">For Business</h4>
                <h5 class="package__title">Commercial Offers</h5>
                <div class="d-flex justify-content-center mb-40">
                  <div class="package__icon">
                    <i class="icon-tap"></i>
                  </div><!-- /.package__icon -->
                  <div class="package__icon">
                    <i class="icon-glass-cleaning"></i>
                  </div><!-- /.package__icon -->
                  <div class="package__icon">
                    <i class="icon-toilet"></i>
                  </div><!-- /.package__icon -->
                </div>
                <p class="package__desc">Commercial cleaning services will help you protect your customers and
                  employees, we care about clean and it shows in our work.</p>
                <ul class="package__list list-items list-items-layout2 list-unstyled">
                  <li>Office Buildings</li>
                  <li>Manufacturing Facilities</li>
                  <li>Educational Facilities</li>
                  <li>Medical Facilities</li>
                </ul>
              </div><!-- /.package__footer -->
              <div class="package__footer d-flex">
                <div class="bg-img"><img src="{{asset('front')}}/assets/images/pricing/2.jpg" alt="bg"></div>
                <div class="package__price">
                  <span class="package__currency">$</span><span>250</span><span class="package__period">/Mo</span>
                </div>
                <a href="" class="btn btn__primary btn__block justify-content-between">
                  <span></span>
                  <i class="icon-arrow-right"></i>
                </a>
              </div><!-- /.package__footer -->
            </div><!-- /.pricing-package -->
          </div><!-- /.col-lg-4 -->
          <!-- pricing item #3-->
          <div class="col-sm-12 col-md-12 col-lg-4">
            <div class="pricing-package">
              <div class="package__body">
                <h4 class="package__subtitle">For Strata</h4>
                <h5 class="package__title">Outdoor Offers</h5>
                <div class="d-flex justify-content-center mb-40">
                  <div class="package__icon">
                    <i class="icon-garbage-bag"></i>
                  </div><!-- /.package__icon -->
                  <div class="package__icon">
                    <i class="icon-hose"></i>
                  </div><!-- /.package__icon -->
                  <div class="package__icon">
                    <i class="icon-trash"></i>
                  </div><!-- /.package__icon -->
                </div>
                <p class="package__desc">Maintaining the cleanliness and appearance of your property is important, need
                  a reliable and professional outdoor strata cleaning.</p>
                <ul class="package__list list-items list-items-layout2 list-unstyled">
                  <li>High Pressure Cleaning</li>
                  <li>Building Exterior Cleaning</li>
                  <li>Timber and Sandstone Cleaning</li>
                  <li>Roof & Gutter Cleaning</li>
                </ul>
              </div><!-- /.package__footer -->
              <div class="package__footer d-flex">
                <div class="bg-img"><img src="{{asset('front')}}/assets/images/pricing/3.jpg" alt="bg"></div>
                <div class="package__price">
                  <span class="package__currency">$</span><span>350</span><span class="package__period">/Mo</span>
                </div>
                <a href="" class="btn btn__primary btn__block justify-content-between">
                  <span></span>
                  <i class="icon-arrow-right"></i>
                </a>
              </div><!-- /.package__footer -->
            </div><!-- /.pricing-package -->
          </div><!-- /.col-lg-4 -->
        </div><!-- /.row -->
        <div class="row">
          <div class="col-sm-12 col-md-12 col-lg-6 offset-lg-3 text-center">
            <p class="text__link mb-0">For a cleaning that meets your highest standards, you need a dedicated team of
              trained specialists. We arrive at each visit with all supplies needed to thoroughly clean your home with
              our extensive Cleaning Process.
              <a href="service" class="btn btn__secondary btn__link mx-1">
                <span>Contact Us For More Information</span> <i class="icon-arrow-right icon-outlined"></i>
              </a>
            </p>
          </div><!-- /.col-12 -->
        </div><!-- /.row -->
      </div><!-- /.container -->
    </section><!-- /.pricing  -->

    <section class="portfolio-carousel portfolio-layout1 bg-primary">
        <div class="container">
          <div class="row heading heading-light mb-70">
            <div class="col-12">
              <h2 class="heading__subtitle">Industries We Serve </h2>
            </div>
            <div class="col-sm-12 col-md-12 col-lg-5">
              <h3 class="heading__title">Helping Different Industries And All Types Of Facilities</h3>
            </div><!-- /.col-lg-5 -->
            <div class="col-sm-12 col-md-12 col-lg-6 offset-lg-1">
              <p class="heading__desc font-weight-bold mb-30">For additional safety and protection for everyone, our teams
                are
                provided with
                masks and gloves to use while cleaning your home. And, our professional grade product line up includes
                cleaners that meet the EPA's criteria for use against the Coronavirus, as well as other germs that may be
                lurking in your home.</p>
              <div class="d-flex align-items-center">


              </div>
            </div><!-- /.col-lg-6 -->
          </div><!-- /.row -->
          <div class="row">
            <div class="col-12">
              <div class="carousel-container">
                <div class="slick-carousel carousel-arrows-light carousel-dots-light"
                  data-slick='{"slidesToShow": 3, "slidesToScroll": 3, "autoplay": false, "arrows": true, "dots": true, "responsive": [ {"breakpoint": 992, "settings": {"slidesToShow": 2,"slidesToScroll": 2}}, {"breakpoint": 767, "settings": {"slidesToShow": 1,"slidesToScroll": 1}}, {"breakpoint": 480, "settings": {"slidesToShow": 1,"slidesToScroll": 1}}]}'>
                  <!-- portfolio Item #1 -->
                  <div class="portfolio-item">
                    <div class="portfolio__img">
                      <img src="{{asset('front')}}/assets/images/portfolio/m.jpg" alt="portfolio image">
                    </div><!-- /.portfolio__img -->
                    <div class="portfolio__body">
                      <h4 class="portfolio__title">Manufacturing Facilities</h4>
                      <p class="portfolio__desc">We listen to your needs and respond with a customized plan specific to
                        you,
                        scheduled to best fit your business operations...
                      </p>

                    </div><!-- /.portfolio__body -->
                  </div><!-- /.portfolio-item -->
                  <!-- portfolio Item #2 -->
                  <div class="portfolio-item">
                    <div class="portfolio__img">
                      <img src="{{asset('front')}}/assets/images/portfolio/e.jpg" alt="portfolio image">
                    </div><!-- /.portfolio__img -->
                    <div class="portfolio__body">
                      <h4 class="portfolio__title">Educational Facilities</h4>
                      <p class="portfolio__desc">Our educational facility cleaning experts are backed by over six decades
                        of
                        experience and understand the unique requirements of...
                      </p>

                    </div><!-- /.portfolio__body -->
                  </div><!-- /.portfolio-item -->
                  <!-- portfolio Item #3 -->
                  <div class="portfolio-item">
                    <div class="portfolio__img">
                      <img src="{{asset('front')}}/assets/images/portfolio/3.jpg" alt="portfolio image">
                    </div><!-- /.portfolio__img -->
                    <div class="portfolio__body">
                      <h4 class="portfolio__title">Medical Facilities</h4>
                      <p class="portfolio__desc">Along with creating a clean, welcoming for each patient, our
                        Patient-Centered
                        Cleaning Program is designed to help you exceed expectations...
                      </p>

                    </div><!-- /.portfolio__body -->
                  </div><!-- /.portfolio-item -->
                  <!-- portfolio Item #4 -->
                  <div class="portfolio-item">
                    <div class="portfolio__img">
                      <img src="{{asset('front')}}/assets/images/portfolio/f.jpg" alt="portfolio image">
                    </div><!-- /.portfolio__img -->
                    <div class="portfolio__body">
                      <h4 class="portfolio__title">Financial Institutions</h4>
                      <p class="portfolio__desc">As for our cleaning products, we use green cleaners that are effective
                        without leaving behind any bothersome odors. We will also make sure that we use the appropriate
                        cleaners and methods for sensitive areas of your facility.
                      </p>

                    </div><!-- /.portfolio__body -->
                  </div><!-- /.portfolio-item -->
                  <!-- portfolio Item #5 -->
                  <div class="portfolio-item">
                    <div class="portfolio__img">
                      <img src="{{asset('front')}}/assets/images/portfolio/g.jpg" alt="portfolio image">
                    </div><!-- /.portfolio__img -->
                    <div class="portfolio__body">
                      <h4 class="portfolio__title">Government Buildings</h4>
                      <p class="portfolio__desc">With our highly skilled, experienced cleaning technicians, you can be
                        sure
                        your place of worship is in the best hands to keep it beautiful and welcoming.
                      </p>

                    </div><!-- /.portfolio__body -->
                  </div><!-- /.portfolio-item -->
                  <!-- portfolio Item #6 -->
                  <div class="portfolio-item">
                    <div class="portfolio__img">
                      <img src="{{asset('front')}}/assets/images/portfolio/rr.jpg" alt="portfolio image">
                    </div><!-- /.portfolio__img -->
                    <div class="portfolio__body">
                      <h4 class="portfolio__title">Religious Building</h4>
                      <p class="portfolio__desc">We’ll work with you to fully understand needs, accommodate any special
                        requests and avoid any areas that you indicate.
                      </p>

                    </div><!-- /.portfolio__body -->
                  </div><!-- /.portfolio-item -->
                </div><!-- /.carousel -->

              </div><!-- /.carousel-container -->
            </div><!-- /.col-12 -->
          </div><!-- /.row -->
        </div><!-- /.container -->
      </section><!-- /.portfolio -->

    <!-- ======================
     Work Process
    ========================= -->




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










  </div><!-- /.wrapper -->
  <div class="search-popup">
    <button type="button" class="search-popup__close"><i class="fas fa-times"></i></button>
    <form class="search-popup__form">
      <input type="text" class="search-popup__form__input" placeholder="Type Words Then Enter">
      <button class="search-popup__btn"><i class="icon-search"></i></button>
    </form>
  </div><!-- /. search-popup -->

  @endsection

