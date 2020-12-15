<aside class="main-sidebar">


    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="{{ asset('assets/dist/img/user2-160x160.jpg')}}" class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
                <p>{{\Illuminate\Support\Facades\Auth::guard('admin')->user()->username}}</p>
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

            @if(\Illuminate\Support\Facades\Auth::guard('admin')->user()->can('look'))
            <li class="treeview">
                <a href="{{url( LaravelLocalization::setLocale().'/admin/manager')}}">
                    <i class="fa fa-language"></i>
                    <span>users</span>
                    <span class="pull-right-container">
            </span>
                </a>
                <ul class="treeview-menu">
                        <li>
                            <a rel="alternate" href="{{url( LaravelLocalization::setLocale().'/admin/registration/create')}}">
                                <i class="fa fa-circle-o"></i>  add registration
                            </a>
                        </li>
                    <li>
                        <a rel="alternate" href="{{url( LaravelLocalization::setLocale().'/admin/registration/show')}}">
                            <i class="fa fa-circle-o"></i>show  registration
                        </a>
                    </li>
                </ul>
            </li>
            @endif



            <li class="">
                <a href="{{url( LaravelLocalization::setLocale().'/admin/slider')}}">
                    <i class="fa fa-folder-open"></i> <span> Slider </span>
                </a>
            </li>


            <li class="">
                <a href="{{url( LaravelLocalization::setLocale().'/admin/notes')}}">
                    <i class="fa fa-folder-open"></i> <span> notes </span>
                </a>
            </li>




            <li class="treeview">
                <a href="{{url( LaravelLocalization::setLocale().'/admin/Gallerycategory')}}">
                    <i class="fa fa-folder-open"></i>
                    <span>Add Gallery</span>
                    <span class="pull-right-container">
            </span>
                </a>
                <ul class="treeview-menu">
                        <li>
                            <a rel="alternate" href="{{url( LaravelLocalization::setLocale().'/admin/Gallerycategory')}}">
                                <i class="fa fa-circle-o"></i>  Add Gallery Category
                            </a>
                        </li>
                    <li>
                        <a rel="alternate" href="{{url( LaravelLocalization::setLocale().'/admin/Gallery/create')}}">
                            <i class="fa fa-circle-o"></i>Add  Gallery
                        </a>
                    </li>
                </ul>
            </li>



            <li class="treeview">
                <a href="{{url( LaravelLocalization::setLocale().'/admin/learncategory')}}">
                    <i class="fa fa-folder-open"></i>
                    <span>Add Learn</span>
                    <span class="pull-right-container">
            </span>
                </a>
                <ul class="treeview-menu">

                  <li>
                      <a rel="alternate" href="{{url( LaravelLocalization::setLocale().'/admin/menuCategory')}}">
                          <i class="fa fa-circle-o"></i>  Add menu Category
                      </a>
                  </li>

                        <li>
                            <a rel="alternate" href="{{url( LaravelLocalization::setLocale().'/admin/learncategory')}}">
                                <i class="fa fa-circle-o"></i>  Add learn Category
                            </a>
                        </li>
                    <li>
                        <a rel="alternate" href="{{url( LaravelLocalization::setLocale().'/admin/learn/create')}}">
                            <i class="fa fa-circle-o"></i>Add  Learn
                        </a>
                    </li>
                </ul>
            </li>





            <li class="">
                <a href="{{url( LaravelLocalization::setLocale().'/admin/news')}}">
                    <i class="fa fa-folder-open"></i> <span> News </span>
                </a>
            </li>



            <li class="">
                <a href="{{url( LaravelLocalization::setLocale().'/admin/TechicalAnalysis')}}">
                    <i class="fa fa-folder-open"></i> <span> TechicalAnalysis </span>
                </a>
            </li>





                        <li class="">
                            <a href="{{url( LaravelLocalization::setLocale().'/admin/team')}}">
                                <i class="fa fa-folder-open"></i> <span> Team </span>
                            </a>
                        </li>



                        <li class="">
                            <a href="{{url( LaravelLocalization::setLocale().'/admin/story')}}">
                                <i class="fa fa-folder-open"></i> <span> Story </span>
                            </a>
                        </li>



                        <li class="">
                            <a href="{{url( LaravelLocalization::setLocale().'/admin/report')}}">
                                <i class="fa fa-folder-open"></i> <span> Report </span>
                            </a>
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
                <a href="{{url( LaravelLocalization::setLocale().'/admin/manager')}}">
                    <i class="fa fa-folder-open"></i> <span> {{__('admin.admins')}} </span>
                </a>
            </li>



            <li class="">
              <a href="{{url( LaravelLocalization::setLocale().'/admin/role')}}">
                    <i class="fa fa-folder-open"></i> <span>{{__('admin.roles')}}</span>
                </a>
            </li>

        </ul>
    </section>
    <!-- radio -->

    <!-- /.sidebar -->
</aside>
