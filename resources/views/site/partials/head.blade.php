
    <meta charset="UTF-8" />
    <meta name="theme-color" content="#d70018">
    <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests" />
    <meta name='revisit-after' content='2 days' />
    <meta name="viewport" content="width=device-width">
    <title>@yield('title')</title>
    <link rel="manifest" href="">
    <meta name="description" content="@yield('description')" />

    <link rel="shortcut icon" href="{{@$config->favicon->path ?? ''}}" type="image/x-icon">
    <link rel="apple-touch-icon" sizes="180x180" href="{{@$config->favicon->path ?? ''}}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{@$config->favicon->path ?? ''}}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{@$config->favicon->path ?? ''}}">

    <meta name="SKYPE_TOOLBAR" content="SKYPE_TOOLBAR_PARSER_COMPATIBLE" />
    <meta http-equiv="Content-Language" content="vi" />

    <meta name="robots" content="index, follow" />
    <meta name="googlebot" content="index, follow">
    <meta name="revisit-after" content="1 days" />
    <meta name="generator" content="@yield('title')" />
    <meta name="rating" content="General">
    <meta name="application-name" content="{{ $config->web_title }}" />
    <meta name="theme-color" content="#ed3235" />
    <meta name="msapplication-TileColor" content="#ed3235" />
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <meta name="apple-mobile-web-app-title" content="index.html" />
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:title" content="@yield('title')">
    <meta property="og:description" content="@yield('description')">
    <meta property="og:image" content="@yield('image')">
    <meta property="og:site_name" content="{{ url()->current() }}">
    <meta property="og:image:alt" content="{{ $config->web_title }}">
    <meta itemprop="description" content="@yield('description')">
    <meta itemprop="image" content="@yield('image')">
    <meta itemprop="url" content="{{ url()->current() }}">




    <meta property="og:type" content="website" />
    <meta property="og:locale" content="vi_VN" />
    <meta name="twitter:card" content="summary" />
    <meta name="twitter:site" content="{{ url()->current() }}" />

    <!-- <link rel="amphtml" href="amp/" /> -->
    <link rel="image_src" href="{{@$config->image->path ?? ''}}" />
    <link rel="image_src" href="{{@$config->image->path ?? ''}}" />
    <link rel="stylesheet" href="/site/css/main.css">
    <link rel="stylesheet" href="/site/css/callbutton.css">
    <script src="/site/js/jquery-3.6.0.min.js"></script>
    <script src="/site/js/jquery.validate.min.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>

    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300..700&amp;display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/site/css/all.min.css" />


    <style>
        @media (min-width: 1200px) {
            .c-book-expand {
                right: 18px;
                top: 150px;
            }
        }

        @media (min-width: 992px) {
            .c-book-expand {
                width: 70px;
                height: 70px;
                top: 101px;
            }
        }

        .c-book-expand {
            width: 140px;
            height: 50px;
            border: none;
            background-color: #b37a2d;
            position: fixed;
            z-index: 69;
            top: 91px;
            right: 15px;
            display: block;
            vertical-align: top;
            cursor: pointer;
            padding: 0;
            overflow: hidden;
            /* -webkit-transform: rotate(45deg); */
            /* transform: rotate(45deg); */
        }

        a.c-book-expand:hover {
            background-color: #b37a2d;
            -webkit-background-clip: unset;
        }

        @media (min-width: 992px) {
            .c-book-expand span {
                width: 70px;
                height: 70px;
                font-size: 14px;
                padding-top: 16px;
            }
        }

        .c-book-expand span {
            display: block;
            width: 140px;
            height: 50px;
            font-size: 16px;
            padding-top: 14px;
            /* padding-right: 17px; */
            text-transform: uppercase;
            line-height: normal;
            text-align: center;
            /* -webkit-transform: rotate(-45deg); */
            /* transform: rotate(-45deg); */
            color: #fff;
        }

        .c-book-expand span {
            font-weight: bold;
        }

        .c-book-expand span:after {
            content: "";
            position: absolute;
            z-index: 2;
            top: -40px;
            bottom: -40px;
            background: #fff;
            width: 10px;
            left: -10%;
            -webkit-transform: rotate(-15deg);
            transform: rotate(-15deg);
            -webkit-filter: blur(12px);
            filter: blur(12px);
            -webkit-animation-name: item-float;
            animation-name: item-float;
            -webkit-animation-duration: 1s;
            animation-duration: 1s;
            -webkit-animation-fill-mode: both;
            animation-fill-mode: both;
            -webkit-animation-iteration-count: infinite;
            animation-iteration-count: infinite;
            animation-timing-function: linear;
            -webkit-animation-timing-function: linear;
        }

        @keyframes  item-float {
            0% {
                left: -20%;
            }

            100% {
                left: 120%;
            }
        }
    </style>



    <script type="text/javascript">
        function googleTranslateElementInit() {
            new google.translate.TranslateElement({pageLanguage: 'vi',includedLanguages:'en,hi,vi,zh-CN', }, 'translate_select');
        }
    </script>


    <style>
        .VIpgJd-ZVi9od-aZ2wEe-wOHMyf-ti6hGc {
            display: none;
        }

        .skiptranslate {
            display: none;
            top: 0;
        }

        .goog-te-banner-frame {
            display: none !important;
        }

        .goog-text-highlight {
            background: none !important;
            box-shadow: none !important;
        }

        .goog-te-banner-frame.skiptranslate {
            display: none !important;
        }

        body {
            position: revert !important;
            top: 0px !important;
        }
        @media (max-width: 768px) {
            .hidden-xs {
                display: none;
            }
        }
    </style>


    <style>
        /* 1. Bao phủ toàn màn hình, luôn nằm trên cùng */
        #preloader {
            position: fixed;
            top: 0;
            left: 0;
            width: 100vw;
            height: 100vh;
            background-color: rgba(0,0,0,0.3);
            display: flex;
            justify-content: center;
            align-items: center;
            z-index: 9999; /* đảm bảo nằm trên cùng mọi thứ */
        }
    </style>
