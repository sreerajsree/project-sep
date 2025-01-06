@extends('layouts.main')


@section('content')
    <div class="top-banner">
        <img src="{{ asset('banner/about.webp') }}" class="img-fluid"
            alt="">
            <h1>About Us</h1>
    </div>
    <div class="container py-5">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="/">Home</a></li>
                <li class="breadcrumb-item"><a href="{{ route('about') }}">About Us</a></li>
            </ol>
        </nav>
        <div>
            
        </div>
    </div>
@endsection
