@extends('auth.instructor.master')

@section('content')
<div class="px-50 py-50 md:px-25 md:py-25 bg-blue shadow-1 rounded-16" style="background: #1a064f;">
    <h3 class="text-30 lh-13 text-white">Je suis un Formateur</h3>
    <p class="mt-10 text-white">Vous n'avez pas encore de compte? <a href="{{ route('instructor.register') }}"  class="text-blue-1">Inscrivez Vous Gratuitement</a></p>
    <form class="contact-form respondForm__form row y-gap-20 pt-30" method="POST" action="{{ route('instructor.login') }}">
      @csrf
      <div class="col-12">
          <label class="text-16 lh-1 fw-500 text-white mb-10 ">Email</label>
          <input type="email" placeholder="Email" name="email" value="{{ old('email') }}" required autocomplete="username" class="text-white" >
          @include('components.errors', ['messages' => $errors->get('email')])
      </div>
      <div class="col-12">
          <label class="text-16 lh-1 fw-500 text-white mb-10 ">Password</label>
          <input type="password" placeholder="Password" name="password" required autocomplete="new-password" class="text-white">
          @include('components.errors', ['messages' => $errors->get('password')])
      </div>
      @if (Route::has('password.request'))
      <div style="text-align: end; padding-top: 10px; color: #307f92">
          <a href="{{ route('password.request') }}" style="">
              {{ __('Forgot your password?') }}
          </a>
      </div>
      @endif
      <input id="remember_me" type="checkbox" name="remember" checked hidden>
      <div class="col-12">
        <button type="submit" name="submit" id="submit" class="button -md -blue-1 text-dark-1 fw-500 w-1/1">
          Login
        </button>
      </div>
    </form>
</div>
@endsection