<footer class="footer">
    <div class="container pt-5 border-bottom">
        <div class="row">
            <div class="col-md-3 col-sm-12 mb-3 text-center">
                <a href="/  "><img class="footer-logo" src="{{ asset('images/logo.png') }}" alt="Soteria Pharmaceuticals Logo"></a>
            </div>
            <div class="col-md-9 col-sm-12">
                <div class="row">
                    <div class="col-md-4 col-sm-6 col-6 float-left mb-3">
                        <h5 class="mb-4 font-weight-bold text-uppercase">Our Brands</h5>
                        <ul class="list-group">
                            <li class="list-group-item bg-transparent border-0 p-0 mb-2"><a
                                    href="{{ route('about') }}">About Us</a></li>
                            {{-- <li class="list-group-item bg-transparent border-0 p-0 mb-2"><a
                                    href="">Workforce</a></li>
                            <li class="list-group-item bg-transparent border-0 p-0 mb-2"><a href="">
                                    E-Commerce</a></li>
                            <li class="list-group-item bg-transparent border-0 p-0 mb-2"><a
                                    href="">Finance</a></li>
                            <li class="list-group-item bg-transparent border-0 p-0 mb-2"><a
                                    href="">Business Apps</a></li> --}}
                        </ul>
                    </div>


                    <div class="col-md-4 col-sm-6 col-6 mb-3 float-left">
                        <h5 class="mb-4 font-weight-bold text-uppercase">Company</h5>
                        <ul class="list-group">
                            <li class="list-group-item bg-transparent border-0 p-0 mb-2"><a
                                    href="{{ route('privacy') }}"></i>Privacy Policy</a></li>
                            <li class="list-group-item bg-transparent border-0 p-0 mb-2"><a href="{{ route('terms') }}"></i>
                                    Terms for Use of Website</a></li>
                            <li class="list-group-item bg-transparent border-0 p-0 mb-2"><a href="{{ route('disclaimer') }}"></i>
                                    Disclaimer</a></li>
                            <li class="list-group-item bg-transparent border-0 p-0 mb-2"><a href="{{ route('contact') }}"></i>
                                    Contact Us</a></li>
                        </ul>
                    </div>

                    <div class="col-md-4 col-sm-6 col-6 mb-3 float-left">
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
                    Copyright {{ date('Y') }}. Soteria Pharmaceuticals Ltd.
                </div>
            </div>
        </div>
    </div>
</footer>
<script async src='https://d2mpatx37cqexb.cloudfront.net/delightchat-whatsapp-widget/embeds/embed.min.js'></script>
        <script>
          var wa_btnSetting = {"btnColor":"#16BE45","ctaText":"Talk to us","cornerRadius":40,"marginBottom":20,"marginLeft":20,"marginRight":20,"btnPosition":"right","whatsAppNumber":"911234567890","welcomeMessage":"Hello","zIndex":999999,"btnColorScheme":"light"};
          window.onload = () => {
            _waEmbed(wa_btnSetting);
          };
        </script>
      