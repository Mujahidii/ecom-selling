<!DOCTYPE html>
<html lang="en">
<head>
    <!-- set the encoding of your site -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- set the page title -->
    <title>COOLIN</title>
    <!-- inlcude google roboto font cdn link -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&display=swap"
        rel="stylesheet">
    <!-- include the site bootstrap stylesheet -->
    <link rel="stylesheet" href="{{asset('css/bootstrap.css')}}">
    <!-- include the site fontawesome stylesheet -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.10.2/css/all.css">
    <!-- include the site stylesheet -->
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <!-- include theme color setting stylesheet -->
    <link rel="stylesheet" href="{{asset('css/colors.css')}}">
    <!-- include the site responsive stylesheet -->
    <link rel="stylesheet" href="{{asset('css/responsive.css')}}">
</head>
<body>
<!-- pageWrapper -->
<div id="pageWrapper">
    <!-- phStickyWrap -->
    <div class="phStickyWrap">
        <!-- pageHeader -->
        @include('partials.header')
    </div>
    <main>
        <!-- introBlock -->
        <div id="shopSideBar">
            <!-- widget / widgetCategory -->
            <div class="widget widgetCategory">
                <div class="widgetHeader">
                    <div class="container">
                        <div class="row">
                        @include('partials.side-bar')
                            <div class="col-md-10">
                                @yield('content')
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <!-- footerAreaWrap -->
    <div class="footerAreaWrap position-relative">
        <!-- footerHolder -->
    @include('partials.footer-holder')
    <!-- footerArea -->
        @include('partials.footer')
    </div>
    <!-- backToTop -->
    <a id="backToTop" class="rounded-circle bg-white text-center icon-ArrowDown" href="#"></a>
    <!-- loader-02 -->
    <div id="loader" class="loader-holder">
        <div class="spinner-grow text-primary" style="width: 3rem; height: 3rem;" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>
</div>

<!-- include jQuery library -->
<script src="{{asset('js/jquery-3.4.1.min.js')}}"></script>
<!-- include bootstrap popper JavaScript -->
<script src="{{asset('js/popper.min.js')}}"></script>
<!-- include bootstrap JavaScript -->
<script src="{{asset('js/bootstrap.min.js')}}"></script>
<!-- include custom JavaScript -->
<script src="{{asset('js/jqueryCustom.js')}}"></script>
<!-- include fontAwesome -->
<script src="https://kit.fontawesome.com/391f644c42.js"></script>
@stack('scripts')
</body>
</html>
