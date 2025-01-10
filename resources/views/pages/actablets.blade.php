@extends('layouts.main')

@push('seo')
    <title>Anti Cancer Tablets</title>
    <meta name="description"
        content="Anti Cancer Tablets" />
@endpush
@section('content')
    <div class="top-banner">
        <img src="{{ asset('banner/products.webp') }}" class="img-fluid" alt="">
        <h1>Anti Cancer Tablets</h1>
    </div>
    <div class="container py-5">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="/">Home</a></li>
                <li class="breadcrumb-item"><a href="{{ route('actablets') }}">Anti Cancer Tablets</a></li>
            </ol>
        </nav>
        <div class="row py-4">
            @foreach ($products as $item)
                <div class="col-md-4">
                    <div class="card">
                        <img src="{{ asset('products/' . $item['image']) }}" class="card-img-top img-fluid"
                            alt="{{ $item['name'] }}">
                        <div class="card-body">
                            <h5 class="card-title text-center">{{ $item['name'] }}</h5>
                            <a href="{{ route('view.product', $item->slug) }}" class="btn btn-primary d-flex justify-content-center">Read More</a>
                        </div>
                    </div>
            @endforeach
        </div>
    </div>
    @endsection
