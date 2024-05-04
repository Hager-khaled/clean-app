@extends('front.layouts.app')
@section('content')
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />
  <meta name="description" content="Clanora - Cleaning Services HTML5 Template">
  <link href="{{asset('front')}}/assets/images/favicon/favicon.png" rel="icon">
  <title>Clean home</title>

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
                <span>Clean Home</span>
              </span>
              <div class="d-flex">
                <ul class="contact__list d-flex flex-wrap align-items-center list-unstyled mb-0">
                  <li>
                    <i class="icon-email"></i>
                    <a href="#">
                      <span>Email: </span> <span></span>
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
                <a href="{index}" data-toggle="dropdown" class="dropdown-toggle nav__item-link active">Company</a>
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
                <a href="service"class="nav__item-link">Services</a>
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


              </div><!-- /.cart-minipopup -->
            </div>
            <ul class="navbar-actions d-none d-xl-flex align-items-center list-unstyled mb-0">
                <li><button class="action__btn-search"><i class="icon-search"></i></button></li>
                <li><a href="http://127.0.0.1:8000/login" class="btn btn__primary action__btn-request">login</a>
                  {{-- <li><a href="request-estimate.html" class="btn btn__primary action__btn-request">cleanhome@200.com</a> --}}
                </li>
              </ul>
          </div><!-- /.navbar-collapse -->

        </div><!-- /.container -->
      </nav><!-- /.navabr -->
    </header><!-- /.Header -->

    <!-- ========================
       page title
    =========================== -->
    <section class="page-title-layout1 page-title-light bg-overlay bg-parallax text-center">
      <div class="bg-img"><img src="{{asset('front')}}/assets/images/page-titles/3.jpg" alt="background"></div>
      <div class="container">
        <div class="row">
          <div class="col-sm-12 col-md-12 col-lg-12 col-xl-6 offset-xl-3">
            <h1 class="pagetitle__heading">Leadership</h1>
            <p class="pagetitle__desc">We’ll take the time to discuss your preferences and priorities with you before
              your first home cleaning service and combine them with methods to provide the best clean possible by our
              residential housekeepers.
            </p>
            <div class="d-flex flex-wrap justify-content-center align-items-center">
              <a href="request-estimate.html" class="btn btn__white my-2 mx-3">
                <span>Schedule A Visit</span>
                <i class="icon-arrow-right"></i>
              </a>
            </div>
            <nav>
              <ol class="breadcrumb justify-content-center mb-0">
                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                <li class="breadcrumb-item"><a href="about-us.html">Company</a></li>
                <li class="breadcrumb-item active" aria-current="page">Leadership</li>
              </ol>
            </nav>
          </div><!-- /.col-xl-6 -->
        </div><!-- /.row -->
      </div><!-- /.container -->
    </section><!-- /.page-title -->

    <!-- ========================
        Team layout 1
    ========================== -->
    <section class="team-layout1 pt-130 pb-30">
      <div class="container">
        <div class="row">
          <!-- Member #1 -->
          <div class="col-sm-6 col-md-4 col-lg-4">
            <div class="member">
              <div class="member__img">
                <img src="{{asset('front')}}/assets/images/team/1.jpg" alt="member img">
              </div><!-- /.member-img -->
              <div class="member__info d-flex align-items-center justify-content-between">
                <div>
                  <h5 class="member__name">Ahmed Mohamed</h5>
                  <p class="member__desc">Chief Executive</p>
                </div>
                <ul class="social-icons list-unstyled mb-0">
                  <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                  <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                  <li><a href="#"><i class="fab fa-linkedin"></i></a></li>
                </ul>
              </div><!-- /.member-info -->
            </div><!-- /.member -->
          </div><!-- /.col-lg-4 -->
          <!-- Member #2 -->
          <div class="col-sm-6 col-md-4 col-lg-4">
            <div class="member">
              <div class="member__img">
                <img src="{{asset('front')}}/assets/images/team/2.jpg" alt="member img">
              </div><!-- /.member-img -->
              <div class="member__info d-flex align-items-center justify-content-between">
                <div>
                  <h5 class="member__name">Mahmoud Abdelkader</h5>
                  <p class="member__desc">Managing Director</p>
                </div>
                <ul class="social-icons list-unstyled mb-0">
                  <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                  <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                  <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                </ul>
              </div><!-- /.member-info -->
            </div><!-- /.member -->
          </div><!-- /.col-lg-4 -->
          <!-- Member #3 -->
          <div class="col-sm-6 col-md-4 col-lg-4">
            <div class="member">
              <div class="member__img">
                <img src="{{asset('front')}}/assets/images/team/3.jpg" alt="member img">
              </div><!-- /.member-img -->
              <div class="member__info d-flex align-items-center justify-content-between">
                <div>
                  <h5 class="member__name">Hager khaled</h5>
                  <p class="member__desc">Vice President</p>
                </div>
                <ul class="social-icons list-unstyled mb-0">
                  <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                  <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                  <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                </ul>
              </div><!-- /.member-info -->
            </div><!-- /.member -->
          </div><!-- /.col-lg-4 -->
        </div> <!-- /.row -->
      </div><!-- /.container -->
    </section><!-- /.Team layout 1  -->

    <!-- ========================
        Team layout 2
    ========================== -->
    <section class="team-layout2 text-center pt-0 pb-30">
      <div class="container">
        <div class="row">
          <!-- Member #1 -->
          <div class="col-sm-6 col-md-6 col-lg-3">
            <div class="member">
              <div class="member__img">
                <img src="{{asset('front')}}/assets/images/team/4.jpg" alt="member img">
              </div><!-- /.member-img -->
              <div class="member__info">
                <ul class="social-icons justify-content-center list-unstyled mb-0">
                  <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                  <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                  <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                </ul>
                <h5 class="member__name">Khaled sahm</h5>
                <p class="member__desc">Legal Officer</p>
              </div><!-- /.member-info -->
            </div><!-- /.member -->
          </div><!-- /.col-lg-3 -->
          <!-- Member #2 -->
          <div class="col-sm-6 col-md-6 col-lg-3">
            <div class="member">
              <div class="member__img">
                <img src="{{asset('front')}}/assets/images/team/5.jpg" alt="member img">
              </div><!-- /.member-img -->
              <div class="member__info">
                <ul class="social-icons justify-content-center list-unstyled mb-0">
                  <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                  <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                  <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                </ul>
                <h5 class="member__name">Alaa Mahmoud</h5>
                <p class="member__desc">HR Officer</p>
              </div><!-- /.member-info -->
            </div><!-- /.member -->
          </div><!-- /.col-lg-3 -->
          <!-- Member #3 -->
          <div class="col-sm-6 col-md-6 col-lg-3">
            <div class="member">
              <div class="member__img">
                <img src="{{asset('front')}}/assets/images/team/6.jpg" alt="member img">
              </div><!-- /.member-img -->
              <div class="member__info">
                <ul class="social-icons justify-content-center list-unstyled mb-0">
                  <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                  <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                  <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                </ul>
                <h5 class="member__name">Mahmoud  Elzanklony</h5>
                <p class="member__desc">Global Sales</p>
              </div><!-- /.member-info -->
            </div><!-- /.member -->
          </div><!-- /.col-lg-3 -->
          <!-- Member #4 -->
          <div class="col-sm-6 col-md-6 col-lg-3">
            <div class="member">
              <div class="member__img">
                <img src="{{asset('front')}}/assets/images/team/7.jpg" alt="member img">
              </div><!-- /.member-img -->
              <div class="member__info">
                <ul class="social-icons justify-content-center list-unstyled mb-0">
                  <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                  <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                  <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                </ul>
                <h5 class="member__name">Tahani Elmahdi</h5>
                <p class="member__desc">Manager</p>
              </div><!-- /.member-info -->
            </div><!-- /.member -->
          </div><!-- /.col-lg-3 -->
        </div> <!-- /.row -->
      </div><!-- /.container -->
    </section><!-- /.Team layout 2  -->














    <form class="contact-panel__form" method="post" action="{{asset('front')}}/assets/php/team.php" id="contactForm">
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




<section class="contact-layout1 pt-0 mt-100">
<div class="container">
<div class="row">
  <div class="col-12">
    @csrf
    <div class="contact-panel d-flex flex-wrap">
      <form class="contact-panel__form " enctype="multipart/form-data" method="post" action="/applyy" id="contactForm">
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
          <div class="col-sm-6 col-md-6 col-lg-6">
            <div class="form-group">

                    <label for="formFile" class="form-label">Default file input example</label>
                    <input class="form-control" type="file" id="formFile">

            </div>
          </div>
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
