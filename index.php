<?php get_header(); ?>
<div class="NightMask">

<div id="center_wrapper">
<div id="center">

<div id="Left_column">
	<?php get_sidebar( 'intro_gal' ); ?>
</div>
	
<div id="Right_column">
	<?php get_sidebar( 'search' ); ?>
</div>

<div id="Main_content">

<!-- Anime News --------------------------------------------------------------------------------------------------->

<div class="ContentSetting"> 
	<h1 class="ContentTitle">更新覆歷 (動畫)</h1>
	<hr />
    
<!-- First Recent Post (Anime) ------------------------------------------------------------------------------------>    
<?php
$args = array(
	'cat' => 3,
	'posts_per_page' => 1
);

$query = new WP_Query( $args );

if ( $query->have_posts() ) : 
	while ( $query->have_posts() ) : 	
		$query->the_post(); 
?>	

	<div class="News_FirstRecentPost">	
		<div class="PostIMG"><?php the_post_thumbnail('News_thumb'); ?></div>
        	
		<h2 class="ArticleTitle"><a href="<?php the_permalink(); ?>"> <?php the_title();?> </a></h2>
        <p class="News_FirstRecentPostDate"><?php the_time('M d, Y');?></p>
        <hr class="solid" />
        <p class="News_RecentPostContent"><?php the_excerpt(); ?></p>
        
        <div class="clear"></div>
     </div>   
     <hr/>
<?php		
	endwhile;
	endif;
	wp_reset_postdata();
?>

<!-- Other Recent Post (Anime) ------------------------------------------------------------------------------------>
<?php
$skip = 0;
$args = array(
	'cat' => 3,
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

</div> <!-- Animes news END --->


<!-- Galgame news ----------------------------------------------------------------------------------------------------->

<div class="ContentSetting">
	<h1 class="ContentTitle">更新覆歷 (Galgame)</h1>
	<hr />
    
<!-- First Recent Post (Galgame) ------------------------------------------------------------------------------------>     
<?php
$args = array(
	'cat' => 2,
	'posts_per_page' => 1
);

$query = new WP_Query( $args );

if ( $query->have_posts() ) : 
	while ( $query->have_posts() ) : 	
		$query->the_post(); 
?>	

	<div class="News_FirstRecentPost">	
		<div class="PostIMG"><?php the_post_thumbnail('News_thumb'); ?></div>
        	
		<h2 class="ArticleTitle"><a href="<?php the_permalink(); ?>"> <?php the_title();?> </a></h2>
        <p class="News_FirstRecentPostDate"><?php the_time('M d, Y');?></p>
        <hr class="solid" />
        <div class="News_RecentPostContent"><?php the_excerpt(); ?></div>
        
        <div class="clear"></div>
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
	'cat' => 2,
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

</div> <!-- Animes news END --->


</div>




</div> <!-- Center END -->
</div>

</div>
<?php get_footer(); ?>

