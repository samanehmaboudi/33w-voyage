<?php

function mon_theme_supports() {

    add_theme_support('title-tag');


    add_theme_support('menus');


    add_theme_support('custom-logo', array(
        'height'      => 250,
        'width'       => 250,
        'flex-height' => true,
        'flex-width'  => true,
    ));

  
    add_theme_support('post-thumbnails');

    add_theme_support('html5', array('comment-list', 'comment-form', 'search-form', 'gallery', 'caption'));
}
add_action('after_setup_theme', 'mon_theme_supports');



function theme_tp_enqueue_styles() {
    wp_enqueue_style('normalize', get_template_directory_uri() . '/css/normalize.css');

    wp_enqueue_style(
        'main-styles',
        get_template_directory_uri() . '/style.css',
        array(),
        filemtime(get_template_directory() . '/style.css') // recharge automatique du CSS si modifié
    );
}
add_action('wp_enqueue_scripts', 'theme_tp_enqueue_styles');

/**
 * Modifie la requête principale de WordPress avant son exécution
 *
 * Le hook « pre_get_posts » est déclenché juste avant que WordPress exécute la requête principale.
 * Ici, on filtre uniquement la requête de la page d'accueil (is_home) pour afficher les articles
 * appartenant à la catégorie « populaire », triés par titre.
 *
 * @param WP_Query $query La requête principale de WordPress
 */
function modifie_requete_principal($query) {
    if ($query->is_home() && $query->is_main_query() && !is_admin()) {
        $query->set('category_name', 'populaire'); // Assurez-vous que le slug est bien "populaire"
        $query->set('orderby', 'title');
        $query->set('order', 'ASC');
    }
}
add_action('pre_get_posts', 'modifie_requete_principal');


add_image_size('custom-wide', 800, 400, true);
add_image_size('custom-small', 300, 200, true);



