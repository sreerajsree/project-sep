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
                                        <a href="#" class="dropdown__link">Management</a>
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
                                        <a href="#" class="dropdown__link">Partnership</a>
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
                                <div class="dropdown__icon">
                                    <i class="ri-code-line"></i>
                                </div>

                                <span class="dropdown__title">Web Templates</span>

                                <ul class="dropdown__list">
                                    <li>
                                        <a href="#" class="dropdown__link">Free Templates</a>
                                    </li>

                                    <li>
                                        <a href="#" class="dropdown__link">Paid Templates</a>
                                    </li>
                                </ul>
                            </div>

                            <div class="dropdown__group">
                                <div class="dropdown__icon">
                                    <i class="ri-pen-nib-line"></i>
                                </div>

                                <span class="dropdown__title">Designs</span>

                                <ul class="dropdown__list">
                                    <li>
                                        <a href="#" class="dropdown__link">Web Design</a>
                                    </li>

                                    <li>
                                        <a href="#" class="dropdown__link">App Design</a>
                                    </li>

                                    <li>
                                        <a href="#" class="dropdown__link">Component Design</a>
                                    </li>
                                </ul>
                            </div>

                            <div class="dropdown__group">
                                <div class="dropdown__icon">
                                    <i class="ri-apps-2-line"></i>
                                </div>

                                <span class="dropdown__title">Others</span>

                                <ul class="dropdown__list">
                                    <li>
                                        <a href="#" class="dropdown__link">Recent Blogs</a>
                                    </li>

                                    <li>
                                        <a href="#" class="dropdown__link">Tutorial Videos</a>
                                    </li>

                                    <li>
                                        <a href="#" class="dropdown__link">Webinar</a>
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
                                <div class="dropdown__icon">
                                    <i class="ri-community-line"></i>
                                </div>

                                <span class="dropdown__title">About Us</span>

                                <ul class="dropdown__list">
                                    <li>
                                        <a href="#" class="dropdown__link">About Us</a>
                                    </li>

                                    <li>
                                        <a href="#" class="dropdown__link">Support</a>
                                    </li>

                                    <li>
                                        <a href="#" class="dropdown__link">Contact Us</a>
                                    </li>
                                </ul>
                            </div>

                            <div class="dropdown__group">
                                <div class="dropdown__icon">
                                    <i class="ri-shield-line"></i>
                                </div>

                                <span class="dropdown__title">Safety & Quality</span>

                                <ul class="dropdown__list">
                                    <li>
                                        <a href="#" class="dropdown__link">Cookie Settings</a>
                                    </li>

                                    <li>
                                        <a href="#" class="dropdown__link">Privacy Policy</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </li>
                <li>
                    <a href="#" class="nav__link">Careers</a>
                </li>
                <li>
                    <a href="#" class="nav__link">Blog</a>
                </li>
                <li>
                    <a href="#" class="nav__link"><i class="ri-search-line"></i></a>
                </li>
            </ul>
        </div>
    </nav>
</header>
