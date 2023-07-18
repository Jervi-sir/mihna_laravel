@extends('layouts.master')
@section('head_end')
    @vite([
        'resources/assets/css/feather.css'
    ])
@endsection

@section('footer_end')
    @vite([
        'resources/assets/plugins/apexchart/apexcharts.min.js',
        'resources/assets/plugins/apexchart/chart-data.js',
    ])
@endsection


@section('content')
<div class="page-content instructor-page-content">
    <div class="container">
      <div class="row">
        @include('instructor.sideBar')
        
        @yield('dashboard_content')
      </div>
    </div>
</div>
@endsection