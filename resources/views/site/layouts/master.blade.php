<!DOCTYPE html>
<html class="no-js" lang="en">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->

<head>
    @include('site.partials.head')
    @yield('css')
</head>

<body ng-app="App" class="theme-style--light" ng-cloak>

    <!-- Preloader End-->
    <div id="preloader">
        <div class="preloader-inner">
            <div class="spinner">
                <img src="{{@$config->image->path ?? ''}}" alt="img" loading="lazy">

            </div>
        </div>
    </div>

    <div class="pointer bnz-pointer" id="bnz-pointer"></div>
    @include('site.partials.header')

    <main class="wrapper">
        @yield('content')
    </main>

    @include('site.partials.footer')

    @include('site.partials.angular_mix')

    <!-- Mobile Responsive Menu -->
    <div class="mr_menu" data-lenis-prevent>
        <button type="button" class="mr_menu_close"><i class="bi bi-x-lg"></i></button>
        <div class="logo"></div>
        <!-- Keep this div empty. Logo will come here by JavaScript -->
        <h6>Menu</h6>
        <div class="mr_navmenu"></div>
        <!-- Keep this div empty. Menu will come here by JavaScript -->
        <h6>Liên hệ</h6>
        <div class="wptb-icon-box1 style2">
            <div class="wptb-item--inner flex-start">
                <div class="wptb-item--icon"><i class="bi bi-envelope"></i></div>
                <div class="wptb-item--holder">
                    <p class="wptb-item--description">
                        <a href="mailto:{{ $config->email }}">{{ $config->email }}</a>
                    </p>
                </div>
            </div>
        </div>
        <div class="wptb-icon-box1 style2">
            <div class="wptb-item--inner flex-start">
                <div class="wptb-item--icon"><i class="bi bi-geo-alt"></i></div>
                <div class="wptb-item--holder">
                    <p class="wptb-item--description"><a href="#">{{  $config->address_company }}</a></p>
                </div>
            </div>
        </div>
        <div class="wptb-icon-box1 style2">
            <div class="wptb-item--inner flex-start">
                <div class="wptb-item--icon"><i class="bi bi-envelope"></i></div>
                <div class="wptb-item--holder">
                    <p class="wptb-item--description"><a href="tel:{{  $config->hotline }}">{{  $config->hotline }}</a></p>
                </div>
            </div>
        </div>
        <h6>Social Media</h6>
        <div class="social-box">
            <ul>
                <li><a href="{{ $config->facebook }}" class="bi bi-facebook"></a></li>
                <li><a href="{{ $config->instagram }}" class="bi bi-instagram"></a></li>
                <li><a href="{{ $config->youtube }}" class="bi bi-youtube"></a></li>
            </ul>
        </div>
    </div>

    <div class="aside_info_wrapper" data-lenis-prevent>
        <button class="aside_close">Đóng <i class="bi bi-x-lg"></i></button>

        <div class="aside_info_inner">
            <h6>// Please Enter Your Information</h6>
            <form class="wptb-form" method="post" id="commentform">
                <div class="wptb-form--inner">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 mb-4">
                            <div class="form-group">
                                <input type="text" name="name" class="form-control" placeholder="Họ Tên*">
                            </div>
                        </div>

                        <div class="col-lg-6 col-md-6 mb-4">
                            <div class="form-group">
                                <input type="phone" name="phone" class="form-control" placeholder="Số Điện Thoại*">
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-12 mb-4">
                            <div class="form-group">
                                <input type="text" name="email" class="form-control" placeholder="Email">
                            </div>
                        </div>
                        <div class="col-md-12 col-lg-12 mb-4">
                            <div class="form-group">
                                <textarea name="message" class="form-control" placeholder="Lời Nhắn"></textarea>
                            </div>
                        </div>
                        <div class="col-md-12 col-lg-12">
                            <div class="wptb-item--button text-center">
                                <button class="btn white-opacity creative" type="submit">
                                <span class="btn-wrap">
                                    <span class="text-first"><span class="loader ml-15 spin-icon"></span> Gửi</span>
                                </span>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
            <h6>// Social Media</h6>
            <div class="social-box style-square">
                <ul>
                    <li><a href="https://www.facebook.com/"><i class="bi bi-facebook"></i></a></li>
                    <li><a href="https://www.instagram.com/"><i class="bi bi-instagram"></i></a></li>
                    <li><a href="https://www.linkedin.com/"><i class="bi bi-linkedin"></i></a></li>
                    <li><a href="https://www.behance.com/"><i class="bi bi-behance"></i></a></li>
                    <li><a href="https://www.youtube.com/"><i class="bi bi-youtube"></i></a></li>
                </ul>
            </div>
        </div>
    </div>
    <!-- Modal Search -->
    <div class="search-modal">
        <div class="modal fade" id="modalSearch">
            <div class="modal-dialog modal-dialog-centered modal-lg">
                <div class="modal-content">
                    <div class="search_overlay">
                        <form class="credential-form" method="post">
                            <div class="form-group">
                                <input type="text" name="search" class="keyword form-control"
                                       placeholder="Search Here">
                            </div>
                            <button type="submit" class="btn-search">
                                <span class="text-first"> <i class="bi bi-arrow-right"></i> </span>
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <script data-cfasync="false" src="/site/js/email-decode.min.js"></script>


    <div id="translate_select"></div>
    <script data-cfasync="false" src="cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>


    <script>
        function translateheader(lang) {
            var sel = document.querySelector("select.goog-te-combo");
            if (!sel) {
                // Nếu chưa có, thử lại sau 100ms
                return setTimeout(function() {
                    translateheader(lang);
                }, 100);
            }

            // 1) Gán giá trị
            sel.value = lang;

            // 2) Tạo event theo chuẩn cũ (HTMLEvents)
            var evOld = document.createEvent("HTMLEvents");
            evOld.initEvent("change", true, true);
            sel.dispatchEvent(evOld);

            // 3) Tạo event theo chuẩn mới (Event constructor)
            var evNew = new Event("change", { bubbles: true, cancelable: true });
            sel.dispatchEvent(evNew);
        }

    </script>

    <script type="text/javascript" src="/site/js/elementa0d8.js?cb=googleTranslateElementInit">





    </script>
    <div class="hidden-xs">
        <div onclick="window.location.href= 'tel:{{ $config->hotline }}'" class="hotline-phone-ring-wrap">
            <div class="hotline-phone-ring">
                <div class="hotline-phone-ring-circle"></div>
                <div class="hotline-phone-ring-circle-fill"></div>
                <div class="hotline-phone-ring-img-circle">
                    <a href="tel: {{ $config->hotline }}" class="pps-btn-img">
                        <img src="/site/images/phone.png" alt="Gọi điện thoại" width="50" loading="lazy">
                    </a>
                </div>
            </div>
            <a href="tel:{{ $config->hotline }}">
            </a>
            <div class="hotline-bar"><a href="tel:{{ $config->hotline }}">
                </a><a href="tel:{{ $config->hotline }}">
                    <span class="text-hotline">{{ $config->hotline }}</span>
                </a>
            </div>

        </div>
        <div class="inner-fabs">
            <a target="blank" href="{{ $config->facebook }}" class="fabs roundCool" id="challenges-fab"
               data-tooltip="Send Messenger">
                <img class="inner-fab-icon" src="/site/images/messenger-icon.png" alt="challenges-icon" border="0" loading="lazy">
            </a>
            <a target="blank" href="https://zalo.me/{{ preg_replace('/\s+/', '', $config->zalo) }}" class="fabs roundCool" id="chat-fab"
               data-tooltip="Send message Zalo">
                <img class="inner-fab-icon" src="/site/images/zalo.png" alt="chat-active-icon" border="0" loading="lazy">
            </a>
            <a target="blank" href="{{ $config->google_map }}" class="fabs roundCool" id="chat-fab"
               data-tooltip="View map">
                <img class="inner-fab-icon" src="/site/images/map.png" alt="chat-active-icon" border="0" loading="lazy">
            </a>

        </div>
        <div class="fabs roundCool call-animation" id="main-fab">
            <img class="img-circle" src="/site/images/lienhe.png" alt="" width="135" loading="lazy">
        </div>
    </div>
    <div id="azt-contact-footer-outer" class="hidden-lg">
        <div id="azt-contact-footer">
            <a href="#" class="mr_menu_toggle_mobile">
                <span>
                    <img src="/site/images/menu.png" alt="menu">
                    <span class="azt-contact-footer-btn-label">Menu</span>
                </span>
            </a>
            <a href="{{ $config->google_map }}">
                <span>
                    <img src="/site/images/map.png" alt="Map">
                    <span class="azt-contact-footer-btn-label">Map</span>
                </span>
            </a>
            <a id="azt-contact-footer-btn-center" href="tel:{{ $config->hotline }}">
                <span class="azt-contact-footer-btn-center-icon">
                    <span class="phone-vr-circle-fill"></span>
                    <img src="/site/images/phone.png" alt="Call Now">
                </span>
                <span>
                    <span class="azt-contact-footer-btn-label">
                        <span>Call Now</span>
                    </span>
                </span>
            </a>
            <a href="{{ $config->facebook }}" target="_blank">
                <span>
                    <img src="/site/images/messenger-icon.png" alt="Messenger">
                    <span class="azt-contact-footer-btn-label">Messenger</span>
                </span>
            </a>
            <a href="https://zalo.me/{{ preg_replace('/\s+/', '', $config->zalo) }}" target="_blank">
                <span>
                    <img class="zalo-icon" src="/site/images/zalo.png" alt="Zalo">
                    <span class="azt-contact-footer-btn-label">Zalo</span>
                </span>
            </a>
        </div>
    </div>

    <div class="totop">
        <a href="#"><i class="bi bi-chevron-up"></i></a>
    </div>
{{--    <a href="dat-phong.html" class="c-book-expand" style="display: inline;"><span>Book Now</span>--}}
{{--    </a>--}}


    <!-- Framework -->
    <script src="/site/js/bootstrap.min.js"></script>
    <!-- WOW Scroll Effect -->
    <script src="/site/js/wow.min.js"></script>
    <!-- Swiper Slider -->
    <script src="/site/js/swiper-bundle.min.js"></script>
    <script src="/site/js/swiper-gl.min.js"></script>
    <!-- Odometer Counter -->
    <!-- <script src="js/appear.js"></script> -->
    <script src="/site/js/notify.min.js"></script>
    <!-- Fancybox -->
    <script src="/site/js/jquery.fancybox.min.js"></script>
    <script src="/site/js/theme.js"></script>
    <script src="/site/js/callbutton.js"></script>


    <script>
        var CSRF_TOKEN = "{{ csrf_token() }}";
    </script>

    @stack('scripts')
    <script>
        app.controller('searchModal', function ($rootScope, $scope) {
            $scope.search = function () {
                if (!$scope.keyword) {
                    return;
                }

                var url = '/tim-kiem/?keyword=' + encodeURIComponent($scope.keyword);
                window.location.href = url;
            }
        })

    </script>
</body>

</html>
