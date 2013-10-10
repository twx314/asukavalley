<?php
/*
Template Name: Galgame List Page
*/
?>

<?php get_header(); ?>
<style type="text/css">#Mainnav_gal a{color:red !important;}</style>
<div class="NightMask_body">
<div id="center_wrapper">
<div id="center">
<div id="Left_column"><?php get_sidebar( 'intro_anime' ); ?></div>
<div id="Right_column"><?php get_sidebar( 'search' ); ?><?php get_sidebar( 'Chitika' ); ?></div>

<div id="Main_content">
<div class="ContentSetting"> 
	<h1 class="ContentTitle">美少女遊戲心得</h1>

<?php
$args = array(
	'post_type' => 'game',
	'posts_per_page' => -1,
);

$query = new WP_Query( $args );

if ( $query->have_posts() ) : 
	while ( $query->have_posts() ) : 	
		$query->the_post(); 

?>	
	<div class="News_FirstRecentPost">	
		<h2 class="ArticleTitle"><a href="<?php the_permalink(); ?>"> <?php the_title();?> </a></h2>
        <p class="News_FirstRecentPostDate"><?php the_time('M d, Y');?></p>
        <hr class="solid" />
		<div class="PostIMG"><?php the_post_thumbnail('News_thumb'); ?></div>
        <p class="News_RecentPostContent"><?php the_excerpt(); ?></p>
	</div> 
<?php

	endwhile;
	endif;
	wp_reset_postdata();
?>

</div> <!-- ContentSetting END -->
</div> <!-- Main content END -->
</div> <!-- Center END -->
</div> <!-- Center wrapper END -->
<?php get_footer(); ?>