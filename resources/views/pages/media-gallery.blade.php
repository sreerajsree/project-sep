@extends('layouts.main')

@push('styles')
    <link rel="stylesheet" href="{{ asset('lightbox/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('lightbox/css/demo.css') }}">
@endpush

@section('content')
    <div class="py-5">
        <img src="https://www.mankindpharma.com//media/images/cmspage/image/media-gallery-banner-1548144146.jpg"
            class="img-fluid" alt="">
    </div>
    <div class="container">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item"><a href="#">Media Gallery</a></li>
            </ol>
        </nav>
        <h1 class="display-2 my-5">Media Gallery</h1>
        <div  class="cd__intro">
            <div class="photo-gallery">
                <div class="container">
                    <div class="row row-cols-1 row-cols-md-2 row-cols-lg-4 g-4 gallery-grid">
                        <div class="col">
                            <a class="gallery-item" href="https://picsum.photos/id/251/1200/800.webp">
                                <img src="https://picsum.photos/id/251/480/320.webp" class="img-fluid"
                                    alt="Lorem ipsum dolor sit amet">
                            </a>
                        </div>
                        <div class="col">
                            <a class="gallery-item" href="https://picsum.photos/id/678/1200/800.webp">
                                <img src="https://picsum.photos/id/678/480/320.webp" class="img-fluid"
                                    alt="Ipsum lorem dolor sit amet">
                            </a>
                        </div>
                        <div class="col">
                            <a class="gallery-item" href="https://picsum.photos/id/74/1200/800.webp">
                                <img src="https://picsum.photos/id/74/480/320.webp" class="img-fluid"
                                    alt="Dolor lorem ipsum sit amet">
                            </a>
                        </div>
                        <div class="col">
                            <a class="gallery-item" href="https://picsum.photos/id/92/1200/800.webp">
                                <img src="https://picsum.photos/id/92/480/320.webp" class="img-fluid"
                                    alt="Sit amet lorem ipsum dolor">
                            </a>
                        </div>
                        <div class="col">
                            <a class="gallery-item" href="https://picsum.photos/id/62/1200/800.webp">
                                <img src="https://picsum.photos/id/62/480/320.webp" class="img-fluid"
                                    alt="Aut ipsam deserunt nostrum quo">
                            </a>
                        </div>
                        <div class="col">
                            <a class="gallery-item" href="https://picsum.photos/id/575/1200/800.webp">
                                <img src="https://picsum.photos/id/575/480/320.webp" class="img-fluid"
                                    alt="Nulla ex nihil eligendi tempora">
                            </a>
                        </div>
                        <div class="col">
                            <a class="gallery-item" href="https://picsum.photos/id/110/1200/800.webp">
                                <img src="https://picsum.photos/id/110/480/320.webp" class="img-fluid"
                                    alt="Nemo perspiciatis voluptatum">
                            </a>
                        </div>
                        <div class="col">
                            <a class="gallery-item" href="https://picsum.photos/id/177/1200/800.webp">
                                <img src="https://picsum.photos/id/177/480/320.webp" class="img-fluid"
                                    alt="Accusantium consequuntur modi">
                            </a>
                        </div>
                        <div class="col">
                            <a class="gallery-item" href="https://picsum.photos/id/197/1200/800.webp">
                                <img src="https://picsum.photos/id/197/480/320.webp" class="img-fluid"
                                    alt="Dolore asperiores reprehenderit">
                            </a>
                        </div>
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
