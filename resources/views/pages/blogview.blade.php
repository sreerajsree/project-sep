@extends('layouts.main')

@push('styles')
    <link rel="stylesheet" href="https://unpkg.com/bs-brain@2.0.4/components/blogs/blog-5/assets/css/blog-5.css">
@endpush
@section('content')
    <div class="py-5">

    </div>
    <div class="container">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item"><a href="{{ route('blog') }}">Blog</a></li>
                <li class="breadcrumb-item"><a href="#">{{ $data->name }}</a></li>
            </ol>
        </nav>
        <div class="mb-5">
            <img src="{{ asset('blog/' . $data->image) }}" alt="{{ $data->name }}" class="img-fluid">
            <h1 class="my-4">{{ $data->name }}</h1>
            <div>
                {!! $data->body  !!}
            </div>
        </div>
    </div>
@endsection
