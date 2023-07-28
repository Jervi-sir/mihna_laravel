<header class="header -dashboard -dark-bg-dark-1 js-header">
    <div class="header__container py-20 px-30">
      <div class="row justify-between items-center">
        <div class="col-auto">
          <div class="d-flex items-center">
            <div class="header__explore text-dark-1">
              <button class="d-flex items-center js-dashboard-home-9-sidebar-toggle">
                <i class="icon -dark-text-white icon-explore"></i>
              </button>
            </div>

            <div class="header__logo ml-30 md:ml-20">
              <a data-barba href="{{ route('home') }}">
                <img class="-light-d-none" src="{{ asset('img/general/logo.svg') }}" alt="logo">
                <img class="-dark-d-none" src="{{ asset('img/general/logo-dark.svg') }}" alt="logo">
              </a>
            </div>
          </div>
        </div>

        <div class="col-auto">
          <div class="d-flex items-center">

            <div class="d-flex items-center sm:d-none">
              <div class="relative">
                <button class="js-darkmode-toggle text-light-1 d-flex items-center justify-center size-50 rounded-16 -hover-dshb-header-light">
                  <i class="text-24 icon icon-night"></i>
                </button>
              </div>

              <div class="relative">
                <button data-maximize class="d-flex text-light-1 items-center justify-center size-50 rounded-16 -hover-dshb-header-light">
                  <i class="text-24 icon icon-maximize"></i>
                </button>
              </div>

              <div class="relative">
                <a href="#" class="d-flex items-center text-light-1 justify-center size-50 rounded-16 -hover-dshb-header-light" data-el-toggle=".js-notif-toggle">
                  <i class="text-24 icon icon-notification"></i>
                </a>

                <div class="toggle-element js-notif-toggle">
                  <div class="toggle-bottom -notifications bg-white -dark-bg-dark-1 shadow-4 border-light rounded-8 mt-10">
                    <div class="py-30 px-30">
                      <div class="y-gap-40">
                        @if (count($notifications) == 0)
                        <h4 class="text-15 lh-1 fw-500">No notification!</h4>
                        @else
                          @foreach ($notifications as $notification)
                          <div class="d-flex items-center ">
                            <div class="shrink-0">
                              <img src="{{ asset('img/dashboard/actions/1.png') }}" alt="image">
                            </div>
                            <div class="ml-12">
                              <h4 class="text-15 lh-1 fw-500">{{ $notification['title'] }}</h4>
                              <div class="text-13 lh-1 mt-10">{{ $notification['created_at'] }}</div>
                            </div>
                          </div>
                          @endforeach
                        @endif
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="relative d-flex items-center ml-10">
              <a href="#" data-el-toggle=".js-profile-toggle">
                <img class="size-50" src="{{ asset('img/misc/user-profile.png') }}" alt="image">
              </a>

              <div class="toggle-element js-profile-toggle">
                <div class="toggle-bottom -profile bg-white -dark-bg-dark-1 shadow-4 border-light rounded-8 mt-10">
                  <div class="px-30 py-30">

                    <div class="sidebar -dashboard">

                      <div class="sidebar__item -is-active -dark-bg-dark-2">
                        <a href="dashboard.html" class="d-flex items-center text-17 lh-1 fw-500 -dark-text-white">
                          <i class="text-20 icon-discovery mr-15"></i>
                          Dashboard
                        </a>
                      </div>

                      <div class="sidebar__item ">
                        <a href="dshb-courses.html" class="d-flex items-center text-17 lh-1 fw-500 ">
                          <i class="text-20 icon-play-button mr-15"></i>
                          My Courses
                        </a>
                      </div>

                      <div class="sidebar__item ">
                        <a href="dshb-bookmarks.html" class="d-flex items-center text-17 lh-1 fw-500 ">
                          <i class="text-20 icon-bookmark mr-15"></i>
                          Bookmarks
                        </a>
                      </div>

                      <div class="sidebar__item ">
                        <a href="dshb-messages.html" class="d-flex items-center text-17 lh-1 fw-500 ">
                          <i class="text-20 icon-message mr-15"></i>
                          Messages
                        </a>
                      </div>

                      <div class="sidebar__item ">
                        <a href="dshb-listing.html" class="d-flex items-center text-17 lh-1 fw-500 ">
                          <i class="text-20 icon-list mr-15"></i>
                          Create Course
                        </a>
                      </div>

                      <div class="sidebar__item ">
                        <a href="dshb-reviews.html" class="d-flex items-center text-17 lh-1 fw-500 ">
                          <i class="text-20 icon-comment mr-15"></i>
                          Reviews
                        </a>
                      </div>

                      <div class="sidebar__item ">
                        <a href="dshb-settings.html" class="d-flex items-center text-17 lh-1 fw-500 ">
                          <i class="text-20 icon-setting mr-15"></i>
                          Settings
                        </a>
                      </div>

                      <form method="POST" action="{{ route('logout') }}" class="sidebar__item">
                        @csrf
                        <a href="{{ route('logout') }}" class="d-flex items-center text-17 lh-1 fw-500 "
                            onclick="event.preventDefault(); this.closest('form').submit();">
                            <i class="text-20 icon-power mr-15"></i>
                          Logout
                        </a>
                      </form>

                    </div>

                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </header>