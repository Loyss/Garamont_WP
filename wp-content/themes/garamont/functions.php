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

// Hide editor for specific page templates.
add_action( 'admin_init', 'hide_editor' );
function hide_editor() {
// Get the Post ID.
    $post_id = $_GET['post'] ? $_GET['post'] : $_POST['post_ID'] ;
    if( !isset( $post_id ) ) return;

// Get the name of the Page Template file.
    $template_file = get_post_meta($post_id, '_wp_page_template', true);
    if($template_file == 'lycee.php'){ // edit the template name
        remove_post_type_support('page', 'editor');
    }
}

// Hide category from admin menu wordpress
add_action('admin_menu', 'my_remove_menus');
function my_remove_menus() {
    remove_menu_page('edit.php');
    remove_menu_page('edit-comments.php');
}

?>