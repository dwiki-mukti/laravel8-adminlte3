<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ env('APP_NAME') }} | @yield('title')</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">

    <!-- icon -->
    <link rel="stylesheet" href="{{ asset('adminlte/plugins/fontawesome-free/css/all.min.css') }}">

    <!-- style -->
    <style>
        .navbar {
            border: none !important;
        }

        .navbar-white {
            background: #f4f6f9 !important;
        }
    </style>
    <link rel="stylesheet" href="{{ asset('myDist/css/adminlte.all.css') }}">
    <link rel="stylesheet" href="{{ asset('myDist/css/default.css') }}">
    <link rel="stylesheet" href="{{ asset('adminlte/dist/css/adminlte.min.css') }}">
    <link rel="stylesheet" href="{{ asset('adminlte/plugins/overlayScrollbars/css/OverlayScrollbars.min.css') }}">
    <link rel="stylesheet" href="{{ asset('myDist/css/custom.css') }}">

    @yield('style')
</head>

<body class="sidebar-mini layout-fixed">
    <div class="wrapper">
        @include('layouts.sidenav.components.navbar')
        @include('layouts.sidenav.components.sidebar')

        @yield('content')

        <!-- <footer class="main-footer">
            <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong>
            All rights reserved.
            <div class="float-right d-none d-sm-inline-block">
                <b>Version</b> 3.2.0
            </div>
        </footer> -->
    </div>







    <script src="{{ asset('adminlte/plugins/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('adminlte/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('adminlte/dist/js/adminlte.js') }}"></script>

    <script src="{{ asset('myDist/js/default.js') }}"></script>
    <script src="{{ asset('myDist/js/ajax.js') }}"></script>
    <script>
        if (sessionStorage.getItem("mode") == 'night') {
            $('#switch-night-mode').prop('checked', true)
            nighMode(true)
        }

        $('#switch-night-mode').change(function(e) {
            nighMode(e.target.checked)
        })
    </script>

    @yield('script')
</body>

</html>
