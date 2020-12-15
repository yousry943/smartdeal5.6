<aside class="main-sidebar">


    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="{{ asset('assets/dist/img/user2-160x160.jpg')}}" class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
                <p>{{\Illuminate\Support\Facades\Auth::guard('web')->user()->username}}</p>
                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>
        <!-- search form -->
        <!-- /.search form -->
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu" data-widget="tree">
            <li class="header">MAIN NAVIGATION</li>
            <li class="treeview">
            </li>



























            <!-- <li class="">
                <a href="{{url( LaravelLocalization::setLocale().'/admin/user/manager')}}">
                    <i class="fa fa-folder-open"></i> <span>  User permeation  </span>
                </a>
            </li> -->







            <!-- <li class="">
              <a href="{{url( LaravelLocalization::setLocale().'/admin/user/role')}}">
                    <i class="fa fa-folder-open"></i> <span> roles </span>
                </a>
            </li> -->



// i will  need  it  for  admin  permation


<li class="">
    <a href="{{url( LaravelLocalization::setLocale().'/')}}">
        <i class="fa fa-folder-open"></i> <span> Website </span>
    </a>
</li>



            <li class="">
                <a href="{{url( LaravelLocalization::setLocale().'/user/news')}}">
                    <i class="fa fa-folder-open"></i> <span> {{__('admin.News')}} </span>
                </a>
            </li>



            <li class="">
              <a href="{{url( LaravelLocalization::setLocale().'/user/technical_analysis')}}">
                    <i class="fa fa-folder-open"></i> <span>{{__('admin.technical_nalysis')}}</span>
                </a>
            </li>

        </ul>
    </section>
    <!-- radio -->

    <!-- /.sidebar -->
</aside>
