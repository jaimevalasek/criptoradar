<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Title -->
    <title>Criptoradar - @yield('title')</title>

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
{{--    <link rel="stylesheet" href="{{ asset('vendor/icon-awesome/css/font-awesome.min.css')}}">--}}
{{--    <link rel="stylesheet" href="{{ asset('vendor/icon-line-pro/style.css')}}">--}}
{{--    <link rel="stylesheet" href="{{ asset('assets/vendor/animate.css')}}">--}}

    <!-- CSS Unify -->
    <link rel="stylesheet" href="{{ asset('css/unify-core.css')}}">
    <link rel="stylesheet" href="{{ asset('css/unify-components.css')}}">
    <link rel="stylesheet" href="{{ asset('css/unify-globals.css')}}">

    <!-- CSS Customization -->
    <link rel="stylesheet" href="{{ asset('css/custom.css')}}">
</head>

<<body class="nimbus-is-editor" data-layout-styles="" data-custom-bg="">
    <main>
        @yield('content')
    </main>

    <div class="u-outer-spaces-helper"></div>


    <!-- JS Global Compulsory -->
    <script src="{{ asset('vendor/jquery/jquery.min.js')}}"></script>
    <script src="{{ asset('vendor/jquery-migrate/jquery-migrate.min.js')}}"></script>
{{--    <script src="{{ asset('vendor/popper.js/popper.min.js')}}"></script>--}}
    <script src="{{ asset('vendor/bootstrap/bootstrap.min.js')}}"></script>


    <!-- JS Unify -->
    {{--<script src="../../assets/js/hs.core.js"></script>--}}

    <!-- JS Customization -->
    {{--<script src="../../assets/js/custom.js"></script>--}}

    {{--<script src="../../assets/js/components/hs.scrollbar.js"></script>--}}
    {{--<script src="../../assets/js/components/hs.select.js"></script>--}}
    {{--<script src="../../assets/js/components/hs.modal-window.js"></script>--}}
    {{--<script src="../../assets/js/components/hs.markup-copy.js"></script>--}}

{{--    <script src="{{ asset('style-switcher/vendor/cookiejs/jquery.cookie.js')}}"></script>--}}
{{--    <script src="{{ asset('style-switcher/vendor/spectrum/spectrum.js')}}"></script>--}}
{{--    <script src="{{ asset('style-switcher/style-switcher.js')}}"></script>--}}
    <!-- End Scripts -->
    <!-- End Style Switcher -->

</body>

</html>
