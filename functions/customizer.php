<?php
function theme_tp_customize_register($wp_customize) {
    // SECTION : Hero Section
    $wp_customize->add_section('hero_section', array(
        'title'    => __('Section Hero', 'theme_tp'),
        'priority' => 30,
    ));

    // Titre principal
    $wp_customize->add_setting('hero_title', array(
        'default'           => __('Bienvenue sur notre site !', 'theme_tp'),
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('hero_title', array(
        'label'   => __('Titre principal', 'theme_tp'),
        'section' => 'hero_section',
        'type'    => 'text',
    ));

    // Sous-titre
    $wp_customize->add_setting('hero_subtitle', array(
        'default'           => __('Nous vous offrons des voyages inoubliables.', 'theme_tp'),
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('hero_subtitle', array(
        'label'   => __('Sous-titre', 'theme_tp'),
        'section' => 'hero_section',
        'type'    => 'text',
    ));

        // EMAIL
        $wp_customize->add_setting('hero_email', array(
            'default'           => __('email@email.com', 'theme_tp'),
            'sanitize_callback' => 'sanitize_text_field',
        ));
        $wp_customize->add_control('hero_email', array(
            'label'   => __('E-mail', 'theme_tp'),
            'section' => 'hero_section',
            'type'    => 'text',
        ));

           // Phone
           $wp_customize->add_setting('hero_phone', array(
            'default'           => __('444-555-3322', 'theme_tp'),
            'sanitize_callback' => 'sanitize_text_field',
        ));
        $wp_customize->add_control('hero_phone', array(
            'label'   => __('Phone', 'theme_tp'),
            'section' => 'hero_section',
            'type'    => 'text',
        ));
//Ajoute du couleur dans la section hero

$wp_customize->add_setting('hero_couleur', array(
    'default' => '',
    'sanitize_callback' => 'esc_url_raw',
));

$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'hero_couleur', array(
    'label' => __('Hero Couleur', 'theme_tp'),
    'section' => 'hero_section',
)));

    // Image de fond
    $wp_customize->add_setting('hero_background', array(
        'default'           => '',
        'sanitize_callback' => 'esc_url_raw',
    ));
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'hero_background', array(
        'label'   => __('Image de fond', 'theme_tp'),
        'section' => 'hero_section',
    )));

    // Texte du bouton
    $wp_customize->add_setting('hero_cta_text', array(
        'default'           => __('En savoir plus', 'theme_tp'),
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('hero_cta_text', array(
        'label'   => __('Texte du bouton', 'theme_tp'),
        'section' => 'hero_section',
        'type'    => 'text',
    ));

           // Auteur
           $wp_customize->add_setting('hero_auteur', array(
            'default'           => __('Nom dauteur', 'theme_tp'),
            'sanitize_callback' => 'sanitize_text_field',
        ));
        $wp_customize->add_control('hero_auteur', array(
            'label'   => __('Auteur', 'theme_tp'),
            'section' => 'hero_section',
            'type'    => 'text',
        ));
}
add_action('customize_register', 'theme_tp_customize_register');
