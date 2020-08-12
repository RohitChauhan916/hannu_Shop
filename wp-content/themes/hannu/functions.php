<?php
   function hannuMain(){
    wp_enqueue_style('bootstrap-min', get_template_directory_uri() . '/css/bootstrap.min.css');
    wp_enqueue_style('font-min', get_template_directory_uri() . '/css/font-awesome.min.css');
    wp_enqueue_style('hannu_main_styles', get_stylesheet_uri());
    wp_enqueue_script('jquery-min', get_theme_file_uri('/js/jquery.min.js'), NULL, '1.0', true);
    wp_enqueue_script('bootstrap.min', get_theme_file_uri('/js/bootstrap.min.js'), NULL, '1.0', true);
}

add_action('wp_enqueue_scripts', 'hannuMain');


    function hannu_features(){
        add_theme_support('title-tag');
        register_nav_menu('headerMenuLocation', 'Header Menu Location');
    }
    add_action('after_setup_theme', 'hannu_features');

    function featured_image() {
        add_theme_support('post-thumbnails');
    }
    add_action('after_setup_theme', 'featured_image');

    function hannu_widgets_init() {
        register_sidebar( array(
            'name'          => __( 'Primary Sidebar', 'hannu' ),
            'id'            => 'sidebar-1',
            'before_widget' => '<aside id="%1$s" class="widget %2$s">',
            'after_widget'  => '</aside>',
            'before_title'  => '<h3 class="widget-title">',
            'after_title'   => '</h3>',
        ) );
    }

    add_action('after_setup_theme','hannu_widgets_init');


function hannu_setup(){

    add_theme_support( 'wc-product-gallery-lightbox' );
	add_theme_support( 'wc-product-gallery-zoom' );
	add_theme_support( 'wc-product-gallery-slider' );
}
add_action( 'after_setup_theme', 'hannu_setup' );

require get_template_directory() . '/inc/woocommerce.php';
?>