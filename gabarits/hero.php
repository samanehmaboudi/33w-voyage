<?php $hero_title = get_theme_mod('hero_title', 'Default Title'); ?>
<?php $hero_subtitle = get_theme_mod('hero_subtitle', 'Default Title'); ?>
<?php $hero_email = get_theme_mod('hero_email', 'Default Title'); ?>
<?php $hero_phone = get_theme_mod('hero_phone', 'Default Title'); ?>
<?php $hero_background = get_theme_mod('hero_background', 'Default Title'); ?>
<?php $hero_cta_text = get_theme_mod('hero_cta_text', 'Default Title'); ?>
<?php $hero_auteur = get_theme_mod('hero_auteur', 'Default Title'); ?>




<section class="hero" style="background-image: url(<?php echo $hero_background ?>);">
    <div class="hero__contenu">
        <h1 class="hero__titre"><?php echo $hero_title ?></h1>
        <p class="hero__description">
        <?php echo $hero_subtitle ?>
        </p>
        <address class="hero__contact">
            <p>Email : <a href="mailto:<?php echo $hero_email ?>"><?php echo $hero_email ?></a></p>
            <p>Téléphone : <?php echo $hero_phone ?></p>
            <p>Auteur : <?php echo $hero_auteur ?></p>
        </address>
        <button class="hero__bouton"><?php echo $hero_cta_text ?></button>
    </div>
</section>