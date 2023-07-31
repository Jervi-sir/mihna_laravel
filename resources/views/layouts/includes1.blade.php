@if(app()->environment('local'))
  @vite([
    'resources/assets/css/vendors.css',
    'resources/assets/css/main.css',
  ])
@elseif(app()->environment('production'))
<link rel="stylesheet" href="{{ asset('css/vendors.css')}}">
<link rel="stylesheet" href="{{ asset('css/main.css')}}">
@endif