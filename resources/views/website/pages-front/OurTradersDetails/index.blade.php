<!DOCTYPE html>
<html dir="ltr" lang="en">

	<!-- Mirrored from unlockdesizn.com/html/corporate/financepress/demo/page-about-me.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 08 Nov 2020 08:11:06 GMT -->
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- css file -->
@include('website.includes.css')
<!-- Title -->
<title>FinancePress - Business and Finance HTML Template</title>
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



		  @include('website.includes.header') 

	<!-- Home Design Inner Pages -->
	<div class="ulockd-inner-home">
		<div class="container text-center">
			<div class="row">
				<div class="inner-conraimer-details">
					<div class="col-md-12">
						<h1 class="text-uppercase">About Me</h1>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Home Design Inner Pages -->
	<div class="ulockd-inner-page">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="ulockd-icd-layer">
						<ul class="list-inline ulockd-icd-sub-menu">
							<li><a href="#"> HOME </a></li>
							<li><a href="#"> > </a></li>
							<li> <a href="#"> ABOUT ME </a> </li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Our About -->
	<section class="ulockd-about2">
		<div class="container">
			<div class="row">
				<div class="col-xxs-12 col-xs-6 col-sm-4 col-md-4">
					<div class="about-box">
						<img class="img-responsive img-whp" src="{{url('/uplodes/users/'.@$get_OurTraders_have_techical_analyses->first()->image)}}" alt="5.jpg">
					</div>
				</div>
				<div class="col-xxs-12 col-xs-6 col-sm-8 col-md-8">
					<div class="about-box style1">
						<div class="author pull-left fn-xsd">
							<h3 class="ulockd-mrgn120">{{$get_OurTraders_have_techical_analyses->first()->name}}</h3>
							<h5>- Our Manager</h5>
						</div>



		                <ul class="social_icons list-inline pull-right fn-xsd">


	                        <li><a class="bgc-fb" href="https://www.facebook.com/sharer/sharer.php?u=www.smartdeal24.com/{{url('our/Traders/Details/')}}/{{$get_news->first()->id}}" target="_blank"><i class="fa fa-facebook"></i></a></li>
	                        <li><a class="bgc-twtr" href="http://twitter.com/share?text=text goes here&url=www.smartdeal24.com/{{url('our/Traders/Details/')}}/{{$get_news->first()->id}}"><i class="fa fa-twitter"></i></a></li>

	                        <li><a class="bgc-lnkdn" href="https://www.linkedin.com/shareArticle?mini=true&url=www.smartdeal24.com/{{url('our/Traders/Details/')}}/{{$get_news->first()->id}}"><i class="fa fa-linkedin"></i></a></li>

		                </ul>
		                <p class="ulockd-mrgn1215">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reiciendis ducimus, illo quaerat fuga dignissimos hic qui molestiae accusamus optio iusto explicabo alias facere quisquam saepe, cumque similique iste itaque voluptatum! Sapiente quo optio necessitatibus pariatur natus.</p>
		                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nemo, deleniti sit temporibus veniam, nesciunt mollitia facere necessitatibus vitae asperiores eius, accusamus.</p>
						<!--Progress Levels-->


		                <div class="progress-levels row">


											@foreach ($categorys as $category)


		                    <div class="col-sm-6 progress-box wow" data-wow-delay="100ms" data-wow-duration="300ms">
			                    <h5 class="box-title">{{$category->name}}</h5>
			                    <div class="inner">
			                        <div class="bar">
			                            <div class="bar-innner"><div class="bar-fill ulockd-bgthm" data-percent="10"><div class="percent"></div></div></div>
			                        </div>
			                    </div>
		                    </div>
													@endforeach





		                </div>



					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- Our First Divider -->
	<!-- <section class="ulockd-divider ulockd-bgthm">
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-md-offset-2 text-center">
					<h2 class="color-white ulockd-mrgn120">FinancePress Your Business & Financial Solution.</h2>
				</div>
			</div>
			<div class="row ulockd-mrgn1230">
				<div class="col-xs-6 col-sm-3">
					<div class="ulockd-ffact-one hvr-pulse text-center">
                        <span class="color-white flaticon-multiple-users-silhouette"></span>
                        <p class="color-white">Global Followers</p>
                        <ul class="list-inline">
                        	<li class="ulockd-pdng0"><div class="timer">2200</div></li>
                        	<li class="fz30 ulockd-pdng0 color-white">+</li>
                        </ul>
					</div>
				</div>
				<div class="col-xs-6 col-sm-3">
					<div class="ulockd-ffact-one hvr-pulse text-center">
                        <span class="color-white flaticon-trophy-for-sports"></span>
                        <p class="color-white">Cup Coffee</p>
                        <ul class="list-inline">
                        	<li class="ulockd-pdng0"><div class="timer">1200</div></li>
                        	<li class="fz30 ulockd-pdng0 color-white">+</li>
                        </ul>
					</div>
				</div>
				<div class="col-xs-6 col-sm-3">
					<div class="ulockd-ffact-one hvr-pulse text-center">
                        <span class="color-white flaticon-people-5"></span>
                        <p class="color-white">Satisfied Clients</p>
                        <ul class="list-inline">
                        	<li class="ulockd-pdng0"><div class="timer">100</div></li>
                        	<li class="fz30 ulockd-pdng0 color-white">%</li>
                        </ul>
					</div>
				</div>
				<div class="col-xs-6 col-sm-3">
					<div class="ulockd-ffact-one hvr-pulse text-center">
                        <span class="color-white flaticon-medal"></span>
                        <p class="color-white">Awards Won</p>
                        <ul class="list-inline">
                        	<li class="ulockd-pdng0"><div class="timer">65</div></li>
                        	<li class="fz30 ulockd-pdng0 color-white">+</li>
                        </ul>
					</div>
				</div>
			</div>
		</div>
	</section> -->


	<!-- Our Department -->
	<section class="ulockd-fservice">
		<div class="container">
			<div class="row">
				<div class="col-md-6 col-md-offset-3 text-center">
					<div class="ulockd-main-title">
						<h2>Projects List</h2>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorem labore voluptates consequuntur velit maiores fugiat eaque.</p>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-8 col-lg-9">

							@foreach ($get_news as $get_new)
					<div class="row ulockd-mrgn1220">
						<div class="col-xxs-12 col-xs-6 col-sm-6 col-md-5 ulockd-pad395">
							<div class="img-box">
								<div class="cb-thumb">
									<img class="img-responsive img-whp" src="{{url('/uplodes/newsphoto/'.$get_new->image)}}" alt="2.jpg">
								</div>
							</div>
						</div>
						<a href="{{url(LaravelLocalization::setLocale().'/our/Traders/Details/data')}}/{{$get_new->id}}">
						<div class="col-xxs-12 col-xs-6 col-sm-6 col-md-7 ulockd-pad395">
							<div class="img-box">
								<div class="cb-details style2">
									<h3>{{ Str::limit($get_new->title, 150) }}</h3>
									<p>  {{ Str::limit($get_new->description, 350) }}  </p>
								</div>
							</div>
						</div> </a>


					</div>

	@endforeach




				</div>
				<div class="col-md-4 col-lg-3 ulockd-pdng0">
					<div class="ulockd-all-service">
						<h4> Catagries</h4>
						<div class="list-group">

							@foreach ($categorys as $category)
						    <a href="{{url(LaravelLocalization::setLocale().'/our/Traders/category/Details')}}/{{$user_id}}/{{$category->id}}" class="list-group-item active">{{$category->name}}</a>

								@endforeach
						</div>
					</div>
					<h4>FinancePress Testimonial</h4>
	            	<ul class="testimonial-carousel">
	            		<li>
		            		<div class="media">
							 	<div class="media-left pull-left">
							    	<a href="#">
							      		<img class="media-object thumbnail" src="images/testimonial/1.jpg" alt="1.jpg">
							    	</a>
							  	</div>
							  	<div class="media-body">
							   		<h4 class="media-heading">Ana Andreea</h4>
							    	<p class="ulockd-tcompliment"><span class="flaticon-straight-quotes"></span> I ordinarily don't compose letters, however I felt constrained to compose this one. This is in reference to the agony administration fixate situated on the fourth floor at the Comfot Home Old & Health Care, Melbourne. <span class="flaticon-blocks-with-angled-cuts"></span></p>
							  	</div>
							</div>
	            		</li>
	            		<li>
		            		<div class="media">
							 	<div class="media-left pull-left">
							    	<a href="#">
							      		<img class="media-object thumbnail" src="images/testimonial/2.jpg" alt="2.jpg">
							    	</a>
							  	</div>
							  	<div class="media-body">
							   		<h4 class="media-heading">Simone Andreea</h4>
							    	<p class="ulockd-tcompliment"><span class="flaticon-straight-quotes"></span> I had the delight of being an outpatient in your Ambulatory Surgical Unit for foot surgery. From the moment I strolled in at the early hour of 6:00AM, until the time I was released, I experienced a staff that was cordial, warm and proficient who treated me with the most extreme care. <span class="flaticon-blocks-with-angled-cuts"></span></p>
							  	</div>
							</div>
	            		</li>
	            	</ul>
					<div class="ulockd-inr-brochure">
						<h4>Project Plan</h4>
						<p>pain was born and I will give you a complete accounf the system, and expound the actuteachings of the grea</p>
						<ul class="list-unstyled">
							<li><a class="btn btn-default btn-lg ulockd-btn-thm2" href="#"><i class="fa fa-file-excel-o fz20"></i> Document1.csv</a></li>
							<li><a class="btn btn-default btn-lg ulockd-btn-thm2" href="#"><i class="fa fa-file-word-o fz20"></i> Document2.DOC</a></li>
							<li><a class="btn btn-default btn-lg ulockd-btn-thm2" href="#"><i class="fa fa fa-file-pdf-o fz20"></i> Document3.PDF</a></li>
						</ul>
					</div>
				</div>
			</div>
			<div class="row ulockd-mrgn1240">
				<div class="col-md-12 text-center">
					<nav aria-label="Page navigation navigation-lg">
					    <ul class="pagination">




{{ $get_news->links() }}


					    </ul>
					</nav>
				</div>
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
						<p>Victoria 8007 Australia Envato HQ 121 King Street, Melbourne.</p>
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
@include('website.includes.js')
</body>

<!-- Mirrored from unlockdesizn.com/html/corporate/financepress/demo/page-about-me.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 08 Nov 2020 08:11:07 GMT -->
</html>
