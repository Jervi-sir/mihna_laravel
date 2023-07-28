<section class="layout-pt-lg layout-pb-md">
    <div data-anim-wrap class="container">
      <div class="row y-gap-20 justify-between items-center">
        <div class="col-auto">
          <div class="sectionTitle ">
            <h2 class="sectionTitle__title ">Categories en Tendance</h2>
          </div>
        </div>
        <div class="col-auto">
          <div class="d-flex x-gap-15 items-center justify-center">
            <div class="col-auto">
              <button class="d-flex items-center text-24 arrow-left-hover js-cat-slider-prev">
                <i class="icon icon-arrow-left"></i>
              </button>
            </div>
            <div class="col-auto">
              <div class="pagination -arrows js-cat-slider-pag"></div>
            </div>
            <div class="col-auto">
              <button class="d-flex items-center text-24 arrow-right-hover js-cat-slider-next">
                <i class="icon icon-arrow-right"></i>
              </button>
            </div>
          </div>
        </div>
      </div>

      <div class="overflow-hidden pt-50 js-section-slider" data-gap="30" data-loop data-slider-cols="xl-4 lg-4 md-3 sm-2" data-pagination="js-cat-slider-pag" data-nav-prev="js-cat-slider-prev" data-nav-next="js-cat-slider-next">
        <div class="swiper-wrapper">
          @foreach ($categories as $index => $category)
          <div class="swiper-slide h-100">
            <div data-anim-child="slide-left delay-2">
              <div class="featureCard -type-1 -featureCard-hover-3">
                <div class="featureCard__content">
                  <div class="featureCard__icon">
                    <img src="{{ asset('img/featureCards/' . $index . '.svg') }}" alt="icon">
                  </div>
                  <div class="featureCard__title">{{ $category['name'] }}</div>
                  <div class="featureCard__text">{{ $category['formations_count']}}+ Formations</div>
                </div>
              </div>
            </div>
          </div>
          @endforeach
        </div>
      </div>
    </div>
  </section>