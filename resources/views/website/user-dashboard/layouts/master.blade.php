<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>@yield('title')</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

    @include('website.user-dashboard.includes.css')
    @yield('css')

</head>
<body class="hold-transition skin-blue sidebar-mini">
<!-- Site wrapper -->
<div class="wrapper">

@include('website.user-dashboard.includes.header')

<!-- =============================================== -->

    <!-- Left side column. contains the sidebar -->
@include('website.user-dashboard.includes.aside')

<!-- =============================================== -->

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
       @yield('page-header')

        <!-- Main content -->
        @yield('content')

        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

@include('website.user-dashboard.includes.footer')

<!-- Control Sidebar -->

    <!-- /.control-sidebar -->
    <!-- Add the sidebar's background. This div must be placed
         immediately after the control sidebar -->
</div>
<!-- ./wrapper -->

@include('website.user-dashboard.includes.js')
@include('website.user-dashboard.includes.flash_message')



@yield('js')

</body>
</html>
