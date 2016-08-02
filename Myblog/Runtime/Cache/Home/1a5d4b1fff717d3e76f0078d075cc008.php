<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
<title>故事</title>
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
						<li><a href="<?php echo U('Gallery/gallery'); ?>">相册</a></li>
						<li><a href="<?php echo U('Feeling/feeling'); ?>">心情</a></li>
						<li><a href="<?php echo U('Blog/blog'); ?>" class="active">博文</a></li>
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
	<!--single-page-->
	<div class="single-page">
		<div class="container">
			<div class="work-title sngl-title">
				<ol class="breadcrumb">
					<li><a href="<?php echo U('Index/index');?>">Home</a></li>
					<li class="active">story</li>
				</ol>
			</div>
			<div class="col-md-8 single-page-left">
				<div class="single-page-info">
					<img src="/Public/Uploads/<?php echo $info['image']; ?>" alt=""/>
					<h5><?php echo $info['keyword']; ?></h5>
					<p><?php echo $info['content']; ?></p>  
					
					<div class="comment-icons">
						<ul>
							<li><span></span><a href="#"><?php echo $info['tag']; ?></a> </li>
							<li><span class="clndr"></span><?php echo $info['date']; ?></li>
							<li><span class="admin"></span> <a href="#">Admin</a></li>
							<!-- <li><span class="cmnts"></span> <a href="#">5 comments</a></li> -->
							<li><a href="#" class="like"><?php echo $info['dianzan']; ?></a></li>
						</ul>
					</div>
				</div>	
				<!-- <div class="admin-text"> -->
					<!-- <h5>Written By Admin</h5>
					<div class="admin-text-left">
						<a href="#"><img src="/Myblog/Home/Common/images/icon1.png" alt=""/></a>
					</div>
					<div class="admin-text-right">
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit,There are many variations of passages of Lorem Ipsum available, 
						sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
						<span>View all posts by:<a href="#"> Admin </a></span>
					</div>
					<div class="clearfix"> </div> -->
				<!-- </div> -->
				<!--related-posts-->
				<div class="row related-posts">
					<!-- <h4>Related Posts</h4>
					<div class="col-xs-6 col-md-3 related-grids">
						<a href="singlepage.html" class="thumbnail">
							<img src="/Myblog/Home/Common/images/img1.jpg" alt=""/>
						</a>
						<h5><a href="singlepage.html">Lorem Ipsum is simply</a></h5>
					</div>	
					<div class="col-xs-6 col-md-3 related-grids">
						<a href="singlepage.html" class="thumbnail">
							<img src="/Myblog/Home/Common/images/img2.jpg" alt=""/>
						</a>
						<h5><a href="singlepage.html">Lorem Ipsum is simply</a></h5>
					</div>
					<div class="col-xs-6 col-md-3 related-grids">
						<a href="singlepage.html" class="thumbnail">
							<img src="/Myblog/Home/Common/images/img3.jpg" alt=""/>
						</a>
						<h5><a href="singlepage.html">Lorem Ipsum is simply</a></h5>
					</div>
					<div class="col-xs-6 col-md-3 related-grids">
						<a href="singlepage.html" class="thumbnail">
							<img src="/Myblog/Home/Common/images/img4.jpg" alt=""/>
						</a>
						<h5><a href="singlepage.html">Lorem Ipsum is simply</a></h5>
					</div>		 -->			
				</div>
				<!--//related-posts-->

	
				<div class="response">
					<!-- <h4>Responses</h4> -->
					<div class="media response-info">
						<!-- <div class="media-left response-text-left">
							<a href="#">
								<img class="media-object" src="/Myblog/Home/Common/images/icon1.png" alt=""/>
							</a>
							<h5><a href="#">Admin</a></h5>
						</div> -->
						<div class="media-body response-text-right">
							<!-- <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit,There are many variations of passages of Lorem Ipsum available, 
								sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
							<ul>
								<li>MARCH 21, 2013</li>
								<li><a href="singlepage.html">Reply</a></li>
							</ul> -->
							<div class="media response-info">
								<div class="media-left response-text-left">
									<!-- <a href="#">
										<img class="media-object" src="/Myblog/Home/Common/images/icon1.png" alt=""/>
									</a> -->
									<!-- <h5><a href="#">Admin</a></h5> -->
								</div>
							<!-- 	<div class="media-body response-text-right">
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit,There are many variations of passages of Lorem Ipsum available, 
										sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
									<ul>
										<li>MARCH 21, 2014</li>
										<li><a href="singlepage.html">Reply</a></li>
									</ul>		
								</div> -->
								<div class="clearfix"> </div>
							</div>
						</div>
						<div class="clearfix"> </div>
					</div>
					<div class="media response-info">
						<div class="media-left response-text-left">
							<!-- <a href="#">
								<img class="media-object" src="/Myblog/Home/Common/images/icon1.png" alt=""/>
							</a> -->
							<!-- <h5><a href="#">Admin</a></h5> -->
						</div>
					<!-- 	<div class="media-body response-text-right">
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit,There are many variations of passages of Lorem Ipsum available, 
								sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
							<ul>
								<li>MARCH 21, 2013</li>
								<li><a href="singlepage.html">Reply</a></li>
							</ul>		
						</div> -->
						<div class="clearfix"> </div>
					</div>
				</div>	

				
				<div class="coment-form">
			<!--评论	
					<h4>Leave your comment</h4>
					<form>
						<input type="text" value="Name " onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Name';}" required="">
						<input type="email" value="Email (will not be published)*" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email (will not be published)*';}" required="">
						<input type="text" value="Website" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Website';}" required="">
						<textarea type="text"  onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Your Comment...';}" required="">Your Comment...</textarea>
						<input type="submit" value="Submit Comment" >
					</form>
					-->
				</div>		
			</div>	
			<div class="col-md-4 single-page-right">
				<div class="category">
					<!-- <h4>Categories</h4> -->
					<div class="list-group">
						<!-- <a href="singlepage.html" class="list-group-item">Cras justo odio</a>
						<a href="singlepage.html" class="list-group-item">Dapibus ac facilisis in</a>
						<a href="singlepage.html" class="list-group-item">Morbi leo risus</a>
						<a href="singlepage.html" class="list-group-item">Porta ac consectetur ac</a>
						<a href="singlepage.html" class="list-group-item">Vestibulum at eros</a>
						<a href="singlepage.html" class="list-group-item">Cras justo odio</a>
						<a href="singlepage.html" class="list-group-item">Cras justo odio</a>
						<a href="singlepage.html" class="list-group-item">Cras justo odio</a> -->
					</div>
				</div>	
				<div class="recent-posts">
					<!-- <h4>Recent posts</h4>
					<div class="recent-posts-info">
						<div class="posts-left sngl-img">
							<a href="singlepage.html"> <img src="/Myblog/Home/Common/images/img16.jpg" class="img-responsive zoom-img" alt=""/> </a>
						</div>
						<div class="posts-right">
							<lable>MARCH 5, 2015</lable>
							<h5><a href="singlepage.html">FINIBUS BONORUM MALORUM </a></h5>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing incididunt.</p>
							<a href="singlepage.html" class="btn btn-primary hvr-rectangle-in">Read More</a>
						</div>
						<div class="clearfix"> </div>
					</div>	
					<div class="recent-posts-info">
						<div class="posts-left sngl-img">
							<a href="singlepage.html"> <img src="/Myblog/Home/Common/images/img17.jpg" class="img-responsive zoom-img" alt=""/></a>
						</div>
						<div class="posts-right">
							<lable>MARCH 1, 2015</lable>
							<h5><a href="singlepage.html">FINIBUS BONORUM MALORUM </a></h5>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing incididunt.</p>
							<a href="singlepage.html" class="btn btn-primary hvr-rectangle-in">Read More</a>
						</div>
						<div class="clearfix"> </div>
					</div>
					<div class="clearfix"> </div> -->
				</div>
				<div class="comments">
					<!-- <h4>Recent comments</h4>
					<div class="comments-info">
						<div class="cmnt-icon-left">
							<a href="singlepage.html"><img src="/Myblog/Home/Common/images/icon1.png" alt=""/></a>
						</div>
						<div class="cmnt-icon-right">
							<p>MARCH 1, 2015</p>
							<p><a href="singlepage.html">Admin</a></p>
						</div>
						<div class="clearfix"> </div>
						<p class="cmmnt">Lorem ipsum dolor sit amet, consectetur adipisicing elit, 
							sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
					</div> -->
					<!-- <div class="comments-info cmnts-mddl">
						<div class="cmnt-icon-left">
							<a href="singlepage.html"><img src="/Myblog/Home/Common/images/icon1.png" alt=""/></a>
						</div>
						<div class="cmnt-icon-right">
							<p>MARCH 1, 2015</p>
							<p><a href="singlepage.html">Admin</a></p>
						</div>
						<div class="clearfix"> </div>
						<p class="cmmnt">Lorem ipsum dolor sit amet, consectetur adipisicing elit, 
							sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
					</div> -->
					<!-- <div class="comments-info">
						<div class="cmnt-icon-left">
							<a href="singlepage.html"><img src="/Myblog/Home/Common/images/icon1.png" alt=""/></a>
						</div>
						<div class="cmnt-icon-right">
							<p>MARCH 1, 2015</p>
							<p><a href="singlepage.html">Admin</a></p>
						</div>
						<div class="clearfix"> </div>
						<p class="cmmnt">Lorem ipsum dolor sit amet, consectetur adipisicing elit, 
							sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
					</div> -->
				</div>
			</div>
			<div class="clearfix"> </div>
		</div>	
	</div>







	<!--//single-page-->
	
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



<!-- 多说评论框 start -->
	<div class="ds-thread" data-thread-key="<?php $info['id']; ?>" data-title="<?php $info['title']; ?>" data-url="请替换成文章的网址"></div>
<!-- 多说评论框 end -->
<!-- 多说公共JS代码 start (一个网页只需插入一次) -->
<script type="text/javascript">
// var duoshuoQuery = {short_name:"v24"};
// 	(function() {
// 		var ds = document.createElement('script');
// 		ds.type = 'text/javascript';ds.async = true;
// 		ds.src = (document.location.protocol == 'https:' ? 'https:' : 'http:') + '//static.duoshuo.com/embed.js';
// 		ds.charset = 'UTF-8';
// 		(document.getElementsByTagName('head')[0] 
// 		 || document.getElementsByTagName('body')[0]).appendChild(ds);
// 	})();
	</script>
<!-- 多说公共JS代码 end -->

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