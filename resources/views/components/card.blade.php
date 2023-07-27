<div data-anim-child="slide-up delay-{{ $index ?? '1' }}" class="swiper-slide">

    <a href="courses-single-1.html" class="coursesCard -type-1 ">
      <div class="relative">
        <div class="coursesCard__image overflow-hidden rounded-8">
          <img class="w-1/1" src="{{ asset('img/coursesCards/1.png') }}" alt="image">
          <div class="coursesCard__image_overlay rounded-8"></div>
        </div>
        <div class="d-flex justify-between py-10 px-10 absolute-full-center z-3">

        </div>
      </div>

      <div class="h-100 pt-15">
        <div class="d-flex items-center">
          <div class="text-14 lh-1 text-yellow-1 mr-10">4.5</div>
          <div class="d-flex x-gap-5 items-center">
            <div class="icon-star text-9 text-yellow-1"></div>
            <div class="icon-star text-9 text-yellow-1"></div>
            <div class="icon-star text-9 text-yellow-1"></div>
            <div class="icon-star text-9 text-yellow-1"></div>
            <div class="icon-star text-9 text-yellow-1"></div>
          </div>
          <div class="text-13 lh-1 ml-10">(1991)</div>
        </div>

        <div class="text-17 lh-15 fw-500 text-dark-1 mt-10">{{ $index ?? '1' }}Learn Figma - UI/UX Design Essential Training</div>

        <div class="d-flex x-gap-10 items-center pt-10">

          <div class="d-flex items-center">
            <div class="mr-8">
              <img src="{{ asset('img/coursesCards/icons/1.svg') }}" alt="icon">
            </div>
            <div class="text-14 lh-1">6 lesson</div>
          </div>

          <div class="d-flex items-center">
            <div class="mr-8">
              <img src="{{ asset('img/coursesCards/icons/2.svg') }}" alt="icon">
            </div>
            <div class="text-14 lh-1">3h 56m</div>
          </div>

          <div class="d-flex items-center">
            <div class="mr-8">
              <img src="{{ asset('img/coursesCards/icons/3.svg') }}" alt="icon">
            </div>
            <div class="text-14 lh-1">Beginner</div>
          </div>

        </div>

        <div class="coursesCard-footer">
          <div class="coursesCard-footer__author">
            <img src="{{ asset('img/general/avatar-1.png') }}" alt="image">
            <div>Ali Tufan</div>
          </div>

          <div class="coursesCard-footer__price">
            <div>$179</div>
            <div>$79</div>
          </div>
        </div>
      </div>
    </a>

  </div>