<?php
require_once get_theme_file_path( '/inc/tgm.php' );

// Cache busting 

if(site_url() == "http://alpha.test"){
        define("VERSION", time());
    }
else{
    define("VERSION",wp_get_theme()->get("Version"));
}

function alpha_setup(){

    load_theme_textdomain( 'alpha', get_template_directory() . '/languages' );
    add_theme_support( 'post-thumbnails' );
    add_theme_support( 'title-tag' );
    register_nav_menu("topmenu", __("Top menu","alpha"));
    register_nav_menu("footermenu", __("Footer menu","alpha"));

    
}
add_action("after_setup_theme","alpha_setup");

function alpha_assets(){
    wp_enqueue_style("alpha", get_stylesheet_uri(), null , VERSION );
    wp_enqueue_style("bootstrap", "//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css");
    wp_enqueue_style("featherlight-css", "//cdn.rawgit.com/noelboss/featherlight/1.7.13/release/featherlight.min.css" );

    wp_enqueue_script("featherlight-js", "//cdn.rawgit.com/noelboss/featherlight/1.7.13/release/featherlight.min.js", array( "jquery" ), VERSION , true);
    wp_enqueue_script("alpha-main-js", get_theme_file_uri("assets/js/main.js"), array("jquery","featherlight-js") , VERSION , true);
}
add_action("wp_enqueue_scripts", "alpha_assets");

function alpha_sidebar(){
    register_sidebar( array(
    'name'          => __( 'Right sidebar', 'alpha' ),
    'id'            => 'sidebar-1',
    'description'   => __( 'Right sidebar', 'alpha' ),
    'before_widget' => '',
    'after_widget'  => '',
    'before_title'  => '',
    'after_title'   => '',
    ) );

   register_sidebar( array(
   'name'          => __( 'Footer-Left', 'alpha' ),
   'id'            => 'footer-left',
   'description'   => __( 'Footer left sidebar area', 'alpha' ),
   'before_widget' => '',
   'after_widget'  => '',
   'before_title'  => '',
   'after_title'   => '',
   ) );
   register_sidebar( array(
    'name'          => __( 'Footer-right', 'alpha' ),
    'id'            => 'footer-right',
    'description'   => __( 'Footer right sidebar area', 'alpha' ),
    'before_widget' => '',
    'after_widget'  => '',
    'before_title'  => '',
    'after_title'   => '',
    ) );



}
add_action("widgets_init","alpha_sidebar");

function alpha_nav_menu_css_class($classes, $item){
    $classes[] = "list-inline-item";
    $classes[] = "ml-2";
    return $classes;
}
add_filter("nav_menu_css_class","alpha_nav_menu_css_class", 10, 2);