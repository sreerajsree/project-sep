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
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item"><a href="{{ route('press') }}">Press Release</a></li>
                <li class="breadcrumb-item"><a href="#">{{ $data->name }}</a></li>
            </ol>
        </nav>
        <h1 class="display-2 my-5">Press Release</h1>
        <div class="mb-5">
            <h1 class="h1 my-4">{{ $data->name }}</h1>
            <div>
                {!! $data->body  !!}
            </div>
        </div>
    </div>
@endsection
