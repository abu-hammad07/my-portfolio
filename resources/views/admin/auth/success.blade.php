<?php $page = 'success'; ?>
@extends('layouts.mainlayout')
@section('content')
    <div class="account-content">
        <div class="login-wrapper login-new">
            <div class="login-content user-login">
                <div class="login-logo">
                    <img src="{{ url('public/img/logo.png') }}" alt="img">
                    <a href="{{ url('dashboard') }}" class="login-logo logo-white">
                        <img src="{{ url('public/img/logo-white.png') }}" alt="">
                    </a>
                </div>
                <div class="login-userset">
                    <div class="login-userheading text-center">
                        <img src="{{ url('public/img/icons/check-icon.svg') }}" alt="Icon">
                        <h3 class="text-center">Success</h3>
                        <h4 class="verfy-mail-content text-center">Your Passwrod Reset Successfully!</h4>
                    </div>


                    <div class="form-login">
                        <a class="btn btn-login mt-0" href="{{ route('admin.login') }}">Back to Login</a>
                    </div>
                    <div class="my-4 d-flex justify-content-center align-items-center copyright-text">
                        <p>Copyright © 2023-Dreamspos</p>
                    </div>
                </div>
            </div>
            <div class="my-4 d-flex justify-content-center align-items-center copyright-text">
                <p>Copyright &copy; 2023 DreamsPOS. All rights reserved</p>
            </div>
        </div>
    </div>
@endsection
