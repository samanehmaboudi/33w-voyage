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
