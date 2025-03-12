<?php
    function theme_tp_customize_register($wp_customize)
    {
        // Le code pour ajouter des sections, des réglages et des contrôles ira ici.
        // Création d'une nouvelle section dans le customizer
        $wp_customize->add_section('hero_section', array(
            'title' => __(' Section hero', 'theme_tp'),
            'priority' => 30,
        ));
    
    
        ###################### AUTEUR ######################
        ////////////////////////// Ajout des données
        $wp_customize->add_setting('hero_auteur', array(
            'default' => __('Yanis Oulmane', 'theme_tp'),
            'sanitize_callback' => 'sanitize_text_field'
        ));
    
        ////////////////////////// Ajout du contrôle des données
        $wp_customize->add_control('hero_auteur', array(
            'label' => __('Auteur', 'theme_tp'),
            'section' => 'hero_section',
            'type' => 'text',
        ));
    
    
        ################## IMAGE BACKGROUND ##################
        // Ajout donnee
        $wp_customize->add_setting('hero_background', array(
            'default' => '',
            'sanitize_callback' => 'esc_url_raw',
        ));
    
        // Controle donnee
        $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'hero_background', array(
            'label' => __('Image background', 'theme_tp'),
            'section' => 'hero_section',
        )));
    
    
        // Ajout donnee
        $wp_customize->add_setting('hero_color', array(
            'default' => '',
            'sanitize_callback' => 'esc_url_raw',
        ));
    
        $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'hero_color', array(
            'label' => __('Couleur icone sociaux', 'theme_tp'),
            'section' => 'hero_section',
            // 'settings' => 'hero_icone',
            // 'type' => 'color',
        )));
    
        ####################### FOOTER #######################
    
    
    }
    add_action('customize_register', 'theme_tp_customize_register');
?>