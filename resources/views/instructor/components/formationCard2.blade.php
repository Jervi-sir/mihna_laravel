<div class="w-1/4 xl:w-1/3 lg:w-1/2 sm:w-1/1">
    <div class="relative">
      <a href="{{ route('formation.show', ['formation_id' => $formation['id'] ])}}">
        <img class="rounded-8 w-1/1" src="{{ $formation['images'] }}" alt="image">
      </a>

      <button class="absolute-button" data-el-toggle=".js-more-1-toggle">
        <span class="d-flex items-center justify-center size-35 bg-white shadow-1 rounded-8">
          <i class="icon-menu-vertical"></i>
        </span>
      </button>

      <div class="toggle-element -dshb-more js-more-1-toggle">
        <div class="px-25 py-25 bg-white -dark-bg-dark-2 shadow-1 border-light rounded-8">
          <a href="#" class="d-flex items-center">
            <div class="icon-share"></div>
            <div class="text-17 lh-1 fw-500 ml-12">Share</div>
          </a>

          <a href="#" class="d-flex items-center mt-20">
            <div class="icon-bookmark"></div>
            <div class="text-17 lh-1 fw-500 ml-12">Edit</div>
          </a>
        </div>
      </div>
    </div>

    <a class="pt-15">
      <div class="d-flex y-gap-10 justify-between items-center">
        <div class="text-14 lh-1">{{ $formation['coach_name'] }}</div>

        <div class="d-flex items-center">
          <div class="d-flex x-gap-5 items-center">
            <i class="icon-location text-dark-1"></i>
            {{ $formation['wilaya_name'] }}
          </div>
        </div>
      </div>

      <h3 class="text-16 fw-500 lh-15 mt-10">{{ $formation['title'] }}</h3>
      <p>
        <i class="icon-calendar"></i>
        {{ $formation['start_date']}}
      </p>
      <p>
        <i class="icon-calendar"></i>
        {{ $formation['end_date']}}
      </p>
      <div class="progress-bar mt-10">
        <div class="progress-bar__bg bg-light-3"></div>
        <div class="progress-bar__bar bg-purple-1 w-1/5"></div>
      </div>

      <div class="d-flex y-gap-10 justify-between items-center mt-10">
        <div class="text-dark-1">{{ $formation['left_places'] }} places</div>
        <div>{{ $formation['price'] }} <small>DA</small></div>
      </div>
    </a>
</div>