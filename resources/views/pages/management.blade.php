@extends('layouts.main')

@push('styles')
<link rel="stylesheet" href="https://unpkg.com/bs-brain@2.0.4/components/teams/team-1/assets/css/team-1.css">
@endpush

@section('content')
<div class="top-banner">
    <img src="https://www.mankindpharma.com//media/images/cmspage/image/management-banner-d-1702373210.jpg" class="img-fluid" alt="">
    <h1>Management</h1>
</div>
    <div class="bg-light py-5">
        <div class="container">
            <div class="row justify-content-md-center">
                <div class="col-12 col-md-10 col-lg-8 col-xl-7 col-xxl-6">
                    <h2 class="mb-4 display-5 text-center">Our Team</h2>
                    <p class="text-secondary mb-5 text-center lead fs-4">We are a group of innovative, experienced, and
                        proficient teams. You will love to collaborate with us.</p>
                    <hr class="w-50 mx-auto mb-5 mb-xl-9 border-dark-subtle">
                </div>
            </div>
        </div>

        <div class="container overflow-hidden">
            <div class="row gy-4 gy-lg-0 gx-xxl-5">
                <div class="col-12 col-md-6 col-lg-3">
                    <div class="card border-0 border-bottom border-primary shadow-sm overflow-hidden">
                        <div class="card-body p-0">
                            <figure class="m-0 p-0">
                                <img class="img-fluid" loading="lazy" src="https://bootstrapbrain.com/demo/components/teams/team-1/assets/img/team-img-1.jpg" alt="Flora Nyra">
                                <figcaption class="m-0 p-4">
                                    <h4 class="mb-1">Flora Nyra</h4>
                                    <p class="text-secondary mb-0">Product Manager</p>
                                </figcaption>
                            </figure>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-3">
                    <div class="card border-0 border-bottom border-primary shadow-sm overflow-hidden">
                        <div class="card-body p-0">
                            <figure class="m-0 p-0">
                                <img class="img-fluid" loading="lazy" src="https://bootstrapbrain.com/demo/components/teams/team-1/assets/img/team-img-1.jpg" alt="Evander Mac">
                                <figcaption class="m-0 p-4">
                                    <h4 class="mb-1">Evander Mac</h4>
                                    <p class="text-secondary mb-0">Art Director</p>
                                </figcaption>
                            </figure>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-3">
                    <div class="card border-0 border-bottom border-primary shadow-sm overflow-hidden">
                        <div class="card-body p-0">
                            <figure class="m-0 p-0">
                                <img class="img-fluid" loading="lazy" src="https://bootstrapbrain.com/demo/components/teams/team-1/assets/img/team-img-1.jpg" alt="Taytum Elia">
                                <figcaption class="m-0 p-4">
                                    <h4 class="mb-1">Taytum Elia</h4>
                                    <p class="text-secondary mb-0">Investment Planner</p>
                                </figcaption>
                            </figure>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-3">
                    <div class="card border-0 border-bottom border-primary shadow-sm overflow-hidden">
                        <div class="card-body p-0">
                            <figure class="m-0 p-0">
                                <img class="img-fluid" loading="lazy" src="https://bootstrapbrain.com/demo/components/teams/team-1/assets/img/team-img-1.jpg" alt="Wylder Elio">
                                <figcaption class="m-0 p-4">
                                    <h4 class="mb-1">Wylder Elio</h4>
                                    <p class="text-secondary mb-0">Financial Analyst</p>
                                </figcaption>
                            </figure>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
