<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
<title>Home</title>
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
						<li><a href="<?php echo U('Index/index'); ?>" class="active">主页</a></li>
						<li><a href="<?php echo U('Tours/tours'); ?>">旅行</a></li>
						<li><a href="<?php echo U('Gallery/gallery'); ?>">相册</a></li>
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
	<div class="banner">
		<!-- banner-text Slider starts Here -->
				<script src="/Application/Home/Common/js/responsiveslides.min.js"></script>
				 <script>
					// You can also use "$(window).load(function() {"
						$(function () {
						// Slideshow 4
							$("#slider3").responsiveSlides({
							auto: true,
							pager:false,
							nav:true,
							speed: 500,
							namespace: "callbacks",
							before: function () {
							$('.events').append("<li>before event fired.</li>");
							},
							after: function () {
								$('.events').append("<li>after event fired.</li>");
							}
						});	
					});
				</script>
			<!--//End-slider-script -->
			<div class="banner-title"> 
				<div class="container">
					<div  id="top" class="callbacks_container">
						<ul class="rslides" id="slider3">
							<li>
								<h5>我在这里欢笑 我在这里哭泣</h5>
								<h1></h1>
							</li>
							<li>
								<h5>我在这里活着 也在这儿死去</h5>
								<h1></h1>
							</li>
							<li>
								<h5>我在这里祈祷 我在这里迷惘</h5>
								<h1>我在这里寻找 在这里失去</h1>
							</li>
						</ul>	
					</div>
				</div>
            </div>	
	</div>		
	<div class="banner-bottom">
		<div class="container">
			<div class="row">
			<?php foreach($garinfo as $v){ ?>
				<div class="col-md-4 bb-grids">
					<a href="" class="thumbnail">
					  <img src="/Public/Uploads/<?php echo $v['image']; ?>" alt="">
					</a>
				</div>
			<?php } ?>
				<!-- <div class="col-md-4 bb-grids">
					<a href="singlepage.html" class="thumbnail">
					  <img src="/Application/Home/Common/images/img2.jpg" alt="">
					</a>
				</div>
				<div class="col-md-4 bb-grids">
					<a href="singlepage.html" class="thumbnail">
					  <img src="/Application/Home/Common/images/img3.jpg" alt="">
					</a>
				</div> -->
				<div class="clearfix"></div>
			</div>
			<!-- <div class="row"> -->
				<!-- <div class="col-md-4 bb-grids">
					<a href="singlepage.html" class="thumbnail">
					  <img src="/Application/Home/Common/images/img4.jpg" alt="">
					</a>
				</div> -->
				<!-- <div class="col-md-4 bb-grids">
					<a href="singlepage.html" class="thumbnail">
					  <img src="/Application/Home/Common/images/img5.jpg" alt="">
					</a>
				</div> -->
				<!-- <div class="col-md-4 bb-grids">
					<a href="singlepage.html" class="thumbnail">
					  <img src="/Application/Home/Common/images/img6.jpg" alt="">
					</a>
				</div> -->
				<!-- <div class="clearfix"> </div> -->
			<!-- </div> -->
		</div>	
	</div>	
	<div class="banner-bottom">
		<div class="container">
			<h3>这些  是我眼中的世界</h3>
			<p>每一天，每一秒，都会发现不一样的精彩，这些都是我眼中所看到的世界！她丰富，她精彩，我不想错过这个世界的每一分每一秒的精彩</p>
		</div>
	</div>	
	<div class="features">
		<div class="container">
			<h3>我的游记</h3>
			<div class="row">
			<?php foreach($info as $v){ ?>
				<div class="col-sm-6 col-md-4 featur-grids">
					<div class="thumbnail feature-thmbnl">
						<h4><?php echo $v['title']; ?></h4>
						<img src="/Public/Uploads/<?php echo $v['image']; ?>" alt="" width="320">
						<div class="caption">
							<h5><a href="<?php echo U('Blog/content').'?id='.$v['id']; ?>"><?php echo $v['keyword']; ?><a></h5>
							<p><?php echo $v['content']; ?></p>
							<a href="<?php echo U('Blog/content').'?id='.$v['id']; ?>" class="btn btn-primary hvr-rectangle-in">查看</a>
						</div>
					</div>
				</div>
			<?php } ?>

	<!--			<div class="col-sm-6 col-md-4 featur-grids">
					<div class="thumbnail feature-thmbnl">
						<h4>Gilla frinreet</h4>
						<img src="/Application/Home/Common/images/img8.jpg" alt="">
						<div class="caption">
							<h5><a href="singlepage.html">Aliquam erat volutpat<a></h5>
							<p>Donec vitae tellus non sem vulputate cursus. Aliquam erat volutpat. Proin ut est et sem rhoncus fringilla laoreet</p>
							<a href="singlepage.html" class="btn btn-primary hvr-rectangle-in">Read More</a>
						</div>
					</div>
				</div>
				<div class="col-sm-6 col-md-4 featur-grids">
					<div class="thumbnail feature-thmbnl">
						<h4>Gilla frinreet</h4>
						<img src="/Application/Home/Common/images/img9.jpg" alt="">
						<div class="caption">
							<h5><a href="singlepage.html">Aliquam erat volutpat<a></h5>
							<p>Donec vitae tellus non sem vulputate cursus. Aliquam erat volutpat. Proin ut est et sem rhoncus fringilla laoreet</p>
							<a href="singlepage.html" class="btn btn-primary hvr-rectangle-in">Read More</a>
						</div>
					</div>
				</div>  -->


				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
	
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
				<h3>关于</h3>	
				<p>aaaaaaaaaaaaaaaaaaaaaaaaaa,
				bbbbbbbbbbbbb,
				cccccccccc</p>
			</div>
			<div class="col-md-4 posts">
				<h3>放啥呢</h3>
				<div class="media">
					<div class="media-left">
						<a href="singlepage.html">
						  <img class="media-object thumbnail" src="/Application/Home/Common/images/img11.jpg" alt="">
						</a>
				    </div>
					<div class="media-body">
						<h4 class="media-heading"><a href="singlepage.html">北京</a></h4>
						<h5><?php echo date('Y-m-d'); ?></h5>
					</div>
				</div>
				<div class="media">
					<div class="media-left">
						<a href="singlepage.html">
						  <img class="media-object thumbnail" src="/Application/Home/Common/images/img10.jpg" alt="">
						</a>
				    </div>
					<div class="media-body">
						<h4 class="media-heading"><a href="singlepage.html">北京</a></h4>
						<h5><?php echo date('Y-m-d'); ?></h5>
					</div>
				</div>
				<div class="media">
					<div class="media-left">
						<a href="singlepage.html">
						  <img class="media-object thumbnail" src="/Application/Home/Common/images/img11.jpg" alt="">
						</a>
				    </div>
					<div class="media-body">
						<h4 class="media-heading"><a href="singlepage.html">北京</a></h4>
						<h5><?php echo date('Y-m-d'); ?></h5>
					</div>
				</div>
			</div>
			<div class="col-md-4 address">
				<h3>我的位置</h3>
				<p>北京
					海淀
					朝阳</p>
				<ul>
					<li><span></span>宇宙</li>
					<li><span class="ph-no"></span>1234567890123</li>
					<li><span class="mail"></span><a href="mailto:example@mail.com">test@163.com</a></li>
				</ul>
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>
	<!-- <div class="copy-right">
		<div class="container">
			<p>Copyright &copy; 2015.Company name All rights reserved.<a target="_blank" href="http://sc.chinaz.com/moban/">&#x7F51;&#x9875;&#x6A21;&#x677F;</a></p>
		</div>
	</div> -->