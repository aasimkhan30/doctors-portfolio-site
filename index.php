<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>
<head>
<title>Ashish Cosmetic Clinic | Home </title>
<link href="css/pignose.layerslider.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/bootstrap-3.1.1.min.css" rel='stylesheet' type='text/css' />
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<!-- for-mobile-apps -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Prevention Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, Sony Ericsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //for-mobile-apps -->
<!--fonts-->
<link href="https://fonts.googleapis.com/css?family=Poiret+One" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i" rel="stylesheet"><!--//fonts-->	
<!-- js -->
<script type="text/javascript" src="js/jquery.min.js"></script>
<!-- js -->
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="js/bootstrap.min.js"></script>
<script src="js/modernizr.custom.js"></script>
<link rel="stylesheet" href="css/font-awesome.min.css" />
        <link rel="stylesheet" type="text/css" href="css/custom.css" />
		<script type="text/javascript" src="js/modernizr.custom.79639.js"></script>		
		<!-- js for news -->
		<script src="js/jquery.easing.min.js"></script>
		<script type="text/javascript" src="js/pignose.layerslider.js"></script>
		<script type="text/javascript">
			//<![CDATA[
				$(window).load(function() {
					$('#visual').pignoseLayerSlider({
						play    : '.btn-play',
						pause   : '.btn-pause',
						next    : '.btn-next',
						prev    : '.btn-prev'
					});
				});
			//]]>
			</script>
		<!-- /js for news -->
		
		<!-- for smooth scrolling -->
		<script type="text/javascript" src="js/move-top.js"></script>
		<script type="text/javascript" src="js/easing.js"></script>
		<script type="text/javascript">
		jQuery(document).ready(function($) {
			$(".scroll").click(function(event){		
				event.preventDefault();
				$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
			});
		});
		</script>
		<!-- //for smooth scrolling -->
</head>
<body>
	<!-- header -->
	<?php require 'includes/header.php' ?>
	<!-- //header -->
	<div class="demo-2">	
		<header class="logo">
			<h1><a class="cd-logo link link--takiri" href="index.php">Dr. Ashish Ghughe <span>cosmetic surgeon</span></a></h1>
		</header>
            <div id="slider" class="sl-slider-wrapper">

				<div class="sl-slider">
				
					<div class="sl-slide" data-orientation="horizontal" data-slice1-rotation="-25" data-slice2-rotation="-25" data-slice1-scale="2" data-slice2-scale="2">
						<div class="sl-slide-inner">
							<div class="bg-img bg-img-1"></div>
							<h3>Tummy Tuck</h3>
							<blockquote><p>You have just dined, and however scrupulously the slaughterhouse is concealed in the graceful distance of miles, there is complicity.</p></blockquote>
						</div>
					</div>
					
					<div class="sl-slide" data-orientation="vertical" data-slice1-rotation="10" data-slice2-rotation="-15" data-slice1-scale="1.5" data-slice2-scale="1.5">
						<div class="sl-slide-inner">
							<div class="bg-img bg-img-2"></div>
							<h3>LIPOSUCTION</h3>
							<blockquote><p>The pressure on people to have good looks and a great body is increasing rapidly. It is also making liposuction surgery the most common aesthetic procedure performed across the world and India as well. It has also happened because of the increased peer pressure, expected outcomes, changing lifestyles, and the increased safety associated with these procedures.</p></blockquote>
						</div>
					</div>
					
					<div class="sl-slide" data-orientation="horizontal" data-slice1-rotation="3" data-slice2-rotation="3" data-slice1-scale="2" data-slice2-scale="1">
						<div class="sl-slide-inner">
							<div class="bg-img bg-img-3"></div>
							<h3>Breast Augmentation</h3>
							<blockquote><p>Perky and full looking breasts seem to make a woman feel more complete. Thanks to advances in science, this can be a reality for any woman. More importantly, breast implants have been proven to be safe and does not affect functions of the breast. Nor do they cause or increase the chance of tumors or breast cancer. Even breast feeding can be done normally later.</p></blockquote>
						</div>
					</div>
				</div><!-- /sl-slider -->

				<nav id="nav-dots" class="nav-dots">
					<span class="nav-dot-current"></span>
					<span></span>
					<span></span>
				</nav>

			</div><!-- /slider-wrapper -->

        </div>
		<script type="text/javascript" src="js/jquery.ba-cond.min.js"></script>
		<script type="text/javascript" src="js/jquery.slitslider.js"></script>
		<script type="text/javascript">	
			$(function() {
			
				var Page = (function() {

					var $nav = $( '#nav-dots > span' ),
						slitslider = $( '#slider' ).slitslider( {
							onBeforeChange : function( slide, pos ) {

								$nav.removeClass( 'nav-dot-current' );
								$nav.eq( pos ).addClass( 'nav-dot-current' );

							}
						} ),

						init = function() {

							initEvents();
							
						},
						initEvents = function() {

							$nav.each( function( i ) {
							
								$( this ).on( 'click', function( event ) {
									
									var $dot = $( this );
									
									if( !slitslider.isActive() ) {

										$nav.removeClass( 'nav-dot-current' );
										$dot.addClass( 'nav-dot-current' );
									
									}
									
									slitslider.jump( i + 1 );
									return false;
								
								} );
								
							} );

						};

						return { init : init };

				})();

				Page.init();

				/**
				 * Notes: 
				 * 
				 * example how to add items:
				 */

				/*
				
				var $items  = $('<div class="sl-slide sl-slide-color-2" data-orientation="horizontal" data-slice1-rotation="-5" data-slice2-rotation="10" data-slice1-scale="2" data-slice2-scale="1"><div class="sl-slide-inner bg-1"><div class="sl-deco" data-icon="t"></div><h2>some text</h2><blockquote><p>bla bla</p><cite>Margi Clarke</cite></blockquote></div></div>');
				
				// call the plugin's add method
				ss.add($items);

				*/
			
			});
		</script>
		
		<!-- banner-bottom -->
		<div class="banner-bottom">
			<div class="container">
				<div class="col-md-4 timing">
					<div class="opening-hours">
						<h3><i class="fa fa-clock-o"></i>Opening Hours</h3>
						<ul>
							<li>Monday - Friday</li>
							<li>9.00 AM - 8.00 PM</li>
							<div class="clearfix"></div>
						</ul>
						<ul>
							<li>Saturday</li>
							<li>9.00 AM - 8.00 PM</li>
							<div class="clearfix"></div>
						</ul>
						<ul>
							<li>Sunday</li>
							<li>9.30 AM - 6.00 PM</li>
							<div class="clearfix"></div>
						</ul>
					</div>
					<div class="help">
						<h3><i class="fa fa-pencil-square-o"></i>Need Help?</h3>
						<p>Just Make an Appointment to Get Help From Our Experts</p>
						<a href="#" class="btn btn-default btn-default_2 pull-left" data-toggle="modal" data-target="#applyModal_1">Request an Appointment</a>
					</div>
				</div>
				<div class="col-md-4 abt-img">
					<img src="images/abt1.png" alt="doctor" title="doctor" />
				</div>
				<div class="col-md-4 abt-dec">
					<h2>Dr. Ashish Ghughe</h2>
					<p class="diff">Lorem Ipsum is simply dummy text of the printing and typesetting industry</p>
					<p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia</p>
					<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC.</p>
					
				</div>
				<div class="clearfix"></div>
			</div>
		</div>		
		<!-- //banner-bottom -->
		
		<!-- Stats -->

		<!--
		<div class="stats">
			<div class="container">
				<p class="slideanim">Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance.</p>
				<div class="stats-info">
					<div class="col-md-3 col-sm-3 stats-grid slideanim">
						<i class="fa fa-smile-o"></i>
						<div class='numscroller numscroller-big-bottom' data-slno='1' data-min='0' data-max='18000' data-delay='.5' data-increment="50">18000</div>
						<p class="stats-info">Happy Smiles</p>
					</div>
					<div class="col-md-3 col-sm-3 stats-grid slideanim">
						<i class="fa fa-facebook"></i>
						<div class='numscroller numscroller-big-bottom' data-slno='1' data-min='0' data-max='1700' data-delay='.5' data-increment="5">1700</div>
						<p class="stats-info">Facebook Likes</p>
					</div>
					<div class="col-md-3 col-sm-3 stats-grid slideanim">
						<i class="fa fa-twitter"></i>
						<div class='numscroller numscroller-big-bottom' data-slno='1' data-min='0' data-max='21500' data-delay='.5' data-increment="20">21500</div>
						<p class="stats-info">Twitter Followers</p>
					</div>
					<div class="col-md-3 col-sm-3 stats-grid slideanim">
						<i class="fa fa-flask"></i>
						<div class='numscroller numscroller-big-bottom' data-slno='1' data-min='0' data-max='285' data-delay='.5' data-increment="1">285</div>
						<p class="stats-info">Lorem Ipsum</p>
					</div>
					<div class="clearfix"></div>
				</div>

			</div>
		</div>
		-->
		<!-- //Stats -->
		<script type="text/javascript" src="js/numscroller-1.0.js"></script>
		
		<!-- tabs -->	
		<div class="vertical-tabs">
			<div class="container">
				<h3 class="title text-center">Highlight Procedures</h3>
				<div class="row">
					<div class="col-lg-12 col-md-12 col-sm-8 col-xs-9 bhoechie-tab-container">
						<div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 bhoechie-tab-menu">
						  <div class="list-group">
							<a href="#" class="list-group-item active text-center">
							    Tummy Tuck
							</a>
							<a href="#" class="list-group-item text-center">
							    Liposuction
							</a>
							<a href="#" class="list-group-item text-center">
							    Breast Augmentation
							</a>
							<a href="#" class="list-group-item text-center">
							    Mommy Makeover
							</a>
							<a href="#" class="list-group-item text-center">
							    Male Fitness Surgery
							</a>
						  </div>
						</div>
						<div class="col-lg-9 col-md-9 col-sm-9 col-xs-9 bhoechie-tab">
							<!-- flight section -->
							<div class="bhoechie-tab-content active">
								<div class="services">
									<div class="ser-img">
										<img src="images/ser1.jpg" title="service" alt="" />
									</div>
									<div class="ser-info">
										<h3>Contrary to popular belief, Lorem Ipsum is not simply random text</h3>
										<p>The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 
											1.10.32 and 1.10.33 from "de Finibus Bonorum et Malorum" by Cicero are also reproduced in their 
											by English versions from the 1914 translation by H. Rackham.
										</p>
										<p>Sed ut perspiciatis unde omnis iste natus error sit, totam rem aperiam, eaque
										    ipsa quae ab illo inventore dicta sunt explicabo
										</p>
										<a href="single.html">Read More</a>
									</div>
									<div class="clearfix"></div>
								</div>
							</div>
							<!-- train section -->
							<div class="bhoechie-tab-content">
								<div class="services">
									<div class="ser-img">
										<img src="images/ser2.jpg" title="service" alt="" />
									</div>
									<div class="ser-info">
										<h3>At vero eos et accusamus et iusto dignissimos ducimus qui blanditiis</h3>
										<p>The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 
											1.10.32 and 1.10.33 from "de Finibus Bonorum et Malorum" by Cicero are also reproduced in their 
											by English versions from the 1914 translation by H. Rackham.
										</p>
										<p>Sed ut perspiciatis unde omnis iste natus error sit, totam rem aperiam, eaque
										    ipsa quae ab illo inventore dicta sunt explicabo
										</p>
										<a href="single.html">Read More</a>
									</div>
									<div class="clearfix"></div>
								</div>
							</div>
				
							<!-- hotel search -->
							<div class="bhoechie-tab-content">
								<div class="services">
									<div class="ser-img">
										<img src="images/ser3.jpg" title="service" alt="" />
									</div>
									<div class="ser-info">
										<h3>On the other hand, we denounce with righteous indignation</h3>
										<p>The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 
											1.10.32 and 1.10.33 from "de Finibus Bonorum et Malorum" by Cicero are also reproduced in their 
											by English versions from the 1914 translation by H. Rackham.
										</p>
										<p>Sed ut perspiciatis unde omnis iste natus error sit, totam rem aperiam, eaque
										    ipsa quae ab illo inventore dicta sunt explicabo
										</p>
										<a href="single.html">Read More</a>
									</div>
									<div class="clearfix"></div>
								</div>
							</div>
							<div class="bhoechie-tab-content">
								<div class="services">
									<div class="ser-img">
										<img src="images/ser4.jpg" title="service" alt="" />
									</div>
									<div class="ser-info">
										<h3>Laboris nisi ut aliquip ex ea commodo consequat</h3>
										<p>The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 
											1.10.32 and 1.10.33 from "de Finibus Bonorum et Malorum" by Cicero are also reproduced in their 
											by English versions from the 1914 translation by H. Rackham.
										</p>
										<p>Sed ut perspiciatis unde omnis iste natus error sit, totam rem aperiam, eaque
										    ipsa quae ab illo inventore dicta sunt explicabo
										</p>
										<a href="single.html">Read More</a>
									</div>
									<div class="clearfix"></div>
								</div>
							</div>
							<div class="bhoechie-tab-content">
								<div class="services">
									<div class="ser-img">
										<img src="images/ser5.jpg" title="service" alt="" />
									</div>
									<div class="ser-info">
										<h3>Temporibus autem quibusdam et aut officiis debitis</h3>
										<p>The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 
											1.10.32 and 1.10.33 from "de Finibus Bonorum et Malorum" by Cicero are also reproduced in their 
											by English versions from the 1914 translation by H. Rackham.
										</p>
										<p>Sed ut perspiciatis unde omnis iste natus error sit, totam rem aperiam, eaque
										    ipsa quae ab illo inventore dicta sunt explicabo
										</p>
										<a href="single.html">Read More</a>
									</div>
									<div class="clearfix"></div>
								</div>
							</div>
						</div>
					</div>
			  </div>
			</div>
		</div>
		<script type="text/javascript" src="js/tabs.js"></script>		
		<!-- //tabs -->
	
		<!-- news -->

		<!-- /news -->
		
		<!-- quick links -->
	

		<!-- //quick links -->
		
		<!-- book an appointment -->
		<!-- //book an appointment -->
		
		<!-- news letter -->
		<!--
		<div class="subscribe text-center">
			<div class="container">
				<h3>Subscribe to Our Newsletter</h3>
				<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s. Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature.</p>
				<form>
					<input placeholder="Email Address" class="user" type="text" required="">
					<input type="submit" value="Subscribe">
				</form>
				<p class="spam">We never share your information or use it to spam you</p>
			</div>
		</div>-->
		<!-- //news letter -->
		
		<!-- footer -->
		<?php require 'includes/footer.php' ;?>
		<!-- //footer -->
		<script type="text/javascript">
						$(document).ready(function() {
							/*
							var defaults = {
					  			containerID: 'toTop', // fading element id
								containerHoverID: 'toTopHover', // fading element hover id
								scrollSpeed: 1200,
								easingType: 'linear' 
					 		};
							*/
							
							$().UItoTop({ easingType: 'easeOutQuart' });
							
						});
					</script>
				<a href="#" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
</body>
</html>