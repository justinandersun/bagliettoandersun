<?php
add_action( 'after_setup_theme', 'blankslate_setup' );
function blankslate_setup() {
	load_theme_textdomain( 'blankslate', get_template_directory() . '/languages' );
	add_theme_support( 'title-tag' );
	add_theme_support( 'automatic-feed-links' );
	add_theme_support( 'post-thumbnails' );
	global $content_width;
	if ( ! isset( $content_width ) ) $content_width = 640;
	register_nav_menus(
	array( 'main-menu' => __( 'Main Menu', 'blankslate' ) )
	);
}


add_action( 'wp_enqueue_scripts', 'blankslate_load_scripts' );
function blankslate_load_scripts() {
	wp_enqueue_script( 'jquery' );
}


add_action( 'comment_form_before', 'blankslate_enqueue_comment_reply_script' );
function blankslate_enqueue_comment_reply_script() {
	if ( get_option( 'thread_comments' ) ) { wp_enqueue_script( 'comment-reply' ); }
}


add_filter( 'the_title', 'blankslate_title' );
function blankslate_title( $title ) {
	if ( $title == '' ) {
		return '&rarr;';
	} else {
		return $title;
	}
}


add_filter( 'wp_title', 'blankslate_filter_wp_title' );
function blankslate_filter_wp_title( $title ) {
	return $title . esc_attr( get_bloginfo( 'name' ) );
}


add_action( 'widgets_init', 'blankslate_widgets_init' );
function blankslate_widgets_init() {
	register_sidebar( array (
		'name' => __( 'Sidebar Widget Area', 'blankslate' ),
		'id' => 'primary-widget-area',
		'before_widget' => '<li id="%1$s" class="widget-container %2$s">',
		'after_widget' => "</li>",
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	) );
}

function blankslate_custom_pings( $comment ) {
	$GLOBALS['comment'] = $comment;
	?>
	<li <?php comment_class(); ?> id="li-comment-<?php comment_ID(); ?>"><?php echo comment_author_link(); ?></li>
	<?php 
}


add_filter( 'get_comments_number', 'blankslate_comments_number' );
function blankslate_comments_number( $count ) {
	if ( !is_admin() ) {
		global $id;
		$comments_by_type = &separate_comments( get_comments( 'status=approve&post_id=' . $id ) );
		return count( $comments_by_type['comment'] );
	} else {
		return $count;
	}
}


add_action('after_setup_theme', 'remove_admin_bar');
function remove_admin_bar() {
	if (!current_user_can('administrator') && !is_admin()) {
	  show_admin_bar(false);
	}
}


// Committees
add_action( 'init', 'committee_init' );
function committee_init() {
	// Label GUI parts
	$labels = array(
	    'name' => _x( 'Committees', 'taxonomy general name' ),
	    'singular_name' => _x( 'Committee', 'taxonomy singular name' ),
	    'search_items' =>  __( 'Search Committees' ),
	    'popular_items' => __( 'Popular Committees' ),
	    'all_items' => __( 'All Committees' ),
	    'parent_item' => null,
	    'parent_item_colon' => null,
	    'edit_item' => __( 'Edit Committee' ), 
	    'update_item' => __( 'Update Committee' ),
	    'add_new_item' => __( 'Add New Committee' ),
	    'new_item_name' => __( 'New Committee Name' ),
	    'separate_items_with_commas' => __( 'Separate committees with commas' ),
	    'add_or_remove_items' => __( 'Add or remove committees' ),
	    'choose_from_most_used' => __( 'Choose from the most used committees' ),
	    'menu_name' => __( 'Committees' ),
	); 

	// Register the taxonomy
	register_taxonomy(
		'committees',
		'post',
		array(
			'hierarchical' => false,
			'labels' => $labels,
			'show_ui' => true,
    		'show_admin_column' => true,
    		'query_var' => true,
			'rewrite' => array( 'slug' => 'committee' ),
		)
	);
}

// Assembly
add_action( 'init', 'assembly_init' );
function assembly_init() {
	// Label GUI parts
	$labels = array(
	    'name' => _x( 'Assembly Members', 'taxonomy general name' ),
	    'singular_name' => _x( 'Assembly Member', 'taxonomy singular name' ),
	    'search_items' =>  __( 'Search Assembly Members' ),
	    'popular_items' => __( 'Popular Assembly Members' ),
	    'all_items' => __( 'All Assembly Members' ),
	    'parent_item' => null,
	    'parent_item_colon' => null,
	    'edit_item' => __( 'Edit Assembly Member' ), 
	    'update_item' => __( 'Update Assembly Member' ),
	    'add_new_item' => __( 'Add New Assembly Member' ),
	    'new_item_name' => __( 'New Assembly Member Name' ),
	    'separate_items_with_commas' => __( 'Separate Assembly Members with commas' ),
	    'add_or_remove_items' => __( 'Add or remove Assembly Members' ),
	    'choose_from_most_used' => __( 'Choose from the most used Assembly Members' ),
	    'menu_name' => __( 'Assembly Members' ),
	); 

	// Register the taxonomy
	register_taxonomy(
		'assembly',
		'post',
		array(
			'hierarchical' => false,
			'labels' => $labels,
			'show_ui' => true,
    		'show_admin_column' => true,
    		'query_var' => true,
			'rewrite' => array( 'slug' => 'assembly' ),
		)
	);
}


// Senate
add_action( 'init', 'senate_init' );
function senate_init() {
	// Label GUI parts
	$labels = array(
	    'name' => _x( 'Senate Members', 'taxonomy general name' ),
	    'singular_name' => _x( 'Senate Member', 'taxonomy singular name' ),
	    'search_items' =>  __( 'Search Senate Members' ),
	    'popular_items' => __( 'Popular Senate Members' ),
	    'all_items' => __( 'All Senate Members' ),
	    'parent_item' => null,
	    'parent_item_colon' => null,
	    'edit_item' => __( 'Edit Senate Member' ), 
	    'update_item' => __( 'Update Senate Member' ),
	    'add_new_item' => __( 'Add New Senate Member' ),
	    'new_item_name' => __( 'New Senate Member Name' ),
	    'separate_items_with_commas' => __( 'Separate Senate Members with commas' ),
	    'add_or_remove_items' => __( 'Add or remove Senate Members' ),
	    'choose_from_most_used' => __( 'Choose from the most used Senate Members' ),
	    'menu_name' => __( 'Senate Members' ),
	); 

	// Register the taxonomy
	register_taxonomy(
		'senate',
		'post',
		array(
			'hierarchical' => false,
			'labels' => $labels,
			'show_ui' => true,
    		'show_admin_column' => true,
    		'query_var' => true,
			'rewrite' => array( 'slug' => 'senate' ),
		)
	);
}




