@extends('front.layouts.app')
@section('content')


<header class="header header-layout1">
    <div class="header-topbar">
      <div class="container-fluid">
        <div class="row align-items-center">
          <div class="col-12 d-flex align-items-center justify-content-between">
            <span class="topbar__text">
              <span class="colored__text"><i class="icon-alert"></i> Enjoy Our Hot Offers!</span>
              <span>Call :01060499520</span>
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
              <a href="#" class="nav__item-link">Home</a>

            </li><!-- /.nav-item -->
            <li class="nav__item has-dropdown">
              <a href="#" data-toggle="dropdown" class="dropdown-toggle nav__item-link active">Company</a>
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
              <a href="service" class="nav__item-link">Services</a>
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
            <a href="#" class="action__btn action__btn-cart">

            </a>
            <div class="cart-minipopup">
              <ul class="list-unstyled">
                <li class="cart-item">
                  <div class="cart__img"><img src="assets/images/products/1.jpg" alt="thumb"></div>
                  <div class="cart__content">
                    <a class="cart__title" href="shop-single.html">Broom & Dustpan</a>
                    <span class="cart__price">$ 8.00</span>
                    <button class="cart__delete">&times;</button>
                  </div><!-- /.cart-item-content -->
                </li><!-- /.cart-item -->
                <li class="cart-item">
                  <div class="cart__img"><img src="assets/images/products/2.jpg" alt="thumb"></div>
                  <div class="cart__content">
                    <a class="cart__title" href="shop-single.html">Sponge Cleaner </a>
                    <span class="cart__price">$ 6.00</span>
                    <button class="cart__delete">&times;</button>
                  </div><!-- /.cart-item-content -->
                </li><!-- /.cart-item -->
              </ul>

            </div><!-- /.cart-minipopup -->
          </div>
          <button class="close-mobile-menu d-block d-lg-none"><i class="fas fa-times"></i></button>
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
              <a href="service" class="btn btn__white my-2 mx-3">
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
      About Layout 1
    =========================== -->
    <section class="about-layout1">
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
                    <a href="contact-us.html" class="btn btn__primary mr-30">
                      <span>Contact Us</span>
                      <i class="icon-arrow-right ml-20"></i>
                    </a>

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
                  <img src="{{asset('front')}}/assets/images/icons/stars.png" alt="stars">
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

    <!-- ========================
      feature carousel
    ========================== -->
    <section class="feature-layout1 feature-carousel bg-overlay bg-overlay-secondary-gradient pb-0">
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

              <a href="service" class="btn btn__white btn__outlined">Services</a>
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
     <!-- =========================
      Pricing
      =========================== -->
      <section class="pricing-layout2 pb-80">
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

    <!-- ======================
      Portfolio
    ========================= -->
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
              <a href="contact" class="btn btn__white btn__outlined mr-30">
                <span>Request An Estimate</span><i class="icon-arrow-right"></i>
              </a>

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
                    <a href="portfolio-single.html" class="btn btn__primary btn__link">
                      <i class="icon-arrow-right icon-filled"></i>
                      <span>Read More</span>
                    </a>
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
                    <a href="portfolio-single.html" class="btn btn__primary btn__link">
                      <i class="icon-arrow-right icon-filled"></i>
                      <span>Read More</span>
                    </a>
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
                    <a href="portfolio-single.html" class="btn btn__primary btn__link">
                      <i class="icon-arrow-right icon-filled"></i>
                      <span>Read More</span>
                    </a>
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

          </div><!-- /.col-12 -->
        </div><!-- /.row -->
      </div><!-- /.container -->
    </section><!-- /.Work Process -->


  </div><!-- /.wrapper -->
  <div class="search-popup">
    <button type="button" class="search-popup__close"><i class="fas fa-times"></i></button>
    <form class="search-popup__form">
      <input type="text" class="search-popup__form__input" placeholder="Type Words Then Enter">
      <button class="search-popup__btn"><i class="icon-search"></i></button>
    </form>
  </div><!-- /. search-popup -->

  <script src="{{asset('front')}}/assetsjs/jquery-3.6.0.min.js"></script>
  <script src="{{asset('front')}}/assetsjs/plugins.js"></script>
  <script src="{{asset('front')}}/assetsjs/main.js"></script>
</body>

</html>


@endsection
