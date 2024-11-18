<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">
    <meta http-equiv="Cache-Control" content="no-cache, no-store, must-revalidate">
    <meta http-equiv="Pragma" content="no-cache">
    <meta http-equiv="Expires" content="0">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    {{-- <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet"> --}}
    <style>
       @font-face {
            font-family: 'Mitr';
            src: url('../fonts/mitr/Mitr-Bold.eot');
            src: local('Mitr Bold'), local('Mitr-Bold'),
                url('../fonts/mitr/Mitr-Bold.eot?#iefix') format('embedded-opentype'),
                url('../fonts/mitr/Mitr-Bold.woff2') format('woff2'),
                url('../fonts/mitr/Mitr-Bold.woff') format('woff'),
                url('../fonts/mitr/Mitr-Bold.ttf') format('truetype');
            font-weight: bold;
            font-style: normal;
        }

        @font-face {
            font-family: 'Mitr';
            src: url('../fonts/mitr/Mitr-Regular.eot');
            src: local('Mitr Regular'), local('Mitr-Regular'),
                url('../fonts/mitr/Mitr-Regular.eot?#iefix') format('embedded-opentype'),
                url('../fonts/mitr/Mitr-Regular.woff2') format('woff2'),
                url('../fonts/mitr/Mitr-Regular.woff') format('woff'),
                url('../fonts/mitr/Mitr-Regular.ttf') format('truetype');
            font-weight: normal;
            font-style: normal;
        }

        @font-face {
            font-family: 'Mitr';
            src: url('../fonts/mitr/Mitr-ExtraLight.eot');
            src: local('Mitr ExtraLight'), local('Mitr-ExtraLight'),
                url('../fonts/mitr/Mitr-ExtraLight.eot?#iefix') format('embedded-opentype'),
                url('../fonts/mitr/Mitr-ExtraLight.woff2') format('woff2'),
                url('../fonts/mitr/Mitr-ExtraLight.woff') format('woff'),
                url('../fonts/mitr/Mitr-ExtraLight.ttf') format('truetype');
            font-weight: 200;
            font-style: normal;
        }

        @font-face {
            font-family: 'Mitr';
            src: url('../fonts/mitr/Mitr-SemiBold.eot');
            src: local('Mitr SemiBold'), local('Mitr-SemiBold'),
                url('../fonts/mitr/Mitr-SemiBold.eot?#iefix') format('embedded-opentype'),
                url('../fonts/mitr/Mitr-SemiBold.woff2') format('woff2'),
                url('../fonts/mitr/Mitr-SemiBold.woff') format('woff'),
                url('../fonts/mitr/Mitr-SemiBold.ttf') format('truetype');
            font-weight: 600;
            font-style: normal;
        }

        @font-face {
            font-family: 'Mitr';
            src: url('../fonts/mitr/Mitr-Light.eot');
            src: local('Mitr Light'), local('Mitr-Light'),
                url('../fonts/mitr/Mitr-Light.eot?#iefix') format('embedded-opentype'),
                url('../fonts/mitr/Mitr-Light.woff2') format('woff2'),
                url('../fonts/mitr/Mitr-Light.woff') format('woff'),
                url('../fonts/mitr/Mitr-Light.ttf') format('truetype');
            font-weight: 300;
            font-style: normal;
        }

        @font-face {
            font-family: 'Mitr';
            src: url('../fonts/mitr/Mitr-Medium.eot');
            src: local('Mitr Medium'), local('Mitr-Medium'),
                url('../fonts/mitr/Mitr-Medium.eot?#iefix') format('embedded-opentype'),
                url('../fonts/mitr/Mitr-Medium.woff2') format('woff2'),
                url('../fonts/mitr/Mitr-Medium.woff') format('woff'),
                url('../fonts/mitr/Mitr-Medium.ttf') format('truetype');
            font-weight: 500;
            font-style: normal;
        }


        body {
            font-family: 'Mitr' !important;
            /* position: relative; */
        }

    </style>

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])


</head>
<body>
    <div id="app" >

        <x-nav_main></x-nav_main>
        <main class="py-4  bg">
            @yield('content')
        </main>
        <x-footer></x-footer>
    </div>

</body>
</html>
