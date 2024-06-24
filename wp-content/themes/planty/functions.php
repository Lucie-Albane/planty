<?php

// Action qui permet de charger des scripts dans notre thème
add_action('wp_enqueue_scripts', 'theme_enqueue_styles');
function theme_enqueue_styles(){
    // Chargement du style.css du thème parent Twenty Twenty
    wp_enqueue_style('parent-style', get_template_directory_uri() . '/style.css');
    wp_enqueue_style('theme-style', get_stylesheet_directory_uri() . '/style.css', array(), filemtime(get_stylesheet_directory() . '/style.css'));
}


// Action qui permet d'afficher un lien spécifique (ici le lien vers l'admin de WP) si l'user est connecté

// add_filter = fonction pour ajouter un filtre personnalisé à la sortie du menu de navigation généré par WP
// wp_nav_menu_items = le nom du filtre à utiliser
// add_extra_item_to_nav_menu = nom de la fonction que l'on veut utiliser comme filtre perso définie juste après
// 10 = priorité du filtre, les filtres avec une priorité + élevée sont exécutés avant les filtres avec une priorité plus faible. 10 est par défaut.
// 2 = le nombre d'arguments que la fonction accepte (ici, '$items' et '$args')
add_filter('wp_nav_menu_items', 'add_extra_item_to_nav_menu', 10, 2);

// function add_extra_item_to_nav_menu = déclaration de fonction pour ajouter notre item au menu
// ($items, $args) = arguments de la fonction qui permettent à la fonction d'utiliser ces valeurs pour effectuer la tâche demandée (ajouter item au menu)
// '$items' = chaîne html générée par WP pour créer le menu de nav
// '$args' = infos du menu actuellement affiché 
function add_extra_item_to_nav_menu($items, $args) {

    // si l'utilisateur est connecté à WP et que l'id du menu vaut 1, alors ...
    if (is_user_logged_in()&& $args->menu == 1) {
        // $new_item = création d'une variable contenant le nouveau lien de navigation
        $new_item = '<li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-192"><a href="/planty/wp-admin" target="_blank">Admin</a></li>';
        
        // $items = le menu actuel
        // substr_replace = fonction php qui remplace un segment dans une chaîne
        // $new_item = le lien admin
        // strpos() = fonction php qui recherche la position de la première occurrence dans une chaîne de caractères 
        // strpos($items, '</li>', 0) = recherche la position de la première occurrence '</li>' dans la chaîne de caractères '$items' (donc, les items du menu de nav)
        //          en commençant par le premier élément de la chaîne $items (le premier lien de nav et sa balise fermante)
        // strpos($items, '</li>', 0), 0) = le dernier paramètre spécifie la longueur de la chaine à remplacer, dans notre cas c'est 0 car on ne remplace pas, mais on insère
        //      on utilise donc substr_replace pour insérer '$new_item' à la position spécifiée par strpos($items, '</li>', 0) dans la chaîne '$items' sans remplacer quoi que ce soit
        $items = substr_replace($items, $new_item, strpos($items, '</li>', 0), 0);
    }

    // renvoi la chaîne de caractères html du menu désormais modifiée ligne 47 et affiche le nouveau menu modifié.
    return $items; 
}
