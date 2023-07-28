@extends('layouts.master')

@section('content')
<section data-anim="fade" class="breadcrumbs ">
    <div class="container">
      <div class="row">
        <div class="col-auto">
          <div class="breadcrumbs__content">

            <div class="breadcrumbs__item ">
              <a href="#">Home</a>
            </div>

            <div class="breadcrumbs__item ">
              <a href="#">All courses</a>
            </div>

            <div class="breadcrumbs__item ">
              <a href="#">User Experience Design</a>
            </div>

            <div class="breadcrumbs__item ">
              <a href="#">User Interface</a>
            </div>

          </div>
        </div>
      </div>
    </div>
  </section>


  <section class="page-header -type-5 bg-white">
    <div class="page-header__bg">
      <div class="bg-image js-lazy" data-bg="{{ asset('img/event-single/bg.png') }}"></div>
    </div>

    <div class="container">
      <div class="page-header__content pt-90 pb-">
        <div class="row y-gap-30 relative">
          <div class="col-xl-7 col-lg-8">
            <div class="d-flex x-gap-15 y-gap-10 pb-20">
              <div>
                <div class="badge px-15 py-8 text-11 bg-orange-1 text-white fw-400">NEW</div>
              </div>
              <div>
                <div class="badge px-15 py-8 text-11 bg-purple-1 text-white fw-400">POPULAR</div>
              </div>
            </div>

            <div data-anim="slide-up delay-1">
              <h1 class="text-30 lh-14 pr-60 lg:pr-0">{{ $formation['title'] }}</h1>
            </div>

            <p class="col-xl-9 mt-20">{{ $formation['short_description'] }}</p>

            <div class="d-flex x-gap-30 y-gap-10 items-center flex-wrap pt-20">
              <div class="d-flex items-center text-light-1">
                <div class="icon icon-person-3 text-13"></div>
                <div class="text-14 ml-8">{{ $formation['left_places']}} places left</div>
              </div>

              <div class="d-flex items-center text-light-1">
                <div class="icon icon-calendar text-13"></div>
                <div class="text-14 ml-8">{{ $formation['start_date'] }}</div>
              </div>
              <div class="d-flex items-center text-light-1">
                <div class="icon icon-calendar text-13"></div>
                <div class="text-14 ml-8">{{ $formation['end_date'] }}</div>
              </div>
              <div class="d-flex items-center text-light-1">
                <div class="icon icon-wall-clock text-13"></div>
                <div class="text-14 ml-8">{{ $formation['duration'] }} days</div>
              </div>
              <br>
              <div class="d-flex items-center text-light-1">
                <div class="icon icon-location text-13"></div>
                <div class="text-14 ml-8">{{ $formation['address'] }}, {{ $formation['wilaya_name'] }}</div>
              </div>
            </div>

            <div class="d-flex items-center pt-20">
              <div class="bg-image size-30 rounded-full js-lazy" data-bg="{{ $formation['coach_image'] ? $formation['coach_image'] : asset('img/avatars/small-1.png') }}"></div>
              <div class="text-14 lh-1 ml-10">{{ $formation['coach_name'] }}</div>
            </div>
          </div>

          <div class="courses-single-info">
            <div class="bg-white shadow-2 rounded-8 border-light py-10 px-10">
              <div class="relative">
                <img class="w-1/1" src="{{ $formation['images'] }}" alt="image">
                {{--
                  <div class="absolute-full-center d-flex justify-center items-center">
                  <a href="https://www.youtube.com/watch?v=ANYfx4-jyqY" class="d-flex justify-center items-center size-60 rounded-full bg-white js-gallery" data-gallery="gallery1">
                    <div class="icon-play text-18"></div>
                  </a>
                </div>
                --}}
              </div>

              <div class="courses-single-info__content scroll-bar-1 pt-30 pb-20 px-20">
                <div class="d-flex justify-between items-center mb-30">
                  <div class="text-24 lh-1 text-dark-1 fw-500">{{ $formation['price'] }} <small>DA</small></div>
                  <div class="lh-1 line-through">{{ $formation['price'] }} <small>DA</small> </div>
                </div>

                <button class="button -md -outline-dark-1 text-dark-1 w-1/1 mt-10">Reserver Maintenant</button>
                {{--<div class="text-14 lh-1 text-center mt-30">30-Day Money-Back Guarantee</div>--}}

                <div class="mt-25">
                  <div class="d-flex justify-between py-8 ">
                    <div class="d-flex items-center text-dark-1">
                      <div class="icon-person-2"></div>
                      <div class="ml-10">Places Restees</div>
                    </div>
                    <div>{{ $formation['left_places'] }}</div>
                  </div>

                  <div class="d-flex justify-between py-8 ">
                    <div class="d-flex items-center text-dark-1">
                      <div class="icon-location"></div>
                      <div class="ml-10">Location</div>
                    </div>
                    <div>{{ $formation['wilaya_name'] }}</div>
                  </div>
                  <div class="d-flex justify-between py-8 border-top-light">
                    <div class="d-flex items-center text-dark-1">
                      <div class="icon-calendar"></div>
                      <div class="ml-10">Start Date</div>
                    </div>
                    <div>{{ $formation['start_date'] }}</div>
                  </div>

                  <div class="d-flex justify-between py-8 border-top-light">
                    <div class="d-flex items-center text-dark-1">
                      <div class="icon-calendar"></div>
                      <div class="ml-10">End Date</div>
                    </div>
                    <div>{{ $formation['end_date'] }}</div>
                  </div>

                  <div class="d-flex justify-between py-8 border-top-light">
                    <div class="d-flex items-center text-dark-1">
                      <div class="icon-clock-2"></div>
                      <div class="ml-10">Duration</div>
                    </div>
                    <div>{{ $formation['duration'] }} days</div>
                  </div>

                  <div class="d-flex justify-between py-8 border-top-light">
                    <div class="d-flex items-center text-dark-1">
                      <div class="icon-badge"></div>
                      <div class="ml-10">Certificate</div>
                    </div>
                    <div>{{ $formation['certificate'] == 1 ? 'Oui' : 'Non'}}</div>
                  </div>

                </div>
                {{--
                <div class="d-flex justify-center pt-15">
                  <a href="#" class="d-flex justify-center items-center size-40 rounded-full">
                    <i class="fa fa-facebook"></i>
                  </a>
                  <a href="#" class="d-flex justify-center items-center size-40 rounded-full">
                    <i class="fa fa-twitter"></i>
                  </a>
                  <a href="#" class="d-flex justify-center items-center size-40 rounded-full">
                    <i class="fa fa-instagram"></i>
                  </a>
                  <a href="#" class="d-flex justify-center items-center size-40 rounded-full">
                    <i class="fa fa-linkedin"></i>
                  </a>
                </div>
                  --}}
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>


  <section class="layout-pt-md layout-pb-md">
    <div class="container">
      <div class="row">
        <div class="col-lg-8">
          <div class="tabs -active-purple-2 js-tabs">
            <div class="tabs__controls d-flex js-tabs-controls">
              <button class="tabs__button js-tabs-button is-active" data-tab-target=".-tab-item-1" type="button">
                Overview
              </button>
              <button class="tabs__button js-tabs-button ml-30" data-tab-target=".-tab-item-2" type="button">
                Course Content
              </button>
              <button class="tabs__button js-tabs-button ml-30" data-tab-target=".-tab-item-3" type="button">
                Instructors
              </button>
              <button class="tabs__button js-tabs-button ml-30" data-tab-target=".-tab-item-4" type="button">
                Map
              </button>
            </div>

            {{-- Tab1 --}}
            <div class="tabs__content pt-60 lg:pt-40 js-tabs-content">
              <div class="tabs__pane -tab-item-1 is-active">
                <h4 class="text-18 fw-500">Description</h4>

                <div class="show-more mt-30 js-show-more">
                  <div class="show-more__content">
                    {{ $formation['long_description']}}
                  </div>

                  <button class="show-more__button text-purple-1 fw-500 underline mt-30">Show more</button>
                </div>

                <div class="mt-60">
                  <h4 class="text-20 mb-30">What you'll learn</h4>
                  <div class="row x-gap-100 justfiy-between">
                    {{ $formation['what_learned'] }}
                  </div>
                </div>

                <div class="mt-60">
                  <h4 class="text-20">Requirements</h4>
                  {{ $formation['requirements'] }}

                </div>
              </div>

              {{-- Tab2 --}}
              <div class="tabs__pane -tab-item-2">
                <h2 class="text-20 fw-500">Course Content</h2>
                {{ $formation['planning'] }}
              </div>

              <div class="tabs__pane -tab-item-3">
                <h2 class="text-20 fw-500">School</h2>

                <div class="mt-30">
                  <div class="d-flex x-gap-20 y-gap-20 items-center flex-wrap">
                    <div class="size-120">
                      <img class="object-cover" src="{{ $formation['coach_image'] ? $formation['coach_image'] : asset('img/misc/verified/1.png') }}" alt="image">
                    </div>

                    <div class="">
                      <h5 class="text-17 lh-14 fw-500">{{ $formation['coach_name'] }}</h5>

                      <div class="d-flex x-gap-20 y-gap-10 flex-wrap items-center pt-10">
                        <div class="d-flex items-center">
                          <div class="d-flex items-center mr-8">
                            <div class="icon-star text-11 text-yellow-1"></div>
                            <div class="text-14 lh-12 text-yellow-1 ml-5">4.5</div>
                          </div>
                          <div class="text-13 lh-1">{{ $formation['coach_punch_line'] }}</div>
                        </div>

                        <div class="d-flex items-center text-light-1">
                          <div class="icon-comment text-13 mr-8"></div>
                          <div class="text-13 lh-1">{{ $formation['coach_total_formations'] }} formations</div>
                        </div>

                        <div class="d-flex items-center text-light-1">
                          <div class="icon-person-3 text-13 mr-8"></div>
                          <div class="text-13 lh-1">{{ $formation['coach_total_students'] }} students</div>
                        </div>

                      </div>
                    </div>
                  </div>

                  <div class="mt-30">
                    {{ $formation['coach_description']}}
                  </div>
                </div>
              </div>

              <div class="tabs__pane -tab-item-4">
                <h4>Map</h4>
              
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>


  <section class="layout-pt-md layout-pb-lg">
    <div data-anim-wrap class="container">
      <div class="row">
        <div class="col-auto">
          <div class="sectionTitle ">
            <h2 class="sectionTitle__title ">You May Like</h2>
            <p class="sectionTitle__text ">10,000+ unique online course list designs</p>
          </div>
        </div>
      </div>

      <div class="relative pt-60 lg:pt-50">
        <div class="overflow-hidden js-section-slider" data-gap="30" data-loop data-pagination data-nav-prev="js-courses-prev" data-nav-next="js-courses-next" data-slider-cols="xl-4 lg-3 md-2">
          <div class="swiper-wrapper">
            @foreach ($suggestions as $index => $suggestion)
              @include('components.card1', ['formation' => $suggestion])
            @endforeach
          </div>
        </div>
        <button class="section-slider-nav -prev -dark-bg-dark-2 -white -absolute size-70 rounded-full shadow-5 js-courses-prev">
          <i class="icon icon-arrow-left text-24"></i>
        </button>
        <button class="section-slider-nav -next -dark-bg-dark-2 -white -absolute size-70 rounded-full shadow-5 js-courses-next">
          <i class="icon icon-arrow-right text-24"></i>
        </button>
      </div>
    </div>
</section>
@endsection
