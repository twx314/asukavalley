<!DOCTYPE html>
<html>
<head>

	<title><?php wp_title(); ?></title>

	<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />	
	<meta name="generator" content="WordPress <?php bloginfo('version'); ?>" /> <!-- leave this for stats please -->

	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/CSSReset.css" type="text/css" media="screen" />
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />

    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/valley_S.css" type="text/css" media="only screen and (max-width: 1000px)" />
	<link rel="alternate" type="application/rss+xml" title="RSS 2.0" href="<?php bloginfo('rss2_url'); ?>" />
	<link rel="alternate" type="text/xml" title="RSS .92" href="<?php bloginfo('rss_url'); ?>" />
	<link rel="alternate" type="application/atom+xml" title="Atom 0.3" href="<?php bloginfo('atom_url'); ?>" />
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
    <script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
	<script src="http://code.jquery.com/jquery-migrate-1.1.0.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/function.js" type="text/javascript"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/animation.js" type="text/javascript"></script>
	<!--[if IE]>
		<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js" type="text/javascript"></script>
        <script src="<?php echo get_template_directory_uri(); ?>/js/jquery.pngFix.js" type="text/javascript"></script>
        
        <script type="text/javascript"> 
    		$(document).ready(function(){ 
        		$(document).pngFix(); 
                
   				 }); 
		</script> 
	<![endif]-->
 
    
	<?php wp_get_archives('type=monthly&format=link'); ?>
	<?php //comments_popup_script(); // off by default ?>
	<?php wp_head(); ?>

</head>
<body>

<header>
	<div id="header_BG">
    	<div id="Cloud_1"></div>
    	<div id="Lland"></div>
    	<div id="Rland"></div>
        <div id="Fground"></div>
    </div>

</header>