<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
<title>Gallery</title>
<link href="/Application/Home/Common/css/bootstrap.css" type="text/css" rel="stylesheet" media="all">
<link href="/Application/Home/Common/css/style.css" type="text/css" rel="stylesheet" media="all">
<!--web-font-->
<!-- <link href='http://fonts.useso.com/css?family=Playfair+Display:400,700,900,400italic,700italic,900italic' rel='stylesheet' type='text/css'> -->
<!-- <link href='http://fonts.useso.com/css?family=Roboto+Condensed:300italic,400italic,700italic,400,300,700' rel='stylesheet' type='text/css'> -->
<!--//web-font-->
<!-- Custom Theme files -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Excursion Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
	Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //Custom Theme files -->
<!-- js -->
<!-- <script src="https://ajax.useso.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script> -->  
<!-- //js -->	
<!-- start-smoth-scrolling-->
<script type="text/javascript" src="/Application/Home/Common/js/move-top.js"></script>
<script type="text/javascript" src="/Application/Home/Common/js/easing.js"></script>	
<script type="text/javascript">
		jQuery(document).ready(function($) {
			$(".scroll").click(function(event){		
				event.preventDefault();
				$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
			});
		});
</script>
<!--//end-smoth-scrolling-->
</head>
<body>
	<!--navigation-->
	<div class="top-nav">
		<nav class="navbar navbar-default">
			<div class="container">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
				</div>
				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
					<ul class="nav navbar-nav navbar-left">
						<li><a href="<?php echo U('Index/index'); ?>" >主页</a></li>
						<li><a href="<?php echo U('Tours/tours'); ?>">旅行</a></li>
						<li><a href="<?php echo U('Gallery/gallery'); ?>" class="active">相册</a></li>
						<li><a href="<?php echo U('Feeling/feeling'); ?>">心情</a></li>
						<li><a href="<?php echo U('Blog/blog'); ?>">博文</a></li>
						<li><a href="">Contact Us</a></li>
					</ul>	
					<div class="social-icons">
						<ul>
							<li><a href="#"></a></li>
							<li><a href="#" class="fb"></a></li>
							<li><a href="#" class="gg"></a></li>
						</ul>	
					</div>
					<div class="clearfix"> </div>
				</div>
			</div>	
		</nav>		
	</div>	
	<!--navigation-->
	<!--header-->
	<div class="header">
		<div class="container">
			<div class="navbar-header">
				<a class="navbar-brand" href="index.html"><img src="/Application/Home/Common/images/logo.png" alt=""></a>
			</div>	
			<form class="navbar-form navbar-right" role="search">
				<div class="form-group">
					<input type="text" class="form-control" placeholder="Search">
				</div>
				<button type="submit" class="btn btn-default" aria-label="Left Align">
					<span class="glyphicon glyphicon-search" aria-hidden="true"></span>
				</button>
			</form>	
		</div>	
	</div>
	<!--//header-->
	<div class="gallery">
		<div class="container">
			<ol class="breadcrumb">
				<li><a href="index.html">Home</a></li>
				<li>Gallery</li>
			</ol>
			<div class="tesimonial"><h3>Gallery</h3></div>
			<div class="gallry-info">
				<div class="col-md-3 gallery-grids">
					<a href="/Application/Home/Common/images/img33.jpg" class="b-link-stripe b-animate-go  swipebox"  title="">
						<img src="/Application/Home/Common/images/img33.jpg" class="img-responsive glry-img" alt="">
						<div class="b-wrapper">
							<span class="b-animate b-from-left    b-delay03 ">
								<img class="img-responsive zoom-img img-circle" src="/Application/Home/Common/images/e.png" alt=""/>
							</span>					
						</div>
					</a>
				</div>
				<div class="col-md-3 gallery-grids">
					<a href="/Application/Home/Common/images/img31.jpg" class="b-link-stripe b-animate-go  swipebox"  title="">
						<img src="/Application/Home/Common/images/img34.jpg" class="img-responsive glry-img" alt="">
						<div class="b-wrapper">
							<span class="b-animate b-from-left    b-delay03 ">
								<img class="img-responsive zoom" src="/Application/Home/Common/images/e.png" alt=""/>
							</span>					
						</div>
					</a>
				</div>
				<div class="col-md-3 gallery-grids">
					<a href="/Application/Home/Common/images/img33.jpg" class="b-link-stripe b-animate-go  swipebox"  title="">
						<img src="/Application/Home/Common/images/img35.jpg" class="img-responsive glry-img " alt="">
						<div class="b-wrapper">
							<span class="b-animate b-from-left    b-delay03 ">
								<img class="img-responsive zoom" src="/Application/Home/Common/images/e.png" alt=""/>
							</span>					
						</div>
					</a>
				</div>
				<div class="col-md-3 gallery-grids">
					<a href="/Application/Home/Common/images/img32.jpg" class="b-link-stripe b-animate-go  swipebox"  title="">
						<img src="/Application/Home/Common/images/img36.jpg" class="img-responsive glry-img" alt="">
						<div class="b-wrapper">
							<span class="b-animate b-from-left    b-delay03 ">
								<img class="img-responsive zoom" src="/Application/Home/Common/images/e.png" alt=""/>
							</span>					
						</div>
					</a>
				</div>
				<div class="clearfix"> </div>
			</div>
			<div class="gallry-info">
				<div class="col-md-3 gallery-grids">
					<a href="/Application/Home/Common/images/img37.jpg" class="b-link-stripe b-animate-go  swipebox"  title="">
						<img src="/Application/Home/Common/images/img37.jpg" class="img-responsive glry-img" alt="">
						<div class="b-wrapper">
							<span class="b-animate b-from-left    b-delay03 ">
								<img class="img-responsive zoom-img img-circle" src="/Application/Home/Common/images/e.png" alt=""/>
							</span>					
						</div>
					</a>
				</div>
				<div class="col-md-3 gallery-grids">
					<a href="/Application/Home/Common/images/img38.jpg" class="b-link-stripe b-animate-go  swipebox"  title="">
						<img src="/Application/Home/Common/images/img38.jpg" class="img-responsive glry-img" alt="">
						<div class="b-wrapper">
							<span class="b-animate b-from-left    b-delay03 ">
								<img class="img-responsive zoom" src="/Application/Home/Common/images/e.png" alt=""/>
							</span>					
						</div>
					</a>
				</div>
				<div class="col-md-3 gallery-grids">
					<a href="/Application/Home/Common/images/img39.jpg" class="b-link-stripe b-animate-go  swipebox"  title="">
						<img src="/Application/Home/Common/images/img39.jpg" class="img-responsive glry-img " alt="">
						<div class="b-wrapper">
							<span class="b-animate b-from-left    b-delay03 ">
								<img class="img-responsive zoom" src="/Application/Home/Common/images/e.png" alt=""/>
							</span>					
						</div>
					</a>
				</div>
				<div class="col-md-3 gallery-grids">
					<a href="/Application/Home/Common/images/img40.jpg" class="b-link-stripe b-animate-go  swipebox"  title="">
						<img src="/Application/Home/Common/images/img40.jpg" class="img-responsive glry-img" alt="">
						<div class="b-wrapper">
							<span class="b-animate b-from-left    b-delay03 ">
								<img class="img-responsive zoom" src="/Application/Home/Common/images/e.png" alt=""/>
							</span>					
						</div>
					</a>
				</div>
				<div class="clearfix"> </div>
			</div>
			<div class="gallry-info">
				<div class="col-md-3 gallery-grids">
					<a href="/Application/Home/Common/images/img41.jpg" class="b-link-stripe b-animate-go  swipebox"  title="">
						<img src="/Application/Home/Common/images/img41.jpg" class="img-responsive glry-img" alt="">
						<div class="b-wrapper">
							<span class="b-animate b-from-left    b-delay03 ">
								<img class="img-responsive zoom-img img-circle" src="/Application/Home/Common/images/e.png" alt=""/>
							</span>					
						</div>
					</a>
				</div>
				<div class="col-md-3 gallery-grids">
					<a href="/Application/Home/Common/images/img42.jpg" class="b-link-stripe b-animate-go  swipebox"  title="">
						<img src="/Application/Home/Common/images/img42.jpg" class="img-responsive glry-img" alt="">
						<div class="b-wrapper">
							<span class="b-animate b-from-left    b-delay03 ">
								<img class="img-responsive zoom" src="/Application/Home/Common/images/e.png" alt=""/>
							</span>					
						</div>
					</a>
				</div>
				<div class="col-md-3 gallery-grids">
					<a href="/Application/Home/Common/images/img28.jpg" class="b-link-stripe b-animate-go  swipebox"  title="">
						<img src="/Application/Home/Common/images/img28.jpg" class="img-responsive glry-img " alt="">
						<div class="b-wrapper">
							<span class="b-animate b-from-left    b-delay03 ">
								<img class="img-responsive zoom" src="/Application/Home/Common/images/e.png" alt=""/>
							</span>					
						</div>
					</a>
				</div>
				<div class="col-md-3 gallery-grids">
					<a href="/Application/Home/Common/images/img24.jpg" class="b-link-stripe b-animate-go  swipebox"  title="">
						<img src="/Application/Home/Common/images/img24.jpg" class="img-responsive glry-img" alt="">
						<div class="b-wrapper">
							<span class="b-animate b-from-left    b-delay03 ">
								<img class="img-responsive zoom" src="/Application/Home/Common/images/e.png" alt=""/>
							</span>					
						</div>
					</a>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>	
	</div>	
	<link rel="stylesheet" href="/Application/Home/Common/css/swipebox.css">
		<script src="/Application/Home/Common/js/jquery.swipebox.min.js"></script> 
			<script type="text/javascript">
				jQuery(function($) {
					$(".swipebox").swipebox();
				});
			</script>
	
	<!--smooth-scrolling-of-move-up-->
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
	<!--//smooth-scrolling-of-move-up-->
	<!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="/Application/Home/Common/js/bootstrap.js"></script>
</body>
</html>

<div class="footer">
		<div class="container">
			<div class="col-md-4 about">
				<h3>About Us</h3>	
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
			</div>
			<div class="col-md-4 posts">
				<h3>Popular Posts</h3>
				<div class="media">
					<div class="media-left">
						<a href="singlepage.html">
						  <img class="media-object thumbnail" src="/Application/Home/Common/images/img11.jpg" alt="">
						</a>
				    </div>
					<div class="media-body">
						<h4 class="media-heading"><a href="singlepage.html">Lorest Nesto</a></h4>
						<h5>April 17, 2015</h5>
					</div>
				</div>
				<div class="media">
					<div class="media-left">
						<a href="singlepage.html">
						  <img class="media-object thumbnail" src="/Application/Home/Common/images/img10.jpg" alt="">
						</a>
				    </div>
					<div class="media-body">
						<h4 class="media-heading"><a href="singlepage.html">Lorest Nesto</a></h4>
						<h5>April 17, 2015</h5>
					</div>
				</div>
				<div class="media">
					<div class="media-left">
						<a href="singlepage.html">
						  <img class="media-object thumbnail" src="/Application/Home/Common/images/img11.jpg" alt="">
						</a>
				    </div>
					<div class="media-body">
						<h4 class="media-heading"><a href="singlepage.html">Lorest Nesto</a></h4>
						<h5>April 17, 2015</h5>
					</div>
				</div>
			</div>
			<div class="col-md-4 address">
				<h3>Our address</h3>
				<p>Investigationes demonstraverunt lectores legere me lius quod ii legunt saepius. Claritas est etiam processus dynamicus,
					luptatum zzril delenit augue duis dolore te feugait nulla facilisi. Nam liber tempor cum soluta </p>
				<ul>
					<li><span></span>Moonshine St. 14/05 Light, Jupiter</li>
					<li><span class="ph-no"></span>+00 (123) 456 78 90</li>
					<li><span class="mail"></span><a href="mailto:example@mail.com">mail@example.com</a></li>
				</ul>
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>
	<div class="copy-right">
		<div class="container">
			<p>Copyright &copy; 2015.Company name All rights reserved.<a target="_blank" href="http://sc.chinaz.com/moban/">&#x7F51;&#x9875;&#x6A21;&#x677F;</a></p>
		</div>
	</div>