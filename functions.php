<?php

add_action( 'widgets_init', 'my_register_sidebars' );

function my_register_sidebars() {

	/* Register the 'primary' sidebar. */
	register_sidebar(
		array(
			'id' => 'intro_gal',
			'name' => 'intro_gal',
			'description' => 'Intro for galgame pages.' ,
			'before_widget' => '<div>',
			'after_widget' => '</div>',
			'before_title' => '<h3>',
			'after_title' => '</h3>'
		)
	);

	register_sidebar(
		array(
			'id' => 'search',
			'name' => 'search',
			'description' => 'search widget' ,
			'before_widget' => '<div>',
			'after_widget' => '</div>',
			'before_title' => '<h3>',
			'after_title' => '</h3>'
		)
	);
	
}

/* function to replace [...] in   the_excerpt()   to "read the full article" */
function new_excerpt_more($more) {
    global $post;
	return '<a class="moretag" href="'. get_permalink($post->ID) . '"> 繼續閱讀...</a>';
}
add_filter('excerpt_more', 'new_excerpt_more');


if ( function_exists( 'add_theme_support' ) ) {
	add_theme_support( 'post-thumbnails' );
        set_post_thumbnail_size('full');
		add_image_size('News_thumb', 200, 200); 
}



?>