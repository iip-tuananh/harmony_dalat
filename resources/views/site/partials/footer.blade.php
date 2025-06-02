<style>
    @media (max-width: 768px) {

        .wptb-icon-box1 .wptb-item--icon {
            height: 40px;
            width: 40px;
        }
    }
</style>


<!-- Footer -->
<footer class="footer style1 bg-image-2">
    <div class="footer-top">
        <div class="container">
            <div class="footer--inner">
                <div class="row">
                    <div class="col-lg-4 col-md-4 col-sm-6 col-6 mb-5 mb-md-0 order-md-1 order-2">
                        <div class="footer-widget">
                            <div class="footer-nav">
                                <ul>
                                    <li class="menu-item"><a href="{{ route('front.home-page') }}">Trang chủ</a></li>
                                    @foreach($serviceCategories as $serviceCategory)
                                        <li class="menu-item"><a href="{{ route('front.services', $serviceCategory->slug) }}">{{ $serviceCategory->name }}</a></li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-12 mb-md-0 order-md-2 order-1">
                        <div class="footer-widget text-center">
                            <div class="logo mr-bottom-55">
                                <a href="{{ route('front.home-page') }}" class=""><img src="{{ @$config->image->path ?? '' }}" alt="logo"></a>
                            </div>

                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-6 col-6 mb-5 mb-md-0 order-md-3 order-3">
                        <div class="footer-widget text-md-end">
                            <div class="footer-nav">
                                <ul>
                                    <li class="menu-item"><a href="{{ route('front.abouts') }}">Về chúng tôi</a></li>
                                    @foreach($postCategories as $postCategory)
                                        <li class="menu-item"><a href="{{ route('front.blogs', $postCategory->slug) }}">{{ $postCategory->name }}</a></li>
                                    @endforeach

                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer Bottom Part -->
    <div class="footer-bottom">
        <div class="container">
            <div class="footer-bottom-inner">
                <div class="copyright">
                    <p><a href="#">{{ $config->web_title }}</a> photography, All Rights Reserved</p>
                </div>
                <div class="social-box style-oval">
                    <ul>
                        <li><a href="{{ $config->facebook }}" class="bi bi-facebook"></a></li>
                        <li><a href="{{ $config->instagram }}" class="bi bi-instagram"></a></li>
                        <li><a href="{{ $config->youtube }}" class="bi bi-youtube"></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</footer>
