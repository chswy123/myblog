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
    <link href="/Public/css/font-awesome.min.css" rel="stylesheet">
    <link href="/Public/css/bootstrap.min.css" rel="stylesheet">
    <link href="/Public/css/templatemo-style.css" rel="stylesheet">

    
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
          <img src="/Public/images/profile-photo.jpg" alt="Profile Photo" class="img-responsive">  
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
        $("#indexactive").attr("class","active");

        $.get("http://www.myblog.com/myblog.php/Admin/Index/ajaxtime",function(data){
        $("#time").html(data);                                                         //初始时间
      });

        // $.get("http://www.v24php.cn/myblog.php/Admin/Index/ajaxnews",function(news){
        $.get("http://www.myblog.com/myblog.php/Admin/Index/ajaxnews",function(news){
        $("#ajaxnews").html(news);                                                         //初始新闻
      });
    });


      function ajaxtime(){
          $.ajax({
          type:"GET",
          url:"http://www.myblog.com/myblog.php/Admin/Index/ajaxtime",
          dataType:"html",
          success:function(msg){
            $("#time").html(msg);
          }
        });
      }

    setInterval("ajaxtime()",1000); 

      function ajaxnews(){
          $.ajax({
          type:"GET",
          url:"http://www.myblog.com/myblog.php/Admin/Index/ajaxnews",
          dataType:"html",
          success:function(msg){
            $("#ajaxnews").html(msg);
          }
        });
      }

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
          <div class="templatemo-flex-row flex-content-row">
            <div class="templatemo-content-widget white-bg col-2">
              <i class="fa fa-times"></i>
              <div class="square"></div>
              <h2 class="templatemo-inline-block">新闻</h2><hr>
              <p id="ajaxnews"></p>
              <input type="button" value="换一换" onclick="ajaxnews()">
              <p id="ajaxnews"></p>              
            </div>
            <div class="templatemo-content-widget white-bg col-1 text-center">
              <i class="fa fa-times"></i>
              <h2 class="text-uppercase"><?php echo $info['retData']['city']; ?></h2>
              <h3 class="text-uppercase margin-bottom-10" id='time'></h3>
              <img src="/Public/images/bicycle.jpg" alt="Bicycle" class="img-circle img-thumbnail">
            </div>
            <div class="templatemo-content-widget white-bg col-1">
              <i class="fa fa-times"></i>  <!--删除按钮-->
              <h2 class="text-uppercase">指标</h2>
              <h3 class="text-uppercase">上次更新时间：<?php echo $info['retData']['date'].'&nbsp;'.$info['retData']['time']; ?></h3><hr>

              <div class="progress">
                <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 50%;">温度：<?php echo $info['retData']['temp']; ?>℃</div>
              </div>
              <div class="progress">
                <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 40%;">最低气温：<?php echo $info['retData']['l_tmp']; ?>℃</div>
              </div>
              <div class="progress">
                <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 80%;">最高气温：<?php echo $info['retData']['h_tmp']; ?>℃</div>
              </div> 
              <div class="progress">
                <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;">风力：<?php echo $info['retData']['WS']; ?></div>
              </div> 
            </div>
          </div>

    <!-- 自己插入开始 -->
          <div class="templatemo-flex-row flex-content-row">
            <div class="templatemo-content-widget white-bg col-1">
            <i class="fa fa-times"></i>  <!--删除按钮-->
                123
            </div>

            <div class="templatemo-content-widget white-bg col-1">
            <i class="fa fa-times"></i>  <!--删除按钮-->
                456
            </div>

          </div>  

          

    <!-- 自己插入结束 -->

      

          <div class="templatemo-flex-row flex-content-row">
            <div class="col-1">              
              <div class="templatemo-content-widget orange-bg">
                <i class="fa fa-times"></i>                
                <div class="media">
                  <div class="media-left">
                    <a href="#">
                      <img class="media-object img-circle" src="/Public/images/sunset.jpg" alt="Sunset">
                    </a>
                  </div>
                  <div class="media-body">
                    <h2 class="media-heading text-uppercase">Consectur Fusce Enim</h2>
                    <p>Phasellus dapibus nulla quis risus auctor, non placerat augue consectetur.</p>  
                  </div>        
                </div>                
              </div>            
              <div class="templatemo-content-widget white-bg">
                <i class="fa fa-times"></i>
                <div class="media">
                  <div class="media-left">
                    <a href="#">
                      <img class="media-object img-circle" src="/Public/images/sunset.jpg" alt="Sunset">
                    </a>
                  </div>
                  <div class="media-body">
                    <h2 class="media-heading text-uppercase">Consectur Fusce Enim</h2>
                    <p>Phasellus dapibus nulla quis risus auctor, non placerat augue consectetur.</p>  
                  </div>
                </div>                
              </div>            
            </div>
            <div class="col-1">
              <div class="panel panel-default templatemo-content-widget white-bg no-padding templatemo-overflow-hidden">
                <i class="fa fa-times"></i>
                <div class="panel-heading templatemo-position-relative"><h2 class="text-uppercase">User Table</h2></div>
                <div class="table-responsive">
                  <table class="table table-striped table-bordered">
                    <thead>
                      <tr>
                        <td>No.</td>
                        <td>First Name</td>
                        <td>Last Name</td>
                        <td>Username</td>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>1.</td>
                        <td>John</td>
                        <td>Smith</td>
                        <td>@jS</td>
                      </tr>
                      <tr>
                        <td>2.</td>
                        <td>Bill</td>
                        <td>Jones</td>
                        <td>@bJ</td>
                      </tr>
                      <tr>
                        <td>3.</td>
                        <td>Mary</td>
                        <td>James</td>
                        <td>@mJ</td>
                      </tr>
                      <tr>
                        <td>4.</td>
                        <td>Steve</td>
                        <td>Bride</td>
                        <td>@sB</td>
                      </tr>
                      <tr>
                        <td>5.</td>
                        <td>Paul</td>
                        <td>Richard</td>
                        <td>@pR</td>
                      </tr>                    
                    </tbody>
                  </table>    
                </div>                          
              </div>
            </div>           
          </div> <!-- Second row ends -->
          
          <div class="templatemo-flex-row flex-content-row templatemo-overflow-hidden"> <!-- overflow hidden for iPad mini landscape view-->
            <div class="col-1 templatemo-overflow-hidden">
              <div class="templatemo-content-widget white-bg templatemo-overflow-hidden">
                <i class="fa fa-times"></i>
                <div class="templatemo-flex-row flex-content-row">
                  <div class="col-1 col-lg-6 col-md-12">
                    <h2 class="text-center">Modular<span class="badge">new</span></h2>
                    <div id="pie_chart_div" class="templatemo-chart"></div> <!-- Pie chart div -->
                  </div>
                  <div class="col-1 col-lg-6 col-md-12">
                    <h2 class="text-center">Interactive<span class="badge">new</span></h2>
                    <div id="bar_chart_div" class="templatemo-chart"></div> <!-- Bar chart div -->
                  </div>  
                </div>                
              </div>
            </div>
          </div>
          <footer class="text-right">
          </footer>         
        </div>
      </div>
    </div>
    
    <!-- JS -->
    <script src="Public/js/jquery-1.11.2.min.js"></script>      <!-- jQuery -->
    <script src="/Public/js/jquery-migrate-1.2.1.min.js"></script> <!--  jQuery Migrate Plugin -->
    <!-- <script src="https://www.google.com/jsapi"></script> --> <!-- Google Chart -->
    <script>
      /* Google Chart 
      -------------------------------------------------------------------*/
      // Load the Visualization API and the piechart package.
      // google.load('visualization', '1.0', {'packages':['corechart']});

      // Set a callback to run when the Google Visualization API is loaded.
      // google.setOnLoadCallback(drawChart); 
      
      // Callback that creates and populates a data table,
      // instantiates the pie chart, passes in the data and
      // draws it.
      function drawChart() {

          // Create the data table.
          var data = new google.visualization.DataTable();
          data.addColumn('string', 'Topping');
          data.addColumn('number', 'Slices');
          data.addRows([
            ['Mushrooms', 3],
            ['Onions', 1],
            ['Olives', 1],
            ['Zucchini', 1],
            ['Pepperoni', 2]
          ]);

          // Set chart options
          var options = {'title':'How Much Pizza I Ate Last Night'};

          // Instantiate and draw our chart, passing in some options.
          var pieChart = new google.visualization.PieChart(document.getElementById('pie_chart_div'));
          pieChart.draw(data, options);

          var barChart = new google.visualization.BarChart(document.getElementById('bar_chart_div'));
          barChart.draw(data, options);
      }

      $(document).ready(function(){
        if($.browser.mozilla) {
          //refresh page on browser resize
          // http://www.sitepoint.com/jquery-refresh-page-browser-resize/
          $(window).bind('resize', function(e)
          {
            if (window.RT) clearTimeout(window.RT);
            window.RT = setTimeout(function()
            {
              this.location.reload(false); /* false to get page from cache */
            }, 200);
          });      
        } else {
          $(window).resize(function(){
            drawChart();
          });  
        }   
      });
      
    </script>
    <script type="text/javascript" src="/Public/js/templatemo-script.js"></script>      <!-- Templatemo Script -->

  </body>
</html>