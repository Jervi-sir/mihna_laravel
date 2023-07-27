@extends('layouts.master')


@section('content')
    @include('home.findCourses')
    @include('home.topCategories')
    @include('home.exploreCourses', ['formations' => $formations])
    @include('home.howItWorks')
    @include('home.latestBooks')
    @include('home.testimonials')
    @include('home.becomeInstructor')
    @include('home.sponsors')
@endsection