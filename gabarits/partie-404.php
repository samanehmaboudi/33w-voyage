<?php
// Récupération des valeurs du Customizer
get_theme_mod('titre_404')
get_theme_mod('message_404')
get_theme_mod('background_404')
get_theme_mod('bouton_couleur_404')

?>

<section class="erreur-404" style="background-image: url('<?php echo esc_url($background); ?>');">
  <div class="erreur-404__contenu">

    <!-- Titre -->
    <h1 class="erreur-404__titre"><?php echo esc_html($titre); ?></h1>

    <!-- Message -->
    <p class="erreur-404__message"><?php echo esc_html($message); ?></p>

    <!-- Bouton retour -->
    <a href="<?php echo esc_url(home_url('/')); ?>"
       class="erreur-404__bouton"
       style="background-color: <?php echo esc_attr($couleur); ?>;">
      Retour à l'accueil
    </a>

    <!-- Menu personnalisé -->
    <nav class="erreur-404__menu">
      <?php
      wp_nav_menu([
        'theme_location' => 'menu_404',
        'container'      => false,
        'menu_class'     => 'erreur-404__liste'
      ]);
      ?>
    </nav>

    <!-- Zone de recherche -->
    <div class="erreur-404__recherche">
      <form action="<?php echo esc_url(home_url('/')); ?>" method="get" class="erreur-404__form">
        <input type="text" name="s" placeholder="Rechercher…" class="erreur-404__input">
        <button type="submit" class="erreur-404__button"
                style="background-color: <?php echo esc_attr($couleur); ?>;">
          Rechercher
        </button>
      </form>
    </div>

  </div>
</section>
