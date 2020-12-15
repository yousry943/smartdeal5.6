<!DOCTYPE html>
<html dir="ltr" lang="en">

<!-- Mirrored from unlockdesizn.com/html/corporate/financepress/demo/blog-left-sidebar.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 08 Nov 2020 08:11:48 GMT -->
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<?php echo $__env->make('website.includes.css', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<!-- Title -->
<title>smart-deal24.com- <?php echo e($title); ?></title>
<!-- Favicon -->
<link href="images/favicon.ico" sizes="128x128" rel="shortcut icon" type="image/x-icon" />
<link href="images/favicon.ico" sizes="128x128" rel="shortcut icon" />

<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
<div class="wrapper">
	<div id="preloader" class="preloader">
		<div id="pre" class="preloader_container"><div class="preloader_disabler btn btn-default">Disable Preloader</div></div>
	</div>

<?php echo $__env->make('website.includes.header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
	<!-- Inner Pages Main Section -->
	<section class="ulockd-service-details">
		<div class="container">
			<div class="col-md-4 col-lg-3 ulockd-pdng0">
				<div class="widget-sidebar">
					<!-- <h3 class="title-widget-sidebar ulockd-bb-dashed">Custom Search field</h3> -->
		            <!-- <div id="custom-search-input">
		                <div class="input-group">
		                    <input type="text" class="form-control input-lg bdrs0" placeholder="Search..." />
		                    <span class="input-group-btn">
		                        <button class="btn btn-lg ulockd-btn-thm2" type="button">
		                            <i class="glyphicon glyphicon-search"></i>
		                        </button>
		                    </span>
		                </div>
		            </div> -->
					<div class="ulockd-all-service">
						<h3 class="title-widget-sidebar ulockd-bb-dashed"><span class="flaticon-command text-thm2"></span> All Courses</h3>





 <?php $__currentLoopData = $learns; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $learn): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
						<div class="list-group">



                <div class="last-post">
                    <button class="sw-accordion ulockd-bgthm"><?php echo e($learn->name); ?></button>
                  <div class="swa-panel">
										<?php $__currentLoopData = $learn->get_learn; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                      <li class="recent-post">

                       <a href="<?php echo e(url(LaravelLocalization::setLocale().'/Courses_Details/'.$row->id)); ?>" class="list-group-item"><?php echo e($row->title); ?></a>
                      </li>
									<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                  </div>


                </div>


						</div>

<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>














					</div>
	              	<!-- <h3 class="title-widget-sidebar ulockd-bb-dashed"><span class="flaticon-folder text-thm2"></span> Archives</h3> -->
	                <!-- <div class="last-post">
	                    <button class="sw-accordion ulockd-bgthm">21/4/2017</button>
	                    <div class="swa-panel">
	                    	<li class="recent-post">
	                    		<div class="post-img">
	                     			<img class="img-responsive" src="images/blog/1.jpg" alt="1.jpg">
	                        	</div>
	                    		<a href="#"><h6>Excepteur sint occaecat cupi non proident laborum.</h6></a>
	                    		<p><small><i class="fa fa-calendar" data-original-title="" title=""></i> 30 July 2017</small></p>
	                    	</li>
	                    	<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
	                    </div>
	                </div> -->
	                <!-- <hr> -->
	                <!-- <div class="last-post">
	                    <button class="sw-accordion ulockd-bgthm">5/7/2017</button>
	                	<div class="swa-panel">
	                    	<li class="recent-post">
	                    		<div class="post-img">
	                    			<img class="img-responsive" src="images/blog/2.jpg" alt="2.jpg">
	                    		</div>
	                       		<a href="#"><h6>Excepteur sint occaecat cupi non proident laborum.</h6></a>
	                    		<p><small><i class="fa fa-calendar" data-original-title="" title=""></i> 30 July 2017</small></p>
	                    	</li>
	                  		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
	                	</div>
	                </div> -->
	                <!-- <hr> -->
	                <!-- <div class="last-post">
	                    <button class="sw-accordion ulockd-bgthm">15/9/2017</button>
	                    <div class="swa-panel">
	                     	<li class="recent-post">
	                    		<div class="post-img">
	                    			<img class="img-responsive" src="images/blog/3.jpg" alt="3.jpg">
	                        	</div>
	                    		<a href="#"><h6>Excepteur sint occaecat cupi non proident laborum.</h6></a>
	                    		<p><small><i class="fa fa-calendar" data-original-title="" title=""></i> 30 July 2017</small></p>
	                    	</li>
	                  		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
	                    </div>
	                </div> -->
	                <!-- <hr> -->
	                <!-- <div class="last-post">
	                	<button class="sw-accordion ulockd-bgthm">2/3/2017</button>
	                	<div class="swa-panel">
	                    	<li class="recent-post">
	                        	<div class="post-img">
	                    			<img class="img-responsive" src="images/blog/4.jpg" alt="4.jpg">
	                        	</div>
	                        	<a href="#"><h6>Excepteur sint occaecat cupi non proident laborum.</h6></a>
	                        	<p><small><i class="fa fa-calendar" data-original-title="" title=""></i> 30 July 2017</small></p>
	                    	</li>
	                  		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
		                </div>
	                </div> -->
					<!-- <h3 class="title-widget-sidebar ulockd-bb-dashed"><span class="flaticon-straight-quotes text-thm2"></span> Testimonial</h3>
					<div class="ulockd-inr-testimonials">
						<p>pain was born and I will give you a complete accounf the system, and expound the actuteachings of the grea</p>
						<div class="ulockd-tm-client-details">
							<div class="ulockd-tm-name">
								<h4 class="text-thm1">Gary Watson - <small> Seo</small></h4>
							</div>
						</div>
					</div> -->
					<!-- <h3 class="title-widget-sidebar ulockd-bb-dashed"><span class="flaticon-calendar text-thm2"></span> Latest Post</h3> -->
					<div class="ulockd-lp">
						<div class="ulockd-latest-post">
							<!-- <div class="media">
							    <div class="media-left pull-left">
							    	<a href="#">
							      	    <img class="media-object thumbnail" src="images/testimonial/1.jpg" alt="1.jpg">
							    	</a>
							    </div>
							    <div class="media-body">
							    	<h4 class="media-heading">Ana Andreea</h4>
							    	I have constantly believed Bclinico  to take care of their patain <a href="#">more...</a>
							    	<strong><a href="#"> 20 Jan 2017 </a></strong>
							    </div>
							</div> -->
						</div>
						<!-- <div class="ulockd-latest-post">
							<div class="media">
							    <div class="media-left pull-left">
							    	<a href="#">
							      	    <img class="media-object thumbnail" src="images/testimonial/2.jpg" alt="2.jpg">
							    	</a>
							    </div>
							    <div class="media-body">
							    	<h4 class="media-heading">Simone Andreea</h4>
							    	I have constantly believed Bclinico  to take care of their patain <a href="#">more...</a>
							    	<strong><a href="#"> 20 Jan 2017 </a></strong>
							    </div>
							</div>
						</div> -->
						<!-- <div class="ulockd-latest-post">
							<div class="media">
							    <div class="media-left pull-left">
							    	<a href="#">
							      	    <img class="media-object thumbnail" src="images/testimonial/3.jpg" alt="3.jpg">
							    	</a>
							    </div>
							    <div class="media-body">
							    	<h4 class="media-heading">Devid Andreea</h4>
							    	I have constantly believed Mr Fix to take care of busines <a href="#">more...</a>
							    	<strong><a href="#"> 20 Jan 2017 </a></strong>
							    </div>
							</div>
						</div> -->
					</div>
					<!-- <div class="ulockd-ip-tag">
						<div class="ulockd-tag-list-title">
							<h3 class="title-widget-sidebar ulockd-bb-dashed"><span class="flaticon-mark text-thm2"></span> Tags List </h3>
						</div>
						<ul class="list-inline ulockd-tag-list-details">
							<li><a href="#">Photoshop</a></li>
							<li><a href="#">Design</a></li>
							<li><a href="#">Tutorial</a></li>
							<li><a href="#">Corses</a></li>
							<li><a href="#">Primum</a></li>
							<li><a href="#">Designtuto</a></li>
							<li><a href="#">Autocad</a></li>
							<li><a href="#">Development</a></li>
						</ul>
					</div> -->
					<!-- <div class="ulockd-ip-flickr">
						<div class="ulockd-flickr-list-title">
							<h3 class="title-widget-sidebar ulockd-bb-dashed"><span class="flaticon-flickr text-thm2"></span> Flickr Feed</h3>
							<div class="flickr-photo"></div>
						</div>
					</div> -->
					<!-- <div class="ulockd-ip-flickr">
						<div class="ulockd-flickr-list-title">
							<h3 class="title-widget-sidebar ulockd-bb-dashed"><span class="flaticon-instagram text-thm2"></span> Instagram Feed</h3>
							<div id="instafeed"></div>
						</div>
					</div> -->
				</div>
			</div>





			<div class="col-md-8 col-lg-9">
				<div class="row">
					<div class="col-md-12 ulockd-mrgn1210">
						<div class="ulockd-project-sm-thumb">
							<img class="img-responsive img-whp" style="height:400px;max-width:1000px;width:" src="<?php echo e(url('/uplodes/newsphoto/'.$learn_Details->first()->image)); ?>" alt="87/7/*7">
						</div>
					</div>
				</div>



				<div class="row">
					<div class="col-md-12 ulockd-mrgn1210">
						 <?php $__currentLoopData = $learn_Details; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $learn_Detail): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
						<article class="ulockd-pd-content">
							<div class="ulockd-bp-date">
								<ul class="list-inline">
									<li class="ulockd-bp-date-innner">On <a href="#"><span class="text-thm2">25</span> / Jun 2018</a></li>
									<li class="ulockd-bp-comment"><a href="#"><span class="flaticon-nurse-head text-thm1"></span> Ana D Cruse</a></li>
									<li class="ulockd-bp-comment"><a href="#"><span class="flaticon-chat text-thm1"></span> 05 Comment</a></li>
									<li class="ulockd-bp-comment"><a href="#"><span class="flaticon-black-check-box text-thm1"></span> Service</a></li>
								</ul>
							</div>
							<h3><?php echo e($learn_Detail->title); ?></h3>
							<p class="project-dp-one">

								<?php
				echo $learn_Detail->body;
				?>
							</p>
						</article>
						<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
					</div>



				</div>








				<!-- <div class="col-md-12 text-center">
					<nav aria-label="Page navigation navigation-lg">
					    <ul class="pagination">
					    	<li>
					        	<a href="#" aria-label="Previous">
					        		<span aria-hidden="true">PREV</span>
					        	</a>
					    	</li>
					    	<li class="active"><a href="#">1</a></li>
					    	<li><a href="#">2</a></li>
					    	<li><a href="#">3</a></li>
					    	<li><a href="#">4</a></li>
					    	<li><a href="#">5</a></li>
					    	<li>
					        	<a href="#" aria-label="Next">
					        		<span aria-hidden="true">NEXT</span>
					        	</a>
					    	</li>
					    </ul>
					</nav>
				</div> -->
				</div>
			</div>
		</div>
	</section>

	<!-- Our Partner -->
	<section class="parallax ulockd_bgi4 bgc-overlay-white75 ulockd-pad650" data-stellar-background-ratio="0.3">
		<div class="container">
			<div class="row">
				<div class="col-xs-6 col-sm-4 col-md-2"><div class="ulockd-divider-thumb text-center"><img class="img-responsive" src="images/partners/1.png" alt="1.png"></div></div>
				<div class="col-xs-6 col-sm-4 col-md-2"><div class="ulockd-divider-thumb text-center"><img class="img-responsive" src="images/partners/2.png" alt="2.png"></div></div>
				<div class="col-xs-6 col-sm-4 col-md-2"><div class="ulockd-divider-thumb text-center"><img class="img-responsive" src="images/partners/3.png" alt="3.png"></div></div>
				<div class="col-xs-6 col-sm-4 col-md-2"><div class="ulockd-divider-thumb text-center"><img class="img-responsive" src="images/partners/4.png" alt="4.png"></div></div>
				<div class="col-xs-6 col-sm-4 col-md-2"><div class="ulockd-divider-thumb text-center"><img class="img-responsive" src="images/partners/5.png" alt="5.png"></div></div>
				<div class="col-xs-6 col-sm-4 col-md-2"><div class="ulockd-divider-thumb text-center"><img class="img-responsive" src="images/partners/6.png" alt="6.png"></div></div>
			</div>
		</div>
	</section>

	<!-- Our Footer -->
	<section class="ulockd-footer ulockd-pdng0">
		<div class="container footer-padding">
			<div class="row">
				<div class="col-xxs-12 col-xs-6 col-sm-4 col-md-4">
					<div class="logo-widget tac-xxsd">
						<img src="images/footer-logo.png" alt="footer-logo.png">
					</div>
				</div>
				<div class="col-xxs-12 col-xs-6 col-sm-4 col-md-4">
					<div class="font-icon-social text-center">
						<ul class="list-inline footer-font-icon">
							<li><a href="#"><i class="fa fa-facebook"></i></a></li>
							<li><a href="#"><i class="fa fa-feed"></i></a></li>
							<li><a href="#"><i class="fa fa-google"></i></a></li>
							<li><a href="#"><i class="fa fa-pinterest"></i></a></li>
							<li><a href="#"><i class="fa fa-instagram"></i></a></li>
						</ul>
					</div>
				</div>
				<div class="col-xs-12 col-sm-4 col-md-4">
					<div class="payment-card tac-xsd">
						<img class="pull-right fn-xsd" src="images/resource/payment.png" alt="payment.png">
					</div>
				</div>
			</div>
			<hr>
			<div class="row">
				<div class="col-xxs-12 col-xs-6 col-sm-6 col-md-3">
					<div class="widget-about">
						<h3>About Us</h3>
						<p>Regardless of whether you need to stay in your own house, are searching for help with a more established relative, looking for exhortation on paying for development, we can help you.</p>
						<p>Doloribus, placeat, minima. Harum voluptatibus quae tempora est, cupiditate culpa, molestiae, illo beatae reiciendis, nisi sit dolores.</p>
					</div>
    				<div class="ulockd-footer-newsletter">
    					<h3 class="title">News Letter</h3>
		                <form class="ulockd-mailchimp">
		                    <div class="input-group">
			                    <input type="email" class="form-control input-md" placeholder="Your email" name="EMAIL" value="">
			                    <span class="input-group-btn">
			                        <button type="submit" class="btn btn-md"><i class="icon flaticon-right-arrow"></i></button>
			                    </span>
		                    </div>
		                </form>
    				</div>
				</div>
				<div class="col-xxs-12 col-xs-6 col-sm-6 col-md-3">
					<div class="twitter-widget">
						<h3>Twitter Feed</h3>
						<div class="twitter"></div>
					</div>
				</div>
				<div class="col-xxs-12 col-xs-6 col-sm-6 col-md-3">
					<div class="news-widget">
						<h3>Latest News</h3>
						<div class="ulockd-media-box">
							<div class="media">
							    <div class="media-left pull-left">
								    <a href="#">
								    	<img class="media-object" src="images/blog/s1.jpg" alt="s1.jpg">
								    </a>
							    </div>
							    <div class="media-body">
							    	<h4 class="media-heading">Let's Move With Blog </h4>
									<a href="#" class="post-date">21 January, 2018</a>
							    	<p>Lorem ipsum dolor sit amet, consectetur...</p>
							    </div>
							</div>
							<div class="media">
							    <div class="media-left pull-left">
								    <a href="#">
								    	<img class="media-object" src="images/blog/s2.jpg" alt="s2.jpg">
								    </a>
							    </div>
							  	<div class="media-body">
							    	<h4 class="media-heading">Let's Move With Blog </h4>
									<a href="#" class="post-date">21 January, 2018</a>
							    	<p>Lorem ipsum dolor sit amet, consectetur...</p>
							  	</div>
							</div>
						</div>
					</div>
					<div class="tag-widget">
						<h3>Tag Widget</h3>
						<ul class="list-inline">
							<li><a href="#">Bclinico</a></li>
							<li><a href="#">bMax</a></li>
							<li><a href="#">Comfort Home</a></li>
							<li><a href="#">Be aHand</a></li>
							<li><a href="#">Be Finance</a></li>
							<li><a href="#">GreenPlats</a></li>
							<li><a href="#">eHospital</a></li>
							<li><a href="#">MrFix</a></li>
							<li><a href="#">Couple Heart</a></li>
						</ul>
					</div>
				</div>
				<div class="col-xxs-12 col-xs-6 col-sm-6 col-md-3">
					<div class="link-widget">
						<h3>Important Link</h3>
						<ul class="list-style-square">
							<li><a href="#"> About Licences</a></li>
							<li><a href="#"> Carrers</a></li>
							<li><a href="#"> Community & Forum</a></li>
							<li><a href="#"> Help & Conditions</a></li>
							<li><a href="#"> Privacy Policy</a></li>
							<li><a href="#"> Terms & Conditions</a></li>
						</ul>
					</div>
					<div class="flickr-widget">
						<h3>Recent Work</h3>
						<ul class="list-inline">
							<li>
								<div class="thumb">
									<img alt="flckr1.jpg" src="images/gallery/flckr1.jpg" class="img-responsive img-whp">
									<div class="overlay">
										<span class="flaticon-add"></span>
									</div>
								</div>
							</li>
							<li>
								<div class="thumb">
									<img alt="" src="images/gallery/flckr2.jpg" class="img-responsive img-whp">
									<div class="overlay">
										<span class="flaticon-add"></span>
									</div>
								</div>
							</li>
							<li>
								<div class="thumb">
									<img alt="" src="images/gallery/flckr3.jpg" class="img-responsive img-whp">
									<div class="overlay">
										<span class="flaticon-add"></span>
									</div>
								</div>
							</li>
							<li>
								<div class="thumb">
									<img alt="" src="images/gallery/flckr4.jpg" class="img-responsive img-whp">
									<div class="overlay">
										<span class="flaticon-add"></span>
									</div>
								</div>
							</li>
							<li>
								<div class="thumb">
									<img alt="" src="images/gallery/flckr5.jpg" class="img-responsive img-whp">
									<div class="overlay">
										<span class="flaticon-add"></span>
									</div>
								</div>
							</li>
							<li>
								<div class="thumb">
									<img alt="" src="images/gallery/flckr6.jpg" class="img-responsive img-whp">
									<div class="overlay">
										<span class="flaticon-add"></span>
									</div>
								</div>
							</li>
						</ul>
					</div>
				</div>
			</div>
			<hr>
			<div class="row">
				<div class="col-xxs-12 col-xs-4 col-sm-4 col-md-4">
					<div class="mail-widget text-center">
						<span class="icon fa fa-envelope"></span>
						<h3>Mail Us</h3>
						<p>dummy@yourmail.com</p>
					</div>
				</div>
				<div class="col-xxs-12 col-xs-4 col-sm-4 col-md-4">
					<div class="call-widget text-center">
						<span class="icon fa fa-phone"></span>
						<h3>Call Us</h3>
						<p>+98-9875-5968-54</p>
					</div>
				</div>
				<div class="col-xxs-12 col-xs-4 col-sm-4 col-md-4">
					<div class="location-widget text-center">
						<span class="icon fa fa-map-signs"></span>
						<h3>Find Us</h3>
						<p>Victoria 8007 Australia Anvento HQ 121 King Street, Melbourne.</p>
					</div>
				</div>
			</div>
			<hr class="ulockd-mrgn60">
		</div>
		<div class="ulockd-copy-right">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<p class="color-white">FinancePress Copyright© 2018. All right reserved.</p>
					</div>
				</div>
			</div>
		</div>
	</section>

<a class="scrollToHome ulockd-bgthm" href="#"><i class="fa fa-home"></i></a>
</div>
<!-- Wrapper End -->
<?php echo $__env->make('website.includes.js', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

</body>

</html>
