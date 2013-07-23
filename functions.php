<?php

add_action( 'widgets_init', 'my_register_sidebars' );

function my_register_sidebars() {

	/* Register the 'primary' sidebar. */
	
	register_sidebar(
		array(
			'id' => 'intro_home',
			'name' => 'intro_home',
			'description' => 'Intro for home pages.' ,
			'before_widget' => '<div>',
			'after_widget' => '</div>',
			'before_title' => '<h3>',
			'after_title' => '</h3>'
		)
	);	
	
	register_sidebar(
		array(
			'id' => 'intro_game',
			'name' => 'intro_game',
			'description' => 'Intro for galgame pages.' ,
			'before_widget' => '<div>',
			'after_widget' => '</div>',
			'before_title' => '<h3>',
			'after_title' => '</h3>'
		)
	);

	register_sidebar(
		array(
			'id' => 'intro_anime',
			'name' => 'intro_anime',
			'description' => 'Intro for anime pages.' ,
			'before_widget' => '<div>',
			'after_widget' => '</div>',
			'before_title' => '<h3>',
			'after_title' => '</h3>'
		)
	);
	
	register_sidebar(
		array(
			'id' => 'intro_olg',
			'name' => 'intro_olg',
			'description' => 'Intro for Online game pages.' ,
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

/* function to able post-thumbnail */
if ( function_exists( 'add_theme_support' ) ) {
	add_theme_support( 'post-thumbnails' );
        set_post_thumbnail_size('full');
		add_image_size('News_thumb', 200, 200); 
}

/* Function for custom post-type */
function my_custom_post_anime() {
	$labels = array(
		'name'               => _x( 'Animes', 'post type general name' ),
		'singular_name'      => _x( 'Anime', 'post type singular name' ),
		'add_new'            => _x( 'Add New', 'Anime' ),
		'add_new_item'       => __( 'Add New Anime' ),
		'edit_item'          => __( 'Edit Anime' ),
		'new_item'           => __( 'New Anime' ),
		'all_items'          => __( 'All Animes' ),
		'view_item'          => __( 'View Anime' ),
		'search_items'       => __( 'Search Animes' ),
		'not_found'          => __( 'No animes found' ),
		'not_found_in_trash' => __( 'No animes found in the Trash' ), 
		'parent_item_colon'  => '',
		'menu_name'          => 'Anime'
	);
	$args = array(
		'labels'        => $labels,
		'description'   => 'All anime reviews',
		'public'        => true,
		'menu_position' => 5,
		'supports'      => array( 'title', 'editor', 'thumbnail', 'excerpt', 'comments' ),
		'has_archive'   => true,
		'taxonomies' => array('category', 'post_tag')
	);
	register_post_type( 'anime', $args );	
}

function my_custom_post_game() {
	$labels = array(
		'name'               => _x( 'Games', 'post type general name' ),
		'singular_name'      => _x( 'Game', 'post type singular name' ),
		'add_new'            => _x( 'Add New', 'game' ),
		'add_new_item'       => __( 'Add New game' ),
		'edit_item'          => __( 'Edit game' ),
		'new_item'           => __( 'New game' ),
		'all_items'          => __( 'All games' ),
		'view_item'          => __( 'View game' ),
		'search_items'       => __( 'Search games' ),
		'not_found'          => __( 'No games found' ),
		'not_found_in_trash' => __( 'No games found in the Trash' ), 
		'parent_item_colon'  => '',
		'menu_name'          => 'Game'
	);
	$args = array(
		'labels'        => $labels,
		'description'   => 'All game reviews',
		'public'        => true,
		'menu_position' => 5,
		'supports'      => array( 'title', 'editor', 'thumbnail', 'excerpt', 'comments' ),
		'has_archive'   => true,
		'taxonomies' => array('category', 'post_tag')
	);
	register_post_type( 'game', $args );	
}

add_action( 'init', 'my_custom_post_anime' );
add_action( 'init', 'my_custom_post_game' );

?>