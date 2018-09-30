<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="header-fixed sidebar-left-sm">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />

    <title>{{ config('app.name') }}</title>

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800|Shadows+Into+Light" rel="stylesheet" type="text/css">

    <link rel="stylesheet" href="{{ asset('vendor/bootstrap/css/bootstrap.css') }}" />
    <link rel="stylesheet" href="{{ asset('vendor/animate/animate.css') }}">

    <link rel="stylesheet" href="{{ asset('vendor/font-awesome/css/fontawesome-all.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('vendor/magnific-popup/magnific-popup.css') }}" />
    <link rel="stylesheet" href="{{ asset('vendor/bootstrap-datepicker/css/bootstrap-datepicker3.css') }}" />

    <!-- Styles -->
    <link href="{{ asset('css/theme.css') }}" rel="stylesheet">
    <link href="{{ asset('css/skins/default.css') }}" rel="stylesheet">

    <script src="{{ asset('js/app.js') }}" defer></script>

    <script src="{{ asset('vendor/modernizr/modernizr.js') }}"></script>
</head>
<body>

@yield('template')

<script src="{{ asset('vendor/jquery-browser-mobile/jquery.browser.mobile.js') }}" defer></script>
<script src="{{ asset('vendor/popper/umd/popper.min.js') }}" defer></script>
<script src="{{ asset('vendor/bootstrap-datepicker/js/bootstrap-datepicker.js') }}" defer></script>
<script src="{{ asset('vendor/common/common.js') }}" defer></script>
<script src="{{ asset('vendor/nanoscroller/nanoscroller.js') }}" defer></script>
<script src="{{ asset('vendor/magnific-popup/jquery.magnific-popup.js') }}" defer></script>
<script src="{{ asset('vendor/jquery-placeholder/jquery-placeholder.js') }}" defer></script>

<script src="{{ asset('js/theme.js') }}" defer></script>

<script src="{{ asset('js/theme.init.js') }}" defer></script>
</body>
</html>
