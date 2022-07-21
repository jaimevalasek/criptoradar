<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <!-- Title -->
    <title>Criptoradar - @yield('title')</title>

    <!-- Required Meta Tags Always Come First -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Criptoradar') }}</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="../../favicon.ico">
    <!-- Google Fonts -->
    <link rel="stylesheet" href="//fonts.googleapis.com/css?family=Open+Sans%3A400%2C300%2C500%2C600%2C700%7CPlayfair+Display%7CRoboto%7CRaleway%7CSpectral%7CRubik">
    <!-- CSS Global Compulsory -->
    <link href="{{ asset('vendor/bootstrap/bootstrap.min.css') }}" rel="stylesheet">
    <!-- CSS Global Icons -->
    <link href="{{ asset('vendor/icon-awesome/css/font-awesome.min.css') }}" rel="stylesheet">
    <link href="{{ asset('vendor/icon-line/css/simple-line-icons.css') }}" rel="stylesheet">

    <link href="{{ asset('vendor/icon-etlinefont/style.css') }}" rel="stylesheet">
    <link href="{{ asset('vendor/icon-line-pro/style.css') }}" rel="stylesheet">
    <link href="{{ asset('vendor/icon-hs/style.css') }}" rel="stylesheet">
    <link href="{{ asset('vendor/animate.css') }}" rel="stylesheet">
    <link href="{{ asset('vendor/malihu-scrollbar/jquery.mCustomScrollbar.min.css') }}" rel="stylesheet">
    <link href="{{ asset('vendor/hs-megamenu/src/hs.megamenu.css') }}" rel="stylesheet">
    <link href="{{ asset('vendor/hamburgers/hamburgers.min.css') }}" rel="stylesheet">


{{--    <!-- CSS Global Icons -->--}}
{{--    <link rel="stylesheet" href="{{ asset('vendor/dzsparallaxer/dzsparallaxer.css') }}">--}}
{{--    <link rel="stylesheet" href="{{ asset('vendor/dzsparallaxer/dzsscroller/scroller.css') }}">--}}
{{--    <link rel="stylesheet" href="{{ asset('vendor/dzsparallaxer/advancedscroller/plugin.css') }}">--}}

    <!-- CSS Unify -->
    <link rel="stylesheet" href="{{ asset('css/unify-core.css') }}">
    <link rel="stylesheet" href="{{ asset('css/unify-components.css') }}">
    <link rel="stylesheet" href="{{ asset('css/unify-globals.css') }}">

    @yield('css-header')

</head>

<body>
<main>



    <!-- Header -->
    <header id="js-header" class="u-header u-header--static">
        <div class="u-header__section u-header__section--light g-bg-white g-transition-0_3 g-py-10">
            <nav class="js-mega-menu navbar navbar-expand-lg hs-menu-initialized hs-menu-horizontal">
                <div class="container">
                    <!-- Responsive Toggle Button -->
                    <button class="navbar-toggler navbar-toggler-right btn g-line-height-1 g-brd-none g-pa-0 g-pos-abs g-top-minus-3 g-right-0" type="button" aria-label="Toggle navigation" aria-expanded="false" aria-controls="navBar" data-toggle="collapse" data-target="#navBar">
              <span class="hamburger hamburger--slider">
            <span class="hamburger-box">
              <span class="hamburger-inner"></span>
              </span>
              </span>
                    </button>
                    <!-- End Responsive Toggle Button -->

                    <!-- Logo -->
                    <a href="../../index.html" class="navbar-brand d-flex">
                        <svg width="86px" height="32px" viewBox="0 0 86 32" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                <g transform="translate(-78.000000, -19.000000)">
                                    <g transform="translate(78.000000, 19.000000)">
                                        <path class="g-fill-primary" d="M0,0 L19.2941176,0 L19.2941176,0 C23.7123956,-8.11624501e-16 27.2941176,3.581722 27.2941176,8 L27.2941176,27.2941176 L8,27.2941176 L8,27.2941176 C3.581722,27.2941176 5.41083001e-16,23.7123956 0,19.2941176 L0,0 Z"></path>
                                        <path class="g-fill-white" d="M21.036662,24.8752523 L20.5338647,22.6659916 L20.3510293,22.6659916 C19.8533083,23.4481246 19.1448284,24.0626484 18.2255681,24.5095816 C17.3063079,24.9565147 16.2575544,25.1799779 15.0792761,25.1799779 C13.0376043,25.1799779 11.5139914,24.672107 10.5083918,23.6563498 C9.50279224,22.6405927 9,21.1017437 9,19.0397567 L9,8.02392554 L12.6109986,8.02392554 L12.6109986,18.4150692 C12.6109986,19.7050808 12.8750915,20.6725749 13.4032852,21.3175807 C13.9314789,21.9625865 14.7593086,22.2850846 15.886799,22.2850846 C17.3901196,22.2850846 18.4947389,21.8356188 19.2006901,20.9366737 C19.9066413,20.0377286 20.2596117,18.5318912 20.2596117,16.4191164 L20.2596117,8.02392554 L23.855374,8.02392554 L23.855374,24.8752523 L21.036662,24.8752523 Z"></path>
                                        <path class="g-fill-main" d="M44.4764678,24.4705882 L40.8807055,24.4705882 L40.8807055,14.1099172 C40.8807055,12.809748 40.6191519,11.8397145 40.096037,11.1997875 C39.5729221,10.5598605 38.7425531,10.2399018 37.6049051,10.2399018 C36.0914269,10.2399018 34.9842682,10.6868282 34.2833958,11.5806945 C33.5825234,12.4745608 33.2320924,13.9727801 33.2320924,16.0753974 L33.2320924,24.4705882 L29.6515664,24.4705882 L29.6515664,7.61926145 L32.4550421,7.61926145 L32.9578394,9.8285222 L33.1406747,9.8285222 C33.6485533,9.02607405 34.3697301,8.40647149 35.3042266,7.96969592 C36.2387232,7.53292034 37.27478,7.31453583 38.412428,7.31453583 C42.4551414,7.31453583 44.4764678,9.3714132 44.4764678,13.4852296 L44.4764678,24.4705882 Z M53.7357283,24.4705882 L50.1552023,24.4705882 L50.1552023,7.61926145 L53.7357283,7.61926145 L53.7357283,24.4705882 Z M49.9418944,3.15503112 C49.9418944,2.51510412 50.1171098,2.0224693 50.467546,1.67711187 C50.8179823,1.33175444 51.3182351,1.15907831 51.9683197,1.15907831 C52.5980892,1.15907831 53.0881846,1.33175444 53.4386208,1.67711187 C53.7890571,2.0224693 53.9642725,2.51510412 53.9642725,3.15503112 C53.9642725,3.76448541 53.7890571,4.24442346 53.4386208,4.59485968 C53.0881846,4.94529589 52.5980892,5.12051137 51.9683197,5.12051137 C51.3182351,5.12051137 50.8179823,4.94529589 50.467546,4.59485968 C50.1171098,4.24442346 49.9418944,3.76448541 49.9418944,3.15503112 Z M68.0077253,10.3313195 L63.8939294,10.3313195 L63.8939294,24.4705882 L60.2981671,24.4705882 L60.2981671,10.3313195 L57.525164,10.3313195 L57.525164,8.65532856 L60.2981671,7.55831633 L60.2981671,6.4613041 C60.2981671,4.47042009 60.7654084,2.99505497 61.699905,2.03516447 C62.6344015,1.07527397 64.0615189,0.595335915 65.9812999,0.595335915 C67.2408388,0.595335915 68.4800439,0.803563007 69.6989525,1.22002344 L68.7543031,3.93208145 C67.8705943,3.64766945 67.0275286,3.50546559 66.2250804,3.50546559 C65.4124747,3.50546559 64.820805,3.75686171 64.4500537,4.25966149 C64.0793023,4.76246128 63.8939294,5.51664965 63.8939294,6.52224922 L63.8939294,7.61926145 L68.0077253,7.61926145 L68.0077253,10.3313195 Z M69.0089215,7.61926145 L72.9094094,7.61926145 L76.3375727,17.1724096 C76.8556088,18.5335242 77.2009611,19.813359 77.3736398,21.0119524 L77.49553,21.0119524 C77.5869482,20.453286 77.7545456,19.7752783 77.9983273,18.9779089 C78.242109,18.1805396 79.5321012,14.3943616 81.8683427,7.61926145 L85.738358,7.61926145 L78.5315971,26.7103215 C77.2212704,30.2146837 75.0374253,31.9668385 71.9799963,31.9668385 C71.1877057,31.9668385 70.4157419,31.8805004 69.6640816,31.7078217 L69.6640816,28.8738734 C70.2024329,28.9957643 70.8169567,29.0567088 71.5076716,29.0567088 C73.2344587,29.0567088 74.4482703,28.056203 75.1491427,26.0551615 L75.7738303,24.4705882 L69.0089215,7.61926145 Z"></path>
                                    </g>
                                </g>
                            </g>
                        </svg>
                    </a>
                    <!-- End Logo -->

                    <!-- Navigation -->
                    @include('layouts.navigation')
                    <!-- End Navigation -->

                </div>
            </nav>
        </div>
    </header>
    <!-- End Header -->

    <!-- Breadcrumb -->
    @yield('breadcrumb')
    <!-- End Breadcrumb -->

{{--    <section class="g-mb-100">--}}
{{--        <div class="container">--}}
            @yield('content')
{{--        </div>--}}
{{--    </section>--}}

    <!-- Copyright Footer -->
    <footer class="g-bg-gray-dark-v1 g-color-white-opacity-0_8 g-py-20">
        <div class="container">
            <div class="row">
                <div class="col-md-8 text-center text-md-left g-mb-10 g-mb-0--md">
                    <div class="d-lg-flex">
                        <small class="d-block g-font-size-default g-mr-10 g-mb-10 g-mb-0--md">2020 &copy; All Rights Reserved.</small>
                        <ul class="u-list-inline">
                            <li class="list-inline-item">
                                <a class="g-color-white-opacity-0_8 g-color-white--hover" href="#">Privacy Policy</a>
                            </li>
                            <li class="list-inline-item">
                                <span>|</span>
                            </li>
                            <li class="list-inline-item">
                                <a class="g-color-white-opacity-0_8 g-color-white--hover" href="#">Terms of Use</a>
                            </li>
                            <li class="list-inline-item">
                                <span>|</span>
                            </li>
                            <li class="list-inline-item">
                                <a class="g-color-white-opacity-0_8 g-color-white--hover" href="#">License</a>
                            </li>
                            <li class="list-inline-item">
                                <span>|</span>
                            </li>
                            <li class="list-inline-item">
                                <a class="g-color-white-opacity-0_8 g-color-white--hover" href="#">Support</a>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="col-md-4 align-self-center">
                    <ul class="list-inline text-center text-md-right mb-0">
                        <li class="list-inline-item g-mx-10" data-toggle="tooltip" data-placement="top" title="Facebook">
                            <a href="#" class="g-color-white-opacity-0_5 g-color-white--hover">
                                <i class="fa fa-facebook"></i>
                            </a>
                        </li>
                        <li class="list-inline-item g-mx-10" data-toggle="tooltip" data-placement="top" title="Skype">
                            <a href="#" class="g-color-white-opacity-0_5 g-color-white--hover">
                                <i class="fa fa-skype"></i>
                            </a>
                        </li>
                        <li class="list-inline-item g-mx-10" data-toggle="tooltip" data-placement="top" title="Linkedin">
                            <a href="#" class="g-color-white-opacity-0_5 g-color-white--hover">
                                <i class="fa fa-linkedin"></i>
                            </a>
                        </li>
                        <li class="list-inline-item g-mx-10" data-toggle="tooltip" data-placement="top" title="Pinterest">
                            <a href="#" class="g-color-white-opacity-0_5 g-color-white--hover">
                                <i class="fa fa-pinterest"></i>
                            </a>
                        </li>
                        <li class="list-inline-item g-mx-10" data-toggle="tooltip" data-placement="top" title="Twitter">
                            <a href="#" class="g-color-white-opacity-0_5 g-color-white--hover">
                                <i class="fa fa-twitter"></i>
                            </a>
                        </li>
                        <li class="list-inline-item g-mx-10" data-toggle="tooltip" data-placement="top" title="Dribbble">
                            <a href="#" class="g-color-white-opacity-0_5 g-color-white--hover">
                                <i class="fa fa-dribbble"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
    <!-- End Copyright Footer -->
    <a class="js-go-to u-go-to-v1" href="#" data-type="fixed" data-position='{
     "bottom": 15,
     "right": 15
   }' data-offset-top="400" data-compensation="#js-header" data-show-effect="zoomIn">
        <i class="hs-icon hs-icon-arrow-top"></i>
    </a>
</main>

<div class="u-outer-spaces-helper"></div>

<!-- CSS -->
<link rel="stylesheet" href="{{ asset('vendor/malihu-scrollbar/jquery.mCustomScrollbar.min.css')}}">
<link rel="stylesheet" href="{{ asset('vendor/chosen/chosen.css')}}">
<link rel="stylesheet" href="{{ asset('vendor/prism/themes/prism.css')}}">
<link rel="stylesheet" href="{{ asset('vendor/custombox/custombox.min.css')}}">
<link rel="stylesheet" href="{{ asset('style-switcher/vendor/spectrum/spectrum.css')}}">
<link rel="stylesheet" href="{{ asset('style-switcher/vendor/spectrum/themes/sp-dark.css')}}">
<link rel="stylesheet" href="{{ asset('style-switcher/style-switcher.css')}}">
<!-- End CSS -->

<!-- JS Global Compulsory -->
<script src="{{ asset('vendor/jquery/jquery.min.js') }}"></script>
<script src="{{ asset('vendor/jquery-migrate/jquery-migrate.min.js') }}"></script>
<script src="{{ asset('vendor/popper.js/popper.min.js') }}"></script>
<script src="{{ asset('vendor/bootstrap/bootstrap.min.js') }}"></script>


<!-- JS Implementing Plugins -->
<script src="{{ asset('vendor/appear.js') }}"></script>
<script src="{{ asset('vendor/hs-megamenu/src/hs.megamenu.js') }}"></script>
<script src="{{ asset('vendor/malihu-scrollbar/jquery.mCustomScrollbar.concat.min.js') }}"></script>

<!-- JS Unify -->
<script src="{{ asset('js/hs.core.js') }}"></script>
<script src="{{ asset('js/helpers/hs.hamburgers.js') }}"></script>
<script src="{{ asset('js/components/hs.header.js') }}"></script>
<script src="{{ asset('js/components/hs.tabs.js') }}"></script>
<script src="{{ asset('js/components/hs.counter.js') }}"></script>
<script src="{{ asset('js/components/hs.progress-bar.js') }}"></script>
<script src="{{ asset('js/components/hs.rating.js') }}"></script>
<script src="{{ asset('js/components/hs.scrollbar.js') }}"></script>
<script src="{{ asset('js/components/hs.go-to.js') }}"></script>

<!-- Scripts -->
<script src="{{ asset('vendor/chosen/chosen.jquery.js') }}"></script>
<script src="{{ asset('vendor/image-select/src/ImageSelect.jquery.js') }}"></script>
<script src="{{ asset('vendor/malihu-scrollbar/jquery.mCustomScrollbar.concat.min.js') }}"></script>
<script src="{{ asset('vendor/custombox/custombox.min.js') }}"></script>
<script src="{{ asset('vendor/clipboard/dist/clipboard.min.js') }}"></script>

<!-- JS Customization -->
{{--<script src="{{ asset('js/custom.js') }}"></script>--}}

@yield('scripts')

<!-- JS Plugins Init. -->
<script>
    $(document).on('ready', function () {
        // initialization of go to
        $.HSCore.components.HSGoTo.init('.js-go-to');

        // initialization of tabs
        $.HSCore.components.HSTabs.init('[role="tablist"]');

        // initialization of counters
        var counters = $.HSCore.components.HSCounter.init('[class*="js-counter"]');

        // initialization of rating
        $.HSCore.components.HSRating.init($('.js-rating'), {
            spacing: 2
        });

        // initialization of HSScrollBar component
        $.HSCore.components.HSScrollBar.init( $('.js-scrollbar') );
    });

    $(window).on('load', function () {
        // initialization of header
        $.HSCore.components.HSHeader.init($('#js-header'));
        $.HSCore.helpers.HSHamburgers.init('.hamburger');

        // initialization of HSMegaMenu component
        $('.js-mega-menu').HSMegaMenu({
            event: 'hover',
            pageContainer: $('.container'),
            breakpoint: 991
        });

        // initialization of horizontal progress bars
        setTimeout(function () { // important in this case
            var horizontalProgressBars = $.HSCore.components.HSProgressBar.init('.js-hr-progress-bar', {
                direction: 'horizontal',
                indicatorSelector: '.js-hr-progress-bar-indicator'
            });
        }, 1);
    });

    $(window).on('resize', function () {
        setTimeout(function () {
            $.HSCore.components.HSTabs.init('[role="tablist"]');
        }, 200);
    });
</script>


<div id="resolutionCaution" class="text-left g-max-width-600 g-bg-white g-pa-20" style="display: none;">
    <button type="button" class="close" onclick="Custombox.modal.close();">
        <i class="hs-icon hs-icon-close"></i>
    </button>
    <h4 class="g-mb-20">Screen resolution less than 1400px</h4>
</div>

<div id="copyModal" class="text-left modal-demo g-bg-white g-color-black g-pa-20" style="display: none;"></div>



<!-- CSS -->
{{--<link href="{{ asset('vendor/malihu-scrollbar/jquery.mCustomScrollbar.min.css') }}" rel="stylesheet">--}}
{{--<link href="{{ asset('vendor/chosen/chosen.css') }}" rel="stylesheet">--}}
{{--<link href="{{ asset('vendor/prism/themes/prism.css') }}" rel="stylesheet">--}}
{{--<link href="{{ asset('vendor/custombox/custombox.min.css') }}" rel="stylesheet">--}}
<!-- End CSS -->

<!-- Scripts -->
{{--<script src="{{ asset('vendor/chosen/chosen.jquery.js') }}"></script>--}}
{{--<script src="{{ asset('vendor/image-select/src/ImageSelect.jquery.js') }}"></script>--}}
{{--<script src="{{ asset('vendor/malihu-scrollbar/jquery.mCustomScrollbar.concat.min.js') }}"></script>--}}
{{--<script src="{{ asset('vendor/custombox/custombox.min.js') }}"></script>--}}
{{--<script src="{{ asset('vendor/clipboard/dist/clipboard.min.js') }}"></script>--}}

<!-- Prism -->
{{--<script src="{{ asset('vendor/prism/prism.js') }}"></script>--}}
{{--<script src="{{ asset('vendor/prism/components/prism-markup.min.js') }}"></script>--}}
{{--<script src="{{ asset('vendor/prism/components/prism-css.min.js') }}"></script>--}}
{{--<script src="{{ asset('vendor/prism/components/prism-clike.min.js') }}"></script>--}}
{{--<script src="{{ asset('vendor/prism/components/prism-javascript.min.js') }}"></script>--}}
{{--<script src="{{ asset('vendor/prism/plugins/toolbar/prism-toolbar.min.js') }}"></script>--}}
{{--<script src="{{ asset('vendor/prism/plugins/copy-to-clipboard/prism-copy-to-clipboard.min.js') }}"></script>--}}
<!-- End Prism -->

{{--<script src="{{ asset('js/components/hs.scrollbar.js') }}"></script>--}}
{{--<script src="{{ asset('js/components/hs.select.js') }}"></script>--}}
{{--<script src="{{ asset('js/components/hs.modal-window.js') }}"></script>--}}
{{--<script src="{{ asset('js/components/hs.markup-copy.js') }}"></script>--}}

@yield('cssfooter')
@yield('jsfooter')

<!-- End Scripts -->
<!-- End Style Switcher -->

</body>

</html>
