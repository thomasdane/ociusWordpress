<?php

// Helper Functions
// -------------------------

require_once('inc/extras.php');

// Post Types & Taxonomies
// -------------------------

require_once('inc/types.php');

// Shortcodes
// -------------------------

require_once('inc/shortcodes.php');

// Recent Posts Custom Widget

require_once('inc/recent-posts.php');


// Theme
// -------------------------

function ocius_scripts() {

	// jQuery
	wp_enqueue_script(
		'jquery'
	);

	// site
	 wp_enqueue_script(
        'site',
        get_template_directory_uri() . '/assets/js/site.js'
    );

	// modernizr
	wp_enqueue_script(
		'modernizr',
		get_template_directory_uri() . '/assets/js/vendor/modernizr-2.6.2.min.js',
		false,
		'2.6.2',
		false
	);

    // share
    wp_enqueue_script(
        'share',
        get_template_directory_uri() . '/assets/js/plugins/share.js',
        array('jquery'),
        '1.0.0',
        true
    );


	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) )
		wp_enqueue_script( 'comment-reply' );

}

add_action( 'wp_enqueue_scripts', 'ocius_scripts' );



// Theme Settings
// -------------------------

    // Register Menus
    register_nav_menus( array(
        'menu_primary' => 'Main Menu',
        'menu_footer' => 'Footer Menu'
        ) );

	add_editor_style( 'assets/css/editor.css' );

	add_theme_support( 'post-thumbnails');

	// Page Sidebar

	register_sidebar(array(
		'name' => __( 'Page Sidebar' ),
		'id' => 'page-sidebar',
		'description' => __( 'Widgets across pages.' ),
		'before_title' => '<h6>',
		'after_title' => '</h6>',
		'before_widget' => '<aside id="%1$s" class="widget page-widget %2$s">',
		'after_widget' => '</aside>'
	));

	// Homepage Sidebar
	register_sidebar(array(
		'name' => __( 'Home Sidebar' ),
		'id' => 'home-sidebar',
		'description' => __( 'Widgets for homepage.' ),
		'before_title' => '<h6>',
		'after_title' => '</h6>',
		'before_widget' => '<aside id="%1$s" class="widget home-widget %2$s">',
		'after_widget' => '</aside>'
	));

	// Blog Sidebar
	register_sidebar(array(
		'name' => __( 'Blog Sidebar' ),
		'id' => 'blog-sidebar',
		'description' => __( 'Widgets for blog & post pages.' ),
		'before_title' => '<h6>',
		'after_title' => '</h6>',
		'before_widget' => '<aside id="%1$s" class="widget blog-widget %2$s">',
		'after_widget' => '</aside>'
	));

if (function_exists('acf_add_options_page')) {
    acf_add_options_page();
}

// Image Sizes
// -------------------------

add_image_size('large-feature', 550, 380, TRUE);
add_image_size('small-feature', 450, 240, TRUE);
add_image_size('page-link', 90, 90, TRUE);
add_image_size( 'product', 300, 240, true );

function mce_editor_buttons( $buttons ) {
    array_unshift( $buttons, 'styleselect' );
    return $buttons;
}

add_filter( 'mce_buttons_2', 'mce_editor_buttons' );

function mce_before_init( $settings ) {

    $style_formats = array(
        array(
            'title' => 'Button',
            'selector' => 'a',
            'classes' => 'button button-primary'
        )
    );

    $settings['style_formats'] = json_encode($style_formats);

    return $settings;

}

add_filter('tiny_mce_before_init', 'mce_before_init');

// Responsive Youtube Embeds
add_filter('embed_oembed_html', 'my_embed_oembed_html', 99, 4);

function my_embed_oembed_html($html, $url, $attr, $post_id) {
  return '<div class="video-container">' . $html . '</div>';
}
