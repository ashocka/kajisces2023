<?php
/**
 * UnderStrap functions and definitions
 *
 * @package UnderStrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$understrap_includes = array(
	'/theme-settings.php',                  // Initialize theme default settings.
	'/setup.php',                           // Theme setup and custom theme supports.
	'/widgets.php',                         // Register widget area.
	'/enqueue.php',                         // Enqueue scripts and styles.
	'/template-tags.php',                   // Custom template tags for this theme.
	'/pagination.php',                      // Custom pagination for this theme.
	'/hooks.php',                           // Custom hooks.
	'/extras.php',                          // Custom functions that act independently of the theme templates.
	'/customizer.php',                      // Customizer additions.
	'/custom-comments.php',                 // Custom Comments file.
	'/jetpack.php',                         // Load Jetpack compatibility file.
	'/class-wp-bootstrap-navwalker.php',    // Load custom WordPress nav walker. Trying to get deeper navigation? Check out: https://github.com/understrap/understrap/issues/567.
	'/woocommerce.php',                     // Load WooCommerce functions.
	'/editor.php',                          // Load Editor functions.
	'/deprecated.php',                      // Load deprecated functions.
);

foreach ( $understrap_includes as $file ) {
	require_once get_template_directory() . '/inc' . $file;
}

/////////////////// my own functions (Heidi) //////////////////

add_image_size( 'featuredp', 966, 265, true );

// custom display of breadcrumbs
if ( ! function_exists ( 'pancake_breadcrumbs' ) ) {
	function pancake_breadcrumbs() {
		echo '<ul class="breadcrumbs" itemscope itemtype="https://schema.org/BreadcrumbList">';

		//if (has_category()){

		$category = get_the_category();

		$name = $category[0]->name;	
		$slug = $category[0]->slug;	
			
		echo '
		  <li itemprop="itemListElement" itemscope
      itemtype="https://schema.org/ListItem"><a itemtype="https://schema.org/Thing"
       itemprop="item"
			    href="' . get_site_url() . "/tema/" . $slug . '"><span itemprop="name">' . $name . '</span></a>';
		//	}
		

		echo '<meta itemprop="position" content="1" />
		  </li>
		  <span class="br-divider">›</span>
		  <li itemprop="itemListElement" itemscope
      itemtype="https://schema.org/ListItem">
		    <a class="current-page" href="';
		echo get_permalink();
		echo '" itemtype="https://schema.org/Thing"
       itemprop="item">
		      <span itemprop="name">';


		// shorten long titles
		$string = get_the_title();
		$string = (strlen($string) > 20) ? mb_substr($string,0,17).'...' : $string;
		echo $string;
	
		
		echo '</span></a>
		    <meta itemprop="position" content="2" />
		  </li>
		</ul>';

	}
}


// Register Custom Post Type — custom CTAs / Nagovori
function nagovor_post_type() {

	$labels = array(
		'name'                  => _x( 'Nagovori', 'Post Type General Name', 'text_domain' ),
		'singular_name'         => _x( 'Nagovor', 'Post Type Singular Name', 'text_domain' ),
		'menu_name'             => __( 'Nagovori', 'text_domain' ),
		'name_admin_bar'        => __( 'Nagovori', 'text_domain' ),
		'archives'              => __( 'Nagovori Archives', 'text_domain' ),
		'attributes'            => __( 'Nagovori Attributes', 'text_domain' ),
		'parent_item_colon'     => __( 'Parent Nagovori:', 'text_domain' ),
		'all_items'             => __( 'Vsi Nagovori', 'text_domain' ),
		'add_new_item'          => __( 'Dodaj Nov Nagovor', 'text_domain' ),
		'add_new'               => __( 'Dodaj Nagovor', 'text_domain' ),
		'new_item'              => __( 'Nov Nagovor', 'text_domain' ),
		'edit_item'             => __( 'Uredi Nagovor', 'text_domain' ),
		'update_item'           => __( 'Posodobi Nagovor', 'text_domain' ),
		'view_item'             => __( 'Poglej Nagovor', 'text_domain' ),
		'view_items'            => __( 'Poglej Nagovore', 'text_domain' ),
		'search_items'          => __( 'Poišči Nagovor', 'text_domain' ),
		'not_found'             => __( 'Not found', 'text_domain' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'text_domain' ),
		'featured_image'        => __( 'Featured Image', 'text_domain' ),
		'set_featured_image'    => __( 'Set featured image', 'text_domain' ),
		'remove_featured_image' => __( 'Remove featured image', 'text_domain' ),
		'use_featured_image'    => __( 'Use as featured image', 'text_domain' ),
		'insert_into_item'      => __( 'Insert into item', 'text_domain' ),
		'uploaded_to_this_item' => __( 'Naloži v Nagovor', 'text_domain' ),
		'items_list'            => __( 'Seznam Nagovorov', 'text_domain' ),
		'items_list_navigation' => __( 'Items list navigation', 'text_domain' ),
		'filter_items_list'     => __( 'Filter items list', 'text_domain' ),
	);
	$args = array(
		'label'                 => __( 'Nagovor', 'text_domain' ),
		'description'           => __( 'Nagovori različnih segmentov obiskovalcev', 'text_domain' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'custom-fields' ),
		'taxonomies'            => array( 'category', 'post_tag' ),
		'hierarchical'          => false,
		'public'                => false,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 25,
		'menu_icon'             => 'dashicons-carrot',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => false,
		'can_export'            => true,
		'has_archive'           => false,
		'exclude_from_search'   => true,
		'publicly_queryable'    => true,
		'rewrite'               => false,
		'capability_type'       => 'page',
	);
	register_post_type( 'nagovor', $args );

}
add_action( 'init', 'nagovor_post_type', 0 );

remove_filter('get_the_excerpt', 'wp_trim_excerpt'); // remove the read more button from excerpts


//////// REMOVE COMMENTS ////////

// First, this will disable support for comments and trackbacks in post types
function df_disable_comments_post_types_support() {
   $post_types = get_post_types();
   foreach ($post_types as $post_type) {
      if(post_type_supports($post_type, 'comments')) {
         remove_post_type_support($post_type, 'comments');
         remove_post_type_support($post_type, 'trackbacks');
      }
   }
}
# https://keithgreer.uk/wordpress-code-completely-disable-comments-using-functions-php

add_action('admin_init', 'df_disable_comments_post_types_support');

// Then close any comments open comments on the front-end just in case
function df_disable_comments_status() {
   return false;
}
add_filter('comments_open', 'df_disable_comments_status', 20, 2);
add_filter('pings_open', 'df_disable_comments_status', 20, 2);

// Finally, hide any existing comments that are on the site. 
function df_disable_comments_hide_existing_comments($comments) {
   $comments = array();
   return $comments;
}
add_filter('comments_array', 'df_disable_comments_hide_existing_comments', 10, 2);

/// remove prepended "Category" etc from archive pages

add_filter( 'get_the_archive_title', function ($title) {    
        if ( is_category() ) {    
                $title = single_cat_title( '', false );    
            } elseif ( is_tag() ) {    
                $title = single_tag_title( '', false );    
            } elseif ( is_author() ) {    
                $title = '<span class="vcard">' . get_the_author() . '</span>' ;    
            } elseif ( is_tax() ) { //for custom post types
                $title = sprintf( __( '%1$s' ), single_term_title( '', false ) );
            } elseif (is_post_type_archive()) {
                $title = post_type_archive_title( '', false );
            }
        return $title;    
    });


// footer menu
function nov_menu() {
  register_nav_menu('footer_menu',__( 'Footer Menu' ));
}
add_action( 'init', 'nov_menu' );



// Auto-assign tag to posts in a specific category

function auto_assign_tag_to_category_posts() {
    // Specify the category ID and the tag ID
    $category_id = 4; // Novice
    $tag_id = 'simple';

    // Get all posts in the specified category
    $category_posts = get_posts(array('category' => $category_id, 'posts_per_page' => -1));

    // Assign the tag to each post
    foreach ($category_posts as $post) {
        wp_set_post_tags($post->ID, $tag_id, true);
    }
}

// Hook this function to run when WordPress initializes
add_action('init', 'auto_assign_tag_to_category_posts');

// remove the featured images 202/4
global $wpdb;
$wpdb->query( "
    DELETE FROM $wpdb->postmeta 
    WHERE meta_key = '_thumbnail_id'
" );


