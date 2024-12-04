@extends('layouts.main')

@push('styles')
    <link rel="stylesheet" href="https://unpkg.com/bs-brain@2.0.4/components/blogs/blog-5/assets/css/blog-5.css">
@endpush
@section('content')
    <div class="top-banner">
        <img src="https://www.mankindpharma.com//media/images/cmspage/image/press-release-d-1691501055.png" class="img-fluid" alt="">
        <h1>Press Release</h1>
    </div>
    <div class="container py-5">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
                <li class="breadcrumb-item"><a href="{{ route('press') }}">Press Release</a></li>
            </ol>
        </nav>
        <div class="mb-5">
            <div class="container overflow-hidden">
                <div class="row gy-4 gy-md-5 gx-xl-6 gy-xl-6 gx-xxl-9 gy-xxl-9">
                    @foreach ($data as $d)
                        <div class="col-12 col-lg-4">
                            <article>
                                <div class="card border-1 p-2 bg-transparent">
                                    <div class="card-body m-0 p-0">
                                        <div class="entry-header mb-3">
                                            <h1 class="card-title entry-title h2 m-0">
                                                <a class="link-dark text-decoration-none"
                                                    href="{{ route('press.detail', $d->slug) }}">{{ $d->name }}</a>
                                            </h1>
                                        </div>
                                    </div>
                                    <figure class="card-img-top mb-4 overflow-hidden bsb-overlay-hover">
                                        <a href="{{ route('press.detail', $d->slug) }}">
                                            <img class="img-fluid bsb-scale bsb-hover-scale-up" loading="lazy"
                                                src="{{ asset('press/' . $d->image) }}" alt="{{ $d->name }}">
                                        </a>
                                    </figure>
                                </div>
                            </article>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection
