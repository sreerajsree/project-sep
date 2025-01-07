<header class="header" id="header">
    <nav class="nav container">
        <div class="nav__data">
            <a href="/" class="nav__logo">
                <img src="{{ asset('images/logo.png') }}" alt="Soteria Pharmaceuticals Logo">
            </a>

            <div class="nav__toggle" id="nav-toggle">
                <i class="ri-menu-line nav__toggle-menu"></i>
                <i class="ri-close-line nav__toggle-close"></i>
            </div>
        </div>

        <!-- Nav Menu -->
        <div class="nav__menu" id="nav-menu">
            <ul class="nav__list">
                <li>
                    <a href="{{ route('company') }}" class="nav__link">About</a>
                </li>
                <!-- Dropdown 1 -->
                <li class="dropdown__item">
                    <div class="nav__link dropdown__button">
                        Company <i class="ri-arrow-down-s-line dropdown__arrow"></i>
                    </div>

                    <div class="dropdown__container">
                        <div class="dropdown__content">
                            <div class="dropdown__group">
                                <img src="{{ asset('images/about.jpg') }}" class="img-fluid"
                                    alt="About Soteria Pharmaceuticals">
                            </div>
                            <div class="dropdown__group">
                                <ul class="dropdown__list">
                                    <li>
                                        <a href="{{ route('company') }}" class="dropdown__link">Our Company</a>
                                    </li>
                                    <li>
                                        <a href="{{ route('our.brand') }}" class="dropdown__link">Our Brands</a>
                                    </li>
                                    <li>
                                        <a href="{{ route('our.product') }}" class="dropdown__link">Our Products</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </li>

                <!-- Dropdown 2 -->
                <li class="dropdown__item">
                    <div class="nav__link dropdown__button">
                        Products <i class="ri-arrow-down-s-line dropdown__arrow"></i>
                    </div>

                    <div class="dropdown__container">
                        <div class="dropdown__content">
                            <div class="dropdown__group">
                                <img src="{{ asset('images/product.jpg') }}" class="img-fluid"
                                    alt="Soteria Pharmaceuticals Products">
                            </div>
                            <div class="dropdown__group">
                                <ul class="dropdown__list">
                                    <li>
                                        <a href="#" class="dropdown__link">Anti Cancer Capsules</a>
                                    </li>
                                    <li>
                                        <a href="#" class="dropdown__link">Anti Cancer Tablets</a>
                                    </li>
                                    <li>
                                        <a href="#" class="dropdown__link">Pharmaceutical Injection</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </li>
                
                <li>
                    <a href="{{ route('careers') }}" class="nav__link">Careers</a>
                </li>
                <li>
                    <a href="{{ route('blog') }}" class="nav__link">Blog</a>
                </li>
                <li>
                    <a href="{{ route('contact') }}" class="nav__link enquiry-btn">Enquiry Now</a>
                </li>
            </ul>
        </div>
    </nav>
</header>
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            {{-- <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">&nbsp;</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div> --}}
            <div class="modal-body">
                <form class="">
                    <div class="row no-gutters align-items-center">
                        <div class="col-auto">
                            <i class="fas fa-search h4 text-body"></i>
                        </div>
                        <!--end of col-->
                        <div class="col">
                            <input class="form-control form-control-lg form-control-borderless" type="search"
                                placeholder="Search">
                        </div>
                        <!--end of col-->
                        <div class="col-auto">
                            <button class="btn btn-lg btn-primary" type="submit">Search</button>
                        </div>
                        <!--end of col-->
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
