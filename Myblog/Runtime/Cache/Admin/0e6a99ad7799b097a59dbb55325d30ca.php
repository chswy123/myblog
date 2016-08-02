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
     

  
<style>
    #Pagination a:hover,.current{background-color: #f54281;border: 1px solid #f54281;color: #ffffff; }
    #Pagination{float: right;height: auto;_height: 45px; line-height: 20px;margin-right: 15px;_margin-right: 5px; color:#565656;margin-top: 10px;_margin-top: 20px; clear:both;}
    #Pagination a,#Pagination span{ font-size: 14px;text-decoration: none;display: block;float: left;color: #565656;border: 1px solid #ccc;height: 34px;line-height: 34px;margin: 0 2px;width: 34px;text-align: center;}
</style>
<script>
    $(function(){
        $("#feelingactive").attr("class","active");

        $(".templatemo-del-btn").click(function(){
              if(confirm('确认删除吗？'))
              {

              }
              else
              {
                return false;
              }
        });

    });
</script>


      <!-- Main content --> 
      <div class="templatemo-content col-1 light-gray-bg">
        <div class="templatemo-top-nav-container">
          <div class="row">
            <nav class="templatemo-top-nav col-lg-12 col-md-12">
              <ul class="text-uppercase">
                <li><a href="<?php echo U('Feeling/add'); ?>" class="active">写心情</a></li>
                <li><a href="">Dashboard</a></li>
                <li><a href="">Overview</a></li>
                <li><a href="<?php echo U('Home/Index/index'); ?>">前台</a></li>
              </ul>  
            </nav> 
          </div>
        </div>
        <div class="templatemo-content-container">
          <div class="templatemo-content-widget no-padding">
            <div class="panel panel-default table-responsive">
              <table class="table table-striped table-bordered templatemo-user-table">
                <thead>

                  <tr>
                    <td><a href="" class="white-text templatemo-sort-by">编号<span class="caret"></span></a></td>
                    <td><a href="" class="white-text templatemo-sort-by">内容<span class="caret"></span></a></td>
                    <td><a href="" class="white-text templatemo-sort-by">其他<span class="caret"></span></a></td>
                    
                    <td><a href="" class="white-text templatemo-sort-by">添加时间<span class="caret"></span></a></td>
					
                    <td>Edit</td>
                    <!-- <td>Action</td> -->
                    <td>Delete</td>
                  </tr>
                </thead>
                <tbody>

				<?php foreach($info as $v){ ?>
                  <tr>
                    <td><?php echo $v['id']; ?></td>
                    <td><a href="" class="templatemo-edit-btn">查看</a></td>
                    <td><?php echo $v['other']; ?></td>
                    <td><?php echo $v['date']; ?></td>
                    
                    <td><a href="" class="templatemo-edit-btn">Edit</a></td>
                    <!-- <td><a href="" class="templatemo-link">Action</a></td> -->
                    <td><a href="<?php echo U('Feeling/del').'?id='.$v['id']; ?>" class="templatemo-del-btn">删除</a></td>
                  </tr>
               <?php } ?>
                  <tr>
                    <td colspan="10"><div id="Pagination" ><?php echo $pageStr; ?></div> </td>
                  </tr>          
                </tbody>
              </table>    
            </div>                          
          </div>          
          <div class="templatemo-flex-row flex-content-row">
            <div class="col-1">
              <div class="panel panel-default margin-10">
                <div class="panel-heading"><h2 class="text-uppercase">Login Form</h2></div>
                <div class="panel-body">
                  <form action="index.html" class="templatemo-login-form">
                    <div class="form-group">
                      <label for="inputEmail">Email address</label>
                      <input type="email" class="form-control" id="inputEmail" placeholder="Enter email">
                    </div>
                    <div class="form-group">                      
                      <label for="inputEmail">Password</label>
                      <input type="password" class="form-control" placeholder="Enter password">                                 
                    </div>              
                    <div class="form-group">
                        <div class="checkbox squaredTwo">
                            <label>
                              <input type="checkbox"> Remember me
                            </label>
                        </div>            
                    </div>
                    <div class="form-group">
                      <button type="submit" class="templatemo-blue-button">Submit</button>
                    </div>
                  </form>
                </div>                
              </div>              
            </div>
            <div class="col-1">              
              <div class="templatemo-content-widget pink-bg">
                <i class="fa fa-times"></i>                
                <h2 class="text-uppercase margin-bottom-10">Latest Data</h2>
                <p class="margin-bottom-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc mi sapien, fringilla at orci nec, viverra rhoncus leo. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus rhoncus erat non purus commodo, sit amet varius dolor sagittis.</p>                  
              </div>            
              <div class="templatemo-content-widget blue-bg">
                <i class="fa fa-times"></i>
                <h2 class="text-uppercase margin-bottom-10">Older Data</h2>
                <p class="margin-bottom-0">Phasellus dapibus nulla quis risus auctor, non placerat augue consectetur. Aliquam convallis pharetra odio, in convallis erat molestie sed. Fusce mi lacus, semper sit amet mattis eu, volutpat vitae enim.</p>                
              </div>            
            </div>                       
          </div> <!-- Second row ends -->
          <div class="templatemo-flex-row flex-content-row">
            <div class="templatemo-content-widget white-bg col-2">
              <i class="fa fa-times"></i>
              <div class="media margin-bottom-30">
                <div class="media-left padding-right-25">
                  <a href="#">
                    <img class="media-object img-circle templatemo-img-bordered" src="/Public/images/person.jpg" alt="Sunset">
                  </a>
                </div>
                <div class="media-body">
                  <h2 class="media-heading text-uppercase blue-text">John Barnet</h2>
                  <p>Project Manager</p>
                </div>        
              </div>
              <div class="table-responsive">
                <table class="table">
                  <tbody>
                    <tr>
                      <td><div class="circle green-bg"></div></td>
                      <td>New Task Issued</td>
                      <td>02</td>                    
                    </tr> 
                    <tr>
                      <td><div class="circle pink-bg"></div></td>
                      <td>Task Pending</td>
                      <td>22</td>                    
                    </tr>  
                    <tr>
                      <td><div class="circle blue-bg"></div></td>
                      <td>Inbox</td>
                      <td>13</td>                    
                    </tr>  
                    <tr>
                      <td><div class="circle yellow-bg"></div></td>
                      <td>New Notification</td>
                      <td>18</td>                    
                    </tr>                                      
                  </tbody>
                </table>
              </div>             
            </div>
            <div class="templatemo-content-widget white-bg col-1 text-center templatemo-position-relative">
              <i class="fa fa-times"></i>
              <img src="/Public/images/person.jpg" alt="Bicycle" class="img-circle img-thumbnail margin-bottom-30">
              <h2 class="text-uppercase blue-text margin-bottom-5">Paul Smith</h2>
              <h3 class="text-uppercase margin-bottom-70">Managing Director</h3>
              <div class="templatemo-social-icons-container">
                <div class="social-icon-wrap">
                  <i class="fa fa-facebook templatemo-social-icon"></i>  
                </div>
                <div class="social-icon-wrap">
                  <i class="fa fa-twitter templatemo-social-icon"></i>  
                </div>
                <div class="social-icon-wrap">
                  <i class="fa fa-google-plus templatemo-social-icon"></i>  
                </div>                
              </div>
            </div>
            <div class="templatemo-content-widget white-bg col-1 templatemo-position-relative templatemo-content-img-bg">
              <img src="/Public/images/sunset-big.jpg" alt="Sunset" class="img-responsive content-bg-img">
              <i class="fa fa-heart"></i>
              <h2 class="templatemo-position-relative white-text">Sunset</h2>
              <div class="view-img-btn-wrap">
                <a href="" class="btn btn-default templatemo-view-img-btn">View</a>  
              </div>              
            </div>
          </div>
          <div class="pagination-wrap">
            <ul class="pagination">
              <li><a href="#">1</a></li>
              <li><a href="#">2</a></li>
              <li class="active"><a href="#">3 <span class="sr-only">(current)</span></a></li>
              <li><a href="#">4</a></li>
              <li><a href="#">5</a></li>
              <li>
                <a href="#" aria-label="Next">
                  <span aria-hidden="true"><i class="fa fa-play"></i></span>
                </a>
              </li>
            </ul>
          </div>          
          <footer class="text-right">
            <p>Copyright &copy; 2084 Company Name 
            | More Templates <a href="http://www.mycodes.net/" target="_blank">源码之家</a></p>
          </footer>         
        </div>
      </div>
    </div>
    
    <!-- JS -->
    <script type="text/javascript" src="/Public/js/jquery-1.11.2.min.js"></script>      <!-- jQuery -->
    <script type="text/javascript" src="/Public/js/templatemo-script.js"></script>      <!-- Templatemo Script -->
    <script>
      $(document).ready(function(){
        // Content widget with background image
        var imageUrl = $('img.content-bg-img').attr('src');
        $('.templatemo-content-img-bg').css('background-image', 'url(' + imageUrl + ')');
        $('img.content-bg-img').hide();        
      });
    </script>
  </body>
</html>