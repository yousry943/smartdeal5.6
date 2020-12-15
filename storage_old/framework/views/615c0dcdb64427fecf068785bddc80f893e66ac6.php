

<?php
$lang = \Mcamara\LaravelLocalization\Facades\LaravelLocalization::getCurrentLocale();

        @$get_lang = \App\language::where('langcode','=',$lang)->get();
        @$get_all_langs = \App\language::all();
         //dd($lang);
        @$get_lang_id = $get_lang->first()->id;
        @$get_category_news = \App\category::where('lang_id','=',$get_lang_id)->get();
        @$get_category_TechicalAnalysis = \App\CategoriesTechicalAnalysis::where('lang_id','=',$get_lang_id)->get();

        @$get_MenuCategorys = \App\MenuCategory::where('lang_id','=',$get_lang_id)->get();

?>
<div class="header-top style2 ulockd-bgthm">
  <div class="container">
    <div class="row">
      <div class="col-md-4">
        <div class="welcm-ht">
        <ul class="list-inline footer-font-icon ulockd-mrgn1215 ulockd-mrgn60">
            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
            <li><a href="#"><i class="fa fa-skype"></i></a></li>
        </ul>
        </div>

      </div>


      <div class="col-md-4">
        <div class="welcm-ht text-cente ulockd-mrgn1215">
        <p class="color-white">Welcome To <strong> Smart Deal</strong> - Invest with  us  safely</p>
        </div>
      </div>
      <div class="col-md-4">
        <div class="welcm-ht text-right ulockd-mrgn1215">
        <ul class="list-inline">

          <?php if(!Auth::check()): ?>


          <li>
            <a class="color-white"  id="myModal" href="#" data-toggle="modal" data-target=".bs-example-modal-md" data-whatever="@mdo"><i class="fa fa-user color-white"></i> Sign In</a>
                <div class="modal fade bs-example-modal-md" tabindex="-1" role="dialog">
                    <div class="modal-dialog modal-md" role="document">
                      <div class="modal-content">
                          <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            <h4 class="modal-title text-center">Login</h4>
                            <p class="text-center">Sign in and choose your service to have access to all our service.</p>
                          </div>
                          <div class="modal-body">
                            <div class="row">
                              <div class="col-sm-12 col-md-8 col-md-offset-2 text-center">
                                <form  id="login_form" method="POST" action="<?php echo e(route('login')); ?>"  >
                                <?php echo e(csrf_field()); ?>

                                  <h3><span class="flaticon-lock"></span> Login</h3>
                                  <p>Enter username and password to login:</p>
                                    <div class="form-group">
                                    <input type="email" name="email" class="form-control" id="email" placeholder="Email" required>
                                </div>
                                <div class="form-group">
                                    <input type="password" name="password" class="form-control" placeholder="Password" required>
                                </div>

                                <img src="<?php echo e(asset('assets/website/images/loading.gif')); ?>" alt="Loading" style="display:none"
                                               id="login_gif">
                                               <div class="userpro-input">
                                                 <p id="error_login"
                                                 style="color: #F00 ; display: none;"> Invalid Email or Password. </p>
                                               </div>

                                    <button type="button" id="login" class="btn btn-default ulockd-btn-thm2">Login to account</button>




                                </form>
                              </div>
                            </div>
                          </div>
                          <!-- modal footer start here-->
                      </div>
                    </div>
                </div>
          </li>
          <li>
            <a class="color-white" href="#"> | </a>
          </li>
          <li>
            <a class="color-white" href="#" data-toggle="modal" data-target=".bs-example-modal-lg" data-whatever="@mdo"><i class="fa fa-edit color-white"></i> Sign Up</a>
                <div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog">
                    <div class="modal-dialog modal-lg" role="document">
                      <div class="modal-content">
                          <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            <h4 class="modal-title text-center" id="exampleModalLabel">Register</h4>
                            <p class="text-center">Sign in and choose your service to have access to all our service.</p>
                          </div>
                          <div class="modal-body">
                            <div class="row">
                              <div class="col-sm-12 col-md-8 col-md-offset-2">
                                <form  method="POST" enctype="multipart/form-data"  id="register_form"   action="javascript:void(0)" class="ulockd-reg-form text-center row">
                                 <?php echo e(csrf_field()); ?>


                                  <h3> <span class="flaticon-house-key"></span> Register</h3>
                                  <p>Join our community today:</p>
                              <div class="col-md-12">
                                      <div class="form-group">
                                      <input type="text" name="name" class="form-control" id="exampleInputNamexa" placeholder="First Name">
                                  </div>
                              </div>
                              <div class="col-md-12">
                                      <div class="form-group">
                                      <input type="text" name="lastname"  class="form-control" id="exampleInputNamexb" placeholder="Last Name">
                                  </div>
                              </div>
                              <div class="col-md-12">
                                      <div class="form-group">
                                      <input type="email"  name="email" class="form-control" id="exampleInputEmailx" placeholder="Email">
                                  </div>
                              </div>


                              <div class="col-md-12">
                                      <div class="form-group">
                                      <input type="number"  name="phone" class="form-control" id="exampleInputEmailx" placeholder="phone">
                                  </div>
                              </div>


                               <input type="file" name="image" placeholder="Choose image" id="image">





               <label for="category" class="col-sm-4 control-label">Type</label>
               <div class="col-sm-4">
                   <select name="type" id="category" class="select2 form-control" >

                               <option value="1">vistor</option>
                               <option value="2">editor</option>
                               <option value="3">economy analysis</option>

                   </select>

              </div>


                              <div class="col-md-12">
                                  <div class="form-group">
                                      <input type="password" name="password" class="form-control" placeholder="Password">
                                  </div>
                              </div>
                              <div class="col-md-12">
                                  <div class="form-group">
                                      <input type="password" name="password_confirmation" class="form-control" placeholder="Repeat password">
                                  </div>
                              </div>
                              <div class="col-md-12">
                                  <div class="form-group text-center">
                                        <button  id="register" type="submit" class="btn btn-default ulockd-btn-thm2">Sign Me Up</button>
                                  </div>
                              </div>
                              <!-- <div class="col-xxs-12 col-xs-5 col-sm-5 col-md-5">
                                <a href="#" class="btn btn-lg btn-primary btn-block color-white">Facebook</a>
                              </div>
                              <div class="col-xxs-12 col-xs-2 col-sm-2 col-md-2">
                                <a href="#">OR</a>
                              </div>
                              <div class="col-xxs-12 col-xs-5 col-sm-5 col-md-5">
                                <a href="#" class="btn btn-lg btn-info btn-block color-white">Google</a>
                              </div> -->
                                </form>
                              </div>
                            </div>
                          </div>
                          <!-- modal footer start here-->
                      </div>
                    </div>
                </div>
          </li>






          <?php else: ?>
          <div class="welcm-ht text-right ulockd-mrgn1215">
          <ul class="list-inline">
            <li>
              <div class="dropdown profile-button text-center">
                <button class="dropbtn color-white"><i class="fa fa-globe"></i> welcome: <?php echo e(Auth::user()->name); ?></button>
                <div class="dropdown-content">
                  <a href="<?php echo e(url('user/logout')); ?>"> <span></span> Logout</a>

                </div>
              </div>


          <?php endif; ?>






        </ul>
        </div>
      </div>






    </div>
  </div>
</div>

<!-- Header Middle -->
<div class="header-middle">
<div class="container">
  <div class="row">
    <div class="col-md-3 col-lg-5">
        <div class="welcm-ht">
        <a href="<?php echo e(url('/')); ?>" class="ulockd-main-logo"><img src="<?php echo e(asset('assets/website/images/header-logo2.png')); ?>" alt="header-logo2.png"></a>
        </div>
    </div>
    <div class="col-md-9 col-lg-7 ulockd-pad390">
      <ul class="list-inline tac-smd ulockd-mrgn60 pull-right fn-smd">
        <li>
          <div class="ulockd-ohour-info tac-smd mb30-xxsd">
            <div class="ulockd-icon pull-left fn-smd text-thm2"><span class="fa fa-clock-o"></span></div>
            <div class="ulockd-info">
              <p class="ulockd-addrss"><strong>Official Schedule</strong> <br> 9:00AM-5:00PM</p>
            </div>
          </div>
        </li>
        <li>
          <div class="ulockd-ohour-info tac-smd mb30-xxsd">
            <div class="ulockd-icon pull-left fn-smd text-thm2"><span class="fa fa-envelope"></span></div>
            <div class="ulockd-info">
              <p class="ulockd-addrss"><strong>Mail Us</strong> <br> info@smart-deal24.com</p>
            </div>
          </div>
        </li>
        <li>
          <div class="ulockd-ohour-info tac-smd mb30-xxsd">
            <div class="ulockd-icon pull-left fn-smd text-thm2"><span class="fa fa-phone"></span></div>
            <div class="ulockd-info">
              <p class="ulockd-addrss"><strong>Call Us For Details</strong> <br> +201009236100</p>
            </div>
          </div>
        </li>
        <li>
          <!-- <div class="ulockd-ohour-info tac-smd mb30-xxsd">
            <div class="ulockd-icon pull-left fn-smd text-thm2"><span class="fa fa-map-signs"></span></div>
            <div class="ulockd-info">
              <p class="ulockd-addrss"><strong>Suite 300 Houston</strong> <br> Texas - 77042 USA</p>
            </div>
          </div> -->
        </li>
      </ul>
    </div>
  </div>
</div>
</div>

<!-- Header Styles -->
<header class="header-nav">
<div class="main-header-nav navbar-scrolltofixed">
  <div class="container">
      <nav class="navbar navbar-default bootsnav menu-style1">
          <div class="container ulockd-pdng0">
              <!-- Start Header Navigation -->
              <div class="navbar-header">
                  <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
                      <i class="fa fa-bars"></i>
                  </button>
              </div>
              <!-- End Header Navigation -->


              <!-- Collect the nav links, forms, and other content for toggling -->
              <div class="collapse navbar-collapse pad330-md" id="navbar-menu">
                  <ul class="nav navbar-nav navbar-left" data-in="fadeIn">
                      <li class="dropdown">
                          <a href="<?php echo e(url('/'.LaravelLocalization::setLocale())); ?>" ><?php echo e(__('website.home')); ?></a>










                      <li class="dropdown">
                          <a href="#" class="dropdown-toggle" data-toggle="dropdown"><?php echo e(__('website.news')); ?></a>
                              <ul class="dropdown-menu">
                                <?php $__currentLoopData = $get_category_news; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $get_category_new): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <li><a href="<?php echo e(url(LaravelLocalization::setLocale().'/news/'.$get_category_new->id)); ?>"><?php echo e($get_category_new->name); ?> </a></li>

                      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>




                              </ul>
                      </li>




                      <li class="dropdown">
                          <a href="#" class="dropdown-toggle" data-toggle="dropdown"><?php echo e(__('website.MarketAnalysis')); ?></a>
                              <ul class="dropdown-menu">
                      <?php $__currentLoopData = $get_category_TechicalAnalysis; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $get_category_TechicalAnalysi): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <li><a href="<?php echo e(url(LaravelLocalization::setLocale().'/TechicalAnalysis/'.$get_category_TechicalAnalysi->id)); ?>"><?php echo e($get_category_TechicalAnalysi->name); ?> </a></li>

                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>



                              </ul>
                      </li>







                      <li class="dropdown">
                          <a href="#" class="dropdown-toggle" data-toggle="dropdown"><?php echo e(__('website.live')); ?></a>
                          <ul class="dropdown-menu">

                            <li><a href="forex-news.html">Direction program </a></li>
                            <li><a href="forex-news.html">Learning</a></li>
                            <li><a href="forex-news.html">Ksa News</a></li>
                            <li><a href="forex-news.html">Egy Stocks </a></li>
                            <li><a href="forex-news.html">Cryptocurrency </a></li>


                              <li class="dropdown">

                    <li class="dropdown">
                      <a href="blog-grid-one.html">Technical Analysis</a>
                                          <ul class="dropdown-menu">
                        <li><a href="forex-news.html">Forex</a></li>
                        <li><a href="forex-news.html">Ksa Stocks</a></li>
                        <li><a href="forex-news.html">Egy Stocks</a></li>

                                          </ul>
                    </li>



                              </li>


                          </ul>
                      </li>



                      <li >
                          <a href="<?php echo e(url(LaravelLocalization::setLocale().'/service/')); ?>" class="dropdown-toggle" data-toggle="dropdown"><?php echo e(__('website.service')); ?> </a>
                              <!-- <ul class="dropdown-menu">
                    <li><a href="forex-news.html">Signal </a></li>
                    <li><a href="forex-news.html">Vps</a></li>





                              </ul> -->
                      </li>


                      <li class="dropdown">
                        <a href="#"><?php echo e(__('website.tools')); ?> </a>
                                            <ul class="dropdown-menu">
                                              <li><a href="<?php echo e(url('tools/chart')); ?>">Chart</a></li>
                                              <li><a href="<?php echo e(url('tools/Calendar')); ?>">Calendar</a></li>
                                              <li><a href="<?php echo e(url('tools/RiskManagement')); ?>">Risk Management</a></li>

                                            </ul>
                      </li>




                      <li class="dropdown">
                        <a href="#"><?php echo e(__('website.learn')); ?></a>
                                            <ul class="dropdown-menu">
                                                <?php $__currentLoopData = $get_MenuCategorys; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $get_MenuCategory): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                              <li><a href="<?php echo e(url(LaravelLocalization::setLocale().'/learn/'.$get_MenuCategory->id)); ?>"><?php echo e($get_MenuCategory->name); ?></a></li>

                                             <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            </ul>
                      </li>









                      <li>
                          <a href="<?php echo e(url(LaravelLocalization::setLocale().'/Articles/')); ?>" class="dropdown-toggle" data-toggle="dropdown"><?php echo e(__('website.articles')); ?> </a>
                              <!-- <ul class="dropdown-menu">
                    <li><a href="forex-news.html">Signal </a></li>
                    <li><a href="forex-news.html">Vps</a></li>





                              </ul> -->
                      </li>

                      <li>
                    <a class="dropdown-toggle" href="<?php echo e(url(LaravelLocalization::setLocale().'/team/')); ?>" data-toggle="modal" data-target=".bs-example-modal-lg" data-whatever="@mdo"><i class="fa fa-edit color-white"></i><?php echo e(__('website.team')); ?> </a>

                                                              </li>


                                                              <li>
                                                            <a class="dropdown-toggle" href="<?php echo e(url('contact')); ?>" data-toggle="modal" data-target=".bs-example-modal-lg" data-whatever="@mdo"><i class="fa fa-edit color-white"></i><?php echo e(__('website.contact')); ?></a>

                                                                                                      </li>




                  </ul>

              </div><!-- /.navbar-collapse -->



          </div>
      </nav>
  </div>
</div>
</header>
