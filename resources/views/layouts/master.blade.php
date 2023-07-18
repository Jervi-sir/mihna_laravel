<!DOCTYPE html>
<html lang="en">
  <!-- Mirrored from dreamslms.dreamguystech.com/html/course-grid.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 04 Jul 2023 23:46:57 GMT -->
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <title>Dreams LMS</title>
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.svg">
    @yield('head_start')
    @vite([
        'resources/assets/css/bootstrap.min.css',
        'resources/assets/plugins/select2/css/select2.min.css',
        'resources/assets/plugins/feather/feather.css',
        'resources/assets/css/style.css'
    ])
    @yield('head_end')
  </head>
  <body>
    <div class="main-wrapper">
      @include('components.header')

      @yield('pageLocation')

      @yield('content')
          
      @include('components.footer')
    </div>
    @yield('footer_start')
    @vite([
        'assets/js/jquery-3.6.0.min.js',
        'resources/assets/js/bootstrap.bundle.min.js',
        'resources/assets/plugins/select2/js/select2.min.js',
        'resources/assets/plugins/theia-sticky-sidebar/ResizeSensor.js',
        'resources/assets/plugins/theia-sticky-sidebar/theia-sticky-sidebar.js',
        'resources/assets/js/script.js'
    ])
    @yield('footer_end')
  </body>
</html>