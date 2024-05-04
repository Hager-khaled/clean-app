@extends('front.layouts.app')
@section('content')

   <!-- ============================
        Slider
    ============================== -->
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
                    <a href="about-us.html" class="btn btn__accent mr-30">
                      <span>More About Us</span>
                      <i class="icon-arrow-right"></i>
                    </a>
                    <a href="services.html" class="btn btn__white">
                      our services
                    </a>
                  </div>
                </div><!-- /.slide-content -->
              </div><!-- /.col-xl-7 -->
            </div><!-- /.row -->
          </div><!-- /.container -->
        </div><!-- /.slide-item -->
        <div class="slide-item bg-overlay align-v-h">
          <div class="bg-img"><img src="{{asset('front')}}/assets/images/sliders/2.jpg" alt="slide img"></div>
          <div class="container">
            <div class="row align-items-center">
              <div class="col-sm-12 col-md-12 col-lg-12 col-xl-7">
                <div class="slide__content">
                  <h2 class="slide__title">hager Highest Standards Of Clean & Guarantee to You.</h2>
                  <p class="slide__desc">Our cleaning experts deliver the highest quality of clean you can always count,
                    let us help you with all of your cleaning and disinfecting responsibilities now.
                  </p>
                  <div class="d-flex flex-wrap align-items-center">
                    <a href="about-us.html" class="btn btn__accent mr-30">
                      <span>More About Us</span>
                      <i class="icon-arrow-right"></i>
                    </a>
                    <a href="services.html" class="btn btn__white">
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
                    <a href="contact-us.html" class="btn btn__primary mr-30">
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
              <img src="{{asset('front')}}/assets/images/about/1.jpg" alt="about">
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
                  <a href="services-single.html" class="btn btn__secondary btn__block d-flex justify-content-between">
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
                  <a href="services-single.html" class="btn btn__secondary btn__block d-flex justify-content-between">
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
                  <a href="services-single.html" class="btn btn__secondary btn__block d-flex justify-content-between">
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
                  <a href="services-single.html" class="btn btn__secondary btn__block d-flex justify-content-between">
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
                  <a href="services-single.html" class="btn btn__secondary btn__block d-flex justify-content-between">
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
                  <a href="services-single.html" class="btn btn__secondary btn__block d-flex justify-content-between">
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
    <section class="cta-layout1 pt-50 pb-50 border-top">
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
          </div><!-- /.col-12 -->
        </div><!-- /.row -->
      </div><!-- /.container -->
    </section><!-- /.cta Layout 1 -->

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
              <a href="about-us.html" class="btn btn__accent mr-30">
                <span>Our Core Values</span>
                <i class="icon-arrow-right ml-20"></i>
              </a>
              <a href="pricing-offers.html" class="btn btn__white btn__outlined">Pricing And Plans</a>
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
                  <a href="services.html" class="btn btn__secondary btn__link">
                    <i class="icon-arrow-right icon-outlined"></i>
                    <span>Read More</span>
                  </a>
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
                  <a href="services.html" class="btn btn__secondary btn__link">
                    <i class="icon-arrow-right icon-outlined"></i>
                    <span>Read More</span>
                  </a>
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
                  <a href="services.html" class="btn btn__secondary btn__link">
                    <i class="icon-arrow-right icon-outlined"></i>
                    <span>Read More</span>
                  </a>
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
                  <a href="services.html" class="btn btn__secondary btn__link">
                    <i class="icon-arrow-right icon-outlined"></i>
                    <span>Read More</span>
                  </a>
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
                  <a href="services.html" class="btn btn__secondary btn__link">
                    <i class="icon-arrow-right icon-outlined"></i>
                    <span>Read More</span>
                  </a>
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
                <a href="" class="btn btn__white btn__link">
                  <i class="icon-arrow-right icon-outlined"></i>
                  <span>Explore Our Offers</span>
                </a>
              </div><!-- /.cta__body -->
            </div><!-- /.cta__banner -->
          </div><!-- /.col-lg-6 -->
        </div><!-- /.row -->
      </div><!-- /.container -->
    </section><!-- /.feature-carousel -->

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
                <a href="pricing.html" class="btn btn__primary btn__block justify-content-between">
                  <span>Purchase Now</span>
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
                <a href="pricing.html" class="btn btn__primary btn__block justify-content-between">
                  <span>Purchase Now</span>
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
                <a href="pricing.html" class="btn btn__primary btn__block justify-content-between">
                  <span>Purchase Now</span>
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
              <a href="services.html" class="btn btn__secondary btn__link mx-1">
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
    <section class="portfolio-carousel portfolio-layout1 bg-primary pt-100">
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
              <a href="request-estimate.html" class="btn btn__white btn__outlined mr-30">
                <span>Request An Estimate</span><i class="icon-arrow-right"></i>
              </a>
              <a class="video__btn video__btn-white popup-video" href="https://www.youtube.com/watch?v=jwiIzNIK4dg">
                <div class="video__player">
                  <i class="fa fa-play"></i>
                </div>
                <span class="video__title color-white">Our Video !</span>
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
                    <img src="{{asset('front')}}/assets/images/portfolio/1.jpg" alt="portfolio image">
                  </div><!-- /.portfolio__img -->
                  <div class="portfolio__body">
                    <h4 class="portfolio__title">Manufacturing Facilities</h4>
                    <p class="portfolio__desc">We listen to your needs and respond with a customized plan specific to
                      you,
                      scheduled to best fit your business operations...
                    </p>
                    <a href="portfolio-single.html" class="btn btn__primary btn__link">
                      <i class="icon-arrow-right icon-filled"></i>
                      <span>Read More</span>
                    </a>
                  </div><!-- /.portfolio__body -->
                </div><!-- /.portfolio-item -->
                <!-- portfolio Item #2 -->
                <div class="portfolio-item">
                  <div class="portfolio__img">
                    <img src="{{asset('front')}}/assets/images/portfolio/2.jpg" alt="portfolio image">
                  </div><!-- /.portfolio__img -->
                  <div class="portfolio__body">
                    <h4 class="portfolio__title">Educational Facilities</h4>
                    <p class="portfolio__desc">Our educational facility cleaning experts are backed by over six decades
                      of
                      experience and understand the unique requirements of...
                    </p>
                    <a href="portfolio-single.html" class="btn btn__primary btn__link">
                      <i class="icon-arrow-right icon-filled"></i>
                      <span>Read More</span>
                    </a>
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
                    <a href="portfolio-single.html" class="btn btn__primary btn__link">
                      <i class="icon-arrow-right icon-filled"></i>
                      <span>Read More</span>
                    </a>
                  </div><!-- /.portfolio__body -->
                </div><!-- /.portfolio-item -->
                <!-- portfolio Item #4 -->
                <div class="portfolio-item">
                  <div class="portfolio__img">
                    <img src="{{asset('front')}}/assets/images/portfolio/4.jpg" alt="portfolio image">
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
                    <img src="{{asset('front')}}/assets/images/portfolio/5.jpg" alt="portfolio image">
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
                    <img src="{{asset('front')}}/assets/images/portfolio/6.jpg" alt="portfolio image">
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
              <a href="industries.html" class="view-projects">All Industries</a>
            </div><!-- /.carousel-container -->
          </div><!-- /.col-12 -->
        </div><!-- /.row -->
      </div><!-- /.container -->
    </section><!-- /.portfolio -->

    <!-- ======================
     Work Process
    ========================= -->
    <section class="work-process-layout1 pt-130">
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

    <!-- ==========================
        contact layout 3
    =========================== -->
    <section class="contact-layout3 bg-overlay bg-overlay-secondary-gradient">
      <div class="bg-img"><img src="{{asset('front')}}/assets/images/banners/6.jpg" alt="banner"></div>
      <div class="container">
        <div class="row">
          <div class="col-sm-12 col-md-12 col-lg-12 col-xl-5 d-flex flex-column justify-content-between">
            <div>
              <div class="heading-layout2 heading-light mb-40">
                <h3 class="heading__title">Take Back Your Time And Leave The Cleaning To The Best Cleaning Experts.</h3>
                <p class="heading__desc">Hiring someone to clean your home can feel like a big decision as you want to
                  hire the best house cleaning service you can. So, we gathered some details about professional cleaning
                  franchises to help you!</p>
              </div><!-- /.heading -->
              <div class="d-flex align-items-center flex-wrap mb-70">
                <a href="request-estimate.html" class="btn btn__white mr-30">
                  <span>Schedule A Visit</span>
                  <i class="icon-arrow-right ml-20"></i>
                </a>
                <a href="tel:00201061245741" class="phone__number d-flex align-items-center">
                  <img src="{{asset('front')}}/assets/images/icons/phone.png" alt="phone">
                  <div class="ml-20">
                    <span class="color-white d-block">(002) 01061245741</span>
                    <span class="color-white fz-14 font-weight-normal">Call 24HR / 7Days</span>
                  </div>
                </a>
              </div>
            </div>
            <div class="fancyboxs-layout1 fancybox-light">
              <div class="fancybox-item mb-0">
                <div class="fancybox__icon">
                  <i class="icon-bucket"></i>
                </div><!-- /.fancybox__icon -->
                <div class="fancybox__body">
                  <h4 class="fancybox__title">Become A Franchise </h4>
                  <p class="fancybox__desc"> We offers you an opportunity to be a part of a rapidly growing home
                    cleaning industry. When you join us, you are building a bright and secure future. </p>
                  <a href="request-estimate.html" class="btn btn__white btn__link">
                    <i class="icon-arrow-right icon-filled"></i>
                    <span>Request More Information</span>
                  </a>
                </div><!-- /.feature__body -->
              </div><!-- /.feature-item -->
            </div>
          </div><!-- /.col-lg-5 -->
          <div class="col-sm-12 col-md-12 col-lg-12 col-xl-7">
            <div class="contact-panel">
              <div class="contact-panel__header  bg-overlay bg-overlay-accent-gradient">
                <div class="bg-img"><img src="{{asset('front')}}/assets/images/banners/4.jpg" alt="banner"></div>
                <h4 class="contact-panel__title mb-0">Request An Estimate</h4>
              </div>
              <form class="contact-panel__form" method="post" action="{{asset('front')}}/assets/php/contact.php" id="contactForm">
                <div class="row">
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
        </div><!-- /.row -->
      </div><!-- /.container -->
    </section><!-- /.contact layout 3 -->

    <!-- ======================
      Blog Grid
    ========================= -->
    <section class="blog-grid pt-130 pb-60">
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
                <h4 class="post__title">
                  <a href="blog-single-post.html">The Difference Between Bacterial and Viral Infections and How to
                    Avoid Them</a>
                </h4>
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
                <h4 class="post__title">
                  <a href="blog-single-post.html">Cleaning and Disinfecting Tips for Businesses Affected by
                    Coronavirus (COVID-19)</a>
                </h4>
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
                <h4 class="post__title">
                  <a href="blog-single-post.html">Urethane Against Acrylic Treatments: Which is good for Your
                    Business</a>
                </h4>
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



  </div><!-- /.wrapper -->
  <div class="search-popup">
    <button type="button" class="search-popup__close"><i class="fas fa-times"></i></button>
    <form class="search-popup__form">
      <input type="text" class="search-popup__form__input" placeholder="Type Words Then Enter">
      <button class="search-popup__btn"><i class="icon-search"></i></button>
    </form>
  </div><!-- /. search-popup -->

@endsection
