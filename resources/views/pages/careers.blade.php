@extends('layouts.main')

@push('styles')
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/material-design-iconic-font/2.2.0/css/material-design-iconic-font.min.css"
        integrity="sha256-3sPp8BkKUE7QyPSl6VfBByBroQbKxKG7tsusY2mhbVY=" crossorigin="anonymous" />
@endpush
@push('seo')
    <title>Join Innovative Careers in Pharma – Explore Opportunities</title>
    <meta name="description"
        content="Step into the world of pharmaceutical innovation. Explore rewarding career opportunities and become part of a team driving healthcare advancements" />
@endpush
@section('content')
    <div class="top-banner">
        <img src="{{ asset('banner/careers.webp') }}" class="img-fluid" alt="">
        <h1>Careers</h1>
    </div>
    <div class="container py-5">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="/">Home</a></li>
                <li class="breadcrumb-item"><a href="/careers">Careers</a></li>
            </ol>
        </nav>
        <div>

            <div class="row">
                <div class="col-lg-10 mx-auto">
                    <div class="career-search mb-60">
                        <div class="filter-result">
                            <p class="mb-30 ff-montserrat">Total Job Openings : {{ count($data) }}</p>

                            @for ($i = 0; $i < 5; $i++)
                                <div class="job-box d-md-flex align-items-center justify-content-between mb-30">
                                    <div class="job-left my-4 d-md-flex align-items-center flex-wrap">
                                        <div class="img-holder me-md-4 mb-md-0 mb-4 mx-auto mx-md-0 d-md-none d-lg-flex">
                                            FD
                                        </div>
                                        <div class="job-content">
                                            <h5 class="text-center text-md-left h4">Front End Developer</h5>
                                            <ul class="d-md-flex flex-wrap text-capitalize ff-open-sans">
                                                <li class="me-md-4">
                                                    <i class="zmdi zmdi-pin mr-2"></i> Los Angeles
                                                </li>
                                                <li class="me-md-4">
                                                    <i class="zmdi zmdi-money mr-2"></i> 2500-3500/pm
                                                </li>
                                                <li class="me-md-4">
                                                    <i class="zmdi zmdi-time mr-2"></i> Full Time
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="job-right my-4 flex-shrink-0">
                                        <a href="#" class="btn d-block w-100 d-sm-inline-block btn-light">Apply
                                            now</a>
                                    </div>
                                </div>
                            @endfor

                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection
