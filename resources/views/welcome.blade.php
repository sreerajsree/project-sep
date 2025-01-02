@extends('layouts.main')

@section('content')
<!-- Coding by CodeWithMangesh || (M.B) -->


<div class="pt-5"><img class="img-fluid" src="{{ asset('banner/banner.webp') }}"
    alt="">
</div>
<div class="py-3">
<section id="statistic" class="statistic-section one-page-section">
    <div class="container">
        <div class="row text-center">
            <div class="col-xs-12 col-md-4">
                <div class="counter">
                    <i class="ri-group-line stats-icon"></i>
                    <h2 class="timer count-title count-number">999</h2>
                    <div class="stats-line-black"></div>
                    <p class="stats-text">EMPLOYEES</p>
                </div>
            </div>
            <div class="col-xs-12 col-md-4">
                <div class="counter">
                    <i class="ri-sort-asc stats-icon"></i>
                    <h2 class="timer count-title count-number">5
                    </h2>
                    <div class="stats-line-black"></div>
                    <p class="stats-text">RANK</p>
                </div>
            </div>
            <div class="col-xs-12 col-md-4">
                <div class="counter">
                    <i class="ri-money-dollar-circle-line stats-icon"></i>
                    <h2 class="timer count-title count-number">10000</h2>
                    <div class="stats-line-black"></div>
                    <p class="stats-text">REVENUE</p>
                </div>
            </div>
        </div>
    </div>
</section>

</div>
<div class="container-fluid">
<div class="row">
    <div class="col-md-7">
        <h2 class="display-1">Work With Us</h2>
        <div class="mt-4">
            <a class="link-dark fs-5" href="/careers">Know More</a>
        </div>
    </div>
    <div class="col-md-5">
        <img class="img-fluid" src="{{ asset('banner/careers.jpg') }}" alt="">
    </div>
</div>
</div>

@endsection