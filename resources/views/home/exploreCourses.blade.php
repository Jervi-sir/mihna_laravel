<section class="layout-pt-md layout-pb-md">
    <div data-anim-wrap class="container">
        <div class="tabs -pills js-tabs">
            <div class="row y-gap-20 justify-between items-end">
                <div class="col-auto">
                    <div class="sectionTitle ">
                        <h2 class="sectionTitle__title ">Explorez les Formations en Tendance</h2>
                    </div>
                </div>

                <div class="col-auto">
                    <div class="tabs__controls d-flex justify-center x-gap-10 js-tabs-controls">
                        <div>
                            <a href="{{ route('formation.search') }}"
                                class="tabs__button px-20 py-8 rounded-200 -dark-text-white js-tabs-button is-active"
                                data-tab-target=".-tab-item-1" type="button">Voir plus</a>
                        </div>
                  </div>
                </div>
            </div>

            <div class="tabs__content pt-60 lg:pt-50 js-tabs-content">
                <div class="tabs__pane -tab-item-1 is-active">
                    <div class="overflow-hidden js-section-slider" data-gap="30"
                        data-slider-cols="xl-4 lg-3 md-2 sm-2">
                        <div class="swiper-wrapper">
                            @foreach ($formations as $index => $formation)
                                @include('components.card1', ['formation' => $formation])
                            @endforeach
                        </div>
                        <button
                            class="section-slider-nav -prev -dark-bg-dark-2 -white -absolute size-70 rounded-full shadow-5 js-prev">
                            <i class="icon icon-arrow-left text-24"></i>
                        </button>
                        <button
                            class="section-slider-nav -next -dark-bg-dark-2 -white -absolute size-70 rounded-full shadow-5 js-next">
                            <i class="icon icon-arrow-right text-24"></i>
                        </button>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>
