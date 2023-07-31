@vite([
  'resources/js/app.jsx',
])
@elseif(app()->environment('production'))
<script src="{{ asset('js/app.jsx') }}"></script>