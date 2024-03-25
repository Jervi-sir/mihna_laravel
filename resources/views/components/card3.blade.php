<a href="{{ route('formation.show', ['formation_id' => $formation['id']]) }}">
    <div class="relative">
        <img class="rounded-8 w-1/1" src="{{ $formation['images'] }}"" alt="image">

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
                    <div class="text-17 lh-1 fw-500 ml-12">Favorite</div>
                </a>
            </div>
        </div>
    </div>

    <div class="pt-15">
        <div class="d-flex items-center">
            <div class="text-14 lh-1 mr-10">
                <i class="icon-location text-black-1"></i>
                {{ $formation['location'] }}
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
            <div>{{ $formation['coach_name'] }}</div>
        </div>
        <div class="coursesCard-footer" style="position: absolute; bottom: 0">
            <div class="coursesCard-footer__price">
                <div>{{ $formation['price'] + 400 }}<small>DA</small></div>
                <div>{{ $formation['price'] }}<small>DA</small></div>
            </div>
        </div>
    </div>
</a>
