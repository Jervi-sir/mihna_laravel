<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="preconnect" href="https://fonts.googleapis.com/">
  <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Work+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Material+Icons+Outlined" rel="stylesheet">
  @vite([
    'resources/assets/css/vendors.css',
    'resources/assets/css/main.css',
  ])
  <title>Mihna</title>
</head>

<body class="preloader-visible" data-barba="wrapper">
  <!-- preloader start -->
  <div class="preloader js-preloader">
    <div class="preloader__bg"></div>
  </div>

  <main class="main-content bg-beige-1">
    <header data-anim="fade" data-add-bg="" class="header -base js-header">
      <div class="header__container py-10">
        <div class="row justify-between items-center">

          <div class="col-auto">
            <div class="header-left">
              <div class="header__logo ">
                <a data-barba href="{{ route('home') }}">
                  <img src="{{ asset('img/general/logo.svg')}}" alt="logo">
                </a>
              </div>

            </div>
          </div>


          <div class="col-auto">
            <div class="header-right d-flex items-center">

              <div class="header-menu js-mobile-menu-toggle ">
                <div class="header-menu__content">
                  <div class="mobile-bg js-mobile-bg"></div>

                  <div class="d-none xl:d-flex items-center px-20 py-20 border-bottom-light">
                    @if (Route::is('register'))
                    <a href="{{ route('login') }}" class="text-dark-1">Log in</a>
                    @endif
                    @if (Route::is('login'))
                    <a href="{{ route('register') }}" class="text-dark-1 ml-30">Sign Up</a>
                    @endif
                  </div>

                  <div class="menu js-navList">
                    <ul class="menu__nav text-dark-1 -is-active">
                        {{--
                        <li class="menu-item-has-children">
                            <a data-barba href="contact-1.html">Contact</a>
                        </li>
                        --}}
                      <li>
                        <a data-barba href="contact-1.html">Contact</a>
                      </li>
                      <li>
                        <a data-barba href="contact-1.html">Contact</a>
                      </li>
                    </ul>
                  </div>

                  <div class="mobile-footer px-20 py-20 border-top-light js-mobile-footer">
                    <div class="mobile-footer__number">
                      <div class="text-17 fw-500 text-dark-1">Call us</div>
                      <div class="text-17 fw-500 text-purple-1">800 388 80 90</div>
                    </div>

                    <div class="lh-2 mt-10">
                      <div>329 Queensberry Street,<br> North Melbourne VIC 3051, Australia.</div>
                      <div>hi@educrat.com</div>
                    </div>

                    <div class="mobile-socials mt-10">

                      <a href="#" class="d-flex items-center justify-center rounded-full size-40">
                        <i class="fa fa-facebook"></i>
                      </a>

                      <a href="#" class="d-flex items-center justify-center rounded-full size-40">
                        <i class="fa fa-twitter"></i>
                      </a>

                      <a href="#" class="d-flex items-center justify-center rounded-full size-40">
                        <i class="fa fa-instagram"></i>
                      </a>
                      <a href="#" class="d-flex items-center justify-center rounded-full size-40">
                        <i class="fa fa-linkedin"></i>
                      </a>
                    </div>
                  </div>
                </div>
                <div class="header-menu-close" data-el-toggle=".js-mobile-menu-toggle">
                  <div class="size-40 d-flex items-center justify-center rounded-full bg-white">
                    <div class="icon-close text-dark-1 text-16"></div>
                  </div>
                </div>
                <div class="header-menu-bg"></div>
              </div>
              <div class="mr-30">
                <div class="d-none xl:d-block ml-20">
                  <button class="text-dark-1 items-center" data-el-toggle=".js-mobile-menu-toggle">
                    <i class="text-11 icon icon-mobile-menu"></i>
                  </button>
                </div>

              </div>

              <div class="header-right__buttons md:d-none">
                @if (Route::is('register'))
                <a href="{{ route('login') }}" class="button -sm -rounded -dark-1 text-white">Log in</a>
                @endif
                @if (Route::is('login'))
                <a href="{{ route('register') }}" class="button -sm -rounded -dark-1 text-white">Sign Up</a>
                @endif
              </div>
            </div>
          </div>

        </div>
      </div>
    </header>

    <div class="content-wrapper  js-content-wrapper d-flex justify-center">
      <section class="form-page js-mouse-move-container">
        <div class="form-page__content lg:py-50">
          <div class="container">
            <div class="row justify-center items-center">
              <div class="col-xl-6 col-lg-8 mx-auto">
                @yield('content')
              </div>
            </div>
          </div>
        </div>
      </section>


    </div>
  </main>

  <!-- JavaScript -->
  <script src="{{ asset('js/vendors.js')}}"></script>
  <script src="{{ asset('js/main.js')}}"></script>
</body>


<!-- Mirrored from creativelayers.net/themes/educrat-html/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 26 Jul 2023 16:26:04 GMT -->
</html>