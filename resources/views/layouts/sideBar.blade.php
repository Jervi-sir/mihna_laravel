<div class="dashboard__sidebar -base scroll-bar-1 border-right-light lg:px-30" style="margin-top: 80px; height: 100%;">
    
    <div class="sidebar -base-sidebar">
      <div class="sidebar__inner">
        <div>
          <div>
            <div class="sidebar__item {{ Route::currentRouteNamed('home') ? '-is-active' : '' }}">
              <a href="{{ route('home')}}" class="-dark-sidebar-white d-flex items-center text-17 lh-1 fw-500">
                <i class="text-20 icon-discovery mr-15"></i>
                Explore
              </a>
            </div>
            <div class="sidebar__item {{ Route::currentRouteNamed('formation.search') ? '-is-active' : '' }}">
              <a href="{{ route('formation.search')}}" class="-dark-sidebar-white d-flex items-center text-17 lh-1 fw-500">
                <i class="text-20 icon-play-button mr-15"></i>
                Formations
              </a>
            </div>

            @auth
            <div class="sidebar__item ">
              <a href="#" class="-dark-sidebar-white d-flex items-center text-17 lh-1 fw-500">
                <i class="text-20 icon-tech mr-15"></i>
                Purchased
              </a>
            </div>
            @endauth

            <div class="sidebar__item ">
              <a href="#" class="-dark-sidebar-white d-flex items-center text-17 lh-1 fw-500">
                <i class="text-20 icon-book mr-15"></i>
                Books
              </a>
            </div>

          </div>
        </div>

      </div>
    </div>

  </div>