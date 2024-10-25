<header class="header" id="header">
    <nav class="nav container">
        <div class="nav__data">
            <a href="/" class="nav__logo">
                <img src="https://www.mankindpharma.com/assets/img/logo.png" alt="">
            </a>

            <div class="nav__toggle" id="nav-toggle">
                <i class="ri-menu-line nav__toggle-menu"></i>
                <i class="ri-close-line nav__toggle-close"></i>
            </div>
        </div>

        <!-- Nav Menu -->
        <div class="nav__menu" id="nav-menu">
            <ul class="nav__list">

                <!-- Dropdown 1 -->
                <li class="dropdown__item">
                    <div class="nav__link dropdown__button">
                        Company <i class="ri-arrow-down-s-line dropdown__arrow"></i>
                    </div>

                    <div class="dropdown__container">
                        <div class="dropdown__content">
                            <div class="dropdown__group">
                                <img src="https://www.mankindpharma.com/assets/img/m-img.jpg" class="img-fluid" alt="">
                            </div>
                            <div class="dropdown__group">
                                <ul class="dropdown__list">
                                    <li>
                                        <a href="{{ route('company') }}" class="dropdown__link">Our Company</a>
                                    </li>
                                    <li>
                                        <a href="#" class="dropdown__link">Heritage</a>
                                    </li>
                                    <li>
                                        <a href="{{ route('management') }}" class="dropdown__link">Management</a>
                                    </li>
                                    <li>
                                        <a href="#" class="dropdown__link">Our Brands</a>
                                    </li>
                                    <li>
                                        <a href="#" class="dropdown__link">Our Products</a>
                                    </li>
                                </ul>
                            </div>

                            <div class="dropdown__group">
                                <ul class="dropdown__list">
                                    <li>
                                        <a href="#" class="dropdown__link">Manufacturing</a>
                                    </li>

                                    <li>
                                        <a href="{{ route('quality')}}" class="dropdown__link">Quality</a>
                                    </li>

                                    <li>
                                        <a href="{{ route('partnership') }}" class="dropdown__link">Partnership</a>
                                    </li>
                                    <li>
                                        <a href="#" class="dropdown__link">Awards & Recognition</a>
                                    </li>
                                </ul>
                            </div>

                            <div class="dropdown__group">
                                <ul class="dropdown__list">
                                    <li>
                                        <a href="#" class="dropdown__link">Enviornment, Health and Safety</a>
                                    </li>

                                    <li>
                                        <a href="#" class="dropdown__link">Kind Care</a>
                                    </li>

                                    <li>
                                        <a href="#" class="dropdown__link">Our Initiatives</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </li>

                <!-- Dropdown 2 -->
                <li class="dropdown__item">
                    <div class="nav__link dropdown__button">
                        Media <i class="ri-arrow-down-s-line dropdown__arrow"></i>
                    </div>

                    <div class="dropdown__container">
                        <div class="dropdown__content">
                            <div class="dropdown__group">
                                <img src="https://www.mankindpharma.com/assets/img/menu-media-gallery.jpg" class="img-fluid" alt="">
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
                </li>
                <!-- Dropdown 3 -->
                <li class="dropdown__item">
                    <div class="nav__link dropdown__button">
                        R&D <i class="ri-arrow-down-s-line dropdown__arrow"></i>
                    </div>

                    <div class="dropdown__container">
                        <div class="dropdown__content">
                            <div class="dropdown__group">
                                <img src="https://www.mankindpharma.com/assets/img/menu-r-and-d.jpg" class="img-fluid" alt="">
                            </div>
                            <div class="dropdown__group">
                                <ul class="dropdown__list">
                                    <li>
                                        <a href="{{ route('research.development') }}" class="dropdown__link">Overview</a>
                                    </li>
                                    <li>
                                        <a href="{{ route('active.pharmaceutical.ingredients') }}" class="dropdown__link">Active Pharmaceuticals Ingredients</a>
                                    </li>
                                    <li>
                                        <a href="{{ route('formulation.research.development') }}" class="dropdown__link">Formulation Research & Development</a>
                                    </li>
                                    <li>
                                        <a href="{{ route('analytical.research.development') }}" class="dropdown__link">Analytical Research & Development</a>
                                    </li>
                                    <li>
                                        <a href="{{ route('ipr') }}" class="dropdown__link">IPR</a>
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
                    <a href="#" class="nav__link"><i class="ri-search-line"></i></a>
                </li>
            </ul>
        </div>
    </nav>
</header>
