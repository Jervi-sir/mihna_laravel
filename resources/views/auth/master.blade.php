<!DOCTYPE html>
<html lang="en">
  <!-- Mirrored from dreamslms.dreamguystech.com/html/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 04 Jul 2023 23:47:06 GMT -->
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <title>Dreams LMS</title>
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.svg">
    @vite([
        'resources/assets/css/bootstrap.min.css',
        'resources/assets/css/owl.carousel.min.css',
        'resources/assets/css/owl.theme.default.min.css',
        'resources/assets/plugins/feather/feather.css',
        'resources/assets/css/style.css'
    ])
  </head>
  <body>
    <div class="main-wrapper log-wrap">
      <div class="row">
        @yield('content')
      </div>
    </div>
    @vite([
        'resources/assets/js/jquery-3.6.0.min.js',
        'resources/assets/js/bootstrap.bundle.min.js',
        'resources/assets/js/owl.carousel.min.js',
        'resources/assets/js/script.js'
    ])
  </body>
  <!-- Mirrored from dreamslms.dreamguystech.com/html/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 04 Jul 2023 23:47:07 GMT -->
</html>