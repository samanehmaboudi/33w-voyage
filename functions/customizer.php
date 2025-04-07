<?php
function theme_tp_customize_register($wp_customize) {

   // SECTION : Page 404
$wp_customize->add_section('section_404', array(
    'title'    => __('Page 404', 'theme_tp'),
    'priority' => 31,
));

// Titre 404
$wp_customize->add_setting('404_title', array(
    'default' => __("Oops, vous avez échoué sur l'île 404 !", 'theme_tp'),
    'sanitize_callback' => 'sanitize_text_field',
));
$wp_customize->add_control('404_title', array(
    'label'   => __('Titre 404', 'theme_tp'),
    'section' => 'section_404',
    'type'    => 'text',
));

// Message 404
$wp_customize->add_setting('404_message', array(
    'default' => __("Pas de panique, cher membre explorateur ! Vous avez dérivé un peu trop loin des destinations de rêve que notre club a soigneusement sélectionnées pour vous. Reprenez votre périple en cliquant sur 'Accueil' pour découvrir à nouveau nos voyages d’exception !", 'theme_tp'),
    'sanitize_callback' => 'sanitize_text_field',
));
$wp_customize->add_control('404_message', array(
    'label'   => __('Message 404', 'theme_tp'),
    'section' => 'section_404',
    'type'    => 'textarea',
));

// Image de fond 404
$wp_customize->add_setting('404_background', array(
    'default' => '',
    'sanitize_callback' => 'esc_url_raw',
));
$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, '404_background', array(
    'label'   => __('Image de fond 404', 'theme_tp'),
    'section' => 'section_404',
)));

// Couleur des boutons 404
$wp_customize->add_setting('404_button_color', array(
    'default' => '#ffc400',
    'sanitize_callback' => 'sanitize_hex_color',
));
$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, '404_button_color', array(
    'label'   => __('Couleur des boutons 404', 'theme_tp'),
    'section' => 'section_404',
)));

add_action('customize_register', 'theme_tp_customize_register');
