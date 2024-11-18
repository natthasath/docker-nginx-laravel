<!DOCTYPE html>
<html lang="en">
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
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>{{ config('app.name') }}</title>

    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    {{-- <link rel="stylesheet" href="{{ asset('/fontawesome5/css/fontawesome.min.css') }}"> --}}
    <link rel="stylesheet" href="{{ asset('/fontawesome6/css/fontawesome.min.css') }}">
    {{-- <link rel="stylesheet" href="{{ asset('/fontawesome5/css/all.css') }}"> --}}
    <link rel="stylesheet" href="{{ asset('/fontawesome6/css/all.css') }}">

    <script type="text/javascript" src="{{ asset('/bootstrap/js/bootstrap.min.js') }}" ></script>
    <link rel="stylesheet" href="{{ asset('/bootstrap/css/bootstrap.min.css') }}">
    {{-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css"
          integrity="sha512-1PKOgIY59xJ8Co8+NE6FZ+LOAZKjy+KY8iq0G4B3CyeY6wYHN3yt9PW0XpSriVlkMXe40PTKnXrLnZ9+fkDaog=="
          crossorigin="anonymous"/> --}}

    <script src="{{ asset('/jquery-3.7.1.js') }}"></script>
    <style>
        @font-face {
            font-family: 'Graphik';
            src: url('../fonts/GraphikThaiLoop-Regular-Web.woff2');
            /* src: url('../fonts/thsarabunnew_italic-webfont.eot?#iefix') format('embedded-opentype'),
                url('../fonts/thsarabunnew_italic-webfont.woff2') format('woff2'),
                url('../fonts/thsarabunnew_italic-webfont.ttf') format('truetype'); */
            font-weight: normal;
            font-style: regular;
        }
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

    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    @stack('third_party_stylesheets')
    @stack('page_css')
    @stack('scripts')
</head>

{{-- {{ $slot }} --}}


    <body class="hold-transition sidebar-mini layout-fixed">
        <div class="wrapper">
            <!-- Main Header -->
            <nav class="main-header navbar navbar-expand navbar-white navbar-light">
                <!-- Left navbar links -->
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" data-widget="pushmenu" href="#" role="button">
                            <i class="fas fa-bars"></i>
                        </a>
                    </li>
                </ul>
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="">
                            <h5>Overview</h5>
                        </a>
                    </li>
                </ul>
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            <i class="fas fa-bell"></i>
                            <span class="position-absolute p-1 bg-danger border border-light rounded-circle" style="padding-right: 0px; padding-top: 0px"></span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            <i class="fas fa-envelope"></i>
                            <span class="position-absolute p-1 bg-danger border border-light rounded-circle" style="padding-right: 0px; padding-top: 0px"></span>
                        </a>
                    </li>
                    <li class="nav-item dropdown user-menu">
                        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">
                            <span class="d-none d-md-inline">{{ Auth::user()->name }}</span>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                            <!-- User image -->
                            <li class="user-header bg-primary">
                                <img src="https://assets.infyom.com/logo/blue_logo_150x150.png"
                                    class="img-circle elevation-2" alt="User Image">
                                <p>
                                    {{ Auth::user()->name }}
                                    <small>Member since {{ Auth::user()->created_at->format('M. Y') }}</small>
                                </p>
                            </li>
                            <!-- Menu Footer-->
                            <li class="user-footer">
                                <a href="#" class="btn btn-default btn-flat">Profile</a>
                                <a href="#" class="btn btn-default btn-flat float-right"
                                    onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                    Sign out
                                </a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </li>
                        </ul>
                    </li>
                </ul>
            </nav>

            <!-- Left side column. contains the logo and sidebar -->
            @include('layouts.sidebar')

            <!-- Content Wrapper. Contains page content -->
            <div class="content-wrapper">
                @yield('content')
            </div>

            <!-- Main Footer -->
            {{-- <footer class="main-footer">
                <div class="float-right d-none d-sm-block">
                    <b>Version</b> 3.1.0
                </div>
                <strong>Copyright &copy; 2014-2023 <a href="https://adminlte.io">AdminLTE.io</a>.</strong> All rights
                reserved.
            </footer> --}}
        </div>
    </body>

    @vite('resources/js/app.js')
    @stack('third_party_scripts')
    @stack('page_scripts')

</html>

