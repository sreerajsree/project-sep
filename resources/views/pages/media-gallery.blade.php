@extends('layouts.main')

@push('styles')
    <link rel="stylesheet" href="{{ asset('lightbox/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('lightbox/css/demo.css') }}">
@endpush

@section('content')
    <div class="top-banner">
        <img src="https://www.mankindpharma.com//media/images/cmspage/image/media-gallery-banner-1548144146.jpg"
            class="img-fluid" alt="">
            <h1>Media Gallery</h1>
    </div>
    <div class="container py-5">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="/">Home</a></li>
                <li class="breadcrumb-item"><a href="/media-gallery">Media Gallery</a></li>
            </ol>
        </nav>
        <h1 class="display-2 my-5"></h1>
        <div class="cd__intro">
            <div class="photo-gallery">
                <div class="container">
                    <div class="row row-cols-1 row-cols-md-2 row-cols-lg-4 g-4 gallery-grid">
                        @foreach ($data as $item)
                            <div class="col">
                                <a class="gallery-item" href="{{ asset('gallery/' . $item->image) }}">
                                    <img src="{{ asset('gallery/' . $item->image) }}" class="img-fluid"
                                        alt="{{ $item->image }}">
                                </a>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade lightbox-modal" id="lightbox-modal" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered modal-fullscreen">
            <div class="modal-content">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                <div class="modal-body">
                    <div class="lightbox-content">
                        <!-- JS content here -->
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@push('scripts')
    <script src="{{ asset('lightbox/js/script.js') }}"></script>
@endpush
