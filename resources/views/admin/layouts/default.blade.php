<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>@yield('title_area')</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <link rel="shortcut icon" href="{{ asset("web")}}/img/icon/favicon.ico">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{ asset("admin")}}/plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bbootstrap 4 -->
  <link rel="stylesheet" href="{{ asset("admin")}}/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="{{ asset("admin")}}/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="{{ asset("admin")}}/plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{asset("admin")}}/dist/css/adminlte.min.css">

  <link href="{{asset("admin")}}/plugins/notifications/notification.css" rel="stylesheet" />
  <link href="{{asset("admin")}}/dist/css/bootstrap-select.min.css" rel="stylesheet" />


   <!-- helper css -->
  <link rel="stylesheet" href="{{asset("admin")}}/dist/css/helper.css">
  <!--custom css -->
  <link rel="stylesheet" href="{{asset("admin")}}/dist/css/custom.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="{{ asset("admin")}}/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="{{ asset("admin")}}/plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="{{ asset("admin")}}/plugins/summernote/summernote-bs4.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet"><!-- jQuery -->
    <script src="{{asset("admin")}}/plugins/jquery/jquery.min.js"></script>
    <!-- jQuery UI 1.11.4 -->
    <script src="{{asset("admin")}}/plugins/jquery-ui/jquery-ui.min.js"></script>
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <script>
    $.widget.bridge('uibutton', $.ui.button)
    </script>
    <!-- Bootstrap 4 -->
    <script src="{{asset("admin")}}/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Navbar -->
    @include('admin.layouts.header')
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
    @include('admin.layouts.sidebar')
  <!-- Main Sidebar Container -->


  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
        <!-- Start BreadCamb -->
        @yield('breadcrumb')
        <!-- End  BreadCamb -->
        <!-- Start content -->
        @yield('main_section')
        <!-- End Start content -->
  </div>
<!-- footer -->
 @include('admin.layouts.footer')
<!-- footer -->


<!-- InputMask -->
<script src="{{asset("admin")}}/plugins/moment/moment.min.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="{{asset("admin")}}/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- overlayScrollbars -->
<script src="{{asset("admin")}}/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- plgin js -->
<script src="{{asset("admin/plugins")}}/notifications/notify.min.js"></script>
<script src="{{asset("admin/plugins")}}/notifications/notify-metro.js"></script>
<script src="{{asset("admin/plugins")}}/notifications/notifications.js"></script>
<script src="{{asset("admin")}}/dist/js/bootstrap-select.min.js"></script>
<!-- Bootstrap Switch -->
<script src="{{asset("admin")}}/plugins/bootstrap-switch/js/bootstrap-switch.min.js"></script>
<!-- AdminLTE App -->
<script src="{{asset("admin")}}/dist/js/adminlte.js"></script>
@stack('scripts')
<script>
    $(document).ready(function(){
        $("input[data-bootstrap-switch]").each(function(){
                $(this).bootstrapSwitch('state', $(this).prop('checked'));
            });
    });
</script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
{{-- <script src="{{asset("admin")}}/dist/js/pages/dashboard.js"></script> --}}
<!-- AdminLTE for demo purposes -->
{{-- <script src="{{asset("admin")}}/dist/js/demo.js"></script> --}}
</body>
</html>
