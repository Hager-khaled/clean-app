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
                <a href="#"  class="nav__item-link">Home</a>

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
                <a href="service" class="nav__item-link">Services</a>

              </li><!-- /.nav-item -->
            <!-- /.nav-item -->


              <li class="nav__item">
                <a href="contact" class="nav__item-link active">Contact Us</a>
              </li><!-- /.nav-item -->
            </ul><!-- /.navbar-nav -->

            <button class="close-mobile-menu d-block d-lg-none"><i class="fas fa-times"></i></button>
          </div><!-- /.navbar-collapse -->
      
        </div><!-- /.container -->
      </nav><!-- /.navabr -->
    </header><!-- /.Header -->

    <!-- =========================
            Google Map
    =========================  -->
    <section class="google-map py-0">
      <iframe frameborder="0" height="620" width="100%"

      src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d3520.0853354190676!2d30.830381610984386!3d28.08293977586905!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2seg!4v1714259535919!5m2!1sen!2seg&amp;t=m&amp;z=10&amp;output=embed&amp;iwloc=near"></iframe>





    </section><!-- /.GoogleMap -->

    <!-- ==========================
        contact layout 1
    =========================== -->

                <form class="contact-panel__form" method="post" action="{{asset('front')}}/assets/php/contact.php" id="contactForm">
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
                {{--  --}}
      <section class="contact-layout1 pt-0 mt--100">
        <div class="container">
          <div class="row">
            <div class="col-12">
              @csrf
              <div class="contact-panel d-flex flex-wrap">
                <form class="contact-panel__form" method="post" action="/sendmessage" id="contactForm">
                  <div class="row">
                    <div class="col-sm-12">
                      <h4 class="contact-panel__title">Get In Touch</h4>
                      <p class="contact-panel__desc mb-30">We take great pride in everything that we do, control over
                        products allows us to ensure customers receive the best quality service and highest standards
                      </p>
                    </div>
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
                      <div class="form-group" action="{{ route('front.contact.sendMessage') }}" method="POST">
                          @csrf
                        <input type="text" class="form-control" placeholder="Name" id="contact-name" name="name"
                          required>
                      </div>
                    </div><!-- /.col-lg-6 -->
                    <div class="col-sm-6 col-md-6 col-lg-6">
                      <div class="form-group">
                        <input type="email" class="form-control" placeholder="Email" id="contact-email"
                          name="email" required>
                      </div>
                    </div><!-- /.col-lg-6 -->
                    <div class="col-sm-6 col-md-6 col-lg-6">
                      <div class="form-group">
                        <input type="text" class="form-control" placeholder="Phone" id="contact-Phone"
                          name="phone" required>
                      </div>
                    </div>
                    <!-- /.col-lg-6 -->
                    {{-- <div class="col-sm-6 col-md-6 col-lg-6">
                      <div class="form-group">
                        <select class="form-control">
                          <option value="0">Select Your services</option>
                          <option value="1">service 1</option>
                          <option value="2">service 2</option>
                        </select>
                      </div>
                    </div> --}}
                    <!-- /.col-lg-6 -->
                    <div class="col-12">
                      <div class="form-group">
                        <textarea class="form-control" placeholder="Additional Details" id="contact-message"
                          name="message"></textarea>
                      </div>
                      <button type="submit"
                        class="btn btn_secondary btnblock btn_xhight d-flex justify-content-between mt-10">
                        <span>Submit Request</span> <i class="icon-arrow-right icon-outlined"></i>
                      </button>
                      <div class="contact-result"></div>
                    </div><!-- /.col-lg-12 -->
                  </div><!-- /.row -->
                </form>
                <div
                  class="contact-panel__info d-flex flex-column justify-content-between bg-overlay bg-overlay-primary-gradient">
                  <div class="bg-img"><img src="{{asset('front')}}/assets/images/banners/2.jpg" alt="banner"></div>
                  @csrf

                  <div>
                    <h3 class="contact-panel__subtitle color-white">Homeowners Like Us!</h3>
                    {{--  --}}
                    <p class="contact-panel__desc font-weight-bold color-white mb-30">Register with us in the form and inquire about all services and prices, not only if necessary, about our services
                    </p>
                  </div>
                  <div>
                    <ul class="contact__list list-unstyled mb-0">
                      <li>
                        <i class="icon-phone"></i><a href="tel:+5565454117">01060499520</a>
                      </li>

                      <li>
                        <i class="icon-clock"></i><a href="contact-us.html">Mon - Fri: 8:00 am - 7:00 pm</a>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div><!-- /.col-lg-6 -->
          </div><!-- /.row -->
        </div><!-- /.container -->
      </section><!-- /.contact layout 1 -->



    <!-- ========================
      feature-layout1
    ========================== -->
    <section class="feature-layout1 pt-0">
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
                <a href="service" class="btn btn__secondary btn__link">
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
                <a href="service" class="btn btn__secondary btn__link">
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
                <a href="service" class="btn btn__secondary btn__link">
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
                <a href="service" class="btn btn__secondary btn__link">
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
              <a href="service" class="btn btn__secondary btn__link mx-1">
                <span>Contact Us For More Information</span> <i class="icon-arrow-right color-primary"></i>
              </a>
            </p>
          </div><!-- /.col-lg-6 -->
        </div><!-- /.row -->
      </div><!-- /.container -->
    </section><!-- /.feature-layout1 -->













    @endsection

  <script src="{{asset('front')}}/assets/js/jquery-3.6.0.min.js"></script>
  <script src="{{asset('front')}}/assets/js/plugins.js"></script>
  <script src="{{asset('front')}}/assets/js/main.js"></script>
</body>

</html>
