<header class="header -base-sidebar border-bottom-light bg-white js-header">
    <div class="header__container py-20 px-10">
      <div class="row justify-between items-center">
        <div class="col-auto">
          <div class="d-flex items-center">
            <div class="header__explore text-dark-1">
              <button class="d-flex items-center js-dashboard-home-9-sidebar-toggle">
                <i class="icon -dark-text-white icon-explore"></i>
              </button>
            </div>

            <div class="header__logo ml-30 md:ml-20">
              <a data-barba href="index-2.html">
                <img class="-light-d-none" src="{{ asset('img/general/logo.svg') }}" alt="logo">
                <img class="-dark-d-none" src="{{ asset('img/general/logo-dark.svg') }}" alt="logo">
              </a>
            </div>

            <form class="search-field rounded-16 h-50 -reverse-button -w-340 ml-90 xl:ml-20 lg:d-none" action="https://creativelayers.net/themes/educrat-html/post">
              <input class="bg-light-4 pr-50" type="text" placeholder="What do you want to learn?">
              <button class="text-light-1" type="submit">
                <i class="icon-search text-20"></i>
              </button>
            </form>
          </div>
        </div>

        <div class="col-auto">
          <div class="d-flex items-center">
            <div class="d-flex items-center sm:d-none">
              <div>
                <button class="js-darkmode-toggle text-light-1 d-flex items-center justify-center size-50 rounded-16 -hover-dshb-header-light">
                  <i class="text-light-1 text-24 icon icon-night"></i>
                </button>
              </div>

              <div class="relative">
                <button data-maximize class="text-light-1 d-flex items-center justify-center size-50 rounded-16 -hover-dshb-header-light">
                  <i class="text-24 icon icon-maximize"></i>
                </button>
              </div>

              @guest
                  <a href="{{ route('login') }}" class="px-4">Login</a>
              @endguest
              @auth
              <div class="relative">
                <a href="#" class="d-flex items-center justify-center size-50 rounded-16 -hover-dshb-header-light" data-el-toggle=".js-notif-toggle">
                  <i class="text-24 icon icon-notification"></i>
                </a>

                <div class="toggle-element js-notif-toggle">
                  <div class="toggle-bottom -notifications bg-white shadow-4 border-light rounded-8 mt-10">
                    <div class="py-30 px-30">
                      <div class="y-gap-40">

                        <div class="d-flex items-center ">
                          <div class="shrink-0">
                            <img src="{{ asset('img/dashboard/actions/1.png') }}" alt="image">
                          </div>
                          <div class="ml-12">
                            <h4 class="text-15 lh-1 fw-500 -dark-text-dark-1">Your resume updated!</h4>
                            <div class="text-13 lh-1 mt-10">1 Hours Ago</div>
                          </div>
                        </div>

                        <div class="d-flex items-center border-top-light -dark-border-top-light-5">
                          <div class="shrink-0">
                            <img src="{{ asset('img/dashboard/actions/2.png') }}" alt="image">
                          </div>
                          <div class="ml-12">
                            <h4 class="text-15 lh-1 fw-500 -dark-text-dark-1">You changed password</h4>
                            <div class="text-13 lh-1 mt-10">1 Hours Ago</div>
                          </div>
                        </div>

                        <div class="d-flex items-center border-top-light -dark-border-top-light-5">
                          <div class="shrink-0">
                            <img src="{{ asset('img/dashboard/actions/3.png') }}" alt="image">
                          </div>
                          <div class="ml-12">
                            <h4 class="text-15 lh-1 fw-500 -dark-text-dark-1">Your account has been created successfully</h4>
                            <div class="text-13 lh-1 mt-10">1 Hours Ago</div>
                          </div>
                        </div>

                        <div class="d-flex items-center border-top-light -dark-border-top-light-5">
                          <div class="shrink-0">
                            <img src="{{ asset('img/dashboard/actions/4.png') }}" alt="image">
                          </div>
                          <div class="ml-12">
                            <h4 class="text-15 lh-1 fw-500 -dark-text-dark-1">You applied for a job Front-end Developer</h4>
                            <div class="text-13 lh-1 mt-10">1 Hours Ago</div>
                          </div>
                        </div>

                        <div class="d-flex items-center border-top-light -dark-border-top-light-5">
                          <div class="shrink-0">
                            <img src="{{ asset('img/dashboard/actions/5.png') }}" alt="image">
                          </div>
                          <div class="ml-12">
                            <h4 class="text-15 lh-1 fw-500 -dark-text-dark-1">Your course uploaded successfully</h4>
                            <div class="text-13 lh-1 mt-10">1 Hours Ago</div>
                          </div>
                        </div>

                      </div>
                    </div>
                  </div>
                </div>
              </div>
              @endauth
            </div>
            @auth 
            <div class="relative d-flex items-center ml-10">
              <a href="#" data-el-toggle=".js-profile-toggle">
                <img class="size-50" src="{{ asset('img/misc/user-profile.png') }}" alt="image">
              </a>
                  
              <div class="toggle-element js-profile-toggle">
                <div class="toggle-bottom -profile bg-white shadow-4 border-light rounded-8 mt-10">
                  <div class="px-30 py-30">

                    <div class="sidebar -dashboard">

                      <div class="sidebar__item">
                        <a href="dashboard.html" class="d-flex items-center text-17 lh-1 fw-500 -dark-text-white">
                          <i class="text-20 icon-discovery mr-15"></i>
                          Dashboard
                        </a>
                      </div>

                      <div class="sidebar__item ">
                        <a href="dshb-courses.html" class="d-flex items-center text-17 lh-1 fw-500 ">
                          <i class="text-20 icon-play-button mr-15"></i>
                          My Formations
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
            @endauth
          </div>
        </div>
      </div>
    </div>
  </header>