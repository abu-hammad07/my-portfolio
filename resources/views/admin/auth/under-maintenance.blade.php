<?php $page = 'under-maintenance'; ?>
@extends('layouts.mainlayout')
@section('content')
    <div class="error-box">
        <div class="error-img">
            <img src="{{ url('/public/img/authentication/under-maintenance.png') }}" class="img-fluid" alt="">
        </div>
        <h3 class="h2 mb-3">We are Under Maintenance</h3>
        <p>Sorry for any inconvenience caused, we have almost done
            Will get back soon!</p>
        <a href="{{ url('dashboard') }}" class="btn btn-primary">Back to Dashboard</a>
    </div>
@endsection
