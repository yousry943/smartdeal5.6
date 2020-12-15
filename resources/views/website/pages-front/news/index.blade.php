<!DOCTYPE html>
<html dir="ltr" lang="en">

<!-- Mirrored from unlockdesizn.com/html/corporate/financepress/demo/blog-grid-four.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 08 Nov 2020 08:11:34 GMT -->
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- css file -->
@include('website.includes.css')

<!-- Title -->
<title>Smart-Deal24 - {{$title}}</title>
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
						<h1 class="text-uppercase">LATEST






{{$get_news->first()->get_categories()->first()->name}}


						</h1>
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
							<li> <a href="#">{{$get_news->first()->get_categories()->first()->name}} News </a> </li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>





































	<!-- Home Design Inner Pages -->
	<section class="ulockd-ip-latest-news">
		<div class="container">
			<div class="row">
				<div class="col-md-6 col-md-offset-3 text-center">
					<div class="ulockd-main-title">
						<h2>Our {{@$get_news->first()->get_categories()->first()->name}} News</h2>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorem labore voluptates consequuntur velit maiores fugiat eaque.</p>
					</div>
				</div>
			</div>


			<div class="row">
				<div class="col-md-12 ulockd-mrgn1210">
					<div class="blog-post-img-slider">

				@foreach ($get_news as $get_new)
						<div class="item">
							<div class="ulockd-project-sm-thumb">
								<a href="{{url(LaravelLocalization::setLocale().'/Forex_Details/'.$get_new->id)}}"> <img style="height:400px;max-width:1200px;width:" class="img-responsive img-whp" src="{{url('/uplodes/newsphoto/'.@$get_new->image)}}" alt=""></a>
							</div>
						</div>
						@endforeach



					</div>
				</div>




			</div>


<br><br><br>

			<div class="row">

            @foreach ($get_news as $get_new)
				<div class="col-xxs-12 col-xs-6 col-sm-6 col-md-4">
					<article class="blog-post">
						<div class="post-thumb">


  <a href="{{url(LaravelLocalization::setLocale().'/Forex_Details/'.$get_new->id)}}">  <image src="{{url('/uplodes/newsphoto/'.@$get_new->image)}}" alt="{{url('/uplodes/newsphoto/'.@$get_new->image)}}" /> </a>




						</div>
						<div class="details">
							<div class="post-date text-thm2">{{$get_new->created_at}}</div>
							<a href="{{url(LaravelLocalization::setLocale().'/Forex_Details/'.$get_new->id)}}"><h3 class="post-title">{{$get_new->title}}</h3></a>
							<p>{{ Str::limit($get_new->description, 150) }}  </p>
							<a  class="btn btn-lg ulockd-btn-white" href="{{url(LaravelLocalization::setLocale().'/Forex_Details/'.$get_new->id)}}">Read More </a>
						</div>
					</article>
				</div>
@endforeach
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

<!-- Mirrored from unlockdesizn.com/html/corporate/financepress/demo/blog-grid-four.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 08 Nov 2020 08:11:34 GMT -->
</html>
