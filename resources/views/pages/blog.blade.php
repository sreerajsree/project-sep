@extends('layouts.main')

@push('styles')
    <link rel="stylesheet" href="https://unpkg.com/bs-brain@2.0.4/components/blogs/blog-5/assets/css/blog-5.css">
@endpush
@section('content')
    <div class="container py-5">
        <h1 class="display-2 my-5">Blog</h1>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item"><a href="#">Blog</a></li>
            </ol>
        </nav>
        <div class="mb-5">
            <div class="container overflow-hidden">
                <div class="row gy-4 gy-md-5 gx-xl-6 gy-xl-6 gx-xxl-9 gy-xxl-9">
                    @foreach ($data as $d)
                        <div class="col-12 col-lg-6">
                            <article>
                                <div class="card border-0 bg-transparent">
                                    <figure class="card-img-top mb-4 overflow-hidden bsb-overlay-hover">
                                        <a href="{{ route('blog.detail', $d->slug) }}">
                                            <img class="img-fluid bsb-scale bsb-hover-scale-up" loading="lazy"
                                                src="{{ asset('blog/' . $d->image) }}" alt="{{ $d->name }}">
                                        </a>
                                        <figcaption>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32"
                                                fill="currentColor" class="bi bi-eye text-white bsb-hover-fadeInLeft"
                                                viewBox="0 0 16 16">
                                                <path
                                                    d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8zM1.173 8a13.133 13.133 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5c2.12 0 3.879 1.168 5.168 2.457A13.133 13.133 0 0 1 14.828 8c-.058.087-.122.183-.195.288-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5c-2.12 0-3.879-1.168-5.168-2.457A13.134 13.134 0 0 1 1.172 8z" />
                                                <path
                                                    d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5zM4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0z" />
                                            </svg>
                                            <h4 class="h6 text-white bsb-hover-fadeInRight mt-2">Read More</h4>
                                        </figcaption>
                                    </figure>
                                    <div class="card-body m-0 p-0">
                                        <div class="entry-header mb-3">
                                            <h2 class="card-title entry-title h4 m-0">
                                                <a class="link-dark text-decoration-none"
                                                    href="{{ route('blog.detail', $d->slug) }}">{{ $d->name }}</a>
                                            </h2>
                                        </div>
                                    </div>
                                    <div class="card-footer border-0 bg-transparent p-0 m-0">
                                        <ul class="entry-meta list-unstyled d-flex align-items-center m-0">
                                            <li>
                                                <a class="fs-7 link-secondary text-decoration-none d-flex align-items-center"
                                                    href="#!">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14"
                                                        fill="currentColor" class="bi bi-calendar3" viewBox="0 0 16 16">
                                                        <path
                                                            d="M14 0H2a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2zM1 3.857C1 3.384 1.448 3 2 3h12c.552 0 1 .384 1 .857v10.286c0 .473-.448.857-1 .857H2c-.552 0-1-.384-1-.857V3.857z" />
                                                        <path
                                                            d="M6.5 7a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm-9 3a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm-9 3a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2z" />
                                                    </svg>
                                                    <span class="ms-2 fs-7">{{ $d->created_at }}</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </article>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection
