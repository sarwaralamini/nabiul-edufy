<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>@yield('title')</title>

        <!-- Google Font: Source Sans Pro -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
        <!-- Font Awesome -->
        <link rel="stylesheet" href="{{ asset('dist/backend/plugins/fontawesome-free/css/all.min.css') }}">
        <!-- Theme style -->
        <link rel="stylesheet" href="{{ asset('dist/backend/css/adminlte.min.css') }}">
        <!-- Stack style -->
        @stack('css')
        <!-- Custom style -->
        <link rel="stylesheet" href="{{ asset('dist/backend/css/style_v2.css') }}">
    </head>
    <body class="hold-transition sidebar-mini">
        <!-- Site wrapper -->
        <div class="wrapper">
            <!-- Navbar -->
            @include('backend.inc.navbar')
            <!-- /.navbar -->

            <!-- Main Sidebar Container -->
            @include('backend.inc.sidebar')

            <!-- Content Wrapper. Contains page content -->
            <div class="content-wrapper">
                    @yield('content')
            </div>
            <!-- /.content-wrapper -->

            <footer class="main-footer">
                <div class="float-right d-none d-sm-block">
                <b>Version</b> 1.0.0
                </div>
                <strong>Developed By - <a href="https://techathome.com.bd/" target="_new">Tech@Home</a>.</strong> Edufy {{ date('Y') }} &copy; All rights reserved.
            </footer>

            <!-- Control Sidebar -->
            <aside class="control-sidebar control-sidebar-dark">
                <!-- Control sidebar content goes here -->
            </aside>
            <!-- /.control-sidebar -->
        </div>
        <!-- ./wrapper -->

        <!-- jQuery -->
        <script src="{{ asset('dist/backend/plugins/jquery/jquery.min.js') }}"></script>
        <!-- Bootstrap 4 -->
        <script src="{{ asset('dist/backend/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
        <!-- bs-custom-file-input -->
        <script src="{{ asset('dist/backend/plugins/bs-custom-file-input/bs-custom-file-input.min.js') }}"></script>
        <!-- AdminLTE App -->
        <script src="{{ asset('dist/backend/js/adminlte.min.js') }}"></script>
        <!-- AdminLTE for demo purposes -->
        <script src="{{ asset('dist/backend/js/demo.js') }}"></script>
        @stack('js')
    </body>
</html>
