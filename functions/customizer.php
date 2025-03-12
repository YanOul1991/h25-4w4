<?php
    function theme_tp_customize_register($wp_customize)
    {
        // Le code pour ajouter des sections, des réglages et des contrôles ira ici.
        // Création d'une nouvelle section dans le customizer
        $wp_customize->add_section('hero_section', array(
            'title' => __(' Section hero', 'theme_tp'),
            'priority' => 30,
        ));

        
        ########################################## AUTEUR
        $wp_customize->add_setting('hero_auteur', array(
            'default' => __('Yanis Oulmane', 'theme_tp'),
            'sanitize_callback' => 'sanitize_text_field'
        ));
        $wp_customize->add_control('hero_auteur', array(
            'label' => __('Auteur', 'theme_tp'),
            'section' => 'hero_section',
            'type' => 'text',
        ));
        
        
        ########################################## IMAGE BACKGROUND 
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
        
        
        ########################################## COULEUR ICONES
        $wp_customize->add_setting('hero_color', array(
            'default' => '',
            'sanitize_callback' => 'esc_url_raw',
        ));
        
        $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'hero_color', array(
            'label' => __('Couleur icone sociaux', 'theme_tp'),
            'section' => 'hero_section',
        )));

        ########################################## COULEUR TEXT
        $wp_customize->add_setting('hero_color_txt', array(
            'default' => '',
            'sanitize_callback' => 'esc_url_raw',
        ));
        $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'hero_color_txt', array(
            'label' => __('Couleur texte', 'theme_tp'),
            'section' => 'hero_section',
        )));
        

        /* =========================================================================== */
        /* ==================== CUSTOMIZER POUR LA SECTION FOOTER ==================== */
        /* =========================================================================== */

        ########################################## AJOUT SECTION FOOTER
        $wp_customize->add_section('footer_section', array(
            'title' => __(' Section footer', 'theme_tp'),
            'priority' => 30,
        ));
        

        ########################################## FOOTER AUTEUR
        $wp_customize->add_setting('footer_auteur', array(
            'default' => __('Yanis Oulmane', 'theme_tp'),
            'sanitize_callback' => 'sanitize_text_field'
        ));
        $wp_customize->add_control('footer_auteur', array(
            'label' => __('Auteur', 'theme_tp'),
            'section' => 'footer_section',
            'type' => 'text',
        ));

        ########################################## FOOTER ADRESSE
        $wp_customize->add_setting('footer_adresse', array(
            'default' => __('Yanis Oulmane', 'theme_tp'),
            'sanitize_callback' => 'sanitize_text_field'
        ));
        $wp_customize->add_control('footer_adresse', array(
            'label' => __('Adresse', 'theme_tp'),
            'section' => 'footer_section',
            'type' => 'text',
        ));
        
        ########################################## FOOTER TELEPHONE
        $wp_customize->add_setting('footer_phone', array(
            'default' => __('Yanis Oulmane', 'theme_tp'),
            'sanitize_callback' => 'sanitize_text_field'
        ));
        $wp_customize->add_control('footer_phone', array(
            'label' => __('Telephone', 'theme_tp'),
            'section' => 'footer_section',
            'type' => 'text',
        ));
    }

    add_action('customize_register', 'theme_tp_customize_register');
?>