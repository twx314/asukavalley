<?php get_header(); ?>
<div class="NightMask_body">
<div id="center_wrapper">
<div id="center">
<div id="Left_column"><?php get_sidebar( 'intro_home' ); ?></div>
<div id="Right_column"><?php get_sidebar( 'search' ); ?></div>

<div id="Main_content">
<div class="ContentSetting"> 
	<h1 class="ContentTitle"><?php single_cat_title(); ?> 的參與作品</h1>

<?php while ( have_posts() ) : the_post(); ?>

	<div class="News_FirstRecentPost">	
		<h2 class="ArticleTitle"><a href="<?php the_permalink(); ?>"> <?php the_title();?> </a></h2>
        <p class="News_FirstRecentPostDate"><?php the_time('M d, Y');?></p>
        <hr class="solid" />
		<div class="PostIMG"><?php the_post_thumbnail('News_thumb'); ?></div>
        <p class="News_RecentPostContent"><?php the_excerpt(); ?></p>
	</div>   

<?php endwhile; ?>

</div> <!-- ContentSetting END -->
</div> <!-- Main content END -->
</div> <!-- Center END -->
</div> <!-- Center wrapper END -->
<?php get_footer(); ?>