<?php

// Action qui permet de charger des scripts dans notre thème
add_action('wp_enqueue_scripts', 'theme_enqueue_styles');
function theme_enqueue_styles()
{
    // Chargement du style.css du thème parent Twenty Twenty
    wp_enqueue_style('parent-style', get_template_directory_uri() . '/style.css');
}

function plantwenty_supports()
{
    register_nav_menu('header', 'En tête du menu');
    register_nav_menu('footer', 'Pied de page');
}

add_action('after_setup_theme', 'plantwenty_supports');

// Désactivation de l'ajout automatique des balise p et br par Contact Form 7
add_filter('wpcf7_autop_or_not', '__return_false');

// Ajout du lien d'administration lorsque l'utilisateur est connecté
function plantwenty_admin_link($items, $args)
{
    // on vérifie si l'utilisateur est connecté
    if (is_user_logged_in()) {

        // on crée le code HTML qu'on stock dans une variable
        $admin_nav_link = '<li><a href="' . get_admin_url() . '" id="adminId">Admin</a></li>';

        // on divise $items avec preg_split() qu'on stock dans un tableau
        $array_nav = preg_split('/<\/li>/', $items);

        // on insère $admin_nav_link à l'index 1 dans le tableau $array_nav
        array_splice($array_nav, 1, 0, array($admin_nav_link));

        // on convertit le tableau en HTML avec implode()
        $items = implode('</li>', $array_nav) . '</li>';
    }
    return $items;
}

add_filter('wp_nav_menu_items', 'plantwenty_admin_link', 10, 2);
