<?php
/*
Template Name: HomePage
*/
?>
<?php get_header(); ?>
<div class="NightMask_body">
<div id="center_wrapper">
<div id="center">
<div id="Left_column"><?php get_sidebar( 'intro_home' ); ?></div>
<div id="Right_column"><?php get_sidebar( 'search' ); ?></div>
<div id="Main_content">

<!-- Anime News --------------------------------------------------------------------------------------------------->

<div class="ContentSetting"> 
	<h1 class="ContentTitle">更新覆歷 (動畫)</h1>
    
<!-- First Recent Post (Anime) ------------------------------------------------------------------------------------>    
<?php
$args = array(
	'post_type' => 'anime',
	'posts_per_page' => 1
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
     <hr/>

<?php		
	endwhile;
	endif;
	wp_reset_postdata();
?>

<!-- Other Recent Post (Anime) ------------------------------------------------------------------------------------>
<?php
$args = array(
	'post_type' => 'anime',
	'posts_per_page' => 4,
	'offset' => 1
);

$query = new WP_Query( $args );

if ( $query->have_posts() ) : 
	while ( $query->have_posts() ) : 	
		$query->the_post(); 

?>	

	<div class="News_RecentPost">	        	
    	<span class="News_RecentPostDate"><?php the_time('M d, Y');?> - </span>
		<h2 class="ArticleTitle inline"><a href="<?php the_permalink(); ?>"> <?php the_title();?> </a></h2>    
	</div>   
	<hr/>
<?php

	endwhile;
	endif;
	wp_reset_postdata();
?>

</div> <!-- ContentSetting END --->


<!-- Galgame news ----------------------------------------------------------------------------------------------------->

<div class="ContentSetting">
	<h1 class="ContentTitle">更新覆歷 (Galgame)</h1>
    
<!-- First Recent Post (Galgame) ------------------------------------------------------------------------------------>     
<?php
$args = array(
	'post_type' => 'game',
	'posts_per_page' => 1
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
     <hr/>
     
<?php		
	endwhile;
	endif;
	wp_reset_postdata();
?>

<!-- Other Recent Post (Galgame) ------------------------------------------------------------------------------------>
<?php
$args = array(
	'post_type' => 'game',
	'posts_per_page' => 4,
	'offset' => 1
);

$query = new WP_Query( $args );

if ( $query->have_posts() ) : 
	while ( $query->have_posts() ) : 	
		$query->the_post(); 
?>	

	<div class="News_RecentPost">	        	
    	<span class="News_RecentPostDate"><?php the_time('M d, Y');?> - </span>
		<h2 class="ArticleTitle inline"><a href="<?php the_permalink(); ?>"> <?php the_title();?> </a></h2>      
     </div>   
     <hr/>
<?php		
	endwhile;
	endif;
	wp_reset_postdata();
?>

</div> <!-- ContentSetting END --->
</div> <!-- Main content END -->
</div> <!-- Center END -->
</div> <!-- Center wrapper END -->

<?php get_footer(); ?>