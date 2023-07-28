<div class="dashboard__sidebar scroll-bar-1">
    <div class="sidebar -dashboard">
      <div class="sidebar__item {{ Route::currentRouteNamed('instructor.dashboard') ? '-is-active' : '' }}">
        <a href="{{ route('instructor.dashboard')}}" class="d-flex items-center text-17 lh-1 fw-500 -dark-text-white">
          <i class="text-20 icon-discovery mr-15"></i>
          Dashboard
        </a>
      </div>

      <div class="sidebar__item {{ Route::currentRouteNamed('instructor.myFormations') ? '-is-active' : '' }}">
        <a href="{{ route('instructor.myFormations') }}" class="d-flex items-center text-17 lh-1 fw-500 ">
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

      <div class="sidebar__item {{ Route::currentRouteNamed('instructor.addFormation') ? '-is-active' : '' }}">
        <a href="{{ route('instructor.addFormation') }}" class="d-flex items-center text-17 lh-1 fw-500">
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

      <div class="sidebar__item  {{ Route::currentRouteNamed('instructor.editProfile') ? '-is-active' : '' }}">
        <a href="{{ route('instructor.editProfile') }}" class="d-flex items-center text-17 lh-1 fw-500 ">
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