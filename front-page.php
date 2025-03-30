<?php get_header(); ?>
<section class="hero" style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/maldives.jpg');">
    <div class="hero__contenu">
        <h1 class="hero__titre">Voyagez Autrement avec Mondo Voyages !</h1>
        <p class="hero__description">
            Découvrez des destinations uniques et inoubliables avec Mondo Voyages. Nous vous offrons des expériences authentiques, des voyages à couper le souffle et des aventures sur mesure. Partez à la découverte du monde avec nous et créez des souvenirs impérissables.
        </p>
        <address class="hero__contact">
            <p>Email : <a href="mailto:info@cmaisonneuve.qc.ca">info@cmaisonneuve.qc.ca</a></p>
            <p>Téléphone : 514-254-7131</p>
        </address>
        <button class="hero__bouton">S'INSCRIRE</button>
    </div>
</section>
<section class="formulaire">
    <form class="formulaire__contenu">
        <div class="form__group">
            <label for="nom" class="form__label">Nom</label>
            <input type="text" id="nom" class="hero__form-input" placeholder="Écrivez votre nom">
        </div>
        <div class="form__group">
            <label for="prenom" class="form__label">Prénom</label>
            <input type="text" id="prenom" class="hero__form-input" placeholder="Écrivez votre prénom">
        </div>
        <div class="form__group">
            <label for="courriel" class="form__label">Courriel</label>
            <input type="email" id="courriel" class="hero__form-input" placeholder="Écrivez votre courriel">
        </div>
        <div class="form__group">
            <label for="telephone" class="form__label">Téléphone</label>
            <input type="tel" id="telephone" class="hero__form-input" placeholder="Écrivez votre téléphone">
        </div>
        <div class="form__group">
            <input type="submit" value="S'INSCRIRE" class="hero__form-input">
        </div>
    </form>

    <section class="populaire">
    <div class="global">
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                <?php if (in_category('galerie')) {
                    the_content();
                } else { ?>
                    <?php get_template_part('gabarits/carte'); ?>
                <?php } ?>
        <?php endwhile;
        endif; ?>
    </div>
</section>    
</section>
<section class="populaire global">
    <div class="global">
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                <?php if (in_category('Galerie')) {
                    the_content();
                } else { ?>
                    <?php get_template_part("gabarits/carte");
                    ?>
                <?php } ?>
        <?php endwhile;
        endif; ?>

    </div>

</section>
<section class="destination">
    <h2>Articles de la catégorie</h2>
    <div id="destination__list"></div>
</section>
<?php get_footer(); ?>