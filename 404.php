<?php get_header(); ?>

<main class="site__main">
    <section class="erreur-404 global">
        <h1 class="erreur-404__titre">Oups! Cette page n'existe pas...</h1>
        <p class="erreur-404__message">
            Il semble que rien n'ait été trouvé à cet emplacement.<br>
            Vous pouvez revenir à la page d'accueil ou utiliser la barre de recherche ci-dessous.
        </p>

        <div class="erreur-404__recherche">
            <?php get_search_form(); ?>
        </div>

        <a class="erreur-404__retour" href="<?php echo esc_url(home_url('/')); ?>">← Retour à l'accueil</a>
    </section>
</main>

<?php get_footer(); ?>
