@extends('layouts.main')


@section('content')
    <div class="top-banner">
        <img src="{{ asset('banner/our-company.webp') }}" class="img-fluid"
            alt="">
        <h1>Overview</h1>
    </div>
    <div class="container py-5">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="/">Home</a></li>
                <li class="breadcrumb-item"><a href="/our-company">Best Pharmaceutical Companies in India</a></li>
            </ol>
        </nav>
        <div>
            <h2 class="display-4 fw-bold my-5">Overview</h2>
            <p>
                Founded in 1991 and commenced operation in 1995, we are India’s fourth largest pharmaceutical company in
                terms of domestic sales and are engaged in developing, manufacturing and marketing a diverse range of
                pharmaceutical formulations across various acute and chronic therapeutic areas, as well as several consumer
                healthcare products.
            </p>
            <p class="mt-3">
                We operate at the intersection of the Indian pharmaceutical formulations and consumer healthcare sectors
                with the aim of providing quality products at affordable prices, and have an established track record of
                building and scaling brands in-house.
            </p>
        </div>
    </div>
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
@endsection
