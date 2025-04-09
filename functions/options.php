<?php
    function mon_theme_supports()
    {
        // add_theme_support('post-thumbnails');
        add_theme_support('title-tag');
        add_theme_support('menus');
        add_theme_support('post-thumbnails');
        add_theme_support('custom-logo', array(
            'height'      => 100,
            'width'       => 100,
            'flex-height' => true,
            'flex-width'  => true,
        ));
    }
    add_action('after_setup_theme', 'mon_theme_supports');
    
    function theme_4w4_enqueue_styles()
    {
        // wp_enqueue_style('mon-style-style', get_template_directory_uri() . '/normalize.css');
        wp_enqueue_style('mon-style-style', get_stylesheet_uri());
        wp_enqueue_script(
            'destination_restapi',
            get_template_directory_uri() . '/js/destination.js',
            array(),
            filemtime(get_template_directory() . 
            '/js/destination.js'),
            true
        );
        wp_enqueue_script(
            'carousesel',
            get_template_directory_uri() . '/js/caroussel.js',
            array(),
            filemtime(get_template_directory() . 
            '/js/caroussel.js'),
            true
        );
    }

    /*
    */
    add_action('wp_enqueue_scripts', 'theme_4w4_enqueue_styles');
    
    /**
     * Modifie la requete principale de WordPress avant qu'elle soit exécuté
     * le hook « pre_get_posts » se manifeste juste avant d'exécuter la requête principal
     * Dépendant de la condition initiale on peut filtrer un type particulier de requête
     * Dans ce cas ci nous filtrons la requête de la page d'accueil
     * @param WP_query  $query la requête principal de WP
     */
    function modifie_requete_principal($query)
    {
        if ($query->is_home() && $query->is_main_query() && ! is_admin()) {
            $query->set('category_name', 'populaire');
            $query->set('orderby', 'title');
            $query->set('order', 'ASC');
        }
    }
    add_action('pre_get_posts', 'modifie_requete_principal');
?>