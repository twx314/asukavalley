<!DOCTYPE html>
<html>
<head>

	<title><?php wp_title(); ?></title>

<!-- Site Info ----------------------------------------------------------------------------------------------------------------------------------------->

	<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />	
	<meta name="generator" content="WordPress <?php bloginfo('version'); ?>" /> <!-- leave this for stats please -->
	<link rel="alternate" type="application/rss+xml" title="RSS 2.0" href="<?php bloginfo('rss2_url'); ?>" />
	<link rel="alternate" type="text/xml" title="RSS .92" href="<?php bloginfo('rss_url'); ?>" />
	<link rel="alternate" type="application/atom+xml" title="Atom 0.3" href="<?php bloginfo('atom_url'); ?>" />
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />	

<!-- Loading CSS files --------------------------------------------------------------------------------------------------------------------------------->
    
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/OLG_kindom_knight/kkstyle.css?v=1.0" type="text/css" media="screen" />
    <!-- Loading CSS file for fancybox -->
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/js/fancybox/source/jquery.fancybox.css?v=2.1.5" type="text/css" media="screen" />
    
    <!-- Loading CSS file for different time period -->
    
   	<script>
	function getStylesheet() {
      var currentTime = new Date().getHours();
      if (currentTime >=20 || currentTime < 6) {
       document.write("<link rel='stylesheet' href='<?php echo get_template_directory_uri(); ?>/NightTime.css' type='text/css'>");
      }
	  else if (currentTime >=17 || currentTime < 20) {
       document.write("<link rel='stylesheet' href='<?php echo get_template_directory_uri(); ?>/DuskTime.css' type='text/css'>");
      }
	  else{
		  alert(currentTime);
	  }
	}
	
	getStylesheet();
    </script>
 	
<!-- Loading preload JS files -------------------------------------------------------------------------------------------------------------------------->

    <script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
	<!--<script src="http://code.jquery.com/jquery-migrate-1.1.0.min.js"></script>-->

    <script src="<?php echo get_template_directory_uri(); ?>/js/preload_function.js" type="text/javascript"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/animation.js" type="text/javascript"></script>
    
    <!-- Loading fancybox files -->
    <script src="<?php echo get_template_directory_uri(); ?>/js/fancybox/source/jquery.fancybox.pack.js?v=2.1.5" type="text/javascript"></script>
 
<!-- Fix for IE ---------------------------------------------------------------------------------------------------------------------------------------->
 
	<!--[if IE]>
		<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js" type="text/javascript"></script>
        <script src="<?php echo get_template_directory_uri(); ?>/js/jquery.pngFix.js" type="text/javascript"></script>
        
        <script type="text/javascript"> 
    		$(document).ready(function(){ 
        		$(document).pngFix(); 
                
   				 }); 
		</script> 
	<![endif]-->  
    
<!------------------------------------------------------------------------------------------------------------------------------------------------------->

	<?php wp_get_archives('type=monthly&format=link'); ?>
	<?php //comments_popup_script(); // off by default ?>
	<?php wp_head(); ?>

</head>
<body>
	<div id="Sitewrapper">
<header id="Mainheader">
	
	<div id="header_BG">
    	<div id="Star"></div>
    	<div id="Bground"></div>
		<div id="Fground"></div>
        <div id="Rock"></div>
    	<div id="Cloud_1"></div>
        <div id="Cloud_2"></div>
        <div id="Cloud_3"></div>    
        <div class="NightMask"></div>
    </div>
    
    <div id="SiteTitle">
    	<p id="SiteName"><a href="http://www.asukavalley.com">飛鳥谷<span class="ENG">-AsukaValley-</span></a></p>
        <p id="SiteDescription"><?php bloginfo('description');?></p>
    </div>
    
	<nav id="Mainnav" class="NavitSetting">
    	<ul>
            <li id="Mainnav_home">
            	<a href="http://www.asukavalley.com">
            	<ruby>
                	首頁
                	<rt>Top page</rt>
                </ruby>
                </a>
            </li>
            
            <li id="Mainnav_gal">
            	<a href="http://www.asukavalley.com/galgame-list/">
            	<ruby>
                	美少女遊戲
                	<rt>Galgame</rt>
                </ruby>
                </a>
            </li>
            
            <li id="Mainnav_anime">
            	<a href="http://www.asukavalley.com/anime-list/">
            	<ruby>
                	動畫
                	<rt>Anime</rt>
                </ruby>
                </a>
            </li>
            
            <li id="Mainnav_olg">
            	<a href="http://www.asukavalley.com/olg/">
            	<ruby>
                	線上遊戲
                	<rt>Online game</rt>
                </ruby>
                </a>
            </li>
        </ul>
    </nav>
</header>