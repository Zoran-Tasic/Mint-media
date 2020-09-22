<?php 

function mint_media_theme_setup() {
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');

    require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';
    register_nav_menus( array(
        'primary' => __( 'Primary Menu', 'mint_tema' ),
    ) );
}
add_action('after_setup_theme', 'mint_media_theme_setup');