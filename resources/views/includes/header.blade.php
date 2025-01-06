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
                    <a href="{{ route('about') }}" class="nav__link">About</a>
                </li>
                <!-- Dropdown 1 -->
                <li class="dropdown__item">
                    <div class="nav__link dropdown__button">
                        Company <i class="ri-arrow-down-s-line dropdown__arrow"></i>
                    </div>

                    <div class="dropdown__container">
                        <div class="dropdown__content">
                            <div class="dropdown__group">
                                <img src="https://www.mankindpharma.com/assets/img/m-img.jpg" class="img-fluid"
                                    alt="">
                            </div>
                            <div class="dropdown__group">
                                <ul class="dropdown__list">
                                    <li>
                                        <a href="{{ route('company') }}" class="dropdown__link">Our Company</a>
                                    </li>
                                    {{-- <li>
                                        <a href="{{ route('management') }}" class="dropdown__link">Management</a>
                                    </li> --}}
                                    <li>
                                        <a href="{{ route('our.brand') }}" class="dropdown__link">Our Brands</a>
                                    </li>
                                    <li>
                                        <a href="{{ route('product') }}" class="dropdown__link">Our Products</a>
                                    </li>
                                    <li>
                                        <a href="{{ route('environment') }}" class="dropdown__link">Enviornment, Health
                                            and Safety</a>
                                    </li>
                                </ul>
                            </div>

                            <div class="dropdown__group">
                                <ul class="dropdown__list">
                                    {{-- <li>
                                        <a href="{{ route('manufacturing') }}" class="dropdown__link">Manufacturing</a>
                                    </li>

                                    <li>
                                        <a href="{{ route('quality') }}" class="dropdown__link">Quality</a>
                                    </li>

                                    <li>
                                        <a href="{{ route('partnership') }}" class="dropdown__link">Partnership</a>
                                    </li> --}}
                                    {{-- <li>
                                        <a href="#" class="dropdown__link">Awards & Recognition</a>
                                    </li> --}}
                                </ul>
                            </div>

                            <div class="dropdown__group">
                                <ul class="dropdown__list">
                                    

                                    {{-- <li>
                                        <a href="#" class="dropdown__link">Kind Care</a>
                                    </li> --}}

                                    {{-- <li>
                                        <a href="{{ route('initiatives') }}" class="dropdown__link">Our Initiatives</a>
                                    </li> --}}
                                </ul>
                            </div>
                        </div>
                    </div>
                </li>

                <!-- Dropdown 2 -->
                {{-- <li class="dropdown__item">
                    <div class="nav__link dropdown__button">
                        Media <i class="ri-arrow-down-s-line dropdown__arrow"></i>
                    </div>

                    <div class="dropdown__container">
                        <div class="dropdown__content">
                            <div class="dropdown__group">
                                <img src="https://www.mankindpharma.com/assets/img/menu-media-gallery.jpg"
                                    class="img-fluid" alt="">
                            </div>
                            <div class="dropdown__group">
                                <ul class="dropdown__list">
                                    <li>
                                        <a href="{{ route('gallery') }}" class="dropdown__link">Media Gallery</a>
                                    </li>
                                    <li>
                                        <a href="{{ route('press') }}" class="dropdown__link">Press Release</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </li> --}}
                <!-- Dropdown 3 -->
                {{-- <li class="dropdown__item">
                    <div class="nav__link dropdown__button">
                        R&D <i class="ri-arrow-down-s-line dropdown__arrow"></i>
                    </div>

                    <div class="dropdown__container">
                        <div class="dropdown__content">
                            <div class="dropdown__group">
                                <img src="https://www.mankindpharma.com/assets/img/menu-r-and-d.jpg" class="img-fluid"
                                    alt="">
                            </div>
                            <div class="dropdown__group">
                                <ul class="dropdown__list">
                                    <li>
                                        <a href="{{ route('research.development') }}"
                                            class="dropdown__link">Overview</a>
                                    </li>
                                    <li>
                                        <a href="{{ route('active.pharmaceutical.ingredients') }}"
                                            class="dropdown__link">Active Pharmaceuticals Ingredients</a>
                                    </li>
                                    <li>
                                        <a href="{{ route('formulation.research.development') }}"
                                            class="dropdown__link">Formulation Research & Development</a>
                                    </li>
                                    <li>
                                        <a href="{{ route('analytical.research.development') }}"
                                            class="dropdown__link">Analytical Research & Development</a>
                                    </li>
                                    <li>
                                        <a href="{{ route('ipr') }}" class="dropdown__link">IPR</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </li> --}}
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
