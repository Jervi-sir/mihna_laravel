@extends('instructor.layouts.master')
@section('script-top')
  @include('layouts.includes2')
@endsection
@section('content')
<div class="row pb-50 mb-10">
    <div class="col-auto">
      <h1 class="text-30 lh-12 fw-700">My Courses</h1>
      <div class="mt-10">Lorem ipsum dolor sit amet, consectetur.</div>
    </div>
    </div>

    <div class="row y-gap-30">
    <div class="col-12">
      <div class="rounded-16 bg-white -dark-bg-dark-1 shadow-4 h-100">
        <div class="tabs -active-purple-2 js-tabs">
          <div class="tabs__controls d-flex items-center pt-20 px-30 border-bottom-light js-tabs-controls">
            <a href="{{ route('instructor.myFormationsActive')}}" class="text-light-1 lh-12 tabs__button js-tabs-button" type="button">
              Active
            </a>
            <a href="{{ route('instructor.myFormationsFinished')}}" class="text-light-1 lh-12 tabs__button js-tabs-button ml-30" type="button">
              Finished
            </a>
            <a href="{{ route('instructor.myFormationsAll')}}" class="text-light-1 lh-12 tabs__button js-tabs-button is-active ml-30" type="button">
              All Formations
            </a>
          </div>

          <div class="tabs__content py-30 px-30 js-tabs-content">
            <div class="-tab-item-1">
                <div class="row y-gap-10 justify-between">
                    <div class="col-auto">
                        <form class="search-field border-light rounded-8 h-50" action="https://creativelayers.net/themes/educrat-html/post">
                            <input class="bg-white -dark-bg-dark-2 pr-50" type="text" placeholder="Not functional yet">
                            <button class="" type="submit">
                                <i class="icon-search text-light-1 text-20"></i>
                            </button>
                        </form>
                    </div>
                </div>

                <div class="row y-gap-30 pt-30">
                @foreach ($formations as $formation)
                    @include('instructor.components.formationCard2', ['formation' => $formation])                
                @endforeach
                </div>
                
                <div class="row justify-center pt-30">
                    <div class="col-auto">
                    <div class="pagination -buttons">
                        {{ $formations->links() }}
                
                    </div>
                    </div>
                </div>
            </div>
         
        </div>
      </div>
    </div>
</div>
@endsection