@extends('layouts.main')


@section('content')
    <div class="top-banner">
        <img src="https://www.mankindpharma.com//media/images/cmspage/image/product-banner-1552563645.jpg" class="img-fluid"
            alt="">
            <h1>Product Overview</h1>
    </div>
    <div class="container py-5">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="/">Home</a></li>
                <li class="breadcrumb-item"><a href="{{ route('product') }}">Best Pharmaceutical Products | Mankind Pharma
                        Products List</a></li>
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
                    In our domestic pharmaceuticals business, our product portfolio comprises a broad range of formulations
                    across various acute and chronic therapeutic areas including anti-infectives, cardiovascular,
                    gastrointestinal, anti-diabetic, neuro/CNS, vitamins/minerals/nutrients and respiratory.
                </p>
                <p class="mt-3">
                    In our consumer healthcare business, we have established several differentiated brands in the condoms,
                    pregnancy detection, oral contraceptives, antacid powders, vitamin and mineral supplements and anti-acne
                    preparations categories.
                </p>
            </div>
        </div>
    </div>
@endsection
