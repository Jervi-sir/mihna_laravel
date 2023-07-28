@extends('instructor.layouts.master')

@section('content')
<div class="row pb-50 mb-10">
    <div class="col-auto">
      <h1 class="text-30 lh-12 fw-700">Dashboard</h1>
      <div class="breadcrumbs mt-10 pt-0 pb-0">
        <div class="breadcrumbs__content">
          <div class="breadcrumbs__item">
            <a href="index-2.html">Home</a>
          </div>
          <div class="breadcrumbs__item">
            <a href="courses-list-3.html">All courses</a>
          </div>
          <div class="breadcrumbs__item">
            <a href="courses-single-1.html">User Experience Design</a>
          </div>
          <div class="breadcrumbs__item">
            <a href="courses-single-1.html">User Interface</a>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="row y-gap-50">
    <div class="col-xl-9 col-lg-12">
      <div class="row y-gap-30">
        @include('instructor.components.card1')
      </div>

      <div class="row y-gap-30 pt-30">
        @include('instructor.components.stats1')
      </div>

      <div class="row y-gap-30 pt-30">
        <div class="col-12">
          <div class="rounded-16 bg-white -dark-bg-dark-1 shadow-4 h-100">
            <div class="d-flex items-center py-20 px-30 border-bottom-light">
              <h2 class="text-17 lh-1 fw-500">Course overview</h2>
            </div>

            <div class="py-30 px-30">
              <div class="row y-gap-20 justify-between mb-20">
                <div class="col-auto">
                  <div class="dropdown js-dropdown js-past-active">
                    <div class="dropdown__button d-flex items-center text-14 rounded-8 px-20 py-10 text-14 lh-12" data-el-toggle=".js-past-toggle" data-el-toggle-active=".js-past-active">
                      <span class="js-dropdown-title">Past</span>
                      <i class="icon text-9 ml-40 icon-chevron-down"></i>
                    </div>
                    <div class="toggle-element -dropdown -dark-bg-dark-2 -dark-border-white-10 js-click-dropdown js-past-toggle">
                      <div class="text-14 y-gap-15 js-dropdown-list">
                        <div><a href="#" class="d-block js-dropdown-link">Past</a></div>
                        <div><a href="#" class="d-block js-dropdown-link">Past</a></div>
                        <div><a href="#" class="d-block js-dropdown-link">Past</a></div>
                        <div><a href="#" class="d-block js-dropdown-link">Past</a></div>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="col-auto">
                  <div class="row x-gap-20 y-gap-20">
                    <div class="col-auto">

                      <div class="dropdown js-dropdown js-course-name-active">
                        <div class="dropdown__button d-flex items-center text-14 rounded-8 px-20 py-10 text-14 lh-12" data-el-toggle=".js-course-name-toggle" data-el-toggle-active=".js-course-name-active">
                          <span class="js-dropdown-title">Course Name</span>
                          <i class="icon text-9 ml-40 icon-chevron-down"></i>
                        </div>

                        <div class="toggle-element -dropdown -dark-bg-dark-2 -dark-border-white-10 js-click-dropdown js-course-name-toggle">
                          <div class="text-14 y-gap-15 js-dropdown-list">
                            <div><a href="#" class="d-block js-dropdown-link">Animation</a></div>
                            <div><a href="#" class="d-block js-dropdown-link">Design</a></div>
                            <div><a href="#" class="d-block js-dropdown-link">Illustration</a></div>
                            <div><a href="#" class="d-block js-dropdown-link">Business</a></div>
                          </div>
                        </div>
                      </div>

                    </div>
                    <div class="col-auto">

                      <div class="dropdown js-dropdown js-show-2-active">
                        <div class="dropdown__button d-flex items-center text-14 rounded-8 px-20 py-10 text-14 lh-12" data-el-toggle=".js-show-2-toggle" data-el-toggle-active=".js-show-2-active">
                          <span class="js-dropdown-title">Show 8</span>
                          <i class="icon text-9 ml-40 icon-chevron-down"></i>
                        </div>

                        <div class="toggle-element -dropdown -dark-bg-dark-2 -dark-border-white-10 js-click-dropdown js-show-2-toggle">
                          <div class="text-14 y-gap-15 js-dropdown-list">

                            <div><a href="#" class="d-block js-dropdown-link">Animation</a></div>

                            <div><a href="#" class="d-block js-dropdown-link">Design</a></div>

                            <div><a href="#" class="d-block js-dropdown-link">Illustration</a></div>

                            <div><a href="#" class="d-block js-dropdown-link">Business</a></div>

                          </div>
                        </div>
                      </div>

                    </div>
                    <div class="col-auto">

                      <div class="dropdown js-dropdown js-cart-2-active">
                        <div class="dropdown__button d-flex items-center text-14 rounded-8 px-20 py-10 text-14 lh-12" data-el-toggle=".js-cart-2-toggle" data-el-toggle-active=".js-cart-2-active">
                          <span class="js-dropdown-title">Cart</span>
                          <i class="icon text-9 ml-40 icon-chevron-down"></i>
                        </div>

                        <div class="toggle-element -dropdown -dark-bg-dark-2 -dark-border-white-10 js-click-dropdown js-cart-2-toggle">
                          <div class="text-14 y-gap-15 js-dropdown-list">

                            <div><a href="#" class="d-block js-dropdown-link">Animation</a></div>

                            <div><a href="#" class="d-block js-dropdown-link">Design</a></div>

                            <div><a href="#" class="d-block js-dropdown-link">Illustration</a></div>

                            <div><a href="#" class="d-block js-dropdown-link">Business</a></div>

                          </div>
                        </div>
                      </div>

                    </div>
                  </div>
                </div>
              </div>

              <div class="row y-gap-30">
                @include('instructor.components.formationCard1')
                @include('instructor.components.formationCard1')
                @include('instructor.components.formationCard1')
                @include('instructor.components.formationCard1')
                @include('instructor.components.formationCard1')
                @include('instructor.components.formationCard1')
                @include('instructor.components.formationCard1')
                @include('instructor.components.formationCard1')
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="row y-gap-30 pt-30">
        <div class="col-md-6">
            @include('instructor.components.recentCourse')
        </div>

        <div class="col-md-6">
            @include('instructor.components.timeline')
        </div>
      </div>
    </div>

    <div class="col-xl-3 col-lg-12">
      <div class="row y-gap-30">
        <div class="col-12">
            @include('instructor.components.profileQuickInfo')
        </div>
        <div class="col-12">
            @include('instructor.components.latestBadges')
        </div>
        <div class="col-12">
            @include('instructor.components.onlineUsers')
          
        </div>
        <div class="col-12">
            @include('instructor.components.tagLists')
        </div>
        <div class="col-12">
            @include('instructor.components.calendar')
        </div>
      </div>
    </div>
</div>
@endsection