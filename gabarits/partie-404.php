<?php
$background = get_theme_mod('404_background');
$titre = get_theme_mod('404_title', "Oops, vous avez échoué sur l'île 404 !");
$message = get_theme_mod('404_message', "Pas de panique, cher membre explorateur !");
$couleur = get_theme_mod('404_button_color', '#ffc400');
?>

<section class="erreur-404" style="background-image: url('<?php echo esc_url($background); ?>');">
  <div class="erreur-404__contenu">

    <h1 class="erreur-404__titre"><?php echo esc_html($titre); ?></h1>

    <p class="erreur-404__message"><?php echo esc_html($message); ?></p>

    <a href="<?php echo esc_url(home_url('/')); ?>"
       class="erreur-404__bouton"
       style="background-color: <?php echo esc_attr($couleur); ?>">
      Retour à l'accueil
    </a>

    <nav class="erreur-404__menu">
      <?php wp_nav_menu([
        'theme_location' => 'menu_404',
        'container' => false,
        'menu_class' => '',
        'fallback_cb' => false
      ]); ?>
    </nav>

    <div class="erreur-404__recherche">
      <form action="<?php echo esc_url(home_url('/')); ?>" method="get">
        <input type="text" name="s" placeholder="Rechercher...">
        <button type="submit" style="background-color: <?php echo esc_attr($couleur); ?>">
          <i class="fa-solid fa-magnifying-glass"></i>
        </button>
      </form>
    </div>

  </div>
</section>

