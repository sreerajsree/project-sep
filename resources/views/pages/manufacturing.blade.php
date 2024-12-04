@extends('layouts.main')


@section('content')
    <div class="top-banner">
        <img src="https://www.mankindpharma.com//media/images/cmspage/image/3-1561032982.jpg" class="img-fluid" alt="">
        <h1>Manufacturing</h1>
    </div>
    <div class="container py-5">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="/">Home</a></li>
                <li class="breadcrumb-item"><a href="{{ route('product') }}">Pharma Manufacturing Company - Top Pharma
                        Companies in India</a></li>
            </ol>
        </nav>
        <div>
            <h1 class="display-5 fw-bold my-5">Manufacturing</h1>
            <div class="row">
                <div class="col-md-4">
                    <div class="text-center">
                        <h2 class="text-primary display-1 fw-bold">30</h2>
                        <p class="text-uppercase fw-bold">Manufacturing Facilities</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="text-center">
                        <h2 class="text-primary display-1 fw-bold">43.5 BN</h2>
                        <p class="text-uppercase fw-bold">units Total Installed Capacity</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="text-center">
                        <h2 class="text-primary display-1 fw-bold">5116</h2>
                        <p class="text-uppercase fw-bold">units Total Installed Capacity</p>
                    </div>
                </div>
            </div>
            <div class="py-4">
                <p>
                    We operate 30 manufacturing facilities across India, in the states of Himachal Pradesh, Sikkim,
                    Rajasthan, Andhra Pradesh, Maharashtra and Uttarakhand, and had 5,116 manufacturing personnel as of May
                    31, 2024. Our formulations manufacturing facilities have a total installed capacity of 43.5 billion
                    units per annum across a wide range of dosage forms, including tablets, capsules, syrups, vials,
                    ampoules, blow fill seal, soft and hard gels, eye drops, creams, contraceptives and other
                    over-the-counter products, as of May 31, 2024.
                </p>
                <p class="mt-3">
                    Our focus on process excellence and improvement has earned us awards from organizations such as Frost &
                    Sullivan (India Manufacturing Excellence Awards), International Research Institute for Manufacturing
                    (National Award for Manufacturing Competitiveness), Institute of Directors (Golden Peacock Occupational
                    Health and Safety Award 2020 at the Golden Peacock Awards), Confederation of Indian Industry, and
                    Quality Circle Forum of India, among others.
                </p>
            </div>
        </div>
    </div>
@endsection
