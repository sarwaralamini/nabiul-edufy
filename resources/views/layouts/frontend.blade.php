<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- Website SEO -->
    <title>@yield('title')</title>

    <meta name="description" content="@yield('meta_description')"/>
    <meta name="author" content="@yield('meta_author')" />
    <meta name="copyright" content="@yield('meta_copyright')" />
    <meta name="keywords" content="@yield('meta_keyword')" />
    <meta name="robots" content="@yield('meta_robot')" />

    <!-- Open Graph data -->
    <meta property="og:title" content="@yield('og_title')" />
    <meta property="og:description" content="@yield('og_description')"/>
    <meta property="og:type" content="@yield('og_type')" />
    <meta property="og:url" content="@yield('og_url')" />
    <meta property="og:image" content="@yield('og_image')" />
    <meta property="og:image:width" content="@yield('og_image-width')" />
    <meta property="og:image:height" content="@yield('og_image-height')" />
    <meta property="fb:app_id" content="@yield('og_app_id')" />

    <!-- Twitter data -->
    <meta name="twitter:card" content="@yield('twitter_card')" />
    <meta name="twitter:site" content="@yield('twitter_site')" />
    <meta name="twitter:creator" content="@yield('twitter_creator')" />
    <meta name="twitter:url" content="@yield('twitter_url')" />
    <meta name="twitter:title" content="@yield('twitter_title')" />
    <meta name="twitter:description" content="@yield('twitter_description')" />
    <meta name="twitter:image" content="@yield('twitter_image')" />

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('dist/frontend/css/bootstrap.min.css') }}">
    <!-- Bootstrap CSS -->

    <!--Font-awsome-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css" integrity="sha512-1PKOgIY59xJ8Co8+NE6FZ+LOAZKjy+KY8iq0G4B3CyeY6wYHN3yt9PW0XpSriVlkMXe40PTKnXrLnZ9+fkDaog==" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" integrity="sha512-5A8nwdMOWrSz20fDsjczgUidUBR8liPYU+WymTZP1lmY9G6Oc7HlZv156XqnsgNUzTyMefFTcsFH/tnJE/+xBg==" crossorigin="anonymous" />
    <!--Font-awsome-->

    <!--Fonts-->
    <link rel="stylesheet" href="{{ asset('dist/frontend/fonts/solaimanLipi/solaimanLipi.css') }}">
    <link rel="stylesheet" href="{{ asset('dist/frontend/fonts/roboto/roboto.css') }}">
    <!--Fonts-->

    <!-- News Ticker -->
    <link rel="stylesheet" href="{{ asset('dist/frontend/css/breaking-news-ticker.css') }}">
    <!-- News Ticker -->

    <!-- Flex SLider -->
    <link rel="stylesheet" href="{{ asset('dist/frontend/css/flexslider.css') }}">
    <!-- Flex SLider -->

    <!--Others CSS-->
    <link rel="stylesheet" href="{{ asset('dist/frontend/plugins/DataTables/css/jquery.dataTables.min.css') }}">
    <link rel="stylesheet" href="{{ asset('dist/frontend/plugins/DataTables/css/dataTables.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.9/css/responsive.bootstrap4.min.css">
    <link rel="stylesheet" href="{{ asset('dist/frontend/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('dist/frontend/css/sidenavbar.css') }}">
    <!--Others CSS-->

    @stack('css')
</head>

<body onload="preLoader()">
    <!-- Pre Loader -->
    <div class="preloading-gif text-center" id="pre_loader">
        <img src="https://www.teachers.gov.bd/frontend/img/loader/loder.gif" alt="">
    </div>
    <!-- Pre Loader -->
    <!-- Header Section -->
    <section class="section-one">
        @include('frontend.inc.header')
    </section>
    <!-- Header Section -->

    <!-- Main Content-->
    @yield('content')
    <!-- Main Content-->

    <!-- Footer Section-->
    @include('frontend.inc.footer')
    <!-- Footer Section-->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="{{ asset('dist/frontend/js/jquery.min.js') }}"></script>
    <script src="{{ asset('dist/frontend/js/popper.min.js') }}"></script>
    <script src="{{ asset('dist/frontend/js/bootstrap.min.js') }}"></script>

    <!-- Others JS-->
    <script src="{{ asset('dist/frontend/js/breaking-news-ticker.min.js') }}"></script>
    <script src="{{ asset('dist/frontend/js/jquery.flexslider.js') }}"></script>
    <script src="{{ asset('dist/frontend/plugins/DataTables/js/jquery.dataTables.min.js') }}"></script>
    <script src="https://cdn.datatables.net/responsive/2.2.9/js/dataTables.responsive.min.js"></script>
    <script src="{{ asset('dist/frontend/plugins/DataTables/js/dataTables.bootstrap4.min.js') }}"></script>
    @stack('js')
    <script>
        function preLoader() {
            const pre_loader = document.getElementById("pre_loader ");
            // setTimeout(function() {
            //     pre_loader.style.display = "none ";
            // }, 1000);
        }
        $(document).ready(function() {
            pre_loader.style.display = "none ";
        });

        // Can also be used with $(document).ready()
        $(document).ready(function() {
            $('.flexslider').flexslider({
                animation: "slide"
            });
        });

        jQuery(document).ready(function($) {
            //$('#newsTicker1').breakingNews();
            $('#newsTicker').breakingNews({
                // or "rtl"
                direction: "ltr",
                // enable autoplay
                play: true,
                // autoplay interval
                delayTimer: 4000,
                // animation speed
                scrollSpeed: 2,
                // pause on hover
                stopOnHover: true
            });
        });
    </script>

    <script>
        $(document).ready(function() {
            /*sidebar SIDE NAV*/
            $(".open-sidebar-nav").click(function() {
                $("#sidebar-side-nav").css({
                    'left': '0px',
                    'box-shadow': '0 -3px 5px 0 #000'
                });
            });

            $("#close-sidebar-nav").click(function() {
                $("#sidebar-side-nav").css({
                    'left': '-350px',
                    'box-shadow': 'none'
                });
            });

            //sidebar SIDE MENU TOGGLER
            $('li.sidebar-side-nav-dropdown>i').click(function() {
                $(this).siblings('ul').toggleClass('open-menu');
                $(this).toggleClass('open-icon');
                return false;
            });
        });
    </script>
</body>

</html>
