@extends('auth.master')

@section('content')
<div class="px-50 py-50 md:px-25 md:py-25 bg-white shadow-1 rounded-16">
    <h3 class="text-30 lh-13">Sign Up</h3>
    <p class="mt-10">Already have an account? <a href="{{ route('login') }}" class="text-purple-1">Log in</a></p>

    <form class="contact-form respondForm__form row y-gap-20 pt-30" method="POST" action="{{ route('register') }}">
        @csrf
        <div class="col-lg-6">
            <label class="text-16 lh-1 fw-500 text-dark-1 mb-10">Email address *</label>
            <input type="email" placeholder="Email" name="email" value="{{ old('email') }}" required autocomplete="username" >
            @include('components.errors', ['messages' => $errors->get('email')])
        </div>
        <div class="col-lg-6">
            <label class="text-16 lh-1 fw-500 text-dark-1 mb-10">Username *</label>
            <input type="text" name="name" value="{{ old('name') }}" placeholder="Name" required autofocus autocomplete="name" >
            @include('components.errors', ['messages' => $errors->get('name')])
        </div>
        <div class="col-lg-6">
            <label class="text-16 lh-1 fw-500 text-dark-1 mb-10">Password *</label>
            <input type="password" placeholder="Password" name="password" required autocomplete="new-password" >
            @include('components.errors', ['messages' => $errors->get('password')])
        </div>
        <div class="col-lg-6">
            <label class="text-16 lh-1 fw-500 text-dark-1 mb-10">Confirm Password *</label>
            <input type="password" placeholder="Confirm Password" type="password" name="password_confirmation" required autocomplete="new-password" >
            @include('components.errors', ['messages' => $errors->get('password_confirmation')])
        </div>
        <div class="col-12">
            <button type="submit" name="submit" id="submit" class="button -md -green-1 text-dark-1 fw-500 w-1/1">
                Create an account
            </button>
        </div>
        </form>
        <div class="lh-12 text-dark-1 fw-500 text-center mt-20">Or</div>
        <div class="d-flex x-gap-20 items-center justify-between pt-20">
        <button class="col-12 button -sm px-24 py-25 -outline-red-3 text-red-3 text-14">Sign up with Google</button>
        </div>
    </div>
@endsection