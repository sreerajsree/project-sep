<!-- Coding by CodeWithMangesh || (M.B) -->
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="Start your development with CodeWithMangesh." />
    <meta name="author" content="CodeWithMangesh" />

    <!-- =============== Remixicon =============== -->
    <link href="https://cdn.jsdelivr.net/npm/remixicon@4.2.0/fonts/remixicon.css" rel="stylesheet" />

    <!-- =============== StyleSheet =============== -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    <title>Project</title>
</head>

<body>
    <!-- =============== Header =============== -->
    <header class="header" id="header">
        <nav class="nav container">
            <div class="nav__data">
                <a href="#" class="nav__logo">
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
                                    <div class="dropdown__icon">
                                        <i class="ri-flashlight-line"></i>
                                    </div>

                                    <span class="dropdown__title">Most Viewed Courses</span>

                                    <ul class="dropdown__list">
                                        <li>
                                            <a href="#" class="dropdown__link">HTML for beginners</a>
                                        </li>

                                        <li>
                                            <a href="#" class="dropdown__link">Advanced CSS</a>
                                        </li>

                                        <li>
                                            <a href="#" class="dropdown__link">JavaScript OOP</a>
                                        </li>
                                    </ul>
                                </div>

                                <div class="dropdown__group">
                                    <div class="dropdown__icon">
                                        <i class="ri-heart-3-line"></i>
                                    </div>

                                    <span class="dropdown__title">Popular Courses</span>

                                    <ul class="dropdown__list">
                                        <li>
                                            <a href="#" class="dropdown__link">Development with Flutter</a>
                                        </li>

                                        <li>
                                            <a href="#" class="dropdown__link">Web Development with Flutter</a>
                                        </li>

                                        <li>
                                            <a href="#" class="dropdown__link">Backend Development Expert</a>
                                        </li>
                                    </ul>
                                </div>

                                <div class="dropdown__group">
                                    <div class="dropdown__icon">
                                        <i class="ri-bookmark-line"></i>
                                    </div>

                                    <span class="dropdown__title">Careers</span>

                                    <ul class="dropdown__list">
                                        <li>
                                            <a href="#" class="dropdown__link">Web Development</a>
                                        </li>

                                        <li>
                                            <a href="#" class="dropdown__link">Applications Development</a>
                                        </li>

                                        <li>
                                            <a href="#" class="dropdown__link">UI/UX Design</a>
                                        </li>

                                        <li>
                                            <a href="#" class="dropdown__link">Information Security</a>
                                        </li>
                                    </ul>
                                </div>

                                <div class="dropdown__group">
                                    <div class="dropdown__icon">
                                        <i class="ri-file-paper-2-line"></i>
                                    </div>

                                    <span class="dropdown__title">Certifications</span>

                                    <ul class="dropdown__list">
                                        <li>
                                            <a href="#" class="dropdown__link">Paid Certifications</a>
                                        </li>

                                        <li>
                                            <a href="#" class="dropdown__link">Free Certifications</a>
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

    <div class="pt-5"><img class="img-fluid" src="https://www.mankindpharma.com/assets/img/banner1.jpg"
            alt="">
    </div>
    <div class="py-3">
        <section id="statistic" class="statistic-section one-page-section">
            <div class="container">
                <div class="row text-center">
                    <div class="col-xs-12 col-md-4">
                        <div class="counter">
                            <i class="ri-group-line stats-icon"></i>
                            <h2 class="timer count-title count-number">999</h2>
                            <div class="stats-line-black"></div>
                            <p class="stats-text">EMPLOYEES</p>
                        </div>
                    </div>
                    <div class="col-xs-12 col-md-4">
                        <div class="counter">
                            <i class="ri-sort-asc stats-icon"></i>
                            <h2 class="timer count-title count-number">5
                            </h2>
                            <div class="stats-line-black"></div>
                            <p class="stats-text">RANK</p>
                        </div>
                    </div>
                    <div class="col-xs-12 col-md-4">
                        <div class="counter">
                            <i class="ri-money-dollar-circle-line stats-icon"></i>
                            <h2 class="timer count-title count-number">10000</h2>
                            <div class="stats-line-black"></div>
                            <p class="stats-text">REVENUE</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-7">
                <h2 class="display-1">Work With Us</h2>
                <div class="mt-4">
                    <a class="link-dark fs-5" href="">Know More</a>
                </div>
            </div>
            <div class="col-md-5">
                <img class="img-fluid" src="https://www.mankindpharma.com/assets/img/about-banner-1.jpg" alt="">
            </div>
        </div>
    </div>

    <footer class="footer">
        <div class="container pt-5 border-bottom">
            <div class="row">
                <div class="col-md-3 col-sm-12 mb-3 text-center">
                    <img src="https://www.mankindpharma.com/assets/img/logo.png" alt="">
                </div>
                <div class="col-md-9 col-sm-12">
                    <div class="row">
                        <div class="col-md-4 col-sm-6 col-6 p-0 float-left mb-3">
                            <h5 class="mb-4 font-weight-bold text-uppercase">Our Brands</h5>
                            <ul class="list-group">
                                <li class="list-group-item bg-transparent border-0 p-0 mb-2"><a
                                        href="">Sales</a></li>
                                <li class="list-group-item bg-transparent border-0 p-0 mb-2"><a
                                        href="">Workforce</a></li>
                                <li class="list-group-item bg-transparent border-0 p-0 mb-2"><a href="">
                                        E-Commerce</a></li>
                                <li class="list-group-item bg-transparent border-0 p-0 mb-2"><a
                                        href="">Finance</a></li>
                                <li class="list-group-item bg-transparent border-0 p-0 mb-2"><a
                                        href="">Business Apps</a></li>
                            </ul>
                        </div>


                        <div class="col-md-4 col-sm-6 col-6 mb-3 p-0 float-left">
                            <h5 class="mb-4 font-weight-bold text-uppercase">Company</h5>
                            <ul class="list-group">
                                <li class="list-group-item bg-transparent border-0 p-0 mb-2"><a
                                        href="../about-naologic.html"></i>Privacy Policy</a></li>
                                <li class="list-group-item bg-transparent border-0 p-0 mb-2"><a href=""></i>
                                        Terms for Use of Website</a></li>
                                <li class="list-group-item bg-transparent border-0 p-0 mb-2"><a href=""></i>
                                        Disclaimer</a></li>
                                <li class="list-group-item bg-transparent border-0 p-0 mb-2"><a href=""></i>
                                        Contact Us</a></li>
                            </ul>
                        </div>

                        <div class="col-md-4 col-sm-6 col-6 mb-3 p-0 float-left">
                            <h5 class="mb-4 font-weight-bold text-uppercase">Connect</h5>
                            <ul class="list-group">
                                <li class="list-group-item bg-transparent border-0 p-0 mb-2">
                                    <a href=""><i class="ri-linkedin-fill me-1"></i> LinkedIn</a>
                                </li>
                                <li class="list-group-item bg-transparent border-0 p-0 mb-2">
                                    <a href=""><i class="ri-twitter-x-fill me-1"></i>
                                        Twitter</a>
                                </li class="list-group-item bg-transparent border-0 p-0 mb-2">
                                <li class="list-group-item bg-transparent border-0 p-0 mb-2">
                                    <a href="" target="_blank"><i class="ri-facebook-fill me-1"></i>
                                        Facebook</a>
                                </li>
                                <li class="list-group-item bg-transparent border-0 p-0 mb-2">
                                    <a href="" target="_blank"><i class="ri-youtube-fill me-1"></i>
                                        YouTube</a>
                                </li>
                            </ul>
                        </div>
                    </div>

                </div>
                <div class="col-md-12">
                    <div class="py-4 d-flex justify-content-center align-items-center">
                        Copyright {{ date('Y') }}
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!-- =============== Main =============== -->
    <main class="main"></main>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Counter-Up/1.0.0/jquery.counterup.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/2.0.3/waypoints.min.js"></script>
    <script>
        $(document).ready(function($) {
            $('.count-number').counterUp({
                delay: 10,
                time: 10000
            });
        });
    </script>
</body>

</html>
