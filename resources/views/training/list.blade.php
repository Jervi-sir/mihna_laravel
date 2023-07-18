@extends('layouts.master')

@section('pageLocation')
<div class="breadcrumb-bar">
  <div class="container">
    <div class="row">
      <div class="col-md-12 col-12">
        <div class="breadcrumb-list">
          <nav aria-label="breadcrumb" class="page-breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item">
                <a href="index.html">Home</a>
              </li>
              <li class="breadcrumb-item" aria-current="page">Courses</li>
              <li class="breadcrumb-item active" aria-current="page">All Courses</li>
            </ol>
          </nav>
        </div>
      </div>
    </div>
  </div>
</div>   
@endsection

@section('content')
<section class="course-content">
  <div class="container">
    <div class="row">
      <div class="col-lg-9">
        <div class="showing-list">
          <div class="row">
            <div class="col-lg-6">
              <div class="d-flex align-items-center">
                <div class="view-icons">
                  <a href="course-grid.html" class="grid-view active">
                    <i class="feather-grid"></i>
                  </a>
                  <a href="course-list.html" class="list-view">
                    <i class="feather-list"></i>
                  </a>
                </div>
                <div class="show-result">
                  <h4>Showing 1-9 of 50 results</h4>
                </div>
              </div>
            </div>
            <div class="col-lg-6">
              <div class="show-filter add-course-info">
                <form action="#">
                  <div class="row gx-2 align-items-center">
                    <div class="col-md-6 col-item">
                      <div class=" search-group">
                        <i class="feather-search"></i>
                        <input type="text" class="form-control" placeholder="Search our courses">
                      </div>
                    </div>
                    <div class="col-md-6 col-lg-6 col-item">
                      <div class="form-group select-form mb-0">
                        <select class="form-select select" id="sel1" name="sellist1">
                          <option>Newly published </option>
                          <option>published 1</option>
                          <option>published 2</option>
                          <option>published 3</option>
                        </select>
                      </div>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          @include('components.trainingCard')
          @include('components.trainingCard')
          @include('components.trainingCard')
        </div>
        <div class="row">
          <div class="col-md-12">
            <ul class="pagination lms-page">
              <li class="page-item prev">
                <a class="page-link" href="javascript:void(0)" tabindex="-1">
                  <i class="fas fa-angle-left"></i>
                </a>
              </li>
              <li class="page-item first-page active">
                <a class="page-link" href="javascript:void(0)">1</a>
              </li>
              <li class="page-item">
                <a class="page-link" href="javascript:void(0)">2</a>
              </li>
              <li class="page-item">
                <a class="page-link" href="javascript:void(0)">3</a>
              </li>
              <li class="page-item">
                <a class="page-link" href="javascript:void(0)">4</a>
              </li>
              <li class="page-item">
                <a class="page-link" href="javascript:void(0)">5</a>
              </li>
              <li class="page-item next">
                <a class="page-link" href="javascript:void(0)">
                  <i class="fas fa-angle-right"></i>
                </a>
              </li>
            </ul>
          </div>
        </div>
      </div>
      <div class="col-lg-3 theiaStickySidebar">
        <div class="filter-clear">
          <div class="clear-filter d-flex align-items-center">
            <h4>
              <i class="feather-filter"></i>Filters
            </h4>
            <div class="clear-text">
              <p>CLEAR</p>
            </div>
          </div>
          <div class="card search-filter">
            <div class="card-body">
              <div class="filter-widget mb-0">
                <div class="categories-head d-flex align-items-center">
                  <h4>Course categories</h4>
                  <i class="fas fa-angle-down"></i>
                </div>
                @php
                    $collection = [1,2,3,4,5];
                @endphp
                @foreach ($collection as $item)
                <div>
                  <label class="custom_check">
                    <input type="checkbox" name="select_specialist" checked>
                    <span class="checkmark"></span> IT & Software (2) </label>
                </div>
                @endforeach
              </div>
            </div>
          </div>
          <div class="card search-filter">
            <div class="card-body">
              <div class="filter-widget mb-0">
                <div class="categories-head d-flex align-items-center">
                  <h4>Wilaya</h4>
                  <i class="fas fa-angle-down"></i>
                </div>
                @php
                    $collection = [1,2,3];
                @endphp
                @foreach ($collection as $item)
                <div>
                  <label class="custom_check">
                    <input type="checkbox" name="select_specialist">
                    <span class="checkmark"></span> Keny White (10) </label>
                </div>
                @endforeach
              </div>
            </div>
          </div>
          <div class="card post-widget ">
            <div class="card-body">
              <div class="latest-head">
                <h4 class="card-title">Latest Courses</h4>
              </div>
              <ul class="latest-posts">
                @foreach ($collection as $item)
                <li>
                  @include('components.horizentalSmallCard')
                </li>
                @endforeach
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
@endsection