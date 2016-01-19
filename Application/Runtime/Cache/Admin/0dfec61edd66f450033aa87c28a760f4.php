<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
	    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	    <meta name="viewport" content="width=device-width, initial-scale=1">  
	    <title>MyBlog_Login</title>
        <meta name="description" content="">
        <meta name="author" content="templatemo">
        
	   <!--  <link href='http://fonts.useso.com/css?family=Open+Sans:400,300,400italic,700' rel='stylesheet' type='text/css'>-->
	    <link href="<?php ; ?>/public/css/font-awesome.min.css" rel="stylesheet">
	    <link href="<?php ; ?>/public/css/bootstrap.min.css" rel="stylesheet">
	    <link href="<?php ; ?>/public/css/templatemo-style.css" rel="stylesheet">
			<script src="<?php ; ?>/public/js/jquery-1.8.3.min.js"></script>
	<script>
		function checkuser(){
			$.ajax({
				type:"post",
				url:"<?php echo U('Login/checkuser'); ?>",
				datatype:"text",
				data:{value:$("#username").val()},
				success:function(msg){ 
					$("#userinfo").html(msg);
				}
			})
		}

		function checkpwd(){
			$.ajax({
				type:"post",
				url:"<?php echo U('Login/checkpwd'); ?>",
				datatype:"text",
				data:{password:$("#password").val(),username:$("#username").val()},
				success:function(msg){
					$("#pwdinfo").html(msg);
				}
			})
		}
	
	</script>
	    
	    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	    <!--[if lt IE 9]>
	      <script src="js/html5shiv.min.js"></script>
	      <script src="js/respond.min.js"></script>
	    <![endif]-->
	</head>
	<body class="light-gray-bg">
		<div class="templatemo-content-widget templatemo-login-widget white-bg">
			<header class="text-center">
	          
	          <h1>登录</h1>
	        </header>
	        <form action="#" method="post" class="templatemo-login-form">
	        	<div class="form-group">
	        		<div class="input-group">
		        		<div class="input-group-addon"><i class="fa fa-user fa-fw"></i></div>	        		
		              	<input type="text" name="username" class="form-control" placeholder="myblog@163.com" onblur="return checkuser()" id="username"/> 
						
		          	</div>	<div id="userinfo" style=""></div>
	        	</div>
	        	<div class="form-group">
	        		<div class="input-group">
		        		<div class="input-group-addon"><i class="fa fa-key fa-fw"></i></div>	        		
		              	<input type="password" name="password" class="form-control" placeholder="******" onblur="return checkpwd()" id="password">           
		          	</div>	<div id="pwdinfo" style="" ></div>
	        	</div>	          	
	          	<div class="form-group">
				    <div class="checkbox squaredTwo">
				        <input type="checkbox" id="c1" name="cc" />
						<label for="c1"><span></span>记住我</label>
				    </div>				    
				</div>
				<div class="form-group">
					<button type="submit" class="templatemo-blue-button width-100">登录</button>
				</div>
	        </form>
		</div>
		<div class="templatemo-content-widget templatemo-login-widget templatemo-register-widget white-bg">
			<p>Not a registered user yet? <strong><a href="#" class="blue-text">Sign up now!</a></strong></p>
		</div>
	</body>
</html>