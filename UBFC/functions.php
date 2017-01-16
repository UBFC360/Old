<?php

add_action('after_setup_theme', 'plus_admin_bar');
function plus_admin_bar () {
    show_admin_bar(false);
}

add_theme_support('html5');
add_theme_support('menus');
add_theme_support('post-thumbnails');

add_action('wp_enqueue_scripts', 'ubfc_styles');
function ubfc_styles() {
    wp_enqueue_style('fa', get_stylesheet_directory_uri() . '/css/fontawesome.min.css');
    wp_enqueue_style('main', get_stylesheet_directory_uri() . '/css/styles.css');
    wp_enqueue_style('accueil', get_stylesheet_directory_uri() . '/css/accueil.css');
}

add_action( 'init', 'ubfc_post_type' );
function ubfc_post_type() {
    register_post_type( 'actualite',
        array(
            'label' => 'Actualité',
            'public' => true,
            'has_archive' => true,
            'supports' => array( 'title', 'excerpt' , 'editor', 'thumbnail' ),
        )
    );

    register_post_type( 'agenda',
        array(
            'label' => 'Agenda',
            'public' => true,
            'has_archive' => true,
            'supports' => array('title', 'editor','thumbnail' ),
        )
    );

    register_post_type( 'video',
        array(
            'label' => 'Video',
            'public' => true,
            'has_archive' => true,
            'supports' => array('title','editor','thumbnail'),
        )

    );

    register_post_type( 'formation',
        array(
            'label' => 'Formation',
            'public' => true,
            'has_archive' => true,
            'supports' => array('title','editor','thumbnail'),
        )

    );

    register_post_type( 'laboratoire',
        array(
            'label' => 'Laboratoire',
            'public' => true,
            'has_archive' => true,
            'supports' => array('title','editor','thumbnail'),
        )

    );

    register_post_type( 'projets',
        array(
            'label' => 'Projets',
            'public' => true,
            'has_archive' => true,
            'supports' => array('title','editor','thumbnail'),
        )

    );
//    flush_rewrite_rules( false );
}