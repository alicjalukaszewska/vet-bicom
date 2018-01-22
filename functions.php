<?php 

/* Add bootstrap support to the Wordpress theme*/
 
function theme_styles(){
	wp_enqueue_style( 'bootstrap-css', get_template_directory_uri() . '/bootstrap/css/bootstrap.min.css' );
	wp_enqueue_style( 'photogallery-css', get_template_directory_uri() . '/css/bsPhotoGallery.css' );	
	wp_enqueue_style( 'style-css', get_template_directory_uri() . '/css/style.css' );
}

function theme_js() {	
	wp_enqueue_script( 'jquery', '//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js', array('jquery'), '1.9.1', true); 
	wp_enqueue_script( 'bootstrap-js', '//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js', array('jquery'), true); 
	wp_enqueue_script( 'photogallery-js', get_template_directory_uri() . '/js/bsPhotoGallery.js', array('jquery'), true);
	wp_enqueue_script( 'functions-js', get_template_directory_uri() . '/js/functions.js', array(), '1.0.0', true);
}

add_action( 'wp_enqueue_scripts', 'theme_styles' );
add_action( 'wp_enqueue_scripts', 'theme_js' );
add_theme_support( 'post-thumbnails' );
add_image_size('medium', get_option( 'medium_size_w' ), get_option( 'medium_size_h' ), true );

function custom_excerpt_length( $length ) {
	return 25;
}
add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );

if ( function_exists('register_sidebar') )
	register_sidebar(array(
		'before_widget' => '',
		'after_widget' => '',
		'before_title' => '<h3>',
		'after_title' => '</h3>',
	));
function pagination() {
    
    global $wp_query;
    
    if ($wp_query->max_num_pages > 1) { echo '<p class="pages" role="navigation">' . paginate_links( array(
        'base' => @add_query_arg('paged','%#%'),
        'format' => '?paged=%#%',
        'current' => max( 1, get_query_var('paged') ),
        'total' => $wp_query->max_num_pages,
        'prev_text' => __('« '),
        'next_text'    => __(' »'),
    ) ) . '</p>'; }
}
?>