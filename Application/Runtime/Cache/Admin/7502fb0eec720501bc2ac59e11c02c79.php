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
    <link href="<?php ; ?>/public/css/font-awesome.min.css" rel="stylesheet">
    <link href="<?php ; ?>/public/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php ; ?>/public/css/templatemo-style.css" rel="stylesheet">

    
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
          <img src="<?php ; ?>/public/images/profile-photo.jpg" alt="Profile Photo" class="img-responsive">  
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
        $("#setactive").attr("class","active");

    });
</script>


      <!-- Main content -->
      <div class="templatemo-content col-1 light-gray-bg">
        <div class="templatemo-top-nav-container">
          <div class="row">
            <nav class="templatemo-top-nav col-lg-12 col-md-12">
              <ul class="text-uppercase">
                <li><a href="" class="active">Admin panel</a></li>
                <li><a href="">Dashboard</a></li>
                <li><a href="">Overview</a></li>
                <li><a href="<?php echo U('Home/Index/index'); ?>">前台</a></li>
              </ul>
            </nav>
          </div>
        </div>
        <div class="templatemo-content-container">
          <div class="templatemo-content-widget white-bg">
            <h2 class="margin-bottom-10">Preferences</h2>
            <p>Here goes another form and form controls.</p>
            <form action="index.html" class="templatemo-login-form" method="post" enctype="multipart/form-data">
              <div class="row form-group">
                <div class="col-lg-6 col-md-6 form-group">                  
                    <label for="inputFirstName">First Name</label>
                    <input type="text" class="form-control" id="inputFirstName" placeholder="John">                  
                </div>
                <div class="col-lg-6 col-md-6 form-group">                  
                    <label for="inputLastName">Last Name</label>
                    <input type="text" class="form-control" id="inputLastName" placeholder="Smith">                  
                </div> 
              </div>
              <div class="row form-group">
                <div class="col-lg-6 col-md-6 form-group">                  
                    <label for="inputUsername">Username</label>
                    <input type="text" class="form-control" id="inputUsername" placeholder="Admin">                  
                </div>
                <div class="col-lg-6 col-md-6 form-group">                  
                    <label for="inputEmail">Email</label>
                    <input type="email" class="form-control" id="inputEmail" placeholder="admin@company.com">                  
                </div> 
              </div>
              <div class="row form-group">
                <div class="col-lg-6 col-md-6 form-group">                  
                    <label for="inputCurrentPassword">Current Password</label>
                    <input type="password" class="form-control highlight" id="inputCurrentPassword" placeholder="*********************">                  
                </div>                
              </div>
              <div class="row form-group">
                <div class="col-lg-6 col-md-6 form-group">                  
                    <label for="inputNewPassword">New Password</label>
                    <input type="password" class="form-control" id="inputNewPassword">
                </div>
                <div class="col-lg-6 col-md-6 form-group">                  
                    <label for="inputConfirmNewPassword">Confirm New Password</label>
                    <input type="password" class="form-control" id="inputConfirmNewPassword">
                </div> 
              </div>
              <div class="row form-group">
                <div class="col-lg-12 has-success form-group">                  
                    <label class="control-label" for="inputWithSuccess">Input with success</label>
                    <input type="text" class="form-control" id="inputWithSuccess">
                </div>
              </div>
              <div class="row form-group">
                <div class="col-lg-12 has-warning form-group">                  
                    <label class="control-label" for="inputWithWarning">Input with warning</label>
                    <input type="text" class="form-control" id="inputWithWarning">
                </div>
              </div>
              <div class="row form-group">
                <div class="col-lg-12 has-error form-group">                  
                    <label class="control-label" for="inputWithError">Input with error</label>
                    <input type="text" class="form-control" id="inputWithError">
                </div>
              </div>
              <div class="row form-group">
                <div class="col-lg-12 form-group">                   
                    <label class="control-label" for="inputNote">Note</label>
                    <textarea class="form-control" id="inputNote" rows="3"></textarea>
                </div>
              </div>
              <div class="row form-group">
                <div class="col-lg-6 col-md-6 form-group"> 
                  <label class="control-label templatemo-block">Single Selection Control</label>                 
                  <select class="form-control">
                    <option value="html">HTML</option>
                    <option value="plain">Plain Text</option>                      
                  </select>
                </div>
                <div class="col-lg-6 col-md-6 form-group">                  
                    <div class="templatemo-block margin-bottom-5">
                      <input type="checkbox" name="emailOptions" id="c1" value="new" checked> 
                      <label for="c1" class="font-weight-400"><span></span>Email me when new member sign up.</label> 
                    </div>
                    <div class="templatemo-block margin-bottom-5">
                      <input type="checkbox" name="emailOptions" id="c2" value="weekly">
                      <label for="c2" class="font-weight-400"><span></span>Weekly summary email</label> 
                    </div>
                </div> 
              </div>
              <div class="row form-group">
                <div class="col-lg-6 col-md-6 form-group"> 
                  <label class="control-label templatemo-block">Multiple Selection Control</label>                 
                  <select multiple class="templatemo-multi-select form-control" style="overflow-y: scroll;">
                    <option value="">Charts</option>
                    <option value="">Graphs</option>
                    <option value="">Icons</option>
                    <option value="">Repsonsive</option>  
                    <option value="">HTML5</option>
                    <option value="">CSS3</option>
                    <option value="">jQuery</option>                    
                  </select>
                </div>
                <div class="col-lg-6 col-md-6 form-group">
                  <div>
                    <label class="control-label templatemo-block">Email Option</label> 
                    <div class="templatemo-block margin-bottom-5">
                      <input type="radio" name="emailOptions" id="r1" value="html" checked>
                      <label for="r1" class="font-weight-400"><span></span>HTML Format</label>
                    </div>
                    <div class="templatemo-block margin-bottom-5">
                      <input type="radio" name="emailOptions" id="r2" value="plain">
                      <label for="r2" class="font-weight-400"><span></span>Plain Text</label>
                    </div>
                    <div class="templatemo-block margin-bottom-5">
                      <input type="radio" name="emailOptions" id="r3" value="rich">
                      <label for="r3" class="font-weight-400"><span></span>Rich Text</label>
                    </div>                    
                  </div>                  
                </div> 
              </div>
              <div class="row form-group">
                <div class="col-lg-12 form-group">                   
                    <div class="margin-right-15 templatemo-inline-block">
                      <input type="checkbox" name="server" id="c3" value="" checked>
                      <label for="c3" class="font-weight-400"><span></span>Server Status</label>
                    </div>
                    <div class="margin-right-15 templatemo-inline-block">                      
                      <input type="checkbox" name="member" id="c4" value="">
                      <label for="c4" class="font-weight-400"><span></span>Member Status</label>
                    </div>
                    <div class="margin-right-15 templatemo-inline-block">
                      <input type="checkbox" name="expired" id="c5" value="">
                      <label for="c5" class="font-weight-400"><span></span>Expired Members</label>                      
                    </div>
                </div>
              </div>
              <div class="row form-group">
                <div class="col-lg-12 form-group">                   
                    <div class="margin-right-15 templatemo-inline-block">
                      <input type="radio" name="radio" id="r4" value="">
                      <label for="r4" class="font-weight-400"><span></span>Bootstrap</label>
                    </div>
                    <div class="margin-right-15 templatemo-inline-block">
                      <input type="radio" name="radio" id="r5" value="" checked>
                      <label for="r5" class="font-weight-400"><span></span>Foundation</label>
                    </div>
                    <div class="margin-right-15 templatemo-inline-block">
                      <input type="radio" name="radio" id="r6" value="">
                      <label for="r6" class="font-weight-400"><span></span>Skeleton</label>
                    </div>
                </div>
              </div>
              <div class="row form-group">
                <div class="col-lg-12">
                  <label class="control-label templatemo-block">File Input</label> 
                  <!-- <input type="file" name="fileToUpload" id="fileToUpload" class="margin-bottom-10"> -->
                  <input type="file" name="fileToUpload" id="fileToUpload" class="filestyle" data-buttonName="btn-primary" data-buttonBefore="true" data-icon="false">
                  <p>Maximum upload size is 5 MB.</p>                  
                </div>
              </div>
              <div class="form-group text-right">
                <button type="submit" class="templatemo-blue-button">Update</button>
                <button type="reset" class="templatemo-white-button">Reset</button>
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