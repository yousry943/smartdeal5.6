
<!DOCTYPE html>
<html dir="ltr" lang="en">

<!-- Mirrored from unlockdesizn.com/html/corporate/financepress/demo/ulockd-background-video-home.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 08 Nov 2020 08:05:11 GMT -->
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- css file -->


<!-- <link rel="stylesheet" href="css/bootstrap-rtl.min.css"> -->
<?php echo $__env->make('website.includes.css', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<!-- Title -->
<title>Smart-deal24</title>
<!-- Favicon -->
<link href="images/favicon.ico" sizes="128x128" rel="shortcut icon" type="image/x-icon" />
<link href="images/favicon.ico" sizes="128x128" rel="shortcut icon" />

<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

		<style type="text/css">
		.open-top-left{
			position: fixed;
			margin-left: 30px;
			margin-top: 30px;
			top: 0;
			left: 0;
		}

		.open-top-right{
			position: fixed;
			margin-right: 30px;
			margin-top: 30px;
			top: 0;
			right: 0;
		}

		.open-bottom-left{
			position: fixed;
			margin-left: 30px;
			margin-bottom: 30px;
			left: 0;
			bottom: 0;
		}

		.open-bottom-right{
			position: fixed;
			margin-right: 30px;
			margin-bottom: 30px;
			right: 0;
			bottom: 0;
		}

		.form-top-left{
			position: fixed;
			width: 18rem;
			margin-left: 30px;
			margin-top: 30px;
			top: 0;
			left: 0;
		}

		.form-top-right{
			position: fixed;
			width: 18rem;
			margin-right: 30px;
			margin-top: 30px;
			top: 0;
			right: 0;
		}

		.form-bottom-left{
			position: fixed;
			width: 18rem;
			margin-left: 30px;
			margin-bottom: 30px;
			bottom: 0;
			left: 0;
		}

		.form-bottom-right{
			position: fixed;
			width: 18rem;
			margin-right: 30px;
			margin-bottom: 30px;
			bottom: 0;
			right: 0;
		}
		</style>
</head>
<body>




<?php echo $__env->make('website.includes.header2', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

















	<?php if(\Mcamara\LaravelLocalization\Facades\LaravelLocalization::getCurrentLocale()=='ar'): ?>
	<!-- Home Design -->
	<div class="ulockd-home-slider triangles">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-12 ulockd-pmz">
					<div class="main-slider2">

							<?php $__currentLoopData = $get_sliders; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $slider): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
						<div class="item">
							<div class="mslider-caption text-left">
								<div class="mslider-details">
									<div class="slider-text1 color-white"><?php echo e($slider->title); ?></div>
									<div class="slider-text2"><?php echo e($slider->description); ?></span></div>
									<button class="btn btn-lg ulockd-btn-thm2 ulockd-mrgn1225">Learn More</button>
									<button class="btn btn-lg ulockd-btn-white ulockd-mrgn1225">Get a Quote</button>
								</div>
							</div>

							<img class="img-responsive img-whp" src="<?php echo e(url('/uplodes/newsphoto/'.$slider->image)); ?>" alt="h3.jpg">
						</div>
						<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>




					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Our About -->
	<section class="ulockd-about ulockd-pad12650">
		<div class="container">
			<div class="row">
				<div class="col-md-4">
					<div class="about-box">
						<h2 class="ulockd-mrgn120 title-bottom"> <?php echo e($get_note->first()->name); ?></h2>

						<p class="lead"><?php echo e($get_note->first()->title); ?></p>
						<p><?php echo e($get_note->first()->description); ?></p>
						<img class="img-responsive h100" src="images/resource/signeture.png" alt="signeture.png">
					</div>
				</div>
				<div class="col-md-8">
					<div class="row">
						<div class="col-md-12">
							<div class="three-grid-slider">

								<?php $__currentLoopData = $get_storys; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $get_story): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
								<div class="item">
									<div class="about-box2 text-center">
										<div class="ab-thumb">
											<img class="img-responsive img-whp" src="<?php echo e(url('/uplodes/newsphoto/'.@$get_story->image)); ?>" alt="s1.jpg">
											<div class="about-icon text-center"><i class="flaticon-classroom text-thm2"></i></div>
										</div>
										<div class="ab-details">
											<h4 class="fwb"><?php echo e($get_story->name); ?></h4>
											<a class="tdu" href="#">Read More</a>
										</div>
									</div>
								</div>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>








							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

<?php else: ?>































	<!--Video Section-->
	<section class="content-section video-section ulockd-pdng0">
		<div class="pattern-overlay">
			<a id="bgndVideo" class="player" data-property="{videoURL:'https://www.youtube.com/watch?v=w0RGnXpf9LU',containment:'.video-section', quality:'large', autoPlay:true, mute:true, opacity:1}">bg</a>
		    <div class="container">
		    	<div class="row">
			        <div class="col-md-12 text-center">
				        <h1 class="color-white" style="color: white;">Invest with us safely</h1>
				        <h3 class="color-white" style="color: white;">Be  Smart  Be Safe </h3>
				    </div>
		    	</div>
		    </div>
		</div>
	</section>
	<!--Video Section Ends Here-->

	<!-- Our About -->
	<section class="ulockd-about ulockd-pad12650">
		<div class="container">
			<div class="row">
				<div class="col-md-4">
					<div class="about-box">
						<h2 class="ulockd-mrgn120 title-bottom"> <?php echo e($get_note->first()->name); ?></h2>
						<p class="lead"><?php echo e($get_note->first()->title); ?></p>
						<p><?php echo e($get_note->first()->description); ?></p>

						<!-- <strong>CEO: Arnold Palmer</strong> -->
						<img class="img-responsive h100" src="images/resource/signeture.png" alt="signeture.png">
					</div>
				</div>
				<div class="col-md-8">
					<div class="row ulockd-mrgn12-150">


				<?php $__currentLoopData = $get_storys; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $get_story): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
						<div class="col-xxs-12 col-xs-6 col-sm-6 col-md-4 ulockd-pad395">
							<div class="about-box2 text-center">
								<div class="ab-thumb">
									<img class="img-responsive img-whp" src="<?php echo e(url('/uplodes/newsphoto/'.@$get_story->image)); ?>" alt="s1.jpg">
									<div class="about-icon text-center"><i class="flaticon-businessmen-having-a-group-conference text-thm2"></i></div>
								</div>
								<div class="ab-details">
									<h4 class="fwb"><?php echo e($get_story->name); ?></h4>
									<p><?php echo e($get_story->description); ?></p>
									<button class="btn btn-md ulockd-btn-thm2">Learn More </button>
								</div>
							</div>
						</div>
	<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>






					</div>
				</div>
			</div>
			<div class="row ulockd-mrgn1240">
				<!-- <div class="col-xxs-12 col-xs-6 col-sm-6 col-md-3">
					<div class="icon_box text-left tac-smd">
						<div class="icon pull-left fn-smd"><span class="pe-7s-users text-thm2"></span></div>
						<div class="ib_details">
							<h3>Happy Clients</h3>
	                        <ul class="list-inline">
	                        	<li><div class="timer">100</div></li>
	                        	<li>%</li>
	                        </ul>
						</div>
					</div>
				</div> -->
				<!-- <div class="col-xxs-12 col-xs-6 col-sm-6 col-md-3">
					<div class="icon_box text-left tac-smd">
						<div class="icon pull-left fn-smd"><span class="pe-7s-cup text-thm2"></span></div>
						<div class="ib_details">
							<h3>Award Wining</h3>
	                        <ul class="list-inline">
	                        	<li><div class="timer">750</div></li>
	                        	<li>+</li>
	                        </ul>
						</div>
					</div>
				</div> -->
				<!-- <div class="col-xxs-12 col-xs-6 col-sm-6 col-md-3">
					<div class="icon_box text-left tac-smd">
						<div class="icon pull-left fn-smd"><span class="pe-7s-help2 text-thm2"></span></div>
						<div class="ib_details">
							<h3>Case Fixed</h3>
	                        <ul class="list-inline">
	                        	<li><div class="timer">1700</div></li>
	                        	<li>+</li>
	                        </ul>
						</div>
					</div>
				</div> -->
				<!-- <div class="col-xxs-12 col-xs-6 col-sm-6 col-md-3">
					<div class="icon_box text-left tac-smd">
						<div class="icon pull-left fn-smd"><span class="pe-7s-add-user text-thm2"></span></div>
						<div class="ib_details">
							<h3>Active Experts</h3>
	                        <ul class="list-inline">
	                        	<li><div class="timer">2100</div></li>
	                        	<li>+</li>
	                        </ul>
						</div>
					</div>
				</div> -->
			</div>
		</div>
		<!-- TradingView Widget BEGIN -->
		<div class="tradingview-widget-container">
			<div class="tradingview-widget-container__widget"></div>
			<script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-ticker-tape.js" async>
			{
			"symbols": [
				{
					"proName": "FOREXCOM:SPXUSD",
					"title": "S&P 500"
				},
				{
					"proName": "FOREXCOM:NSXUSD",
					"title": "Nasdaq 100"
				},
				{
					"proName": "FX_IDC:EURUSD",
					"title": "EUR/USD"
				},
				{
					"proName": "BITSTAMP:BTCUSD",
					"title": "BTC/USD"
				},
				{
					"proName": "BITSTAMP:ETHUSD",
					"title": "ETH/USD"
				}
			],
			"showSymbolLogo": true,
			"colorTheme": "light",
			"isTransparent": false,
			"displayMode": "adaptive",
			"locale": "en"
		}
			</script>
		</div>
		<!-- TradingView Widget END -->
	</section>

	<?php endif; ?>









	<!-- Our Blog -->
	<section class="ulockd-blog ulockd_bgp1">
		<div class="container">
			<div class="row">
				<div class="col-md-6 col-md-offset-3 text-center">
					<div class="ulockd-main-title">
						<h2><?php echo e(__('website.OurNews')); ?> </h2>
						<p><?php echo e(__('website.latterOurNews')); ?> </p>
					</div>
				</div>
			</div>



			<div class="row">
				<div class="col-xxs-12 col-xs-12 col-sm-12 col-md-12">

					<div class="three-grid-slider">


<?php $__currentLoopData = $get_news; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $get_new): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
						<div class="item">
							<article class="blog_post2 text-left">
			                    <div class="post_review">
			                    	<img class="img-responsive img-whp" src="<?php echo e(url('/uplodes/newsphoto/'.@$get_new->image)); ?>" alt="3.jpg">

			                        <h4 class="post_title"><a target="_blank"  href="<?php echo e(url(LaravelLocalization::setLocale().'/Forex_Details/'.$get_new->id)); ?>"><?php echo e(Str::limit($get_new->title, 80)); ?> </a></h4>
			                        <ul class="post_comment list-inline">
			                            <li>By<a href="#"> <i class="fa fa-user"></i></a></li>
			                            <li>35<a href="#"> comment</a></li>
			                        </ul>
			                    </div>
			                </article>
						</div>
		<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


					</div>



		        </div>

			</div>




		</div>
	</section>








			<!-- Our Calender -->
			<section class="ulockd-testimonial ulockd-bgthm" style="background-color: #f9fafb;" >


				<div class="container">

					<div class="row">





						<div class="ulockd-home-slider">
							<div class="container">
								<div class="row">


									<div class="col-md-6 col-md-offset-3 text-center">
										<div class="ulockd-main-title">



											<h2 class="color-white"> <?php echo e(__('website.AnalystOpinions')); ?> </h2>
											<p class="color-white"><?php echo e(__('website.latterOurTraders')); ?> </p>




										</div>
									</div>


									<!-- <div class="row">
										<div class="col-md-6 col-md-offset-3 text-center">
											<div class="ulockd-main-title">
												<h2 class="color-white"> <?php echo e(__('website.OurTraders')); ?> </h2>
												<p class="color-white"><?php echo e(__('website.latterOurTraders')); ?> </p>
											</div>
										</div>
									</div>
									 -->

								    <div id="custom_carousel" class="carousel slide" data-ride="carousel" data-interval="2500">
								        <!-- Wrapper for slides -->
								        <div class="carousel-inner">




<?php $__currentLoopData = $get_ourTraders_have_techical_analyses; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $get_ourTraders_have_techical_analyse): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>




<?php if($get_ourTraders_have_techical_analyse->id ==$get_ourTraders_have_techical_analyses_active): ?>
<div class="item active">
<?php else: ?>
 <div class="item ">

	<?php endif; ?>

								                <div class="container-fluid">
								                    <div class="row">
								                        <div class="col-md-4"><img class="img-responsive" src="<?php echo e(url('/uplodes/newsphoto/'.@$get_ourTraders_have_techical_analyse->image)); ?>" alt="sh2.png"></div>
								                        <div class="col-md-7">
																					<a href="<?php echo e(url(LaravelLocalization::setLocale().'/our/Traders/Details/data/'.$get_ourTraders_have_techical_analyse->id)); ?>" >
								                            <h2><?php echo e($get_ourTraders_have_techical_analyse->title); ?></h2>
								                            <p><?php echo e($get_ourTraders_have_techical_analyse->description); ?></p>
																						</a>
								                        </div>
								                    </div>
								                </div>
								            </div>
						<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


								        <!-- End Item -->
								        </div>
								        <!-- End Carousel Inner -->
								        <div class="controls">
								            <ul class="nav">

															<?php $__currentLoopData = $get_ourTraders_have_techical_analyses; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $get_ourTraders_have_techical_analyse): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
																															 <li data-target="#custom_carousel" data-slide-to="0"><a href="#"><img style="height:20px;width:20px;"  src="<?php echo e(url('/uplodes/newsphoto/'.@$get_ourTraders_have_techical_analyse->image)); ?>"><small><?php echo e($get_ourTraders_have_techical_analyse->title); ?></small></a></li>

															 <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
								            </ul>
								        </div>
								    </div>
								    <!-- End Carousel -->
								</div>
							</div>
						</div>


					</div>
				</div>
			</section>







	<!-- Our Blog -->
	<section class="ulockd-blog bgc-snowshade2 triangle">
		<div class="container">
			<div class="row">
				<div class="col-md-6 col-md-offset-3 text-center">
					<div class="ulockd-main-title">
						<h2><?php echo e(__('website.live')); ?></h2>
						<p><?php echo e(__('website.latterlive')); ?></p>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-xxs-12 col-xs-6 col-sm-6 col-md-8">
					<div class="two-grid-slider">
						<div class="item">
							<article class="blog_post2 text-left">
			                    <div class="post_review">
			                    	<img class="img-responsive img-whp" src="<?php echo e(asset('assets/website/images/blog/1.jpg')); ?>" alt="1.jpg">
			                        <div class="post_date ulockd-bgthm">12 <small>feb</small></div>
			                        <h4 class="post_title"><a href="https://www.facebook.com/Smart-Deal-109928967370676/videos/678276629780944/">Lorem ipsum dolor sit amet, consectetur</a></h4>
			                        <ul class="post_comment list-inline">
			                            <li>By<a href="#"> <i class="fa fa-user"></i></a></li>
			                            <li>35<a href="#"> comment</a></li>
			                        </ul>
			                    </div>
			                </article>
						</div>
						<div class="item">
							<article class="blog_post2 text-left">
			                    <div class="post_review">
			                    	<img class="img-responsive img-whp" src="<?php echo e(asset('assets/website/images/blog/2.jpg')); ?>" alt="2.jpg">
			                        <div class="post_date ulockd-bgthm">12 <small>feb</small></div>
			                        <h4 class="post_title"><a href="https://www.facebook.com/Smart-Deal-109928967370676/videos/678276629780944/">Lorem ipsum dolor sit amet, consectetur</a></h4>
			                        <ul class="post_comment list-inline">
			                            <li>By<a href="#"> <i class="fa fa-user"></i></a></li>
			                            <li>35<a href="#"> comment</a></li>
			                        </ul>
			                    </div>
			                </article>
						</div>
						<div class="item">
							<article class="blog_post2 text-left">
			                    <div class="post_review">
			                    	<img class="img-responsive img-whp" src="<?php echo e(asset('assets/website/images/blog/3.jpg')); ?>" alt="3.jpg">
			                        <div class="post_date ulockd-bgthm">12 <small>feb</small></div>
			                        <h4 class="post_title"><a href="https://www.facebook.com/Smart-Deal-109928967370676/videos/678276629780944/">Lorem ipsum dolor sit amet, consectetur</a></h4>
			                        <ul class="post_comment list-inline">
			                            <li>By<a href="#"> <i class="fa fa-user"></i></a></li>
			                            <li>35<a href="#"> comment</a></li>
			                        </ul>
			                    </div>
			                </article>
						</div>
					</div>
		        </div>
				<div class="col-md-4">
					<article class="blog_post2">
	                    <div class="post_review">
	                        <div class="post_date ulockd-bgthm">12 <small>feb</small></div>
	                        <h4 class="post_title"><a href="#">Lorem ipsum dolor sit amet, consectetur</a></h4>
	                        <ul class="post_comment list-inline">
	                            <li>By<a href="#"> <i class="fa fa-user"></i></a></li>
	                            <li>35<a href="#"> comment</a></li>
	                        </ul>
	                    </div>
	                </article>
					<article class="blog_post2 ulockd-mrgn1220">
	                    <div class="post_review">
	                        <div class="post_date ulockd-bgthm">12 <small>feb</small></div>
	                        <h4 class="post_title"><a href="#">Lorem ipsum dolor sit amet, consectetur</a></h4>
	                        <ul class="post_comment list-inline">
	                            <li>By<a href="#"> <i class="fa fa-user"></i></a></li>
	                            <li>35<a href="#"> comment</a></li>
	                        </ul>
	                    </div>
	                </article>
					<article class="blog_post2 ulockd-mrgn1220">
	                    <div class="post_review">
	                        <div class="post_date ulockd-bgthm">12 <small>feb</small></div>
	                        <h4 class="post_title"><a href="#">Lorem ipsum dolor sit amet, consectetur</a></h4>
	                        <ul class="post_comment list-inline">
	                            <li>By<a href="#"> <i class="fa fa-user"></i></a></li>
	                            <li>35<a href="#"> comment</a></li>
	                        </ul>
	                    </div>
	                </article>
				</div>
			</div>
		</div>
	</section>














	<!-- Our Service -->
	<!-- <section id="service" class="our-service ulockd_bgp5">
		<div class="container">
			<div class="row">
				<div class="col-md-6 col-md-offset-3 text-center">
					<div class="ulockd-main-title">
						<h2>Our Services</h2>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorem labore voluptates consequuntur velit maiores fugiat eaque.</p>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-xxs-12 col-xs-6 col-sm-4 col-md-4">
					<div class="service_box">
		                <div class="icon text-thm2"><span class="flaticon-save-money-in-moneybox"></span></div>
		                <h3 class="title">Saving Solution</h3>
		                <div class="details">
		                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deleniti eaque excepturi.</p>
		                </div>
		            </div>
				</div>
				<div class="col-xxs-12 col-xs-6 col-sm-4 col-md-4">
					<div class="service_box">
		                <div class="icon text-thm2"><span class="flaticon-coins"></span></div>
		                <h3 class="title">Fixed Deposite</h3>
		                <div class="details">
		                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deleniti eaque excepturi.</p>
		                </div>
		            </div>
				</div>
				<div class="col-xxs-12 col-xs-6 col-sm-4 col-md-4">
					<div class="service_box">
		                <div class="icon text-thm2"><span class="flaticon-people"></span></div>
		                <h3 class="title">Expert Advisor</h3>
		                <div class="details">
		                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deleniti eaque excepturi.</p>
		                </div>
		            </div>
				</div>
				<div class="col-xxs-12 col-xs-6 col-sm-4 col-md-4">
					<div class="service_box ulockd-mrgn1250">
		                <div class="icon text-thm2"><span class="flaticon-business-3"></span></div>
		                <h3 class="title">Education Loan</h3>
		                <div class="details">
		                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deleniti eaque excepturi.</p>
		                </div>
		            </div>
				</div>
				<div class="col-xxs-12 col-xs-6 col-sm-4 col-md-4">
					<div class="service_box ulockd-mrgn1250">
		                <div class="icon text-thm2"><span class="flaticon-meeting-3"></span></div>
		                <h3 class="title">Business Loan</h3>
		                <div class="details">
		                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deleniti eaque excepturi.</p>
		                </div>
		            </div>
				</div>
				<div class="col-xxs-12 col-xs-6 col-sm-4 col-md-4">
					<div class="service_box ulockd-mrgn1250">
		                <div class="icon text-thm2"><span class="flaticon-market"></span></div>
		                <h3 class="title">Market Research</h3>
		                <div class="details">
		                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deleniti eaque excepturi.</p>
		                </div>
		            </div>
				</div>
			</div>
		</div>
	</section> -->






















	<!-- Our econmiest  opinion -->
	<!-- <section class="ulockd-testimonial ulockd-bgthm" style="background-color: #f9fafb;" >
		<div class="container">
			<div class="row">
				<div class="col-md-6 col-md-offset-3 text-center">
					<div class="ulockd-main-title">
						<h2 class="color-white"> <?php echo e(__('website.Pioneersinitiative')); ?> </h2>
						<p class="color-white"><?php echo e(__('website.latterOurTraders')); ?> </p>
					</div>
				</div>
			</div>








			<div class="row">
				<div class="col-xxs-12 col-xs-6 col-sm-6 col-md-4">
					<div class="ulockd-testimonials text-center">
						<h4><i class="flaticon-straight-quotes fz30 text-thm2"></i></h4>
						<h3>Safe Place Like Home</h3>
						<div class="testi-details">
							<p>Elderly care underlines the social and individual necessities of senior natives who require some help with day by day exercises and human services, yet who want to age with poise.</p>
						</div>
						<div class="testi-thumb">
							<img class="img-responsive thumbnail pull-left" src="images/testimonial/1.jpg" alt="1.jpg">
							<h4>Karim Benzema - FinancePress CEO</h4>
						</div>
					</div>
				</div>
				<div class="col-xxs-12 col-xs-6 col-sm-6 col-md-4">
					<div class="ulockd-testimonials text-center">
						<h4><i class="flaticon-straight-quotes fz30 text-thm2"></i></h4>
						<h3>Honest & Dependable</h3>
						<div class="testi-details">
							<p>Honesty refers to a facet of moral character and connotes positive and virtuous attributes such as integrity, truthfulness, straightforwardness, along with the absence of lying, cheating etc.</p>
						</div>
						<div class="testi-thumb">
							<img class="img-responsive thumbnail pull-left" src="images/testimonial/2.jpg" alt="2.jpg">
							<h4>Karim Benzema - FinancePress CEO</h4>
						</div>
					</div>
				</div>
				<div class="col-xxs-12 col-xs-6 col-sm-6 col-md-4">
					<div class="ulockd-testimonials text-center">
						<h4><i class="flaticon-straight-quotes fz30 text-thm2"></i></h4>
						<h3>Licensed & Insured</h3>
						<div class="testi-details">
							<p>Independent insurance agents, also known as insurance sales agents typically sell a variety of insurance and financial products, life insurance, disability insurance, and long-term care insurance.</p>
						</div>
						<div class="testi-thumb">
							<img class="img-responsive thumbnail pull-left" src="images/testimonial/3.jpg" alt="3.jpg">
							<h4>Karim Benzema - FinancePress CEO</h4>
						</div>
					</div>
				</div>

			</div>
		</div>
	</section> -->





	<!-- Our Blog -->
	<section class="ulockd-blog bgc-snowshade2 triangle">
		<div class="container">
			<div class="row">
				<div class="col-md-6 col-md-offset-3 text-center">
					<div class="ulockd-main-title">
						<h2> <?php echo e(__('website.articles')); ?>   </h2>
					</div>
				</div>
			</div>
			<div class="row">



				<?php $__currentLoopData = $get_storys_all; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $get_story): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>



								<div class="col-lg-6">
									<article class="row blog_post_one">
										<div class="col-xxs-12 col-xs-6 col-sm-6 col-md-6">
											<div class="post_thumb">
												<img class="img-responsive img-whp thumbnail" src="<?php echo e(url('/uplodes/newsphoto/'.@$get_story->image)); ?>" alt="1.jpg">
											</div>
										</div>
										<div class="col-xxs-12 col-xs-6 col-sm-6 col-md-6 ulockd-pdng0">
											<div class="post_details">
												<h3> <span>25 /</span> <small>Jun 2025</small></h3>
												<ul class="list-inline">
													<li><i class="fa fa-comment text-thm2"></i></li>
													<li><a href="#"> 41 Comment</a></li>
													<li><i class="fa fa-heart text-thm2"></i></li>
													<li><a href="#"> 22 Like</a></li>
												</ul>
												<p><?php echo e($get_story->name); ?></p>
												<a class="tdu" href="<?php echo e(url(LaravelLocalization::setLocale().'/Articles/'.$get_story->id)); ?> ">Read More</a>
											</div>
										</div>
									</article>
								</div>
 <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>








			</div>
		</div>
	</section>


	<!-- Our Team -->
	<section class="our-team triangle">
		<div class="container">
			<div class="row">
				<div class="col-md-6 col-md-offset-3 text-center">
					<div class="ulockd-main-title">
					<h2><?php echo e(__('website.OurTraders')); ?></h2>


					</div>
				</div>
			</div>
			<div class="row">

				  <?php $__currentLoopData = $get_OurTraders_have_techical_analyses; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $get_OurTraders_have_techical_analyse): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
				<div class="col-xxs-12 col-xs-6 col-sm-6 col-md-3">
					<div class="team_post">
						<div class="thumb-box">

											<img src="<?php echo e(url('/uplodes/users/'.@$get_OurTraders_have_techical_analyse->image)); ?>" alt="<?php echo e(url('/uplodes/users/'.@$get_OurTraders_have_techical_analyse->image)); ?>">
											<div class="thumb-box-content">
												<a href="">	<h3 class="title text-thm2"><?php echo e($get_OurTraders_have_techical_analyse->name); ?></h3> </a>
													<span class="post">- Share</span>
													<ul class="icon">
															<li><a href="#" class="fa fa-linkedin ulockd-bgthm"></a></li>
															<li><a href="#" class="fa fa-facebook ulockd-bgthm"></a></li>
															<li><a href="#" class="fa fa-twitter ulockd-bgthm"></a></li>
															<li><a href="#" class="fa fa-link ulockd-bgthm"></a></li>
													</ul>
											</div>
									</div>
						<div class="team-details bgc-white">
							<a href="<?php echo e(url(LaravelLocalization::setLocale().'/our/Traders/Details/'.$get_OurTraders_have_techical_analyse->id)); ?>"> <h3 class="member-name"><?php echo e($get_OurTraders_have_techical_analyse->name); ?></h3></a>
							<h5 class="member-post">- Our Director</h5>
							<p>Lorem ipsum dolor sit amet, esse consectetur adipisicing elit.</p>
						</div>
					</div>
				</div>
				<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

			</div>
		</div>
	</section>














	<!-- Our Gallery -->
	<section class="our-gallery ulockd_bgp5">
		<div class="container">
			<div class="row">
				<div class="col-md-6 col-md-offset-3 text-center">
					<div class="ulockd-main-title">
						<h2>Our Gallery</h2>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorem labore voluptates consequuntur velit maiores fugiat eaque.</p>
					</div>
				</div>
			</div>
            <div class="row">
	            <div class="col-md-12">
	                <!-- Masonry Filter -->
	                <ul class="list-inline masonry-filter text-center">
	                    <li><a href="#" class="active" data-filter="*">All</a></li>

<?php $__currentLoopData = $get_Gallerycategorys; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $get_Gallerycategory): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
	                    <li><a href="#" data-filter=".<?php echo e($get_Gallerycategory->name); ?>" class=""><?php echo e($get_Gallerycategory->name); ?></a></li>
	<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
	                </ul>
	                <!-- End Masonry Filter -->

	                <!-- Masonry Grid -->
	                <div id="grid" class="masonry-gallery grid-4 clearfix">

		                <!-- Masonry Item -->
		                <!-- <div class="isotope-item experts consulting">
		                    <div class="gallery-thumb">
			                    <img class="img-responsive img-whp" src="images/gallery/9.jpg" alt="project">
			                    <div class="overlayer">
									<div class="lbox-caption">
										<div class="lbox-details">
											<h5>Gallery Title Here</h5>
											<ul class="list-inline">
												<li>
													<a class="popup-img" href="<?php echo e(asset('assets/website/images/gallery/index4.jpeg')); ?>" title="Gallery Photos"><span class="flaticon-add-square-button"></span></a>
												</li>
												<li>
													<a class="link-btn" href="#" ><span class="flaticon-link-symbol"></span></a>
												</li>
											</ul>
										</div>
									</div>
			                    </div>
		                    </div>
		                </div> -->





<?php $__currentLoopData = $get_Gallerys; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $get_Gallery): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

										<div class="isotope-item <?php echo e($get_Gallery->get_categories()->first()->name); ?>">
												<div class="gallery-thumb">
													<img class="img-responsive img-whp" src="<?php echo e(url('/uplodes/newsphoto/'.@$get_Gallery->image)); ?>" alt="project">
													<div class="overlayer">
									<div class="lbox-caption">
										<div class="lbox-details">
											<h5><?php echo e($get_Gallery->get_categories()->first()->name); ?></h5>
											<ul class="list-inline">
												<li>
													<a class="popup-img" href="<?php echo e(url('/uplodes/newsphoto/'.@$get_Gallery->image)); ?>" title="Gallery Photos"><span class="flaticon-add-square-button"></span></a>
												</li>
												<li>

												</li>
											</ul>
										</div>
									</div>
													</div>
												</div>
										</div>

<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>




		                <!-- Masonry = Masonry Item -->
	                </div>
	                <!-- Masonry Gallery Grid Item -->
	            </div>
            </div>
		</div>
	</section>


	<!-- Our Freequently Ask -->
	<section class="freequently-ask">
		<div class="container">
			<div class="row">
				<div class="col-md-6">
					<div class="about-box">
						<h2 class="ulockd-mrgn120"><?php echo e($get_report->first()->name); ?></h2>


						<p><?php echo e($get_report->first()->description); ?></p>
						<button type="submit" class="btn btn-default ulockd-btn-thm2">Read More</button>
					</div>
				</div>
				<div class="col-md-6">
					<div class="about-box"><img class="img-responsive img-whp" src="<?php echo e(url('/uplodes/newsphoto/'.@$get_report->first()->image)); ?>" alt="3.png"></div>
				</div>
			</div>
		</div>
	</section>




	<?php if(\Mcamara\LaravelLocalization\Facades\LaravelLocalization::getCurrentLocale()=='ar'): ?>

	<!-- Our Team -->
	<section class="ulockd-team-two">
		<div class="container">
			<div class="row">
				<div class="col-md-7">
					<h3 class="title-bottom ulockd-mrgn120 ulockd-mrgn635">معلومات  عنا </h3>
					<div class="row">
						<div class="col-xxs-12 col-xs-6 col-sm-6">
							<img class="img-responsive img-whp" src="images/about/3.jpg" alt="3.jpg">
							<h3>رؤيتنا </h3>
							<p>نسعى ان نكون رواد أعمال في مجالات إستثمارية متعددة لتقديم الاتسويق الإستثماري و إستشارات السوق و تدريب المستثمرين في مختلف المجالات </p>
						</div>
						<div class="col-xxs-12 col-xs-6 col-sm-6">
							<img class="img-responsive img-whp" src="images/about/2.jpg" alt="2.jpg">
							<h3>مهمتنا </h3>
							<ul class="list-style-square">

								<li class="fz16">سرعة في الإنتشار </li>
								<li class="fz16">تحقيق أعلى عائد إستثماري </li>
								<li class="fz16">الوصول إلي أكبر عدد من المستثمرين </li>

							</ul>
							<p>تجاوز توقعات عملائنا ,نبني أسس علمية في مجالات أستثمارية متعددة </p>
						</div>
					</div>
				</div>
				<div class="col-md-5">
					<h3 class="title-bottom ulockd-mrgn120 ulockd-mrgn635">هل  لديك اى سوال؟</h3>
					<div class="about-box">
						<div class="booking_form_style_home text-center">
											<!-- Booking Form Sart-->
										<form id="booking_form" class="text-center" name="booking_form" action="<?php echo e(url('RequestAQuote')); ?>" method="post" novalidate="novalidate">
  <?php echo e(csrf_field()); ?>

												<div class="messages"></div>
								<div class="row">
													<div class="col-sm-12">
														<p class="lead"> استشاره  </p>
													</div>
													<div class="col-sm-12">
															<div class="form-group">
											<input id="form_name" name="name" class="form-control form_control" placeholder="اول اسم" required="required" data-error="Name is required." type="text">
											<div class="help-block with-errors"></div>
										</div>
													</div>
													<div class="col-sm-12">
															<div class="form-group">
																<input id="email" name="email" class="form-control form_control required email" placeholder="الايميل" required="required" data-error="Email is required." type="email">
											<div class="help-block with-errors"></div>
															</div>
													</div>
													<div class="col-sm-6">
															<div class="form-group">
																<input id="phone" name="phone" class="form-control form_control required" placeholder="الهاتف" required="required" data-error="Phone Number is required." type="text">
											<div class="help-block with-errors"></div>
										</div>
													</div>
													<div class="col-sm-6">
															<div class="form-group">
																<div class="ulockd-select-style">
												<select id="form_option" class="form-control form_control required booking_form_control" required="required" data-error="Option is required." name="option">
													<option value=""> اختار الخدمه</option>
																					<option value="تعليم">تعليم</option>
																					<option value="استشارات">استشارات</option>
																					<option value="توصيات"> توصيات </option>
																					<option value="تحليل فنى"> تحليل فنى</option>
																					<option value="نسخ  صفقات ">نسخ  صفقات  </option>
																					<option value="مشاريعنا"> مشاريعنا  </option>

																		</select>
																</div>
											<div class="help-block with-errors"></div>
															</div>
													</div>
													<div class="col-sm-12">
																	<div class="form-group">
																			<textarea id="form_message" name="message" class="form-control ulockd-form-tb required" rows="5" placeholder="رسالتك" required="required" data-error="Message is required."></textarea>
																			<div class="help-block with-errors"></div>
																	</div>
															<div class="form-group">
																<input name="form-botcheck" class="form-control" type="hidden" value="">
																<button type="submit" class="btn btn-lg ulockd-btn-thm2 btn-block">ارسال</button>
															</div>
													</div>
												</div>
										</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>


	<?php else: ?>



	<!-- Our Team -->
	<section class="ulockd-team-two">
		<div class="container">
			<div class="row">
				<div class="col-md-7">
					<h3 class="title-bottom ulockd-mrgn120 ulockd-mrgn635">About Our Info</h3>
					<div class="row">
						<div class="col-xxs-12 col-xs-6 col-sm-6">
							<img class="img-responsive img-whp" src="images/about/3.jpg" alt="3.jpg">
							<h3>Our Vision</h3>
							<p>Consectetur adipisicing elit. Aliquam totam cupiditate iste doloribus, unde minima vero quidem. Porro, laborum obcaecati architecto ex nostrum doloremque magni. Culpa sunt, ex nostrum doloremque incidunt eos atque officia harum impedit tempora.</p>
						</div>
						<div class="col-xxs-12 col-xs-6 col-sm-6">
							<img class="img-responsive img-whp" src="images/about/2.jpg" alt="2.jpg">
							<h3>Our Mision</h3>
							<ul class="list-style-square">
								<li class="fz16">Safety</li>
								<li class="fz16">Community</li>
								<li class="fz16">Sustainability</li>
							</ul>
							<p>Vero laboriosam aperiam quasi nihil, Culpa sunt repellendus molestiae eos atque officia quaerat quia officiis neque.</p>
						</div>
					</div>
				</div>
				<div class="col-md-5">
					<h3 class="title-bottom ulockd-mrgn120 ulockd-mrgn635">Have Any Questions?</h3>
					<div class="about-box">
						<div class="booking_form_style_home text-center">
											<!-- Booking Form Sart-->
										<form id="booking_form" class="text-center" name="booking_form" action="<?php echo e(url('RequestAQuote')); ?>" method="post" novalidate="novalidate">
  <?php echo e(csrf_field()); ?>

												<div class="messages"></div>
								<div class="row">
													<div class="col-sm-12">
														<p class="lead">Request A Quote</p>
													</div>
													<div class="col-sm-12">
															<div class="form-group">
											<input id="form_name" name="name" class="form-control form_control" placeholder="Full Name" required="required" data-error="Name is required." type="text">
											<div class="help-block with-errors"></div>
										</div>
													</div>
													<div class="col-sm-12">
															<div class="form-group">
																<input id="form_email" name="email" class="form-control form_control required email" placeholder="Email" required="required" data-error="Email is required." type="email">
											<div class="help-block with-errors"></div>
															</div>
													</div>
													<div class="col-sm-6">
															<div class="form-group">
																<input id="form_phone" name="phone" class="form-control form_control required" placeholder="Phone" required="required" data-error="Phone Number is required." type="text">
											<div class="help-block with-errors"></div>
										</div>
													</div>
													<div class="col-sm-6">
															<div class="form-group">
																<div class="ulockd-select-style">
												<select id="form_option" class="form-control form_control required booking_form_control" required="required" data-error="Option is required." name="option">
													<option value="">Select Service</option>
																					<option value="learn">learn</option>
																					<option value="Consulting">Consulting</option>
																					<option value="Recommendations">Recommendations</option>
																					<option value="Technical analysis">Technical analysis</option>
																					<option value="Copy deals">Copy deals</option>
																					<option value="Our projects">Our projects</option>

																		</select>
																</div>
											<div class="help-block with-errors"></div>
															</div>
													</div>
													<div class="col-sm-12">
																	<div class="form-group">
																			<textarea id="form_message" name="message" class="form-control ulockd-form-tb required" rows="5" placeholder="Your massage" required="required" data-error="Message is required."></textarea>
																			<div class="help-block with-errors"></div>
																	</div>
															<div class="form-group">
																<input name="form-botcheck" class="form-control" type="hidden" value="">
																<button type="submit" class="btn btn-lg ulockd-btn-thm2 btn-block">Send</button>
															</div>
													</div>
												</div>
										</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

		<?php endif; ?>






	<!-- Our Testimonials -->
	<section class="ulockd-testimonial ulockd_bgp2">
		<div class="container">
			<div class="row">
				<div class="col-md-6 col-md-offset-3 text-center">
					<div class="ulockd-main-title">
						<h2>Our partners</h2>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorem labore voluptates consequuntur velit maiores fugiat eaque.</p>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-xxs-12 col-xs-6 col-sm-6 col-md-5">
		            <div class="testimonial_tab" role="tabpanel">
		                <!-- Tab panes -->
		                <div class="tab-content" id="tabs-collapse">
		                    <div role="tabpanel" class="tab-pane fade in active" id="finPress">
		                        <div class="tab-inner">
		                            <p>Cras convallis finibus porta. Integer in ligula leo. Cras quis nisl, at sapien. Mauris ultricies nisi eget velit bibendum, Cum sociis natoque penatibus et magnis dis montes, nascetur mus.</p>
		                            <hr>
		                            <h4 class="text-uppercase">Dustin Lamont</h4>
		                            <p><em class="text-capitalize"> Senior web developer</em> at <a href="#">Apple</a></p>
		                        </div>
		                    </div>
		                    <div role="tabpanel" class="tab-pane fade" id="daksh">
		                        <div class="tab-inner">
		                            <p>Cras convallis finibus porta. Integer in ligula leo. Cras quis nisl, at sapien. Mauris ultricies nisi eget velit bibendum, Cum sociis natoque penatibus et magnis dis montes, nascetur mus.</p>
		                            <hr>
		                            <h4 class="text-uppercase">Daksh Bhagya</h4>
		                            <p><em class="text-capitalize"> UX designer</em> at <a href="#">Google</a></p>
		                        </div>
		                    </div>
		                    <div role="tabpanel" class="tab-pane fade" id="anna">
		                        <div class="tab-inner">
		                            <p>Cras convallis finibus porta. Integer in ligula leo. Cras quis nisl, at sapien. Mauris ultricies nisi eget velit bibendum, Cum sociis natoque penatibus et magnis dis montes, nascetur mus.</p>
		                            <hr>
		                            <h4 class="text-uppercase">Anna Pickard</h4>
		                            <p><em class="text-capitalize"> Master web developer</em> at <a href="#">Intel</a></p>
		                        </div>
		                    </div>
		                    <div role="tabpanel" class="tab-pane fade" id="wafer">
		                        <div class="tab-inner">
		                            <p>Cras convallis finibus porta. Integer in ligula leo. Cras quis nisl, at sapien. Mauris ultricies nisi eget velit bibendum, Cum sociis natoque penatibus et magnis dis montes, nascetur mus.</p>
		                            <hr>
		                            <h4 class="text-uppercase">Wafer Baby</h4>
		                            <p><em class="text-capitalize"> Web designer</em> at <a href="#">Microsoft</a></p>
		                        </div>
		                    </div>
		                </div>
		                <!-- Nav tabs -->
		                <ul class="nav nav-justified" id="nav-tabs" role="tablist">
		                    <li role="presentation" class="active">
		                        <a href="#finPress" aria-controls="finPress" role="tab" data-toggle="tab">
		                            <img class="img-circle" src="images/testimonial/1.jpg" alt="1.jpg">
		                            <span class="quote ulockd-bgthm"><i class="fa fa-quote-left"></i></span>
		                        </a>
		                    </li>
		                    <li role="presentation" class="">
		                        <a href="#daksh" aria-controls="daksh" role="tab" data-toggle="tab">
		                            <img class="img-circle" src="images/testimonial/2.jpg" alt="2.jpg">
		                            <span class="quote ulockd-bgthm"><i class="fa fa-quote-left"></i></span>
		                        </a>
		                    </li>
		                    <li role="presentation" class="">
		                        <a href="#anna" aria-controls="anna" role="tab" data-toggle="tab">
		                            <img class="img-circle" src="images/testimonial/3.jpg" alt="3.jpg">
		                            <span class="quote ulockd-bgthm"><i class="fa fa-quote-left"></i></span>
		                        </a>
		                    </li>
		                    <li role="presentation" class="">
		                        <a href="#wafer" aria-controls="wafer" role="tab" data-toggle="tab">
		                            <img class="img-circle" src="images/testimonial/4.jpg" alt="4.jpg">
		                            <span class="quote ulockd-bgthm"><i class="fa fa-quote-left"></i></span>
		                        </a>
		                    </li>
		                </ul>
		            </div>
		        </div>
				<div class="col-xxs-12 col-xs-6 col-sm-6 col-md-7">
					<div class="row">
						<div class="col-xs-6 col-sm-6 col-md-4 ulockd-pdng0"><div class="partner"><img src="images/partners/1.png" alt="1.png"></div></div>
						<div class="col-xs-6 col-sm-6 col-md-4 ulockd-pdng0"><div class="partner"><img src="images/partners/2.png" alt="2.png"></div></div>
						<div class="col-xs-6 col-sm-6 col-md-4 ulockd-pdng0"><div class="partner"><img src="images/partners/3.png" alt="3.png"></div></div>
						<div class="col-xs-6 col-sm-6 col-md-4 ulockd-pdng0"><div class="partner"><img src="images/partners/4.png" alt="4.png"></div></div>
						<div class="col-xs-6 col-sm-6 col-md-4 ulockd-pdng0"><div class="partner"><img src="images/partners/5.png" alt="5.png"></div></div>
						<div class="col-xs-6 col-sm-6 col-md-4 ulockd-pdng0"><div class="partner"><img src="images/partners/6.png" alt="5.png"></div></div>
					</div>
		        </div>
			</div>
		</div>
	</section>








	<!-- Our Footer -->
	<section class="ulockd-footer ulockd-pdng0">
		<div class="container footer-padding">
			<div class="row">
				<div class="col-xxs-12 col-xs-6 col-sm-6 col-md-3">
					<div class="widget-about">
						<div class="logo-widget tac-xxsd ulockd-mrgn615">
							<img src="images/footer-logo.png" alt="footer-logo.png">
						</div>
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

<!-- <a class="scrollToHome ulockd-bgthm" href="#"><i class="fa fa-home"></i></a> -->
</div>

<!-- Wrapper End -->
<?php echo $__env->make('website.includes.js', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>


<!-- Mirrored from unlockdesizn.com/html/corporate/financepress/demo/ulockd-background-video-home.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 08 Nov 2020 08:05:11 GMT -->
</html>



















<!--

      <!DOCTYPE html>
      <html lang="en">
      	<head>
      		<meta charset="UTF-8" />
      		<meta
      			name="viewport"
      			content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0"
      		/>
      		<meta http-equiv="X-UA-Compatible" content="ie=edge" />
      		<title>Jodit Test Document</title>
      		<link rel="stylesheet" href="./app.css" />
      		<link rel="stylesheet" href="./build/jodit.min.css" />
      		<script src="./build/jodit.js"></script>




              <script src="<?php echo e(asset('editor/build/jodit.js')); ?>"></script>
              <script src="<?php echo e(asset('editor/js/sample.js')); ?>"></script>
              <script src="<?php echo e(asset('editor/build/jodit.js')); ?>"></script>

                <link rel="stylesheet" type="text/css" href="<?php echo e(asset('editor/app.css')); ?>" />
              	<link rel="stylesheet" type="text/css" href="<?php echo e(asset('editor/build/jodit.min.css')); ?>" />



      	</head>
      	<body>
      		<style>
      			#box {
      				padding: 100px;
      				margin: 20px;
      				position: relative;
      				height: 500px;
      			}

      			@media (max-width: 480px) {
      				#box {
      					padding: 0;
      				}
      			}
      		</style>
      		<div id="box">
      			<h1>Jodit Test Document</h1>
      			<textarea id="editor">
      				&lt;img src="https://xdsoft.net/jodit/build/images/artio.jpg"/&gt;
      			</textarea>
      		</div>
      		<script>
      			const editor = Jodit.make('#editor' ,{
      				uploader: {
      					url: 'https://xdsoft.net/jodit/connector/index.php?action=fileUpload'
      				},
      				filebrowser: {
      					ajax: {
      						url: 'https://xdsoft.net/jodit/connector/index.php'
      					}
      				}
      			});
      		</script>
      	</body>
      </html> -->
