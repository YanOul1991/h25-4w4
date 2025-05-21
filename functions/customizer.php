<?php
function theme_tp_customize_register($wp_customize)
{
    /* ==================== CUSTOMIZER INFOS GLOBALES ==================== */

    ########################################## AJOUT SECTION DANS LE CUSTOMIZER
    $wp_customize->add_section('infos_globales', array(
        'title' => __('Infos globales', 'theme_tp'),
        'priority' => 30,
    ));

    ########################################## AUTEUR
    $wp_customize->add_setting('infos_auteur', array(
        'default' => __('AUTEUR', 'theme_tp'),
        'sanitize_callback' => 'sanitize_text_field'
    ));
    $wp_customize->add_control('infos_auteur', array(
        'label' => __('Auteur', 'theme_tp'),
        'section' => 'infos_globales',
        'type' => 'text',
    ));

    ########################################## EMAIL
    $wp_customize->add_setting('infos_email', array(
        'default' => __('EMAIL', 'theme_tp'),
        'sanitize_callback' => 'sanitize_text_field'
    ));
    $wp_customize->add_control('infos_email', array(
        'label' => __('Email', 'theme_tp'),
        'section' => 'infos_globales',
        'type' => 'text',
    ));

    ########################################## ADRESSE
    $wp_customize->add_setting('infos_adresse', array(
        'default' => __('ADRESSE', 'theme_tp'),
        'sanitize_callback' => 'sanitize_text_field'
    ));
    $wp_customize->add_control('infos_adresse', array(
        'label' => __('Adresse', 'theme_tp'),
        'section' => 'infos_globales',
        'type' => 'text',
    ));

    ########################################## TELEPHONE
    $wp_customize->add_setting('infos_phone', array(
        'default' => __('PHONE', 'theme_tp'),
        'sanitize_callback' => 'sanitize_text_field'
    ));
    $wp_customize->add_control('infos_phone', array(
        'label' => __('Telephone', 'theme_tp'),
        'section' => 'infos_globales',
        'type' => 'text',
    ));

    /* ============================== SECTION FOOTER ============================== */
    $wp_customize->add_section('footer', array(
        'title' => __('Footer', 'theme_tp'),
        'priority' => 30,
    ));
    ########################################## IMAGE BACKGROUND 
    // Ajout donnee
    $wp_customize->add_setting('footer_img', array(
        'default' => '',
        'sanitize_callback' => 'esc_url_raw',
    ));
    // Controle donnee
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'footer_img', array(
        'label' => __('Image background', 'theme_tp'),
        'section' => 'footer',
    )));


    /* ============================== SECTION HERO ============================== */
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

    ########################################## IMAGE CAROUSSEL 
    $wp_customize->add_setting('img_caroussel_count', array(
        'default'   => 1,
        'transport' => 'refresh',
    ));
    $wp_customize->add_control('img_caroussel_count', array(
        'label'   => __("Nombre d'images", 'theme_tp'),
        'section' => 'hero_section',
        'type'    => 'number',
        'input_attrs' => array(
            'min' => 1,
            'max' => 10,
            'step' => 1,
        ),
    ));
    $nbImgCaroussel = get_theme_mod("img_caroussel_count");
    for ($i = 0; $i < $nbImgCaroussel; $i++) {
        $wp_customize->add_setting('img_carousel' . $i, array(
            'default' => '',
            'sanitize_callback' => 'esc_url_raw',
        ));
        $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, "img_carousel$i", array(
            'label' => __('Image caroussel ' . $i + 1, 'theme_tp'),
            'section' => 'hero_section',
        )));
    }

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

    /* ================ IMAGES BACKGROUND ALEATOIRES ================ */
    $wp_customize->add_section('img_rand', array(
        'title'    => __('Images background random', 'theme_tp'),
        'priority' => 30,
    ));

    ###################### CONTROLE DU NOMBRE D'IMAGES RANDOM
    $wp_customize->add_setting('img_rand_count', array(
        'default'   => 1,
        'transport' => 'refresh',
    ));
    $wp_customize->add_control('img_rand_count', array(
        'label'   => __("Nombre d'images", 'theme_tp'),
        'section' => 'img_rand',
        'type'    => 'number',
        'input_attrs' => array(
            'min' => 1,
            'max' => 10,
            'step' => 1,
        ),
    ));

    $nbImg = get_theme_mod("img_rand_count");
    for ($i = 0; $i < (int)$nbImg; $i++) {
        $wp_customize->add_setting('img_rand_' . $i, array(
            'default' => '',
            'sanitize_callback' => 'esc_url_raw',
        ));
        $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, "img_rand_$i", array(
            'label' => __('Image background ' . $i + 1, 'theme_tp'),
            'section' => 'img_rand',
        )));
    }

    #################################################### 404 not found
    $wp_customize->add_section('notfound', array(
        "title" => __("Page 404", "theme_tp"),
        "priority" => 30,
    ));

    ######## IMAGE BACKGROUND
    $wp_customize->add_setting('notfound_image', array(
        'default' => '',
        'sanitize_callback' => 'esc_url_raw',
    ));
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'notfound_image', array(
        'label' => __('Image background', 'theme_tp'),
        'section' => 'notfound',
    )));

    ####### TITRE
    $wp_customize->add_setting('notfound_titre', array(
        'default' => __('ERROR 404 - Not found', 'theme_tp'),
        'sanitize_callback' => 'sanitize_text_field'
    ));
    $wp_customize->add_control('notfound_titre', array(
        'label' => __('Titre', 'theme_tp'),
        'section' => 'notfound',
        'type' => 'text',
    ));

    ##### MESSAGE
    $wp_customize->add_setting('notfound_description', array(
        'default' => __('Message'),
        'sanitize_callback' => 'sanitize_text_field'
    ));
    $wp_customize->add_control('notfound_description', array(
        'label' => __('Description', 'theme_tp'),
        'section' => 'notfound',
        'type' => 'text',
    ));
    ############ Couleur not found
    $wp_customize->add_setting('notfound_color', array(
        'default' => '',
        'sanitize_callback' => 'esc_url_raw',
    ));

    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'notfound_color', array(
        'label' => __('Couleur icone sociaux', 'theme_tp'),
        'section' => 'notfound',
    )));

    /* ================ ICONES LIENS SOCIAUX ================ */
    $wp_customize->add_section('icons', array(
        'title'    => __('Icones sociaux', 'theme_tp'),
        'priority' => 30,
    ));

    ###################### CONTROLE DU NOMBRE D'IMAGES
    $wp_customize->add_setting('icons_count', array(
        'default'   => 1,
        'transport' => 'refresh',
    ));
    $wp_customize->add_control('icons_count', array(
        'label'   => __("Nombre d'icones", 'theme_tp'),
        'section' => 'icons',
        'type'    => 'number',
        'input_attrs' => array(
            'min' => 1,
            'max' => 10,
            'step' => 1,
        ),
    ));

    $nbIcons = get_theme_mod("icons_count");
    for ($i = 0; $i < $nbIcons; $i++) {
        $wp_customize->add_setting('icon_svg_url_'.$i, array(
            'default' => __('SVG ICONE LIEN'),
            'sanitize_callback' => 'sanitize_text_field'
        ));
        $wp_customize->add_control('icon_svg_url_'.$i, array(
            'label' => __('Lien SVG | Lien redir', 'theme_tp'),
            'section' => 'icons',
            'type' => 'text',
        ));

        $wp_customize->add_setting('icon_url_'.$i, array(
            'default' => __('SVG REDIR LIEN'),
            'sanitize_callback' => 'sanitize_text_field'
        ));
        $wp_customize->add_control('icon_url_'.$i, array(
            'label' => __('', 'theme_tp'),
            'section' => 'icons',
            'type' => 'text',
        ));
    }
}

add_action('customize_register', 'theme_tp_customize_register');
