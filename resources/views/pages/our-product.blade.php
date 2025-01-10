@extends('layouts.main')

@push('seo')
    <title>Explore Advanced Oncology, Cardio & Neuro Medicines</title>
    <meta name="description"
        content="Browse a diverse range of high-quality drugs and devices in oncology, cardiovascular, and neurology. Trusted solutions for better health outcomes" />
@endpush
@section('content')
    <div class="top-banner">
        <img src="{{ asset('banner/products.webp') }}" class="img-fluid"
            alt="">
            <h1>Product Overview</h1>
    </div>
    <div class="container py-5">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="/">Home</a></li>
                <li class="breadcrumb-item"><a href="{{ route('our.product') }}">Our Products</a></li>
            </ol>
        </nav>
        <div>
            <h1 class="display-4 fw-bold my-5">Product Overview</h1>
            <div class="row">
                <div class="col-md-4">
                    <div class="text-center">
                        <h2 class="text-primary display-1 fw-bold">#5</h2>
                        <p class="text-uppercase fw-bold">Rank by prescriptions</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="text-center">
                        <h2 class="text-primary display-1 fw-bold">#3</h2>
                        <p class="text-uppercase fw-bold">Rank by product volume</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="text-center">
                        <h2 class="text-primary display-1 fw-bold">23</h2>
                        <p class="text-uppercase fw-bold">Brand Families, INR 100 CR + SALES</p>
                    </div>
                </div>
            </div>
            <div class="py-4">
                <p>
                    Soteria’s product portfolio comprises a wide array of medicines and medical devices. Our drug formulations span several therapeutic areas, including oncology, cardiovascular, and neurological.
                </p>
            </div>
        </div>
    </div>
@endsection
