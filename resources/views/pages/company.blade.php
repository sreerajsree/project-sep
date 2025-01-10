@extends('layouts.main')
@push('seo')
    <title>Soteria Pharmaceuticals - Quality Healthcare Solutions</title>
    <meta name="description"
        content="Leading pharmaceutical trader, manufacturer, and exporter from India. Delivering innovative, high-quality healthcare products globally for better accessibility." />
@endpush

@section('content')
    <div class="top-banner">
        <img src="{{ asset('banner/our-company.webp') }}" class="img-fluid" alt="">
        <h1>Overview</h1>
    </div>
    <div class="container py-5">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="/">Home</a></li>
                <li class="breadcrumb-item"><a href="/our-company">Our Company</a></li>
            </ol>
        </nav>
        <div>
            <div class="row">
                <div class="col-md-5">
                    <img class="img-fluid" src="{{ asset('images/about-1.jpg') }}" alt="About Image">
                </div>
                <div class="col-md-7">
                    <h2 class="display-4 fw-bold my-3">About Soteria</h2>
                    <p>
                        Soteria Pharmaceutical and Healthcare Private Limited is a pharmaceutical trading, manufacturing,
                        and export
                        company. Headquartered in Noida, India, Soteria's trading relationship is established with China,
                        Europe,
                        EUA, and Russia.
                    </p>
                    <p>
                        The company is built on the foundation of quality care, solidifying its position as an innovative
                        pharmaceutical trader, manufacturer, and exporter. As one of the leading healthcare product
                        formulating and distribution facilities, Soteria intends to maximize healthcare accessibility around
                        the world.
                    </p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-7">
                    <h2 class="display-4 fw-bold my-3">Our Mission</h2>
                    <p>
                        Our mission is to improve healthcare accessibility by delivering high-quality, innovative
                        pharmaceutical products across the globe.
                    </p>
                    <h2 class="display-4 fw-bold mb-3">Our Vision</h2>
                    <p>
                        Soteria aims to become the leading pharmaceutical business in India, with a commitment to fostering
                        innovation in product manufacturing and global distribution.
                    </p>
                    <h2 class="display-4 fw-bold mb-3">Our Values</h2>
                    <p>
                        Soteria’s core values are established on the principles of quality, integrity, and innovation.
                    </p>
                </div>
                <div class="col-md-5">
                    <img class="img-fluid" src="{{ asset('images/about-2.jpg') }}" alt="About Image">
                </div>
            </div>
        </div>
    </div>
@endsection
