<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('assets/admin/css/adminlte.min.css') }}">
    <link rel="stylesheet" href="{{asset('assets/admin/plugins/fontawesome-free/css/all.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/admin/css/custom.css')}}">
</head>
<body class="hold-transition sidebar-mini">

<div class="wrapper">

<!-- Navbar -->
@include('admin.menu.navbar')
<!-- /.navbar -->

<!-- Main Sidebar Container -->
@include('admin.menu.main-sidebar')
<!-- Content Wrapper. Contains page content -->
@yield('content')
<!-- /.content-wrapper -->

<!-- Control Sidebar -->
@include('admin.menu.control-sidebar')
<!-- /.control-sidebar -->

<!-- Main Footer -->
@include('admin.menu.footer')
</div>
<!-- ./wrapper -->
    <script src="{{asset('assets/admin/plugins/jquery/jquery.min.js')}}"></script>
    <script src="{{ asset('assets/admin/js/adminlte.min.js') }}"></script>
</body>
</html>
