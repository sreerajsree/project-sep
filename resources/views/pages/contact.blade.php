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
    <link rel="stylesheet" href="https://unpkg.com/bs-brain@2.0.4/utilities/bsb-overlay/bsb-overlay.css">
<link rel="stylesheet" href="https://unpkg.com/bs-brain@2.0.4/utilities/background/background.css">
<link rel="stylesheet" href="https://unpkg.com/bs-brain@2.0.4/utilities/margin/margin.css">
<link rel="stylesheet" href="https://unpkg.com/bs-brain@2.0.4/utilities/padding/padding.css">
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

    <div class="py-5">
        <div class="container mt-5">
          <div class="row justify-content-md-center">
            <div class="col-12 col-md-10 col-lg-8 col-xl-7 col-xxl-6">
              <p class="text-secondary mb-5 text-center lead fs-4">Our team is available to provide prompt and helpful responses to all inquiries. You can reach us via phone, email, or by filling out the contact form below.</p>
              <hr class="w-50 mx-auto mb-5 mb-xl-9 border-dark-subtle">
            </div>
          </div>
        </div>
      
        <div class="container">
          <div class="row">
            <div class="col-12">
              <div class="card border border-light rounded shadow-sm overflow-hidden">
                <div class="card-body p-0">
                  <div class="row gy-3 gy-md-4 gy-lg-0">
                    <div class="col-12 col-lg-6 bsb-overlay background-position-center background-size-cover" style="--bsb-overlay-opacity: 0.7; background-image: url('https://bootstrapbrain.com/demo/components/contacts/contact-6/assets/img/contact-img-1.webp');">
                      <div class="row align-items-lg-center justify-content-center h-100">
                        <div class="col-11 col-xl-10">
                          <div class="contact-info-wrapper py-4 py-xl-5">
                            <h2 class="h1 mb-3 text-light">Get in touch</h2>
                            <p class="lead fs-4 text-light opacity-75 mb-4 mb-xxl-5">We're always on the lookout to work with new clients. If you're interested in working with us, please get in touch in one of the following ways.</p>
                            <div class="d-flex mb-4 mb-xxl-5">
                              <div class="me-4 text-primary">
                                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-geo" viewBox="0 0 16 16">
                                  <path fill-rule="evenodd" d="M8 1a3 3 0 1 0 0 6 3 3 0 0 0 0-6zM4 4a4 4 0 1 1 4.5 3.969V13.5a.5.5 0 0 1-1 0V7.97A4 4 0 0 1 4 3.999zm2.493 8.574a.5.5 0 0 1-.411.575c-.712.118-1.28.295-1.655.493a1.319 1.319 0 0 0-.37.265.301.301 0 0 0-.057.09V14l.002.008a.147.147 0 0 0 .016.033.617.617 0 0 0 .145.15c.165.13.435.27.813.395.751.25 1.82.414 3.024.414s2.273-.163 3.024-.414c.378-.126.648-.265.813-.395a.619.619 0 0 0 .146-.15.148.148 0 0 0 .015-.033L12 14v-.004a.301.301 0 0 0-.057-.09 1.318 1.318 0 0 0-.37-.264c-.376-.198-.943-.375-1.655-.493a.5.5 0 1 1 .164-.986c.77.127 1.452.328 1.957.594C12.5 13 13 13.4 13 14c0 .426-.26.752-.544.977-.29.228-.68.413-1.116.558-.878.293-2.059.465-3.34.465-1.281 0-2.462-.172-3.34-.465-.436-.145-.826-.33-1.116-.558C3.26 14.752 3 14.426 3 14c0-.599.5-1 .961-1.243.505-.266 1.187-.467 1.957-.594a.5.5 0 0 1 .575.411z" />
                                </svg>
                              </div>
                              <div>
                                <h4 class="mb-3 text-light">Address</h4>
                                <address class="mb-0 text-light opacity-75">8014 Edith Blvd NE, Albuquerque, New York, United States</address>
                              </div>
                            </div>
                            <div class="row mb-4 mb-xxl-5">
                              <div class="col-12 col-xxl-6">
                                <div class="d-flex mb-4 mb-xxl-0">
                                  <div class="me-4 text-primary">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-telephone-outbound" viewBox="0 0 16 16">
                                      <path d="M3.654 1.328a.678.678 0 0 0-1.015-.063L1.605 2.3c-.483.484-.661 1.169-.45 1.77a17.568 17.568 0 0 0 4.168 6.608 17.569 17.569 0 0 0 6.608 4.168c.601.211 1.286.033 1.77-.45l1.034-1.034a.678.678 0 0 0-.063-1.015l-2.307-1.794a.678.678 0 0 0-.58-.122l-2.19.547a1.745 1.745 0 0 1-1.657-.459L5.482 8.062a1.745 1.745 0 0 1-.46-1.657l.548-2.19a.678.678 0 0 0-.122-.58L3.654 1.328zM1.884.511a1.745 1.745 0 0 1 2.612.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511zM11 .5a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 .5.5v4a.5.5 0 0 1-1 0V1.707l-4.146 4.147a.5.5 0 0 1-.708-.708L14.293 1H11.5a.5.5 0 0 1-.5-.5z" />
                                    </svg>
                                  </div>
                                  <div>
                                    <h4 class="mb-3 text-light">Phone</h4>
                                    <p class="mb-0">
                                      <a class="link-light link-opacity-75 link-opacity-100-hover text-decoration-none" href="tel:+15057922430">(505) 792-2430</a>
                                    </p>
                                  </div>
                                </div>
                              </div>
                              <div class="col-12 col-xxl-6">
                                <div class="d-flex mb-0">
                                  <div class="me-4 text-primary">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-envelope-at" viewBox="0 0 16 16">
                                      <path d="M2 2a2 2 0 0 0-2 2v8.01A2 2 0 0 0 2 14h5.5a.5.5 0 0 0 0-1H2a1 1 0 0 1-.966-.741l5.64-3.471L8 9.583l7-4.2V8.5a.5.5 0 0 0 1 0V4a2 2 0 0 0-2-2H2Zm3.708 6.208L1 11.105V5.383l4.708 2.825ZM1 4.217V4a1 1 0 0 1 1-1h12a1 1 0 0 1 1 1v.217l-7 4.2-7-4.2Z" />
                                      <path d="M14.247 14.269c1.01 0 1.587-.857 1.587-2.025v-.21C15.834 10.43 14.64 9 12.52 9h-.035C10.42 9 9 10.36 9 12.432v.214C9 14.82 10.438 16 12.358 16h.044c.594 0 1.018-.074 1.237-.175v-.73c-.245.11-.673.18-1.18.18h-.044c-1.334 0-2.571-.788-2.571-2.655v-.157c0-1.657 1.058-2.724 2.64-2.724h.04c1.535 0 2.484 1.05 2.484 2.326v.118c0 .975-.324 1.39-.639 1.39-.232 0-.41-.148-.41-.42v-2.19h-.906v.569h-.03c-.084-.298-.368-.63-.954-.63-.778 0-1.259.555-1.259 1.4v.528c0 .892.49 1.434 1.26 1.434.471 0 .896-.227 1.014-.643h.043c.118.42.617.648 1.12.648Zm-2.453-1.588v-.227c0-.546.227-.791.573-.791.297 0 .572.192.572.708v.367c0 .573-.253.744-.564.744-.354 0-.581-.215-.581-.8Z" />
                                    </svg>
                                  </div>
                                  <div>
                                    <h4 class="mb-3 text-light">E-Mail</h4>
                                    <p class="mb-0">
                                      <a class="link-light link-opacity-75 link-opacity-100-hover text-decoration-none" href="mailto:demo@yourdomain.com">demo@yourdomain.com</a>
                                    </p>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="d-flex">
                              <div class="me-4 text-primary">
                                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-alarm" viewBox="0 0 16 16">
                                  <path d="M8.5 5.5a.5.5 0 0 0-1 0v3.362l-1.429 2.38a.5.5 0 1 0 .858.515l1.5-2.5A.5.5 0 0 0 8.5 9V5.5z" />
                                  <path d="M6.5 0a.5.5 0 0 0 0 1H7v1.07a7.001 7.001 0 0 0-3.273 12.474l-.602.602a.5.5 0 0 0 .707.708l.746-.746A6.97 6.97 0 0 0 8 16a6.97 6.97 0 0 0 3.422-.892l.746.746a.5.5 0 0 0 .707-.708l-.601-.602A7.001 7.001 0 0 0 9 2.07V1h.5a.5.5 0 0 0 0-1h-3zm1.038 3.018a6.093 6.093 0 0 1 .924 0 6 6 0 1 1-.924 0zM0 3.5c0 .753.333 1.429.86 1.887A8.035 8.035 0 0 1 4.387 1.86 2.5 2.5 0 0 0 0 3.5zM13.5 1c-.753 0-1.429.333-1.887.86a8.035 8.035 0 0 1 3.527 3.527A2.5 2.5 0 0 0 13.5 1z" />
                                </svg>
                              </div>
                              <div>
                                <h4 class="mb-3 text-light">Opening Hours</h4>
                                <div class="d-flex mb-1">
                                  <p class="text-light fw-bold mb-0 me-5">Mon - Fri</p>
                                  <p class="text-light opacity-75 mb-0">9am - 5pm</p>
                                </div>
                                <div class="d-flex">
                                  <p class="text-light fw-bold mb-0 me-5">Sat - Sun</p>
                                  <p class="text-light opacity-75 mb-0">9am - 2pm</p>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-12 col-lg-6">
                      <div class="row align-items-lg-center h-100">
                        <div class="col-12">
                          <form action="#!">
                            <div class="row gy-4 gy-xl-5 p-4 p-xl-5">
                              <div class="col-12">
                                <label for="fullname" class="form-label">Full Name <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" id="fullname" name="fullname" value="" required>
                              </div>
                              <div class="col-12 col-md-6">
                                <label for="email" class="form-label">Email <span class="text-danger">*</span></label>
                                <div class="input-group">
                                  <span class="input-group-text">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-envelope" viewBox="0 0 16 16">
                                      <path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4Zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1H2Zm13 2.383-4.708 2.825L15 11.105V5.383Zm-.034 6.876-5.64-3.471L8 9.583l-1.326-.795-5.64 3.47A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.741ZM1 11.105l4.708-2.897L1 5.383v5.722Z" />
                                    </svg>
                                  </span>
                                  <input type="email" class="form-control" id="email" name="email" value="" required>
                                </div>
                              </div>
                              <div class="col-12 col-md-6">
                                <label for="phone" class="form-label">Phone Number</label>
                                <div class="input-group">
                                  <span class="input-group-text">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-telephone" viewBox="0 0 16 16">
                                      <path d="M3.654 1.328a.678.678 0 0 0-1.015-.063L1.605 2.3c-.483.484-.661 1.169-.45 1.77a17.568 17.568 0 0 0 4.168 6.608 17.569 17.569 0 0 0 6.608 4.168c.601.211 1.286.033 1.77-.45l1.034-1.034a.678.678 0 0 0-.063-1.015l-2.307-1.794a.678.678 0 0 0-.58-.122l-2.19.547a1.745 1.745 0 0 1-1.657-.459L5.482 8.062a1.745 1.745 0 0 1-.46-1.657l.548-2.19a.678.678 0 0 0-.122-.58L3.654 1.328zM1.884.511a1.745 1.745 0 0 1 2.612.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z" />
                                    </svg>
                                  </span>
                                  <input type="tel" class="form-control" id="phone" name="phone" value="">
                                </div>
                              </div>
                              <div class="col-12">
                                <label for="subject" class="form-label">Subject <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" id="subject" name="subject" value="" required>
                              </div>
                              <div class="col-12">
                                <label for="message" class="form-label">Message <span class="text-danger">*</span></label>
                                <textarea class="form-control" id="message" name="message" rows="3" required></textarea>
                              </div>
                              <div class="col-12">
                                <div class="d-grid">
                                  <button class="btn btn-primary btn-lg" type="submit">Send Message</button>
                                </div>
                              </div>
                            </div>
                          </form>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
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