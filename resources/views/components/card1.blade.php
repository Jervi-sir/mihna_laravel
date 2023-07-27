<div class="swiper-slide">
    <div data-anim-child="slide-up delay-1">
      <a href="{{ route('formation.show', ['formation_id' => $formation['id']])}}" class="coursesCard -type-1 " style="flex: 1 1 auto;  min-height: 400px;">
        <div class="relative">
          <div class="coursesCard__image overflow-hidden rounded-8">
            <img class="w-1/1" src="{{ $formation['images'] }}" alt="image">
            <div class="coursesCard__image_overlay rounded-8"></div>
          </div>
          <div class="d-flex justify-between py-10 px-10 absolute-full-center z-3">

          </div>
        </div>

        <div class="h-100 pt-15">
          <div class="d-flex items-center">
            <div class="text-14 lh-1 mr-10">
              <i class="icon-location text-black-1"></i>
            {{ $formation['location']}}
            </div>
            <div class="d-flex x-gap-5 items-center">
            </div>
        </div>
        <div class="text-17 lh-15 fw-500 text-dark-1 mt-10">{{ $formation['title'] }}</div>
            <div class="d-flex x-gap-10 items-center pt-10">
                <div class="d-flex items-center">
                <div class="mr-8">
                    <img src="{{ asset('img/coursesCards/icons/1.svg') }}" alt="icon">
                </div>
                <div class="text-14 lh-1">{{ $formation['start_date_readable'] }}</div>
                </div>
                <div class="d-flex items-center">
                <div class="mr-8">
                    <img src="{{ asset('img/coursesCards/icons/2.svg') }}" alt="icon">
                </div>
                <div class="text-14 lh-1">{{ $formation['duration'] }} days</div>
                </div>
                <div class="d-flex items-center">
                <div class="mr-8">
                    <img src="{{ asset('img/coursesCards/icons/3.svg') }}" alt="icon">
                </div>
                <div class="text-14 lh-1">{{ $formation['left_places'] }} sits</div>
                </div>
            </div>
            <div class="coursesCard-footer__author" style="padding-top: 20px">
                <img src="{{ asset('img/general/avatar-1.png') }}" alt="image">
                <div>{{ $formation['coach_name']}}</div>
            </div>
            <div class="coursesCard-footer" style="position: absolute; bottom: 0">
                <div class="coursesCard-footer__price">
                    <div>{{ $formation['price'] + 400}}<small>DA</small></div>
                    <div>{{ $formation['price']}}<small>DA</small></div>
                </div>
            </div>
        </div>
      </a>
    </div>
</div>