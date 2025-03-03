<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

    <title><?php bloginfo('name'); ?> - <?php is_front_page() ? bloginfo('description') : wp_title(''); ?></title>
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <header class="entete">
        <div class="entete__conteneur">
            <figure class="entete__logo">
                <?php
                if (function_exists('the_custom_logo')) {
                    the_custom_logo();
                } else {
                    echo '<a href="' . esc_url(home_url('/')) . '">' . get_bloginfo('name') . '</a>';
                }
                ?>
            </figure>

            <input type="checkbox" class="entete__toggle" id="menu-checkbox">
            <label for="menu-checkbox" class="entete__burger">☰</label>

            <nav class="entete__menu">
                <?php
                wp_nav_menu(
                    array(
                        'theme_location' => 'header-menu',
                        'menu' => 'principal',
                        'container' => 'nav',
                        'menu_class' => 'menu'
                    )
                );
                ?>
            </nav>

            <form class="entete__recherche" method="get" action="<?php echo home_url('/'); ?>">
                <input type="text" name="s" placeholder="Rechercher" class="recherche__input">
                <button type="submit" class="recherche__btn">
                    <img src="https://s2.svgbox.net/hero-outline.svg?ic=search&color=000" width="16" height="16" alt="Rechercher">
                </button>
            </form>
        </div>
    </header>
    <main class="global">