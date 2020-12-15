<!DOCTYPE html>
<html dir="ltr" lang="en">

<!-- Mirrored from unlockdesizn.com/html/corporate/financepress/demo/blog-signle-left-sidebar.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 08 Nov 2020 08:11:34 GMT -->
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
						<h1 class="text-uppercase">LATEST NEWS</h1>
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
							<li> <a href="#"> LATEST NEWS </a> </li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Inner Pages Main Section -->
	<section class="ulockd-service-details">
		<div class="container">
			<div class="col-md-4 col-lg-3 ulockd-pdng0">
				<div class="widget-sidebar">


					<!-- TradingView Widget BEGIN -->
			<div class="tradingview-widget-container">
				<div class="tradingview-widget-container__widget"></div>
				<div class="tradingview-widget-copyright"><a href="https://www.tradingview.com/markets/currencies/" rel="noopener" target="_blank"><span class="blue-text">Forex</span></a> by TradingView</div>
				<script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-market-overview.js" async>
				{
				"colorTheme": "light",
				"dateRange": "12M",
				"showChart": true,
				"locale": "en",
				"largeChartUrl": "",
				"isTransparent": false,
				"showSymbolLogo": true,
				"width": "270",
				"height": "600",
				"plotLineColorGrowing": "rgba(33, 150, 243, 1)",
				"plotLineColorFalling": "rgba(33, 150, 243, 1)",
				"gridLineColor": "rgba(240, 243, 250, 1)",
				"scaleFontColor": "rgba(120, 123, 134, 1)",
				"belowLineFillColorGrowing": "rgba(33, 150, 243, 0.12)",
				"belowLineFillColorFalling": "rgba(33, 150, 243, 0.12)",
				"symbolActiveColor": "rgba(33, 150, 243, 0.12)",
				"tabs": [
					{
						"title": "Forex",
						"symbols": [
							{
								"s": "FX:EURUSD"
							},
							{
								"s": "FX:GBPUSD"
							},
							{
								"s": "FX:USDJPY"
							},
							{
								"s": "FX:USDCHF"
							},
							{
								"s": "FX:AUDUSD"
							},
							{
								"s": "FX:USDCAD"
							}
						],
						"originalTitle": "Forex"
					}
				]
			}
				</script>
			</div>
			<!-- TradingView Widget END -->






					<h3 class="title-widget-sidebar ulockd-bb-dashed"><span class="flaticon-calendar text-thm2"></span> Latest Post</h3>
					<div class="ulockd-lp">


@foreach ($Latest_Posts as $Latest_Post)
						<div class="ulockd-latest-post">
							<div class="media">
							    <div class="media-left pull-left">
							    	<a href="{{$Latest_Post->id}}">
							      	    <img class="media-object thumbnail" src="{{url('/uplodes/newsphoto/'.$Latest_Post->image)}}" alt="1.jpg">
							    	</a>
							    </div>
							    <div class="media-body">
							    	<h4 class="media-heading">{{$Latest_Post->title}}</h4>
							    {{$Latest_Post->description}}<a href="{{$Latest_Post->id}}">more...</a>
							    	<strong><a href="{{$Latest_Post->id}}"> {{$Latest_Post->created_at}} </a></strong>
							    </div>
							</div>
						</div>

	@endforeach



					</div>



				</div>
			</div>
			<div class="col-md-8 col-lg-9">
				<div class="row">
					<div class="col-md-12 ulockd-mrgn1210">
						<div class="ulockd-project-sm-thumb">
							<img class="img-responsive img-whp" src="{{url('/uplodes/newsphoto/'.$get_data->first()->image)}}" alt="">
						</div>
					</div>
				</div>

				<div class="row">
					<div class="col-md-12 ulockd-mrgn1210">
						<div class="ulockd-pd-content">
							<div class="ulockd-bp-date">
								<ul class="list-inline">
									<li class="ulockd-bp-date-innner">On <a href="#"><span class="text-thm2">25</span> / Jun 2018</a></li>
									<li class="ulockd-bp-comment"><a href="#"><span class="flaticon-nurse-head text-thm1"></span> Ana D Cruse</a></li>
									<li class="ulockd-bp-comment"><a href="#"><span class="flaticon-chat text-thm1"></span> 05 Comment</a></li>
									<li class="ulockd-bp-comment"><a href="#"><span class="flaticon-black-check-box text-thm1"></span> Service</a></li>
								</ul>
							</div>
							<h3>{{$get_data->first()->title}}<h3>


            @php
 echo $get_data->first()->body;
@endphp
						</div>
					</div>

					<!-- <div class="col-md-12 ulockd-mrgn1210">
						<div class="ulockd-bpd-thumb">
							<img class="img-responsive img-whp" src="images/blog/blog-details2.jpg" alt="blog-details2.jpg">
						</div>
						<div class="row">
							<div class="col-md-6">
								<img class="img-responsive img-whp" src="images/blog/blog-details4.jpg" alt="blog-details4.jpg">
							</div>
							<div class="col-md-6">
								<img class="img-responsive img-whp" src="images/blog/blog-details5.jpg" alt="blog-details5.jpg">
							</div>
						</div><br>
						<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.</p>
						<blockquote class="ulockd-mrgn1220">
						    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nulla accusantium omnis, debitis veniam, at fugiat numquam iusto eos alias asperiores voluptate, explicabo doloremque eveniet mollitia non quisquam dolores fugit magni magnam, veritatis pariatur! Ut, temporibus.</p>
						    <footer>Vice President <cite title="Source Title"> Muhibbur Rashid</cite></footer>
						</blockquote>
					</div> -->
				</div>
				<div class="row">
					<div class="col-md-12">
						<div class="ulockd-bp-single">
							<h2 class="ulockd-bps-title">Comment</h2>
							<div class="ulockd-bps-first">
								<div class="media">
								    <div class="media-left pull-left">
									    <a href="#">
									        <img class="media-object thumbnail" src="images/testimonial/1.jpg" alt="1.jpg">
									    </a>
								    </div>
								    <div class="media-body">
									    <h4 class="media-heading">Steven Porter <span class="ulockd-bps-date pull-right"> Posted on Jun 12, 2015</span> </h4>
									    <p>There are many variations of passages of Lorem Ipsum available, but the majority have u form, by injected humour, amr song bangla ami otami</p>
									    <a class="text-thm1" href="#"> Reply </a>
								    </div>
								</div>
							</div>
							<div class="ulockd-bps-second">
								<div class="media">
								    <div class="media-left pull-left">
									    <a href="#">
									        <img class="media-object thumbnail" src="images/testimonial/2.jpg" alt="2.jpg">
									    </a>
								    </div>
								    <div class="media-body">
									    <h4 class="media-heading">Steven Porter <span class="ulockd-bps-date pull-right"> Posted on Jun 12, 2015</span> </h4>
									    <p>There are many variations of passages of Lorem Ipsum available, but he majority have uform, by injected</p>
									    <a class="text-thm1" href="#"> Reply </a>
								    </div>
								</div>
							</div>
							<div class="ulockd-bps-first">
								<div class="media">
								    <div class="media-left pull-left">
									    <a href="#">
									        <img class="media-object thumbnail" src="images/testimonial/3.jpg" alt="3.jpg">
									    </a>
								    </div>
								    <div class="media-body">
									    <h4 class="media-heading">Steven Porter <span class="ulockd-bps-date pull-right"> Posted on Jun 12, 2015</span> </h4>
									    <p>There are many variations of passages of Lorem Ipsum available, but the majority have u form, by injected humour, amr song bangla ami otami</p>
									    <a class="text-thm1" href="#"> Reply </a>
								    </div>
								</div>
							</div>
	                        <form name="contact_form" class="ulockd-bps-contact-form" action="http://unlockdesizn.com/html/corporate/financepress/demo/willadd" method="post" novalidate="novalidate">
	                        	<div class="ulockd-bps-contact-form">
	                        		<h2>Leave a comment</h2>
	                        	</div>
	                            <div class="messages"></div>
	                            <div class="row">
	                                <div class="col-md-6">
	                                    <div class="form-group">
	                                        <input id="form_name" name="form_name" class="form-control ulockd-form-bps required" placeholder="Name" required="required" data-error="Name is required." type="text">
	                                        <div class="help-block with-errors"></div>
	                                    </div>
	                                </div>
	                                <div class="col-md-6">
	                                    <div class="form-group">
	                                        <input id="form_email" name="form_email" class="form-control ulockd-form-bps required email" placeholder="Email" required="required" data-error="Email is required." type="email">
	                                        <div class="help-block with-errors"></div>
	                                    </div>
	                                </div>
	                                <div class="col-md-12">
			                            <div class="form-group">
			                                <textarea id="form_message" name="form_message" class="form-control ulockd-bps-textarea required" rows="5" placeholder="Massage" required="required" data-error="Message is required."></textarea>
			                                <div class="help-block with-errors"></div>
			                            </div>
			                            <div class="form-group">
			                                <input id="form_botcheck" name="form_botcheck" class="form-control" value="" type="hidden">
			                                <button type="submit" class="btn btn-default btn-lg ulockd-btn-thm2" data-loading-text="Getting Few Sec...">SUBMIT</button>
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
@include('website.includes.js')

</body>

<!-- Mirrored from unlockdesizn.com/html/corporate/financepress/demo/blog-signle-left-sidebar.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 08 Nov 2020 08:11:48 GMT -->
</html>
