<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <title>{{ $TITLE }}</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="{{ asset('adminlte/plugins/fontawesome-free/css/all.min.css') }}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ asset('adminlte/dist/css/adminlte.min.css') }}">

  <link rel="stylesheet" href="{{ asset('asset/css/default.css') }}">

  <script src="{{ asset('asset/js/js10.js') }}"></script>
  <script src="{{ asset('asset/js/global.js') }}"></script>

</head>
<style>
    html, body {
        background-image:none
    }

</style>
<body class="hold-transition layout-top-nav">
<div class="wrapper">

  <!-- Navbar -->
  @include('home.component.navbar')
  <!-- /.navbar -->

  <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
    
    <!-- Main content -->
        <div class="content">
            <div class="container" style="padding:40px 0px 0px 0px">
            @yield('content')
            </div>
        </div>
    </div>
  <!-- /.content-wrapper -->

  <!-- Main Footer -->
  @include('home.component.footer')

</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->

  <!-- jQuery -->
  <!-- <script src="{{ asset('adminlte/plugins/jquery/jquery.min.js') }}"></script> -->
  <!-- Bootstrap 4 -->
  <!-- <script src="{{ asset('adminlte/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script> -->
  <!-- AdminLTE App -->
  <!-- <script src="{{ asset('adminlte/dist/js/adminlte.min.js') }}"></script> -->
  <!-- AdminLTE for demo purposes -->
  <!-- <script src="{{ asset('adminlte/dist/js/demo.js') }}"></script> -->
</body>
</html>
