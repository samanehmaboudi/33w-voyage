<?php

$functions_dir = get_template_directory() . '/functions/';


$function_files = array(
  'customizer.php',
  'options.php',
  'generateur.php',
);


foreach ($function_files as $file) {
  include_once $functions_dir . $file;
}


function theme_tp_register_menus() {
  register_nav_menus([
    'menu_404' => __('Menu pour la page 404', 'theme_tp'),
   
  ]);
}
add_action('after_setup_theme', 'theme_tp_register_menus');
