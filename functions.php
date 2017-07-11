<?php 
// This theme uses post thumbnails
add_theme_support( 'post-thumbnails' );
set_post_thumbnail_size( 150, 150, true );

// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'primary' => __( 'Primary Navigation', 'twentyten' ),
	) );

// Thumbnails in RSS Feed
function diw_post_thumbnail_feeds($content) {
	global $post;
	if(has_post_thumbnail($post->ID)) {
		$content = '<div>' . get_the_post_thumbnail($post->ID) . '</div>' . $content;
	}
	return $content;
}
add_filter('the_excerpt_rss', 'diw_post_thumbnail_feeds');
add_filter('the_content_feed', 'diw_post_thumbnail_feeds');

function post_is_in_descendant_category( $cats, $_post = null )
{
	foreach ( (array) $cats as $cat ) {
		// get_term_children() accepts integer ID only
		$descendants = get_term_children( (int) $cat, 'category');
		if ( $descendants && in_category( $descendants, $_post ) )
			return true;
	}
	return false;
}
//Register Custom Post Type
add_action('init', 'guide_register');
function guide_register() {
    	$args = array(
        	'label' => __('Guides'),
        	'singular_label' => __('Guide'),
        	'public' => true,
        	'show_ui' => true,
        	'capability_type' => 'post',
        	'hierarchical' => false,
        	'rewrite' => true,
        	'supports' => array('title', 'editor', 'excerpt', 'thumbnail')
        );
   	register_post_type( 'guide' , $args);
}
add_action( 'init', 'create_guide_taxonomies', 0 );
function create_guide_taxonomies() {
	register_taxonomy(
		"Classes",
		array("guide"),
		array("hierarchical" => true,
			"query_var" => "class",
			"label" => "Classes",
			"singular_label" => "Class",
			"rewrite" => array(
				'slug' => 'class'
			)
		)
	);
	register_taxonomy(
		"Professions",
		array("guide"),
		array(
			"hierarchical" => true,
			"query_var" => "profession",
			"label" => "Professions",
			"singular_label" => "Profession",
			"rewrite" => array(
				'slug' => 'profession'
			)
		)
	);
	register_taxonomy(
		"Dungeons",
		array("guide"),
		array(
			"hierarchical" => true,
			"query_var" => "dungeon",
			"label" => "Dungeons",
			"singular_label" => "Dungeon",
			"rewrite" => array(
				'slug' => 'dungeon'
			)
		)
	);
	register_taxonomy(
		"Raids",
		array("guide"),
		array(
			"hierarchical" => true,
			"query_var" => "raid",
			"label" => "Raids",
			"singular_label" => "Raid",
			"rewrite" => array(
				'slug' => 'raid'
			)
		)
	);
	register_taxonomy(
		"Battlegrounds",
		array("guide"),
		array(
			"hierarchical" => true,
			"query_var" => "battleground",
			"label" => "Battlegrounds",
			"singular_label" => "Battleground",
			"rewrite" => array(
				'slug' => 'battleground'
			)
		)
	);
}
?>