@extends('site.layouts.master')

@section('title')
    {{ $config->web_title }}
@endsection
@section('description')
    {{ strip_tags(html_entity_decode($config->introduction)) }}
@endsection
@section('image')
    {{@$config->image->path ?? ''}}
@endsection

@section('css')
@endsection


@section('content')

    <!-- Slider Section -->
    <section class="wptb-slider style2">
        <div class="swiper-container wptb-swiper-slider-two">
            <!-- swiper slides -->
            <div class="swiper-wrapper">
                @foreach($banners as $banner)
                    <div class="swiper-slide">
                        <div class="wptb-slider--item" data-overlay-dark="2">
                            <div class="wptb-slider--image">
                                <img class="wptb-slider--image" src="{{ @$banner->image->path ?? '' }}" alt="img">
                            </div>
                            <div class="wptb-slider--inner">
                                <!-- Layer Image -->
                                <div class="wptb-item-layer wptb-item-layer-one">
                                    <img src="/site/images/layer-3.png" alt="img">
                                </div>
                                <div class="wptb-heading">
                                    <div class="wptb-item--inner mb-3">
                                        <h6 class="wptb-item--subtitle">{{ $banner->title }}</h6>
                                        <h1 class="wptb-item--title">{!! $banner->intro !!}</h1>
                                    </div>

                                    <a class="btn btn-two creative" href="{{ $banner->link }}">
                                        <span class="btn-wrap">
                                            <span class="text-first text-white">Xem chi tiết</span>
                                            <span class="text-second"> <i class="bi bi-arrow-up-right text-white"></i> <i class="bi bi-arrow-up-right text-white"></i> </span>
                                        </span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>

        <!-- Left Pane -->
{{--        <div class="wptb-left-pane justify-content-center">--}}
{{--            <div class="logo">--}}
{{--                <h6>Our Room</h6>--}}
{{--            </div>--}}
{{--        </div>--}}

        <!-- Right Pane -->
        <div class="wptb-right-pane">
            <div class="social-box style-oval">
                <ul>
                    <li><a href="{{ $config->facebook }}">FB</a></li>
                    <li><a href="{{ $config->instagram }}">IG</a></li>
                    <li><a href="{{ $config->youtube }}">YT</a></li>
                </ul>
            </div>
        </div>

        <!-- Bottom Pane -->
        <div class="wptb-bottom-pane justify-content-center">
            <!-- pagination dots -->
            <div class="wptb-swiper-dots style2">
                <div class="swiper-pagination"></div>
            </div>

            <!-- Swiper Navigation -->
            <div class="wptb-swiper-navigation style3">
                <div class="wptb-swiper-arrow swiper-button-prev"></div>
                <div class="wptb-swiper-arrow swiper-button-next"></div>
            </div>
        </div>

    </section>


    <style>
        #hbe-bws-wrapper-widget-code {
            text-align: center !important;
            padding-top: 0 !important;
            padding-bottom: 0 !important;
        }
        #search-widget-panel .swp-horizontal .bws-swp-col {
            width: 300px !important;
        }
        #search-widget-panel .swp-horizontal .swp-col3{
            width: 100px !important;
        }
        #search-widget-panel .bws-ipt-calendar {
            width: 100% !important;
            height: 40px !important;
            font-family: 'Quicksand', serif !important;
            font-size: 16px !important;
            border-radius: 5px !important;
            border: 1px solid #e0e0e0 !important;
        }
        #search-widget-panel .bws-ipt-calendar .show-date {
            line-height: 40px !important;
            font-size: 16px !important;
        }
        #search-widget-panel .bws-button {
            font-size: 18px !important;
            font-family: 'Quicksand', serif !important;
        }
        div#search-widget-panel div.swp-col3 a#bws-button-search {
            background-color: #b37b2e !important;
            padding: 8px 20px !important;
        }
        div#search-widget-panel {
            padding: 42px 0px !important;
        }

        @media (max-width: 768px) {
            .hbe-bws .clearfix {
                padding: 0 20px 0 40px;
            }
        }
    </style>

    <section class="wptb-about-two bg-transparent">
        <div class="container">
            <div class="wptb-heading">
                <div class="wptb-item--inner">
                    <div class="row align-items-center">
                        <div class="col-lg-7">
                            <h6 class="wptb-item--subtitle"><span>01 //</span> Giới thiệu </h6>
                            <h1 class="wptb-item--title">{{ $config->web_title }}</h1>
                        </div>
{{--                        <div class="col-lg-5 text-lg-end">--}}
{{--                            <div class="wptb-item--button">--}}
{{--                                <a href="dat-phong.html" class="btn btn-two creative text-uppercase">--}}
{{--                                        <span class="btn-wrap">--}}
{{--                                            <span class="text-first">Booking Now</span>--}}
{{--                                            <span class="text-second"><i class="bi bi-arrow-up-right"></i></span>--}}
{{--                                        </span>--}}
{{--                                </a>--}}
{{--                            </div>--}}
{{--                        </div>--}}
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="wptb-image-single wow fadeInUp">
                        <div class="wptb-item--inner">
                            <div class="wptb-item--image position-relative">
                                <img src="{{ @$config->image->path ?? '' }}" alt="img" loading="lazy">
                                <div class="wptb-item--video-button">
                                    <a class="btn" data-fancybox="video"
                                       data-caption="Video giới thiệu"
                                       href="{{ $config->youtube }}">
                                        <span class="text-second"> <i class="bi bi-play-fill"></i> </span>
                                        <span class="line-video-animation line-video-1"></span>
                                        <span class="line-video-animation line-video-2"></span>
                                        <span class="line-video-animation line-video-3"></span>
                                    </a>
                                </div>
                            </div>

                        </div>
                        <div class="wptb-item-layer wptb-item-layer-one both-version">
                            <img src="/site/images/light-2.png" alt="img" loading="lazy">
                            <img src="/site/images/light-2-light.png" alt="img" loading="lazy">
                        </div>
                    </div>
                </div>
                <div class="col-md-6 ps-md-5 mt-4 mt-md-0">
                    <div class="wptb-about--text ps-md-5">
                        <h3></h3>
                        <div class="line_10">
                            {!! $config->introduction !!}
                        </div>
                        <a class="btn btn-two white-opacity creative" href="{{ route('front.abouts') }}">
                                <span class="btn-wrap">
                                    <span class="text-first">Xem thêm</span>
                                    <span class="text-second"> <i class="bi bi-arrow-up-right"></i> <i class="bi bi-arrow-up-right"></i> </span>
                                </span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Albums -->
    <section class="wptb-album-one">
        <div class="container-fluid">
            <div class="wptb-heading mb-0">
                <div class="wptb-item--inner text-center">
                    <h6 class="wptb-item--subtitle"><span>02 //</span> Danh mục hạng phòng</h6>
                    <h1 class="wptb-item--title lg">Rooms & Suites</h1>
                </div>
            </div>
            <div class="swiper-container swiper-gallery-two has-radius">
                <div class="swiper-wrapper">

                    @foreach($rooms as $room)
                        <div class="swiper-slide">
                            <div class="grid-item">
                                <div class="wptb-item--inner ">
                                    <div class="wptb-item--image">
                                        <img src="{{ $room->image->path ?? '' }}" alt="img" style="height: 324px !important;" loading="lazy">
                                    </div>
                                    <div class="wptb-item--holder">
                                        <div class="wptb-item--meta">
                                            <h4><a href="{{ route('front.getRoom', $room->slug) }}">{{ $room->name }}</a>
                                            </h4>
                                            <ul class="option_project">
                                                <li class=""><b class="proce">{{ number_format($room->price) }}đ</b></li><br>
                                                <li>{{ $room->maximum_occupancy }} Người |</li>
                                                <li>{{ $room->view }} |</li>
                                                <li>{{ $room->area }}</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach

                </div>
                <!-- Swiper Navigation -->
                <div class="wptb-swiper-navigation style2">
                    <div class="wptb-swiper-arrow swiper-button-prev"></div>
                    <div class="wptb-swiper-arrow swiper-button-next"></div>
                </div>
            </div>

        </div>
    </section>



    <section class="wptb-services-one">
        <div class="wptb-item-layer wptb-item-layer-one both-version">
            <img src="/site/images/texture-2.png" alt="img">
            <img src="/site/images/texture-2-light.png" alt="img">
        </div>
        <div class="container">
            <div class="wptb-heading">
                <div class="wptb-item--inner">
                    <div class="row align-items-center">
                        <div class="col-lg-6">
                            <h6 class="wptb-item--subtitle"><span>03 //</span> Dịch vụ</h6>
                            <h1 class="wptb-item--title">Dịch vụ của chúng tôi
                            </h1>
                        </div>
                        <div class="col-lg-6">
                            <p class="wptb-item--description">
                              Chúng tôi cung cấp một loạt các dịch vụ toàn diện được thiết kế
                                để mang đến cho khách hàng trải nghiệm sang trọng và tiện lợi.
                                Sau đây là tổng quan về những gì bạn có thể mong đợi
                            </p>
                        </div>
                    </div>
                </div>
            </div>



            <style>
                /* ================================================================
                   1. FLEX CONTAINER CHO ROW VÀ CÁC COL. Chuyển cột về wrap và xếp 3/cột khi ≥992px
                   ================================================================ */
                .row.equal-height {
                    display: flex;
                    flex-wrap: wrap;       /* Khi có >3 cột sẽ tự xuống dòng */
                    margin: -12px;         /* Đồng bộ với padding của cột */
                }

                /* Loại bỏ flex:1 cứng nhắc, chỉ đặt display:flex và padding */
                .row.equal-height > [class*="col-"] {
                    padding: 12px;         /* Khoảng cách giữa các cột */
                    display: flex;         /* Để card trong col stretch chiều cao */
                    /* Không đặt flex: 1 ở đây nữa */
                }

                /* ================================================================
                   2. ĐẶT KÍCH THƯỚC CỐ ĐỊNH CHO CỘT Ở BREAKPOINT LỚN (≥992px)
                   - Mỗi col-lg-4 sẽ chiếm 1/3 hàng (33.3333%)
                   - Khi >3 col, các col dư thừa sẽ wrap xuống dòng nhờ flex-wrap
                   ================================================================ */
                @media (min-width: 992px) {
                    .row.equal-height > .col-lg-4 {
                        flex: 0 0 33.3333%;     /* Cố định 1/3 chiều ngang */
                        max-width: 33.3333%;    /* Giới hạn tối đa 1/3 */
                    }

                    /* Nếu có col khác chẳng hạn col-md-6, bạn có thể override tương tự:
                    .row.equal-height > .col-md-6 {
                        flex: 0 0 50%;
                        max-width: 50%;
                    }
                    */
                }

                /* ================================================================
                   3. RESPONSIVE: Khi hẹp màn hình, ép 2 cột / hàng hoặc 1 cột / hàng
                   ================================================================ */
                @media (max-width: 991px) {
                    /* Ở độ rộng từ 576px đến 991px (md → sm), mỗi col-* chiếm 50% */
                    .row.equal-height > [class*="col-"] {
                        flex: 0 0 50%;
                        max-width: 50%;
                    }
                }
                @media (max-width: 575px) {
                    /* Ở độ rộng ≤575px, mỗi col-* chiếm 100% */
                    .row.equal-height > [class*="col-"] {
                        flex: 0 0 100%;
                        max-width: 100%;
                    }
                }

                /* ================================================================
                   4. CARD CHÍNH: wptb-icon-box5 bo tròn, shadow, background trắng
                   ================================================================ */
                .wptb-icon-box5 {
                    display: flex;
                    flex-direction: column;
                    flex: 1;                    /* Card này vẫn dùng flex:1 để giãn chiều cao nội dung */
                    background: #ffffff;
                    border: 1px solid #e0e0e0;
                    border-radius: 30px;
                    overflow: hidden;
                    box-shadow: 0 2px 8px rgba(0,0,0,0.06);
                    transition: transform 0.2s ease, box-shadow 0.2s ease;
                    position: relative;         /* Để pseudo-element ::before nằm phủ lên */
                }

                /* Pseudo-element “shine” (nếu cần) */
                .wptb-icon-box5::before {
                    content: "";
                    position: absolute;
                    top: 0;
                    left: -75%;
                    width: 50%;
                    height: 100%;
                    background: rgba(255, 255, 255, 0.25);
                    transform: skewX(-25deg);
                    pointer-events: none;
                }
                .wptb-icon-box5:hover::before {
                    animation: shine 0.8s ease-in-out forwards;
                }
                @keyframes shine {
                    0%   { left: -75%; }
                    100% { left: 125%; }
                }

                /* ================================================================
                   5. .wptb-item--inner: Flex container dọc để đẩy nội dung đều
                   ================================================================ */
                .wptb-item--inner {
                    display: flex;
                    flex-direction: column;
                    height: 100%;
                }

                /* ================================================================
                   6. PHẦN ẢNH: wptb-item--icon-1
                   - Cố định chiều cao 300px, bo tròn góc trên
                   - Ảnh bên trong dùng object-fit: cover để crop đều
                   ================================================================ */
                .wptb-item--icon-1 {
                    width: 100%;
                    height: 300px;                    /* Có thể điều chỉnh cao/thấp tuỳ ý */
                    position: relative;
                    overflow: hidden;
                    border-top-left-radius: 10px;
                    border-top-right-radius: 10px;
                }
                .wptb-item--icon-1 img.default-icon,
                .wptb-item--icon-1 img.hover-icon {
                    position: absolute;
                    top: 50%;
                    left: 50%;
                    width: auto;
                    height: 100%;
                    transform: translate(-50%, -50%);
                    object-fit: cover;
                    border-top-left-radius: 10px;
                    border-top-right-radius: 10px;
                    transition: opacity 0.2s ease-in-out;
                }
                .wptb-item--icon-1 img.default-icon { opacity: 1; }
                /* Nếu không dùng hover-icon để đổi ảnh khi hover, bạn có thể xóa phần hover-icon */

                /* ================================================================
                   7. PHẦN HOLDER (CHỨA SỐ, TIÊU ĐỀ, MÔ TẢ)
                   ================================================================ */
                .wptb-item--holder-1 {
                    display: flex;
                    flex-direction: column;
                    flex: 1;                          /* Đẩy phần footer (nếu có) xuống đáy */
                    padding: 16px;
                }

                .wptb-item--holder-1 .wptb-item--description {
                    font-size: 0.9rem;
                    font-weight: bold;
                    color: #555;
                    margin-bottom: 8px;
                }
                .wptb-item--title {
                    margin-bottom: 8px;
                }
                .wptb-item--title a {
                    display: -webkit-box;
                    -webkit-line-clamp: 3;
                    -webkit-box-orient: vertical;
                    overflow: hidden;
                    text-overflow: ellipsis;
                    font-size: 1.15rem;
                    font-weight: 600;
                    color: #333;
                    text-decoration: none;
                    line-height: 1.3em;
                    max-height: calc(1.3em * 3);
                }
                .wptb-item--holder-1 .short-desc {
                    font-size: 0.95rem;
                    color: #555;
                    margin-bottom: 12px;
                    display: -webkit-box;
                    -webkit-line-clamp: 2;
                    -webkit-box-orient: vertical;
                    overflow: hidden;
                }
                .wptb-item--holder-1 .mt-auto {
                    margin-top: auto;
                }
            </style>


            <div class="row equal-height">

                @foreach($services as $kSer => $service)
                    @php
                        $indexSer = $kSer + 1;
                    @endphp
                    <div class="col-lg-4 col-md-6 col-sm-6 wow fadeInLeft">

                        <div class="wptb-icon-box5 mb-3">
                            <div class="wptb-item--inner">
                                <a href="{{ route('front.getServiceDetail', $service->slug) }}">
                                    <div class="wptb-item--icon wptb-item--icon-1">
                                        <img src="{{ $service->image->path ?? '' }}" alt="img" class="default-icon" loading="lazy">
{{--                                        <img src="{{ $service->image->path ?? '' }}" alt="img" class="hover-icon" loading="lazy">--}}
                                    </div>
                                </a>

                                <div class="wptb-item--holder wptb-item--holder-1">
                                    <p class="wptb-item--description">{{ str_pad($indexSer, 2, '0', STR_PAD_LEFT) }}</p>
                                    <h4 class="wptb-item--title mb-0">
                                        <a href="{{ route('front.getServiceDetail', $service->slug) }}" title="{{ $service->name }}">
                                            {{ $service->name }}</a>
                                    </h4>
                                    <div class="line_3">
                                        <p></p>
                                    </div>

                                </div>
                            </div>
                        </div>

                    </div>
                @endforeach

            </div>
        </div>
    </section>


    <section class="wptb-testimonial-one bg-image"
             style="background-image: url('/site/images/banner-2.png');">
        <div class="container">
            <div class="row">
                <div class="col-lg-7">
                    <div class="swiper-container swiper-testimonial">
                        <!-- swiper slides -->
                        <div class="swiper-wrapper">

                            @foreach($reviews as $review)
                                <div class="swiper-slide">
                                    <div class="wptb-testimonial1">
                                        <div class="wptb-item--inner">
                                            <div class="wptb-item--holder">
                                                <div
                                                    class="d-flex align-items-center justify-content-between mr-bottom-25">
                                                    <div class="wptb-item--meta-rating">
                                                        <i class="bi bi-star-fill"></i>
                                                        <i class="bi bi-star-fill"></i>
                                                        <i class="bi bi-star-fill"></i>
                                                        <i class="bi bi-star-fill"></i>
                                                        <i class="bi bi-star-fill"></i>
                                                    </div>
                                                    <div class="wptb-item--icon">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="57"
                                                             height="45" viewBox="0 0 57 45" fill="none">
                                                            <path
                                                                d="M51.5137 38.5537C56.8209 32.7938 56.2866 25.3969 56.2697 25.3125V2.8125C56.2697 2.06658 55.9734 1.35121 55.4459 0.823763C54.9185 0.296317 54.2031 0 53.4572 0H36.5822C33.48 0 30.9572 2.52281 30.9572 5.625V25.3125C30.9572 26.0584 31.2535 26.7738 31.781 27.3012C32.3084 27.8287 33.0238 28.125 33.7697 28.125H42.4266C42.3671 29.5155 41.9517 30.8674 41.22 32.0513C39.7913 34.3041 37.0997 35.8425 33.2156 36.6188L30.9572 37.0688V45H33.7697C41.5969 45 47.5678 42.8316 51.5137 38.5537ZM20.5566 38.5537C25.8666 32.7938 25.3294 25.3969 25.3125 25.3125V2.8125C25.3125 2.06658 25.0162 1.35121 24.4887 0.823763C23.9613 0.296317 23.2459 0 22.5 0H5.625C2.52281 0 0 2.52281 0 5.625V25.3125C0 26.0584 0.296316 26.7738 0.823762 27.3012C1.35121 27.8287 2.06658 28.125 2.8125 28.125H11.4694C11.41 29.5155 10.9945 30.8674 10.2628 32.0513C8.83406 34.3041 6.1425 35.8425 2.25844 36.6188L0 37.0688V45H2.8125C10.6397 45 16.6106 42.8316 20.5566 38.5537Z"
                                                                fill="#D70006" />
                                                        </svg>
                                                    </div>
                                                </div>
                                                <p class="wptb-item--description">
                                                   {{ $review->message }}
                                                </p>
                                                <div class="wptb-item--meta">
                                                    <div class="wptb-item--image">
                                                        <img src="{{ $review->image->path ?? '' }}"
                                                             alt="img" loading="lazy">
                                                    </div>
                                                    <div class="wptb-item--meta-left">
                                                        <h4 class="wptb-item--title">{{ $review->name }}
                                                        </h4>
                                                        <h6 class="wptb-item--designation">
                                                            {{ $review->position }}</h6>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            @endforeach

                        </div>
                        <!-- Swiper Navigation -->
                        <div class="wptb-swiper-navigation style1">
                            <div class="wptb-swiper-arrow swiper-button-prev"></div>
                            <div class="wptb-swiper-arrow swiper-button-next"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="wptb-blog-grid-one pb-0">
        <div class="container">
            <div class="wptb-heading">
                <div class="wptb-item--inner">
                    <div class="row align-items-center">
                        <div class="col-lg-6">
                            <h6 class="wptb-item--subtitle"><span>05 //</span> Blog</h6>
                            <h1 class="wptb-item--title mb-0">Tin tức & hoạt động<br>
                            </h1>
                        </div>
                        <div class="col-lg-6">
                            <p class="wptb-item--description">Những tin tức và hoạt động sẽ luôn được chúng tôi cập nhật mỗi ngày
                            </p>
                        </div>
                    </div>
                </div>
            </div>


            <style>
                /*!* 1. Đặt các slide nằm giữa, hưởng toàn bộ chiều cao của .swiper-wrapper *!*/
                /*.swiper-container .swiper-wrapper {*/
                /*    align-items: stretch;*/
                /*}*/

                /*!* 2. Mỗi swiper-slide sẽ dùng flex để canh giữa nội dung, đồng thời giới hạn max-width *!*/
                /*.swiper-container .swiper-slide {*/
                /*    display: flex;*/
                /*    justify-content: center; !* canh ngang giữa *!*/
                /*}*/

                /* 3. Khung chính của mỗi khối blog */
                .wptb-blog-grid1 {
                    display: flex;
                    flex-direction: column;       /* sắp xếp ảnh + phần nội dung theo chiều dọc */
                    width: 100%;                  /* lấp đầy slide */
                    max-width: 500px;             /* giới hạn tối đa chiều rộng (điều chỉnh tuỳ ý: 280px, 320px…) */
                    background: #fff;             /* nền trắng, nếu muốn */
                    border: 1px solid #e0e0e0;    /* viền mỏng để nhìn rõ ranh giới */
                    border-radius: 4px;           /* bo góc nhẹ */
                    overflow: hidden;             /* ẩn tràn (nếu có) */
                    box-shadow: 0 2px 6px rgba(0,0,0,0.1);
                }

                /* 4. Phần chứa ảnh */
                .wptb-item--image-1 {
                    width: 100%;
                    flex-shrink: 0;               /* không bị co lại */
                    position: relative;
                }

                /* 5. Bắt buộc ảnh luôn có chiều cao cố định và cover đầy khung */
                .wptb-item--image-1 img {
                    display: block;
                    width: 100%;
                    height: 220px;                /* bạn có thể chỉnh thành 160px, 200px tuỳ ý */
                    object-fit: cover;            /* ảnh cắt trung tâm, không méo */
                }

                /* 6. Phần chứa ngày, tiêu đề và intro */
                .wptb-item--holder-23 {
                    /*display: flex;*/
                    flex-direction: column;
                    padding: 12px 10px;
                    /* Cho phép phần text dàn đều chiều cao giữa các khối */
                    flex: 1;
                }

                /* 7. Ngày (date) */
                .wptb-item--date {
                    font-size: 0.85rem;
                    color: #888;
                    margin-bottom: 6px;
                }

                /* 8. Tiêu đề (title): giới hạn số dòng, nếu thừa sẽ ẩn với dấu “…” */
                .wptb-item--title3 {
                    padding: 0 !important;
                    font-size: 1.1rem;
                    line-height: 1.3;
                    margin: 0 0 8px 0;
                    height: calc(1.3em * 2);     /* hiển thị tối đa 2 dòng */
                    overflow: hidden;
                    text-overflow: ellipsis;
                    display: -webkit-box;
                    -webkit-line-clamp: 2;       /* giới hạn 2 dòng */
                    -webkit-box-orient: vertical;
                }

                /* 9. Phần intro (đoạn mô tả): cho flex-grow để chiếm hết phần còn lại, ẩn nếu quá dài */
                /*.wptb-item--holder-2 p {*/
                /*    font-size: 0.94rem;*/
                /*    color: #555;*/
                /*    margin: 0;*/
                /*    line-height: 1.4;*/
                /*    flex: 1;                      !* chiếm phần thân còn lại *!*/
                /*    overflow: hidden;*/
                /*    text-overflow: ellipsis;*/
                /*    display: -webkit-box;*/
                /*    -webkit-line-clamp: 3;        !* giới hạn 3 dòng *!*/
                /*    -webkit-box-orient: vertical;*/
                /*}*/


                .wptb-item--holder-23 p {
                    font-size: 0.94rem;
                    color: #555;
                    margin: 0;
                    line-height: 1.4;               /* cao 1.4em mỗi dòng */

                    /* Cố định chiều cao bằng 3 dòng: 1.4em*3 = 4.2em */
                    height: 4.2em;

                    overflow: hidden;               /* Ẩn phần tràn nếu vượt 3 dòng */
                    text-overflow: ellipsis;        /* Dấu “…” khi dư */
                    display: -webkit-box;
                    -webkit-line-clamp: 3;          /* Giới hạn 3 dòng */
                    -webkit-box-orient: vertical;

                    /* Bỏ flex:1 (nếu đang dùng) để không tự kéo dãn */
                    flex: none;
                }


                /* 10. Link trong title: đổi màu, bỏ gạch chân nếu muốn */
                .wptb-item--title3 a {
                    color: #333;
                    text-decoration: none;
                }
                .wptb-item--title3 a:hover {
                    color: #007bff;
                    text-decoration: underline;
                }

            </style>
            <div class="wptb-blog--inner">
                <div class="swiper-container swiper-blog">
                    <div class="swiper-wrapper">
                        @foreach ($blogs as $item)
                            <div class="swiper-slide">
                                <div class="wptb-blog-grid1 highlight wow fadeInLeft">
                                    <div class="wptb-item--inner">
                                        <div class="wptb-item--image-1">
                                            <a href="{{ route('front.blogDetail', $item->slug) }}" class="wptb-item-link">
                                                <img src="{{ $item->image->path ?? '' }}"
                                                     alt="img" loading="lazy"></a>
                                        </div>

                                        <div class="wptb-item--holder-23">
                                            <div class="wptb-item--date">{{ date_format($item->created_at, 'd/m/Y') }}
                                            </div>

                                            <h4 class="wptb-item--title3" title="{{ $item->name }}"><a
                                                    href="{{ route('front.blogDetail', $item->slug) }}">{{ $item->name }}</a></h4>
                                            <p class="" title="{{ $item->intro }}">{{ $item->intro }}</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>

{{--                    <div class="wptb-swiper-navigation style1">--}}
{{--                        <div class="wptb-swiper-arrow swiper-button-prev"></div>--}}
{{--                        <div class="wptb-swiper-arrow swiper-button-next"></div>--}}
{{--                    </div>--}}
                </div>
            </div>
        </div>

    </section>

    <!-- Contact -->
    <section class="wptb-contact-form style1">
        <div class="wptb-item-layer both-version">
            <img src="/site/images/texture-2.png" alt="texture-2.png" loading="lazy">
            <img src="/site/images/texture-2-light.png" alt="texture-2-light.png" loading="lazy">
        </div>
        <div class="container">

            <div class="wptb-office-address mr-top-100">
                <div class="row">
                    <div class="col-lg-4 col-md-6 col-6">
                        <div class="wptb-icon-box1 wow fadeInLeft">
                            <div class="wptb-item--inner flex-start">
                                <div class="wptb-item--icon"><i class="bi bi-phone"></i></div>
                                <div class="wptb-item--holder">
                                    <h3 class="wptb-item--title">Hotline</h3>
                                    <p class="wptb-item--description hidden-xs">{{ $config->hotline }}</p>
                                    <a href="tel:{{ $config->hotline }}" class="wptb-item--link">Call Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-6">
                        <div class="wptb-icon-box1 wow fadeInLeft">
                            <div class="wptb-item--inner flex-start">
                                <div class="wptb-item--icon"><i class="bi bi-envelope"></i></div>
                                <div class="wptb-item--holder">
                                    <h3 class="wptb-item--title">Email</h3>
                                    <p class="wptb-item--description hidden-xs">
                                        <a href="mailto:{{ $config->email }}">{{ $config->email }}</a>
                                    </p>
                                    <a href="mailto:{{ $config->email }}" class="wptb-item--link">Send Email</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-6">
                        <div class="wptb-icon-box1 wow fadeInLeft">
                            <div class="wptb-item--inner flex-start">
                                <div class="wptb-item--icon">Z</div>
                                <div class="wptb-item--holder">
                                    <h3 class="wptb-item--title">Zalo</h3>
                                    <p class="wptb-item--description hidden-xs"></p>
                                    <a target="_blank" href="https://zalo.me/{{ preg_replace('/\s+/', '', $config->zalo) }}"
                                       class="wptb-item--link">Send Message</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-6">
                        <div class="wptb-icon-box1 wow fadeInLeft">
                            <div class="wptb-item--inner flex-start">
                                <div class="wptb-item--icon"><i class="bi bi-youtube"></i></div>
                                <div class="wptb-item--holder">
                                    <h3 class="wptb-item--title">Youtube</h3>
                                    <p class="wptb-item--description hidden-xs"></p>
                                    <a target="_blank" href="{{ $config->youtube }}" class="wptb-item--link">View
                                        Channel</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-6">
                        <div class="wptb-icon-box1 wow fadeInLeft">
                            <div class="wptb-item--inner flex-start">
                                <div class="wptb-item--icon"><i class="bi bi-facebook"></i></div>
                                <div class="wptb-item--holder">
                                    <h3 class="wptb-item--title">Facebook</h3>
                                    <p class="wptb-item--description hidden-xs"></p>
                                    <a target="_blank" href="{{ $config->facebook }}" class="wptb-item--link">Visit
                                        Page</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-6">
                        <div class="wptb-icon-box1 wow fadeInLeft">
                            <div class="wptb-item--inner flex-start">
                                <div class="wptb-item--icon"><i class="bi bi-geo-alt"></i></div>
                                <div class="wptb-item--holder">
                                    <h3 class="wptb-item--title">Địa chỉ</h3>
                                    <a target="_blank" href="{{$config->google_map}}" class="wptb-item--link">View
                                        Address</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
@push('scripts')
    <script>

    </script>


@endpush
