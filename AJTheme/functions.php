<?php 

function alienjefferson_theme_support(){
    // dynamic media support
    add_theme_support('title-tag');
    add_theme_support('custom-logo');
    add_theme_support('post-thumbnails');
    add_theme_support('custom-background');
}

add_action('after_setup_theme', 'alienjefferson_theme_support');


function alienjefferson_menus(){
    $locations = array(
            'primary' => "Desktop Primary Left Sidebar",
            'footer' => "Footer Menu Items"
    );
    register_nav_menus($locations);
}

add_action('init', 'alienjefferson_menus');

function alienjefferson_register_styles(){

    $version = wp_get_theme()->get( 'Version' );
    wp_enqueue_style('alienjefferson-style', get_template_directory_uri() . "/style.css", array('alienjefferson-bootstrap'), $version, 'all');
    wp_enqueue_style('alienjefferson-bootstrap', "https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css", array(), '4.4.1', 'all');
    wp_enqueue_style('alienjefferson-fontawesome', "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css", array(), '5.13.0', 'all');

}

add_action( 'wp_enqueue_scripts', 'alienjefferson_register_styles');


function alienjefferson_register_scripts(){

    $version = wp_get_theme()->get( 'Version' );
   wp_enqueue_script('alienjefferson-jquery','https://code.jquery.com/jquery-3.4.1.slim.min.js', array(), '3.4.1',true);
   wp_enqueue_script('alienjefferson-popper','https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js', array(), '1.16.0',true);
   wp_enqueue_script('alienjefferson-bootstrap','https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js', array(), '3.4.1',true);
   wp_enqueue_script('alienjefferson-main',get_template_directory_uri()."/assets/js/main.js", array(), $version,true);


}

add_action( 'wp_enqueue_scripts', 'alienjefferson_register_scripts');



function alienjefferson_widget_areas(){

    register_sidebar(
        array(
            'before_title' => '',
            'after_title' => '',
            'before_widget' => '',
            'after_widget' => '',
            'name' => 'Sidebar Area',
            'id' => 'sidebar-1',
            'description' => 'Sidebar Widget Area'
        )
    );

    register_sidebar(
        array(
            'before_title' => '',
            'after_title' => '',
            'before_widget' => '',
            'after_widget' => '',
            'name' => 'Footer Area',
            'id' => 'footer-1',
            'description' => 'Footer Widget Area'
        )
    );
}

add_action('widgets_init', 'alienjefferson_widget_areas');


?>