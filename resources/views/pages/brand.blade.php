@extends('layouts.main')
@push('seo')
    <title>Transforming Healthcare with Innovative Pharma Solutions</title>
    <meta name="description"
        content="Pioneering advancements in pharmaceuticals, we deliver high-quality products designed to enhance global healthcare and ensure better patient outcomes" />
@endpush

@section('content')
    <div class="top-banner">
        <img src="{{ asset('banner/our-brand.webp') }}" class="img-fluid" alt="">
        <h1>Our Brand</h1>
    </div>
    <div class="container py-5">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="/">Home</a></li>
                <li class="breadcrumb-item"><a href="{{ route('our.brand') }}">Our Brand</a></li>
            </ol>
        </nav>
        <div>
            <div class="row">
                <div class="col-md-7">
                    <p>
                        Our team works diligently to establish “Soteria” as a leading brand in the Indian pharmaceutical
                        industry. With a strong market presence and extensive experience in pharmaceutical manufacturing,
                        our company aims to transform the scenario of healthcare accessibility globally.
                    </p>
                </div>
                <div class="col-md-5">
                    <img src="{{ asset('images/logo.png') }}" alt="" class="img-fluid">
                </div>
            </div>
        </div>
    </div>
@endsection
