<?php get_header(); ?>
<div class="NightMask_body">
<div id="center_wrapper">
<div id="center">
<div id="Left_column"><?php get_sidebar( 'intro_game' ); ?></div>
<div id="Right_column"><?php get_sidebar( 'search' ); ?></div>

<div id="Main_content">
<div class="SingleContentSetting">
<div class="SingleTitle">
	<h1><?php the_title(); ?></h1> 
    <p class="SinglePostDate"><?php the_time('M d, Y');?></p>
	<div class="sharebuttons">
		<!-- AddThis Button BEGIN -->
		<div class="addthis_toolbox addthis_default_style ">
		<a class="addthis_button_preferred_1"></a>
		<a class="addthis_button_preferred_2"></a>
		<a class="addthis_button_preferred_3"></a>
		<a class="addthis_button_preferred_4"></a>
		<a class="addthis_button_compact"></a>
		<a class="addthis_counter addthis_bubble_style"></a>
		</div>
		<script type="text/javascript">var addthis_config = {"data_track_addressbar":true};</script>
		<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-52335eea1a3881fd"></script>
		<!-- AddThis Button END -->    
	</div> <!-- sharebuttons END --> 
</div> <!--SingleTitle END-->
<?php the_content(); ?>
</div> <!--Single Content setting -->
</div> <!-- Main_content END -->
</div> <!-- Center END -->
</div> <!-- Center wrapper END -->
<?php get_footer(); ?>