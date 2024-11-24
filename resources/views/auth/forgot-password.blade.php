{{--  <x-guest-layout>
    <div class="mb-4 text-sm text-gray-600">
        {{ __('Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.') }}
    </div>

    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('password.email') }}">
        @csrf

        <!-- Email Address -->
        <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <x-primary-button>
                {{ __('Email Password Reset Link') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>  --}}

<?php $page = 'forgot-password'; ?>
@extends('layouts.mainlayout')

@section('content')
    <div class="account-content">
        <div class="login-wrapper login-new">
            <div class="container">

                <div class="login-content user-login">
                    <div class="login-logo">
                        <img src="{{ url('public/assets/img/logo/logo.png') }}" alt="Logo">
                        <a href="{{ url('dashboard') }}" class="login-logo logo-white">
                            <img src="{{ url('public/assets/img/logo/logo.png') }}" alt="Dashboard">
                        </a>
                    </div>

                    <form method="POST" action="{{ route('password.email') }}">
                        @csrf
                        <div class="login-userset">
                            <div class="login-userheading">
                                <h3>Forgot password?</h3>
                                <h4>If you forgot your password, we’ll email you instructions to reset it.</h4>
                            </div>

                            <!-- Session Status -->
                            @if (session('status'))
                                <div class="alert alert-success d-flex align-items-center" role="alert">
                                    <i class="feather-check-circle flex-shrink-0 me-2"></i>
                                    <div>{{ session('status') }}</div>
                                </div>
                            @endif

                            <!-- Email Input -->
                            <div class="form-login">
                                <label for="email">Email</label>
                                <div class="form-addons">
                                    <input type="email" id="email" class="form-control" name="email"
                                           value="{{ old('email') }}" required autofocus>
                                    <img src="{{ url('public/img/icons/mail.svg') }}" alt="Email Icon">
                                </div>
                                @error('email')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <!-- Submit Button -->
                            <div class="form-login">
                                <button type="submit" class="btn btn-login">Send Reset Link</button>
                            </div>

                            <!-- Back to Login -->
                            <div class="signinform text-center">
                                <h4>Return to
                                    <a href="{{ route('login') }}" class="hover-a">login</a>
                                </h4>
                            </div>

                            <!-- OR Separator -->
                            <div class="form-setlogin or-text">
                                <h4>OR</h4>
                            </div>

                            <!-- Social Links -->
                            <div class="form-sociallink">
                                <ul class="d-flex justify-content-center">
                                    <li>
                                        <a href="javascript:void(0);" class="facebook-logo">
                                            <img src="{{ url('public/img/icons/facebook-logo.svg') }}" alt="Facebook">
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);">
                                            <img src="{{ url('public/img/icons/google.png') }}" alt="Google">
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);" class="apple-logo">
                                            <img src="{{ url('public/img/icons/apple-logo.svg') }}" alt="Apple">
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </form>
                </div>

                <!-- Footer -->
                <div class="my-4 d-flex justify-content-center align-items-center copyright-text">
                    <p>Copyright &copy; 2024 Abu Hammad. All rights reserved</p>
                </div>
            </div>
        </div>
    </div>
@endsection
