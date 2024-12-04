@extends('layouts.main')


@section('content')
    <div class="top-banner">
        <img src="https://www.mankindpharma.com//media/images/cmspage/image/initiative-desktop-1703230981.jpg"
            class="img-fluid" alt="">
            <h1>Our Initiatives</h1>
    </div>
    <div class="container py-5">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="/">Home</a></li>
                <li class="breadcrumb-item"><a href="{{ route('environment') }}">Our Initiatives </a>
                </li>
            </ol>
        </nav>
        <div>
           <div class="row">
            <div class="col-md-6">
                <h2 class="display-4 text-center fw-bold my-5">Deworming</h2>
                <a href="">
                    <img src="https://www.mankindpharma.com//media/images/cmspage/image_mobile/deworming-mobile-banner-1702021056.jpg" class="img-fluid" alt="">
                </a>
            </div>
            <div class="col-md-6">
                <h2 class="display-4 fw-bold text-center my-5">DMF</h2>
                <a href="">
                    <img src="https://www.mankindpharma.com//media/images/cmspage/image_mobile/dmf-m-1695970371.jpg" class="img-fluid" alt="">
                </a>
            </div>
           </div>
            
        </div>
    </div>
@endsection
