<!DOCTYPE html>
<html lang="en">

<head>
    <title>Abu Hammad | Portfolio | Admin Portal</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <meta name="description" content="Admin Portal | Abu Hammad | Portfolio | Driven by Passion, Focused on Results">
    <meta name="keywords" content="Admin Portal, abuhammad, hammadkamalportfolio, Portfolio, abuhammad">
    <meta name="author" content="Abu Hammad | Portfolio | Admin Portal">
    <meta name="robots" content="Abu Hammad, Portfolio, Driven by Passion, Focused on Results">

    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ url('public/assets/img/favicon.ico') }}">

    @include('layouts.partials.head')
</head>
@yield('style')

@if (Route::is(['chat']))

    <body class="main-chat-blk">
@endif
@if (
    !Route::is([
        'login',
        'admin.login',
        'registeration',
        'email.verification',
        'forgot.password',
        'reset.password',
        'two.step.verification',
        'success',
        'under.maintenance',
        'coming.soon',
        'error-404',
        'error-500',

        'two-step-verification-2',
        'two-step-verification',
        'email-verification-2',
        'email-verification',
        'reset-password-2',
        'reset-password',
        'forgot-password-2',
        'forgot-password',
        'register-3',
        'register-2',
        'signin-2',
        'signin',
        'success-2',
        'success-3',
    ]))

    <body>
@endif
@if (Route::is(['under-maintenance', 'coming.soon', 'error-404', 'error-500']))

    <body class="error-page">
@endif
@if (Route::is([

        'login',
        'register',
        'password.request',
        'email.verification',
        'reset.password',
        'two.step.verification',
        'success',

        'two-step-verification-3',
        'two-step-verification-2',
        'two-step-verification',
        'email-verification-3',
        'email-verification-2',
        'email-verification',
        'reset-password-3',
        'reset-password-2',
        'reset-password',
        'forgot-password-3',
        'forgot-password-2',
        'forgot-password',
        'register-3',
        'register-2',
        'signin-3',
        'signin-2',
        'signin',
        'success-2',
        'success-3',
    ]))

    <body class="account-page">
@endif
@component('components.loader')
@endcomponent
<!-- Main Wrapper -->
@if (!Route::is(['lock.screen']))
    <div class="main-wrapper">
@endif
@if (Route::is(['lock.screen']))
    <div class="main-wrapper login-body">
@endif
@if (
    !Route::is([


        'login',
        'register',
        'password.request',
        'email.verification',
        'reset.password',
        'two.step.verification',
        'success',
        'under.maintenance',
        'coming.soon',
        'error-404',
        'error-500',

        'two-step-verification-3',
        'two-step-verification-2',
        'two-step-verification',
        'email-verification-3',
        'email-verification-2',
        'email-verification',
        'reset-password-3',
        'reset-password-2',
        'reset-password',
        'forgot-password-3',
        'forgot-password-2',
        'forgot-password',
        'register-3',
        'register-2',
        'signin-3',
        'signin-2',
        'signin',
        'success-2',
        'success-3',
        'lock.screen',
    ]))
    @include('layouts.partials.header')
@endif
@if (
    !Route::is([
        'pos',
        'under-maintenance',
        'two-step-verification-3',
        'two-step-verification-2',
        'two-step-verification',
        'email-verification-3',
        'email-verification-2',
        'email-verification',
        'reset-password-3',
        'reset-password-2',
        'reset-password',
        'forgot-password-3',
        'forgot-password-2',
        'forgot-password',
        'register-3',
        'register-2',
        'signin-3',
        'signin-2',
        'signin',
        'success-2',
        'success-3',

        'login',
        'register',
        'password.request',
        'email.verification',
        'reset.password',
        'two.step.verification',
        'success',
        'under.maintenance',
        'lock.screen',
        'coming.soon',
        'error-404',
        'error-500',
    ]))
    @include('layouts.partials.sidebar')
    {{--  @include('layouts.partials.collapsed-sidebar')
    @include('layouts.partials.horizontal-sidebar')  --}}
@endif
@yield('content')
</div>
<!-- /Main Wrapper -->
@include('layouts.partials.theme-settings')
@component('components.modalpopup')
@endcomponent
@include('layouts.partials.footer-scripts')
@yield('script')
</body>

</html>
