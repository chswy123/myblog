<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
<title>在风中·图集</title>
<link href="/Myblog/Home/Common/css/bootstrap.css" type="text/css" rel="stylesheet" media="all">
<link href="/Myblog/Home/Common/css/style.css" type="text/css" rel="stylesheet" media="all">
<!--web-font-->
<!-- <link href='http://fonts.useso.com/css?family=Playfair+Display:400,700,900,400italic,700italic,900italic' rel='stylesheet' type='text/css'> -->
<!-- <link href='http://fonts.useso.com/css?family=Roboto+Condensed:300italic,400italic,700italic,400,300,700' rel='stylesheet' type='text/css'> -->
<!--//web-font-->
<!-- Custom Theme files -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="" />
<!--<script type="Myblog/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>-->
<!-- //Custom Theme files -->
<!-- js -->
<!-- <script src="https://ajax.useso.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script> -->  
<!-- //js -->	
<!-- start-smoth-scrolling-->
<!--<script type="text/javascript" src="/Myblog/Home/Common/js/move-top.js"></script>
<script type="text/javascript" src="/Myblog/Home/Common/js/easing.js"></script>	-->
<script type="text/javascript">
		// jQuery(document).ready(function($) {
		// 	$(".scroll").click(function(event){		
		// 		event.preventDefault();
		// 		$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
		// 	});
		// });
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
							<!-- <li><a href="#"></a></li>
							<li><a href="#" class="fb"></a></li>
							<li><a href="#" class="gg"></a></li> -->
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
				<a class="navbar-brand" href=""><img src="/Myblog/Home/Common/images/logo.png" alt=""></a>
			</div>	
			<form class="navbar-form navbar-right" role="search">
				<div class="form-group">
					<!-- <input type="text" class="form-control" placeholder="Search"> -->
				</div>
				<!-- <button type="submit" class="btn btn-default" aria-label="Left Align">
					<span class="glyphicon glyphicon-search" aria-hidden="true"></span>
				</button> -->
			</form>	
		</div>	
	</div>
	<!--//header-->
	<div class="gallery">
		<div class="container">
			<ol class="breadcrumb">
				<li><a href="<?php echo U('Index/index');?>">Home</a></li>
				<li>Gallery</li>
			</ol>
			<div class="tesimonial"><h3>在路上·图集</h3></div>
			<div class="gallry-info">
				<?php foreach($info as $v){ ?>
				<div class="col-md-3 gallery-grids">
					<a href="/Public/Uploads/<?php echo $v['image']; ?>" class="b-link-stripe b-animate-go  swipebox"  title="">
						<img src="/Public/Uploads/<?php echo $v['image']; ?>" class="img-responsive glry-img" alt="">
						<div class="b-wrapper">
							<span class="b-animate b-from-left    b-delay03 ">
								<img class="img-responsive zoom-img img-circle" src="/Myblog/Home/Common/images/e.png" alt=""/>
							</span>					
						</div>
					</a>
				</div>
				<?php } ?>
				<div class="clearfix"> </div>
			</div>
			<!-- <div class="gallry-info">
				<div class="clearfix"> </div>
			</div> -->
			<!-- <div class="gallry-info">
				<div class="clearfix"> </div>
			</div> -->
		</div>	
	</div>	
	<link rel="stylesheet" href="/Myblog/Home/Common/css/swipebox.css">
		<!--<script src="/Myblog/Home/Common/js/jquery.swipebox.min.js"></script> -->
			<script type="text/javascript">
				// jQuery(function($) {
				// 	$(".swipebox").swipebox();
				// });
			</script>
	
	<!--smooth-scrolling-of-move-up-->
		<script type="text/javascript">
			// $(document).ready(function() {
				/*
				var defaults = {
					containerID: 'toTop', // fading element id
					containerHoverID: 'toTopHover', // fading element hover id
					scrollSpeed: 1200,
					easingType: 'linear' 
				};
				*/
				
				// $().UItoTop({ easingType: 'easeOutQuart' });
				
			// });
		</script>
		<a href="#" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
	<!--//smooth-scrolling-of-move-up-->
	<!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <!--<script src="/Myblog/Home/Common/js/bootstrap.js"></script>-->
</body>
</html>

<div class="footer">
		<div class="container">
			<div class="col-md-4 about">
				<h3>关于</h3>	
				<p>个人网站，不做任何商业用途</p>
			</div>
			<div class="col-md-4 posts">
				<h3>其他</h3>
				<div class="media">
					<div class="media-left">
						<a href="#">
						  <img class="media-object thumbnail" src="/Myblog/Home/Common/images/img11.jpg" alt="">
						</a>
				    </div>
					<div class="media-body">
						<h4 class="media-heading"><a href="singlepage.html">北京</a></h4>
						<h5><?php echo date('Y-m-d'); ?></h5>
					</div>
				</div>
				<div class="media">
					<div class="media-left">
						<a href="#">
						  <img class="media-object thumbnail" src="/Myblog/Home/Common/images/img10.jpg" alt="">
						</a>
				    </div>
					<div class="media-body">
						<h4 class="media-heading"><a href="singlepage.html">北京</a></h4>
						<h5><?php echo date('Y-m-d'); ?></h5>
					</div>
				</div>
				<div class="media">
					<div class="media-left">
						<a href="#">
						  <img class="media-object thumbnail" src="/Myblog/Home/Common/images/img11.jpg" alt="">
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
					<li><span></span>歌者文明</li>
					<li><span class="ph-no"></span>3.141592654</li>
					<li><span class="mail"></span><a href="mailto:example@mail.com">v24myway@163.com</a></li>
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