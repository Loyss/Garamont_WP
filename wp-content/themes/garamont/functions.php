<?php

//register_nav_menu('principal', 'Menu principal');

add_theme_support('post-thumbnails');


//nav Walker
/*Register custom navigation walker*/
require_once('wp_bootstrap_navwalker.php');
register_nav_menu('principal', 'Menu principal');

// Créer Custom Post Type
add_action( 'init', 'create_post_type' );
function create_post_type()
{
    register_post_type('projets',
        array(
            'labels' => array(
                'name' => 'Projets',
                'singular_name' => 'Projet'
            ),
            'public' => true,
            'supports' => array('thumbnail', 'editor', 'title')
        )
    );
}

// Enlever l'éditeur visuel d'une page
function wpse_58501_page_can_richedit( $can )
{
    global $post;

    if ( 16 == $post->ID )
    return false;

    return $can;
}

?>