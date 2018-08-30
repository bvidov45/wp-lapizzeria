<?php



/* Link or import database.php to file contains SQL structure*/ 

require get_template_directory() . '/inc/database.php';

/* Link or import reservation.php to file*/ 
require get_template_directory() . '/inc/reservations.php';

/* Link or import options.php to file create option pages*/ 
require get_template_directory() . '/inc/options.php';

/**
 * Proper way to enqueue scripts and styles
 */
function lapizzeria_specialties() {
    $labels = array(
      'name'               => _x( 'Pizzas', 'lapizzeria' ),
      'singular_name'      => _x( 'Pizza', 'post type singular name','lapizzeria' ),
      'add_new'            => _x( 'Add New', 'book', 'lapizzeria' ),
      'add_new_item'       => __( 'Add New Pizza', 'lapizzeria' ),
      'edit_item'          => __( 'Edit Pizzas', 'lapizzeria' ),
      'new_item'           => __( 'New Pizzas', 'lapizzeria' ),
      'all_items'          => __( 'All Pizzas', 'lapizzeria' ),
      'view_item'          => __( 'View Pizzas', 'lapizzeria' ),
      'search_items'       => __( 'Search Pizzas', 'lapizzeria' ),
      'not_found'          => __( 'No Pizzas found', 'lapizzeria' ),
      'not_found_in_trash' => __( 'No Pizzas found in the Trash', 'lapizzeria' ), 
      'menu_name'          => __( 'Pizzas', 'lapizzeria' ),
    );
    $args = array(
      'labels'        => $labels,
      'description'   => __('Description'. 'lapizzeria'),
      'public'        => true,
      'rewrite'       => array('slug' => 'specialties'),
      'capability_type' => 'post',
      'menu_position' => 6,
      'supports'      => array( 'title', 'editor', 'thumbnail' ),
      'has_archive'   => true,
      'taxonomies'   => array('category'),
    );
    register_post_type( 'specialties', $args ); 
  }
  add_action( 'init', 'lapizzeria_specialties' );



function lapizzeria_setup(){
    add_theme_support( 'post-thumbnails' );

    add_image_size('boxes',437 , 291, true);// (cropped)
    add_image_size('specialties',768 , 515, true);
    add_image_size('specialty-portrait',435 , 530, true);

    update_option('thumbnail_size_w',253);
    update_option('thumbnail_size_h',164);


}
add_action('after_setup_theme', 'lapizzeria_setup');


function lapizzeria_styles() {
    wp_enqueue_style( 'goggle-fonts', 'https://fonts.googleapis.com/css?family=Open+Sans:400,700|Raleway:400,900"' );
    wp_enqueue_style( 'font-awesome', 'https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css' );

    wp_enqueue_style( 'custom-jquery', get_template_directory_uri() . '/css/fluidbox.min.css' );
    wp_enqueue_style( 'custom-style', get_stylesheet_uri() );
    wp_enqueue_script( 'jquery', '//code.jquery.com/jquery-migrate-3.0.1.min.js', array('jquery'), '1.0.0', true );

    wp_enqueue_script( 'jquery-lightbox', get_template_directory_uri() . '/js/jquery.fluidbox.min.js', array('jquery'), '1.0.0', true );
    
    wp_enqueue_script( 'main-js', get_template_directory_uri() . '/js/main.js', array('jquery'), '1.0.0', true );
}
add_action( 'wp_enqueue_scripts', 'lapizzeria_styles' );

/*
Add Menus
*/
function lapizzeria_menus() {
    register_nav_menus([
        'header-menu' => __( 'Header Menu', 'lapizzeria' ),
        'social-menu' => __( 'Social Menu', 'lapizzeria' )
    ]);
  }
  add_action( 'init', 'lapizzeria_menus' );

  /** Widget Zone**/

 function lapizzeria_widgets(){

  register_sidebar(array(
      'name'          => 'Blog Sidebar',
      'id'            => 'blog_sidebar',
      'before_widget' => '<div class="widget">',
      'after_widget'  =>  '</div>',
      'before_title'  => '<h3>',
      'after_title'   => '</h3>'
  ));
 }
 add_action('widgets_init', 'lapizzeria_widgets');




?>