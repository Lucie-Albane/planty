<?php

// Action qui permet de charger des scripts dans notre thème
add_action('wp_enqueue_scripts', 'theme_enqueue_styles');
function theme_enqueue_styles(){
    // Chargement du style.css du thème parent Twenty Twenty
    wp_enqueue_style('parent-style', get_template_directory_uri() . '/style.css');
    wp_enqueue_style('theme-style', get_stylesheet_directory_uri() . '/style.css', array(), filemtime(get_stylesheet_directory() . '/style.css'));
}


// Action qui permet d'afficher un lien spécifique (ici le lien vers l'admin de WP) si l'user est connecté
add_filter('wp_nav_menu_items', 'add_extra_item_to_nav_menu', 10, 2);
 
function add_extra_item_to_nav_menu($items, $args) {

    if (is_user_logged_in()&& $args->menu == 1) {
        $new_item = '<li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-192"><a href="/planty/wp-admin" target="_blank">Admin</a></li>';
        $items = substr_replace($items, $new_item, strpos($items, '</li>', 0), 0);
    }
    return $items; 
}
