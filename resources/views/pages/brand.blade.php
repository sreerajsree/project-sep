@extends('layouts.main')


@section('content')
    <div class="top-banner">
        <img src="{{ asset('banner/our-brand.webp') }}" class="img-fluid"
            alt="">
            <h1>Our Brand</h1>
    </div>
    <div class="container py-5">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="/">Home</a></li>
                <li class="breadcrumb-item"><a href="{{ route('our.brand') }}">Pharmaceutical Industry in India</a></li>
            </ol>
        </nav>
        <div>
            <div class="row">
                <div class="col-md-7">
                    <p class="display-6">
                        Our efforts to establish "Mankind" as a well-recognized brand in India, our established market
                        presence and experience in manufacturing quality products across various therapeutic areas have
                        helped us to build and scale large brands. As per MAT Apr'24 data, 19 out of our 21 Highest selling
                        brands ranked among top 3 brands in their segments. 21 brands are among top 300 selling brands (As
                        per MAT Apr'24)
                    </p>
                </div>
                <div class="col-md-5">
                    <img src="https://www.mankindpharma.com/assets/img/our-brand-img1.jpg" alt="" class="img-fluid">
                </div>
            </div>
        </div>
    </div>
@endsection
