{{--
  @if(app()->environment('local'))
@vite([
  'resources/js/app.jsx',
])
@elseif(app()->environment('production'))
@endif
--}}

<script src="{{ asset('js/app.jsx') }}"></script>
