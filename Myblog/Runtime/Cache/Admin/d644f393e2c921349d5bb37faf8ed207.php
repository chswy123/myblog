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
        $("#mapsactive").attr("class","active");

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
            <h2 class="margin-bottom-10">Geo Charts</h2>
            <p class="margin-bottom-0">Credit goes to <a href="http://jqvmap.com" target="_parent">JQVMap</a>.</p>              
          </div>
          <div class="templatemo-flex-row flex-content-row">
            <div class="col-1">              
              <div class="panel panel-default margin-10">
                <div class="panel-heading"><h2>World</h2></div>
                <div class="panel-body">
                  <div id="vmap_world" class="vmap"></div>
                </div>                
              </div>
            </div> 
            <div class="col-1">              
              <div class="panel panel-default margin-10">
                <div class="panel-heading"><h2>Africa</h2></div>
                <div class="panel-body">
                  <div id="vmap_africa" class="vmap"></div>
                </div>                
              </div>
            </div>                                 
          </div>   
          <div class="templatemo-flex-row flex-content-row">
            <div class="col-1">              
              <div class="panel panel-default margin-10">
                <div class="panel-heading"><h2>Asia</h2></div>
                <div class="panel-body">
                  <div id="vmap_asia" class="vmap"></div>
                </div>                
              </div>
            </div> 
            <div class="col-1">              
              <div class="panel panel-default margin-10">
                <div class="panel-heading"><h2>Australia</h2></div>
                <div class="panel-body">
                  <div id="vmap_australia" class="vmap"></div>
                </div>                
              </div>
            </div>                                 
          </div>    
          <div class="templatemo-flex-row flex-content-row">
            <div class="col-1">              
              <div class="panel panel-default margin-10">
                <div class="panel-heading"><h2>Europe</h2></div>
                <div class="panel-body">
                  <div id="vmap_europe" class="vmap"></div>
                </div>                
              </div>
            </div> 
            <div class="col-1">              
              <div class="panel panel-default margin-10">
                <div class="panel-heading"><h2>United States of America</h2></div>
                <div class="panel-body">
                  <div id="vmap_usa" class="vmap"></div>
                </div>                
              </div>
            </div>                                 
          </div>    
          <div class="templatemo-flex-row flex-content-row">
            <div class="col-1">              
              <div class="panel panel-default margin-10">
                <div class="panel-heading"><h2>North America</h2></div>
                <div class="panel-body">
                  <div id="vmap_northamerica" class="vmap"></div>
                </div>                
              </div>
            </div> 
            <div class="col-1">              
              <div class="panel panel-default margin-10">
                <div class="panel-heading"><h2>South America</h2></div>
                <div class="panel-body">
                  <div id="vmap_southamerica" class="vmap"></div>
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
    <script type="text/javascript" src="/Public/js/jquery-1.11.2.min.js"></script>      <!-- jQuery -->
    <script type="text/javascript" src="/Public/js/jquery-migrate-1.2.1.min.js"></script> <!--  jQuery Migrate Plugin -->
    <script type="text/javascript" src="/Public/js/templatemo-script.js"></script>      <!-- Templatemo Script -->
    <script type="text/javascript" src="/Public/jqvmap/jquery.vmap.js"></script>
    <script type="text/javascript" src="/Public/jqvmap/maps/jquery.vmap.world.js"></script>
    <script type="text/javascript" src="/Public/jqvmap/data/jquery.vmap.sampledata.js"></script>
    <script src="/Public/jqvmap/maps/continents/jquery.vmap.africa.js" type="text/javascript"></script>
    <script src="/Public/jqvmap/maps/continents/jquery.vmap.asia.js" type="text/javascript"></script>
    <script src="/Public/jqvmap/maps/continents/jquery.vmap.australia.js" type="text/javascript"></script>
    <script src="/Public/jqvmap/maps/continents/jquery.vmap.europe.js" type="text/javascript"></script>
    <script src="/Public/jqvmap/maps/continents/jquery.vmap.north-america.js" type="text/javascript"></script>
    <script src="/Public/jqvmap/maps/continents/jquery.vmap.south-america.js" type="text/javascript"></script>
    <script src="/Public/jqvmap/maps/jquery.vmap.usa.js" type="text/javascript"></script>
    <script type="text/javascript">
      
      function drawMaps(){
        $('#vmap_world').vectorMap({
          map: 'world_en',
          backgroundColor: '#ffffff',
          color: '#333',
          hoverOpacity: 0.7,
          selectedColor: '#666666',
          enableZoom: true,
          showTooltip: true,
          values: sample_data,
          scaleColors: ['#C8EEFF', '#006491'],
          normalizeFunction: 'polynomial'
        });
        $('#vmap_africa').vectorMap({
          map: 'africa_en',
          backgroundColor: '#ffffff',
          color: '#333333',
          hoverOpacity: 0.7,
          selectedColor: '#666666',
          enableZoom: true,
          showTooltip: true,
          values: sample_data,
          scaleColors: ['#C8EEFF', '#006491'],
          normalizeFunction: 'polynomial'
        }); 
        $('#vmap_asia').vectorMap({
          map: 'asia_en',
          backgroundColor: '#ffffff',
          color: '#333333',
          hoverOpacity: 0.7,
          selectedColor: '#666666',
          enableZoom: true,
          showTooltip: true,
          values: sample_data,
          scaleColors: ['#C8EEFF', '#006491'],
          normalizeFunction: 'polynomial'
        });
        $('#vmap_australia').vectorMap({
          map: 'australia_en',
          backgroundColor: '#ffffff',
          color: '#333333',
          hoverOpacity: 0.7,
          selectedColor: '#666666',
          enableZoom: true,
          showTooltip: true,
          values: sample_data,
          scaleColors: ['#C8EEFF', '#006491'],
          normalizeFunction: 'polynomial'
        });
        $('#vmap_europe').vectorMap({
          map: 'europe_en',
          backgroundColor: '#ffffff',
          color: '#333333',
          hoverOpacity: 0.7,
          selectedColor: '#666666',
          enableZoom: true,
          showTooltip: true,
          values: sample_data,
          scaleColors: ['#C8EEFF', '#006491'],
          normalizeFunction: 'polynomial'
        });
        $('#vmap_northamerica').vectorMap({
          map: 'north-america_en',
          backgroundColor: '#ffffff',
          color: '#333333',
          hoverOpacity: 0.7,
          selectedColor: '#666666',
          enableZoom: true,
          showTooltip: true,
          values: sample_data,
          scaleColors: ['#C8EEFF', '#006491'],
          normalizeFunction: 'polynomial'
        });
        $('#vmap_southamerica').vectorMap({
          map: 'south-america_en',
          backgroundColor: '#ffffff',
          color: '#333333',
          hoverOpacity: 0.7,
          selectedColor: '#666666',
          enableZoom: true,
          showTooltip: true,
          values: sample_data,
          scaleColors: ['#C8EEFF', '#006491'],
          normalizeFunction: 'polynomial'
        });
        $('#vmap_usa').vectorMap({
          map: 'usa_en',
          enableZoom: true,
          showTooltip: true,
          selectedRegion: 'MO'
        });  
      } // end function drawMaps

      $(document).ready(function() {

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
            drawMaps();
          });  
        }
        
        drawMaps();

      });
    </script>
  </body>
</html>