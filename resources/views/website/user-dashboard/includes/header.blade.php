<header class="main-header">
    <!-- Logo -->
    <a href="{{url(LaravelLocalization::setLocale().'/web')}}" class="logo">
        <!-- mini logo for sidebar mini 50x50 pixels -->
        <span class="logo-mini"><b>I</b>CE</span>
        <!-- logo for regular state and mobile devices -->
        <span class="logo-lg"><b>Smart Deal</b> Admin</span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->

    <nav class="navbar navbar-static-top">
        <!-- Sidebar toggle button-->
        <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </a>




        <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">


<!--  notifcation    -->




<!-- message  -->

<!-- message  -->


                <!-- User Account: style can be found in dropdown.less -->
                <li class="dropdown user user-menu">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <img src="{{ asset('assets/dist/img/user2-160x160.jpg')}}" class="user-image" alt="User Image">
                        <span class="hidden-xs">            {{\Illuminate\Support\Facades\Auth::guard('web')->user()->username}}
</span>
                    </a>
                    <ul class="dropdown-menu">
                        <!-- User image -->
                        <li class="user-header">
                            <img src="{{ asset('assets/dist/img/user2-160x160.jpg')}}" class="img-circle" alt="User Image">

                            <p>
            {{\Illuminate\Support\Facades\Auth::guard('web')->user()->username}}
                            </p>
                        </li>
                        <!-- Menu Body -->

                        <!-- Menu Footer-->
                        <li class="user-footer">
                            <div class="pull-right">
                                <a href="{{url('/user/logout')}}" class="btn btn-default btn-flat">{{__('messages.logout')}}</a>
                            </div>
                        </li>
                    </ul>
                </li>
                <!-- Control Sidebar Toggle Button -->

            </ul>
        </div>
    </nav>
</header>
