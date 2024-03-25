<div class="col-xl-4 col-lg-6 col-md-4 col-sm-6">
    <a href={{ route('formation.show', ['formation_id' => $formation['id']])}} class="coursesCard -type-1 ">
      <div class="relative">
        <div class="coursesCard__image overflow-hidden rounded-8">
          <img class="w-1/1" src="{{ $formation['images'] }}" alt="image">
          <div class="coursesCard__image_overlay rounded-8"></div>
        </div>
        <div class="d-flex justify-between py-10 px-10 absolute-full-center z-3">
          <div>
            <div class="px-15 rounded-200 bg-purple-1">
              <span class="text-11 lh-1 uppercase fw-500 text-white">{{ $formation['category_name'] }}</span>
            </div>
          </div>
        
        </div>
      </div>

      <div class="h-100 pt-15">
        <div class="d-flex items-center">
            <div class="icon-location text-12 text-black-1"></div>

        
          <div class="text-13 lh-1 ml-10">{{ $formation['location']}}</div>
        </div>

        <div class="text-17 lh-15 fw-500 text-dark-1 mt-10">{{ $formation['title'] }}</div>

        <div class="d-flex x-gap-10 items-center pt-10">

          <div class="d-flex items-center">
            <div class="mr-8">
              <img src="{{ asset('img/coursesCards/icons/1.svg') }}" alt="icon">
            </div>
            <div class="text-14 lh-1">{{ $formation['start_date_readable']}}</div>
          </div>

          <div class="d-flex items-center">
            <div class="mr-8">
              <img src="{{ asset('img/coursesCards/icons/2.svg') }}" alt="icon">
            </div>
            <div class="text-14 lh-1">{{ $formation['duration']}}</div>
          </div>

          <div class="d-flex items-center">
            <div class="mr-8">
              <img src="{{ asset('img/coursesCards/icons/3.svg') }}" alt="icon">
            </div>
            <div class="text-14 lh-1">{{ $formation['left_places']}}</div>
          </div>

        </div>

        <div class="coursesCard-footer">
          <div class="coursesCard-footer__author">
            <img src="{{ asset('img/general/avatar-1.png') }}" alt="image">
            <div>{{ $formation['coach_name']}}</div>
          </div>

          <div class="coursesCard-footer__price">
            <div>{{ $formation['price'] + 400}}<small>DA</small></div>
            <div>{{ $formation['price']}}<small>DA</small></div>
          </div>
        </div>
      </div>
    </a>

  </div>