<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="preconnect" href="https://fonts.googleapis.com/">
  <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Work+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Material+Icons+Outlined" rel="stylesheet">

  @if(app()->environment('local'))
  @vite([
    'resources/assets/css/vendors.css',
    'resources/assets/css/main.css',
  ])
  @elseif(app()->environment('production'))
  <link rel="stylesheet" href="{{ asset('css/vendors.css')}}">
  <link rel="stylesheet" href="{{ asset('css/main.css')}}">
  @endif
  <title>Mihna</title>
</head>

<body data-barba="wrapper">
  <!-- preloader start -->
    <div class="preloader js-preloader" hidden>
      <div class="preloader__bg" ></div>
    </div>

  <!-- barba container start -->
  <div class="barba-container" data-barba="container">
    <main class="main-content">
      @include('layouts.topBar')

      <div class="content-wrapper js-content-wrapper">
        <div class="dashboard -home-9 px-0 js-dashboard-home-9">
          @include('layouts.sideBar')
    
          <div class="dashboard__main mt-0">
            <div class="dashboard__content pt-0 px-15 pb-0">
    
              @yield('content')
    
            </div>
    
            @include('layouts.footer')
          </div>
        </div>
      </div>
    </main>
  </div>

  <!-- JavaScript -->
  <script src="{{ asset('js/vendors.js')}}"></script>
  <script src="{{ asset('js/main.js')}}"></script>
</body>
</html>