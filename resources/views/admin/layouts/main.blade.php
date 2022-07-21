<!DOCTYPE html>
<html lang="pt-br">

<head>
    <!-- Title -->
    <title>Criptoradar Admin - @yield('title')</title>

    <!-- Required Meta Tags Always Come First -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ asset('favicon.ico')}}">
    <!-- Google Fonts -->
    <link rel="stylesheet" href="//fonts.googleapis.com/css?family=Open+Sans%3A400%2C300%2C500%2C600%2C700%7CPlayfair+Display%7CRoboto%7CRaleway%7CSpectral%7CRubik">
    <!-- CSS Global Compulsory -->
    <link rel="stylesheet" href="{{ asset('vendor/bootstrap/bootstrap.min.css')}}">
    <!-- CSS Global Icons -->
    <link rel="stylesheet" href="{{ asset('vendor/icon-awesome/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{ asset('vendor/icon-line/css/simple-line-icons.css')}}">
    <link rel="stylesheet" href="{{ asset('vendor/icon-etlinefont/style.css')}}">
    <link rel="stylesheet" href="{{ asset('vendor/icon-line-pro/style.css')}}">
    <link rel="stylesheet" href="{{ asset('vendor/icon-hs/style.css')}}">

    <link rel="stylesheet" href=".{{ asset('admin/vendor/hs-admin-icons/hs-admin-icons.css')}}">

    <link rel="stylesheet" href="{{ asset('vendor/animate.css')}}">
    <link rel="stylesheet" href="{{ asset('vendor/malihu-scrollbar/jquery.mCustomScrollbar.min.css')}}">

    <link rel="stylesheet" href="{{ asset('admin/vendor/flatpickr/dist/css/flatpickr.min.css')}}">
    <link rel="stylesheet" href="{{ asset('admin/vendor/bootstrap-select/css/bootstrap-select.min.css')}}">

    <link rel="stylesheet" href="{{ asset('admin/vendor/chartist-js/chartist.min.css')}}">
    <link rel="stylesheet" href="{{ asset('admin/vendor/chartist-js-tooltip/chartist-plugin-tooltip.css')}}">
    <link rel="stylesheet" href="{{ asset('admin/vendor/fancybox/jquery.fancybox.min.css')}}">

    <link rel="stylesheet" href="{{ asset('vendor/hamburgers/hamburgers.min.css')}}">

    <!-- CSS Unify -->
    <link rel="stylesheet" href="{{ asset('admin/css/unify-admin.css')}}">

    <!-- CSS Customization -->
    <link rel="stylesheet" href="{{ asset('admin/css/custom.css')}}">
</head>

<body>

@yield('content')

<!-- JS Global Compulsory -->
<script src="{{ asset('vendor/jquery/jquery.min.js')}}"></script>
<script src="{{ asset('vendor/jquery-migrate/jquery-migrate.min.js')}}"></script>

<script src="{{ asset('vendor/popper.js/popper.min.js')}}"></script>
<script src="{{ asset('vendor/bootstrap/bootstrap.min.js')}}"></script>

<script src="{{ asset('vendor/cookiejs/jquery.cookie.js')}}"></script>


<!-- jQuery UI Core -->
<script src="{{ asset('vendor/jquery-ui/ui/widget.js')}}"></script>
<script src="{{ asset('vendor/jquery-ui/ui/version.js')}}"></script>
<script src="{{ asset('vendor/jquery-ui/ui/keycode.js')}}"></script>
<script src="{{ asset('vendor/jquery-ui/ui/position.js')}}"></script>
<script src="{{ asset('vendor/jquery-ui/ui/unique-id.js')}}"></script>
<script src="{{ asset('vendor/jquery-ui/ui/safe-active-element.js')}}"></script>

<!-- jQuery UI Helpers -->
<script src="{{ asset('vendor/jquery-ui/ui/widgets/menu.js')}}"></script>
<script src="{{ asset('vendor/jquery-ui/ui/widgets/mouse.js')}}"></script>

<!-- jQuery UI Widgets -->
<script src="{{ asset('vendor/jquery-ui/ui/widgets/datepicker.js')}}"></script>

<!-- JS Plugins Init. -->
<script src="{{ asset('vendor/appear.js')}}"></script>
<script src="{{ asset('admin/vendor/bootstrap-select/js/bootstrap-select.min.js')}}"></script>
<script src="{{ asset('admin/vendor/flatpickr/dist/js/flatpickr.min.js')}}"></script>
<script src="{{ asset('vendor/malihu-scrollbar/jquery.mCustomScrollbar.concat.min.js')}}"></script>
<script src="{{ asset('admin/vendor/chartist-js/chartist.min.js')}}"></script>
<script src="{{ asset('admin/vendor/chartist-js-tooltip/chartist-plugin-tooltip.js')}}"></script>
<script src="{{ asset('admin/vendor/fancybox/jquery.fancybox.min.js')}}"></script>

<!-- JS Unify -->
<script src="{{ asset('js/hs.core.js')}}"></script>
<script src="{{ asset('js/components/hs.side-nav.js')}}"></script>
<script src="{{ asset('js/helpers/hs.hamburgers.js')}}"></script>
<script src="{{ asset('admin/js/components/hs.range-datepicker.js')}}"></script>
<script src="{{ asset('js/components/hs.datepicker.js')}}"></script>
<script src="{{ asset('js/components/hs.dropdown.js')}}"></script>
<script src="{{ asset('js/components/hs.scrollbar.js')}}"></script>
<script src="{{ asset('admin/js/components/hs.area-chart.js')}}"></script>
<script src="{{ asset('admin/js/components/hs.donut-chart.js')}}"></script>
<script src="{{ asset('admin/js/components/hs.bar-chart.js')}}"></script>
<script src="{{ asset('js/helpers/hs.focus-state.js')}}"></script>
<script src="{{ asset('admin/js/components/hs.popup.js')}}"></script>

<!-- JS Custom -->
<script src="{{ asset('admin/js/custom.js')}}"></script>

<!-- JS Plugins Init. -->
<script>
    $(document).on('ready', function () {
        // initialization of custom select
        $('.js-select').selectpicker();

        // initialization of hamburger
        $.HSCore.helpers.HSHamburgers.init('.hamburger');

        // initialization of charts
        $.HSCore.components.HSAreaChart.init('.js-area-chart');
        $.HSCore.components.HSDonutChart.init('.js-donut-chart');
        $.HSCore.components.HSBarChart.init('.js-bar-chart');

        // initialization of sidebar navigation component
        $.HSCore.components.HSSideNav.init('.js-side-nav', {
            afterOpen: function() {
                setTimeout(function() {
                    $.HSCore.components.HSAreaChart.init('.js-area-chart');
                    $.HSCore.components.HSDonutChart.init('.js-donut-chart');
                    $.HSCore.components.HSBarChart.init('.js-bar-chart');
                }, 400);
            },
            afterClose: function() {
                setTimeout(function() {
                    $.HSCore.components.HSAreaChart.init('.js-area-chart');
                    $.HSCore.components.HSDonutChart.init('.js-donut-chart');
                    $.HSCore.components.HSBarChart.init('.js-bar-chart');
                }, 400);
            }
        });

        // initialization of range datepicker
        $.HSCore.components.HSRangeDatepicker.init('#rangeDatepicker, #rangeDatepicker2, #rangeDatepicker3');

        // initialization of datepicker
        $.HSCore.components.HSDatepicker.init('#datepicker', {
            dayNamesMin: [
                'SU',
                'MO',
                'TU',
                'WE',
                'TH',
                'FR',
                'SA'
            ]
        });

        // initialization of HSDropdown component
        $.HSCore.components.HSDropdown.init($('[data-dropdown-target]'), {dropdownHideOnScroll: false});

        // initialization of custom scrollbar
        $.HSCore.components.HSScrollBar.init($('.js-custom-scroll'));

        // initialization of popups
        $.HSCore.components.HSPopup.init('.js-fancybox', {
            btnTpl: {
                smallBtn: '<button data-fancybox-close class="btn g-pos-abs g-top-25 g-right-30 g-line-height-1 g-bg-transparent g-font-size-16 g-color-gray-light-v3 g-brd-none p-0" title=""><i class="hs-admin-close"></i></button>'
            }
        });
    });
</script>
</body>

</html>
