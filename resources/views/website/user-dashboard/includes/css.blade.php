








<!-- Bootstrap 3.3.7 -->
<link rel="stylesheet" href="{{ asset('assets/website/user-dashboard/bower_components/bootstrap/dist/css/bootstrap.min.css')}}">
<!-- <link rel="stylesheet" href="assets/rtl/css/bootstrap-rtl.min.css"> -->

<!-- Font Awesome -->
<link rel="stylesheet" href="{{ asset('assets/website/user-dashboard/bower_components/font-awesome/css/font-awesome.min.css')}}">
<!-- Ionicons -->
<link rel="stylesheet" href="{{ asset('assets/website/user-dashboard/bower_components/Ionicons/css/ionicons.min.css')}}">




@if(\Mcamara\LaravelLocalization\Facades\LaravelLocalization::getCurrentLocale()=='ar')
    <link rel="stylesheet" href="{{ asset('assets/website/user-dashboard/rtl/css/bootstrap-rtl.min.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/website/user-dashboard/rtl/css/AdminLTE-rtl.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/website/user-dashboard/rtl/css/skins/_all-skins-rtl.min.css')}}">
@else
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset('assets/website/user-dashboard/dist/css/AdminLTE.min.css')}}">
    <!--<link rel="stylesheet" href="assets/rtl/css/AdminLTE-rtl.min.css"> -->

    <!-- AdminLTE Skins. Choose a skin from the css/skins
    folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="{{ asset('assets/website/user-dashboard/dist/css/skins/_all-skins.min.css')}}">
    <!-- <link rel="stylesheet" href="assets/rtl/css/skins/_all-skins-rtl.min.css"> -->
@endif



<!-- Google Font -->
<link rel="stylesheet"
      href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
