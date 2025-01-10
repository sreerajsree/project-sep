@extends('layouts.main')

@push('seo')
    <title>Soteria Pharmaceuticals</title>
    <meta name="description" content="Discover Soteria Pharmaceuticals - pioneers in innovative, high-quality pharmaceuticals, prioritizing integrity and customer satisfaction worldwide." />
@endpush

@section('content')


    <div class="pt-5"><img class="img-fluid" src="{{ asset('banner/banner.webp') }}" alt="">
    </div>
    <div class="container">
        <div class="row row-cols-1 row-cols-md-3 mb-3 text-center">
            <div class="col d-flex align-items-stretch">
                <div class="card my-3 rounded-3 shadow-sm border-primary">
                    <div class="card-header bg-primary py-3">
                        <h4 class="my-0 fw-normal text-white">Innovation</h4>
                    </div>
                    <div class="card-body">
                        <p>
                            Soteria embraces innovation and advanced technologies to ensure its products exceed customers’
                            expectations.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col d-flex align-items-stretch">
                <div class="card my-3 rounded-3 shadow-sm border-primary">
                    <div class="card-header bg-primary py-3">
                        <h4 class="my-0 fw-normal text-white">Quality</h4>
                    </div>
                    <div class="card-body">
                        <p>
                            We go beyond complying with quality standards by prioritizing quality over quantity. Soteria
                            aims to trailblaze innovative pharmaceutical manufacturing and export in India.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col d-flex align-items-stretch">
                <div class="card my-3 rounded-3 shadow-sm border-primary">
                    <div class="card-header bg-primary py-3">
                        <h4 class="my-0 fw-normal text-white">Integrity</h4>
                    </div>
                    <div class="card-body">
                        <p>
                            We believe in inclusivity and workforce empowerment to protect and respect the integrity of each
                            talent working for Soteria.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- <section id="statistic" class="statistic-section one-page-section">
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
    </section> --}}

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
