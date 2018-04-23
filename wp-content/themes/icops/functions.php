<?php

function my_theme_enqueue_styles() {

    $parent_style = 'bootstrap-basic4-style'; // This is 'twentyfifteen-style' for the Twenty Fifteen theme.

    wp_enqueue_style( $parent_style, get_template_directory_uri() . '/style.css' );
    wp_enqueue_style( 'child-style',
        get_stylesheet_directory_uri() . '/style.css',
        array( $parent_style ),
        wp_get_theme()->get('Version')
    );
    wp_enqueue_style('app-style', get_stylesheet_directory_uri() . '/assets/css/app.css');


}
add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_styles' );




// function custom_add_fa_fonts() {
//  wp_enqueue_style( 'custom-fa-fonts', '//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css', false );
//  }
//  add_action( 'wp_enqueue_scripts', 'custom_add_fa_fonts' );




// function custom_add_google_fonts() {
//  wp_enqueue_style( 'custom-google-fonts', 'https://fonts.googleapis.com/css?family=Roboto:300,400,700', false );
//  }
//  add_action( 'wp_enqueue_scripts', 'custom_add_google_fonts' );



add_action( 'widgets_init', 'registerFooterSidebars' );
function registerFooterSidebars()
        {
           
            register_sidebar(array(
                'name'          => __('Footer mid left', 'bootstrap-basic4'),
                'id'            => 'footer-mid-left',
                'before_widget' => '<div id="%1$s" class="widget %2$s">',
                'after_widget'  => '</div>',
                'before_title'  => '<h1 class="widget-title">',
                'after_title'   => '</h1>',
            ));
            register_sidebar(array(
                'name'          => __('Footer mid right', 'bootstrap-basic4'),
                'id'            => 'footer-mid-right',
                'before_widget' => '<div id="%1$s" class="widget %2$s">',
                'after_widget'  => '</div>',
                'before_title'  => '<h1 class="widget-title">',
                'after_title'   => '</h1>',
            ));


        }// registerSidebars


