<?php
/*
Template Name: Kingdom Knight Index Page
*/
?>

<?php get_header('kk'); ?>
<div class="NightMask_body">
<div id="center_wrapper">
<div id="center">
<div id="Left_column"><?php get_sidebar( 'Kingdom_Knight_sidebar' ); ?><?php get_sidebar( 'Chitika' ); ?></div>
<div id="OLG_Main_content">

<div class="ContentSetting"> 
	<h1 class="ContentTitle">更新履歷</h1>
	<section id="kknews_wrapper">
<?php
$args = array(
	'category_name' => 'Kingdom_Knight_Update',
	'posts_per_page' => 10
);

$query = new WP_Query( $args );
$New_post_num=1;

if ( $query->have_posts() ) : 
	while ( $query->have_posts() ) : 	
		$query->the_post(); 

?>	
	<div class="kknews">	
		<h2>
        	<a onclick=show_update("NP<?php echo $New_post_num; ?>")>
				<span id="NP<?php echo $New_post_num; ?>">▼</span>
				<?php the_time("m/d/Y");?>　－　<?php the_title(); ?>
			</a>
		</h2>
		<div id="NP<?php echo $New_post_num; ?>" class="new_post_frame"><?php the_content(); ?></div>
	</div>
       
<?php
	$New_post_num++;
	endwhile;
	endif;
	wp_reset_postdata();
?>		

	</section>

</div> <!-- ContentSetting END -->
</div> <!-- Main content END -->
</div> <!-- Center END -->
</div> <!-- Center wrapper END -->

<?php get_footer(); ?>