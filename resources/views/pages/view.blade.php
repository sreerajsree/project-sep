@extends('layouts.main')
@push('seo')
    <title>{{ $product->meta_title }}</title>
    <meta name="description"
        content="{{ $product->meta_description }}" />
@endpush
@section('content')
    <div class="container py-5">
        <h1 class="display-2 my-5">{{ $product->name }}</h1>
        <div class="mb-5">
            <div class="container product">
                <div class="row">
                    <div class="col-md-6">
                        <img src="{{ asset('products/' . $product->image) }}" class="img-fluid" alt="{{ $product->name }}">
                    </div>
                    <div class="col-md-6">
                        <h2 class="h1 text-primary">{{ $product->name }}</h2>
                        <h3>Get Latest Price</h3>
                        <table class="table table-bordered">
                            <tr>
                                <td>Brand</td>
                                <td>{{ $product->brand }}</td>
                            </tr>
                            <tr>
                                <td>Composition</td>
                                <td>{{ $product->composition }}</td>
                            </tr>
                            <tr>
                                <td>Manufacturer</td>
                                <td>{{ $product->manufacturer }}</td>
                        </table>
                        <div>{!! $product->description !!}</div>
                        <div class="mt-5">
                            <a href="{{ route('contact') }}" class="btn btn-lg btn-success">Enquiry Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
