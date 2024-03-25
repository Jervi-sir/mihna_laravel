@extends('auth.master')

@section('content')
<div class="px-50 py-50 md:px-25 md:py-25 bg-white shadow-1 rounded-16 mt-30">
    <h3 class="text-30 lh-13">Welcome Student</h3>
    <p class="mt-10">Don't have an account yet? <a href="{{ route('register') }}"  class="text-purple-1">Sign up for free</a></p>
    <form class="contact-form respondForm__form row y-gap-20 pt-30" method="POST" action="{{ route('login') }}">
      @csrf
      <div class="col-12">
          <label class="text-16 lh-1 fw-500 text-dark-1 mb-10">Username Or Email</label>
          <input type="email" placeholder="Email" name="email" :value="{{ old('email') }}" value="formateur@gmail.com" required autocomplete="username" >
          @include('components.errors', ['messages' => $errors->get('email')])
      </div>
      <div class="col-12">
          <label class="text-16 lh-1 fw-500 text-dark-1 mb-10">Password</label>
          <input type="password" placeholder="Password" name="password" value="password" required autocomplete="new-password" >
          @include('components.errors', ['messages' => $errors->get('password')])
      </div>
      @if (Route::has('password.request'))
      <div style="text-align: end; padding-top: 10px; color: #309255">
          <a href="{{ route('password.request') }}" style="">
              {{ __('Forgot your password?') }}
          </a>
      </div>
      @endif
      <input id="remember_me" type="checkbox" name="remember" checked hidden>
      <div class="col-12">
        <button type="submit" name="submit" id="submit" class="button -md -green-1 text-dark-1 fw-500 w-1/1">
          Login
        </button>
      </div>
    </form>

    <div class="lh-12 text-dark-1 fw-500 text-center mt-20">Or</div>
    <div class="d-flex x-gap-20 items-center justify-between pt-20">
      <a href="{{ route('instructor.login') }}" class="col-12 button -sm px-24 py-25 -outline-dark-3 text-dark-3 text-14">Je suis un Formateur</a>
    </div>
</div>
@endsection