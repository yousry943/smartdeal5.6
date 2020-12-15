<aside class="main-sidebar">


    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="<?php echo e(asset('assets/dist/img/user2-160x160.jpg')); ?>" class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
                <p><?php echo e(\Illuminate\Support\Facades\Auth::guard('admin')->user()->username); ?></p>
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

            <?php if(\Illuminate\Support\Facades\Auth::guard('admin')->user()->can('look')): ?>
            <li class="treeview">
                <a href="<?php echo e(url( LaravelLocalization::setLocale().'/admin/manager')); ?>">
                    <i class="fa fa-language"></i>
                    <span>users</span>
                    <span class="pull-right-container">
            </span>
                </a>
                <ul class="treeview-menu">
                        <li>
                            <a rel="alternate" href="<?php echo e(url( LaravelLocalization::setLocale().'/admin/users/add')); ?>">
                                <i class="fa fa-circle-o"></i>  add users
                            </a>
                        </li>
                    <li>
                        <a rel="alternate" href="<?php echo e(url( LaravelLocalization::setLocale().'/admin/users/show')); ?>">
                            <i class="fa fa-circle-o"></i>show  users
                        </a>
                    </li>
                </ul>
            </li>
            <?php endif; ?>




            <?php if(\Illuminate\Support\Facades\Auth::guard('admin')->user()->can('look')): ?>
            <li class="treeview">
                <a href="<?php echo e(url( LaravelLocalization::setLocale().'/admin/manager')); ?>">
                    <i class="fa fa-language"></i>
                    <span>Paper template</span>
                    <span class="pull-right-container">
            </span>
                </a>
                <ul class="treeview-menu">
                        <li>
                            <a rel="alternate" href="<?php echo e(url( LaravelLocalization::setLocale().'/admin/users/PaperTemplate')); ?>">
                                <i class="fa fa-circle-o"></i> Edit Paper template
                            </a>
                        </li>

                </ul>
            </li>
            <?php endif; ?>








            <?php if(\Illuminate\Support\Facades\Auth::guard('admin')->user()->can('look')): ?>
            <li class="treeview">
                <a href="<?php echo e(url( LaravelLocalization::setLocale().'/admin/manager')); ?>">
                    <i class="fa fa-language"></i>
                    <span>Conference Important Dates</span>
                    <span class="pull-right-container">
            </span>
                </a>
                <ul class="treeview-menu">


                  <li>
                      <a rel="alternate" href="<?php echo e(url( LaravelLocalization::setLocale().'/admin/users/ConferenceImportantDates')); ?>">
                          <i class="fa fa-circle-o"></i> Show Conference Dates
                      </a>
                  </li>



                        <!-- <li>
                            <a rel="alternate" href="<?php echo e(url( LaravelLocalization::setLocale().'/admin/users/ConferenceImportantDates/show')); ?>">
                                <i class="fa fa-circle-o"></i> show Conference Important Dates
                            </a>
                        </li> -->

                </ul>
            </li>
            <?php endif; ?>





                        <?php if(\Illuminate\Support\Facades\Auth::guard('admin')->user()->can('look')): ?>
                        <li class="treeview">
                            <a href="<?php echo e(url( LaravelLocalization::setLocale().'/admin/manager')); ?>">
                                <i class="fa fa-language"></i>
                                <span>Conference Tracks</span>
                                <span class="pull-right-container">
                        </span>
                            </a>
                            <ul class="treeview-menu">


                              <li>
                                  <a rel="alternate" href="<?php echo e(url( LaravelLocalization::setLocale().'/admin/users/ConferenceTracks')); ?>">
                                      <i class="fa fa-circle-o"></i> Add Conference Tracks
                                  </a>
                              </li>



                                    <li>
                                        <a rel="alternate" href="<?php echo e(url( LaravelLocalization::setLocale().'/admin/users/ConferenceTracks/show')); ?>">
                                            <i class="fa fa-circle-o"></i> show Conference Tracks
                                        </a>
                                    </li>

                            </ul>
                        </li>
                        <?php endif; ?>






                        <?php if(\Illuminate\Support\Facades\Auth::guard('admin')->user()->can('look')): ?>
                        <li class="treeview">
                            <a href="<?php echo e(url( LaravelLocalization::setLocale().'/admin/manager')); ?>">
                                <i class="fa fa-language"></i>
                                <span>Email Settings</span>
                                <span class="pull-right-container">
                        </span>
                            </a>
                            <ul class="treeview-menu">


                              <li>
                                  <a rel="alternate" href="<?php echo e(url( LaravelLocalization::setLocale().'/admin/users/EmailSettings')); ?>">
                                      <i class="fa fa-circle-o"></i> Show Email Settings
                                  </a>
                              </li>



                            </ul>
                        </li>
                        <?php endif; ?>







            <!-- <li class="">
                <a href="<?php echo e(url( LaravelLocalization::setLocale().'/admin/user/manager')); ?>">
                    <i class="fa fa-folder-open"></i> <span>  User permeation  </span>
                </a>
            </li> -->







            <!-- <li class="">
              <a href="<?php echo e(url( LaravelLocalization::setLocale().'/admin/user/role')); ?>">
                    <i class="fa fa-folder-open"></i> <span> roles </span>
                </a>
            </li> -->



// i will  need  it  for  admin  permation

            <!-- <li class="">
                <a href="<?php echo e(url( LaravelLocalization::setLocale().'/admin/manager')); ?>">
                    <i class="fa fa-folder-open"></i> <span>الادمن</span>
                </a>
            </li>


            <li class="">
              <a href="<?php echo e(url( LaravelLocalization::setLocale().'/admin/role')); ?>">
                    <i class="fa fa-folder-open"></i> <span>الوظائف</span>
                </a>
            </li> -->

        </ul>
    </section>
    <!-- radio -->

    <!-- /.sidebar -->
</aside>
