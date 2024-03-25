@extends('layouts.master')

@section('content')

<section data-anim="fade" class="breadcrumbs ">
  <div class="container">
    <div class="row">
      <div class="col-auto">
        <div class="breadcrumbs__content">

          <div class="breadcrumbs__item ">
            <a href="#">Reservation</a>
          </div>

        </div>
      </div>
    </div>
  </div>
</section>


<section class="layout-pt-md layout-pb-lg">
  <div class="container">
    <div class="row y-gap-50">
      <div class="col-lg-8">
        <div class="shopCheckout-form">
          <form action="https://creativelayers.net/themes/educrat-html/post" class="contact-form row x-gap-30 y-gap-30">
            <div class="col-12">
              <h5 class="text-20">Billing details</h5>
            </div>
            <div class="col-sm-6">
              <label class="text-16 lh-1 fw-500 text-dark-1 mb-10">First name</label>
              <input type="text" name="firstName" placeholder="First name">
            </div>
            <div class="col-sm-6">
              <label class="text-16 lh-1 fw-500 text-dark-1 mb-10">Last name</label>
              <input type="text" name="lastName" placeholder="Last name">
            </div>
           

            <div class="col-sm-6">
              <label class="text-16 lh-1 fw-500 text-dark-1 mb-10">Country / Region *</label>
              <select class="selectize wide js-selectize">
                <option value="USA">Wilaya</option>
                <option value="Germany">Ain Temouchent</option>
                <option value="France">Alger</option>
              </select>
            </div>

            <div class="col-sm-6">
              <label class="text-16 lh-1 fw-500 text-dark-1 mb-10">Town / City *</label>
              <input type="text" name="city" placeholder="Town / City *">
            </div>

            <div class="col-sm-6">
              <label class="text-16 lh-1 fw-500 text-dark-1 mb-10">State *</label>
              <input type="text" name="state" placeholder="State *">
            </div>

            <div class="col-sm-6">
              <label class="text-16 lh-1 fw-500 text-dark-1 mb-10">Phone *</label>
              <input type="text" name="phone" placeholder="Phone *">
            </div>

            <div class="col-12">
              <label class="text-16 lh-1 fw-500 text-dark-1 mb-10">Email address *</label>
              <input type="email" name="email" placeholder="Email address *">
            </div>

            <div class="col-12">
              <h5 class="text-20 fw-500 pt-30">Additional information</h5>
            </div>
            <div class="col-12">
              <label class="text-16 lh-1 fw-500 text-dark-1 mb-10">Order notes (optional)</label>
              <textarea name="notes" id="form_notes" rows="8" placeholder="Order notes (optional)"></textarea>
            </div>
          </form>
        </div>
      </div>

      <div class="col-lg-4">
        <div class="">
          <div class="pt-30 pb-15 bg-white border-light rounded-8 bg-light-4">
            <h5 class="px-30 pb-30 text-20 fw-500">
              Hebergement
            </h5>
            <div class="shopCheckout-form">
              <div class="contact-form row x-gap-30 y-gap-30 px-30">
                
                <div class="mt-30">
                  <div class="form-radio d-flex items-center">
                    <div class="radio">
                      <input type="radio" name="radio" checked="checked">
                      <div class="radio__mark">
                        <div class="radio__icon"></div>
                      </div>
                    </div>
                    <h5 class="ml-15 text-15 lh-1 text-dark-1">Avec Hebergements ?</h5>
                  </div>
                </div>

                <div class="col-12">
                  <label class="text-16 lh-1 fw-500 text-dark-1 mb-10">Country / Region *</label>
                  <select class="selectize wide js-selectize">
                    <option value="USA">Hotels</option>
                    <option value="Germany">Hotel 1</option>
                    <option value="France">Hotel 2</option>
                  </select>
                </div>
              </div>
            </div>

            <div class="d-flex justify-between border-top-dark px-30 mt-30">
              <div class="py-15 text-grey">Prix</div>
              <div class="py-15 text-grey">5900 DA</div>
            </div>

          </div>

          <div class="mt-30 pt-30 pb-15 bg-white border-light rounded-8 bg-light-4">
            <h5 class="px-30 text-20 fw-500">
              Your order
            </h5>

            <div class="d-flex justify-between px-30 mt-25">
              <div class="py-15 fw-500 text-dark-1">Formation</div>
              <div class="py-15 fw-500 text-dark-1">Subtotal</div>
            </div>

            <div class="d-flex justify-between border-top-dark px-30">
              <div class="py-15 text-grey">Place x1</div>
              <div class="py-15 text-grey">5900 DA</div>
            </div>

          </div>

          <div class="py-30 px-30 bg-white mt-30 border-light rounded-8 bg-light-4">
            <h5 class="text-20 fw-500">
              Payment
            </h5>

            <div class="mt-30">
              <div class="form-radio d-flex items-center">
                <div class="radio">
                  <input type="radio" name="radio" checked="checked">
                  <div class="radio__mark">
                    <div class="radio__icon"></div>
                  </div>
                </div>
                <h5 class="ml-15 text-15 lh-1 text-dark-1">CCP</h5>
              </div>
            </div>

            <div class="mt-30">
              <div class="form-radio d-flex items-center">
                <div class="radio">
                  <input type="radio" name="radio" checked="checked">
                  <div class="radio__mark">
                    <div class="radio__icon"></div>
                  </div>
                </div>
                <h5 class="ml-15 text-15 lh-1 text-dark-1">Baridi Mob</h5>
              </div>
            </div>
          </div>

          <div class="mt-30 bg-dark-1">
            <button class="button -md -accent col-12 -uppercase text-white">Place order</button>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

@endsection