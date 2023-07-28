@extends('auth.instructor.master')

@section('content')
<div class="px-50 py-50 md:px-25 md:py-25 bg-white shadow-1 rounded-16" style="background: #1a064f;">
    <h3 class="text-30 lh-13 text-white">Joindre autant que Formateur</h3>
    <p class="mt-10 text-white">Vous avez déjà un compte? <a href="{{ route('instructor.login') }}" class="text-blue-1">Connexion</a></p>

    <form class="contact-form respondForm__form row y-gap-20 pt-30" method="POST" action="{{ route('instructor.register') }}">
        @csrf
        <div class="col-lg-12">
            <label class="text-16 lh-1 fw-500 text-white mb-10">Company name *</label>
            <input type="text" placeholder="name" name="name" value="{{ old('name') }}" required autocomplete="Company name" class="text-white">
            @include('components.errors', ['messages' => $errors->get('name')])
        </div>
        <div class="col-lg-12">
            <label class="text-16 lh-1 fw-500 text-white mb-10">Email address *</label>
            <input type="email" placeholder="Email" name="email" value="{{ old('email') }}" required autocomplete="email" class="text-white">
            @include('components.errors', ['messages' => $errors->get('email')])
        </div>
        <div class="col-lg-12">
            <label class="text-16 lh-1 fw-500 text-white mb-10">Phone Number *</label>
            <input type="text" name="phone_number" value="{{ old('phone_number') }}" placeholder="Phone Number" required autofocus autocomplete="phone_number" class="text-white">
            @include('components.errors', ['messages' => $errors->get('phone_number')])
        </div>
        <div class="col-lg-12">
            <label class="text-16 lh-1 fw-500 text-white mb-10">Password *</label>
            <input type="password" placeholder="Password" name="password" required autocomplete="new-password" class="text-white">
            @include('components.errors', ['messages' => $errors->get('password')])
        </div>
        <div class="col-lg-12">
            <label class="text-16 lh-1 fw-500 text-white mb-10">Confirm Password *</label>
            <input type="password" placeholder="Confirm Password" type="password" name="password_confirmation" required autocomplete="new-password" class="text-white">
            @include('components.errors', ['messages' => $errors->get('password_confirmation')])
        </div>
        <div class="col-12">
            <button type="submit" name="submit" id="submit" class="button -md -blue-1 text-dark-1 fw-500 w-1/1">
                Create an account
            </button>`
        </div>
        </form>
    </div>
@endsection