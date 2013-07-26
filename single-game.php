<?php get_header(); ?>
<div class="NightMask_body">
<div id="center_wrapper">
<div id="center">

<div id="Left_column">
	<?php get_sidebar( 'intro_game' ); ?>
</div>
	
<div id="Right_column">
	<?php get_sidebar( 'search' ); ?>
</div>

<div id="Main_content">

<div class="SingleContentSetting">
	<h1 class="SingleTitle"><?php the_title(); ?><p class="SinglePostDate"><?php the_time('M d, Y');?></p></h1>
	 
<?php the_content(); ?>

</div> <!--Single Content setting -->


</div> <!-- Main_content END -->
     

</div> <!-- Center END -->
</div>
</div> <!-- NightMask END -->

<?php get_footer(); ?>