<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">  
    <title>个人博客-后台首页</title>
    <meta name="description" content="">
    <meta name="author" content="templatemo">
    
    <!--<link href='http://fonts.useso.com/css?family=Open+Sans:400,300,400italic,700' rel='stylesheet' type='text/css'>-->
    <link href="/Public/jqvmap/jqvmap.css" media="screen" rel="stylesheet" type="text/css" /> 
    <link href="/public/css/font-awesome.min.css" rel="stylesheet">
    <link href="/public/css/bootstrap.min.css" rel="stylesheet">
    <link href="/public/css/templatemo-style.css" rel="stylesheet">

    
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="js/html5shiv.min.js"></script>
      <script src="js/respond.min.js"></script>
    <![endif]-->
   <script src="/Public/js/jquery-1.8.3.min.js"></script>
    <!--
    <script>
        $(function(){
            $(".templatemo-left-nav").click(function(){
                // console.log(123);
                $(".templatemo-left-nav > li").attr("class","active");
            });
        });
    </script> -->

  </head>
  <body>  
    <!-- Left column -->
    <div class="templatemo-flex-row">
      <div class="templatemo-sidebar">
        <header class="templatemo-site-header">
          <div class="square"></div>
          <h1>博客</h1>
        </header>
        <div class="profile-photo-container">
          <img src="/public/images/profile-photo.jpg" alt="Profile Photo" class="img-responsive">  
          <div class="profile-photo-overlay"></div>
        </div>      
        <!-- Search box -->
        <form class="templatemo-search-form" role="search">
          <div class="input-group">
              <button type="submit" class="fa fa-search"></button>
              <input type="text" class="form-control" placeholder="Search" name="srch-term" id="srch-term">           
          </div>
        </form>
        <div class="mobile-menu-icon">
            <i class="fa fa-bars"></i>
        </div>
        <nav class="templatemo-left-nav">          
          <ul>
            <li><a href="<?php echo U('Index/index'); ?>" id="indexactive"><i class="fa fa-home fa-fw"></i>主页</a></li>
            <li><a href="<?php echo U('Blog/blog'); ?>" id="blogactive"><i class="fa fa-file-text fa-fw"></i>博文</a></li>
            <li><a href="<?php echo U('Feeling/feeling'); ?>" id="feelingactive"><i class="fa fa-comment fa-fw"></i>心情</a></li>
			<li><a href="<?php echo U('Gallery/gallery'); ?>" id="galleryactive"><i class="fa fa-file-image-o fa-fw"></i>图集</a></li>
            <li><a href="<?php echo U('Maps/maps'); ?>" id="mapsactive"><i class="fa fa-map-marker fa-fw"></i>地图Maps</a></li>
            <li><a href="<?php echo U('Manage/manage'); ?>" id="manageactive"><i class="fa fa-users fa-fw"></i>管理员用户Manage Users</a></li>
            <li><a href="<?php echo U('Set/set'); ?>" id="setactive"><i class="fa fa-sliders fa-fw"></i>偏好Preferences</a></li>
            <li><a href="<?php echo U('Login/logout'); ?>"><i class="fa fa-sign-out fa-fw"></i>登出Sign Out</a></li>
          </ul>  
        </nav>
      </div>
     

  
<script>
    $(function(){
        $("#blogactive").attr("class","active");

    });
</script>

      <!-- Main content -->
      <div class="templatemo-content col-1 light-gray-bg">
        <div class="templatemo-top-nav-container">
          <div class="row">
            <nav class="templatemo-top-nav col-lg-12 col-md-12">
              <ul class="text-uppercase">
                <li><a href="<?php echo U('Blog/blog'); ?>" class="active">博文列表</a></li>
                <li><a href="">Dashboard</a></li>
                <li><a href="">Overview</a></li>
                <li><a href="<?php echo U('Home/Index/index'); ?>">前台</a></li>
              </ul>
            </nav>
          </div>
        </div>
		    
        <div class="templatemo-content-container">
          <div class="templatemo-content-widget white-bg">
            <h2 class="margin-bottom-10">添加博文</h2>
            <p>请在下面详细填写博文内容</p>
            <form action="<?php echo U('Blog/edit'); ?>" class="templatemo-login-form" method="post" enctype="multipart/form-data">
              <div class="row form-group">
                <div class="col-lg-6 col-md-6 form-group">                  
                    <label for="inputFirstName">标题</label>
                    <input type="text" class="form-control" id="inputFirstName" name="title" value="<?php echo $info['title']; ?>">                  
                </div>
                <div class="col-lg-6 col-md-6 form-group">                  
                    <label for="inputLastName">标签</label>
                    <input type="text" class="form-control" id="inputLastName" name="tag" value="<?php echo $info['tag']; ?>">                  
                </div> 
              </div>
              <div class="row form-group">
                <div class="col-lg-6 col-md-6 form-group">                  
                    <label for="inputUsername">点赞数</label>
                    <input type="text" class="form-control" id="inputUsername" name="dianzan" value="<?php echo $info['dianzan']; ?>">                  
                </div>
                
              </div>
              
             
              <div class="row form-group">
                <div class="col-lg-12 has-success form-group">                  
                    <label class="control-label" for="inputWithSuccess">关键词</label>
                    <input type="text" class="form-control" id="inputWithSuccess" name="keyword" value="<?php echo $info['keyword']; ?>">
                </div>
              </div>
              
              
              <div class="row form-group">
                <div class="col-lg-12 form-group">                   
                    <label class="control-label" for="inputNote">内容</label>
                    <textarea class="form-control" id="inputNote" name="content" rows="3" ><?php echo $info['content']; ?></textarea>
                </div>
              </div>
              
              <div class="row form-group">
                
                <div class="col-lg-6 col-md-6 form-group">
                  <div>
                    <label class="control-label templatemo-block">是否显示</label> 
                    <div class="templatemo-block margin-bottom-5">
                      <input type="radio" name="is_show" id="r1" value="1" <?php echo $info['is_show']==1?'checked':''; ?>>
                      <label for="r1" class="font-weight-400"><span></span>显示</label>
                    </div>
                    <div class="templatemo-block margin-bottom-5">
                      <input type="radio" name="is_show" id="r2" value="0" <?php echo $info['is_show']==0?'checked':''; ?>>
                      <label for="r2" class="font-weight-400"><span></span>不显示</label>
                    </div>
                      <input type = 'hidden' name="id" value="<?php echo $info['id']; ?>">	              
                  </div>                  
                </div> 
              </div>
            
              
              <div class="row form-group">
                <div class="col-lg-12">
                  <label class="control-label templatemo-block">上传图片</label> 
                  <!-- <input type="file" name="fileToUpload" id="fileToUpload" class="margin-bottom-10"> -->
                  <input type="file"  id="fileToUpload" name="upload" class="filestyle" data-buttonName="btn-primary" data-buttonBefore="true" data-icon="false" >
                  <p>图片不能为空，最大上传大小为5M</p>                  
                </div>
              </div>
              <div class="form-group text-right">
                <button type="submit" class="templatemo-blue-button">提交</button>
                <button type="reset" class="templatemo-white-button">重置</button>
              </div>                           
            </form>
          </div>
          <footer class="text-right">
            <p>Copyright &copy; 2084 Company Name 
            | More Templates <a href="http://www.mycodes.net/" target="_blank">源码之家</a></p>
          </footer>
        </div>
      </div>
    </div>

    <!-- JS -->
    <script type="text/javascript" src="/Public/js/jquery-1.11.2.min.js"></script>        <!-- jQuery -->
    <script type="text/javascript" src="/Public/js/bootstrap-filestyle.min.js"></script>  <!-- http://markusslima.github.io/bootstrap-filestyle/ -->
    <script type="text/javascript" src="/Public/js/templatemo-script.js"></script>        <!-- Templatemo Script -->
  </body>
</html>