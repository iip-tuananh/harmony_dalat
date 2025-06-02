<header class="header color-fixed">
    <!-- Lower Bar -->
    <div class="header-inner">
        <div class="container-fluid pe-0">
            <div class="d-flex align-items-center justify-content-between">
                <!-- Left Part -->
                <div class="header_left_part d-flex align-items-center" style="width: 176px;">
                    <div class="logo">
                        <a href="{{ route('front.home-page') }}" class="light_logo"><img src="{{ @$config->image->path ?? '' }}" alt="logo" loading="lazy"></a>

                    </div>
                </div>
                <!-- Center Part -->
                <div class="header_center_part d-none d-xl-block">
                    <div class="mainnav">
                        <ul class="main-menu">
                            <li class="menu-item ">
                                <a href="{{ route('front.home-page') }}">Trang chủ</a>
                            </li>
                            <li class="menu-item ">
                                <a href="{{ route('front.abouts') }}">Giới thiệu về chúng tôi</a>
                            </li>
                            <li class="menu-item menu-item-has-children">
                                <a href="#">Phòng và Phòng Suite</a>
                                <ul class="sub-menu" data-lenis-prevent>
                                    @foreach($rooms as $room)
                                        <li class="menu-item"><a href="{{ route('front.getRoom', $room->slug) }}">{{ $room->name }}</a></li>
                                    @endforeach
                                </ul>
                            </li>
                            <li class="menu-item menu-item-has-children">
                                <a href="#">Dịch vụ</a>
                                <ul class="sub-menu" data-lenis-prevent>
                                    @foreach($serviceCategories as $serviceCategory)
                                        <li class="menu-item"><a href="{{ route('front.services', $serviceCategory->slug) }}">{{ $serviceCategory->name }}</a>
                                        </li>
                                    @endforeach
                                </ul>
                            </li>

                            <li class="menu-item menu-item-has-children">
                                <a href="#">Tin tức & Hoạt động</a>
                                <ul class="sub-menu" data-lenis-prevent>
                                    @foreach($postCategories as $postCategory)
                                        <li class="menu-item"><a href="{{ route('front.blogs', $postCategory->slug) }}">{{ $postCategory->name }}</a>
                                        </li>
                                    @endforeach
                                </ul>
                            </li>
                            <li class="menu-item">
                                <a href="{{ route('front.contact') }}">Liên hệ với chúng tôi</a>
                            </li>

                        </ul>
                    </div>
                </div>
                <!-- Right Part -->
                <div class="header_right_part d-flex align-items-center">

                    <div class="lang-wrap">
                        <a href="javascript:;" onclick="translateheader('vi')"><img style="width: 30px;" src="/site/images/vn.png" alt="" loading="lazy"></a>

                        <a href="javascript:;" onclick="translateheader('en')"><img style="width: 30px;" src="/site/images/eng.png" alt="" loading="lazy"></a>
                    </div>
                    <button type="button" class="mr_menu_toggle wptb-element d-xl-none">
                        <i class="bi bi-list"></i>
                    </button>
                </div>
            </div>
        </div>
    </div>
</header>
