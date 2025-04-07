<?php
function theme_tp_customize_register($wp_customize) {

  // SECTION : Page 404
  $wp_customize->add_section('section_404', array(
    'title'    => __('Page 404', 'theme_tp'),
    'priority' => 31,
  ));

  // Titre 404
  $wp_customize->add_setting('titre_404', array(
    'default' => __("Oops, vous avez échoué sur l'île 404 !", 'theme_tp'),
    'sanitize_callback' => 'sanitize_text_field',
  ));
  $wp_customize->add_control('titre_404', array(
    'label'   => __('Titre 404', 'theme_tp'),
    'section' => 'section_404',
    'type'    => 'text',
  ));

  // Message 404
  $wp_customize->add_setting('message_404', array(
    'default' => __("Pas de panique, cher membre explorateur ! Vous avez dérivé un peu trop loin des destinations de rêve que notre club a soigneusement sélectionnées pour vous.", 'theme_tp'),
    'sanitize_callback' => 'sanitize_text_field',
  ));
  $wp_customize->add_control('message_404', array(
    'label'   => __('Message 404', 'theme_tp'),
    'section' => 'section_404',
    'type'    => 'textarea',
  ));

  // Image de fond
  $wp_customize->add_setting('background_404', array(
    'default' => '',
    'sanitize_callback' => 'esc_url_raw',
  ));
  $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'background_404', array(
    'label'   => __('Image de fond 404', 'theme_tp'),
    'section' => 'section_404',
  )));

  // Couleur des boutons
  $wp_customize->add_setting('couleur_bouton_404', array(
    'default' => '#ffc400',
    'sanitize_callback' => 'sanitize_hex_color',
  ));
  $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'couleur_bouton_404', array(
    'label'   => __('Couleur des boutons 404', 'theme_tp'),
    'section' => 'section_404',
  )));
}


add_action('customize_register', 'theme_tp_customize_register');



// SECTION : Hero
$wp_customize->add_section('hero_section', array(
    'title'    => __('Section Hero', 'theme_tp'),
    'priority' => 20,
));

// Titre principal
$wp_customize->add_setting('hero_title', array(
    'default' => __('Voyagez Autrement avec Mondo Voyages !', 'theme_tp'),
    'sanitize_callback' => 'sanitize_text_field',
));
$wp_customize->add_control('hero_title', array(
    'label'   => __('Titre principal', 'theme_tp'),
    'section' => 'hero_section',
    'type'    => 'text',
));

// Sous-titre
$wp_customize->add_setting('hero_subtitle', array(
    'default' => __('Découvrez des destinations uniques et inoubliables avec Mondo Voyages.', 'theme_tp'),
    'sanitize_callback' => 'sanitize_text_field',
));
$wp_customize->add_control('hero_subtitle', array(
    'label'   => __('Sous-titre', 'theme_tp'),
    'section' => 'hero_section',
    'type'    => 'textarea',
));

// E-mail
$wp_customize->add_setting('hero_email', array(
    'default' => __('info@mondo-voyages.com', 'theme_tp'),
    'sanitize_callback' => 'sanitize_email',
));
$wp_customize->add_control('hero_email', array(
    'label'   => __('E-mail', 'theme_tp'),
    'section' => 'hero_section',
    'type'    => 'email',
));

// Téléphone
$wp_customize->add_setting('hero_phone', array(
    'default' => __('514-123-4567', 'theme_tp'),
    'sanitize_callback' => 'sanitize_text_field',
));
$wp_customize->add_control('hero_phone', array(
    'label'   => __('Téléphone', 'theme_tp'),
    'section' => 'hero_section',
    'type'    => 'text',
));

// Nom de l’auteur
$wp_customize->add_setting('hero_auteur', array(
    'default' => __('Nom de l’auteur', 'theme_tp'),
    'sanitize_callback' => 'sanitize_text_field',
));
$wp_customize->add_control('hero_auteur', array(
    'label'   => __('Auteur', 'theme_tp'),
    'section' => 'hero_section',
    'type'    => 'text',
));

// Texte du bouton
$wp_customize->add_setting('hero_cta_text', array(
    'default' => __('S’inscrire maintenant', 'theme_tp'),
    'sanitize_callback' => 'sanitize_text_field',
));
$wp_customize->add_control('hero_cta_text', array(
    'label'   => __('Texte du bouton', 'theme_tp'),
    'section' => 'hero_section',
    'type'    => 'text',
));

// Image de fond
$wp_customize->add_setting('hero_background', array(
    'default' => '',
    'sanitize_callback' => 'esc_url_raw',
));
$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'hero_background', array(
    'label'   => __('Image de fond', 'theme_tp'),
    'section' => 'hero_section',
)));

// Couleur du texte (ex : boutons)
$wp_customize->add_setting('hero_couleur', array(
    'default' => '#ffffff',
    'sanitize_callback' => 'sanitize_hex_color',
));
$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'hero_couleur', array(
    'label'   => __('Couleur du texte ou bouton', 'theme_tp'),
    'section' => 'hero_section',
)));
